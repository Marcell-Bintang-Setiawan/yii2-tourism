<?php
  use yii\helpers\Html;
  use yii\widgets\DetailView;

  $this->title = $model->nama;
  $this->params['breadcrumbs'][] = ['label' => 'Destinasi', 'url' => ['destinasi']];
  $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="col-md-12">
    <?= Html::img('../../frontend/web/uploads/' . $model->gambar, ['class'=> 'img-thumbnail d-block mx-auto mb-3', 'width'=>'300px'] ) ?>
    </div>
  </div>

  <div class="row d-flex justify-content-center">
    <div class="col-md-9 ">
      
      <?= DetailView::widget([
          'model' => $model,
          'attributes' => [
              'nama',
              'tiket',
              'jam',
              'lokasi',
          ],
      ]) ?>
    </div>
  </div>
</div>