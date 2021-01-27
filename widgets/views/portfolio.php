<?php
/**
 * @var string $type_id
 * @var array $types
 * @var array $data
 */
use yii\widgets\Pjax;

Pjax::begin(['linkSelector' => false, 'id' => 'portfolio-grid-container']); ?>
    <div class="portfolio-grids">
    <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
                <?php $cl = ($type_id == 'all') ? "resp-tab-active" : "";?>
                <li class="resp-tab-item <?=$cl;?>" aria-controls="tab_item-0>" role="tab" data-type="all"><span>Все</span></li>
                <?php foreach ($types as $type) {
                    $cl = ($type_id == $type->id) ? "resp-tab-active" : "";
                    ?>
                    <li class="resp-tab-item <?=$cl;?>" data-type="<?= $type->id; ?>" role="tab">
                        <span><?= $type->name; ?></span>
                    </li>
                <?php } ?>
            </ul>
            <div class="resp-tabs-container">
                <div class="tab-1 resp-tab-content resp-content-active">
                    <?php foreach ($data as $item) { ?>
                        <div class="col-md-3 team-gd">
                            <a href="/portfolio/<?= $item->seo_url; ?>"
                               class="portfolio-link b-link-diagonal b-animate-go">
                                <img src="<?= $item->getImagesSmallUrl(); ?>" alt="<?= $item->name; ?>">
                            </a>
                        </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Pjax::end();

$script = <<< JS
$(document).on("click", ".resp-tab-item", function (e) {
    e.preventDefault();
    var type = $(this).data('type');
    $('.resp-tab-item').removeClass("resp-tab-active");
    $(this).addClass('resp-tab-active')
    var url = window.location.pathname + "?type=" + type;
    $.pjax.reload('#portfolio-grid-container', {url: url});
});
JS;
$this->registerJs($script, yii\web\View::POS_END);
?>