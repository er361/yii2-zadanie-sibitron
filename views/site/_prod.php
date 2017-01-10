<?php
/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 10.01.2017
 * Time: 21:56
 */
/* @var $model \app\models\Product */
?>
<div>
    <h3><?= \yii\helpers\Html::encode($model->name)?></h3>
    <p><?= \yii\helpers\Html::encode($model->desc)?></p>
    <span><?= \yii\helpers\Html::encode($model->price) . ' тг'?></span>
    <?php
    echo \pistol88\cart\widgets\BuyButton::widget([
        'model'=>$model,
        'text'=>'Купить',
        'htmlTag'=>'a',
        'cssClass'=> 'btn btn-success'
    ])
    ?>
</div>
