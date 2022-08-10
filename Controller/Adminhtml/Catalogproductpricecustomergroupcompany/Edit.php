<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Controller\Adminhtml\Catalogproductpricecustomergroupcompany;

class Edit extends \Genaker\PricePerCustomerCompany\Controller\Adminhtml\Catalogproductpricecustomergroupcompany
{

    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * Edit action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('catalog_product_price_customer_group_company_id');
        $model = $this->_objectManager->create(\Genaker\PricePerCustomerCompany\Model\CatalogProductPriceCustomerGroupCompany::class);
        
        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Catalog Product Price Customer Group Company no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('catalog_product_price_customer_group_company', $model);
        
        // 3. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Catalog Product Price Customer Group Company') : __('New Catalog Product Price Customer Group Company'),
            $id ? __('Edit Catalog Product Price Customer Group Company') : __('New Catalog Product Price Customer Group Company')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Catalog Product Price Customer Group Companys'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? __('Edit Catalog Product Price Customer Group Company %1', $model->getId()) : __('New Catalog Product Price Customer Group Company'));
        return $resultPage;
    }
}

