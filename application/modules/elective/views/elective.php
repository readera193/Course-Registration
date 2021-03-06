<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>選課作業系統</title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/elective.css') ?>">
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/elective.js') ?>"></script>
    <script type="text/javascript">
        let base_url = function () {
            return "<?= base_url() ?>";
        };
    </script>
</head>
<body>

<div id="container" align="center">
    <h1>選課作業系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <br><br>

    <select id="student_selector">
        <option value>請選擇學生</option>
        <? foreach ($students as $student): ?>
            <option value="<?= $student['學號'] ?>"><?= $student['學號'] . ' ' . $student['姓名'] ?></option>
        <? endforeach; ?>
    </select>
    <br>

    <div class="course-list">
        <table id="optional_course_list" frame="hsides">
            <caption>可加選課程:</caption>
            <tr>
                <th><input type="checkbox" id="optional_select_all" class="select-all"></th>
                <th>課號</th>
                <th>課名</th>
                <th>學分數</th>
            </tr>
        </table>
        <button onclick="enroll()">加選</button>
    </div>

    <div class="course-list">
        <table id="selected_course_list" frame="hsides">
            <caption>已選課程:</caption>
            <tr>
                <th><input type="checkbox" id="selected_select_all" class="select-all"></th>
                <th>課號</th>
                <th>課名</th>
                <th>學分數</th>
            </tr>
        </table>
        <button onclick="drop()">退選</button>
    </div>
</div>

</body>
</html>

