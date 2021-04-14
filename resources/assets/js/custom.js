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

//Chat
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

$('#chat_use_twitch_colors').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_username_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('input[name=chat_username_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
}).change();

$('#chat_msg_twitch_colors').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_msg_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('input[name=chat_msg_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
}).change();

$('#chat_text_shadow').change(function() {
    console.log($(this).prop('checked'));
    if ($(this).prop('checked') === true) {
        $('input[name=chat_text_shadow_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=chat_text_shadow_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#chat_title_text_shadow').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=chat_title_text_shadow_color]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=chat_title_text_shadow_color]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#chat_template').change(function() {
    if ($(this).val() === '2') {
        $('#gradient-options').show();
    } else {
        $('#gradient-options').hide();
    }
}).change();

//Overlay
$("#overlay_msg_font_1").change(function() {
    let selectedFont = $("#overlay_msg_font_1 option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#overlay_msg_iframe_1').attr('src', iframeUrl);
}).change();

$("#overlay_msg_font_2").change(function() {
    let selectedFont = $("#overlay_msg_font_2 option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#overlay_msg_iframe_2').attr('src', iframeUrl);
}).change();

$("#overlay_msg_font_3").change(function() {
    let selectedFont = $("#overlay_msg_font_3 option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#overlay_msg_iframe_3').attr('src', iframeUrl);
}).change();

$("#overlay_msg_font_4").change(function() {
    let selectedFont = $("#overlay_msg_font_4 option:selected").val();
    let iframeUrl = "../../fontpreview?font=" + selectedFont;
    $('iframe#overlay_msg_iframe_4').attr('src', iframeUrl);
}).change();

$('#show_more_messages').click(function() {
    $('#overlay_messages').toggle();
    $(this).text($(this).html() === 'Hide' ? 'Show More' : 'Hide');
});

$('#overlay_msg_gradient_1').change(function() {
    if ($(this).prop('checked') === true) {
        $('#msg-gradient_1').css('display', 'block');
        $('input[name=overlay_msg_color_1]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('#msg-gradient_1').css('display', 'none');
        $('input[name=overlay_msg_color_1]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
}).change();

$('#overlay_msg_gradient_2').change(function() {
    if ($(this).prop('checked') === true) {
        $('#msg-gradient_2').css('display', 'block');
        $('input[name=overlay_msg_color_2]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('#msg-gradient_2').css('display', 'none');
        $('input[name=overlay_msg_color_2]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
}).change();

$('#overlay_msg_gradient_3').change(function() {
    if ($(this).prop('checked') === true) {
        $('#msg-gradient_3').css('display', 'block');
        $('input[name=overlay_msg_color_3]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('#msg-gradient_3').css('display', 'none');
        $('input[name=overlay_msg_color_3]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
}).change();

$('#overlay_msg_gradient_4').change(function() {
    if ($(this).prop('checked') === true) {
        $('#msg-gradient_4').css('display', 'block');
        $('input[name=overlay_msg_color_4]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    } else {
        $('#msg-gradient_4').css('display', 'none');
        $('input[name=overlay_msg_color_4]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    }
}).change();

$('#overlay_msg_border_1').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_border_color_1]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_border_color_1]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_border_2').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_border_color_2]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_border_color_2]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_border_3').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_border_color_3]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_border_color_3]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_border_4').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_border_color_4]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_border_color_4]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_shadow_1').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_shadow_color_1]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_shadow_color_1]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_shadow_2').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_shadow_color_2]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_shadow_color_2]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_shadow_3').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_shadow_color_3]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_shadow_color_3]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$('#overlay_msg_shadow_4').change(function() {
    if ($(this).prop('checked') === true) {
        $('input[name=overlay_msg_shadow_color_4]').removeClass('disabled').removeAttr('disabled').removeAttr('readonly');
    } else {
        $('input[name=overlay_msg_shadow_color_4]').val('').addClass('disabled').attr('disabled', 'disabled').attr('readonly', 'readonly');
    }
}).change();

$("#overlay_bg_remove_image").click(function() {
    overlay_id = $(this).data("id");
    $.ajax({
        url: "/overlay/" + overlay_id + "/removebgimage",
        success: function(){
            $("#overlay_bg_image_preview").remove();
            $("#overlay_bg_remove_image").remove();
        }
    });
});