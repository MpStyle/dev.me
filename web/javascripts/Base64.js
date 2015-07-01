function Base64()
{
    this.serviceName = $('#service_name_hidden').val();
};

Base64.prototype.callWS = function () {
    $("#destination_textarea").val('');
    $("#destination_textarea").attr('placeholder','');
    
    var outherThis=this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/Base64WebService.php'});
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
    var base64 = new Base64();

    $('#source_textarea').keyup(function () {
        base64.callWS();
    });
});
