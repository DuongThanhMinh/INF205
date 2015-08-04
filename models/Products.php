<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $image
 * @property integer $deleted
 *
 * @property OrderDetail[] $orderDetails
 */
class Products extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price', 'image'], 'required'],
            [['deleted'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 50],
            [['price'], 'string', 'max' => 20],
            [['image'], 'string', 'max' => 100],
            ['file', 'file']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên Sản Phẩm',
            'description' => 'Mô Tả',
            'price' => 'Giá',
            'image' => 'Image',
            'file' => 'Chọn Ảnh ',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['products_id' => 'id']);
    }
}
