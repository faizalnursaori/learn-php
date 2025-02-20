<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Repository\CommentRepoImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepoImpl($connection);

// $comment = new Comment(email: "repository@test.com", comment: "Hi");
// $newComment = $repository->insert($comment);

$comments = $repository->findAll();
var_dump($comments);

$connection = null;
