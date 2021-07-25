<?php

namespace app\models;

class User extends \yii\db\ActiveRecord
{

    public static function tableName(){

        return 'users';
    }

}