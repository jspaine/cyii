<?php

namespace jspaine\cyii;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;

class CYii extends Widget {

    public $htmlOptions = [];
    public $options = [];

    public function init()
    {
        if (isset($this->htmlOptions['id']))
        {
            $this->id = $this->htmlOptions['id'];
        }
        else
        {
            $this->id = $this->htmlOptions['id'] = $this->getId();
        }

        if (is_string($this->options))
        {
            $this->options = Json::decode($this->options);
        }
        $this->options['bindto'] = '#' . $this->id;

        parent::init();
    }

    public function run()
    {
        echo Html::tag('div', '', $this->htmlOptions);
        $this->registerAssets();
        parent::run();
    }

    protected function registerAssets()
    {
        CYiiAsset::register($this->view)->registerScripts();
        $options = Json::encode($this->options);
        $js = "var {$this->id} = c3.generate({$options});";

        $this->view->registerJs($js, View::POS_READY, uniqid(
                        __CLASS__ . '#' . $this->id
        ));
    }

}
