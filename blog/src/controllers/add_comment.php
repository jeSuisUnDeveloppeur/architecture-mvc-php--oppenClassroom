<?php 
require_once 'src/lib/functions.php';
require_once 'src/models/comment.php';

function addComment(string $post, array $input){
    $author = null;
    $comment = null;
    if(!empty($input['author']) && !empty($input['comment'])){
        $author = sanitize($input['author']);
        $author = ucfirst($author);
        $comment = sanitize($input['comment']);
    }
    else{
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $success = createComment($post,$author,$comment);
    if(!$success){
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }else{
        header('Location:index.php?action=post&id='.$post);
    }
}