<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 *
 * @category     Cepheros
 * @package      Itaushopline
 * @author         Daniel Chaves <daniel@danielchaves.com.br>
 * @license        http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Cepheros_ItauShopline_Model_Source_StandardAction
{
    public function toOptionArray()
    {
        return array(
            array('value' => Mage_ItauShopline100_Model_Standard::PAYMENT_TYPE_AUTH, 'label' => Mage::helper('itaushopline')->__('Authorization')),
            array('value' => Mage_ItauShopline100_Model_Standard::PAYMENT_TYPE_SALE, 'label' => Mage::helper('itaushopline')->__('Sale')),
        );
    }
}
