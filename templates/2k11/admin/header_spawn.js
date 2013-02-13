// I have no idea what this does. Anybody?
function spawn() {
    if (self.Spawnextended) {
        Spawnextended();
    }

    if (self.Spawnbody) {
        Spawnbody();
    }

    if (self.Spawnnugget) {
        Spawnnugget();
    }
}

// Generic function to set cookies. Duh.
function SetCookie(name, value) {
    var today  = new Date();
    var expire = new Date();
    expire.setTime(today.getTime() + (60*60*24*30*1000));
    document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
}

// Some sort of onload wrapper? @onli says jQuery can help with this
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            oldonload();
            func();
        }
    }
}
