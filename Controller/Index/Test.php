<?php 
namespace Pixelpro\Helloworld\Controller\Index; 
class Test extends \Magento\Framework\App\Action\Action 
{
    protected $_pageFactory;
     public function __construct(
        \magento\Framework\App\Action\Context $context,
         \Magento\Framework\View\PageFactory $pageFactory)
         { 
            $this->_pageFactory = $pageFactory; 
            return parent::__construct($context);
        }
         public function execute()
         { 
            echo "Hello";
             exit;
             }
            }

            