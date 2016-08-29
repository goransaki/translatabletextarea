<?php
/**
 * Created by PhpStorm.
 * User: Goran Sarenac <goransarenac91@hotmail.com>
 * Date: 8/15/2016
 * Time: 2:36 PM
 */

use yii\bootstrap\Tabs;

?>
<div class="col-md-12 translatable-text-area">
    <?= Tabs::widget([
        'items' => $this->context->getItems(),
    ]);
    ?>
</div>