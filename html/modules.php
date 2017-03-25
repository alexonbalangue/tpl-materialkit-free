<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.coopceptor (Stylish)
 *
 * @copyright   Copyright (C) 2016 Alexon Balangue. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

function modChrome_nones($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo $module->content;
	}
}
/******************BEGINS BOOSTRAP***********************/
function modChrome_bswell($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="well ' . htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}

			echo $module->content;
		echo '</' . $moduleTag . '>';
	}
}

/******************BOOSTRAP 3***********************/
function modChrome_bs3bodycolorgray($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? 'col-xs-12 col-sm-12 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="bar background-gray no-mb padding-big text-center-sm"><div class="container">
                <div class="row">
                    <div class="' . $moduleClass . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}

			echo $module->content;
					
				echo '</div>
			</div>
		</' . $moduleTag . '>';
	}
}
function modChrome_bs3bodycolorwhite($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? 'col-xs-12 col-sm-12 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));
	
	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="bar no-mb color-white padding-big text-center-sm>
			<div class="container">
                <div class="row">
                    <div class="' . $moduleClass . '">';
						if ($module->showtitle)
						{
							echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
						}
						echo $module->content;					
				echo '</div>
				</div>
			</div>
		</' . $moduleTag . '>';
	}
}
function modChrome_bs3bodypentagone($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? 'col-xs-' . $bootstrapSize . ' col-sm-' . $bootstrapSize . ' col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="bar background-pentagon no-mb"><div class="container">
                <div class="row">
                    <div class="' . $moduleClass . '">';

					if ($module->showtitle)
					{
						echo '<div class="heading' . $headerClass . '">
								<' . $headerTag . '>
									' . $module->title . '
								</' . $headerTag . '>
							</div>';
					}

					echo $module->content;
					
				echo '</div>
			</div>
		</' . $moduleTag . '>';
	}
}
function modChrome_bs3bodyfixedimages($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? 'col-xs-' . $bootstrapSize . ' col-sm-' . $bootstrapSize . ' col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="bar background-image-fixed-2 no-mb color-white text-center">
			<div class="dark-mask"></div>
			<div class="container">
                <div class="row">
                    <div class="' . $moduleClass . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}

			echo $module->content;
					
				echo '</div>
			</div>
		</' . $moduleTag . '>';
	}
}

function modChrome_bs3sidebar($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	//$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	//$moduleClass   = $bootstrapSize != 0 ? 'col-xs-12 col-sm-6 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	//$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="panel panel-default sidebar-menu">';

			if ($module->showtitle)
			{
				echo '<div class="panel-heading">
				<' . $headerTag . ' class="panel-title clearfix">' . $module->title . '</' . $headerTag . '>
				</div>';
			}

			echo '<div class="panel-body">'.$module->content.'</div>';
		echo '</' . $moduleTag . '>';
	}
}

function modChrome_bs3FooterShow($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? 'col-xs-12 col-sm-6 col-md-' . $bootstrapSize . ' col-lg-' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h4'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'text-center'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

			if ($module->showtitle)
			{
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}

			echo $module->content;
			echo '<hr class="hidden-md hidden-lg hidden-sm">';
		echo '</' . $moduleTag . '>';
	}
}
