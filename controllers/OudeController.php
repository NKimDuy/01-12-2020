<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\SinhVien;
use app\models\HoSoSinhVien;

class OudeController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}