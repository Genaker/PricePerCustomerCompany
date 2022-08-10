<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Api\Data;

interface CatalogProductPriceCustomerGroupCompanyInterface
{

    const CATALOG_PRODUCT_PRICE_CUSTOMER_GROUP_COMPANY_ID = 'catalog_product_price_customer_group_company_id';
    const CUSTOMER_ID = 'customer_id';
    const RELATION_ID = 'relation_id';
    const PRICE = 'price';
    const DISCOUNT_TYPE = 'discount_type';
    const PRODUCT_ID = 'product_id';
    const CUSTOMER_GROUP_ID = 'customer_group_id';
    const COMPANY_ID = 'company_id';

    /**
     * Get catalog_product_price_customer_group_company_id
     * @return string|null
     */
    public function getCatalogProductPriceCustomerGroupCompanyId();

    /**
     * Set catalog_product_price_customer_group_company_id
     * @param string $catalogProductPriceCustomerGroupCompanyId
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setCatalogProductPriceCustomerGroupCompanyId(
        $catalogProductPriceCustomerGroupCompanyId
    );

    /**
     * Get product_id
     * @return string|null
     */
    public function getProductId();

    /**
     * Set product_id
     * @param string $productId
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setProductId($productId);

    /**
     * Get price
     * @return string|null
     */
    public function getPrice();

    /**
     * Set price
     * @param string $price
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setPrice($price);

    /**
     * Get discount_type
     * @return string|null
     */
    public function getDiscountType();

    /**
     * Set discount_type
     * @param string $discountType
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setDiscountType($discountType);

    /**
     * Get company_id
     * @return string|null
     */
    public function getCompanyId();

    /**
     * Set company_id
     * @param string $companyId
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setCompanyId($companyId);

    /**
     * Get customer_id
     * @return string|null
     */
    public function getCustomerId();

    /**
     * Set customer_id
     * @param string $customerId
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setCustomerId($customerId);

    /**
     * Get relation_id
     * @return string|null
     */
    public function getRelationId();

    /**
     * Set relation_id
     * @param string $relationId
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setRelationId($relationId);

    /**
     * Get customer_group_id
     * @return string|null
     */
    public function getCustomerGroupId();

    /**
     * Set customer_group_id
     * @param string $customerGroupId
     * @return \Genaker\PricePerCustomerCompany\CatalogProductPriceCustomerGroupCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface
     */
    public function setCustomerGroupId($customerGroupId);
}

