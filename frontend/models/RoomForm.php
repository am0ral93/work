<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * Пусто
 */
class RoomForm extends ActiveRecord
{
    public static function tableName()
    {
        return '{{room}}';
    }

/*    public function rules()
{
    return [
        [['price'], 'required'],
        ];*/
}
