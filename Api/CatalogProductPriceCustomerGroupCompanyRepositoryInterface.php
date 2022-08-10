<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CatalogProductPriceCustomerGroupCompanyRepositoryInterface
{

    /**
     * Save catalog_product_price_customer_group_company
     * @param \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface $catalogProductPriceCustomerGroupCompany
     * @return \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface $catalogProductPriceCustomerGroupCompany
    );

    /**
     * Retrieve catalog_product_price_customer_group_company
     * @param string $catalogProductPriceCustomerGroupCompanyId
     * @return \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get(
        $catalogProductPriceCustomerGroupCompanyId
    );

    /**
     * Retrieve catalog_product_price_customer_group_company matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanySearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete catalog_product_price_customer_group_company
     * @param \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface $catalogProductPriceCustomerGroupCompany
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface $catalogProductPriceCustomerGroupCompany
    );

    /**
     * Delete catalog_product_price_customer_group_company by ID
     * @param string $catalogProductPriceCustomerGroupCompanyId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(
        $catalogProductPriceCustomerGroupCompanyId
    );
}

