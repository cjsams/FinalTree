document.getElementById("leaf").style.color = "green";
document.getElementById("trunk").style.color = "BurlyWood";
document.getElementById("root").style.color = "brown";
document.getElementById("leaf2").style.color = "green";
document.getElementById("trunk2").style.color = "BurlyWood";
document.getElementById("root2").style.color = "brown";


jQuery( document ).ready(function()
{

    $('#leaf2').each(function() {
        var h = $(this).html();
        var index = h.indexOf(' ');
        if(index == -1) {
            index = h.length;
        }
        $(this).html('<span style="color:red;">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
    });

});
