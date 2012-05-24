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
</head>

<body class="offline <?php echo $columnLayout; if($useStickyFooter) echo ' sticky-footer'; echo ' '.$currentComponent; if($articleId) echo ' article-'.$articleId; if ($itemId) echo ' item-'.$itemId; if($catId) echo ' category-'.$catId; if($sectionId) echo ' section-'.$sectionId; ?>">
<!--[if lt IE 7]> <div style='clear: both; height: 59px; padding:0 0 0 15px; position: relative;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
	<div id="footer-push">
		<a id="page-top" name="page-top"></a>
	<?php if ($headerAboveCount) : ?>
		<div id="header-above" class="clearfix">
		<?php if ($this->countModules('header-above-6')) : ?>
			<div id="header-above-6" class="<?php echo $headerAboveClass ?>">
				<jdoc:include type="modules" name="header-above-6" style="jexhtml" />
			</div><!-- end header-above-6 -->
		<?php endif; ?>
		</div><!-- end header-above -->
	<?php endif; ?>

		<div id="header" class="clear clearfix">
			<div class="gutter clearfix">
				<h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo $app->getCfg('sitename');?>"><?php echo $app->getCfg('sitename');?></a></h1>
			</div><!--end gutter -->
		</div><!-- end header-->

		<div id="body-container">
			<div id="content-container" class="clear clearfix">
				<div id="load-first" class="clearfix">
					<div id="content-main">
						<div class="gutter">
							<div id="offline">
							<?php if ($this->getBuffer('message')) : ?>
								<jdoc:include type="message" />
							<?php endif; ?>
								<div class="leading-0">
									<h2>Temporarily Unavailable</h2>
									<p>The main FLBab.com site is temporarily unavailable as the site redesign is completed.  In the meantime, all extension downloads are available below and I may be contacted using one of the methods listed to the right.</p>
									<div class="item-separator"></div>
								</div>
								<?php if ($currentComponent == 'com_ars') : ?>
								<jdoc:include type="component" />
								<?php endif; ?>
							</div><!--end offline-->
						</div><!--end gutter -->
					</div><!-- end content-main -->
					<?php if ($columnGroupAlphaCount) : ?>
					<div id="column-group-alpha" class="clearfix">
						<div class="gutter clearfix">
							<?php if ($this->countModules('column-1')) : ?>
							<div id="column-1" class="<?php echo $columnGroupAlphaClass ?>">
								<jdoc:include type="modules" name="tdb-old" style="jexhtml" />
							</div><!-- end column-1 -->
						<?php endif; ?>
						</div><!--end gutter -->
					</div><!-- end column-group-alpha -->
					<?php endif; ?>
				</div><!-- end load-first -->
				<?php if ($columnGroupBetaCount) : ?>
				<div id="column-group-beta" class="clearfix">
					<div class="gutter clearfix">
					<?php if ($this->countModules('column-3')) : ?>
						<div id="column-group-beta-1" class="<?php echo $columnGroupBetaClass ?>">
							<jdoc:include type="modules" name="offline-contact" style="jexhtml" />
						</div><!-- end column-3 -->
					<?php endif; ?>
					</div><!--end gutter -->
				</div><!-- end column-group-beta -->
				<?php endif; ?>
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