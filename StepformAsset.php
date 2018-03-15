<?php
/**
 * @copyright Copyright &copy; A.F.Schuurman, 2015
 * @package yii2-stepform
 * @version 1.0.0
 */
namespace alkurn\stepform;

use yii\web\AssetBundle;

/**
 * Asset bundle for Stepform Widget
 *
 * @author A.F.Schuurman <andre.schuurman+yii2-stepform@gmail.com>
 * @since 1.0
 */
class StepformAsset extends AssetBundle
{
	public $sourcePath = '@alkurn/stepform';
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset'
	];
	public $css = [
		'css/stepform.css',
	];
	public $js = [
		'js/stepform.js'
	];
}