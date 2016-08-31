<?php //netteCache[01]000259a:2:{s:4:"time";s:21:"0.48236300 1288028855";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:103:"C:\Program Files\VertrigoServ\www\www\3dprojekce.fs.cvut.cz/app/FrontModule/templates/Web/default.phtml";i:2;i:1287045582;}}}?><?php
// file …/FrontModule/templates/Web/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '1c11bf1331'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbbad8bc5247c_title')) { function _cbbad8bc5247c_title($_cb) { extract(func_get_arg(1))
;foreach ($iterator = $_cb->its[] = new SmartCachingIterator($menu_id) as $_menu): echo TemplateHelpers::escapeHtml($_menu->nazev) ;endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ;LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb7ad8d47302_content')) { function _cbb7ad8d47302_content($_cb) { extract(func_get_arg(1))
;foreach ($iterator = $_cb->its[] = new SmartCachingIterator($menu_id) as $_menu): ?>
  <h1><?php echo TemplateHelpers::escapeHtml($_menu->nazev) ?></h1>
	<p><?php echo $_menu->obsah ?></p>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
   
  

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($foto) as $_foto): ?>
     <p>Fotogalerie: <i><a href="<?php echo TemplateHelpers::escapeHtml($control->link("foto", array($_foto->id, $_foto->nazev_slozky))) ?>"><?php echo TemplateHelpers::escapeHtml($_foto->titulek) ?></i></a></p>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
     


<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($stranky) as $_stranky): ?>
  <p><a href="<?php echo TemplateHelpers::escapeHtml($control->link("clanky", array($_stranky->id, $_stranky->url))) ?>"><?php echo TemplateHelpers::escapeHtml($_stranky->titulek) ?> </a><br>
  <?php echo TemplateHelpers::escapeHtml($_stranky->text_uvodni_strana) ?>)</p>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($docs) as $_docs): ?>
  <p>
  <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/img/web/<?php echo TemplateHelpers::escapeHtml($_docs->typ_souboru) ?>.jpg">
  <?php echo TemplateHelpers::escapeHtml($_docs->titulek) ?>

  (vyvěšeno <?php echo TemplateHelpers::escapeHtml($_docs->vyveseno_od) ?>)<br>
  <a href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/docs/<?php echo TemplateHelpers::escapeHtml($_docs->nazev_souboru) ?>.<?php echo TemplateHelpers::escapeHtml($_docs->typ_souboru) ?>">(soubor ve formátu .<?php echo TemplateHelpers::escapeHtml($_docs->typ_souboru) ?>)</a></p>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>






<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?>


<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
