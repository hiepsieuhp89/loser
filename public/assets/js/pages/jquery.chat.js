! function(s) {
    "use strict";
    var t = function() {
        this.$body = s("body"), this.$chatInput = s(".chat-input"), this.$chatList = s(".conversation-list"), this.$chatSendBtn = s(".chat-send")
    };
    var pusher = new Pusher('6358cad807c2e259fec7', {
        cluster: 'ap1',
        forceTLS: true
    });
    var channel = pusher.subscribe('message-channel');
    channel.bind('send-message', function(data) {
        //gửi
        if (my_id == data.from) {

            $('i[refer="' + data.id + '"]').html('');

        } else { //nhận

            s('<li class="clearfix"><div class="chat-avatar"><img src="assets/images/users/avatar-1.jpg" alt="male"><i></i></div><div class="conversation-text"><div class="ctext-wrap"><i>' + data.from + '</i><p>' + data.message + "</p></div></div></li>").appendTo(".conversation-list");

            s(".conversation-list").scrollTo("100%", "100%", {
                easing: "swing"
            });
        }
    });
    t.prototype.save = function() {
        var t = this.$chatInput.val(),
            k = moment(),
            i = k.format("h:mm");
        $.ajax({
            type: 'POST',
            url: sendMessage,
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify({
                'id': '' + k,
                'user_id': my_id,
                'message': t
            }),
            success: function() {}
        })

        "" == t ? (sweetAlert("Oops...", "Chưa nhập nội dung", "error"), this.$chatInput.focus()) : (s('<li class="clearfix odd"><div class="chat-avatar"><img src="assets/images/users/avatar-1.jpg" alt="male"><i refer="' + k + '">...</i></div><div class="conversation-text"><div class="ctext-wrap"><i>Bạn (' + my_id + ')</i><p>' + t + "</p></div></div></li>").appendTo(".conversation-list"), this.$chatInput.val(""), this.$chatInput.focus(), this.$chatList.scrollTo("100%", "100%", {
            easing: "swing"
        }))
    }, t.prototype.init = function() {
        var i = this;
        i.$chatInput.keypress(function(t) {
            if (13 == t.which) return i.save(), !1
        }), i.$chatSendBtn.click(function(t) {
            return i.save(), !1
        })
    }, s.ChatApp = new t, s.ChatApp.Constructor = t
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.ChatApp.init()
}();