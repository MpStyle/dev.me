function DateConverter()
{
    var outerThis = this;
    this.serviceName = $('#service_name_hidden').val();

    if ($('#datetimepicker5').length > 0)
    {
        $('#datetimepicker5').datetimepicker({
            format: 'YYYY/MM/DD HH:mm:ss',
            defaultDate: "2015/01/01 13:00:00"
        });

        $("#datetimepicker5").on("dp.change", function(e) {
            outerThis.callWS();
        });

        outerThis.callWS();
    }
    
    $('#format_select').change(function () {
        outerThis.callWS();
    });

    $('#source_text').keyup(function () {
        outerThis.callWS();
    });
}

DateConverter.prototype.callWS = function () {
    var $formatSelect = $('#format_select');
    var $sourceText = $('#source_text');

    if ($formatSelect.val() === '' || $sourceText.val() === '')
    {
        return;
    }

    $("#destination_text").val('');
    $("#destination_text").attr('placeholder', '');

    var outherThis = this;
    var foo = new $.JsonRpcClient({ajaxUrl: 'web/web_services/DateConverterWebService.php'});
    foo.call(
            outherThis.serviceName
            , {
                text: $("#source_text").val()
                , format: $("#format_select").val()
            }
    , function (data) {
        $("#destination_text").val(data.result_text);

        if ($('#datetimepicker5').length > 0)
        {
            $('#source_textarea_container').removeClass("has-success");
            $('#source_textarea_container').removeClass("has-error");

            switch (data.isValid)
            {
                case true:
                    $('#source_text_container').addClass("has-success");
                    break;
                case false:
                    $('#source_text_container').addClass("has-error");
                    break;
            }
        }
    }, function (error) {
    }
    );
};
