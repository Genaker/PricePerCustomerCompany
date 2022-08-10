<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Api\Data;

interface CatalogProductPriceCustomerGroupCompanySearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get catalog_product_price_customer_group_company list.
     * @return \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface[]
     */
    public function getItems();

    /**
     * Set product_id list.
     * @param \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

