<?php
    /**
     * Basic output functions, html5 compatible.
     * Intended for use as helper functions to higher level output library.
     * Strings are returned rather than echoed for embedding purposes.
     *
     * @author Eamonn Clancy
     */

    /**
     * @param string $text Website paragraph text.
     * 
     * @return string html5 compatable paragraph tag.
     */
    function printParagraph( $text ) {
        return "<p>{$text}</p>";
    }

    /**
     * @param int $headingLevel Range 1-6 for level of heading.
     * @param string $text Heading text.
     */
    function printHeading( $headingLevel, $text ) {
        return "<h{$headingLevel}>{$text}</h{$headingLevel}>";
    }

    function printSection( $id, $text ) {
        return "<section id=\"{$id}\">{$text}</section>";
    }

    function printArticle( $id, $text ) {
        return "<article id=\"{$id}\">{$text}</article>";
    }

    function printAside( $id, $text ) {
        return "<aside id=\"{$id}\">{$text}</aside>";
    }

    function printLink( $href, $text ) {
        return "<a href=\"{$href}\">$text</a>";
    }

    function printImage( $id, $src, $alt ) {
        return "<img id=\"{$id}\" src=\"{$src}\" alt=\"{$alt}\" />";
    }

    function printScript( $type, $src ) {
        return "<script type=\"\" src=\"\"></script>";
    }

    function printList( $id, $ordered, &$listItems ) {
        $list = "";
        $closeList;
        if( $ordered ) {
            $list .= "<ol";
            $closeList = "</ol>";
        } else {
            $list .= "<ul";
            $closeList = "</ul>";
        }

        if($id != null) {
            $list .= " id=\"{$id}\"";
        }
        $list .= ">";
        foreach( $listItems as $item ) {
            $list .= "<li>{$item}</li>";
        }
        return $list . $closeList;
    }

    function printNavigation( $id, &$listItems ) {
        $nav = "<nav>";
        $closeNav = "</nav>";
        $nav .= printList("nav", false, $listItems);
        return $nav . $closeNav;
    }

    function printCssStylesheet( $stylesheet ) {
        return "<link rel=\"stylesheet\" href=\"Style\{$stylesheet}\" />";
    }

    function printCssStylesheets( &$stylesheets ) {
        for( $i = 0; $i < count($stylesheets); $i++ ) {
            printCssStylesheet( $stylesheets[$i] );
        }
    }

    function printTitle( $title ) {
        return "<title>{$title}</title>";
    }

    function printWebpage( $content ) {
        foreach( $content as $html ) {
            echo $html;
        }
    }

?>