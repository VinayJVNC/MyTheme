<?php
/**
 * Sheamoisture
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Sheamoisture.com license that is
 * available through the world-wide-web at this URL:
 * http://www.sheamoisture.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category   SundialTheme
 * @package    Sundial_ImageSlider
 * @copyright  Copyright (c) 2014 Sheamoisture (http://www.sheamoisture.com/)
 * @license    http://www.sheamoisture.com/LICENSE-1.0.html
 */
namespace Sundial\ImageSlider\Model\Config\Source;
class TransitionEffect implements \Magento\Framework\Option\ArrayInterface
{
	protected  $_blockModel;

    /**
     * @param \Magento\Cms\Model\Block $blockModel
     */
    public function __construct(
    	\Magento\Cms\Model\Block $blockModel
    	) {
    	$this->_groupModel = $blockModel;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
    	$effects = [
            ['label'=>__('Fade'),'value'=>'fade'],
            ['label'=>__('Back Slide'),'value'=>'backSlide'],
            ['label'=>__('Go Down'),'value'=>'goDown'],
            ['label'=>__('Fade Up'),'value'=>'fadeUp'],
        ];
        array_unshift($effects, array(
                'value' => '',
                'label' => '',
                ));
        return $effects;
    }
}