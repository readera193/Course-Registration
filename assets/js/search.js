let default_query = {
    'unselected': "",
    'elective': "SELECT student.學號, 姓名, 課名, 成績\n" +
        "FROM 學生資料表 AS student, 選課資料表 AS elective, 課程資料表 AS course\n" +
        "WHERE student.學號=elective.學號 AND elective.課號=course.課號\n",
};

$(function () {
    $("#query_selector").on('change', function () {
        let query_selector = $("#query_selector").prop('value');
        $("#query").prop('value', default_query[query_selector]);
    });
});

