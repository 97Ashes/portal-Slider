<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchedulerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedulers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scheduler-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scheduler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'postdate',
            'enddate',
            'sendername',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
