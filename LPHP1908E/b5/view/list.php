<?php if(!empty($info)): ?>
    <ul>
        <?php foreach($info as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <h5>Không tìm thấy dữ liệu</h5>
<?php endif; ?>
