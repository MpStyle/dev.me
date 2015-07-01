function Text()
{
    this.serviceName = $('#service_name_hidden').val();
};

Text.prototype.callWS = function () {
    $("#destination_textarea").val('');
    $("#destination_textarea").attr('placeholder','');
    
    var outherThis=this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/TextWebService.php'});
    foo.call(
            outherThis.serviceName
            , {
                text: $("#source_textarea").val()
            }
    , function (data) {
        $("#destination_textarea").val(data.result_text);
    }, function (error) {
    }
    );
};

$(function () {
    var text = new Text();

    $('#source_textarea').keyup(function () {
        text.callWS();
    });
});
