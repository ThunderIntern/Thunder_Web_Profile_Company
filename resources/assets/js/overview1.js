$(document).ready(function() {
          var markupStr = $('.summernote').eq(1).summernote('code');
          });
          $('#Overview1').summernote({
              minHeight:90,
              maxHeight:300,
              placeholder: 'write here...',
              toolbar:[
             ['style',['bold','underline']],
             ['insert',['link']]
             ]
          });