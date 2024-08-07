<?php

require_once('src/models/post.php');

function homepage()
{
    $posts = getPosts();
    require('templates/homepage.php');
}

