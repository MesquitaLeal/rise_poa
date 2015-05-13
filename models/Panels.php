<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "panels".
 *
 * @property string $name
 * @property integer $id
 */
class Panels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'panels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
