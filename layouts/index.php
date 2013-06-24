<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla!+
 * @author         Cristina Solana http://nightshiftcreative.com
 * @author         Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright      Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>"> <![endif]-->
<!--[if IE 10]>   <html class="no-js ie10" lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>"> <![endif]-->
<html class="no-js" lang="<?php echo substr($this->language, 0, 2) ?>" dir="<?php echo $this->direction ?>"> <!--<![endif]-->
	<head>
		<meta property="fb:admins" content="622795528" />
		<meta name="google-site-verification" content="blhM4wCuzQhF9j1Par6WRRSRD2Z4yOnivSsce0zdf34" />
		<jdoc:include type="head" />
		<script type="text/javascript" src="http://use.typekit.com/fhk0vdk.js" async="true"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>

	<body id="page-top" class="<?php if ($useStickyFooter) echo ' sticky-footer'; echo ' ' . $currentComponent; if ($articleId) echo ' article-' . $articleId; if ($itemId) echo ' item-' . $itemId; if ($catId) echo ' category-' . $catId; if ($default) echo ' default'; ?>">
		<!--[if lt IE 7]> <div style='clear: both; height: 59px; padding:0 0 0 15px; position: relative;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
		<div id="footer-push">

		<?php if ($this->countModules('nav')) : ?>
		<nav class="navbar navbar-inverse hidden-desktop">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename')) ?>"><?php echo htmlspecialchars($app->getCfg('sitename')) ?></a>
					<div class="nav-collapse clear clearfix">
						<jdoc:include type="modules" name="nav" style="raw" />
					</div>
		        </div>
		    </div>
		</nav>
		<?php endif ?>

			<?php if ($headerAboveCount) : ?>
			<div id="header-above" class="clearfix row-fluid">
				<?php if ($this->countModules('header-above-1')) : ?>
			    <div id="header-above-1" class="<?php echo $headerAboveClass ?> visible-desktop">
			        <jdoc:include type="modules" name="header-above-1" style="div" />
			    </div>
				<?php endif ?>

				<?php if ($this->countModules('header-above-2')) : ?>
			    <div id="header-above-2" class="<?php echo $headerAboveClass ?>">
			        <jdoc:include type="modules" name="header-above-2" style="div" />
			    </div>
				<?php endif ?>

				<?php if ($this->countModules('header-above-3')) : ?>
			    <div id="header-above-3" class="<?php echo $headerAboveClass ?>">
			        <jdoc:include type="modules" name="header-above-3" style="div" />
			    </div>
				<?php endif ?>

				<?php if ($this->countModules('header-above-4')) : ?>
			    <div id="header-above-4" class="<?php echo $headerAboveClass ?>">
			        <jdoc:include type="modules" name="header-above-4" style="div" />
			    </div>
				<?php endif ?>

				<?php if ($this->countModules('header-above-5')) : ?>
			    <div id="header-above-5" class="<?php echo $headerAboveClass ?>">
			        <jdoc:include type="modules" name="header-above-5" style="div" />
			    </div>
				<?php endif ?>

				<?php if ($this->countModules('header-above-6')) : ?>
			    <div id="header-above-6" class="<?php echo $headerAboveClass ?>">
			        <jdoc:include type="modules" name="header-above-6" style="div" />
			    </div>
				<?php endif ?>
			</div>
			<?php endif ?>

			<header id="header" class="visible-desktop clear clearfix">
			    <div class="gutter clearfix">
				    <h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo $app->getCfg('sitename');?>"><?php echo $app->getCfg('sitename');?></a></h1>
					<?php if ($this->countModules('header')) : ?>
			        <jdoc:include type="modules" name="header" style="header" />
					<?php endif ?>
			    </div>
			</header>

			<section id="body-container" class="container row-fluid">

				<?php if ($headerBelowCount) : ?>
				<div id="header-below" class="clearfix row-fluid">
					<?php if ($this->countModules('header-below-1')) : ?>
				    <div id="header-below-1" class="<?php echo $headerBelowClass ?>">
				        <jdoc:include type="modules" name="header-below-1" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('header-below-2')) : ?>
				    <div id="header-below-2" class="<?php echo $headerBelowClass ?>">
				        <jdoc:include type="modules" name="header-below-2" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('header-below-3')) : ?>
				    <div id="header-below-3" class="<?php echo $headerBelowClass ?>">
				        <jdoc:include type="modules" name="header-below-3" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('header-below-4')) : ?>
				    <div id="header-below-4" class="<?php echo $headerBelowClass ?>">
				        <jdoc:include type="modules" name="header-below-4" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('header-below-5')) : ?>
				    <div id="header-below-5" class="<?php echo $headerBelowClass ?>">
				        <jdoc:include type="modules" name="header-below-5" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('header-below-6')) : ?>
				    <div id="header-below-6" class="<?php echo $headerBelowClass ?>">
				        <jdoc:include type="modules" name="header-below-6" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>
				</div>
				<?php endif ?>

				<?php if ($this->countModules('breadcrumbs')) : ?>
				<jdoc:include type="module" name="breadcrumbs" />
				<?php endif ?>

				<div id="content-container" class="clear clearfix">

					<?php if ($navBelowCount) : ?>
					<div id="nav-below" class="clearfix row-fluid">
						<?php if ($this->countModules('nav-below-1')) : ?>
					    <div id="nav-below-1" class="<?php echo $navBelowClass ?>">
					        <jdoc:include type="modules" name="nav-below-1" style="div" module-class="gutter" />
					    </div>
						<?php endif ?>

						<?php if ($this->countModules('nav-below-2')) : ?>
					    <div id="nav-below-2" class="<?php echo $navBelowClass ?>">
					        <jdoc:include type="modules" name="nav-below-2" style="div" module-class="gutter" />
					    </div>
						<?php endif ?>

						<?php if ($this->countModules('nav-below-3')) : ?>
					    <div id="nav-below-3" class="<?php echo $navBelowClass ?>">
					        <jdoc:include type="modules" name="nav-below-3" style="div" module-class="gutter" />
					    </div>
						<?php endif ?>

						<?php if ($this->countModules('nav-below-4')) : ?>
					    <div id="nav-below-4" class="<?php echo $navBelowClass ?>">
					        <jdoc:include type="modules" name="nav-below-4" style="div" module-class="gutter" />
					    </div>
						<?php endif ?>

						<?php if ($this->countModules('nav-below-5')) : ?>
					    <div id="nav-below-5" class="<?php echo $navBelowClass ?>">
					        <jdoc:include type="modules" name="nav-below-5" style="div" module-class="gutter" />
					    </div>
						<?php endif ?>

						<?php if ($this->countModules('nav-below-6')) : ?>
					    <div id="nav-below-6" class="<?php echo $navBelowClass ?>">
					        <jdoc:include type="modules" name="nav-below-6" style="div" module-class="gutter" />
					    </div>
						<?php endif ?>
					</div>
					<?php endif ?>

					<div id="load-first" class="clearfix span<?php echo $firstSpan ?>">
						<?php if ($columnGroupAlphaCount) : ?>
					    <div id="column-group-1" class="visible-desktop clearfix span<?php echo $alphaSpan ?>">
							<?php if ($this->countModules('column-1')) : ?>
					        <div id="column-1" class="span<?php echo $groupAlphaSpan ?>">
					            <div class="gutter clearfix">
					                <jdoc:include type="modules" name="column-1" style="div" />
					            </div>
					        </div>
							<?php endif ?>
							<?php if ($this->countModules('column-2')) : ?>
					        <div id="column-2" class="span<?php echo $groupAlphaSpan ?>">
					            <div class="gutter clearfix">
					                <jdoc:include type="modules" name="column-2" style="div" />
					            </div>
					        </div>
							<?php endif ?>
					    </div>
						<?php endif ?>

					    <div id="content-main" class="span<?php echo ($mainSpan - 1) ?>">
							<?php if ($contentAboveCount) : ?>
				            <div id="content-above" class="clearfix row-fluid">
								<?php if ($this->countModules('content-above-1')) : ?>
				                <div id="content-above-1" class="<?php echo $contentAboveClass ?>">
				                    <jdoc:include type="modules" name="content-above-1" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-above-2')) : ?>
				                <div id="content-above-2" class="<?php echo $contentAboveClass ?>">
				                    <jdoc:include type="modules" name="content-above-2" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-above-3')) : ?>
				                <div id="content-above-3" class="<?php echo $contentAboveClass ?>">
				                    <jdoc:include type="modules" name="content-above-3" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-above-4')) : ?>
				                <div id="content-above-4" class="<?php echo $contentAboveClass ?>">
				                    <jdoc:include type="modules" name="content-above-4" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-above-5')) : ?>
				                <div id="content-above-5" class="<?php echo $contentAboveClass ?>">
				                    <jdoc:include type="modules" name="content-above-5" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-above-6')) : ?>
				                <div id="content-above-6" class="<?php echo $contentAboveClass ?>">
				                    <jdoc:include type="modules" name="content-above-6" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>
				            </div>
							<?php endif ?>

							<?php if (!empty($messageQueue)) : ?>
				            <jdoc:include type="message" />
							<?php endif ?>

				            <jdoc:include type="component" />

							<?php if ($contentBelowCount) : ?>
				            <div id="content-below" class="clearfix row-fluid">
								<?php if ($this->countModules('content-below-1')) : ?>
				                <div id="content-below-1" class="<?php echo $contentBelowClass ?>">
				                    <jdoc:include type="modules" name="content-below-1" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-below-2')) : ?>
				                <div id="content-below-2" class="<?php echo $contentBelowClass ?>">
				                    <jdoc:include type="modules" name="content-below-2" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-below-3')) : ?>
				                <div id="content-below-3" class="<?php echo $contentBelowClass ?>">
				                    <jdoc:include type="modules" name="content-below-3" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-below-4')) : ?>
				                <div id="content-below-4" class="<?php echo $contentBelowClass ?>">
				                    <jdoc:include type="modules" name="content-below-4" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-below-5')) : ?>
				                <div id="content-below-5" class="<?php echo $contentBelowClass ?>">
				                    <jdoc:include type="modules" name="content-below-5" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>

								<?php if ($this->countModules('content-below-6')) : ?>
				                <div id="content-below-6" class="<?php echo $contentBelowClass ?>">
				                    <jdoc:include type="modules" name="content-below-6" style="div" module-class="gutter" />
				                </div>
								<?php endif ?>
				            </div>
							<?php endif ?>

						    <?php if ($columnGroupAlphaCount) : ?>
				            <div id="column-group-1" class="hidden-desktop clearfix span<?php echo $alphaSpan ?>">
				                <?php if ($this->countModules('column-1')) : ?>
				                <div id="column-1" class="span<?php echo $groupAlphaSpan ?>">
				                    <div class="gutter clearfix">
				                        <jdoc:include type="modules" name="column-1" style="div" />
				                    </div>
				                </div>
				                <?php endif ?>
				                <?php if ($this->countModules('column-2')) : ?>
				                <div id="column-2" class="span<?php echo $groupAlphaSpan ?>">
				                    <div class="gutter clearfix">
				                        <jdoc:include type="modules" name="column-2" style="div" />
				                    </div>
				                </div>
				                <?php endif ?>
				            </div>
				            <?php endif ?>

					    </div>

					</div>

					<?php if ($columnGroupBetaCount) : ?>
					<div id="column-group-beta" class="clearfix span<?php echo $betaSpan ?>">
						<?php if ($this->countModules('column-3')) : ?>
					    <div id="column-3" class="span<?php echo $groupBetaSpan ?>">
					        <div class="gutter clearfix">
					            <jdoc:include type="modules" name="column-3" style="div" />
					        </div>
					    </div>
						<?php endif ?>
						<?php if ($this->countModules('column-4')) : ?>
					    <div id="column-4" class="span<?php echo $groupBetaSpan ?>">
					        <div class="gutter clearfix">
					            <jdoc:include type="modules" name="column-4" style="div" />
					        </div>
					    </div>
						<?php endif ?>
					</div>
					<?php endif ?>

				</div>

				<?php if ($footerAboveCount) : ?>
				<div id="footer-above" class="clearfix row-fluid">
					<?php if ($this->countModules('footer-above-1')) : ?>
				    <div id="footer-above-1" class="<?php echo $footerAboveClass ?>">
				        <jdoc:include type="modules" name="footer-above-1" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('footer-above-2')) : ?>
				    <div id="footer-above-2" class="<?php echo $footerAboveClass ?>">
				        <jdoc:include type="modules" name="footer-above-2" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('footer-above-3')) : ?>
				    <div id="footer-above-3" class="<?php echo $footerAboveClass ?>">
				        <jdoc:include type="modules" name="footer-above-3" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('footer-above-4')) : ?>
				    <div id="footer-above-4" class="<?php echo $footerAboveClass ?>">
				        <jdoc:include type="modules" name="footer-above-4" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('footer-above-5')) : ?>
				    <div id="footer-above-5" class="<?php echo $footerAboveClass ?>">
				        <jdoc:include type="modules" name="footer-above-5" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>

					<?php if ($this->countModules('footer-above-6')) : ?>
				    <div id="footer-above-6" class="<?php echo $footerAboveClass ?>">
				        <jdoc:include type="modules" name="footer-above-6" style="div" module-class="gutter" />
				    </div>
					<?php endif ?>
				</div>
				<?php endif ?>
			</section>
		</div>

		<footer id="footer" class="clear clearfix pull-right">
			<div class="gutter clearfix">
				<?php if ($this->countModules('syndicate')) : ?>
				<div id="syndicate">
					<jdoc:include type="modules" name="syndicate" />
				</div>
				<?php endif ?>
				<?php if ($this->countModules('footer')) : ?>
				<jdoc:include type="modules" name="footer" style="div" />
				<?php endif ?>
			</div>
		</footer>

		<?php if ($this->countModules('debug')) : ?>
		<jdoc:include type="modules" name="debug" style="raw" />
		<?php endif ?>

		<?php if ($this->countModules('analytics')) : ?>
		<jdoc:include type="modules" name="analytics" />
		<?php endif ?>

	</body>
</html>
