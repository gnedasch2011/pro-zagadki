<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-puzzles <?= $colorBlock; ?>">
    <h4><a href="">Загадка на тему <?= $category->name; ?> - id (<?= $model->id; ?>)</a></h4>
    <p><?= $model->qustion; ?></p>


    <div class="answer"><b>Ответ:</b> <?= $model->answer; ?></div>

    <?php if (isset($model->categories)): ?>
        <div class="cont_tags">
            <?php foreach ($model->categories as $category): ?>
                <a class="" href="/<?= $category->url; ?>"><span
                            class="glyphicon glyphicon-tag"></span> <?= $category->name; ?></a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


</div>

