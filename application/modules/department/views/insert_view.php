<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>新增科系資料</title>
</head>
<body>

<div id="container" align="center">
    <h1>新增科系資料</h1>
    <form method="post" action="<?= base_url() ?>department/insert_db">
        <table border="1">
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>系碼</td>
                <td><input type="text" name="系碼" required="required"></td>
            </tr>
            <tr>
                <td>系名</td>
                <td><input type="text" name="系名"></td>
            </tr>
            <tr>
                <td>系主任</td>
                <td><input type="text" name="系主任"></td>
            </tr>
        </table>
        <input type="submit" value="新增資料">
    </form>
    <button onclick="window.location.assign('<?=base_url()?>department')" >回到科系管理系統頁面</button>
</div>

</body>
</html>
