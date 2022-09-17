<?php

namespace frontend\controllers;

use app\models\Products;
use app\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use app\models\Cart;


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
        $cartModel = new Cart();
        if ($this->request->isPost && $cartModel->load($this->request->post())) {

            $cart = Cart::find()->where(["user_id"=>(String)Yii::$app->user->identity->_id])->where(["product_id"=>$cartModel->product_id,"size"=>$cartModel->size, "color"=>$cartModel->color])->one();

            if (!empty($cart)) {
                $cartModel = Cart::findOne(["_id" => $cart->_id]);
                $cartModel->quantity = (String)((int)$cart->quantity + 1);
            }
                $cartModel->save();
            
            
            Yii::$app->session->setFlash('success', ' Add to cart successfully.');
            return $this->redirect(['cart/index']);
        }
        return $this->render('view', [
            'model' => $this->findModel($_id),
            'product_id' => $_id,
            'cartModel' => $cartModel
        ]);
        
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

    
    

   
    
    
    
    

    
}
