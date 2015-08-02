function GlobalMasterPage()
{
    var outerThis = this;
    $('[data-toggle="tooltip"]').tooltip();

    $("#sidebar_menu *[data-keywords]").each(function () {
        var keywords = $(this).data('keywords') + $(this).parent('ul').parent('li').data('keywords');
        $(this).parent('ul').parent('li').data('keywords', keywords);
    });

    $("#toggle_menu, #dark_side_of_menu").click(function () {
        outerThis.toggleMenu();
    });

    $('#search_functionality_text').keyup(function () {
        outerThis.functionalitySearch($(this).val());
    });
    outerThis.functionalitySearch($('#search_functionality_text').val());

    outerThis.webApp();
    
    var hash=window.location.hash.replace('#','');
    outerThis.loadPage(hash);
}

GlobalMasterPage.prototype.webApp = function ()
{
    var outerThis = this;
    $("#sidebar_menu li a").each(function () {
        $(this).data("href", $(this).attr("href"));
        $(this).attr("href", "#");

        $(this).click(function () {
            outerThis.loadPage($(this).data("href"));
        });
    });
};

GlobalMasterPage.prototype.loadPage = function (url) {
    $.get(url, function(data) {
        var $data=$(data);
        document.title = $data.filter('title').text();        
        $("#content").html($(data).filter("#container").find("#content").html());
        window.location.hash=url;
    }, "html");
};

GlobalMasterPage.prototype.functionalitySearch = function (search)
{
    // If "search" is empty, every items of the menu will be diplayed
    if (search.length <= 0)
    {
        $("#sidebar_menu *[data-keywords], #sidebar_menu li").show();
        return;
    }

    var searchedWords = search.toLowerCase().split(' ');


    $("#sidebar_menu *[data-keywords], #sidebar_menu li").each(function () {
        var keywords = $(this).data("keywords").split(' ');
        var found = false;

        for (var i = 0; i < searchedWords.length && !found; i++)
        {
            for (var j = 0; j < keywords.length && !found; j++)
            {
                if (keywords[j].indexOf(searchedWords[i]) !== -1)
                {
                    found = found || true;
                }
            }
        }

        if (found === true)
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
    if ($('#sidebar').is(':hidden'))
    {
        $("#sidebar").hide();
        $("#sidebar").removeClass("hidden-xs");
        $("#dark_side_of_menu").show();
    }

    $("#sidebar").toggle(function () {
        if ($('#sidebar').is(':hidden'))
        {
            $("#sidebar").addClass("hidden-xs");
            $("#sidebar").show();
            $("#dark_side_of_menu").hide();
        }
    });
};

$(function () {
    var globalMasterPage = new GlobalMasterPage();
});
