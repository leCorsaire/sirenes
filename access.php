<?php include 'doctype.php'; ?>
    <link rel="stylesheet" href="css/s_access.css">
<?php include 'header.php'; ?>
        <div class="container">
            <div class="row">
                <section class="col-sm-4 col-sm-offset-4">
                    <form method="POST" action="access_script.php">
                        <section class="form-group">
                            <label>Identifiant</label>
                            <input type="text" class="form-control" id="id" name="id">
                        </section>
                        <section class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </section>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                </section>
            </div>
        </div>
<?php include 'footer.php'; ?>