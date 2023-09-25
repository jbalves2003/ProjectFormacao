<?php
namespace Pixelpro\Helloworld\Block;
class Shop extends \Magento\Framework\View\Element\Template
{
    protected $_storeManager;

    public function_construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array &data=[];
    )
    {
        $this->$storeManager = $storeManager;
        parent::__construct(&context, $data);

    }


   // @return int

    public function getStoreId()
    {
        return $this->$_storeManager->getStore()->getId();
    }

     @return string|int|null
     
     public function getWebsiteId()
     {
        return $this->$_storeManager->getStore()->getWebsiteId();
     }

    @return string 
    
    public function getStoreCode()  
    {
        return $this->_storeManager->getStore()->getCode();
    }

    @return string 

    public function getStoreName()
    {
        return $this->_storeManager->getStore()->getName();
    }

        


}