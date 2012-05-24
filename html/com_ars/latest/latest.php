<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 * @version $Id$
 */

defined('_JEXEC') or die('Restricted Access');

$Itemid = JRequest::getInt('Itemid',0);
?>
<?php if ($this->params->get('show_page_title', 1)) : ?>
	<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>"><?php echo $this->escape($this->params->get('page_title')); ?></div>
<?else:?>
	<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>"><?php echo JText::_('ARS_VIEW_LATEST_TITLE'); ?></div>
<?php endif; ?>


<?php if( array_key_exists('all', $this->items) ): ?>
<div id="ars-categories-all">
	<?php if(!empty($this->items)): ?>
	<?php
		foreach($this->items['all'] as $id => $cat):
			if( !empty($cat->release) )
				if( !empty($cat->release->files) )
				{
					$params = ArsHelperChameleon::getParams('category');
					@ob_start();
					@include $this->getSubLayout('category');
					$contents = ob_get_clean();
					$module = ArsHelperChameleon::getModule($cat->title, $contents, $params);
					echo JModuleHelper::renderModule($module, $params);
				}
		endforeach;
	?>
	<?php else: ?>
	<div class="ars-nocategories">
		<?php echo JText::_('ARS_NO_CATEGORIES'); ?>
	</div>
	<?php endif; ?>
</div>
<?php else: ?>

<div id="ars-categories-normal">
	<h2><?php echo JText::_('ARS_CATEGORY_NORMAL'); ?></h2>

	<?php if(!empty($this->items['normal'])): ?>
	<?php
		foreach($this->items['normal'] as $id => $cat):
			if( !empty($cat->release) )
				if( !empty($cat->release->files) )
				{
					$params = ArsHelperChameleon::getParams('category');
					@ob_start();
					@include $this->getSubLayout('category');
					$contents = ob_get_clean();
					$module = ArsHelperChameleon::getModule($cat->title, $contents, $params);
					echo JModuleHelper::renderModule($module, $params);
				}
		endforeach;
	?>
	<?php else: ?>
	<div class="ars-noitems">
		<?php echo JText::_('ARS_NO_CATEGORIES'); ?>
	</div>
	<?php endif; ?>
</div>

<div id="ars-categories-bleedingedge">
	<h2><?php echo JText::_('ARS_CATEGORY_BLEEDINGEDGE'); ?></h2>

	<?php if(!empty($this->items['bleedingedge'])): ?>
	<?php
		foreach($this->items['bleedingedge'] as $id => $cat):
			if( !empty($cat->release) )
				if( !empty($cat->release->files) )
				{
					$params = ArsHelperChameleon::getParams('category');
					@ob_start();
					@include $this->getSubLayout('category');
					$contents = ob_get_clean();
					$module = ArsHelperChameleon::getModule($cat->title, $contents, $params);
					echo JModuleHelper::renderModule($module, $params);
				}
		endforeach;
	?>
	<?php else: ?>
	<div class="ars-noitems">
		<?php echo JText::_('ARS_NO_CATEGORIES'); ?>
	</div>
	<?php endif; ?>
</div>

<?php endif; ?>