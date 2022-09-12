<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $units
 * @property float $price
 * @property string $image
 */
class Product extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price'], 'required'],
            [['units'], 'integer'],
            [['price'], 'number'],
            [['name', 'description', 'image'], 'string', 'max' => 255],
            [['file'], 'file', 'extensions' => 'jpg,png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'description' => 'Descripción',
            'file' => 'Imagen',
            'units' => 'Unidades',
            'price' => 'Precio'
        ];
    }
}
