<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.coopceptor-materialkit
 *
 * @copyright   Copyright (C) 2016 Alexon Balangue. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$apps             = JFactory::getApplication();
$docs             = JFactory::getDocument();
$users            = JFactory::getUser();
$this->language  = $docs->language;
$this->direction = $docs->direction;

// Getting params from template
$params = $apps->getTemplate(true)->params;
$sitename = $apps->get('sitename');
/***
include_once JPATH_SITE . '/plugins/system/piwik/piwik.php';
if (class_exists('PlgSystemPiwik')) {
    PlgSystemPiwik::callPiwik();
}**/
?>
<!doctype html>
<html <?php echo $params->get('ampHTML'); ?> lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>

	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css">
	<?php endif; ?>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/material-kit.css" rel="stylesheet"/>
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/custom.css" rel="stylesheet"/>

</head>

<body class="landing-page">
<jdoc:include type="message" />
    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-dyiprod">
            		<span class="sr-only">Menu</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a href="https://www.dyiprod.com">
				   <div class="logo-container">
						<div class="logo">
							<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/logo.png" alt="DyiProd.com">
						</div>
						<div class="brand sr-only">
							DyiProd.com
						</div>
					</div>
					<div class="ripple-container"></div>
				</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-dyiprod">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
    					<a href="https://www.dyiprod.com">
    						Accueil
    					</a>
    				</li>
    				<li>
    					<a href="https://www.livingxWorld.com">
    						LivingxWorld.com
    					</a>
    				</li>
    				<li>
    					<a href="https://www.alexonbalangue.me">
    						Alexon Balangue
    					</a>
    				</li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/bg-full.jpg');">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						<h1 class="title"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
					</div>
                </div>
            </div>
        </div>

		<div class="main main-raised main-bg-yellow">
			<div class="container">
		    	<div class="section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-12">
	                        <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
						<blockquote>
							<span class="label label-danger"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?>
						</blockquote>
						<?php if ($this->debug) : ?>
							<?php echo $this->renderBacktrace(); ?>
						<?php endif; ?>
	                    </div>
	                </div>
	            </div>
			</div>
		</div>

		<div class="main main-raised">
			<div class="container">
	        	<div class="section text-center">
						<div class="row">
							<div class="col-xs-12 co-md-6 col-lg-6">
								<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
								<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
								<ul>
									<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
								</ul>
							</div>
							<div class="col-xs-12 co-md-6 col-lg-6">
								<?php if (JModuleHelper::getModule('search')) : ?>
									<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
									<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
									<?php echo $docs->getBuffer('module', 'search'); ?>
								<?php endif; ?>
								<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
								<p class="buttons"><a href="<?php echo $this->baseurl; ?>/index.html" class="btn btn-template-main"><i class="fa fa-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
							</div>
						</div>
	            </div>
	        </div>
	    </div>
		
		<div class="main main-raised main-bg-yellow">
			<div class="container">
	        	<div class="section text-center">
	                <h2 class="title">Notre équipes</h2>
					<hr class="on-light">
					<div class="team">
						<div class="row">
							<div class="col-md-6">
			                    <div class="team-player">
			                        <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/team/alexonb.jpg" alt="Alexon Balangue" class="img-raised img-circle">
			                        <h4>Alexon Balangue <br />
										<small class="text-muted">Webmestre/
										IT</small>
									</h4>
									<a href="https://www.facebook.com/alexonbalangue.me/?ref=bookmarks" class="btn btn-simple btn-just-icon"><i class="fa fa-facebook-square"></i></a>
									<a href="https://www.youtube.com/channel/UCS5B9KvbjeU2y27m9NrHa2g/videos" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-square"></i></a>
									<a href="https://www.linkedin.com/in/alexonbalangue/" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-linkedin"></i></a>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div class="team-player">
			                        <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/team/akindjm.jpg" alt="Akin'D" class="img-raised img-circle">
			                        <h4>Akin'D JM<br />
										<small class="text-muted">Designer/Musique</small>
									</h4>
									<a href="https://soundcloud.com/akindjm" class="btn btn-simple btn-just-icon"><i class="fa fa-soundcloud"></i></a>
									<a href="https://www.facebook.com/profile.php?id=1207951740&ref=br_rs" class="btn btn-simple btn-just-icon"><i class="fa fa-facebook-square"></i></a>
									<a href="https://www.youtube.com/channel/UCvjpMxl6OciUs-mLIRWDhIQ" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-square"></i></a>
			                    </div>
			                </div>
						</div>
					</div>

	            </div>
	        </div>
	    </div>
	    <footer class="footer">
	        <div class="container">
	            <div class="pull-left">
	                WebDesigner <a href="https://www.creative-tim.com">Creative Tim</a>
	            </div>
	            <div class="copyright pull-right">
	                &copy; 2017 <a href="">DyiProd</a>
	            </div>
	        </div>
	    </footer>

	</div>
	<?php echo $docs->getBuffer('modules', 'debug', array('style' => 'none')); ?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/material.min.js"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/material-kit.js" type="text/javascript"></script>
</body>
</html>
