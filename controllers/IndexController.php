<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.11.16
 * Time: 13:27
 */

namespace app\controllers;

use Yii;
use app\models\IndexModel;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){

        $model = new IndexModel();

        if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
            return $this->render('view', ['model' => $model]);
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }

}