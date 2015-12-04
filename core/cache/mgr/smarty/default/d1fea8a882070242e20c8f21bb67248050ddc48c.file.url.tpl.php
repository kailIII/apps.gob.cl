<?php /* Smarty version Smarty-3.0.4, created on 2014-02-27 17:48:11
         compiled from "/var/www/apps.gob.cl/manager/templates/default/element/tv/renders/input/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508021878530fa48b4b6819-86733495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1fea8a882070242e20c8f21bb67248050ddc48c' => 
    array (
      0 => '/var/www/apps.gob.cl/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1392831846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508021878530fa48b4b6819-86733495',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<select id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('urls')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
?>
	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null)==$_smarty_tpl->getVariable('selected')->value){?>selected="selected"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
</option>
<?php }} ?>
</select>
<input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text"
    style="width: 70%;"
	value="<?php echo $_smarty_tpl->getVariable('tv')->value->get('processedValue');?>
"
	onchange="MODx.fireResourceFormChange();"
/>
<script type="text/javascript">
Ext.onReady(function() {
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
});
</script>