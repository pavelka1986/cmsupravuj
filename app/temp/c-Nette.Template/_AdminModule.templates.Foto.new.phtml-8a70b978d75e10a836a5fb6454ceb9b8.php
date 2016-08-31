<?php //netteCache[01]000237a:2:{s:4:"time";s:21:"0.75353400 1290792858";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Foto.new.phtml";i:2;i:1289847834;}}}?><?php
// file …/AdminModule/templates/Foto.new.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '70ebd9f07a'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbf6c46756b2_title')) { function _cbbf6c46756b2_title($_cb) { extract(func_get_arg(1))
?>Přidat novou fotogalerii | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbb80137a2b8_content')) { function _cbbb80137a2b8_content($_cb) { extract(func_get_arg(1))
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
