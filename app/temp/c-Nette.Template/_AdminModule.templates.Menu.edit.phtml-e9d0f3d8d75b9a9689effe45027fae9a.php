<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.73238400 1290964789";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"/home/www/mysoftware.cz/www/mysoftware.cz/app/AdminModule/templates/Menu.edit.phtml";i:2;i:1290963100;}}}?><?php
// file …/AdminModule/templates/Menu.edit.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '74b7eca272'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbb7fe036872_title')) { function _cbbb7fe036872_title($_cb) { extract(func_get_arg(1))
?>Upravit položku menu | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbf885b91199_content')) { function _cbbf885b91199_content($_cb) { extract(func_get_arg(1))
?>   <?php echo $form ?> <?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?> <?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
