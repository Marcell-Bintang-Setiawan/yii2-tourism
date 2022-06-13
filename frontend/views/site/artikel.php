<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Artikel - Explore Sda.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-ekraf">
  <h1>Mari Budayakan Literasi 🧾</h1>

  <p>Mari perbanyak membaca, guna membuka dunia baru yang lebih luas</p>
  
  <?php foreach ($models as $r) : ?>
  <div class="row">
      <div class="col-md-12 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $r['judul']; ?></h5>           
            <p class="card-text"><?= substr($r['deskripsi'], 0, 500) . '...'; ?></p>
            <div class="text-end">
              <a href="<?= Url::toRoute(['site/viewartikel', 'id' => $r['id']]) ?>" class="text-end">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <div class="col-md-12">
      <?= LinkPager::widget([
          'pagination' => $pages,
          'options' => [
              'class' => 'pagination justify-content-center'
          ],
          'prevPageCssClass' => 'page-item',
          'prevPageLabel' => 'Previous',
          'nextPageCssClass' => 'page-item',
          'nextPageLabel' => 'Next',
          'disabledPageCssClass' => 'disabled page-link',
          'pageCssClass' => 'page-item',
          'linkOptions' => [
              'class' => 'page-link'
          ],
          
      ]) ?>
</div>

