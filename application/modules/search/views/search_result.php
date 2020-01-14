<table border="1" style="text-align: center">
    <tr>
        <? foreach ($fields as $field): ?>
            <th><?= $field ?></th>
        <? endforeach; ?>
    </tr>

    <!-- 顯示資料內容 -->
    <? foreach ($result as $row): ?>
        <tr>
            <? foreach ($row as $field => $value): ?>
                <td><?= $value ?></td>
            <? endforeach; ?>
        </tr>
    <? endforeach; ?>
</table>

<br>
<button onclick="window.location.assign('<?= base_url() ?>search')">回到各項查詢作業系統頁面</button>

