/**********************************************************
 Very minorly modified from the example by Tim Taylor
 http://tool-man.org/examples/sorting.html

 Added Coordinate.prototype.inside( northwest, southeast );

    Copyright (c) 2005 Tim Taylor Consulting <http://tool-man.org/>

    Permission is hereby granted, free of charge, to any person obtaining a
    copy of this software and associated documentation files (the "Software"),
    to deal in the Software without restriction, including without limitation
    the rights to use, copy, modify, merge, publish, distribute, sublicense,
    and/or sell copies of the Software, and to permit persons to whom the
    Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included
    in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
    OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
    FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
    IN THE SOFTWARE.
 **********************************************************/

var Coordinates = {
    ORIGIN : new Coordinate(0, 0),

    northwestPosition : function(element) {
        var x = parseInt(element.style.left);
        var y = parseInt(element.style.top);

        return new Coordinate(isNaN(x) ? 0 : x, isNaN(y) ? 0 : y);
    },

    southeastPosition : function(element) {
        return Coordinates.northwestPosition(element).plus(
                new Coordinate(element.offsetWidth, element.offsetHeight));
    },

    northwestOffset : function(element, isRecursive) {
        var offset = new Coordinate(element.offsetLeft, element.offsetTop);

        if (!isRecursive) return offset;

        var parent = element.offsetParent;
        while (parent) {
            offset = offset.plus(
                    new Coordinate(parent.offsetLeft, parent.offsetTop));
            parent = parent.offsetParent;
        }
        return offset;
    },

    southeastOffset : function(element, isRecursive) {
        return Coordinates.northwestOffset(element, isRecursive).plus(
                new Coordinate(element.offsetWidth, element.offsetHeight));
    },

    fixEvent : function(event) {
        event.windowCoordinate = new Coordinate(event.clientX, event.clientY);
    }
};

function Coordinate(x, y) {
    this.x = x;
    this.y = y;
}

Coordinate.prototype.toString = function() {
    return "(" + this.x + "," + this.y + ")";
}

Coordinate.prototype.plus = function(that) {
    return new Coordinate(this.x + that.x, this.y + that.y);
}

Coordinate.prototype.minus = function(that) {
    return new Coordinate(this.x - that.x, this.y - that.y);
}

Coordinate.prototype.distance = function(that) {
    var deltaX = this.x - that.x;
    var deltaY = this.y - that.y;

    return Math.sqrt(Math.pow(deltaX, 2) + Math.pow(deltaY, 2));
}

Coordinate.prototype.max = function(that) {
    var x = Math.max(this.x, that.x);
    var y = Math.max(this.y, that.y);
    return new Coordinate(x, y);
}

Coordinate.prototype.constrain = function(min, max) {
    if (min.x > max.x || min.y > max.y) return this;

    var x = this.x;
    var y = this.y;

    if (min.x != null) x = Math.max(x, min.x);
    if (max.x != null) x = Math.min(x, max.x);
    if (min.y != null) y = Math.max(y, min.y);
    if (max.y != null) y = Math.min(y, max.y);

    return new Coordinate(x, y);
}

Coordinate.prototype.reposition = function(element) {
    element.style["top"] = this.y + "px";
    element.style["left"] = this.x + "px";
}

Coordinate.prototype.equals = function(that) {
    if (this == that) return true;
    if (!that || that == null) return false;

    return this.x == that.x && this.y == that.y;
}

// returns true of this point is inside specified box
Coordinate.prototype.inside = function(northwest, southeast) {
    if ((this.x >= northwest.x) && (this.x <= southeast.x) &&
        (this.y >= northwest.y) && (this.y <= southeast.y)) {

        return true;
    }
    return false;
}

/*
 * drag.js - click & drag DOM elements
 *
 * originally based on Youngpup's dom-drag.js, www.youngpup.net
 */

/**********************************************************
 Further modified from the example by Tim Taylor
 http://tool-man.org/examples/sorting.html

 Changed onMouseMove where it calls group.onDrag and then
 adjusts the offset for changes to the DOM.  If the item
 being moved changed parents it would be off so changed to
 get the absolute offset (recursive northwestOffset).

 **********************************************************/

var Drag = {
    BIG_Z_INDEX : 10000,
    group : null,
    isDragging : false,

    makeDraggable : function(group) {
        group.handle = group;
        group.handle.group = group;

        group.minX = null;
        group.minY = null;
        group.maxX = null;
        group.maxY = null;
        group.threshold = 0;
        group.thresholdY = 0;
        group.thresholdX = 0;

        group.onDragStart = new Function();
        group.onDragEnd = new Function();
        group.onDrag = new Function();

        // TODO: use element.prototype.myFunc
        group.setDragHandle = Drag.setDragHandle;
        group.setDragThreshold = Drag.setDragThreshold;
        group.setDragThresholdX = Drag.setDragThresholdX;
        group.setDragThresholdY = Drag.setDragThresholdY;
        group.constrain = Drag.constrain;
        group.constrainVertical = Drag.constrainVertical;
        group.constrainHorizontal = Drag.constrainHorizontal;

        group.onmousedown = Drag.onMouseDown;
    },

    constrainVertical : function() {
        var nwOffset = Coordinates.northwestOffset(this, true);
        this.minX = nwOffset.x;
        this.maxX = nwOffset.x;
    },

    constrainHorizontal : function() {
        var nwOffset = Coordinates.northwestOffset(this, true);
        this.minY = nwOffset.y;
        this.maxY = nwOffset.y;
    },

    constrain : function(nwPosition, sePosition) {
        this.minX = nwPosition.x;
        this.minY = nwPosition.y;
        this.maxX = sePosition.x;
        this.maxY = sePosition.y;
    },

    setDragHandle : function(handle) {
        if (handle && handle != null) {
            this.handle = handle;
        } else {
            this.handle = this;
        }

        this.handle.group = this;
        this.onmousedown = null;
        // this.onclick = Drag.toggleMe;
        // this.handle.onclick = Drag.toggleMe;
        this.handle.onmousedown = Drag.onMouseDown;
    },

    toggleMe : function(str) {
        alert('Toggle: ' + str);
    },

    setDragThreshold : function(threshold) {
        if (isNaN(parseInt(threshold))) return;

        this.threshold = threshold;
    },

    setDragThresholdX : function(threshold) {
        if (isNaN(parseInt(threshold))) return;

        this.thresholdX = threshold;
    },

    setDragThresholdY : function(threshold) {
        if (isNaN(parseInt(threshold))) return;

        this.thresholdY = threshold;
    },

    onMouseDown : function(event) {
        event = Drag.fixEvent(event);
        Drag.group = this.group;

        var group = this.group;
        var mouse = event.windowCoordinate;
        var nwOffset = Coordinates.northwestOffset(group, true);
        var nwPosition = Coordinates.northwestPosition(group);
        var sePosition = Coordinates.southeastPosition(group);
        var seOffset = Coordinates.southeastOffset(group, true);

        group.originalOpacity = group.style.opacity;
        group.originalZIndex = group.style.zIndex;
        group.initialWindowCoordinate = mouse;
        // TODO: need a better name, but don't yet understand how it
        // participates in the magic while dragging
        group.dragCoordinate = mouse;

        Drag.showStatus(mouse, nwPosition, sePosition, nwOffset, seOffset);

        group.onDragStart(nwPosition, sePosition, nwOffset, seOffset);

        // TODO: need better constraint API
        if (group.minX != null)
            group.minMouseX = mouse.x - nwPosition.x +
                    group.minX - nwOffset.x;
        if (group.maxX != null)
            group.maxMouseX = group.minMouseX + group.maxX - group.minX;

        if (group.minY != null)
            group.minMouseY = mouse.y - nwPosition.y +
                    group.minY - nwOffset.y;
        if (group.maxY != null)
            group.maxMouseY = group.minMouseY + group.maxY - group.minY;

        group.mouseMin = new Coordinate(group.minMouseX, group.minMouseY);
        group.mouseMax = new Coordinate(group.maxMouseX, group.maxMouseY);

        document.onmousemove = Drag.onMouseMove;
        document.onmouseup = Drag.onMouseUp;

        return false;
    },

    showStatus : function(mouse, nwPosition, sePosition, nwOffset, seOffset) {
        /*window.status =
                "mouse: " + mouse.toString() + "    " +
                "NW pos: " + nwPosition.toString() + "    " +
                "SE pos: " + sePosition.toString() + "    " +
                "NW offset: " + nwOffset.toString() + "    " +
                "SE offset: " + seOffset.toString();*/
    },

    onMouseMove : function(event) {
        event = Drag.fixEvent(event);
        var group = Drag.group;
        var mouse = event.windowCoordinate;
        var nwOffset = Coordinates.northwestOffset(group, true);
        var nwPosition = Coordinates.northwestPosition(group);
        var sePosition = Coordinates.southeastPosition(group);
        var seOffset = Coordinates.southeastOffset(group, true);

        Drag.showStatus(mouse, nwPosition, sePosition, nwOffset, seOffset);

        if (!Drag.isDragging) {
            if (group.threshold > 0) {
                var distance = group.initialWindowCoordinate.distance(
                        mouse);
                if (distance < group.threshold) return true;
            } else if (group.thresholdY > 0) {
                var deltaY = Math.abs(group.initialWindowCoordinate.y - mouse.y);
                if (deltaY < group.thresholdY) return true;
            } else if (group.thresholdX > 0) {
                var deltaX = Math.abs(group.initialWindowCoordinate.x - mouse.x);
                if (deltaX < group.thresholdX) return true;
            }

            Drag.isDragging = true;
            group.style["zIndex"] = Drag.BIG_Z_INDEX;
            group.style["opacity"] = 0.75;
        }

        // TODO: need better constraint API
        var adjusted = mouse.constrain(group.mouseMin, group.mouseMax);
        nwPosition = nwPosition.plus(adjusted.minus(group.dragCoordinate));
        nwPosition.reposition(group);
        group.dragCoordinate = adjusted;

        // once dragging has started, the position of the group
        // relative to the mouse should stay fixed.  They can get out
        // of sync if the DOM is manipulated while dragging, so we
        // correct the error here
        //
        // TODO: what we really want to do is find the offset from
        // our corner to the mouse coordinate and adjust to keep it
        // the same

        // changed to be recursive/use absolute offset for corrections
        var offsetBefore = Coordinates.northwestOffset(group, true);
        group.onDrag(nwPosition, sePosition, nwOffset, seOffset);
        var offsetAfter = Coordinates.northwestOffset(group, true);

        if (!offsetBefore.equals(offsetAfter)) {
            var errorDelta = offsetBefore.minus(offsetAfter);
            nwPosition = Coordinates.northwestPosition(group).plus(errorDelta);
            nwPosition.reposition(group);
        }

        return false;
    },

    onMouseUp : function(event) {
        event = Drag.fixEvent(event);
        var group = Drag.group;

        var mouse = event.windowCoordinate;
        var nwOffset = Coordinates.northwestOffset(group, true);
        var nwPosition = Coordinates.northwestPosition(group);
        var sePosition = Coordinates.southeastPosition(group);
        var seOffset = Coordinates.southeastOffset(group, true);

        document.onmousemove = null;
        document.onmouseup   = null;
        group.onDragEnd(nwPosition, sePosition, nwOffset, seOffset);

        if (Drag.isDragging) {
            // restoring zIndex before opacity avoids visual flicker in Firefox
            group.style["zIndex"] = group.originalZIndex;
            group.style["opacity"] = group.originalOpacity;
        }

        Drag.group = null;
        Drag.isDragging = false;

        return false;
    },

    fixEvent : function(event) {
        if (typeof event == 'undefined') event = window.event;
        Coordinates.fixEvent(event);

        return event;
    }
};

/**********************************************************
 Adapted from the sortable lists example by Tim Taylor
 http://tool-man.org/examples/sorting.html
 Modified by Tom Westcott : http://www.cyberdummy.co.uk
 **********************************************************/

var DragDrop = {
    firstContainer : null,
    lastContainer : null,
    parent_id : null,
    parent_group : null,
    makeListContainer : function(list, group) {
        // each container becomes a linked list node
        if (this.firstContainer == null) {
            this.firstContainer = this.lastContainer = list;
            list.previousContainer = null;
            list.nextContainer = null;
        } else {
            list.previousContainer = this.lastContainer;
            list.nextContainer = null;
            this.lastContainer.nextContainer = list;
            this.lastContainer = list;
        }

        // these functions are called when an item is draged over
        // a container or out of a container bounds.  onDragOut
        // is also called when the drag ends with an item having
        // been added to the container
        list.onDragOver = new Function();
        list.onDragOut = new Function();
                list.onDragDrop = new Function();
                list.group = group;

        var items = list.getElementsByTagName( "li" );

        for (var i = 0; i < items.length; i++) {
            DragDrop.makeItemDragable(items[i]);
        }
    },

    serData : function ( group, theid ) {
        var container = DragDrop.firstContainer;
        var j = 0;
        var string = "";

        while (container != null) {
            if(theid != null && container.id != theid) {
              container = container.nextContainer;
              continue;
            }

            if(group != null && container.group != group) {
              container = container.nextContainer;
              continue;
            }

            j ++;
            if (j > 1) {
              string += ":";
            }
            string += container.id;

            var items = container.getElementsByTagName( "li" );
            string += "(";
            for (var i = 0; i < items.length; i++) {
                if(i > 0) {
                    string += ",";
                }

                string += items[i].id;
            }
            string += ")";

            container = container.nextContainer;
        }

        return string;
    },

    makeItemDragable : function(item) {
        Drag.makeDraggable(item);
        item.setDragThreshold(5);

        // tracks if the item is currently outside all containers
        item.isOutside = false;

        item.onDragStart = DragDrop.onDragStart;
        item.onDrag = DragDrop.onDrag;
        item.onDragEnd = DragDrop.onDragEnd;

        item.setDragHandle(document.getElementById('g' + item.id));
    },

    onDragStart : function(nwPosition, sePosition, nwOffset, seOffset) {
        // update all container bounds, since they may have changed
        // on a previous drag
        //
        // could be more smart about when to do this
        var container = DragDrop.firstContainer;
        while (container != null) {
            container.northwest = Coordinates.northwestOffset( container, true );
            container.southeast = Coordinates.southeastOffset( container, true );
            container = container.nextContainer;
        }

        // item starts out over current parent
        this.parentNode.onDragOver();
        parent_id = this.parentNode.id;
        parent_group = this.parentNode.group;
    },

    onDrag : function(nwPosition, sePosition, nwOffset, seOffset) {
        // check if we were nowhere
        if (this.isOutside) {
            // check each container to see if in its bounds
            var container = DragDrop.firstContainer;
            while (container != null) {

                if ((nwOffset.inside( container.northwest, container.southeast ) ||
                    seOffset.inside( container.northwest, container.southeast )) && container.group == parent_group) {
                    // we're inside this one
                    container.onDragOver();
                    this.isOutside = false;

                    // since isOutside was true, the current parent is a
                    // temporary clone of some previous container node and
                    // it needs to be removed from the document
                    var tempParent = this.parentNode;
                    tempParent.removeChild( this );
                    container.appendChild( this );
                    tempParent.parentNode.removeChild( tempParent );
                    break;
                }
                container = container.nextContainer;
            }
            // we're still not inside the bounds of any container
            if (this.isOutside)
                return;

        // check if we're outside our parent's bounds
        } else if (!(nwOffset.inside( this.parentNode.northwest, this.parentNode.southeast ) ||
            seOffset.inside( this.parentNode.northwest, this.parentNode.southeast ))) {

            this.parentNode.onDragOut();
            this.isOutside = true;

            // check if we're inside a new container's bounds
            var container = DragDrop.firstContainer;
            while (container != null) {
                if ((nwOffset.inside( container.northwest, container.southeast ) ||
                    seOffset.inside( container.northwest, container.southeast )) && container.group == parent_group) {
                    // we're inside this one
                    container.onDragOver();
                    this.isOutside = false;
                    this.parentNode.removeChild( this );
                    container.appendChild( this );
                    break;
                }
                container = container.nextContainer;
            }
            // if we're not in any container now, make a temporary clone of
            // the previous container node and add it to the document
            if (this.isOutside) {
                var tempParent = this.parentNode.cloneNode( false );
                this.parentNode.removeChild( this );
                tempParent.appendChild( this );
                // body puts a border or item at bottom of page if do not have this
                                tempParent.style.border = 0;
                document.getElementsByTagName( "body" ).item(0).appendChild( tempParent );
                return;
            }
        }

        // if we get here, we're inside some container bounds, so we do
        // everything the original dragsort script did to swap us into the
        // correct position

        var parent = this.parentNode;

        var item = this;
        var next = DragUtils.nextItem(item);
        while (next != null && this.offsetTop >= next.offsetTop - 2) {
            var item = next;
            var next = DragUtils.nextItem(item);
        }
        if (this != item) {
            DragUtils.swap(this, next);
            return;
        }

        var item = this;
        var previous = DragUtils.previousItem(item);
        while (previous != null && this.offsetTop <= previous.offsetTop + 2) {
            var item = previous;
            var previous = DragUtils.previousItem(item);
        }
        if (this != item) {
            DragUtils.swap(this, item);
            return;
        }
    },

    onDragEnd : function(nwPosition, sePosition, nwOffset, seOffset) {
        // if the drag ends and we're still outside all containers
        // it's time to remove ourselves from the document or add
                // to the trash bin
        if (this.isOutside) {
            var container = DragDrop.firstContainer;
            while (container != null) {
               if (container.id == parent_id) {
                 break;
               }
               container = container.nextContainer;
            }
            this.isOutside = false;
            this.parentNode.removeChild( this );
            container.appendChild( this );
            this.style["top"] = "0px";
            this.style["left"] = "0px";
            //var container = DragDrop.firstContainer;
            //container.appendChild( this );
            return;
        }
        this.parentNode.onDragOut();
        this.parentNode.onDragDrop();
        this.style["top"] = "0px";
        this.style["left"] = "0px";
    }
};

var DragUtils = {
    swap : function(item1, item2) {
        var parent = item1.parentNode;
        parent.removeChild(item1);
        parent.insertBefore(item1, item2);

        item1.style["top"] = "0px";
        item1.style["left"] = "0px";
    },

    nextItem : function(item) {
        var sibling = item.nextSibling;
        while (sibling != null) {
            if (sibling.nodeName == item.nodeName) return sibling;
            sibling = sibling.nextSibling;
        }
        return null;
    },

    previousItem : function(item) {
        var sibling = item.previousSibling;
        while (sibling != null) {
            if (sibling.nodeName == item.nodeName) return sibling;
            sibling = sibling.previousSibling;
        }
        return null;
    }
};

/*************************
 * Custom Serendipity code
 *************************/

function pluginMoverInit() {
    var list = document.getElementById("left_col");
    DragDrop.makeListContainer(list, 'g1');
    list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
    list.onDragOut = function() { this.style["border"] = "none"; };

    list = document.getElementById("hide_col");
    DragDrop.makeListContainer(list, 'g1');
    list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
    list.onDragOut = function() {this.style["border"] = "none"; };

    list = document.getElementById("right_col");
    DragDrop.makeListContainer(list, 'g1');
    list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
    list.onDragOut = function() {this.style["border"] = "none"; };
}

function pluginMoverInitEvent() {
    var list = document.getElementById("event_col");
    DragDrop.makeListContainer(list, 'g1');
    list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
    list.onDragOut = function() { this.style["border"] = "none"; };

    list = document.getElementById("eventh_col");
    DragDrop.makeListContainer(list, 'g1');
    list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
    list.onDragOut = function() {this.style["border"] = "none"; };
}

function pluginMovergetSort() {
  order = document.getElementById("order");
  order.value = DragDrop.serData('g1', null);
  return order.value;
}

function pluginMovergetSortEvent() {
  order = document.getElementById("eventorder");
  order.value = DragDrop.serData('g1', null);
  return order.value;
}

/**************************************************
 * dom-drag.js
 * 09.25.2001
 * www.youngpup.net
 **************************************************
 * 10.28.2001 - fixed minor bug where events
 * sometimes fired off the handle, not the root.
 **************************************************/

var DOMDrag = {

    obj : null,

    init : function(o, oRoot, minX, maxX, minY, maxY, bSwapHorzRef, bSwapVertRef, fXMapper, fYMapper) {
        o.onmousedown = DOMDrag.start;

        o.hmode       = bSwapHorzRef ? false : true ;
        o.vmode       = bSwapVertRef ? false : true ;

        o.root = oRoot && oRoot != null ? oRoot : o ;

        if (o.hmode  && isNaN(parseInt(o.root.style.left  ))) o.root.style.left   = "0px";
        if (o.vmode  && isNaN(parseInt(o.root.style.top   ))) o.root.style.top    = "0px";
        if (!o.hmode && isNaN(parseInt(o.root.style.right ))) o.root.style.right  = "0px";
        if (!o.vmode && isNaN(parseInt(o.root.style.bottom))) o.root.style.bottom = "0px";

        o.minX  = typeof minX != 'undefined' ? minX : null;
        o.minY  = typeof minY != 'undefined' ? minY : null;
        o.max   = typeof maxX != 'undefined' ? maxX : null;
        o.maxY  = typeof maxY != 'undefined' ? maxY : null;

        o.xMapper = fXMapper ? fXMapper : null;
        o.yMapper = fYMapper ? fYMapper : null;

        o.root.onDragStart  = new Function();
        o.root.onDragEnd    = new Function();
        o.root.onDrag       = new Function();
    },

    start : function(e) {
        var o = DOMDrag.obj = this;
        e = DOMDrag.fixE(e);
        var y = parseInt(o.vmode ? o.root.style.top  : o.root.style.bottom);
        var x = parseInt(o.hmode ? o.root.style.left : o.root.style.right );
        o.root.onDragStart(x, y);

        o.lastMouseX = e.clientX;
        o.lastMouseY = e.clientY;

        if (o.hmode) {
            if (o.minX != null) o.minMouseX = e.clientX - x + o.minX;
            if (o.maxX != null) o.maxMouseX = o.minMouseX + o.maxX - o.minX;
        } else {
            if (o.minX != null) o.maxMouseX = -o.minX + e.clientX + x;
            if (o.maxX != null) o.minMouseX = -o.maxX + e.clientX + x;
        }

        if (o.vmode) {
            if (o.minY != null) o.minMouseY	= e.clientY - y + o.minY;
            if (o.maxY != null) o.maxMouseY	= o.minMouseY + o.maxY - o.minY;
        } else {
            if (o.minY != null) o.maxMouseY = -o.minY + e.clientY + y;
            if (o.maxY != null) o.minMouseY = -o.maxY + e.clientY + y;
        }

        document.onmousemove = DOMDrag.drag;
        document.onmouseup   = DOMDrag.end;

        return false;
    },

    drag : function(e) {
        e = DOMDrag.fixE(e);
        var o = DOMDrag.obj;

        var ey = e.clientY;
        var ex = e.clientX;
        var y  = parseInt(o.vmode ? o.root.style.top  : o.root.style.bottom);
        var x  = parseInt(o.hmode ? o.root.style.left : o.root.style.right );
        var nx, ny;

        if (o.minX != null) ex = o.hmode ? Math.max(ex, o.minMouseX) : Math.min(ex, o.maxMouseX);
        if (o.maxX != null) ex = o.hmode ? Math.min(ex, o.maxMouseX) : Math.max(ex, o.minMouseX);
        if (o.minY != null) ey = o.vmode ? Math.max(ey, o.minMouseY) : Math.min(ey, o.maxMouseY);
        if (o.maxY != null) ey = o.vmode ? Math.min(ey, o.maxMouseY) : Math.max(ey, o.minMouseY);

        nx = x + ((ex - o.lastMouseX) * (o.hmode ? 1 : -1));
        ny = y + ((ey - o.lastMouseY) * (o.vmode ? 1 : -1));

        if (o.xMapper)      nx = o.xMapper(y)
        else if (o.yMapper) ny = o.yMapper(x)

        DOMDrag.obj.root.style[o.hmode ? "left" : "right"] = nx + "px";
        DOMDrag.obj.root.style[o.vmode ? "top" : "bottom"] = ny + "px";
        DOMDrag.obj.lastMouseX = ex;
        DOMDrag.obj.lastMouseY = ey;

        DOMDrag.obj.root.onDrag(nx, ny);
        return false;
    },

    end : function() {
        document.onmousemove = null;
        document.onmouseup   = null;
        DOMDrag.obj.root.onDragEnd(    parseInt(DOMDrag.obj.root.style[DOMDrag.obj.hmode ? "left" : "right"]),
                                    parseInt(DOMDrag.obj.root.style[DOMDrag.obj.vmode ? "top" : "bottom"]));
        DOMDrag.obj = null;
    },

    fixE : function(e) {
        if (typeof e == 'undefined')        e = window.event;
        if (typeof e.layerX == 'undefined') e.layerX = e.offsetX;
        if (typeof e.layerY == 'undefined') e.layerY = e.offsetY;
        return e;
    }
};