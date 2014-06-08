<?php
	include "Library/basicOutput.php";

	echo printParagraph("Testing...");
	echo printHeading(4, "Hoi");

	$list = array("this", "is", "a", "list");
	echo printList( null, false, $list );

	printWebpage( array(
		printTitle( "Test page" ),
		printList( null, false, $list )
	));
?>