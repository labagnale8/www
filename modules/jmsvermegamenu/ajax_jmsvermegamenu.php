<?php
/**
* 2007-2016 PrestaShop
*
* Jms Vertical Megamenu
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2016 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');

$context = Context::getContext();
$rows = array();
if (Tools::getValue('action') == 'updateMenuOrdering' && Tools::getValue('menus'))
{
	$menus = Tools::getValue('menus');

	foreach ($menus as $position => $id_menu)
	{
		$res = Db::getInstance()->execute('
			UPDATE `'._DB_PREFIX_.'jmsvermegamenu` SET `ordering` = '.(int)$position.'
			WHERE `mitem_id` = '.(int)$id_menu
		);
	}	
} elseif(Tools::getValue('action') == 'SaveStyle' && Tools::getValue('itemid')) {	
	$res = Db::getInstance()->execute('
		UPDATE `'._DB_PREFIX_.'jmsvermegamenu` SET `params` = \''.Tools::getValue('params').'\'
		WHERE `mitem_id` = '.(int)Tools::getValue('itemid')
	);
} elseif(Tools::getValue('action') == 'resetStyle' && Tools::getValue('itemid')) {
	$res = Db::getInstance()->execute('
		UPDATE `'._DB_PREFIX_.'jmsvermegamenu` SET `params` = \'\'
		WHERE `mitem_id` = '.(int)Tools::getValue('itemid')
	);
} elseif(Tools::getValue('action') == 'resetAll') {
	$res = Db::getInstance()->execute('
		UPDATE `'._DB_PREFIX_.'jmsvermegamenu` SET `params` = \'\''
	);
}