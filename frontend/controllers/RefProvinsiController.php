<?php

namespace frontend\controllers;

use common\models\RefProvinsi;
use frontend\models\RefProvinsiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RefProvinsiController implements the CRUD actions for RefProvinsi model.
 */
class RefProvinsiController extends Controller
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
     * Lists all RefProvinsi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RefProvinsiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RefProvinsi model.
     * @param int $kd_prov Kd Prov
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_prov)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_prov),
        ]);
    }

    /**
     * Creates a new RefProvinsi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RefProvinsi();
        $model->kd_prov = RefProvinsi::find()->max('kd_prov') + 1;
        $model->create_at = date('Y-m-d H:i:s');
        $model->update_at = date('Y-m-d H:i:s');

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_prov' => $model->kd_prov]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RefProvinsi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kd_prov Kd Prov
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_prov)
    {
        $model = $this->findModel($kd_prov);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_prov' => $model->kd_prov]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RefProvinsi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kd_prov Kd Prov
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_prov)
    {
        $this->findModel($kd_prov)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RefProvinsi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kd_prov Kd Prov
     * @return RefProvinsi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_prov)
    {
        if (($model = RefProvinsi::findOne([$kd_prov])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
