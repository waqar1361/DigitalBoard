$(document).ready(function () {
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
});

function notify(message) {
    $.notify({
        // options
        icon: 'fas fa-check',
        message: message
    }, {
        // settings
        type: "success",
        // allow_dismiss: true,
        placement:
            {
                from: "bottom",
                align: "right"
            },
        offset: {
            x: 10,
            y: 50,
        },
        spacing: 2,
        delay: 2500,
        template:
            '<div data-notify="container" class="col-xs-11 col-sm-3 alert bg-dark" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span class="text-justify" data-notify="message">{2}</span>' +
            '<div class="progress" style="height: 1px;" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
    });
}

function notify3(message) {
    $.notify({
        // options
        icon: 'fa fa-check',
        message: message
    }, {
        // settings
        type: "success",
        // allow_dismiss: true,
        placement:
            {
                from: "bottom",
                align: "right"
            },
        offset: {
            x: 10,
            y: 50,
        },
        spacing: 2,
        delay: 2500,
        template:
            '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            // '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span class="text-justify" data-notify="message">{2}</span>' +
            '<div class="progress" style="height: 1px;" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
    });
}

function copyToClipboard(text) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();
}

$('.copy-link').on('click', function (event) {
    event.preventDefault();
    copyToClipboard($(this).attr('href'));
    notify('Text Copied!');
});
