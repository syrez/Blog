<?php foreach ($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>


    <h2><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h2>

    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>
    <p><?= $post->Extrait ?></p>


<?php endforeach; ?>