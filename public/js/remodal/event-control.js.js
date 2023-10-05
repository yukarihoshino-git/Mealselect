function addEvent(calendar,info){

    // タイトルの値を受け取る処理は、説明を簡潔にするために割愛し、適当な値を与えておきます
    var title = "サンプルイベント";

    $.ajax({
        url: '/ajax/addEvent',
        type: 'POST',
        dataTape: 'json',
        data:{
            "title":title,
            // 日程取得
            "date":info.dateStr

        }
    }).done(function(result) {
        // Ajaxに成功したらフロント側にeventを追加で表示
        calendar.addEvent({
            // PHP側から受け取ったevent_idをeventObjectのidにセット
            id:result['event_id'],
            title:title,
            start: info.dateStr,
        });
    });
}

function editEventDate(info){
    var event_id = info.event.id;
    //ドロップしたあとの日付
    var date = formatDate(info.event.start);

    $.ajax({
        url: '/ajax/editEventDate',
        type: 'POST',
        data:{
            "id":event_id,
            "newDate":date
        }
    })
}

function formatDate(date) {
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var newDate = year + '-' + month + '-' + day;
    return newDate;
}
//info.event.startの日付を"2019-12-12"のように整形する関数
