<h1>Загадки</h1>
<ul>
    <?php foreach($urlsCategoryArr as $url):?>
            <li><a href="/<?= $url['name_transliteration'];?>"><?= $url['name'] ;?></a></li>
    <?php endforeach;?>
</ul>

<style>

    ul > li {
        display: inline; /* Отображать как строчный элемент */
        margin-right: 5px; /* Отступ слева */
        padding: 3px; /* Поля вокруг текста */
    }
</style>