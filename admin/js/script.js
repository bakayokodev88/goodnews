
$(document).ready(function () {
   $("#home a:contains('Home')").addClass('active');
   $("#posts a:contains('Articles')").addClass('active');
   $("#NewPost a:contains('New article')").addClass('active');
   $("#draft a:contains('Draft')").addClass('active');
   $("#comments a:contains('Comments')").addClass('active');
   $("#account a:contains('My account')").addClass('active');


});

/*====================Summernote script=======================*/
$('.summernote').summernote({
    height: 300,
    minHeight: null,
    maxHeight: null
});
/*====================Summernote script End=======================*/

/*======================bs-custom-file-input======================*/
document.addEventListener('DOMContentLoaded', function() {

    bsCustomFileInput.init();
    var btn = document.getElementById('btnResetForm');

    var form = document.querySelector('form');

    btn.addEventListener('click', function () {

        form.reset()

    })

});
/*======================bs-custom-file-input End==================*/
