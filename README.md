# Mage2 Module Genaker PricePerCustomerCompany

    ``genaker/module-pricepercustomercompany``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Fix critical magneto bug

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Genaker`
 - Enable the module by running `php bin/magento module:enable Genaker_PricePerCustomerCompany`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require genaker/module-pricepercustomercompany`
 - enable the module by running `php bin/magento module:enable Genaker_PricePerCustomerCompany`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enable Custom Pricing (price_per_customer/settings/enabled)


## Specifications

 - Console Command
	- check_prices

 - Cronjob
	- genaker_pricepercustomercompany_customergroupcalculate

 - GraphQl Endpoint
	- Product

 - Helper
	- Genaker\PricePerCustomerCompany\Helper\CustomPrice

 - Model
	- catalog_product_price_customer_group_company

 - Observer
	- sales_order_save_after > Genaker\PricePerCustomerCompany\Observer\Frontend\Sales\OrderSaveAfter

 - Plugin
	- aroundGetPrice - Magento\Catalog\Model\Product > Genaker\PricePerCustomerCompany\Plugin\Magento\Catalog\Model\Product


## Attributes

 - Product - Enable Custom Pricing (enable_custom_pricing)

 - Sales - Customer Pricing Applied (customer_pricing_applied)

