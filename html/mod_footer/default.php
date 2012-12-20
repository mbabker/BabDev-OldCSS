<?php
/**
 * @package        Template Framework for Joomla! 1.6+
 * @author         Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright      Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die;

$app      = JFactory::getApplication();
$sitename = htmlspecialchars($app->getCfg('sitename'));
?>
<p id="siteinfo-legal">All rights reserved. &copy; 2010-<?php echo $cur_year ?> <a href="<?php echo JUri::base(true) ?>" title="<?php echo $sitename ?>"><?php echo $sitename ?></a>.<br />
Powered by <a href="http://www.joomla.org" title="Joomla!">Joomla!</a></p>
