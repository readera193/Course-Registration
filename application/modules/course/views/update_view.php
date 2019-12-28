<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>修改課程資料</title>
</head>
<body>

<div id="container" align="center">
    <h1>修改課程資料</h1>
    <form method="post" action="<?= base_url() ?>course/update_db/<?= $course_data['課號'] ?>">
        <table border="1">
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>課號</td>
                <td><?= $course_data['課號'] ?></td>
            </tr>
            <tr>
                <td>課名</td>
                <td><input type="text" name="課名" value="<?= $course_data['課名'] ?>"></td>
            </tr>
            <tr>
                <td>學分數</td>
                <td><input type="number" name="學分數" value="<?= $course_data['學分數'] ?>"></td>
            </tr>
        </table>
        <input type="submit" value="修改資料">
    </form>
    <button onclick="window.location.assign('<?= base_url() ?>course')">回到課程管理系統頁面</button>
</div>

</body>
</html>
