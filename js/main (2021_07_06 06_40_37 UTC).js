$(function() {
   
    $(".form-control1").on('focus', function(){

        $(this).parents(".form-group1").addClass('focused');

    });

    $(".form-control1").on('blur', function(){

        $(this).parents(".form-group1").removeClass('focused');

    });

});