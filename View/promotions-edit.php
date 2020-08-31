<?php ob_start(); ?>

    <div class="col-5 w-100 offset-3">
        <?php while ($dataPromotionsModel = $data->fetch()) { ?>
            <div class="promo-edit">
                <form method="post"
                      action="index.php?updatePromotion&id=<?php echo htmlspecialchars($dataPromotionsModel['id']); ?>"
                      class="ccform" enctype="multipart/form-data">
                    <p><span class="underline">Titre :</span></p>
                    <div class="ccfield-prepend">
                        <label for="title"></label>
                        <input class="ccformfield" type="text" minlength="2" maxlength="50" pattern="[a-zA-ZÀ-ÿ0-9-\s]+"
                               placeholder="Titre" name="title" id="title"
                               value="<?php echo htmlspecialchars($dataPromotionsModel['title']); ?>" required>
                    </div>
                    <p><span class="underline">Description :</span></p>
                    <div class="ccfield-prepend">
                        <label for="description"></label>
                    <textarea class="ccformfield" name="description" minlength="2" maxlength="1000"
                              rows="3" placeholder="Description" id="description"
                              required><?php echo htmlspecialchars($dataPromotionsModel['description']); ?></textarea>
                    </div>
                    <div class="img-preview">
                        <p><span class="underline">Image Précèdente :</span></p>
                        <img class="img-fluid"
                             src="imgPromo/<?php echo htmlspecialchars($dataPromotionsModel['file']); ?>"
                             alt="image promotion">
                    </div>
                    <div class="ccfield-prepend">
                        <label for="file"></label>
                        <input class="ccformfield" type="file" minlength="2" maxlength="50"
                               placeholder="Image" name="file" id="file" required>
                    </div>
                    <div class="ccfield-prepend">
                        <p><span class="underline">Ancienne Date :</span></p>
                        <label for="flatpickr"></label>
                        <input class="ccformfield" id="flatpickr" type="date" name="date" minlength="2" maxlength="50"
                               placeholder="<?php echo htmlspecialchars(date_format(date_create($dataPromotionsModel['date_end']), 'd-m-Y à H \h i')); ?>"
                               required>
                    </div>
                    <div class="ccfield-prepend">
                        <input class="ccbtn" type="submit" value="Envoyer" name="submitUpdate">
                    </div>
                </form>
            </div>
        <?php }
        $data->closeCursor() ?>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>