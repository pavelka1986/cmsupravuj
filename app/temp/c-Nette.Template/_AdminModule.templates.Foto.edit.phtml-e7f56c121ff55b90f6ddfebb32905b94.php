<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.12677300 1290794782";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/AdminModule/templates/Foto.edit.phtml";i:2;i:1290794778;}}}?><?php
// file …/AdminModule/templates/Foto.edit.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '8a44d77a08'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb357f78ff3e_title')) { function _cbb357f78ff3e_title($_cb) { extract(func_get_arg(1))
?>Upravit aktualitu | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb7bc9d0bde2_content')) { function _cbb7bc9d0bde2_content($_cb) { extract(func_get_arg(1))
?>

<br>     <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator(new DirectoryIterator($adresas)) as $file): ?>      <?php if ($file->isDot()) continue ?>      <?php if ($file->isDir()) continue ?>

<a rel="example_group" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/<?php echo TemplateHelpers::escapeHtml($adresas) ?>/<?php echo TemplateHelpers::escapeHtml($file) ?>" title="Popisek">
  <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/<?php echo TemplateHelpers::escapeHtml($adresas) ?>/<?php echo TemplateHelpers::escapeHtml($file) ?>" width="100">         </a>      <?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?> <?php
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
