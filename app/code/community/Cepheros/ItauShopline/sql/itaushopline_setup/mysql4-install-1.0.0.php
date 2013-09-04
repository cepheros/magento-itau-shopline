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
$installer = $this;
/* @var $installer Cepheros_ItauShopline_Model_Mysql4_Setup */
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');


$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS `{$this->getTable('itaushopline_api_debug')}`;
CREATE TABLE `{$this->getTable('itaushopline_api_debug')}` (
  `debug_id` int(10) unsigned NOT NULL auto_increment,
  `debug_at` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `request_body` text,
  `response_body` text,
  PRIMARY KEY  (`debug_id`),
  KEY `debug_at` (`debug_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->run("
-- DROP TABLE IF EXISTS `{$this->getTable('itaushopline/transaction')}`;
CREATE TABLE `{$this->getTable('itaushopline/transaction')}` (
  `OrderID` varchar(255) default '0',
  `TransacaoID` varchar(255) default '0',
  `TipoFrete` varchar(255) default '0',
  `ValorFrete` varchar(255) default '0',
  `Anotacao` varchar(255) default '0',
  `TipoPagamento` varchar(255) default '0',
  `StatusTransacao` varchar(255) default '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 ");

$installer->endSetup();

