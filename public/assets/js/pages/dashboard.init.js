function SetCountDown(t) {
    var e = new moment($(t).attr("endtime"));
    setInterval(function () {
        var n = new moment(),
            a = moment.duration(e.diff(n));
        let o = a.years() > 0 ? a.years() + " năm " : "",
            c = a.months() > 0 ? a.months() + " tháng " : "",
            r = a.days() > 0 ? a.days() + " ngày " : "",
            i = a.hours() > 0 ? a.hours() + " giờ " : "",
            s = a.minutes() > 0 ? a.minutes() + " phút " : "",
            l = a.seconds() > 0 ? a.seconds() + " giây " : "";
        $(t).html(o + c + r + i + s + l);
    }, 1e3);
};
$.each($(".count-down__time"), function (t, e) {
    SetCountDown(e);
});

$(".conversation-list").scrollTo("100%", "100%", { easing: "swing" }),
    $(".slimScrollBar").css("bottom", "0").css("top", ""),
    $.each($(".count-down__time"), function (t, e) {
        SetCountDown(e);
    });
let switch_them = 1 == theme ? $("#dark-mode-switch").click() : "";
function formatText(t) {
    return (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t =
        (t = t.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a")).replace(
            /è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,
            "e"
        )).replace(/ì|í|ị|ỉ|ĩ/g, "i")).replace(
        /ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,
        "o"
    )).replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u")).replace(
        /ỳ|ý|ỵ|ỷ|ỹ/g,
        "y"
    )).replace(/đ/g, "d")).replace(
        /À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g,
        "A"
    )).replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E")).replace(
        /Ì|Í|Ị|Ỉ|Ĩ/g,
        "I"
    )).replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O")).replace(
        /Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g,
        "U"
    )).replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y")).replace(/Đ/g, "D"))
        .replace(/ /g, "")
        .toLowerCase());
}
function SetCountDown(t) {
    var e = new moment($(t).attr("endtime"));
    setInterval(function () {
        var n = new moment(),
            a = moment.duration(e.diff(n));
        let o = a.years() > 0 ? a.years() + " năm " : "",
            c = a.months() > 0 ? a.months() + " tháng " : "",
            r = a.days() > 0 ? a.days() + " ngày " : "",
            i = a.hours() > 0 ? a.hours() + " giờ " : "",
            s = a.minutes() > 0 ? a.minutes() + " phút " : "",
            l = a.seconds() > 0 ? a.seconds() + " giây " : "";
        $(t).html(o + c + r + i + s + l);
    }, 1e3);
}
$.ajaxSetup({
    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
}),
    $(document).on(
        "change",
        "#dark-mode-switch, #light-mode-switch",
        function () {
            (theme = $("#dark-mode-switch").prop("checked") ? 1 : 0),
                $.ajax({
                    type: "POST",
                    url: upSetUrl,
                    dataType: "json",
                    contentType: "application/json",
                    data: JSON.stringify({ theme: theme }),
                    success: function () {},
                });
        }
    ),
    $("#document-post").on("click", function () {
        let t = $("#document-category").val(),
            e = $("#document-title").val(),
            n = $("#document-content").val();
        e && n && t && "" != e.trim() && "" != n.trim() && "" != t.trim()
            ? $.ajax({
                  type: "POST",
                  url: postDocUrl,
                  dataType: "json",
                  contentType: "application/json",
                  data: JSON.stringify({ category: t, title: e, content: n }),
                  success: function () {
                      $("#document-title").val(""),
                          $("#document-content").val("");
                  },
              })
            : sweetAlert("Error", "Không đủ thông tin");
    }),
    $("#random-number-button").on("click", function () {
        let t = $("input#min-number"),
            e = $("input#max-number"),
            n = $("#generated-number"),
            a = Math.floor(parseInt(e.val()) + 1),
            o = Math.ceil(parseInt(t.val()));
        o <= a &&
            (n.val(Math.floor(Math.random() * (a - o) + o)),
            $.ajax({ type: "GET", url: nbAddUrl, success: function () {} }));
    }),
    $("#name-input").on("change", function () {
        let t = $(this).val();
        $.ajax({
            type: "POST",
            url: uUUrl,
            dataType: "json",
            contentType: "application/json",
            data: JSON.stringify({ old: my_id, username: t }),
            success: function (e) {
                e.status
                    ? (my_id = t)
                    : sweetAlert(
                          "Oops...",
                          "Tên đã có người lấy, hãy chọn tên khác",
                          "error"
                      );
            },
        });
    }),
    $(".copy-btn").on("click", function () {
        let t = $("<input>");
        $("body").append(t),
            t.val($($(this).attr("target")).text().trim()).select(),
            document.execCommand("copy"),
            t.remove();
    }),
    $("#document-search").on("keyup", function () {
        !$("#vanmau-section .category-link#v-all-tab").hasClass("active") &&
            $("#vanmau-section .category-link#v-all-tab").click();
        let t = formatText($(this).val());
        $(".tab-pane#v-all #accordion-all .card")
            .css("display", "none")
            .filter(function (e, n) {
                return (
                    formatText($(n).find(".card-header h6").html()).includes(
                        t
                    ) ||
                    formatText(
                        $(n).find(".card-body.document-content").html()
                    ).includes(t)
                );
            })
            .css("display", "block");
    }),
    $(".document-title").css("padding", ".7rem 1rem"),
    $(".category-link:first-child").addClass("active"),
    $('div[role="tabpanel"]:first-child').addClass("active");
    