<?php
    require_once "Library/basicOutput.php";

    $list = array("sdf", "sfdfs", "hey");

    printHtmlHead();
    printTitle( "Test page" );
    printList( null, false, $list );
    printHtmlTail()
?>