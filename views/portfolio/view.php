<?php
/** @var Portfolio $portfolio
 * @var Portfolio $nextWork
 */

use app\models\Portfolio;
use yii\helpers\ArrayHelper;

$this->title = 'Портфолио Кристины Стрельчук';

$nextWork = $portfolio->getNext();
?>
<!--================Portfolio Area =================-->
<section class="block-portfolio single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="<?= $portfolio->getLink(); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="navigation-area">
                    <div class="row">
                        <?php
                        if ($nextWork != null) {
                            $url = "/portfolio/" . $nextWork->seo_url;
                            ?>
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="arrow arrow-left">
                                    <a href="<?= $url; ?>"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>Предыдущий</p>
                                    <a href="<?= $url; ?>"><h4><?= $nextWork->name; ?></h4></a>
                                </div>
                            </div>
                            <?php
                        }
                        $prev = $portfolio->getPrev();
                        if ($prev != null) {
                            $url = "/portfolio/" . $prev->seo_url;
                            ?>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Следующий</p>
                                    <a href="<?= $url; ?>"><h4><?= $prev->name; ?></h4></a>
                                </div>
                                <div class="arrow arrow-right">
                                    <a href="<?= $url; ?>"><span class="lnr lnr-arrow-right"></span></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget author_widget">
                        <h4 class="portfolio-name"><?= $portfolio->name; ?></h4>
                        <p class="excert">
                            <?= $portfolio->txt; ?>
                        </p>
                        <div class="block_customer"><i class="glyphicon glyphicon-link"></i>
                            <a href="<?= $portfolio->url; ?>"><?= $portfolio->url; ?></a></div>
                        <div class="block_customer"><i class="glyphicon glyphicon-folder-open"></i>
                            <?php
                            $types = implode(', ', ArrayHelper::map($portfolio->type, 'id', 'name'));
                            ?>
                            <div><?= $types; ?></div>
                        </div>
                        <div class="block_customer"><i class="glyphicon glyphicon-screenshot"></i>
                            <div>Задачи:</div>
                        </div>
                        <p class="excert"><?= $portfolio->task; ?></p>
                        <?php
                        if ($portfolio->flag_work_now != null) { ?>
                            <div class="block_customer">
                                <i class="glyphicon glyphicon-ok"></i>
                                <div>Работа над проектом еще не завершена</div>
                            </div>
                        <?php } ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Portfolio Area =================-->