<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?= \app\App::getTitle(); ?></title>
        <!-- Bootstrap core CSS -->
        <link href="../public/css/bootstrap.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= app\App::getHome(); ?>">PT 2</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="starter-template" style="padding-top: 100px;">
                <?= $content; ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
    </body>

</html>