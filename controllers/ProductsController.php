<?php

namespace app\controllers;

use app\models\Posts;
use Yii;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Products;
use yii\web\UploadedFile;

class ProductsController extends Controller
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
        $lst = Products::find()
            ->where([DELETED => DELETED_NORMAL])
            ->orderBy(NAME)
            ->all();

        return $this->render('index', ['listLine' => $lst]);
    }

    public function actionEdit($id)
    {
        $model = Products::findOne($id);

    if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){

                $model->save();
                $id = $model->id;
                $model->file = UploadedFile::getInstance($model, 'file');
                if($model->file){
                     $model->file->saveAs('uploads/Products_'.$model->id.'_'.getdate()[0] . '.' . $model->file->extension);
                $model->image = '@web/uploads/Products_'.$model->id.'_'.getdate()[0].'.'.$model->file->extension;
                $model->save();
               
                }
                return $this->redirect(['products/index']);
            }
        } else {

            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreate()
    {
        $model = new Products();
        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->name;

            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension);

            $model->image = '@web/uploads/'.$imageName.'.'.$model->file->extension;
            $model->save();

            return $this->redirect('index');
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionPreview($id)
    {
        $model = Products::findOne($id);

        return $this->render('preview', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {

        $model = Products::findOne($id);
        if(!empty($model)){
            $model->deleted = DELETED_DELETED;
            if($model->save()) return $this->redirect('../products/index');
        }
    }
}
