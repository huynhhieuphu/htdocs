<div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-header">
                Số ca mắc bệnh
            </div>
            <div class="card-body">
                <p class="card-text">Mới nhiễm: <?= number_format($result['Global']['NewConfirmed']) ?></p>
                <p class="card-text">Tổng nhiễm: <?= number_format($result['Global']['TotalConfirmed']) ?></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-header">
                Số ca tử vong
            </div>
            <div class="card-body">
                <p class="card-text">Tổng tử vong: <?= number_format($result['Global']['NewDeaths']) ?></p>
                <p class="card-text">Mới tử vong: <?= number_format($result['Global']['TotalDeaths']) ?></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-header">
                Số ca khỏi bệnh
            </div>
            <div class="card-body">
                <p class="card-text">Mới khỏi bệnh: <?= number_format($result['Global']['NewRecovered']) ?></p>
                <p class="card-text">Tổng khỏi bệnh: <?= number_format($result['Global']['TotalRecovered']) ?></p>
            </div>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <!--  thông tin covid của các nước trên thế giới  -->
        <h3 class="text-center text-info">Danh sách các nước trên thế giới</h3>
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Ngày</th>
                <th>Quốc Gia</th>
                <th>Tổng Mắc Bệnh</th>
                <th>Mới Mắc Bệnh</th>
                <th>Tổng Tử Vong</th>
                <th>Mới Tử Vong</th>
                <th>Tổng Khỏi Bệnh</th>
                <th>Mới Khỏi Bệnh</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result['Countries'] as $key => $item): ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= date('d/m/Y h:i:s', strtotime($item['Date'])) ?></td>
                    <td><?= $item['Country'] ?></td>
                    <td><?= number_format($item['TotalConfirmed']) ?></td>
                    <td><?= number_format($item['NewConfirmed']) ?></td>
                    <td><?= number_format($item['TotalDeaths']) ?></td>
                    <td><?= number_format($item['NewDeaths']) ?></td>
                    <td><?= number_format($item['TotalRecovered']) ?></td>
                    <td><?= number_format($item['NewRecovered']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>