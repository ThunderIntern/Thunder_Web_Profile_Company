$(document).ready(function() {
          var markupStr = $('.summernote').eq(1).summernote('code');
          });
          $('#Overview1').summernote({
              height: 145,                 // set editor height
              width: 800,
              minHeight: 100,             // set minimum height of editor
              maxHeight: 145,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
          });