<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2013 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 */

defined('_JEXEC') or die();

JHtml::_('behavior.tooltip');

$Itemid = empty($Itemid) ? "" : "&Itemid=$Itemid";
$download_url = AKRouter::_('index.php?option=com_ars&view=download&format=raw&id='.$item->id.$Itemid);

$directlink = false;

if ($this->directlink)
{
	$basename = ($item->type == 'file') ? $item->filename : $item->url;

	foreach ($this->directlink_extensions as $ext)
	{
		if (substr($basename, -strlen($ext)) == $ext)
		{
			$directlink = true;
			break;
		}
	}

	if ($directlink)
	{
		$directlink_url = $download_url .
				(strstr($download_url, '?') !== false ? '&' : '?') .
				'dlid='.$this->dlid.'&jcompat=my'.$ext;
	}
}
?>
<div class="ars-item-<?php echo $item->id ?> well">
	<h3>
		<a href="<?php echo $download_url ?>">
			<?php echo $this->escape($item->title) ?>
		</a>
	</h3>

	<div class="ars-release-properties">
		<div class="row-fluid">
			<div class="span3 ars-label">
				<?php echo JText::_('LBL_ITEMS_HITS') ?>:
			</div>
			<div class="span9">
				<?php echo JText::sprintf( ($item->hits == 1 ? 'LBL_RELEASES_TIME' : 'LBL_RELEASES_TIMES'), $item->hits) ?>
			</div>
		</div>
		<?php if(!empty($item->filesize) && $this->pparams->get('show_filesize',1)): ?>
		<div class="row-fluid">
			<div class="span3 ars-label">
				<?php echo JText::_('LBL_ITEMS_FILESIZE') ?>:
			</div>
			<div class="span9">
				<?php echo ArsHelperHtml::sizeFormat($item->filesize) ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($item->md5) && $this->pparams->get('show_md5',1)): ?>
		<div class="row-fluid">
			<div class="span3 ars-label">
				<?php echo JText::_('LBL_ITEMS_MD5') ?>:
			</div>
			<div class="span9">
				<?php echo $item->md5 ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($item->sha1) && $this->pparams->get('show_sha1',1)): ?>
		<div class="row-fluid">
			<div class="span3 ars-label">
				<?php echo JText::_('LBL_ITEMS_SHA1') ?>:
			</div>
			<div class="span9">
				<?php echo $item->sha1 ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($item->environments) && $this->pparams->get('show_environments',1)): ?>
		<div class="row-fluid">
			<div class="span3 ars-label">
				<?php echo JText::_('LBL_ITEMS_ENVIRONMENTS') ?>:
			</div>
			<div class="span9">
				<?php echo $item->environments ?>
			</div>
		</div>
		<?php endif; ?>

	</div>

	<?php if (!empty($item->description)): ?>
	<div class="ars-item-description well small">
		<?php echo ArsHelperHtml::preProcessMessage($item->description, 'com_ars.item_description'); ?>
	</div>
	<?php endif; ?>

	<div>
		<div class="pull-left">
			<a class="btn" href="<?php echo $download_url ?>" rel="nofollow">
				<span class="icon-download"></span> <?php echo JText::_('LBL_ITEM_DOWNLOAD') ?>
			</a>
		</div>
		<?php if ($directlink): ?>
		<div class="pull-left">
			&nbsp;
			<a rel="nofollow" href="<?php echo $directlink_url; ?>"
			   class="directlink hasTip" title="<?php echo $this->directlink_description ?>"
			>
				<?php echo JText::_('COM_ARS_LBL_ITEM_DIRECTLINK') ?>
			</a>
		</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>
</div>
