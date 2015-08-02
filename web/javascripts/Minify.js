function Minify()
{
    var outerThis = this;
    this.serviceName = $('#service_name_hidden').val();

    $('#source_textarea').keyup(function () {
        outerThis.callWS();
    });
};
 
Minify.prototype.callWS = function () {
    $("#destination_textarea").val('');
    $("#destination_textarea").attr('placeholder','');
    
    var outherThis=this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/MinifyWebService.php'});
    foo.call(
            outherThis.serviceName
            , {
                text: $("#source_textarea").val()
            }
    , function (data) {
        $("#destination_textarea").val(data.result_text);
        $('#source_textarea_container').removeClass("has-success");
        $('#source_textarea_container').removeClass("has-error");
        
        switch(data.isValid)
        {
            case true:
                $('#source_textarea_container').addClass("has-success");
                break;
            case false:
                $('#source_textarea_container').addClass("has-error");
                break;
        }
    }, function (error) {
    }
    );
};

$(function () {
    var minify = new Minify();
});
