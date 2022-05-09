<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php foreach($dataMovie as $key => $movie): ?>
        <div class="media my-4">
        <img src="https://www.themoviedb.org/t/p/w188_and_h282_bestv2/<?= $movie['poster_path'] ?>" alt="<?= $movie['poster_path'] ?>" width="100px">
            <div class="media-body p-1">
                <h5 class="mt-0"><?= $movie['title'] ?></h5>
                <p><?= $movie['overview'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div> 
</div>