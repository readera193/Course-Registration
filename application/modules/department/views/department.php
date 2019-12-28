<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>科系代碼表</title>
</head>
<body>

<div id="container" align="center">
    <h1>科系代碼表</h1>

    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>

    <button onclick="window.location.assign('department/insert')">新增</button>

    <table border="1">
        <tr>
            <th>系碼</th>
            <th>系名</th>
            <th>系主任</th>
            <th>功能</th>
        </tr>
        <!-- 顯示資料內容 -->
        <?
        foreach ($departments as $department) {
            ?>
            <tr>
                <td><?= $department['系碼'] ?></td>
                <td><?= $department['系名'] ?></td>
                <td><?= $department['系主任'] ?></td>
                <td>
                    <!-- TODO: 修改功能 -->
                    <a href="<?= base_url() ?>department/update/<?= $department['系碼'] ?>">修改</a>
                    <a href="<?= base_url() ?>department/delete/<?= $department['系碼'] ?>">刪除</a>
                </td>
            </tr>
            <?
        }
        ?>
    </table>
</div>

</body>
</html>
