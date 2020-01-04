<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>選課作業系統</title>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/elective.js"></script>
    <script type="text/javascript">
        let base_url = function () {
            return "<?= base_url() ?>";
        };
    </script>
</head>
<body>

<div id="container" align="center">
    <h1>選課作業系統</h1>
    <button onclick="window.location.assign('<?= base_url() ?>')">首頁</button>
    <br><br>
    <form>
        <select name="student">
            <? foreach ($students as $student): ?>
                <option value="<?=$student['學號']?>"><?=$student['學號'] . ' ' . $student['姓名']?></option>
            <? endforeach; ?>
        </select>
    </form>
</div>

</body>
</html>

