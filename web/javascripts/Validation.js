function Validation()
{
    this.serviceName = $('#service_name_hidden').val();
};

Validation.prototype.callWS = function () {    
    var outherThis=this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/ValidationWebService.php'});
    foo.call(
            outherThis.serviceName
            , {
                text: $("#source_textarea").val()
            }
    , function (data) {
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
    var validation = new Validation();

    $('#source_textarea').keyup(function () {
        validation.callWS();
    });
});
