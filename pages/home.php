<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            <p class="text-center">Le site est prét !</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger">
            <p class="text-center">Un test pour la base de donnée</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <?php foreach (\app\table\Articles::getLast() as $post): ?>
            <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </div>
</div>
