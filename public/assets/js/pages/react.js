const SetCountDown = (t) => {
    var e = new moment(t);
    var n = new moment(),
        a = moment.duration(e.diff(n));
    let o = a.years() > 0 ? a.years() + " năm " : "",
        c = a.months() > 0 ? a.months() + " tháng " : "",
        r = a.days() > 0 ? a.days() + " ngày " : "",
        i = a.hours() > 0 ? a.hours() + " giờ " : "",
        s = a.minutes() > 0 ? a.minutes() + " phút " : "",
        l = a.seconds() > 0 ? a.seconds() + " giây " : "";
    return o + c + r + i + s + l;
};
const formatTime = (a) => {
    return new moment(a, "YYYY-MM-DD hh:mm:ss").locale('vi').format('dddd, MMMM Do YYYY, h:mm:ss a');
}
const CountDown = (props) => {
    return (
        <div className="col-xl-4">
            <div className="page-title-box">
                <div className="count-down" style={{backgroundImage : `gradient( rgb(0 0 0 / 0%), rgba(0, 0, 0, 0.7) ),url(${props.background})`}}>
                    <div className="count-down__title">{props.name}</div>
                    <div className="count-down__endTime">{formatTime(props.time)}</div>
                    <div endtime={props.time} className="count-down__time">
                        {SetCountDown(props.time)}
                    </div>
                </div>
            </div>
        </div>
    );
};
var elements = [];
var countdowns;

$.ajax({
    type: "get",
    url: countDownUrl,
    success: function (data) {
        countdowns = data;
    },
}),
setInterval(function () {

    elements = countdowns.map(countdown => {
        return <CountDown
            name= {countdown.title}
            time= {countdown.endTime}
            background={countdown.background}
        />;
    }),
    ReactDOM.render(
        elements,
        document.getElementById("countdown-section")
    );
}, 1e3);
