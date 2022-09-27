
    //Documentation: https://www.tiny.cloud/docs-4x/
    tinymce.init({
        selector: '#mytextarea',
        block_formats: 'Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3',
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools wordcount",
            "emoticons",
            "textcolor",
            "fullscreen",
            "codesample",
            "formatpainter"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | emoticons | forecolor backcolor | fullscreen | codesample | formatpainter",
        images_upload_url: 'postAcceptor.php',
        //Specify the directory of the folder where the folder to store the image in
        images_upload_base_path: '/xampp/blogging-project',
        images_upload_credentials: true,
        themes: "modern"
    });