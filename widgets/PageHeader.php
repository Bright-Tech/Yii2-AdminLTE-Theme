<?php
namespace bright_tech\yii2theme\adminlte\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;

/**
 * Class PageHeader
 *
 * 使用方式
 * <?= PageHeader::widget(['title'=>'标题', 'subTitle'=>'副标题'])?>
 * 或者
 * <?php PageHeader::begin(['title'=>'标题', 'subTitle'=>'副标题'])?>
 * 其他需要在标题中显示的内容
 * <?php PageHeader::end()?>
 *
 * @package bright_tech\yii2theme\aceadmin\widgets
 */
class PageHeader extends Widget
{

    public $title = 'Default Title';

    public $subTitle = '';

    public $options = [];

    public function init()
    {
        parent::init();
        $this->initOptions();

        echo Html::beginTag('section', $this->options) . "\n";
        echo Html::beginTag('h1') . "\n";
        echo $this->title;
        if (!empty($this->subTitle)) {
            echo Html::tag('small', $this->subTitle) . "\n";
        }
        echo "\n" . Html::endTag('h1');
    }

    public function run()
    {

        echo "\n" . Html::endTag('section');
    }

    protected function initOptions()
    {
        Html::addCssClass($this->options, 'content-header');
    }
}

