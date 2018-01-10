<?php

namespace frontend\controllers;

use Yii;
use common\models\Game;
use common\models\GameSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GameController implements the CRUD actions for Game model.
 */
class GameController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Game models.
     * @return mixed
     */
    public function actionIndex()
    {
        $games = Game::find()->all();

        return $this->render('index', ['games' => $games]);
    }

    public function actionView($idgame)
    {
        $game = Game::findOne($idgame);

        return $this->render('view', ['game' => $game]);
    }
}
