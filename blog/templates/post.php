<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1 class="mx-center title w-max-content ">Les Commentaires !</h1>
<p class="last-tickets"><a href="index.php" class="decoration-none">Retour à la liste des billets</a></p>

<div class="container-comments">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em class="date-post"><br/>le <?= $post['french_creation_date'] ?></em>
    </h3>

    <p class="post-content">
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<div class="container-comments container_comments-form">
    <h2>Commentaires</h2>
    <form action="index.php?action=addComment&id=<?= $post['identifier']?>" method="post">
       <div>
          <label for="author">Auteur</label><br />
          <input type="text" id="author" name="author" />
       </div>
       <div>
          <label for="comment">Commentaire</label><br />
          <textarea class="w-50 h-150" id="comment" name="comment"></textarea>
       </div>
       <div class="ms-5">
          <input type="submit" class="btn btn-send " />
       </div>
    </form>
</div>

<?php
foreach ($comments as $comment) {
?>
    <div class="container-comments container-post-comment">
        <p class="comment_author"><strong><?= htmlspecialchars($comment['author']) ?></strong></p> <p class="comment_creation-date">le <?= $comment['french_creation_date'] ?></p>
        <p class="comment"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    </div>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
