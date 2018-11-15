<?
// TODO: Design cool 404 error page
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
CHTTP::SetStatus('404 Not Found');
define('ERROR_404', 'Y');
?>
<h1>Page Not Found</h1>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php'; ?>
