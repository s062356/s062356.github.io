CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Replace,Save,NewPage,Preview,Print,Templates,SelectAll,Scayt,Find,Form,Checkbox,Radio,TextField,Textarea,Select,ImageButton,HiddenField,Button,CreateDiv,BidiLtr,BidiRtl,Language,Smiley,PageBreak,Iframe,Flash,BGColor,TextColor,About';
	//config.filebrowserUploadUrl = 'http://59.125.154.98:48080/polycell/pub/be/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'; //上傳頁籤
	config.filebrowserBrowseUrl = 'http://59.125.154.98:48080/polycell/pub/be/ckfinder/ckfinder.html';


};