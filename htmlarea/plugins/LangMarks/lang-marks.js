// Mask Language plugin for Xinha
// Implementation by Udo Schmal
//
// (c) Udo Schmal & Schaffrath NeueMedien 2004
// Distributed under the same terms as HTMLArea itself.
// This notice MUST stay intact for use (see license.txt).

function LangMarks(editor, args) {
  this.editor = editor;
  var cfg = editor.config;
  var self = this;
  var options = {};
  options[this._lc("&mdash; language &mdash;")] = '';
	for (var i in cfg.LangMarks)
	{
		if (typeof i != 'string') continue;
		options[this._lc(i)] = cfg.LangMarks[i];
	}

  cfg.registerDropdown({
    id	: "langmarks",
    tooltip	: this._lc("language select"),
    options	: options,
    action	: function(editor) { self.onSelect(editor, this); },
    refresh	: function(editor) { self.updateValue(editor, this); }
  });
  cfg.addToolbarElement("langmarks", "inserthorizontalrule", 1);
}

LangMarks._pluginInfo = {
  name          : "LangMarks",
  version       : "1.0",
  developer     : "Udo Schmal",
  developer_url : "",
  sponsor       : "L.N.Schaffrath NeueMedien",
  sponsor_url   : "http://www.schaffrath-neuemedien.de/",
  c_owner       : "Udo Schmal & Schaffrath NeueMedien",
  license       : "htmlArea"
};

Xinha.Config.prototype.LangMarks = {
  "Greek" : "el",
  "English" : "en",
  "French" : "fr",
  "Latin" : "la"
};

LangMarks.prototype._lc = function(string) {
  return Xinha._lc(string, 'LangMarks');
};

LangMarks.prototype.onGenerate = function() {
	 this.editor.addEditorStylesheet(Xinha.getPluginDir("LangMarks") + '/lang-marks.css');
};

LangMarks.prototype.onSelect = function(editor, obj, context, updatecontextclass) {
  var tbobj = editor._toolbarObjects[obj.id];
  var index = tbobj.element.selectedIndex;
  var language = tbobj.element.value;

  // retrieve parent element of the selection
  var parent = editor.getParentElement();
  var surround = true;

  var is_span = (parent && parent.tagName.toLowerCase() == "span");
  var update_parent = (context && updatecontextclass && parent && parent.tagName.toLowerCase() == context);

  if (update_parent) {
    parent.className = "haslang";
    parent.lang = language;
    editor.updateToolbar();
    return;
  }

  if (is_span && index == 0 && !/\S/.test(parent.style.cssText)) {
    while (parent.firstChild) {
      parent.parentNode.insertBefore(parent.firstChild, parent);
    }
    parent.parentNode.removeChild(parent);
    editor.updateToolbar();
    return;
  }

  if (is_span) {
    // maybe we could simply change the class of the parent node?
    if (parent.childNodes.length == 1) {
      parent.className = "haslang";
      parent.lang = language;
      surround = false;
      // in this case we should handle the toolbar updation
      // ourselves.
      editor.updateToolbar();
    }
  }

  // Other possibilities could be checked but require a lot of code.  We
  // can't afford to do that now.
  if (surround) {
    // shit happens ;-) most of the time.  this method works, but
    // it's dangerous when selection spans multiple block-level
    // elements.
    editor.surroundHTML('<span lang="' + language + '" class="haslang">', '</span>');
  }
};

LangMarks.prototype.updateValue = function(editor, obj) {
  var select = editor._toolbarObjects[obj.id].element;
  var parents = editor.getAllAncestors();
  var parent;
	for (var i=0;i<parents.length;i++)
	{
		if (parents[i].lang) parent = parents[i];
	}
	if (parent) {
    var options = select.options;
    var value = parent.lang;
    for (var i = options.length; --i >= 0;) {
      var option = options[i];
      if (value == option.value) {
        select.selectedIndex = i;
        return;
      }
    }
  }
  else select.selectedIndex = 0;

};