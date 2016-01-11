<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dawin2015.' . $_EXTKEY,
	'Pi1',
	array(
		'Post' => 'list, show',
		'Category' => 'list, show',
		'Comment' => 'create',
		'Tag' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Comment' => 'create',
		
	)
);
