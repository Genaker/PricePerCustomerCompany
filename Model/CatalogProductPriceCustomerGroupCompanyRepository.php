<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Model;

use Genaker\PricePerCustomerCompany\Api\CatalogProductPriceCustomerGroupCompanyRepositoryInterface;
use Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterface;
use Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanyInterfaceFactory;
use Genaker\PricePerCustomerCompany\Api\Data\CatalogProductPriceCustomerGroupCompanySearchResultsInterfaceFactory;
use Genaker\PricePerCustomerCompany\Model\ResourceModel\CatalogProductPriceCustomerGroupCompany as ResourceCatalogProductPriceCustomerGroupCompany;
use Genaker\PricePerCustomerCompany\Model\ResourceModel\CatalogProductPriceCustomerGroupCompany\CollectionFactory as CatalogProductPriceCustomerGroupCompanyCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class CatalogProductPriceCustomerGroupCompanyRepository implements CatalogProductPriceCustomerGroupCompanyRepositoryInterface
{

    /**
     * @var ResourceCatalogProductPriceCustomerGroupCompany
     */
    protected $resource;

    /**
     * @var CatalogProductPriceCustomerGroupCompanyCollectionFactory
     */
    protected $catalogProductPriceCustomerGroupCompanyCollectionFactory;

    /**
     * @var CatalogProductPriceCustomerGroupCompany
     */
    protected $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var CatalogProductPriceCustomerGroupCompanyInterfaceFactory
     */
    protected $catalogProductPriceCustomerGroupCompanyFactory;


    /**
     * @param ResourceCatalogProductPriceCustomerGroupCompany $resource
     * @param CatalogProductPriceCustomerGroupCompanyInterfaceFactory $catalogProductPriceCustomerGroupCompanyFactory
     * @param CatalogProductPriceCustomerGroupCompanyCollectionFactory $catalogProductPriceCustomerGroupCompanyCollectionFactory
     * @param CatalogProductPriceCustomerGroupCompanySearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceCatalogProductPriceCustomerGroupCompany $resource,
        CatalogProductPriceCustomerGroupCompanyInterfaceFactory $catalogProductPriceCustomerGroupCompanyFactory,
        CatalogProductPriceCustomerGroupCompanyCollectionFactory $catalogProductPriceCustomerGroupCompanyCollectionFactory,
        CatalogProductPriceCustomerGroupCompanySearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->catalogProductPriceCustomerGroupCompanyFactory = $catalogProductPriceCustomerGroupCompanyFactory;
        $this->catalogProductPriceCustomerGroupCompanyCollectionFactory = $catalogProductPriceCustomerGroupCompanyCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(
        CatalogProductPriceCustomerGroupCompanyInterface $catalogProductPriceCustomerGroupCompany
    ) {
        try {
            $this->resource->save($catalogProductPriceCustomerGroupCompany);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the catalogProductPriceCustomerGroupCompany: %1',
                $exception->getMessage()
            ));
        }
        return $catalogProductPriceCustomerGroupCompany;
    }

    /**
     * @inheritDoc
     */
    public function get(
        $catalogProductPriceCustomerGroupCompanyId
    ) {
        $catalogProductPriceCustomerGroupCompany = $this->catalogProductPriceCustomerGroupCompanyFactory->create();
        $this->resource->load($catalogProductPriceCustomerGroupCompany, $catalogProductPriceCustomerGroupCompanyId);
        if (!$catalogProductPriceCustomerGroupCompany->getId()) {
            throw new NoSuchEntityException(__('catalog_product_price_customer_group_company with id "%1" does not exist.', $catalogProductPriceCustomerGroupCompanyId));
        }
        return $catalogProductPriceCustomerGroupCompany;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->catalogProductPriceCustomerGroupCompanyCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(
        CatalogProductPriceCustomerGroupCompanyInterface $catalogProductPriceCustomerGroupCompany
    ) {
        try {
            $catalogProductPriceCustomerGroupCompanyModel = $this->catalogProductPriceCustomerGroupCompanyFactory->create();
            $this->resource->load($catalogProductPriceCustomerGroupCompanyModel, $catalogProductPriceCustomerGroupCompany->getCatalogProductPriceCustomerGroupCompanyId());
            $this->resource->delete($catalogProductPriceCustomerGroupCompanyModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the catalog_product_price_customer_group_company: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById(
        $catalogProductPriceCustomerGroupCompanyId
    ) {
        return $this->delete($this->get($catalogProductPriceCustomerGroupCompanyId));
    }
}

