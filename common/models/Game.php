<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property int $idgame
 * @property string $gamename
 * @property string $releasedate
 * @property string $type
 * @property string $details
 *
 * @property Comments[] $comments
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gamename', 'type'], 'required'],
            [['releasedate'], 'safe'],
            [['gamename', 'type'], 'string', 'max' => 45],
            [['details'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgame' => 'Idgame',
            'gamename' => 'Gamename',
            'releasedate' => 'Releasedate',
            'type' => 'Type',
            'details' => 'Details',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['comment_game_id' => 'idgame']);
    }
}
