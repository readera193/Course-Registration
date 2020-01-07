$(function () {
    $("#student_selector").on("change", function () {
        $(".course-header").nextAll().remove();
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
                $(".optional-course-list").after(course_content['optional']);
                $(".selected-course-list").after(course_content['selected']);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            },
        });
    })
});

