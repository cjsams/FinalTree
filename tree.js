$('#content').click(function() {
    $('form').removeClass('hidden');
    $('#content').addClass('hidden');
});

$('#textareaid').bind('keypress', function(e) {
        if(e.keyCode==13){
                // Enter pressed... do anything here...
                   $(this).val(  $(this).val() + "<br/>");


        }
});
