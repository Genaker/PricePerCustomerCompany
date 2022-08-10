<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Plugin\Magento\Catalog\Model;

class Product
{

    public function aroundGetPrice(
        \Magento\Catalog\Model\Product $subject,
        \Closure $proceed
    ) {
        //Your plugin code
        $result = $proceed();
        return $result;
    }
}

