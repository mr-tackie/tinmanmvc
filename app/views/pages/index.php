<?php require APP_ROOT.'/views/includes/header.php';?>
    Welcome
    <ul>
        <?php foreach($data['posts'] as $post):?>
            <li><?= $post->title ?>
        <?php endforeach; ?>    
    </ul>
<?php require APP_ROOT.'/views/includes/footer.php';?>