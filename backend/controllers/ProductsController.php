<?php

namespace backend\controllers;

use app\models\Products;
use app\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
                        'delete-all' => ['POST'],
                        
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Products models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
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
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Products();

        
        if ($this->request->isPost) {

            // var_dump($this->request->post());
            // exit();
            

            if ($model->load($this->request->post())) {
                if(empty($model->sizes)){
                    $model->sizes = [];
                }
                if(empty($model->colors)){
                    $model->colors = [];
                }
                if($model->save()){
                    Yii::$app->session->setFlash('success', '['.$model->product_name.'] created successfully.');
                    return $this->redirect(['view', '_id' => (string) $model->_id]);
                }
                
                // return $this->redirect(['view', '_id' => (string) $model->_id]);
                
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($_id)
    {
        $model = $this->findModel($_id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            if(empty($model->sizes)){
                $model->sizes = [];
            }
            if(empty($model->colors)){
                $model->colors = [];
            }
            if($model->save()){
                Yii::$app->session->setFlash('success', '['.$model->product_name.'] created successfully.');
                return $this->redirect(['view', '_id' => (string) $model->_id]);
            }
            
            // return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($_id)
    {
        $this->findModel($_id)->delete();
        Yii::$app->session->setFlash('error', 'Products has been deleted successfully.');

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $_id ID
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($_id)
    {
        if (($model = Products::findOne(['_id' => $_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
    public function actionDeleteAll()
    {
        $delete_ids = explode(',', Yii::$app->request->post('ids'));
        
            foreach ($delete_ids as $_id) {
                $this->findModel($_id)->delete();
            }
            Yii::$app->session->setFlash('error', 'Products has been deleted successfully.');
        
        return $this->redirect(['index']);
        // Products::deleteAll(['in','_id',$delete_ids]);
        // Yii::$app->session->setFlash('error', 'Products has been deleted successfully.');
        // return $this->redirect(['index']);
       

    }

   
    
    
    
    

    
}
