<?php

require_once('src/models/post.php');
require_once('src/models/comment.php');

function post(string $identifier)
{
    $post = getPost($identifier);
    $comments = getComments($identifier);

    require('templates/post.php');
}
