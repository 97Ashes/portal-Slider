<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Duyurugonder;
use frontend\models\DuyurugonderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DuyurugonderController implements the CRUD actions for Duyurugonder model.
 */
class DuyurugonderController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Duyurugonder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DuyurugonderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Duyurugonder model.
     * @param integer $id
     * @param integer $senderid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $senderid)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $senderid),
        ]);
    }

    /**
     * Creates a new Duyurugonder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Duyurugonder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'senderid' => $model->senderid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Duyurugonder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $senderid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $senderid)
    {
        $model = $this->findModel($id, $senderid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'senderid' => $model->senderid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Duyurugonder model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $senderid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $senderid)
    {
        $this->findModel($id, $senderid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Duyurugonder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $senderid
     * @return Duyurugonder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $senderid)
    {
        if (($model = Duyurugonder::findOne(['id' => $id, 'senderid' => $senderid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
