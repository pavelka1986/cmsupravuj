<?php //netteCache[01]000230a:2:{s:4:"time";s:21:"0.38763000 1287477949";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:75:"/var/www/3dprojekce.fs.cvut.cz/app/AdminModule/templates/Menu.default.phtml";i:2;i:1286773343;}}}?><?php
// file …/AdminModule/templates/Menu.default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '1835c459ae'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb172611ba4a_title')) { function _cbb172611ba4a_title($_cb) { extract(func_get_arg(1))
?>Přehled položek menu | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbb884e942e7_content')) { function _cbbb884e942e7_content($_cb) { extract(func_get_arg(1))
?>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($menu) as $_menu): ?>

<div id="annonce">
	<p><a href="<?php echo TemplateHelpers::escapeHtml($control->link("edit", array($_menu->id))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/fileview_split.png" width="45" height="45" class="upravit">
  </a> <a href="<?php echo TemplateHelpers::escapeHtml($control->link("delete", array($_menu->id))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/emptytrash.png" width="45" height="45" class="upravit"></a>

  <h3><?php echo TemplateHelpers::escapeHtml($_menu->nazev) ?></h3>
	<?php echo TemplateHelpers::escapeHtml($_menu->nazev_url) ?> <br>
	</div>
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

<p><a href="<?php echo TemplateHelpers::escapeHtml($control->link("add")) ?>">
<img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/plus.png" height="50" width="50" alt="Přidat">
</a></p>

<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
