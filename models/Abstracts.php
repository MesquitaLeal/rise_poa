<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abstracts".
 *
 * @property integer $id
 * @property string $text
 * @property string $panel
 *
 * @property AbstractsUsers[] $abstractsUsers
 * @property Users[] $users
 */
class Abstracts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

     private $_userId;

    public static function tableName()
    {
        return 'abstracts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'email', 'institution', 'text', 'panel'], 'required'],
            [['author', 'email', 'institution', 'text'], 'string'],
            [['email'], 'email'],
            [['panel'], 'integer'],
            [['panel'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'author' => Yii::t('app', 'Autor'),
            'email' => Yii::t('app', 'Correo Electrónico'),
            'institution' => Yii::t('app', 'Crédito Académico'),
            'text' => Yii::t('app', 'Resumen'),
            'panel' => Yii::t('app', 'Mesa Tematica'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbstractsUsers()
    {
        return $this->hasMany(AbstractsUsers::className(), ['abstracts_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['id' => 'users_id'])->viaTable('abstracts_users', ['abstracts_id' => 'id']);
    }

    public function getPanels()
    {
        return $this->hasOne(Panels::className(), ['id' => 'panel']);
    }


}
