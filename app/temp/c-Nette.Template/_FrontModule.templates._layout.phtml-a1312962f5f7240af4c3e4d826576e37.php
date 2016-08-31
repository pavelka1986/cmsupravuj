<?php //netteCache[01]000254a:2:{s:4:"time";s:21:"0.73864100 1288028908";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:99:"C:\Program Files\VertrigoServ\www\www\3dprojekce.fs.cvut.cz/app/FrontModule/templates/@layout.phtml";i:2;i:1288028894;}}}?><?php
// file …/FrontModule/templates/@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '16922821ef'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbded74eaa85_title')) { function _cbbded74eaa85_title($_cb) { extract(func_get_arg(1))
;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
  <head>    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />    
    <title><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?> | 3D Projekce FS ČVUT
    </title>    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/reset.css" />    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/site.css" />  
  </head>  
  <body>    
    <div id="container_top">      
      <div id="top">        
        <p class="seo_box">3D Projekce         
        </p>      
      </div>      
      <div id="container_menu">      
        <div id="menu"><?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($menu) as $_menu): ?>

          <a href="<?php echo TemplateHelpers::escapeHtml($control->link("default", array($_menu->id, $_menu->nazev_url))) ?>"><?php echo TemplateHelpers::escapeHtml($_menu->nazev) ?></a> |  <?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>

        </div>      
      </div>      
      <div id="container_obsah">             
        <div id="obsah">               <?php LatteMacros::callBlock($_cb, 'content', $template->getParams()) ?>

        </div>
      </div>             
      <div id="container_paticka">      
        <div id="paticka">        (c) 2010 Vytvořil David Pavelka | e-mail: <a href="mailto:3dprojekc@fs.cvut.cz">3dprojekce@fs.cvut.cz</a> | 
        <a href="<?php echo TemplateHelpers::escapeHtml($control->link(":Admin:Default:")) ?>">Administrace</a>    
        </div>
      </div>  
  </body>
</html><?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
