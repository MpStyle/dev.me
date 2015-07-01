function GlobalMasterPage()
{
}
;

GlobalMasterPage.prototype.functionalitySearch=function(search)
{
    // If "search" is empty, it shows every items of the menù
    if(search.length<=0)
    {
        $("#menu *[data-keywords]").show();
        return;
    }
    
    var searchedWords=search.toLowerCase().split(' ');
    
    $("#menu *[data-keywords]").each(function(){
        var keywords=$(this).data("keywords").split(' ');
        var found=false;
        
        for (var i=0; i<searchedWords.length && !found; i++)
        {
            for (var j=0; j<keywords.length && !found; j++)
            {
                if( keywords[j].indexOf(searchedWords[i])!==-1 )
                {
                    found=found || true;
                }
            }    
        }
        
        if( found )
        {
            $(this).show();
        }
        else
        {
            $(this).hide();
        }
    });
};

GlobalMasterPage.prototype.toggleMenu = function ()
{
    if ($('#menu').is(':hidden'))
    {
        $("#menu").hide();
        $("#menu").removeClass("hidden-xs");
    }

    $("#menu").toggle(function () {
        if ($('#menu').is(':hidden'))
        {
            $("#menu").addClass("hidden-xs");
            $("#menu").show();
        }
    });
    $("#content").toggle();
};

$(function () {
    var globalMasterPage = new GlobalMasterPage();

    $("#toggle_menu").click(function () {
        globalMasterPage.toggleMenu();
    });
    
    $('#search_functionality_text').keyup(function(){
        globalMasterPage.functionalitySearch($(this).val());
    });
});