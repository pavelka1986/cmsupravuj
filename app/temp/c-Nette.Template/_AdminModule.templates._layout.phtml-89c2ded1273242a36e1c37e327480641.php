<?php //netteCache[01]000225a:2:{s:4:"time";s:21:"0.65551400 1287477943";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:70:"/var/www/3dprojekce.fs.cvut.cz/app/AdminModule/templates/@layout.phtml";i:2;i:1287037827;}}}?><?php
// file …/AdminModule/templates/@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '97ea25a2c0'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbd495991bd5_title')) { function _cbbd495991bd5_title($_cb) { extract(func_get_arg(1))
?>Redakční systém Upravuj<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><?php if (isset($robots)): ?>
  <meta name="robots" content="<?php echo TemplateHelpers::escapeHtml($robots) ?>" />
<?php endif ?>
  <title><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?></title>
  <link rel="stylesheet" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/admin.css" type="text/css" media="screen, projection, tv" />
</head>
<body>
<div id="container">                      
      
      <div id="top">                                     
      </div>    
      <div id="menu">             
        <div style="float: left; text-align: center; margin-left: 5px">
          <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Default:")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/go_home.png" height="50" width="50" alt="Domů">
            </a>

          <a href="javascript:self.history.back();">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/edit_undo.png" height="50" width="50" alt="Zpět">
            </a>

          <a href="javascript:self.history.forward();">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/edit_redo.png" height="50" width="50" alt="Vpřed">
            </a>

          <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Menu:")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/fileview_split.png" height="50" width="50" alt="Menu">
            </a>

          <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Page:default")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/novinky.png" height="50" width="50" alt="Novinky">
            </a>

          <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Foto:")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/image_jpeg2000.png" height="50" width="50" alt="Správa fotografií">
            </a>
            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Docs:")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/kfm.png" height="50" width="50" alt="Správa dokumentů">
            </a>
            
           <a href="<?php echo TemplateHelpers::escapeHtml($control->link("User:")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/preferences_desktop_user.png" height="50" width="50" alt="Správa uživatelů">
            </a>
            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("add")) ?>">
          <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/plus.png" height="50" width="50" alt="Přidat">
          </a>
        </div>


        <div style="float: right; text-align: center; margin-right: 11px">
          <a href="<?php echo TemplateHelpers::escapeHtml($control->link("default")) ?>">
            <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/help_hint.png" height="50" width="50" alt="Nápověda">
            </a>

        
        
<?php if (isset($user)): ?>

           <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Default:logout")) ?>" title="Odhlásit [<?php  echo implode(', ', $user->roles) ?>]">
           <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/user.png" height="50" width="50" alt="Odhlásit <?php echo TemplateHelpers::escapeHtml($user->name) ?>"></a>
        </div> <?php endif ?>

        
        
    </div><!-- #menu -->
  
  <div id="dotted">
   <h1><?php echo TemplateHelpers::escapeHtml($template->stripTags($title)) ?></h1>
    <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?><div class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?></div><?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>

<?php LatteMacros::callBlock($_cb, 'content', $template->getParams()) ?>
  </div><!-- #dotted -->

  <div id="paticka">
    (c) 2010 David Pavelka. Redakční systém pro správu obsahu Upravuj.
  </div><!-- #footer -->

</div><!-- #container -->
</body>
</html>
<?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
