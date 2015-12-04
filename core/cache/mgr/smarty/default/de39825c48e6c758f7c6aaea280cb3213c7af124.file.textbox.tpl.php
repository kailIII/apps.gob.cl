<?php /* Smarty version Smarty-3.0.4, created on 2014-02-26 14:39:38
         compiled from "/var/www/apps.gob.cl/manager/templates/default/element/tv/renders/input/textbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1650498318530e26da9d0cc3-83948027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de39825c48e6c758f7c6aaea280cb3213c7af124' => 
    array (
      0 => '/var/www/apps.gob.cl/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1392831846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650498318530e26da9d0cc3-83948027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/apps.gob.cl/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
"
	<?php echo $_smarty_tpl->getVariable('style')->value;?>

	tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
"
/>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxLength']) ? $_smarty_tpl->getVariable('params')->value['maxLength'] : null)){?>,maxLength: <?php echo (isset($_smarty_tpl->getVariable('params')->value['maxLength']) ? $_smarty_tpl->getVariable('params')->value['maxLength'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minLength']) ? $_smarty_tpl->getVariable('params')->value['minLength'] : null)){?>,minLength: <?php echo (isset($_smarty_tpl->getVariable('params')->value['minLength']) ? $_smarty_tpl->getVariable('params')->value['minLength'] : null);?>
<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
</script>
