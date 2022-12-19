<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var app\models\PasswordForm $model */

?>
<br>
<h1 class="d-flex justify-content-center" style="font-family: 'Arial Black'">История заказов</h1>
<br>

<?php Yii::$app->session->hasFlash('error') ?>
<?php Yii::$app->session->hasFlash('success') ?>



<div class="my-2">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название товара</th>
            <th scope="col">Количество</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($basket as $item): ?>
            <tr>
                <th scope="row"><?= $item['id'] ?></th>
                <td><?= $item['product']['name'] ?></td>
                <td><?= $item['counts'] ?></td>
                <td>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
