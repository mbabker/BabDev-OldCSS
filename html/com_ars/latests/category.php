<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 * @version $Id$
 */

defined('_JEXEC') or die('Restricted Access');

jimport('joomla.utilities.date');
$released = new JDate($cat->release->created);

// Additons to get all supported versions per release (for when multiple items support different versions)
$i = 0;
$versions = array();
foreach ($cat->release->files as $environment)
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
<div class="ars-list-release">
	<div class="ars-release-properties">
		<span class="ars-release-property">
			<span class="ars-value">
				<?php echo $cat->description; ?>
			</span>
		</span>

		<span class="ars-release-property">
			<span class="ars-label">Version:</span>
			<span class="ars-value">
				<?php echo $this->escape($cat->release->version); ?>
			</span>
		</span>

		<span class="ars-release-property">
			<span class="ars-label"><?php echo JText::_('LBL_RELEASES_MATURITY') ?>:</span>
			<span class="ars-value">
				<?php echo JText::_('LBL_RELEASES_MATURITY_'.  strtoupper($cat->release->maturity)) ?>
			</span>
		</span>

		<span class="ars-release-property">
			<span class="ars-label"><?php echo JText::_('LBL_RELEASES_RELEASEDON') ?>:</span>
			<span class="ars-value">
				<?php echo $released->format(JText::_('DATE_FORMAT_LC2')) ?>
			</span>
		</span>

		<?php if(!empty($environments)): ?>
		<span class="ars-release-property">
			<span class="ars-label"><?php echo JText::_('LBL_ITEMS_ENVIRONMENTS') ?>:</span>
			<span class="ars-value"><?php echo $environments; ?></span>
		</span>
		<?php endif; ?>
	</div>

	<div class="ars-releases-latest">
		<div>
		<?php
			$i = 0;
			foreach($cat->release->files as $item)
			{
				$i = 1 - $i;
				echo $this->loadAnyTemplate('site:com_ars/latests/item', array('Itemid' => $Itemid, 'item' => $item));
			}
		?>
		</div>
	</div>
	<div class="ars-category-readon">
		<?php
		$title = JText::_('LBL_CATEGORY_VIEW');
		$url = AKRouter::_('index.php?option=com_ars&view=category&id='.$cat->id.'&Itemid='.$Itemid);
		echo ArsHelperChameleon::getReadOn($title, $url);
		?>
	</div>
	<div class="clr"></div>
</div>
