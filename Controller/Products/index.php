<?php 

namespace Pixelpro\Helloworld\Controller\Products;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_PageFactory ;
    public function__construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory )
        {
            $this->$_PageFactory = $pageFactory;
            return parent::__construct($context);
        }
        public function execute()
        {
            return $this->_PageFactory->create
        }
}