<?php //netteCache[01]000236a:2:{s:4:"time";s:21:"0.54679400 1290768740";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:81:"C:\VertrigoServ\www\www\www.mysoftware.cz/app/FrontModule/templates/@layout.phtml";i:2;i:1290525026;}}}?><?php
// file …/FrontModule/templates/@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'b89d732db1'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbf168fae726_title')) { function _cbbf168fae726_title($_cb) { extract(func_get_arg(1))
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
    <meta http-equiv="Content-Language" content="cs" /> 
    <meta name="Author" content="David Pavelka; e-mail:dejvid.pavelka@seznam.cz " />              
    <meta name="Copyright" content="MySoftware.cz" />              
    <meta name="Description" content="Účetní software zdarma online" />
    <meta name="Keywords" content="Software, účetnictví, online" />
    <meta name="robots" content="index,follow" />
    <meta name='googlebot' content='index,follow,snippet,archive' /> 
		<meta name="rating" content="general" />     
    <title><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?> | MySoftware.cz
    </title>
    <link rel="shortcut icon" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/favicon.ico" type="image/x-icon" />    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/reset.css" />    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/site.css" />  
  </head>  
  <body>    
    <div id="container_top">      
      <div id="top">
        <div id="menu"> <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($menu) as $_menu): ?>

          <a href="<?php echo TemplateHelpers::escapeHtml($control->link("default", array($_menu->id, $_menu->nazev_url))) ?>" title="<?php echo TemplateHelpers::escapeHtml($_menu->nazev) ?>"><?php echo TemplateHelpers::escapeHtml($_menu->nazev) ?></a>   <?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>

        </div>
         <p class="seo_box">MySoftware.cz             
        </p> 
        <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/zivnostnik.jpg" class="zivnostnik" alt="Živnostník" />
        <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/mala_firma.jpg" class="mala_firma" alt="Malá firma" /> 
        <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/velka_firma.jpg" class="velka_firma" alt="Velká firma" />      
      </div>
     </div>       
      <div id="container_info">      
        <div id="info">
        <div><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/info/kexi.png" alt="Snadná dostupnost" />Snadná dostupnost</div>
        <div><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/info/document_encrypt.png" alt="Vysoké zabezpečení" /> Vysoké zabezpečení </div>
        <div><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/info/book2.png" alt="Rychlost a jednoduchost" /> Rychlost a jednoduchost  </div>
        <div><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/info/games_hint.png" alt="Rychlost a jednoduchost" /> Rychlost a jednoduchost  </div>
        <div><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/info/apply.png" alt="Účetnictví zdarma" /> Účetnictví zdarma   </div>       
        </div>      
      </div>      
      <div id="container_obsah">             
        <div id="obsah">               <?php LatteMacros::callBlock($_cb, 'content', $template->getParams()) ?>

        </div>
      </div>             
      <div id="container_paticka">      
        <div id="paticka">        (c) 2010 MySoftware.cz je účetní aplikace určená pro živnostníky, malé a velké firmy  | 
        <a href="<?php echo TemplateHelpers::escapeHtml($control->link(":Admin:Default:")) ?>">Administrace</a>    
        </div>
      </div>  
  </body>
</html><?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
