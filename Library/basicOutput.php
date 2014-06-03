<?php
    /**
     * Basic output functions, html5 compatible.
     * Intended for use as helper functions to higher level output library.
     *
     * @author Eamonn Clancy
     */

    /**
     * @param string $text Website paragraph text.
     */
    function printParagraph( $text ) {
        echo "<p>{$text}</p>";
    }

    /**
     * @param int $headingLevel Range 1-6 for level of heading.
     * @param string $text Heading text.
     */
    function printHeading( $headingLevel, $text ) {
        echo "<h{$headingLevel}>{$text}</h{$headingLevel}>";
    }

    function printSection( $text ) {
        echo "<section>{$text}</section>";
    }
?>