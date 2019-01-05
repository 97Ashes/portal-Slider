<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DuyurupaneliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Duyurupanelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyurupaneli-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Duyurupaneli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'duyuruname',
            'senderid',
            'sendername',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
