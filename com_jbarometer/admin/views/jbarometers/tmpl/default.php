<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_helloworld&view=jbarometers" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th>
				<?php echo JText::_('COM_JBAROMETER_JBAROMETERS_STAND') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_JBAROMETER_JBAROMETERS_STANDDATUM'); ?>
			</th>
			<th>
				<?php echo JText::_('COM_JBAROMETER_JBAROMETERS_ETAPPE1') ;?>
			</th>
			<th>
				<?php echo JText::_('COM_JBAROMETER_JBAROMETERS_ZIELSUMME') ;?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_jbarometer&task=jbarometer.edit&id=' . $row->id);
					 ?>
					<tr>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_JBAROMETER_EDIT_JBAROMETER'); ?>">
							<?php echo $row->stand; ?>
						</a>
						</td>
						<td align="center">
							<?php echo $row->standdatum; ?>
						</td>
						<td>
							<?php echo number_format(intval($row->etappe1), 0, '','.'); ?>
						</td>
						<td>
							<?php echo number_format(intval($row->zielsumme), 0, '','.'); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>
