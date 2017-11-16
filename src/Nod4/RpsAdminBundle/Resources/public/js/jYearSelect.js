
$(document).on('change', '#year', function () {
    $.ajax({
        url: YEARCHANGE_PATH,
        data: 'year=' + $('#year').val(),
        cache: false,
        beforeSend: function () {
            data = "<div class='col-sm-offset-4'><img src='/web/images/loader.gif'></div>";
            $('#newsCol').html(data);
        },
        complete: function (data) {

            $('#newsCol').html(data.responseText);

        }
    });
});
