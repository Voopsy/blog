<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<br>

<h1 class="my-3 d-flex justify-content-center text-white"  style="font-family: 'Arial Black'">Рисунки</h1>
<br>

<?php Yii::$app->session->hasFlash('error') ?>
<?php Yii::$app->session->hasFlash('success') ?>
<div class="d-flex justify-content-between flex-wrap my-3">
    <div class="btn-group">
        <button type="button" class="btn btn-success" data-bs-toggle="dropdown" aria-expanded="false">
            Отфильтровать по категориям
        </button>
        <ul class="dropdown-menu">
            <form action="get">
                <?php foreach ($category as $item): ?>
                    <li><a class="dropdown-item" href="products?category=<?= $item['id'] ?>"><?= $item['name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </form>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-success" data-bs-toggle="dropdown" aria-expanded="false">
            Сортировать по
        </button>
        <ul class="dropdown-menu">
            <form method="get">
                <li><a class="dropdown-item" href="products?year=DESC">году (макс)</a></li>
                <li><a class="dropdown-item" href="products?year=ASC">году (мин)</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="products?name=DESC">названию (макс)</a></li>
                <li><a class="dropdown-item" href="products?name=ASC">названию (мин)</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="products?price=DESC">популярности (макс)</a></li>
                <li><a class="dropdown-item" href="products?price=ASC">популярности (мин)</a></li>
            </form>
        </ul>
    </div>
</div>

<div class="content m-3 w-25">
        <img src="images/1.jpg" alt="1" class="card-img m-3 ">
        <img src="images/2.jpg" alt="1" class="card-img m-3 ">
        <img src="images/3.jpg" alt="1" class="card-img m-3 ">
</div>
<div class="content m-3 w-25">
        <img src="images/4.jpg" alt="1" class="card-img m-3 ">
        <img src="images/5.jpg" alt="1" class="card-img m-3 ">
        <img src="images/6.jpg" alt="1" class="card-img m-3 ">
</div>
<div class="content m-3 w-25">
        <img src="images/7.jpg" alt="1" class="card-img m-3 ">
</div>
