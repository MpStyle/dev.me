function Hash()
{
    var outerThis = this;
    this.serviceName = $('#service_name_hidden').val();
    
    $('#source_textarea').keyup(function () {
        outerThis.callWS();
    });
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


