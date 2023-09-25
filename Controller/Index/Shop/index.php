<?php 
namespace Pixelpro\Helloworld\Controller\Shop; 
class Test extends \Magento\Framework\App\Action\Action 
{
    protected $_pageFactory;
     public function __construct(
        \magento\Framework\App\Action\Context $context,
         \Magento\Framework\View\PageFactpry $pageFactory)
         { 
            $this->_pageFactory = $pageFactory; 
            return parent::__construct($context);
        }
         public function execute()
         { 
            
             return $this->_pageFactory->create();
             }
            }