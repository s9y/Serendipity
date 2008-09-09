/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/EditTag/edit-tag.js */
function EditTag(_1){
this.editor=_1;
var _2=_1.config;
var _3=this;
_2.registerButton({id:"edittag",tooltip:this._lc("Edit HTML for selected text"),image:_1.imgURL("ed_edit_tag.gif","EditTag"),textMode:false,action:function(_4){
_3.buttonPress(_4);
}});
_2.addToolbarElement("edittag","htmlmode",1);
}
EditTag._pluginInfo={name:"EditTag",version:"1.0",developer:"Pegoraro Marco",developer_url:"http://www.sin-italia.com/",c_owner:"Marco Pegoraro",sponsor:"Sin Italia",sponsor_url:"http://www.sin-italia.com/",license:"htmlArea"};
EditTag.prototype._lc=function(_5){
return Xinha._lc(_5,"EditTag");
};
EditTag.prototype.buttonPress=function(_6){
outparam={content:_6.getSelectedHTML()};
_6._popupDialog("plugin://EditTag/edit_tag",function(_7){
if(!_7){
return false;
}
_6.insertHTML(_7);
},outparam);
};

