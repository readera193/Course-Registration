$(function () {
    $("#student_selector").on("change", function () {
        $(".course").remove();
        let student_id = $("#student_selector").prop('value');

        // 選項"請選擇學生"(未選擇)
        if (!student_id) {
            return;
        }

        $.ajax({
            url: base_url() + "elective/ajax_get_courses",
            type: "POST",
            data: {'student_id': student_id},
            dataType: "json",
            success: function (course_content) {
                $(".optional-course-list").append(course_content['optional']);
                $(".selected-course-list").append(course_content['selected']);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            },
        });
    })
});

function enroll() {
    let student_id = $("#student_selector").prop('value');
    $(".optional-course-list").find("input").each(function (index, checkbox) {
        if ($(checkbox).prop('checked')) {
            let course_id = $(checkbox).prop('value');
            $.ajax({
                url: base_url() + "elective/enroll",
                type: "POST",
                data: {
                    'student_id': student_id,
                    'course_id': course_id,
                },
                dataType: "json",
                success: function (result) {
                    if (result) {
                        // 移動課程資料到"已選課程"清單
                        $(checkbox).prop('checked', false);
                        let course_tr = $(checkbox).parents('tr.course');
                        $(".selected-course-list").append(course_tr.remove());
                    } else {
                        alert(course_id + "加選失敗");
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.responseText);
                },
            });
        }
    });
}

function drop() {

}