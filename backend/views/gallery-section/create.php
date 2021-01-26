<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GallerySection */

$this->title = 'Create Gallery Section';
$this->params['breadcrumbs'][] = ['label' => 'Gallery Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-section-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
