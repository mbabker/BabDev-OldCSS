<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 * @version $Id$
 */

defined('_JEXEC') or die('Restricted Access');

$Itemid_query = empty($Itemid) ? "" : "&Itemid=$Itemid";
$download_url = AKRouter::_('index.php?option=com_ars&view=download&format=raw&id='.$item->id.$Itemid_query);

?>
<div class="ars-latest-items ars-row<?php echo $i ?> clearfix">
	<div class="ars-latest-items-title">
		<?php echo $this->escape($item->title) ?>
	</div>
	<div class="clearfix">
		<div class="ars-latest-items-filename">
			<a class="btn" href="<?php echo $download_url ?>" rel="nofollow">
				<span class="icon-box-add"></span> <?php echo JText::_('LBL_ITEM_DOWNLOAD') ?>
			</a>
		</div>
		<div class="ars-latest-items-downloaded">
			<?php echo JText::_('LBL_ITEMS_HITS') ?>
			<?php echo JText::sprintf( ($item->hits == 1 ? 'LBL_RELEASES_TIME' : 'LBL_RELEASES_TIMES'), $item->hits) ?>
		</div>
	</div>
</div>
