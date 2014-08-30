<?php
define('SECURE_CONSTANT_173945d5ecd6224993ffc110dfb30fa0',1);
date_default_timezone_set('Pacific/Honolulu');
/* ------------------------------------------------------------------------
 * Start Configuration of Google Spreadsheet custom API
 * ------------------------------------------------------------------------
 */
// Where's Zend's Loader.php
define('SGS_ZEND_LOADER', 'Zend/Loader.php');
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . "/ZendGdata-1.12.3/library");
require_once 'credentials.php';
require_once '../model/dates.php';
// Lifted from the URL of Google Doc I want to work with
if (isset($_GET['sskey'])) {define('SGS_SHEET_ID', $_GET['sskey']);};
if (isset($_GET['sheetname'])) {
  $sheetname = $_GET['sheetname'];
} else {
  $sheetname = 'TeamSheetMap';
}

// Include the API
require_once('sgs.php');

/* ------------------------------------------------------------------------
 * End Configuration
 * ------------------------------------------------------------------------
 */

echo json_encode(sgs_list($sheetname));

?>
