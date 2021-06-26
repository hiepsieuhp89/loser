! function(t) {
    "use strict";
    var o = function() {
        this.$body = t("body"), this.$todoContainer = t("#todo-container"), this.$todoMessage = t("#todo-message"), this.$todoRemaining = t("#todo-remaining"), this.$todoTotal = t("#todo-total"), this.$archiveBtn = t("#btn-archive"), this.$todoList = t("#todo-list"), this.$todoDonechk = ".todo-done", this.$todoForm = t("#todo-form"), this.$todoInput = t("#todo-input-text"), this.$todoBtn = t("#todo-btn-submit"), this.$todoCompletedData = [], this.$todoUnCompletedData = [],
            this.$todoData = mtodolist;
    };

    o.prototype.markTodo = function(t, o) {
        for (var e = 0; e < this.$todoData.length; e++) this.$todoData[e].id == t && (this.$todoData[e].done = o)
    }, o.prototype.addTodo = function(t) {
        this.$todoData.push({
            id: '' + moment(),
            text: t,
            done: !1
        }), this.generate()
    }, o.prototype.archives = function() {
        this.$todoUnCompletedData = [];
        for (var t = 0; t < this.$todoData.length; t++) {
            var o = this.$todoData[t];
            1 == o.done ? this.$todoCompletedData.push(o) : this.$todoUnCompletedData.push(o)
        }
        this.$todoData = [], this.$todoData = [].concat(this.$todoUnCompletedData), this.generate()
    }, o.prototype.generate = function() {
        this.$todoList.html("");
        for (var t = 0, o = 0; o < this.$todoData.length; o++) {
            var e = this.$todoData[o];
            1 == e.done ? this.$todoList.prepend('<li class="list-group-item border-0 pl-1"><div class="checkbox checkbox-primary"><input class="todo-done" id="' + e.id + '" type="checkbox" checked><label for="' + e.id + '">' + e.text + "</label></div></li>") : (t += 1, this.$todoList.prepend('<li class="list-group-item border-0 pl-1"><div class="checkbox checkbox-primary"><input class="todo-done" id="' + e.id + '" type="checkbox"><label for="' + e.id + '">' + e.text + "</label></div></li>"))
        }
        this.$todoTotal.text(this.$todoData.length), this.$todoRemaining.text(t)
    }, o.prototype.init = function() {
        var o = this;
        this.generate(), this.$archiveBtn.on("click", function(t) {
                return t.preventDefault(), o.archives(), !1,
                    $.ajax({
                        type: 'POST',
                        url: todoUrl,
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify(o.$todoData),
                        success: function() {
                            // o.$todoData = mtodolist;
                            // o.generate();
                        }
                    })
            }), t(document).on("change", this.$todoDonechk, function() {
                this.checked ? o.markTodo(t(this).attr("id"), !0) : o.markTodo(t(this).attr("id"), !1), o.generate(),
                    $.ajax({
                        type: 'POST',
                        url: todoUrl,
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify(o.$todoData),
                        success: function() {
                            // o.$todoData = mtodolist;
                            // o.generate();
                        }
                    })
            }), this.$todoBtn.on("click", function() {
                "" == o.$todoInput.val() || void 0 === o.$todoInput.val() || null == o.$todoInput.val() ? (sweetAlert("Không đủ thông tin", "error"), o.$todoInput.focus()) : o.addTodo(o.$todoInput.val()), $.ajax({
                    type: 'POST',
                    url: todoUrl,
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify(o.$todoData),
                    success: function() {

                    }
                })
            }),
            $("#todo-input-text").keyup(function(event) {
                if (event.keyCode === 13) {
                    "" == o.$todoInput.val() || void 0 === o.$todoInput.val() || null == o.$todoInput.val() ? (sweetAlert("Không đủ thông tin", "error"), o.$todoInput.focus()) : o.addTodo(o.$todoInput.val()), $.ajax({
                        type: 'POST',
                        url: todoUrl,
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify(o.$todoData),
                        success: function() {}
                    }), $("#todo-input-text").val('')
                }
            })
    }, t.TodoApp = new o, t.TodoApp.Constructor = o
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.TodoApp.init()
}();