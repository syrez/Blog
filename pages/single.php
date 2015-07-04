<?php


$post = $db->prepare("select * from articles WHERE id = ?",array($_GET['id']),'App\Table\Article');

var_dump($post);

