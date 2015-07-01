function GlobalMasterPage()
{
    $("#toggle_menu").click(function () {      
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
    });
}
;

$(function () {
    var globalMasterPage = new GlobalMasterPage();
});