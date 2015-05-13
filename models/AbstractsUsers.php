<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abstracts_users".
 *
 * @property integer $users_id
 * @property integer $abstracts_id
 *
 * @property Abstracts $abstracts
 * @property Users $users
 */
class AbstractsUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abstracts_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users_id', 'abstracts_id'], 'required'],
            [['users_id', 'abstracts_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'users_id' => Yii::t('app', 'Users ID'),
            'abstracts_id' => Yii::t('app', 'Abstracts ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbstracts()
    {
        return $this->hasOne(Abstracts::className(), ['id' => 'abstracts_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }
}
