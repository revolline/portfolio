<?php
use app\widgets\Portfolio;
$this->title = 'Портфолио Кристины Стрельчук';
?>
<div style="margin-top: 4rem"></div>
<div class="service-head text-center">
    <h4>Портфолио</h4>
    <h3>Мои <span>работы</span></h3>
    <span class="border"></span>
</div>
<?php try {
    echo Portfolio::widget();
} catch (Exception $e) {
} ?>
<div class="clearfix"></div>
<div style="margin-bottom: 4rem"></div>

