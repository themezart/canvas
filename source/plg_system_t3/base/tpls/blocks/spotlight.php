<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License; http://www.gnu.org/licenses/gpl.html
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         https://github.com/t3framework/ 
 *------------------------------------------------------------------------------
 */


// No direct access
defined('_JEXEC') or die;
?>
<?php
	$style = 'T3Xhtml';
	$name = $vars['name'];
	$splparams = $vars['splparams'];
	$datas = $vars['datas'];
	$cols = $vars['cols'];
	$rowcls = isset($vars['row-fluid']) && $vars['row-fluid'] ? 'row-fluid':'row';
	?>
	<!-- SPOTLIGHT -->
	<div class="t3-spotlight t3-<?php echo $name ?> <?php echo $rowcls ?>">
		<?php
		foreach ($splparams as $i => $splparam):
			$param = (object)$splparam;
		?>
			<div class="<?php echo $splparam->default ?> <?php echo ($i == 0) ? 'item-first' : (($i == $cols - 1) ? 'item-last' : '') ?>"<?php echo $datas[$i] ?>>
				<?php if ($this->countModules($param->position)) : ?>
				<jdoc:include type="modules" name="<?php echo $param->position ?>" style="<?php echo $style ?>"/>
				<?php else: ?>
				&nbsp;
				<?php endif ?>
			</div>
		<?php endforeach ?>
	</div>
<!-- SPOTLIGHT -->