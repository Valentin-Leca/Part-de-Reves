<?php ob_start(); ?>

    <div class="row text-center mt-5"><h1 class="w-50">Bienvenue <?php echo htmlspecialchars($_SESSION['login']); ?> !</h1>
    </div>
    <div class="row text-center administration-content">
        <div class="col-lg-4 offset-lg-1">
            <h2>Créer une promotion</h2>
            <form method="post" action="index.php?promotionForm" class="ccform" enctype="multipart/form-data">
                <div class="ccfield-prepend">
                    <label for="title"></label>
                    <input class="ccformfield" type="text" minlength="2" maxlength="50" pattern="[a-zA-ZÀ-ÿ0-9-\s]+"
                           placeholder="Titre" id="title" name="title" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="description"></label>
                    <textarea class="ccformfield" name="description" minlength="2" maxlength="1000"
                              rows="10" placeholder="Description" id="description"
                              required></textarea>
                </div>
                <div class="ccfield-prepend">
                    <label for="file"></label>
                    <input class="ccformfield" type="file" minlength="2" maxlength="50" placeholder="Image"
                           name="file" id="file" required>
                </div>
                <div class="ccfield-prepend">
                    <label for="flatpickr"></label>
                    <input class="ccformfield" id="flatpickr" type="date" name="date"
                           placeholder="Date et heure de fin" minlength="2" maxlength="50" required>
                </div>
                <div class="ccfield-prepend">
                    <input class="ccbtn form-btn w-50" type="submit" value="Envoyer" name="submit">
                </div>
                <h3 class="promo-create">
                    <?php if (isset($_SESSION['createPromotionSucces'])) {
                        echo $_SESSION['createPromotionSucces']; ?>
                    <?php }
                    unset($_SESSION['createPromotionSucces']); ?>
                </h3>
            </form>
        </div>
        <div class="col-lg-4 offset-lg-2">
            <h2>Modifier ou supprimer une promotion</h2>
            <a href="index.php?promotionList" class="adminPage">
                <button class="ccbtn list-btn w-50">Cliquez ici</button>
            </a><br/>
            <h3 class="promo-delete">
                <?php if (isset($_SESSION['PromotionIsDelete'])) {
                    echo $_SESSION['PromotionIsDelete']; ?>
                <?php }
                unset($_SESSION['PromotionIsDelete']); ?>
            </h3>
            <h3 class="promo-update">
                <?php if (isset($_SESSION['PromotionIsUpdate'])) {
                    echo $_SESSION['PromotionIsUpdate']; ?>
                <?php }
                unset($_SESSION['PromotionIsUpdate']); ?>
            </h3>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>