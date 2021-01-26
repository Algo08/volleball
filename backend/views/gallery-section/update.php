<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GallerySection */

$this->title = 'Update Gallery Section: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gallery Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallery-section-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
