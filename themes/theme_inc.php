<?php
// $Id: theme_inc.php,v 1.8 2009/10/11 16:30:14 bbannon Exp $
// Displays a screenshot if called directly
// and a file exists that matches this script name.
// Include  this file in all themes.
if ( empty ( $PHP_SELF ) && ! empty ( $_SERVER ) && !
    empty ( $_SERVER['PHP_SELF'] ) )
  $PHP_SELF = $_SERVER['PHP_SELF'];

$no_preview = 'NO PREVIEW AVAILABLE';
if ( function_exists ( 'translate' ) )
  $no_preview = translate ( 'NO PREVIEW AVAILABLE' );

if ( ! empty ( $PHP_SELF ) && preg_match ( '/\/themes\//', $PHP_SELF ) ) {
  $filename = basename ( $PHP_SELF, '.php' ) . '.gif';
  echo <<<EOT
<?xml version="1.0" encoding="iso-8859-1"\?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml xml:lang="fr" lang="fr">
  <head></head>
  <body>
EOT;
  echo ( file_exists ( $filename )
    ? '<img src="' . $filename . '" />'
    : '<h2>' . $no_preview. '</h2>' ) . '
  </body>
</html>';
}

?>
