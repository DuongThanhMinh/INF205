<?php

namespace app\controllers;

use app\models\ProductsType;
use Yii;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;


class ProductstypeController  extends Controller
{
     public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $lst = ProductsType::find()
            ->where([DELETED => DELETED_NORMAL])
            ->orderBy(NAME)
            ->all();

        return $this->render('index', ['listLine' => $lst]);
    }

    public function actionEdit($id)
    {
        $model = ProductsType::findOne($id);

    if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){

                $model->save();
                $id = $model->id;
                return $this->redirect(['productstype/index']);
            }
        } else {

            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreate()
    {
        $model = new ProductsType();
        if ($model->load(Yii::$app->request->post())) {
           if($model->validate()){

                $model->save();
                $id = $model->id;
                return $this->redirect(['productstype/index']);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionPreview($id)
    {
        $model = ProductsType::findOne($id);

        return $this->render('preview', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {

        $model = ProductsType::findOne($id);
        if(!empty($model)){
            $model->deleted = DELETED_DELETED;
            if($model->save()) return $this->redirect('index');
        }
    }
}
