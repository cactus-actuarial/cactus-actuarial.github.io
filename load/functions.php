<?php

require_once('load.php');

function navbar($cat) {
	
	$start = '';
	$tools = '';
	$contact = '';
	
	if ($cat == "start") {
		$start = 'class="active"';
	}
	
	
	if ($cat == "tools") {
		$tools = 'class="active"';
	}

	if ($cat == "contact") {
		$contact = 'class="active"';
	}
	
	$nav = '<div class="navigation_bar">
			<ul>
				<li><a ' . $start . 'href="index.php">start</a></li>
				<li><a ' . $tools . 'href="tools.php">tools</a></li>
				<li><a ' . $contact	. 'href="contact.php">contact</a></li>
			</ul>
			</div>
		';
	
	return $nav;
}

?>