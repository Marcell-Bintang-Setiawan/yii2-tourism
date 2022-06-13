<?php
  use yii\helpers\Html;
  use yii\widgets\DetailView;

  $this->title = $model->judul;
  $this->params['breadcrumbs'][] = ['label' => 'Artikel', 'url' => ['artikel']];
  $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1><?= Html::encode($this->title) ?></h1>
      <p><i>Diposting pada <?= $model->created_at ?> oleh <?= $model->author ?></i></p>
    </div>
    <div class="col-md-12">
        <p><?= $model->deskripsi ?></p>
    </div>
  </div>
</div>