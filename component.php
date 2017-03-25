<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.coopceptor universal
 *
 * @copyright   Copyright (C) 2016 AlexonBalangue.me. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$apps             = JFactory::getApplication();
$docs             = JFactory::getDocument();
$this->language  = $docs->language;
$this->direction = $docs->direction;
?>
<!DOCTYPE html>
<html <?php echo $params->get('ampHTML'); ?> lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
</head>
<body class="landing-page">
	<div id="wrapper">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
</body>
</html>
