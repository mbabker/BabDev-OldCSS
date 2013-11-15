<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');

if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal">
		<fieldset>
			<legend><span class="badge badge-info">Note</span> all fields are required.</legend>
			<div class="control-group">
				<label class="control-label">Name</label>
				<div class="controls"><?php echo $this->form->getInput('contact_name'); ?></div>
			</div>
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls"><?php echo $this->form->getInput('contact_email'); ?></div>
			</div>
			<div class="control-group">
				<label class="control-label">Subject</label>
				<div class="controls"><?php echo $this->form->getInput('contact_subject'); ?></div>
			</div>
			<div class="control-group">
				<label class="control-label">Message</label>
				<div class="controls"><?php echo $this->form->getInput('contact_message'); ?></div>
			</div>
			<?php if ($this->params->get('show_email_copy')) { ?>
				<div class="control-group">
					<label class="checkbox">
						<?php echo $this->form->getInput('contact_email_copy'); ?>
						Send a copy to yourself
					</label>
				</div>
			<?php } ?>
			<div class="form-actions"><button class="btn btn-success validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		</fieldset>
	</form>
</div>
