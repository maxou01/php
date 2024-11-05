<?php
// verif_mdp.php
if ($_POST['mdp'] === '1234') {
  header('Location: https://youtube.com/');
  exit;
} else {
  echo "Mot de passe incorrect.";
}
?>
