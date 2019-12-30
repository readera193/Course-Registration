<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>修改學生資料</title>
</head>
<body>

<div id="container" align="center">
    <h1>修改學生資料</h1>
    <button onclick="window.location.assign('<?= base_url() ?>student')">回到學生管理系統頁面</button>
    <br><br>
    <form method="post" action="<?= base_url() ?>student/update_db/<?= $student_data['學號'] ?>">
        <table border="1">
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>學號</td>
                <td><?= $student_data['學號'] ?></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="姓名" value="<?= $student_data['姓名'] ?>"></td>
            </tr>
            <tr>
                <td>系碼</td>
                <td><input type="text" name="系碼" value="<?= $student_data['系碼'] ?>"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="修改資料">
    </form>
</div>

</body>
</html>
