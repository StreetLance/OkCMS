<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-22 03:09:39
         compiled from "C:\Users\Krash\Desktop\OSPanel\domains\CMS\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19969487095c465f435d3b64-21749573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b66031b56e5704fe61982847bd71645b6d6de3' => 
    array (
      0 => 'C:\\Users\\Krash\\Desktop\\OSPanel\\domains\\CMS\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1548113236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19969487095c465f435d3b64-21749573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'menu_404' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c465f4361cbe3_69355697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c465f4361cbe3_69355697')) {function content_5c465f4361cbe3_69355697($_smarty_tpl) {?>





<div class="block padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="menu_404">
                    <div class="text_404">
                        <span data-language="page404_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->page404_text;?>
</span>
                    </div>
                    
                    <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
