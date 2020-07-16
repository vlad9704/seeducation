<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
// ---------------------------------------------------------------------------------------------------- iLaB
$arComponentDescription = array(
	'NAME'			=> GetMessage('I_NAME'),			// название компонента
	'DESCRIPTION'	=> GetMessage('I_DESC'),			// краткое описание компонента
	'ICON'			=> '/images/ilab.gif',				// пиктограмме
	'PATH'			=> array(							// расположение компонента в виртуальном дереве(Категория, папка, элемент)
		'ID'		=> 'ilab',							// ID код ветки дерева (должен быть уникальным)
		'NAME'		=> GetMessage('I_NAME_TREE'),		// название ветки дерева
		'CHILD'		=> array(							// дочерняя или подчиненная ветка
			'ID'	=> 'catalog.menu',					// Папка
			'NAME'	=> GetMessage('I_NAME_FOLD'),		// Элемент
		),
	),
	'CACHE_PATH'	=> 'Y'								// отображается кнопка очистки кэша компонента в режиме редактирования сайта
);
// ---------------------------------------------------------------------------------------------------- iLaB?>