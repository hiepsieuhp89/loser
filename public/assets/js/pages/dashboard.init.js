$(".conversation-list").scrollTo("100%", "100%", {
    easing: "swing"
});
$('.slimScrollBar').css('bottom', '0').css('top', '');
let switch_them = theme == 1 ? $("#dark-mode-switch").click() : '';

$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

$(document).on('change', "#dark-mode-switch, #light-mode-switch", function() {

    theme = $("#dark-mode-switch").prop('checked') ? 1 : 0;

    $.ajax({
        type: 'POST',
        url: upSetUrl,
        dataType: 'json',
        contentType: 'application/json',
        data: JSON.stringify({
            'theme': theme,
        }),
        success: function() {

        }
    })
})
$('#document-post').on('click', function() {
    let t = $('#document-title').val();
    let c = $('#document-content').val();
    if (!t || !c || t.trim() == '' || c.trim() == '')
        sweetAlert("Không đủ thông tin", "error");
    else
        $.ajax({
            type: 'POST',
            url: postDocUrl,
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify({
                'title': t,
                'content': c
            }),
            success: function() {
                $('#document-title').val('');
                $('#document-content').val('');
            }
        })
});
$('#random-number-button').on('click', function() {
    let min_element = $('input#min-number');
    let max_element = $('input#max-number');
    let generated_number__element = $('#generated-number');

    let max = Math.floor(parseInt(max_element.val()) + 1);
    let min = Math.ceil(parseInt(min_element.val()));

    //let generated_number = Math.floor(Math.random() * (max - min) + min);
    if (min <= max) {
        generated_number__element.val(Math.floor(Math.random() * (max - min) + min));
        $.ajax({
            type: 'GET',
            url: nbAddUrl,
            success: function() {}
        })
    }
});
$('#name-input').on('change', function() {
    let name = $(this).val();
    $.ajax({
        type: 'POST',
        url: uUUrl,
        dataType: 'json',
        contentType: 'application/json',
        data: JSON.stringify({
            'old': my_id,
            'username': name,
        }),
        success: function(data) {
            if (!data.status)
                sweetAlert("Oops...", "Tên đã có người lấy, hãy chọn tên khác", "error");
            else {
                my_id = name;
            }
        }
    })
})
$('.copy-btn').on('click', function() {

    let cpy = $('<input>');

    $('body').append(cpy);

    cpy.val($($(this).attr('target')).text().trim()).select();

    document.execCommand('copy');

    cpy.remove();
})

$('.category-link:first-child').addClass('active');
$('div[role="tabpanel"]:first-child').addClass('active');