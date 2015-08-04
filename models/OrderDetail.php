<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $id
 * @property integer $ordersid
 * @property string $name
 * @property integer $quantity
 * @property integer $price
 * @property string $guarantee
 * @property integer $orders_id
 * @property integer $products_id
 * @property integer $deleted
 *
 * @property Orders $orders
 * @property Products $products
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ordersid', 'quantity', 'price', 'orders_id', 'products_id', 'deleted'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['guarantee'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ordersid' => 'Hóa Đơn',
            'name' => 'Tên Sản Phẩm',
            'quantity' => 'Số Lượng',
            'price' => 'Giá',
            'guarantee' => 'Bảo Hành',
            //'orders_id' => 'Orders ID',
            //'products_id' => 'Products ID',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::className(), ['id' => 'orders_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'products_id']);
    }
}
