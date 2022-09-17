<?php

namespace frontend\controllers;

use app\models\Movies;
use app\models\MoviesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use app\models\Bookmark;

/**
 * MoviesController implements the CRUD actions for Movies model.
 */
class MoviesController extends Controller
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
     * Lists all Movies models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MoviesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Movies model.
     * @param int $_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($_id)
    {
        // $bookmarkModel = new Bookmark();
        // if ($this->request->isPost && $bookmarkModel->load($this->request->post())) {

        //     $bookmark = Movies::find()->where(["user_id"=>(String)Yii::$app->user->identity->_id])->where(["movie_id"=>$bookmarkModel->movie_id])->one();

        //     if (!empty($bookmark)) {
        //         $bookmarkModel = Movies::findOne(["_id" => $bookmark->_id]);
        //         // $bookmarkModel->delete();
        //     } else {
        //         // $bookmarkModel->user_id = (String)Yii::$app->user->identity->_id;
        //         $bookmarkModel->save();

            
            
        //     Yii::$app->session->setFlash('success', ' Add to bookmark successfully.');
        //     return $this->redirect(['bookmark/index']);
        // }
        // return $this->render('view', [
        //     'model' => $this->findModel($_id),
        //     'movie_id' => $_id,
        //     'bookmarkModel' => $bookmarkModel
        // ]);
        // }
        $bookmarkModel = new Bookmark();
        if ($this->request->isPost && $bookmarkModel->load($this->request->post())) {

            $bookmark = Movies::find()->where(["user_id"=>(String)Yii::$app->user->identity->_id])->where(["product_id"=>$bookmarkModel->movie_id])->one();

            if (!empty($bookmark)) {
                $bookmarkModel = Bookmark::findOne(["_id" => $bookmark->_id]);
            }
                $bookmarkModel->save();
            
            
            Yii::$app->session->setFlash('success', ' Add to cart successfully.');
            return $this->redirect(['cart/index']);
        }
        return $this->render('view', [
            'model' => $this->findModel($_id),
            'movie_id' => $_id,
            'bookmarkModel' => $bookmarkModel
        ]);
    }
    


    /**
     * Creates a new Movies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Movies();

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', '_id' => (string) $model->_id]);
        //     }
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);
        //&& $model->validate()
        if($this->request->isPost){
            if ($model->load(Yii::$app->request->post())) {
                $model->movies_img = $model->upload($model,'movies_img');
                $model->save();
                Yii::$app->session->setFlash('success', '['.$model->movies_name.'] created successfully.');
                return $this->redirect(['view', '_id' => (string)$model->_id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);

        // if ($model->load(Yii::$app->request->post())) {
        //     $model->movies_img = $model->upload($model,'movies_img');
        //     $model->save();
        //     Yii::$app->session->setFlash('success', '['.$model->movies_name.'] created successfully.');
        //     return $this->redirect(['view', '_id' => (string)$model->_id]);
        // } else {
        //     return $this->render('create', [
        //         'model' => $model,
        //     ]);
        // }
    }

    /**
     * Updates an existing Movies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($_id)
    {
        $model = $this->findModel($_id);

        // if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
        //     return $this->redirect(['view', '_id' => (string) $model->_id]);
        // }

        // return $this->render('update', [
        //     'model' => $model,
        // ]);
        if ($model->load(Yii::$app->request->post())) {
            $model->movies_img = $model->upload($model,'movies_img');
            $model->save();
            Yii::$app->session->setFlash('success', '['.$model->movies_name.'] created successfully.');
            return $this->redirect(['view', '_id' => (string)$model->_id]);
        }  else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Movies model.
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
     * Finds the Movies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $_id ID
     * @return Movies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($_id)
    {
        if (($model = Movies::findOne(['_id' => $_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
