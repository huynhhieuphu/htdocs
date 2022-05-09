<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Images</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($info)): ?>
        <tr>
            <td><?= $info['id'] ?></td>
            <td><?= $info['name'] ?></td>
            <td>
                <img src="<?= $info['images'] ?>" alt="<?= $info['images'] ?>" width="200">    
            </td>
        </tr>
        <?php else: ?>
            <tr>
                <td colspan="3">KHONG TIM THAY</td>
            </tr>
        <?php endif; ?>   
    </tbody>
</table>