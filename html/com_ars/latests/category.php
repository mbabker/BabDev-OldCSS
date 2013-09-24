<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2013 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 */

defined('_JEXEC') or die();

JLoader::import('joomla.utilities.date');
$released = new JDate($item->release->created);
$release_url = AKRouter::_('index.php?option=com_ars&view=release&id='.$item->release->id.'&Itemid=' . $Itemid);

// Additons to get all supported versions per release (for when multiple items support different versions)
$i = 0;
$versions = array();
foreach ($item->release->files as $environment)
{
	$supported = json_decode($environment->environments);
	foreach ($supported as $version)
	{
		$versions[$i] = $version;
		$i++;
	}
}
$environments = ArsHelperHtml::getEnvironments(json_encode(array_unique($versions)));
?>
<div class="ars-category-<?php echo $id ?> well">
	<h3<?php echo $item->type == 'bleedingedge' ? ' class="warning"' : '' ?>>
		<?php echo $this->escape($item->title) ?>
	</h3>

	<div class="ars-latest-category">
		<div class="ars-release-properties">
			<div class="row-fluid">
				<div class="span12"><?php echo ArsHelperHtml::preProcessMessage($item->description, 'com_ars.category_description') ?></div>
			</div>
			<div class="row-fluid">
				<div class="span2 ars-label">
					Version:
				</div>
				<div class="span10">
					<?php echo $this->escape($item->release->version); ?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span2 ars-label">
					<?php echo JText::_('COM_ARS_RELEASES_FIELD_MATURITY') ?>:
				</div>
				<div class="span10">
					<?php echo JText::_('COM_ARS_RELEASES_MATURITY_'.  strtoupper($item->release->maturity)) ?>
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
			<?php if(!empty($environments)): ?>
			<div class="row-fluid">
				<div class="span2 ars-label">
					<?php echo JText::_('LBL_ITEMS_ENVIRONMENTS') ?>:
				</div>
				<div class="span10">
					<?php echo $environments; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>

		<div class="ars-releases-latest row-fluid">
			<div class="span12">
				<?php foreach($item->release->files as $i): ?>
				<?php echo $this->loadAnyTemplate('site:com_ars/latests/item', array('Itemid' => $Itemid, 'item' => $i)); ?>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="ars-category-readon">
			<a class="readon" href="<?php echo $release_url; ?>">
				<?php echo JText::_('LBL_CATEGORY_VIEW') ?>
			</a>
		</div>

	</div>
</div>
