<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <?php
        $first = true;
        foreach ($articles as $article) { ?>
            <div class="carousel-item text-center <?= $first ? 'active' : '' ?>">
                <img class="img-fluid" src="<?= $article['image'] ?>">

                <!-- Contrôles du carousel -->
                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-primary text-white" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <i class="bi bi-arrow-left"></i>
                    </button>

                    <button class="btn btn-primary text-white" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>

                <h3 class="fw-bold mt-3"><?= $article['titre'] ?></h3>
                <p class="text-secondary"><?= $article['description'] ?></p>
                <p class="text-secondary"><?= $article['date'] ?></p>
                <a class="btn btn-primary text-white" href="<?= $article['lien'] ?>">Lire l'article</a>
            </div>
        <?php
            $first = false;
        } ?>

    </div>
</div>