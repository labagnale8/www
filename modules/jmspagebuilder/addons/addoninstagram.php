<?php
/**
* 2007-2016 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2016 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/lib/instagramphp/instagram.php');
class JmsAddonInstagram extends JmsAddonBase
{
	public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'instagram';
        $this->addontitle = 'Instagram';
        $this->addondesc = 'Show latest instagram images';
		$this->overwrite_tpl = '';
        $this->context = Context::getContext();
    }
	 public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'username',
                'lang' => '0',
                'label' => $this->l('Instagram Username'),
                'desc' => 'Enter Instagram username',
                'default' => 'luvdragon3'
            ),
            array(
                'type' => 'text',
                'name' => 'access_token',
                'lang' => '0',
                'label' => $this->l('Access Token'),
                'desc' => 'Instagram API Access Token',
                'default' => '3234980746.7c96d22.e489ece15408429b99daa9a71355b2d7'
            ),
            array(
                'type' => 'text',
                'name' => 'instagram_to_display',
                'lang' => '0',
                'label' => $this->l('Number Images Instagram To Display'),
                'desc' => 'Number Images Instagram To Display',
                'default' => 5
            ),
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
	 public function returnValue($addon)
    {
		$this->context = Context::getContext();       
        $id_lang = $this->context->language->id;
		$username = $addon->fields[0]->value; 
        $access_token = $addon->fields[1]->value; 
        $count = $addon->fields[2]->value;
		$insta = new InstaWCD();
        $insta->username = $username;
        $insta->access_token = $access_token;
		$ins_media = $insta->userMedia();  
		$vm = $ins_media['data'];
        $i = 0; 
		$list_img = "<div>";
		foreach ($ins_media['data'] as $vm) {
             if ($count == $i){ break;}
             $i++;
             $img = $vm['images']['low_resolution']['url'];
            $link = $vm["link"];
			$list_img .= '<a href ="'.$img.'" class = "instagram_elements" data-fancybox-group="gallery">';
			$list_img .= '<img src ="'.$img .'" '.'>';
			$list_img .= '</a>';
		}
		$list_img .= "<div>";
		//print_r($list_img);exit;
		$this->context->smarty->assign(
            array(       
				'list_img' => $list_img
            )
        );
		$this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}