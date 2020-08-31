<?php ob_start(); ?>
    <div class="row d-flex justify-content-center align-items-end promo-content">
        <?php while ($dataPromotionsModel = $data->fetch()) { ?>
            <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 align-self-center promo-container">
                <div class="promo mt-5">
                    <div>
                        <img class="img-fluid promo-img"
                             src="imgPromo/<?php echo htmlspecialchars($dataPromotionsModel['file']); ?>"
                             alt="image promotion">
                        <h3>
                            <span class="underline">Titre</span>
                            : <?php echo htmlspecialchars($dataPromotionsModel['title']); ?>
                        </h3><br/>
                        <p>
                            <span class="underline">Description</span>
                            : <?php $descriptionExtract = htmlspecialchars($dataPromotionsModel['description']);
                            echo htmlspecialchars(substr($descriptionExtract, 0, 50)); ?>
                        </p>
                        <p>
                            <span class="underline">Fin de la promotion le</span>
                            : <?php echo htmlspecialchars(date_format(date_create($dataPromotionsModel['date_end']), 'd-m-Y à H \h i')); ?>
                        </p>
                        <div class="clearfix">
                            <button class="btn btn-primary delete float-left">Supprimer la Promotion &rarr;</button>
                            <a class="btn btn-primary delete-confirm float-left"
                               href="index.php?deletePromotion&id=<?php echo htmlspecialchars($dataPromotionsModel['id']); ?>">
                                &#9888; Confirmer la Suppression ? &#9888;</a>
                            <a class="btn btn-primary update-btn float-left"
                               href="index.php?getUpdatePromotionPage&id=<?php echo htmlspecialchars($dataPromotionsModel['id']); ?>">
                                Modifier la Promotion &rarr;</a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        <?php }
        $data->closeCursor() ?>
    </div>

    <div class="row">
        <div class="col-lg-4 offset-lg-3 col-4 offset-2">
            <div class="my-4">
                <?php if (htmlspecialchars($currentPage) > 1) { ?>
                    <a href="index.php?promotionList&page=<?= htmlspecialchars($currentPage) - 1 ?>"
                       class="btn btn-primary pag-btn">&laquo; Page
                        Précédente</a>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 col-4 offset-1">
            <div class="my-4">
                <?php if (htmlspecialchars($currentPage) < htmlspecialchars($totalPages)) { ?>
                    <a href="index.php?promotionList&page=<?= htmlspecialchars($currentPage + 1) ?>"
                       class="btn btn-primary pag-btn ml-auto">Page
                        Suivante &raquo;</a>
                <?php } ?>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>