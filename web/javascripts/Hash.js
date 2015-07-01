function Hash()
{
    this.serviceName = $('#service_name_hidden').val();
};

Hash.prototype.callWS = function () {
    $("#destination_textarea").val('');
    $("#destination_textarea").attr('placeholder','');
    
    var outherThis=this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/HashWebService.php'});
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
    var hash = new Hash();

    $('#source_textarea').keyup(function () {
        hash.callWS();
    });
});
