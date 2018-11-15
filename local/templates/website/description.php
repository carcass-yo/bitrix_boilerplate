<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__);

$arTemplate = [
	'NAME' => Loc::getMessage('LEARNING_TEMPLATE_DESCRIPTION_NAME'),
	'DESCRIPTION' => Loc::getMessage('LEARNING_TEMPLATE_DESCRIPTION_DESC'),
];

?>
