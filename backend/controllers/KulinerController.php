<?php

namespace backend\controllers;

use app\models\Kuliner;
use app\models\KulinerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\Pagination;

/**
 * KulinerController implements the CRUD actions for Kuliner model.
 */
class KulinerController extends Controller
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
     * Lists all Kuliner models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KulinerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $query = Kuliner::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 5]);
        
        $models = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'models' => $models,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Displays a single Kuliner model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kuliner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kuliner();

        if ($this->request->isPost) {
            $model->gambar3 = uploadedFile::getInstance($model, 'gambar3');

            if ($model->gambar3) {
                $filename = $model->gambar3->baseName . '-' . uniqid().'.'.$model->gambar3->extension;                

                $model->gambar3->saveAs('@frontend/web/uploads/' . $filename);

                $model->gambar = $filename;

                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            } else {
                $model->gambar = '';
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kuliner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {

            $model->gambar3 = uploadedFile::getInstance($model, 'gambar3');

            if ($model->gambar3) {
                $filename = $model->gambar3->baseName . '-' . uniqid().'.'.$model->gambar3->extension;
                $model->gambar3->saveAs('@frontend/web/uploads/' . $filename);
                $model->gambar = $filename;

                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                
                }
            }else{
                $model->gambar = '';
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kuliner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kuliner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Kuliner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kuliner::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
