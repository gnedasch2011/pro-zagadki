<h4><a href="/<?= $model->detailUrl; ?>">Загадка на тему <?= $model->category->name; ?> - id (<?= $model->id; ?>)</a></h4>
<p><?= $model->qustion; ?></p>

<div class="answer"><b>Ответ: </b> <?= $model->answer; ?></div>

<?php if (isset($model->categories)): ?>
    <div class="cont_tags">
        <?php foreach ($model->categories as $category): ?>
            <a class="" href="/<?= $category->url; ?>"><span
                        class="glyphicon glyphicon-tag"></span> <?= $category->name; ?></a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>