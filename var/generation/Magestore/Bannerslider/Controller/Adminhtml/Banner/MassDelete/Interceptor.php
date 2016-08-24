<?php
namespace Magestore\Bannerslider\Controller\Adminhtml\Banner\MassDelete;

/**
 * Interceptor class for @see
 * \Magestore\Bannerslider\Controller\Adminhtml\Banner\MassDelete
 */
class Interceptor extends \Magestore\Bannerslider\Controller\Adminhtml\Banner\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magestore\Bannerslider\Model\BannerFactory $bannerFactory, \Magestore\Bannerslider\Model\SliderFactory $sliderFactory, \Magestore\Bannerslider\Model\ResourceModel\Banner\CollectionFactory $bannerCollectionFactory, \Magestore\Bannerslider\Model\ResourceModel\Slider\CollectionFactory $sliderCollectionFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Backend\Helper\Js $jsHelper)
    {
        $this->___init();
        parent::__construct($context, $bannerFactory, $sliderFactory, $bannerCollectionFactory, $sliderCollectionFactory, $coreRegistry, $fileFactory, $resultPageFactory, $resultLayoutFactory, $resultForwardFactory, $storeManager, $jsHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
