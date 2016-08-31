<?php //netteCache[01]000241a:2:{s:4:"time";s:21:"0.48926700 1290856935";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Page.default.phtml";i:2;i:1289847886;}}}?><?php
// file …/AdminModule/templates/Page.default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '976870c38a'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb82afa08c5a_title')) { function _cbb82afa08c5a_title($_cb) { extract(func_get_arg(1))
?>Přehled aktualit | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb63f510a7b8_content')) { function _cbb63f510a7b8_content($_cb) { extract(func_get_arg(1))
?>   <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($stranky) as $page): ?>

<div id="annonce">	
  <p>
    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("edit", array($page->id))) ?>">
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/im_status_message_edit.png" width="45" height="45" class="upravit">  </a> 
    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("delete", array($page->id))) ?>">
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/emptytrash.png" width="45" height="45" class="upravit"></a>     <h3><?php echo TemplateHelpers::escapeHtml($page->titulek) ?></h3>	<?php echo TemplateHelpers::escapeHtml($page->text_uvodni_strana) ?>

    <br>	
</div><?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?> <?php
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
