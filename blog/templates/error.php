<?php 
$title ="Le blog de l'AVBN - page d'erreur";
ob_start();
?> 
<div class="error-container">
    <img src="asset/img/warning.svg" alt="panneau attention" class="error-img">
    <p class="error"><?=$errorMessage?></p>
</div>
<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>