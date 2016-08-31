<?php //netteCache[01]000241a:2:{s:4:"time";s:21:"0.83688700 1290792839";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Auth.@layout.phtml";i:2;i:1289847664;}}}?><?php
// file …/AdminModule/templates/Auth.@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '10f64cc540'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb51ee982289_title')) { function _cbb51ee982289_title($_cb) { extract(func_get_arg(1))
?>Redakční systém Publikuj<?php
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <?php if (isset($robots)): ?>
    <meta name="robots" content="<?php echo TemplateHelpers::escapeHtml($robots) ?>" />  
<?php endif ?>
    <title><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?>

    </title>  
    <link rel="stylesheet" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/admin.css" type="text/css" media="screen, projection, tv" />
  </head>
  <body>  
    <div id="container">       
      <div id="top">
      </div>   
      <div id="dotted"><h1>Přihlásit se</h1>    <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?>

        <div class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?>

        </div><?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>     <?php LatteMacros::callBlock($_cb, 'content', $template->getParams()) ?>

      </div>
      <!-- #dotted -->       
    </div>
  </body>
</html><?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
