<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>各項查詢作業系統</title>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/search.js') ?>"></script>
</head>
<body>

<div id="container" align="center">
    <h1>各項查詢作業系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <br><br>

    <form id="query_form" method="post" action="<?= base_url('search/run_query') ?>">
        <label for="query_selector">預設查詢指令：</label>
        <select id="query_selector">
            <option value="unselected" selected>請選擇查詢指令</option>
            <option value="elective">查詢學生選課紀錄</option>
        </select>
        <br><br>

        <textarea id="query" name="query_text" style="width: 700px;height: 200px"></textarea>
        <br>
        <input type="submit" value="執行SQL">
    </form>
</div>

</body>
</html>

