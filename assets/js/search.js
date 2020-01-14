let default_query = {
    'unselected': "",
    'student_select_num':
        "SELECT student.學號, 姓名, COUNT(elective.課號) AS 選科目數\n" +
        "FROM 學生資料表 AS student, 選課資料表 AS elective\n" +
        "WHERE student.學號=elective.學號 \n" +
        "GROUP BY student.學號\n",
    'course_selected_num':
        "SELECT course.課號, course.課名, COUNT(student.學號) AS 選修人數\n" +
        "FROM 課程資料表 AS course, 學生資料表 AS student, 選課資料表 AS elective\n" +
        "WHERE student.學號=elective.學號 AND course.課號=elective.課號\n" +
        "GROUP BY elective.課號\n",
    'student_avg_grade':
        "SELECT student.學號, 姓名, ROUND(AVG(elective.成績), 2) AS 平均成績\n" +
        "FROM 學生資料表 AS student, 選課資料表 AS elective\n" +
        "WHERE student.學號=elective.學號 \n" +
        "GROUP BY student.學號\n",
    'course_avg_grade':
        "SELECT course.課號, course.課名, ROUND(AVG(elective.成績), 2) AS 平均分數\n" +
        "FROM 選課資料表 AS elective, 課程資料表 AS course\n" +
        "WHERE course.課號=elective.課號\n" +
        "GROUP BY course.課號\n",
    'elective':
        "SELECT student.學號, 姓名, 課名, 成績\n" +
        "FROM 學生資料表 AS student, 課程資料表 AS course, 選課資料表 AS elective\n" +
        "WHERE student.學號=elective.學號 AND course.課號=elective.課號\n" +
        "ORDER BY student.學號 ASC",
};

$(function () {
    $("#query_selector").on('change', function () {
        let query_selector = $("#query_selector").prop('value');
        $("#query").prop('value', default_query[query_selector]);
    });
});

