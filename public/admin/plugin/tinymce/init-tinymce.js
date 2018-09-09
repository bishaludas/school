tinymce.init({
			selector: 'textarea.tinymce',
			height: 300,
			theme: 'modern',
			plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
			],
			toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | preview media fullpage | bullist numlist outdent indent | link image',
			toolbar2: 'imageupload',
			setup: function(editor) {
				uploadImageToServer(editor);

				function uploadImageToServer(editor){
		   // create input and insert in the DOM
		   var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
		   $(editor.getElement()).parent().append(inp);

		   // add the image upload button to the editor toolbar
		   editor.addButton('imageupload', {
		   	text: 'Local',
		   	icon: 'image',
		     onclick: function(e) { // when toolbar button is clicked, open file select modal
		     	inp.trigger('click');
		     }
		 });

		   // when a file is selected, upload it to the server
		   inp.on("change", function(e){
		   	uploadFile(this, editor);
		   });
		}
		function uploadFile(inp, editor) {
			var file_data = $(inp).prop('files')[0];   
			var data = new FormData();                  
			data.append('file', file_data);
			
			$.ajax({
				url: 'doUpload.php',
				type: 'POST',
				data: data,
	     processData: false, // Don't process the files
	     contentType: false, // Set content type to false as jQuery will tell the server its a query string request
	     success: function(data, textStatus, jqXHR) {
	     	data = JSON.parse(data);
	     	editor.insertContent('<img class="content-img" src="' + data.url + '"/>');
	     },
	     error: function(jqXHR, textStatus, errorThrown) {
	     	if(jqXHR.responseText) {
	     		errors = JSON.parse(jqXHR.responseText).errors
	     		alert('Error uploading image: ' + errors.join(", ") + '. Make sure the file is an image and has extension jpg/jpeg/png.');
	     	}
	     }
	 });
		}
	},
	image_advtab: true,
	content_css: [
	'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	'//www.tinymce.com/css/codepen.min.css'
	]
});