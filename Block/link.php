<?php

namespace Pixelpro\Helloworld\Block;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    @   return string

    protected function _toHtml()
    {
        if(false != $this->getTemplate()){
            return parent::_toHtml();

        }
        return '<li><a' $this->getlinkAttributes() '>' $this->escapeHtml($this->getLabel())'
        </a></li>';
    }
    }
}
