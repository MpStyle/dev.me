function Color()
{
    var outerThis = this;
    this.serviceName = $('#service_name_hidden').val();
    
    $('#source_text').keyup(function () {
        outerThis.callWS();
    });
};

Color.prototype.callWS = function () {
    $("#destination_text").val('');
    $("#destination_text").attr('placeholder','');
    
    var outherThis=this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/ColorWebService.php'});
    foo.call(
            outherThis.serviceName
            , {
                color: $("#source_text").val()
            }
    , function (data) {
        $("#destination_text").val(data.result_text);
        $('#source_text_container').removeClass("has-success");
        $('#source_text_container').removeClass("has-error");
        
        switch(data.isValid)
        {
            case true:
                $('#source_text_container').addClass("has-success");
                
                switch(outherThis.serviceName)
                {
                    case 'rgbToHex':
                        $('#color_container').css('background-color', data.result_text);
                        break;
                    case 'hexToRgb':
                        $('#color_container').css('background-color', $("#source_text").val());
                        break;
                }
                
                break;
            case false:
                $('#source_text_container').addClass("has-error");
                break;
        }
    }, function (error) {
    }
    );
};


