<?php //netteCache[01]000237a:2:{s:4:"time";s:21:"0.42990100 1290856940";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Page.add.phtml";i:2;i:1289847880;}}}?><?php
// file …/AdminModule/templates/Page.add.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '7826905d19'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb468e9df495_title')) { function _cbb468e9df495_title($_cb) { extract(func_get_arg(1))
?>Přidat novou aktualitu | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbba6e4485afe_content')) { function _cbba6e4485afe_content($_cb) { extract(func_get_arg(1))
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
