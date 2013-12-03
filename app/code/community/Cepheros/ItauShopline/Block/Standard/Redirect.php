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
class Cepheros_ItauShopline_Block_Standard_Redirect extends Mage_Core_Block_Abstract
{
    protected function _toHtml()
    {
        $standard = Mage::getModel('itaushopline/standard');

        $form = new Varien_Data_Form();
        $form->setAction($standard->getItauShopLineUrl())
            ->setId('itaushopline_standard_checkout')
            ->setName('itaushopline_standard_checkout')
            ->setMethod('POST')
            ->setUseContainer(true);
        foreach ($standard->getDadosCripto() as $field=>$value) {
            $form->addField($field, 'hidden', array('name'=>$field, 'value'=>$value));
        }
	$html  = '<html>';
    		$html .= '<head>';
    		$html .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>';
    		$html .= '<body>';
        $html .= $this->__('Você será redirecionado para o ambiente seguro do Itaú Shopline em alguns instantes.');
        $html .= $form->toHtml();
        $html .= '<script type="text/javascript">document.getElementById("itaushopline_standard_checkout").submit();</script>';
        $html .= '</body></html>';

        Mage::log('Campos enviados para '. $form->getAction() . ' no redirect do checkout: '.  var_export($standard->getDadosCripto(),true),null, 'itaushopline.log');
        return $html;
    }
    
}
