<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property integer $deleted
 *
 * @property Orders[] $orders
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'address'], 'required'],
            [['deleted'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['email', 'address'], 'string', 'max' => 80],
            [['phone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên Khách Hàng',
            'email' => 'Email',
            'address' => 'Địa Chỉ',
            'phone' => 'Số Điện Thoại',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['customer_id' => 'id']);
    }
}
