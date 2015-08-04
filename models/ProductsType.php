<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products_type".
 *
 * @property integer $id
 * @property string $name
 * @property string $type_name
 * @property integer $deleted
 */
class ProductsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deleted'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['type_name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên Thể Loại',
            'type_name' => 'Mã Thể Loại',
            'deleted' => 'Deleted',
        ];
    }
}
