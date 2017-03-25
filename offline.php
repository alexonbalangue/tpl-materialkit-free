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
$sitename = $apps->get('sitename');
$this->language  = $docs->language;
$this->direction = $docs->direction;

$this->_script = $this->_scripts = array();	

unset($docs->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

require_once JPATH_ADMINISTRATOR . '/components/com_users/helpers/users.php';

$twofactormethods = UsersHelper::getTwoFactorMethods();
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	[begins tags='meta' more='name="robots" content="noindex,nofollow"' /]	
	[link rel="stylesheet" href="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/production/css/offline.min.css'; ?>" type="text/css" /]
	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		[link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css" /]
	<?php endif; ?>

	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css">
	<?php endif; ?>

	[title]<?php echo $sitename.' - '.JText::_('JOFFLINE_MESSAGE'); ?>[/title]
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
						<h1 class="title"><?php echo JText::_('JOFFLINE_MESSAGE'); ?></h1>
					</div>
                </div>
            </div>
        </div>

		<div class="main main-raised main-bg-yellow">
			<div class="container">
		    	<div class="section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-12">
	                      <p class="text-center">
                                <?php if ($apps->get('offline_image') && file_exists($apps->get('offline_image'))) : ?>
							<img width="350" height="200" itemprop="primaryImageOfPage" src="<?php echo $apps->get('offline_image'); ?>" alt="<?php echo $sitename.' - '.JText::_('JOFFLINE_MESSAGE'); ?>" class="img-responsive">
									<meta itemprop="image" content="<?php echo $apps->get('offline_image'); ?>">
					<?php endif; ?>
                        </p>

                        <h3><?php echo $sitename; ?></h3>
                        <h4 class="text-muted"><?php echo JText::_('JOFFLINE_MESSAGE'); ?></h4>
                        

                        <?php if ($apps->get('display_offline_message', 1) == 1 && str_replace(' ', '', $apps->get('offline_message')) != '') : ?>
							[begins tags="span" class="skills" /]<?php echo $apps->get('offline_message'); ?>[ends tags="span" /]
						<?php elseif ($apps->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
							[begins tags="span" class="skills" /]<?php echo JText::_('JOFFLINE_MESSAGE'); ?>[ends tags="span" /]
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
							<div class="col-xs-12">
								[begins tags='form' more='action="<?php echo JRoute::_('index.php', true); ?>" method="post"' /]  
							[begins tags="div" class="form-group" /]  
								[begins tags='label' more='for="username"' /]<?php echo JText::_('JGLOBAL_USERNAME'); ?>[ends tags="label" /]
								[input name="username" id="username" type="text" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" /]
							[ends tags="div" /]  
							[begins tags="div" class="form-group" /] 
								[begins tags='label' more='for="passwd"' /]<?php echo JText::_('JGLOBAL_PASSWORD'); ?>[ends tags="label" /]
								[input type="password" name="password" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" id="passwd" /]
							[ends tags="div" /]  
							<?php if (count($twofactormethods) > 1) : ?>
								[begins tags="div" class="form-group" /] 
									[begins tags='label' more='for="secretkey"' /]<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>[ends tags="label" /]
									[input type="text" name="secretkey" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" id="secretkey" /]
								[ends tags="div" /]  
							<?php endif; ?>
							[input type="submit" name="Submit" class="btn btn-template-main" value="<?php echo JText::_('JLOGIN'); ?>" /]
							[input type="hidden" name="option" value="com_users" /]
							[input type="hidden" name="task" value="user.login" /]
							[input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" /]
							<?php echo JHtml::_('form.token'); ?>
						[ends tags="form" /]
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
