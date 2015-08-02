function ShowHexColor()
{
    $('#source_text').keyup(function(){
        var color=$("#source_text").val();        
        $("#color_container").css('background-color', color );
    });
};

$(function(){
    var showHexColor=new ShowHexColor();
});