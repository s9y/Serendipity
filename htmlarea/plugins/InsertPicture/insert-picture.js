/* This compressed file is part of Xinha. For uncompressed sources, forum, and bug reports, go to xinha.org */
/* This file is part of version 0.95 released Mon, 12 May 2008 17:33:15 +0200 */
/* The URL of the most recent version of this file is http://svn.xinha.webfactional.com/trunk/plugins/InsertPicture/insert-picture.js */
function InsertPicture(_1){
if(typeof _editor_picturePath!=="string"){
_editor_picturePath=Xinha.getPluginDir("InsertPicture")+"/demo_pictures/";
}
InsertPicture.Scripting="php";
_1.config.URIs.insert_image="../plugins/InsertPicture/InsertPicture."+InsertPicture.Scripting+"?picturepath="+_editor_picturePath;
}
InsertPicture._pluginInfo={name:"InsertPicture",version:"1.0.2",developer:"Udo Schmal",developer_url:"http://www.Schaffrath-NeueMedien.de/",sponsor:"L.N.Schaffrath NeueMedien",sponsor_url:"http://www.schaffrath-neuemedien.de/",c_owner:"Udo Schmal",license:"htmlArea"};

