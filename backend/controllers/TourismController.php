<?php

namespace backend\controllers;

use app\models\TblTourism;
use app\models\TblTourismSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\UploadedForm;
use yii\data\Pagination;

use Yii;

/**
 * TourismController implements the CRUD actions for TblTourism model.
 */
class TourismController extends Controller
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
     * Lists all TblTourism models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblTourismSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $query = TblTourism::find();
        $count = $query->count();
        $pagination = new Pagination([
            'totalCount' => $count, 
            'pageSize' => 4
        ]);

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
     * Displays a single TblTourism model.
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
     * Creates a new TblTourism model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblTourism();

        if ($this->request->isPost) {
            $model->gambar1 = uploadedFile::getInstance($model, 'gambar1');

            if ($model->gambar) {
                $filename = $model->gambar1->baseName . '-' . uniqid().'.'.$model->gambar1->extension;                

                $model->gambar1->saveAs('@frontend/web/uploads/' . $filename);

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
     * Updates an existing TblTourism model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {

            $model->gambar1 = uploadedFile::getInstance($model, 'gambar1');

            if ($model->gambar1) {
                $filename = $model->gambar1->baseName . '-' . uniqid().'.'.$model->gambar1->extension;
                $model->gambar1->saveAs('@frontend/web/uploads/' . $filename);
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
     * Deletes an existing TblTourism model.
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
     * Finds the TblTourism model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TblTourism the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblTourism::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
