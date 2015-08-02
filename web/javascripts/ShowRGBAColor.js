function ShowRGBAColor()
{
    $('#source_text').keyup(function(){
        var color=$("#source_text").val();
        var count = (color.match(/,/g) || []).length;
        
        if( count===2 )
        {
            color=color+',1.0';
        }
        
        $("#color_container").css('background-color', 'rgba('+color+')');
    });
};

