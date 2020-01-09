<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>學生管理系統</title>
</head>
<body>

<div id="container" align="center">
    <h1>學生管理系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <button onclick="window.location.assign('student/insert')">新增</button>
    <br><br>

    <form method="post" action="<?= base_url() ?>student/search">
        <label for="student_id">學號: </label>
        <input id="student_id" type="text" name="學號">
        <input type="submit" value="查詢">
    </form>
    <br>

    <table border="1">
        <tr>
            <th>學號</th>
            <th>姓名</th>
            <th>系碼</th>
            <th>功能</th>
        </tr>
        <!-- 顯示資料內容 -->
        <? foreach ($students as $student): ?>
            <tr>
                <td><?= $student['學號'] ?></td>
                <td><?= $student['姓名'] ?></td>
                <td><?= $student['系碼'] ?></td>
                <td>
                    <a href="<?= base_url() ?>student/update/<?= $student['學號'] ?>">修改</a>
                    <a href="<?= base_url() ?>student/delete/<?= $student['學號'] ?>">刪除</a>
                </td>
            </tr>
        <? endforeach; ?>
    </table>
</div>

</body>
</html>
