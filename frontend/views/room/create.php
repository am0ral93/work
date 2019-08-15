<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RoomForm */

$this->title = 'Create Room Form';
$this->params['breadcrumbs'][] = ['label' => 'Room Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
