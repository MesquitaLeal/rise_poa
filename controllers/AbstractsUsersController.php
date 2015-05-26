<?php

namespace app\controllers;

use Yii;
use app\models\AbstractsUsers;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AbstractsUsersController implements the CRUD actions for AbstractsUsers model.
 */
class AbstractsUsersController extends InitController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AbstractsUsers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AbstractsUsers::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AbstractsUsers model.
     * @param integer $users_id
     * @param integer $abstracts_id
     * @return mixed
     */
    public function actionView($users_id, $abstracts_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($users_id, $abstracts_id),
        ]);
    }

    /**
     * Creates a new AbstractsUsers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AbstractsUsers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'users_id' => $model->users_id, 'abstracts_id' => $model->abstracts_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AbstractsUsers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $users_id
     * @param integer $abstracts_id
     * @return mixed
     */
    public function actionUpdate($users_id, $abstracts_id)
    {
        $model = $this->findModel($users_id, $abstracts_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'users_id' => $model->users_id, 'abstracts_id' => $model->abstracts_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AbstractsUsers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $users_id
     * @param integer $abstracts_id
     * @return mixed
     */
    public function actionDelete($users_id, $abstracts_id)
    {
        $this->findModel($users_id, $abstracts_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AbstractsUsers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $users_id
     * @param integer $abstracts_id
     * @return AbstractsUsers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($users_id, $abstracts_id)
    {
        if (($model = AbstractsUsers::findOne(['users_id' => $users_id, 'abstracts_id' => $abstracts_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
