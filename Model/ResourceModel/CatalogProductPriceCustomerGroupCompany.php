<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CatalogProductPriceCustomerGroupCompany extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('catalog_product_price_customer_group_company', 'catalog_product_price_customer_group_company_id');
    }
}

