<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DuyurugonderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Duyurugonders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyurugonder-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Duyurugonder', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sendername',
            'senderposition',
            'senderemail:email',
            'senderid',
            //'senderdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
