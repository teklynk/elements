$('[data-toggle="popover"]').popover();

$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});

let rangeSlider = function () {
    let slider = $('.range-slider'),
        range = $('.range-slider-range'),
        value = $('.range-slider-value');

    slider.each(function () {

        value.each(function () {
            let value = $(this).prev().attr('value');
            $(this).html(value);
        });

        range.on('input', function () {
            $(this).next(value).html(this.value);
        });
    });
};

rangeSlider();

$("#chat_bg_remove_image").click(function() {
    chat_id = $(this).data("id");
    $.ajax({
        url: "/chat/" + chat_id + "/removebgimage",
        success: function(){
            $("#chat_bg_image_preview").remove();
            $("#chat_bg_remove_image").remove();
        }
    });
});

$("#chat_title_font").change(function() {
    let selectedFont = $("#chat_title_font option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#chat_title_font_iframe').attr('src', iframeUrl);
}).change();

$("#chat_username_font").change(function() {
    let selectedFont = $("#chat_username_font option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#chat_username_font_iframe').attr('src', iframeUrl);
}).change();

$("#chat_msg_font").change(function() {
    let selectedFont = $("#chat_msg_font option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#chat_msg_font_iframe').attr('src', iframeUrl);
}).change();

$('#chat_use_twitch_colors').click(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_username_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('input[name=chat_username_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
});

$('#chat_msg_twitch_colors').click(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_msg_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('input[name=chat_msg_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
});

$('#chat_text_shadow').click(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_text_shadow_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=chat_text_shadow_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
});

$('#chat_title_text_shadow').click(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_title_text_shadow_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=chat_title_text_shadow_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
});

$('#chat_template').change(function() {
    if ($(this).val() === '2') {
        $('#gradient-options').show();
    } else {
        $('#gradient-options').hide();
    }
}).change();


//$('input, select, checkbox').change(function() {
//    document.getElementById('chat_preview_iframe').contentDocument.location.reload(true);
//}).change();
