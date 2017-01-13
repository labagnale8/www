{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
			$(function() {
				var $mySlides = $("#slides");
				$mySlides.sortable({
					opacity: 0.6,
					cursor: "move",
					update: function() {						
						var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering";
						$.post("{$root_url}modules/jmsbrands/ajax_jmsbrands.php?" + order);
						}
					});
				$mySlides.hover(function() {
					$(this).css("cursor","move");
					},
					function() {
					$(this).css("cursor","auto");
				});
			});
		</script>
<div class="panel"><h3><i class="icon-list-ul"></i> {l s='Brands list' mod='jmsbrands'}
	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=jmsbrands&addLogo=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="slidesContent">
		<div id="slides">
			{foreach from=$brands item=brand}
				<div id="slides_{$brand.id_brand|escape:'html':'UTF-8'}" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
							{if $brand.image}
							<img src="{$image_baseurl|escape:'html'}{$brand.image|escape:'html':'UTF-8'}" alt="{$brand.title|escape:'html':'UTF-8'}" class="img-thumbnail" />
							{/if}
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">#{$brand.id_brand|escape:'html':'UTF-8'} - {$brand.title|escape:'html':'UTF-8'}</h4>							
							<div class="btn-group-action pull-right">								
								<a class="btn {if $brand.active}btn-success{else}btn-danger{/if}"
									href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=jmsbrands&changeStatus&id_brand={$brand.id_brand|escape:'html':'UTF-8'}" title="title="{if $brand.active}Enabled{else}Disabled{/if}"">
									<i class="{if $brand.active}icon-check{else}icon-remove{/if}"></i>{if $brand.active}Enabled{else}Disabled{/if}
								</a>		
								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=jmsbrands&id_brand={$brand.id_brand|escape:'html':'UTF-8'}">
									<i class="icon-edit"></i>
									{l s='Edit' mod='jmsbrands'}
								</a>
								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=jmsbrands&delete_id_brand={$brand.id_brand|escape:'html':'UTF-8'}">
									<i class="icon-trash"></i>
									{l s='Delete' mod='jmsbrands'}
								</a>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>