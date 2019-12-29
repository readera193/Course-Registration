<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>課程管理系統</title>
</head>
<body>

<div id="container" align="center">
    <h1>課程管理系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <button onclick="window.location.assign('course/insert')">新增</button>
    <br><br>

    <form method="post" action="<?= base_url() ?>course/search">
        <label for="course_id">課號: </label>
        <input id="course_id" type="text" name="課號">
        <input type="submit" value="查詢">
    </form>
    <br>

    <table border="1">
        <tr>
            <th>課號</th>
            <th>課名</th>
            <th>學分數</th>
            <th>功能</th>
        </tr>
        <!-- 顯示資料內容 -->
        <?
        foreach ($courses as $course) {
            ?>
            <tr>
                <td><?= $course['課號'] ?></td>
                <td><?= $course['課名'] ?></td>
                <td><?= $course['學分數'] ?></td>
                <td>
                    <a href="<?= base_url() ?>course/update/<?= $course['課號'] ?>">修改</a>
                    <a href="<?= base_url() ?>course/delete/<?= $course['課號'] ?>">刪除</a>
                </td>
            </tr>
            <?
        }
        ?>
    </table>
</div>

</body>
</html>
