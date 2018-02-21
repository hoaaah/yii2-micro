<?php

namespace micro\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{ 
    public static function tableName()
    {
        return '{{posts}}';
    }
}