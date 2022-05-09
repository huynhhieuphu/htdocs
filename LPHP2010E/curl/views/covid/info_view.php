<div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Confirmed</h4>
                <p class="card-text">New Confirmed: <?= number_format($dataGlobal['NewConfirmed']) ?></p>
                <p class="card-text">Total Confirmed: <?= number_format($dataGlobal['TotalConfirmed']) ?></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Deaths</h4>
                <p class="card-text">New Deaths: <?= number_format($dataGlobal['NewDeaths']) ?></p>
                <p class="card-text">Total Deaths: <?= number_format($dataGlobal['TotalDeaths']) ?></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recovered</h4>
                <p class="card-text">New Recovered: <?= number_format($dataGlobal['NewRecovered']) ?></p>
                <p class="card-text">Total Recovered: <?= number_format($dataGlobal['TotalRecovered']) ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="3%">#</th>
                        <th>Date</th>
                        <th>Country</th>
                        <th>Country Code</th>
                        <th>New Confirmed</th>
                        <th>Total Confirmed</th>
                        <th>New Deaths</th>
                        <th>Total Deaths</th>
                        <th>New Recovered</th>
                        <th>Total Recovered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0; ?>
                    <?php foreach($dataCountries as $key => $country): ?>
                        <?php $stt++; ?>
                        <tr>
                            <td><?= $stt ?></td>
                            <td><?= date('d/m/Y H:i:s', strtotime($country['Date'])); ?></td>
                            <td><?= $country['Country'] ?></td>
                            <td><?= $country['CountryCode'] ?></td>
                            <td><?= number_format($country['NewConfirmed']) ?></td>
                            <td><?= number_format($country['TotalConfirmed']) ?></td>
                            <td><?= number_format($country['NewDeaths']) ?></td>
                            <td><?= number_format($country['TotalDeaths']) ?></td>
                            <td><?= number_format($country['NewRecovered']) ?></td>
                            <td><?= number_format($country['TotalRecovered']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div> 
</div>