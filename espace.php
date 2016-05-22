<?php include 'doctype.php'; ?>
    <link rel="stylesheet" href="css/s_espace.css">
    <script src="ckeditor/ckeditor.js"></script>
<?php include 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <section class="col-sm-6">
                <h2>Gestion des pages</h2>
                <?php
                for($i=1; $i<=3; $i++)
                {
                     echo '<form method="POST" action="update.php">
                        <section class="form-group">
                            <label>Page '.$i.'</label>
                            <textarea name="editor'.$i.'" id="editor'.$i.'" class="form-control champ">
                            </textarea>
                        </section>
                        
                        <script>CKEDITOR.replace(\'editor'.$i.'\')</script>';
                    
                }
                ?>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </form>
            </section>
            <section class="col-sm-6">
                <h2>Messages reçus</h2>
                <p>Nom : André Dupont</p>
                <p>Numéro : 0123456789</p>
                <p> Message vide</p>
            </section>
        </div>
    </div>
<?php include 'footer.php' ?>