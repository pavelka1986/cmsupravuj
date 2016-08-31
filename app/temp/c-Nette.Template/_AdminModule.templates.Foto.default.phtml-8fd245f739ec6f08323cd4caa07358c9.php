<?php //netteCache[01]000241a:2:{s:4:"time";s:21:"0.70995300 1290792848";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Foto.default.phtml";i:2;i:1289847802;}}}?><?php
// file …/AdminModule/templates/Foto.default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'cf4516f628'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb1a1a563f05_title')) { function _cbb1a1a563f05_title($_cb) { extract(func_get_arg(1))
?>Přehled fotogalerií | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbba4ab9db650_content')) { function _cbba4ab9db650_content($_cb) { extract(func_get_arg(1))
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
