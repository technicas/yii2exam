<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;

/**
 * Class Room
 * @package app\models
 *
 * @property int $floor
 * @property int $room_number
 * @property int $has_conditioner
 * @property int $has_tv
 * @property int $has_phone
 * @property \DateTime $available_from
 * @property double $price_per_day
 * @property string $description
 */
class Room extends ActiveRecord
{
    public $floor;
    public $room_number;
    public $has_conditioner;
    public $has_tv;
    public $has_phone;
    public $available_from;
    public $price_per_day;
    public $description;

    public function attributeLabels()
    {
        return [
            'floor' => '楼层',
            'room_number' => '房间号',
            'has_conditioner' => '洗漱可用',
            'has_tv' => '电视可用',
            'has_phone' => '电话可用',
            'available_from' => '空闲',
            'price_per_day' => '价格',
            'description' => '描述',
        ];
    }

    public function rules()
    {
        return [
            ['floor', 'integer', 'min' => 0],
        ];
    }
}