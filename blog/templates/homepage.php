<?php 
    $title = "Le blog de l'AVBN"; 
    ob_start(); 
?>

<h1 class="title w-max-content mx-center">Le super blog de l'AVBN !</h1>
<p class="last-tickets">Derniers billets du blog :</p>

<?php
foreach ($posts as $post) {
?>
    <div class="container-comments w-75">
        <h3>
            <?= htmlspecialchars($post['title']); ?>
            <em>le <?= $post['french_creation_date']; ?></em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($post['content'])); ?>
            <br />
            <em><a href="index.php?action=post&id=<?= urlencode($post['identifier']) ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
?>
<?php 
    $content = ob_get_clean(); 
    require('layout.php');
?>

