<?php ob_start(); ?>
    <div class="row">
        <div class="col-xl-2 col-lg-3 col-8 offset-2 offset-lg-3 offset-lg-4">
            <form method="post" action="index.php?loginUser" class="login-form p-4">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="name"></label>
                        <input type="text" class="form-control" minlength="2" maxlength="25" pattern="[a-zA-ZÀ-ÿ-]+"
                               placeholder="Identifiant" id="name" required
                               data-validation-required-message="Veuillez indiquer votre identifiant." name="login">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="password"></label>
                        <input type="password" class="form-control" minlength="2" maxlength="25"
                               placeholder="Mot de passe" id="password" required
                               data-validation-required-message="Veuillez indiquer votre mot de passe." name="password">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary login-btn">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>