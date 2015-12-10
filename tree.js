src="jquery-1.11.3.min"

$('#textareaid').bind('keypress', function(e) {
        if(e.keyCode==13){
                // Enter pressed... do anything here...
                   $(this).val(  $(this).val() + "<br/>");


        }
});
