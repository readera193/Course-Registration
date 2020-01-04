<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>科系管理系統</title>
</head>
<body>

<div id="container" align="center">
    <h1>科系管理系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <button onclick="window.location.assign('department/insert')">新增</button>
    <br><br>

    <form method="post" action="<?= base_url() ?>department/search">
        <label for="department_id">系碼: </label>
        <input id="department_id" type="text" name="系碼">
        <input type="submit" value="查詢">
    </form>
    <br>

    <table border="1">
        <tr>
            <th>系碼</th>
            <th>系名</th>
            <th>系主任</th>
            <th>功能</th>
        </tr>
        <!-- 顯示資料內容 -->
        <? foreach ($departments as $department): ?>
            <tr>
                <td><?= $department['系碼'] ?></td>
                <td><?= $department['系名'] ?></td>
                <td><?= $department['系主任'] ?></td>
                <td>
                    <a href="<?= base_url() ?>department/update/<?= $department['系碼'] ?>">修改</a>
                    <a href="<?= base_url() ?>department/delete/<?= $department['系碼'] ?>">刪除</a>
                </td>
            </tr>
        <? endforeach; ?>
    </table>
</div>

</body>
</html>
