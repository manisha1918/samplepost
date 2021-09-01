<?php

use yii\helpers\Html;
/** @var $model \app\models\Article */

?>

<div>
	<a href="<?php echo \yii\helpers\Url::to(['/post/view', 'slug' => $model->slug]) ?>">
         <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(),40) ?>
    </div>
    <p class="text-muted text-right">
        <small>Created At: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
            By: <b><?php echo $model->createdBy->username ?></b>
        </small>
    </p>
    <hr>
    <?= Html::button('Like',['class' => 'like'])?>
    <?= Html::button('UnLike',['class' => 'Dislike'])?>
</div>
