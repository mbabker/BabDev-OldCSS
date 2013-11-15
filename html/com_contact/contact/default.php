<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams('com_media');

jimport('joomla.html.html.bootstrap');
?>
<div class="item-page<?php echo $this->pageclass_sfx?>">
	<p>Your feedback is greatly appreciated. If your comments are concerning one of my extensions, I highly encourage you to review the available information here on this site with regards to them or to report any issues to their respective issue trackers.</p>
	<ul>
		<li>Podcast Manager: <a href="http://www.babdev.com/extensions/podcast-manager" title="Podcast Manager">Extension Information</a> | <a href="https://github.com/mbabker/podcast-manager/issues" title="Podcast Manager Issue Tracker">Issue Tracker</a></li>
		<li>Tweet Display Back: <a href="http://www.babdev.com/extensions/tweet-display-back" title="Tweet Display Back">Extension Information</a> | <a href="https://github.com/mbabker/Tweet-Display-Back/issues" title="Tweet Display Back Issue Tracker">Issue Tracker</a></li>
		<li>Yet Another Social Plugin: <a href="http://www.babdev.com/extensions/yet-another-social-plugin" title="Yet Another Social Plugin">Extension Information</a> | <a href="https://github.com/mbabker/Yet-Another-Social-Plugin/issues" title="Yet Another Social Plugin Issue Tracker">Issue Tracker</a></li>
	</ul>
	<?php if ($this->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id)) : ?>
		<?php echo $this->loadTemplate('form');  ?>
	<?php endif; ?>
</div>
