<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$base_url = "/ic";
?>
<html>
<head>
<title>iConquer</title>
<link rel="stylesheet" href="<?= $base_url; ?>/css/style.css" type="text/css" media="screen" title="" />
<script src="<?= $base_url; ?>/js/jquery-1.4.2.min.js"></script>
<script src="<?= $base_url; ?>/js/jquery.layout.js"></script>
<script src="<?= $base_url; ?>/js/jquery.blockUI.js"></script>
<script>
var map_tiles_x = <?= $map_tiles_x; ?>;
var map_tiles_y = <?= $map_tiles_y; ?>;
var map_width = <?= $map_width; ?>;
var map_height = <?= $map_height; ?>;
var game_id = <?= $game->id ; ?>;
var player_id = <?= $user->get_profile->id ; ?>;
var objtypes_raw = <?= $objtypes ; ?>;
var players_raw = <?= $players ; ?>;
var teams_raw = <?= $teams ; ?>;
var energy = 0;
var money = 0;
var layer_width = 100;
var layer_height = 100;
</script>
<script src="<?= $base_url; ?>/js/draw.js"></script>
<script src="<?= $base_url; ?>/js/audio.js"></script>
<script src="<?= $base_url; ?>/js/obj.js"></script>
<script src="<?= $base_url; ?>/js/all.js"></script>
<script>
var grid = {};
var objects = {};
var objs = {};
var anims = new Array();
</script>
</head>
<body>

<div class="ui-layout-center">
<canvas id="layer0">
</canvas>
</div>

<div class="ui-layout-north">
	<img class="left" src="<?= $base_url; ?>/graphics/logo.png"/>
	<div id="resources">
	<div id="energy_bar">
		<div class="energy_bar_inner"></div>
		<div class="energy_bar_label"></div>
	</div>
	<div id="money_bar">
		<div class="money_bar_inner"></div>
		<div class="money_bar_label"></div>
	</div>
	</div>
</div>

<div class="ui-layout-south">

<div id="gameinfo">
<h2>Game Info</h2>
Player: <?= $user ; ?> (<a href="/game">menu</a> - <a href="<?= $auth_logout; ?>">logout</a>)
</div>

<div id="status">
<h2>Actions</h2>
<div id="actions">
</div>
</div>

<div id="chat">
<? if( $user->is_admin ): ?>
	<h2>Log</h2>
	<div id="log">
	</div>
<? endif; ?>
</div>
</div>

<div class="ui-layout-west">
<h2>Map</h2>
<div id="map">
<canvas id="cmap">
</canvas>
</div>

<div id="global_actions">
<a href="javascript:setAction('repair');"><div class="global_action global_action_repair"></div></a>
<a href="javascript:setAction('sell');"><div class="global_action global_action_sell"></div></a>
</div>
<div class="break"></div>

<div id="properties">
</div>
<div class="break"></div>

<? if( $user->is_admin ): ?>
	<h2>Debug</h2>
	<div id="debug">
	<h2>Current Animations</h2>
	<div id="animations">
	</div>
	<div class="break"></div>

	<h2>Selection</h2>
	<div id="sel"></div>
	<div class="break"></div>

	</div>
<? endif; ?>

</body>
</html>
