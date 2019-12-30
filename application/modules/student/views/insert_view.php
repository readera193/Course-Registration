<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>新增學生資料</title>
</head>
<body>

<div id="container" align="center">
    <h1>新增學生資料</h1>
    <button onclick="window.location.assign('<?=base_url()?>student')" >回到學生管理系統頁面</button>
    <br><br>
    <form method="post" action="<?= base_url() ?>student/insert_db">
        <table border="1">
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>學號</td>
                <td><input type="text" name="學號" required="required"></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="姓名"></td>
            </tr>
            <tr>
                <td>系碼</td>
                <td><input type="text" name="系碼"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="新增資料">
    </form>
</div>

</body>
</html>
