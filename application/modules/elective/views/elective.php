<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>選課作業系統</title>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/elective.js"></script>
    <script type="text/javascript">
        let base_url = function () {
            return "<?= base_url() ?>";
        };
    </script>
    <style type="text/css">
        .course-list {
            display: inline-block;
            vertical-align: top;
            text-align: center;
            margin: 30px;
        }

        caption {
            text-align: left;
            margin-bottom: 5px;
        }

        table {
            width: 300px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div id="container" align="center">
    <h1>選課作業系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <br><br>

    <form>
        <select id="student_selector" name="student">
            <option value>請選擇學生</option>
            <? foreach ($students as $student): ?>
                <option value="<?= $student['學號'] ?>"><?= $student['學號'] . ' ' . $student['姓名'] ?></option>
            <? endforeach; ?>
        </select>
    </form>

    <div class="course-list">
        <table frame="hsides">
            <caption>可加選課程:</caption>
            <tr class="course-header optional-course-list">
                <th><!--TODO: 全選按鈕--></th>
                <th>課號</th>
                <th>課名</th>
                <th>學分數</th>
            </tr>
        </table>
        <button style="float: right">加選</button>
        <!--TODO: 實作加選按鈕功能-->
    </div>

    <div class="course-list">
        <table frame="hsides">
            <caption>已選課程:</caption>
            <tr class="course-header selected-course-list">
                <th><!--TODO: 全選按鈕--></th>
                <th>課號</th>
                <th>課名</th>
                <th>學分數</th>
            </tr>
        </table>
        <button style="float: right">退選</button>
        <!--TODO: 實作退選按鈕功能-->
    </div>
</div>

</body>
</html>

