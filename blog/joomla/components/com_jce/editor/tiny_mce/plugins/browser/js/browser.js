/* JCE Editor - 2.5.0 beta4 | 04 March 2015 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2015 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
var BrowserDialog={settings:{},init:function(ed){var action="insert";$('button#insert').click(function(e){BrowserDialog.insert();e.preventDefault();});tinyMCEPopup.resizeToInnerSize();var win=tinyMCEPopup.getWindowArg("window");var src=tinyMCEPopup.getWindowArg("url");$.Plugin.init();if(/(:\/\/|www|index.php(.*)\?option)/gi.test(src)){src='';}
if(src){src=tinyMCEPopup.editor.convertURL(src);$('#insert').button('option','label',tinyMCEPopup.getLang('update','Update',true));}
$('<input type="hidden" id="src" value="'+src+'" />').appendTo(document.body);WFFileBrowser.init('#src',{onFileClick:function(e,file){BrowserDialog.selectFile(file);},onFileInsert:function(e,file){BrowserDialog.selectFile(file);},expandable:false});},insert:function(){var win=tinyMCEPopup.getWindowArg("window");var src=$('#src').val();if(src===""){var selected=WFFileBrowser.getSelectedItems();if(selected.length){this.selectFile(selected[0]);src=$('#src').val();}}
win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value=src;tinyMCEPopup.close();},selectFile:function(file){var self=this;var name=file.title;var src=$(file).data('url');src=src.charAt(0)=='/'?src.substring(1):src;$('#src').val(src);}};tinyMCEPopup.onInit.add(BrowserDialog.init,BrowserDialog);