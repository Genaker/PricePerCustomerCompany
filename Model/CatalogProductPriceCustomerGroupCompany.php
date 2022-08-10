<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Model;

use Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface;
use Magento\Framework\Model\AbstractModel;

class CatalogProductPriceCustomerGroupCompany extends AbstractModel implements CatalogProductPriceCustomerGroupCompanyInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Genaker\PricePerCustomerCompany\Model\ResourceModel\CatalogProductPriceCustomerGroupCompany::class);
    }

    /**
     * @inheritDoc
     */
    public function getCatalogProductPriceCustomerGroupCompanyId()
    {
        return $this->getData(self::CATALOG_PRODUCT_PRICE_CUSTOMER_GROUP_COMPANY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCatalogProductPriceCustomerGroupCompanyId(
        $catalogProductPriceCustomerGroupCompanyId
    ) {
        return $this->setData(self::CATALOG_PRODUCT_PRICE_CUSTOMER_GROUP_COMPANY_ID, $catalogProductPriceCustomerGroupCompanyId);
    }

    /**
     * @inheritDoc
     */
    public function getProductId()
    {
        return $this->getData(self::PRODUCT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setProductId($productId)
    {
        return $this->setData(self::PRODUCT_ID, $productId);
    }

    /**
     * @inheritDoc
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * @inheritDoc
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }

    /**
     * @inheritDoc
     */
    public function getDiscountType()
    {
        return $this->getData(self::DISCOUNT_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setDiscountType($discountType)
    {
        return $this->setData(self::DISCOUNT_TYPE, $discountType);
    }

    /**
     * @inheritDoc
     */
    public function getCompanyId()
    {
        return $this->getData(self::COMPANY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCompanyId($companyId)
    {
        return $this->setData(self::COMPANY_ID, $companyId);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * @inheritDoc
     */
    public function getRelationId()
    {
        return $this->getData(self::RELATION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setRelationId($relationId)
    {
        return $this->setData(self::RELATION_ID, $relationId);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerGroupId()
    {
        return $this->getData(self::CUSTOMER_GROUP_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerGroupId($customerGroupId)
    {
        return $this->setData(self::CUSTOMER_GROUP_ID, $customerGroupId);
    }
}

