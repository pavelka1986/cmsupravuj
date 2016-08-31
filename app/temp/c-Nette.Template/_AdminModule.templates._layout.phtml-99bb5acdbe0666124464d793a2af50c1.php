<?php //netteCache[01]000254a:2:{s:4:"time";s:21:"0.91610400 1289849433";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:99:"C:\Program Files\VertrigoServ\www\www\3dprojekce.fs.cvut.cz/app/AdminModule/templates/@layout.phtml";i:2;i:1289848533;}}}?><?php
// file …/AdminModule/templates/@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '4e7180b62d'); unset($_extends);


//
// block title
//
if (!function_exists($_cb->blocks['title'][] = '_cbb45c736506c_title')) { function _cbb45c736506c_title($_cb) { extract(func_get_arg(1))
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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <?php if (isset($robots)): ?>
    <meta name="robots" content="<?php echo TemplateHelpers::escapeHtml($robots) ?>" />  
<?php endif ?>
    <title><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['title']), $_cb, get_defined_vars()); } ?>

    </title>  
    <link rel="stylesheet" href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/admin.css" type="text/css" media="screen, projection, tv" />  
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
    $('#nav li').hover(
        function () {
            //show its submenu
            $('ul', this).slideDown(100);
        },
        function () {
            //hide its submenu
            $('ul', this).slideUp(100);
        }
    );
});
</script>
  </head>
  <body>
    <div id="container">                                    
      <div id="top">                                            
      </div>           
      <div id="menu">                              
        <div style="text-align: left">          
          <ul id="nav">            
            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Default:")) ?>">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/go_home.png" height="50" width="50" alt="Domů"></a>              
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Default:")) ?>">Domů</a>              
              </li>              
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="javascript:self.history.back();">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/edit_undo.png" height="50" width="50" alt="Zpět"></a>              
            <ul>              
              <li>              
              <a href="javascript:self.history.back();">Zpět</a>              
              </li>              
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="javascript:self.history.forward();">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/edit_redo.png" height="50" width="50" alt="Vpřed"></a>              
            <ul>              
              <li>              
              <a href="javascript:self.history.forward();">Vpřed</a>              
              </li>              
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Menu:")) ?>">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/fileview_split.png" height="50" width="50" alt="Menu"></a>            
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Menu:")) ?>">Menu</a>              
              </li>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Menu:add")) ?>">Přidat položku</a>              
              </li>            
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Page:default")) ?>">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/novinky.png" height="50" width="50" alt="Novinky"></a>              
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Page:")) ?>">Články</a>              
              </li>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Page:add")) ?>">Přidat článek</a>              
              </li>            
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Foto:")) ?>">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/image_jpeg2000.png" height="50" width="50" alt="Fotografie">            </a>              
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Foto:")) ?>">Fotogalerie</a>              
              </li>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Foto:new")) ?>">Nová galerie</a>              
              </li>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Foto:add")) ?>">Přidat foto</a>              
              </li>            
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Docs:")) ?>">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/kfm.png" height="50" width="50" alt="Dokumenty">  </a>              
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Docs:")) ?>">Dokumenty</a>              
              </li>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Docs:add")) ?>">Přidat dokument</a>              
              </li>            
            </ul>            
            <div class="clear">            
            </div>            
            </li>            
            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("User:")) ?>">              
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/preferences_desktop_user.png" height="50" width="50" alt="Uživatele">            </a>              
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("User:")) ?>">Uživatele</a>              
              </li>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($control->link("User:add")) ?>">Přidat uživatele</a>              
              </li>            
            </ul>            
            <div class="clear">            
            </div>            
            </li>                     <?php if (isset($user)): ?>

            <li>            
            <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Default:logout")) ?>" title="Odhlásit [<?php  echo implode(', ', $user->roles) ?>]">               
              <img src="<?php echo TemplateHelpers::escapeHtml($baseUri) ?>img/admin/user.png" height="50" width="50" alt="Odhlásit <?php echo TemplateHelpers::escapeHtml($user->name) ?>"></a>            
            <ul>              
              <li>              
              <a href="<?php echo TemplateHelpers::escapeHtml($presenter->link("Default:")) ?>">Odhlásit se</a>              
              </li>              
            </ul>            
            </li>         <?php endif ?>

          </ul>        
        </div>                      
      </div>
      <!-- #menu -->     
      <div id="dotted">   <h1><?php echo TemplateHelpers::escapeHtml($template->stripTags($title)) ?></h1>    <?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?>

        <div class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?>

        </div><?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>     <?php LatteMacros::callBlock($_cb, 'content', $template->getParams()) ?>

      </div>
      <!-- #dotted -->  
      <div id="paticka">    (c) 2010 David Pavelka. Redakční systém pro správu obsahu Upravuj.   
      </div>
      <!-- #footer -->
    </div>
    <!-- #container -->
  </body>
</html><?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
