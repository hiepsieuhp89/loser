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
    let k = $('#document-category').val();
    let t = $('#document-title').val();
    let c = $('#document-content').val();
    if (!t || !c || !k || t.trim() == '' || c.trim() == '' || k.trim() == '')
        sweetAlert("Error", "Không đủ thông tin");
    else
        $.ajax({
            type: 'POST',
            url: postDocUrl,
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify({
                'category': k,
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
$('#document-search').on('keyup', function() {

    !$('#vanmau-section .category-link#v-all-tab').hasClass('active') ?
        $('#vanmau-section .category-link#v-all-tab').click() : '';

    let key = formatText($(this).val());
    $('.tab-pane#v-all #accordion-all .card').css('display', 'none').filter(function(id, ele) {
        return formatText($(ele).find('.card-header h6').html()).includes(key) || formatText($(ele).find('.card-body.document-content').html()).includes(key);

    }).css('display', 'block');
})

$('.document-title').css('padding', '.7rem 1rem');
$('.category-link:first-child').addClass('active');
$('div[role="tabpanel"]:first-child').addClass('active');

function formatText(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    str = str.replace(/ /g, '').toLowerCase();
    return str;
}