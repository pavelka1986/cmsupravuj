<?php //netteCache[01]000239a:2:{s:4:"time";s:21:"0.77067600 1290792839";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:84:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Auth.login.phtml";i:2;i:1289847676;}}}?><?php
// file …/AdminModule/templates/Auth.login.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '8e626e18c7'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb51d08140ee_title')) { function _cbb51d08140ee_title($_cb) { extract(func_get_arg(1))
?>Přihlásit se | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb7fa214786a_content')) { function _cbb7fa214786a_content($_cb) { extract(func_get_arg(1))
?>

<img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/user.png" height="80" width="80" style="float: left"><?php $control->getWidget("loginForm")->render() ?> <?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?> <?php extract(array('robots' =>'noindex')) ?> <?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); } ?>  <?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
