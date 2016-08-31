<?php //netteCache[01]000244a:2:{s:4:"time";s:21:"0.82887100 1290854470";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:89:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Default.default.phtml";i:2;i:1290854469;}}}?><?php
// file …/AdminModule/templates/Default.default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'b4f1084d22'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb4320b8a106_title')) { function _cbb4320b8a106_title($_cb) { extract(func_get_arg(1))
?>Hlavní panel administrace |<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb9aea0685d2_content')) { function _cbb9aea0685d2_content($_cb) { extract(func_get_arg(1))
?>   <h1>Hlavní panel administrace</h1>   
<p>Redakční systém Upravuj umožňují kompletní správu obsahu webových stránek. Základní funkcí redakčního systémů je publikování textů a fotografií na web. Systém umožňuje upravovat obsah webů.
</p>  
<div>    
  <div style="float: left; margin-right: 10px;">
    <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Default:")) ?>">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/go_home.png" height="118" width="118" alt="Domů">    
      <br>Seznam pokynů</a>
  </div>    
  <div style="float: left; margin-right: 10px;">
    <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Menu:")) ?>">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/fileview_split.png" height="118" width="118" alt="Menu">    
      <br>Úprava menu</a>
  </div>    
  <div style="float: left; margin-right: 10px;">
    <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Page:")) ?>">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/novinky.png" height="118" width="118" alt="Články">    
      <br>Úprava článků</a>
  </div>    
  <div style="float: left; margin-right: 10px;">
    <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("User:")) ?>">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/preferences_desktop_user.png" height="118" width="118" alt="Uživatele">    
      <br>Úprava uživatelů</a>
  </div>    
  <div style="float: left; margin-right: 10px;">
    <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Foto:")) ?>">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/image_jpeg2000.png" height="118" width="118" alt="Fotografie">    
      <br>Správa fotografií</a>
  </div>    
  <div style="float: left; margin-right: 10px;">
    <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Docs:")) ?>">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/kfm.png" height="118" width="118" alt="Dokumenty">    
      <br>Správa dokumentů</a>
  </div>    
  <div style="float: left; margin-right: 10px;">
    <a href="napoveda.pdf">    
      <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/help_hint.png" height="118" width="118" alt="Uživatele">    
      <br>Nápověda systému</a>
  </div>  
</div>


<hr class="cistic"><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?> <?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); } ?>

<?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
