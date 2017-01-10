<?php

/* @var $this yii\web\View */

use pistol88\cart\widgets\BuyButton;
use pistol88\cart\widgets\CartInformer;
use pistol88\cart\widgets\ChangeCount;
use pistol88\cart\widgets\ChangeOptions;
use pistol88\cart\widgets\DeleteButton;
use pistol88\cart\widgets\ElementsList;
use pistol88\cart\widgets\TruncateButton;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <?php
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Product::find()
        ])
        ?>
        <?= \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_prod'
        ]) ?>
    </div>
</div>
