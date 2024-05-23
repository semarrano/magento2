<?php

namespace Ntt\Blogs\Model;

use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Ntt\Blogs\Model\ResourceModel\Blog');
    }
}
