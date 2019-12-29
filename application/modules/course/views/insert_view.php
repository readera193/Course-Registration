<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>新增課程資料</title>
</head>
<body>

<div id="container" align="center">
    <h1>新增課程資料</h1>
    <button onclick="window.location.assign('<?=base_url()?>course')" >回到課程管理系統頁面</button>
    <br><br>
    <form method="post" action="<?= base_url() ?>course/insert_db">
        <table border="1">
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>課號</td>
                <td><input type="text" name="課號" required="required"></td>
            </tr>
            <tr>
                <td>課名</td>
                <td><input type="text" name="課名"></td>
            </tr>
            <tr>
                <td>學分數</td>
                <td><input type="number" name="學分數"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="新增資料">
    </form>
</div>

</body>
</html>
