<?
define("DEMO", "Y");

$arItems = array(
	array(
		'name' => 'Example 1',
	),
	array(
		'name' => 'Example 2',
	),
);

?>
<ul class="example-list">
	<? foreach ($arItems as $arItem) : ?>
		<li class="example-list__item"><? echo $arItem['name']; ?></li>
	<? endforeach ?>
</ul>