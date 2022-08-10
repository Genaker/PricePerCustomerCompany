<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Model\ResourceModel\CatalogProductPriceCustomerGroupCompany;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'catalog_product_price_customer_group_company_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Genaker\PricePerCustomerCompany\Model\CatalogProductPriceCustomerGroupCompany::class,
            \Genaker\PricePerCustomerCompany\Model\ResourceModel\CatalogProductPriceCustomerGroupCompany::class
        );
    }
}

