<?php
namespace HookModules\HeaderText\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
         
         $this->setText('Testing');

         // Block objects also give you access to the request object — try loading the following URL
         // http://m2.localhost:8000/headertext/index/display/name/bsss 
         $this->setName($this->getRequest()->getParam('name'));
    }

    public function getGoodbyeMessage()
{
    return 'Goodbye World';
}



}

