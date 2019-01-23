<?php
namespace app\controllers;

use Yii;
use yii\base\Controller;

class NewsController extends Controller
{
    public function actions()
    {
        return [
            'static' => [
                'class' => 'yii\web\ViewAction',
            ],
        ];
    }

    public function actionIndex() {
        echo 'This is first controller';
    }

    public function actionItemList() {
        $newsList = $this->dataItems();
        return $this->render('itemList', compact('newsList'));
    }

    public function dataItems() {
        $newsList = [
            ['title' => 'First World War', 'date' => '1914-07-28'],
            ['title' => 'Next World War', 'date' => '1914-07-28'],
            ['title' => 'Second World War', 'date' => '1914-07-28']
        ];

        return $newsList;
    }

    public function actionItemDetail() {
        $title = Yii::$app->request->get('title');
        $newsList = $this->dataItems();

        $item = null;
        foreach ($newsList as $n) {
            if ($n['title'] == $title) {
                $item = $n;
            }
        }

        return $this->render('itemDetail', compact('item'));
    }

    public function actionAdvTest() {
        return $this->render('advTest');
    }

    public function actionResponsiveContentTest() {
        $responsive = Yii::$app->request->get('responsive', 0);

        if ($responsive) {
            $this->layout = 'responsive';
        }
        else
        {
            $this->layout = 'main';
        }

        return $this->render('responsiveContentTest', compact('responsive'));
    }
}