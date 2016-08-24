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
namespace Sundial\ImageSlider\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
	protected $_filterProvider;

	public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider
        ) {
        parent::__construct($context);
        $this->_filterProvider = $filterProvider;
    }

	public function filter($str)
	{
		$html = $this->_filterProvider->getPageFilter()->filter($str);
		return $html;
	}
}