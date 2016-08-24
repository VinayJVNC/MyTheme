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
class Staticblock implements \Magento\Framework\Option\ArrayInterface
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
    	$collection = $this->_groupModel->getCollection();
    	$blocks = array();
    	foreach ($collection as $_block) {
    		$blocks[] = [
    		'value' => $_block->getId(),
    		'label' => $_block->getTitle()
    		];
    	}
        array_unshift($blocks, array(
                'value' => 'custom_content',
                'label' => 'Use Custom Content',
                ));
        return $blocks;
    }
}