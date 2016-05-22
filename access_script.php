<?php

$id = htmlspecialchars($_POST['id']);
$pass = htmlspecialchars($_POST['pass']);

if($id == 'sophiek' && $pass == 'nico66'){

    echo '<script>window.location.href="espace.php"</script>';
}

else{
    echo '<script>window.location.href="access.php?=error"</script>';
}

?>