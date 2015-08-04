<?php

namespace app\controllers;

use Yii;
use app\models\Orders;
use yii\web\Controller;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;


class OrdersController extends Controller
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
        $lst = Orders::find()
            ->where([DELETED => DELETED_NORMAL])
            ->orderBy(DATE)
            ->all();

        return $this->render('index',
        ['listLine' => $lst,]
         );
    }


    public function actionEdit($id)
    {
        $model = Orders::findOne($id);

    if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){

                $model->save();
                $id = $model->id;
                return $this->redirect(['orders/index']);
            }
        } else {

            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    }

    public function actionPreview($id)
    {
        $model = Orders::findOne($id);
        return $this->render('preview', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {

        $model = Orders::findOne($id);
        if(!empty($model)){
            $model->deleted = DELETED_DELETED;
            if($model->save()) return $this->redirect('index');
        }
    }
    
}
