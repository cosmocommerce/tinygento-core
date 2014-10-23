<?php
/**
 * CosmoCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to opensource@cosmocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade CosmoCommerce to newer
 * versions in the future. If you wish to customize CosmoCommerce for your
 * needs please refer to http://www.cosmocommerce.com for more information.
 *
 * @category    CosmoCommerce
 * @package     CosmoCommerce_Core
 * @copyright   Copyright (c) 2014 CosmoCommerce Inc. (http://www.cosmocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Base html block
 *
 * @category   CosmoCommerce
 * @package    CosmoCommerce_Core
 * @author     CosmoCommerce Core Team <opensource@cosmocommerce.com>
 */
class CosmoCommerce_Core_Block_Template extends Mage_Core_Block_Template
{
    /*
    force set symlink to true
    */
    protected function _getAllowSymlinks()
    {
        if (is_null($this->_allowSymlinks)) {
            $this->_allowSymlinks = true;
        }
        return true;
    }
}
