<?php
namespace codeaffairs\slider;

use yii\web\View;
use Yii;

class Slider {
    public function test(){
        $view = new View();
        $view->registerCssFile(Yii::getAlias('@vendor/code-affairs/yii2-slider/assets/css/main.css'));

        return "test";
    }
}