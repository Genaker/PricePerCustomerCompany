<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Controller\Adminhtml\Catalogproductpricecustomergroupcompany;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('catalog_product_price_customer_group_company_id');
        
            $model = $this->_objectManager->create(\Genaker\PricePerCustomerCompany\Model\CatalogProductPriceCustomerGroupCompany::class)->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Catalog Product Price Customer Group Company no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }
        
            $model->setData($data);
        
            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Catalog Product Price Customer Group Company.'));
                $this->dataPersistor->clear('catalog_product_price_customer_group_company');
        
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['catalog_product_price_customer_group_company_id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Catalog Product Price Customer Group Company.'));
            }
        
            $this->dataPersistor->set('catalog_product_price_customer_group_company', $data);
            return $resultRedirect->setPath('*/*/edit', ['catalog_product_price_customer_group_company_id' => $this->getRequest()->getParam('catalog_product_price_customer_group_company_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}

