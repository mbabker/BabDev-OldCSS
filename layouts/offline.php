<?php defined('_JEXEC') or die;
/**
* @package		Template Framework for Joomla! 1.6
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<meta property="fb:admins" content="622795528" />
<meta name="google-site-verification" content="oS8k0htI5xdvXokavMPnFk4FJkT5uTQHDSY_tSRxzCo" />
<jdoc:include type="head" />
	<script type="text/javascript" src="http://use.typekit.com/fhk0vdk.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body class="offline <?php echo $columnLayout; if($useStickyFooter) echo ' sticky-footer'; echo ' '.$currentComponent; if($articleId) echo ' article-'.$articleId; if ($itemId) echo ' item-'.$itemId; if($catId) echo ' category-'.$catId; if($sectionId) echo ' section-'.$sectionId; ?>">
<!--[if lt IE 7]> <div style='clear: both; height: 59px; padding:0 0 0 15px; position: relative;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
	<div id="footer-push">
		<a id="page-top" name="page-top"></a>
		<div id="header" class="clear clearfix">
			<div class="gutter clearfix">
				<h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo $app->getCfg('sitename');?>"><?php echo $app->getCfg('sitename');?></a></h1>
			</div><!--end gutter -->
		</div><!-- end header-->

		<div id="body-container">
			<div id="content-container" class="clear clearfix">
				<div id="load-first" class="clearfix">
					<div id="content-main">
						<div>
							<div class="item-page homepage">
								<div id="offline">
								<?php if ($this->getBuffer('message')) : ?>
									<jdoc:include type="message" />
								<?php endif; ?>
									<div class="leading-0">
										<h2>Temporarily Unavailable</h2>
										<p>Doing some maintainence, back momentarily!.</p>
										<div class="item-separator"></div>
									</div>
								</div><!--end offline-->
							</div><!--end gutter -->
						</div>
					</div><!-- end content-main -->
				</div><!-- end load-first -->
			</div><!-- end content-container -->
		</div><!-- end body-container -->
	</div><!-- end footer-push -->

	<div id="footer" class="clear clearfix">
		<div class="gutter clearfix">
			<a id="to-page-top" href="<?php $url->setFragment('page-top'); echo $url->toString();?>" class="to-additional">Back to Top</a>
			<div class="moduletable clearfix">
				<p id="siteinfo-legal">All rights reserved. &copy; 2010-2011 <a href="<?php echo JURI::base(true) ?>" title="<?php echo $app->getCfg('sitename') ?>"><?php echo $app->getCfg('sitename') ?></a>.  Powered by <a href="http://www.joomla.org" title="Joomla!">Joomla!</a><br/>
				Developed using the <a href="http://joomlaengineering.com" target="_blank" title="Construct Template Framework">Construct</a>&trade; Template Development Framework.</p>
			</div>
		</div><!--end gutter -->
	</div><!-- end footer -->

<?php if ($this->countModules('debug')) : ?>
	<jdoc:include type="modules" name="debug" style="raw" />
<?php endif; ?>

<?php if ($this->countModules('analytics')) : ?>
	<jdoc:include type="modules" name="analytics" />
<?php endif; ?>

</body>
</html>
