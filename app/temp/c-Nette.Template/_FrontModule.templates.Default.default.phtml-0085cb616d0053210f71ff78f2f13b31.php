<?php //netteCache[01]000233a:2:{s:4:"time";s:21:"0.85212700 1287780120";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:78:"/var/www/3dprojekce.fs.cvut.cz/app/FrontModule/templates/Default/default.phtml";i:2;i:1286773344;}}}?><?php
// file …/FrontModule/templates/Default/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'fecd808772'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbf94531f16d_content')) { function _cbbf94531f16d_content($_cb) { extract(func_get_arg(1))
?>
<ul>
	<li><a href="<?php echo TemplateHelpers::escapeHtml($control->link("addItem")) ?>"><code>addItem</code></a> - link to view <em>addItem</em> in current presenter</li>
	<li><a href="<?php echo TemplateHelpers::escapeHtml($control->link("CatalogList:")) ?>"><code>CatalogList:</code></a> - link to presenter <em>CatalogList</em> in current module and view <em>default</em></li>
	<li><a href="<?php echo TemplateHelpers::escapeHtml($control->link("Export:Default:xml")) ?>"><code>Export:Default:xml</code></a> - link to presenter <em>Default</em> in <em>Export</em> submodule and view <em>xml</em></li>
	<li><a href="<?php echo TemplateHelpers::escapeHtml($control->link(":Admin:Default:")) ?>"><code>:Admin:Default:</code></a> - link to presenter <em>Default</em> in <em>Admin</em> module (view <em>default</em>)</li>
</ul><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
