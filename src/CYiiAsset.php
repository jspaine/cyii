<?php

/* 
 * CYiiAsset class file
 * 
 * @author James Paine <painejs@hotmail.com>
 * @link https://github.com/jspaine/cyii/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @version 0.0.1
 * 
 */

namespace jspaine\cyii;

use yii\web\AssetBundle;

class CYiiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/jspaine/cyii/src/assets';
    
    public function registerScripts()
    {
        $min = YII_DEBUG ? '.min' : '';
        $js = 'js/';
        $css = 'css/';
        
        $this->js[] = $js . 'd3' . $min . '.js';
        $this->js[] = $js . 'c3' . $min . '.js';
        
        $this->css[] = $css . 'c3' . $min . '.css';
        
        return $this;
    }
}
