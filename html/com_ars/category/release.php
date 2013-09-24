<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2013 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 */

defined('_JEXEC') or die();

JLoader::import('joomla.utilities.date');

$released = new JDate($item->created);
$release_url = AKRouter::_('index.php?option=com_ars&view=release&id='.$item->id.'&Itemid='.$Itemid);

switch ($item->maturity)
{
	case 'stable':
		$maturityClass = 'label-success';
		break;

	case 'rc':
		$maturityClass = 'label-info';
		break;

	case 'beta':
		$maturityClass = 'label-warning';
		break;

	case 'alpha':
		$maturityClass = 'label-important';
		break;

	default:
		$maturityClass = 'label-inverse';
		break;
}

?>

<div class="ars-release-<?php echo $item->id ?> well">
	<h3>
		<?php if (!isset($release)): ?>
		<a href="<?php echo $release_url; ?>">
			<?php echo $this->escape($item->version) ?>
		</a>
		<span class="label <?php echo $maturityClass ?>">
			<?php echo JText::_('COM_ARS_RELEASES_MATURITY_' . $item->maturity) ?>
		</span>
		<?php else: ?>
		<?php echo $this->escape($this->category->title); ?>
		<?php endif; ?>
	</h3>

	<?php if(!isset($no_link)): ?>

	<div class="ars-release-properties">
		<div class="row-fluid">
			<div class="span2 ars-label">
				<?php echo JText::_('COM_ARS_RELEASES_FIELD_MATURITY') ?>:
			</div>
			<div class="span10">
				<?php echo JText::_('COM_ARS_RELEASES_MATURITY_'.  strtoupper($item->maturity)) ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span2 ars-label">
				<?php echo JText::_('LBL_RELEASES_RELEASEDON') ?>:
			</div>
			<div class="span10">
				<?php echo JHtml::_('date', $released, JText::_('DATE_FORMAT_LC2')) ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span2 ars-label">
				<?php echo JText::_('LBL_RELEASES_HITS') ?>:
			</div>
			<div class="span10">
				<?php echo JText::sprintf( ($item->hits == 1 ? 'LBL_RELEASES_TIME' : 'LBL_RELEASES_TIMES'), $item->hits) ?>
			</div>
		</div>
	</div>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#reltabs-<?php echo $item->id ?>-desc" data-toggle="tab"><?php echo JText::_('COM_ARS_RELEASE_DESCRIPTION_LABEL') ?></a>
		<li><a href="#reltabs-<?php echo $item->id ?>-notes" data-toggle="tab"><?php echo JText::_('COM_ARS_RELEASE_NOTES_LABEL') ?></a>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="reltabs-<?php echo $item->id ?>-desc">
			<?php echo ArsHelperHtml::preProcessMessage($item->description, 'com_ars.release_description'); ?>
		</div>
		<div class="tab-pane" id="reltabs-<?php echo $item->id ?>-notes">
			 <?php echo ArsHelperHtml::preProcessMessage($item->notes, 'com_ars.release_notes'); ?>
		</div>
	</div>

	<div>
		<a class="readon" href="<?php echo $release_url; ?>">
			<?php echo JText::_('LBL_RELEASE_VIEWITEMS') ?>
		</a>
	</div>

	<?php else: ?>
	<?php echo ArsHelperHtml::preProcessMessage($item->description, 'com_ars.release_description'); ?>
	<?php endif; ?>
</div>
