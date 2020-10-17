<?php
echo "<?xml version='1.0' encoding='UTF-8'?>";
?>
<sitemapindex>
    <?php for ($i = 0; $i <= $countPage; $i++): ?>
        <sitemap>
            <loc><?= \Yii::$app->request->hostInfo; ?>/sitemap/<?= $i; ?></loc>
        </sitemap>
    <?php endfor; ?>
</sitemapindex>