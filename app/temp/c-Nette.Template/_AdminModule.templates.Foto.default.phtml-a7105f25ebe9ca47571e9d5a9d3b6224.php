<?php //netteCache[01]000260a:2:{s:4:"time";s:21:"0.78545400 1289849447";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:104:"C:\Program Files\VertrigoServ\www\www\3dprojekce.fs.cvut.cz/app/AdminModule/templates/Foto.default.phtml";i:2;i:1289847801;}}}?><?php
// file …/AdminModule/templates/Foto.default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'b449a25c0a'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb987ad12988_title')) { function _cbb987ad12988_title($_cb) { extract(func_get_arg(1))
?>Přehled fotogalerií | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb9c02c3f457_content')) { function _cbb9c02c3f457_content($_cb) { extract(func_get_arg(1))
?>   <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($foto) as $page): ?>

<div id="annonce">	
  <p>
    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("edit", array($page->id))) ?>">
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/image_jpeg2000.png" width="45" height="45" class="upravit">  </a> 
    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("delete", array($page->id))) ?>">
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/emptytrash.png" width="45" height="45" class="upravit"></a>     <h3><?php echo TemplateHelpers::escapeHtml($page->titulek) ?></h3>	<?php echo TemplateHelpers::escapeHtml($page->nazev_slozky) ?>

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
