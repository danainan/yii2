<?php

namespace frontend\controllers;

use app\models\Bookmark;
use app\models\BookmarkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * BookmarkController implements the CRUD actions for Bookmark model.
 */
class BookmarkController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Bookmark models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $bookmark = Bookmark::find()->where(["user_id"=>(String)Yii::$app->user->identity->_id])->all();

        return $this->render('index', [
            'bookmark' => $bookmark,
        ]);
    }

    /**
     * Displays a single Bookmark model.
     * @param int $_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($_id),
        ]);
    }

    /**
     * Creates a new Bookmark model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bookmark();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', '_id' => (string) $model->_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bookmark model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($_id)
    {
        $model = $this->findModel($_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', '_id' => (string) $model->_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bookmark model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($_id)
    {
        $this->findModel($_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bookmark model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $_id ID
     * @return Bookmark the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($_id)
    {
        if (($model = Bookmark::findOne(['_id' => $_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
