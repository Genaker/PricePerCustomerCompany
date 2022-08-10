<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\PricePerCustomerCompany\Controller\Adminhtml\Catalogproductpricecustomergroupcompany;

class Delete extends \Genaker\PricePerCustomerCompany\Controller\Adminhtml\Catalogproductpricecustomergroupcompany
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('catalog_product_price_customer_group_company_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\Genaker\PricePerCustomerCompany\Model\CatalogProductPriceCustomerGroupCompany::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Catalog Product Price Customer Group Company.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['catalog_product_price_customer_group_company_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Catalog Product Price Customer Group Company to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

