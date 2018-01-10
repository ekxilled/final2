<?php
use yii\helpers\Url;
/**
 * Created by PhpStorm.
 * User: joaos
 * Date: 09/01/2018
 * Time: 21:17
 */


foreach($games as $game) {
    echo('<h1>'. '<a href="' . Url::to(['game/view', 'idgame' => $game->idgame]) . '">' . $game->gamename . '</a>' . '<br>');
}