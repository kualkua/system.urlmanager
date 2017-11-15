<?php
/**
 * Created by Andru Cherny
 * User: wir_wolf
 * Date: 17.02.16
 * Time: 17:18
 */

namespace Redefinitions\UrlManager;

/**
 * Class UrlManager
 * @package Redefinitions\UrlManager
 */
class UrlManager extends \yii\web\UrlManager
{

    /**
     * ReDefine default Yii config
     */
    public function init() {
        $this->enablePrettyUrl = true;
        $this->setBaseUrl(dirname($_SERVER['PHP_SELF']));
        $this->showScriptName = false;
        $this->enableStrictParsing = true;
        return parent::init();
    }
}