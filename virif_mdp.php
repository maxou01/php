<?php
// verif_mdp.php
if ($_POST['mdp'] === 'mon_mot_de_passe') {
  header('Location: https://youtube.com/');
  exit;
} else {
  echo "Mot de passe incorrect.";
}
?>
