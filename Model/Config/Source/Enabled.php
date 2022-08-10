<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Model\Config\Source;

class Enabled implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => '', 'label' => __('')]];
    }

    public function toArray()
    {
        return ['' => __('')];
    }
}

