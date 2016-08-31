<?php //netteCache[01]000240a:2:{s:4:"time";s:21:"0.98988800 1290856840";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Menu.delete.phtml";i:2;i:1289847862;}}}?><?php
// file …/AdminModule/templates/Menu.delete.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'f70a90d9f2'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb4ffe98bbde_title')) { function _cbb4ffe98bbde_title($_cb) { extract(func_get_arg(1))
?>Smazat položku menu | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb98b1917e7a_content')) { function _cbb98b1917e7a_content($_cb) { extract(func_get_arg(1))
?> <?php if ($menu): ?>

<p> <h3><?php echo TemplateHelpers::escapeHtml($menu->nazev) ?></h3> <?php echo TemplateHelpers::escapeHtml($menu->obsah) ?>

</p><?php echo $form ?> <?php else: ?>

<p>Položka menu nebyla nalezená
</p><?php endif ?> <?php
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
