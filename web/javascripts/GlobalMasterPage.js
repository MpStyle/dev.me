function GlobalMasterPage()
{
    $('[data-toggle="tooltip"]').tooltip();
    
    $("#menu *[data-keywords]").each(function(){
        $(this).parent('ul').parent('li').data('keywords', $(this).data('keywords'));
    });
}
;

GlobalMasterPage.prototype.functionalitySearch=function(search)
{
    // If "search" is empty, it shows every items of the menù
    if(search.length<=0)
    {
        $("#menu *[data-keywords], #menu li").show();
        return;
    }
    
    var searchedWords=search.toLowerCase().split(' ');
    
    $("#menu *[data-keywords], #menu li").each(function(){
        console.log($(this).data("keywords"));
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
    if ($('#menu_container').is(':hidden'))
    {
        $("#menu_container").hide();
        $("#menu_container").removeClass("hidden-xs");
    }

    $("#menu_container").toggle(function () {
        if ($('#menu_container').is(':hidden'))
        {
            $("#menu_container").addClass("hidden-xs");
            $("#menu_container").show();
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