<?php

namespace app\components;


use Yii;
use yii\base\Component;

//use yii\base\InvalidConfigException;
 
class MyComponent extends Component
{
     public function welcome()
     {
       echo "<div style='width:200px;height:50px;position:absolute;top:400px;background:red;color:yellow;'>
             This is My Component
             </div>";
     }
 
}