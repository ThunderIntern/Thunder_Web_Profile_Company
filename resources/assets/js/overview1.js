$(document).ready(function() {
          var markupStr = $('.summernote').eq(1).summernote('code');
          });
          $('#Overview1').summernote({
              height: 200,                 // set editor height
              minHeight: 200,             // set minimum height of editor
              maxHeight: 200,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
          });