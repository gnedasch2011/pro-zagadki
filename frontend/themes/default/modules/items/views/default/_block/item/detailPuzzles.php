<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-puzzles">
    <h4><a href="/<?= $model->detailUrl; ?>">Загадка #<?= $model->id; ?>: <?= $model->getFullTitleName() ?></a></h4>
    <p><?= $model->qustion; ?></p>
    <?php if (isset($model->img) && !empty($model->img)): ?>
        <p><img width="100%" src="/images/items/<?= $model->img; ?>" alt=""></p>
    <?php endif; ?>

    <a href="#" class="openAnswer btn btn-default btn-xs btn_otv">Показать ответ …</a>
    <div class="answer"><b>Ответ: </b> <?= $model->answer; ?>
        <?php if (isset($model->categories)): ?>
            <div class="cont_tags">
                <?php foreach ($model->categories as $category): ?>

                    <a class="" href="/<?= $category->url; ?>"><span
                                class="glyphicon glyphicon-tag"></span> <?= $category->name; ?></a>

                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>


</div>
