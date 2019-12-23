<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Inria+Serif|Source+Sans+Pro&display=swap" rel="stylesheet">
<style>
    *,
    html {
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100wh;
        height: 100vh;
        box-sizing: border-box;
        flex-direction: column;
    }

    h1 {
        font-family: 'Inria Serif';
        font-size: 52px;
        font-weight: normal;
    }

    p {
        font-family: 'Source Sans Pro';
        color: #aaaaaa;
        font-size: 16px;
    }

    a {
        text-decoration: none;
        color: #666666;
        font-weight: bold;
    }
</style>
<h1>Tinman MVC</h1>
<p>An open source php framework by <a href="https://github.com/mr-tackie">Nii Abonie Tackie</a>. Lost? Read the docs on <a href="https://github.com/mr-tackie/tinmanmvc">github</a></p>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>