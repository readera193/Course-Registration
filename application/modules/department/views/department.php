<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>科系代碼表</title>
</head>
<body>

<div id="container" align="center">
    <h1>科系代碼表</h1>
    <button onclick="window.location.assign('department/insert')">新增</button>

    <table border="1">
        <tr>
            <th>系碼</th>
            <th>系名</th>
            <th>系主任</th>
        </tr>
        <!-- 顯示資料內容 -->
        <?
        foreach ($departments as $department) {
            ?>
            <tr>
                <td><?= $department['系碼'] ?></td>
                <td><?= $department['系名'] ?></td>
                <td><?= $department['系主任'] ?></td>
            </tr>
            <?
        }
        ?>
    </table>
</div>

</body>
</html>
