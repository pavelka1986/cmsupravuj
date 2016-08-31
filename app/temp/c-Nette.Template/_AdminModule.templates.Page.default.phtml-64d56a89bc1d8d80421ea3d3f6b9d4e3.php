<?php //netteCache[01]000230a:2:{s:4:"time";s:21:"0.57416600 1287477948";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:75:"/var/www/3dprojekce.fs.cvut.cz/app/AdminModule/templates/Page.default.phtml";i:2;i:1286773343;}}}?><?php
// file …/AdminModule/templates/Page.default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '353abe4e86'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbba8f669cb2c_title')) { function _cbba8f669cb2c_title($_cb) { extract(func_get_arg(1))
?>Přehled aktualit | <?php LatteMacros::callBlockParent($_cb, 'title', $template->getParams()) ;
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb7f98f978d0_content')) { function _cbb7f98f978d0_content($_cb) { extract(func_get_arg(1))
?>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($stranky) as $page): ?>
<div id="annonce">
	<p><a href="<?php echo TemplateHelpers::escapeHtml($control->link("edit", array($page->id))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/im_status_message_edit.png" width="45" height="45" class="upravit">
  </a> <a href="<?php echo TemplateHelpers::escapeHtml($control->link("delete", array($page->id))) ?>"><img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/emptytrash.png" width="45" height="45" class="upravit"></a>
  
  <h3><?php echo TemplateHelpers::escapeHtml($page->titulek) ?></h3>
	<?php echo TemplateHelpers::escapeHtml($page->text_uvodni_strana) ?><br>
	</div>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ;
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
