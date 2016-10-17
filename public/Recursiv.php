<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 19.09.2016
 * Time: 20:46
 */
// Testdaten da keine Datenbank vorhanden
$menu = array(
    array( 'id' => 1, 'parentId' => 0, 'name' => 'home' ),
    array( 'id' => 2, 'parentId' => 1, 'name' => 'Aktionen' ),
    array( 'id' => 3, 'parentId' => 1, 'name' => 'Pizza' ),
    array( 'id' => 4, 'parentId' => 1, 'name' => 'Nudeln' ),
    array( 'id' => 5, 'parentId' => 1, 'name' => 'Salat' ),
    array( 'id' => 6, 'parentId' => 1, 'name' => 'Drinks' ),
    array( 'id' => 7, 'parentId' => 1, 'name' => 'Kids' ),
    array( 'id' => 8, 'parentId' => 1, 'name' => 'Desserts' ),

    array( 'id' => 9, 'parentId' => 2, 'name' => 'Pizza' ),
    array( 'id' => 10, 'parentId' => 2, 'name' => 'Nudeln' ),

    array( 'id' => 11, 'parentId' => 9, 'name' => 'Saison' ),
    array( 'id' => 12, 'parentId' => 9, 'name' => 'Geschäftskunden' ),
    array( 'id' => 13, 'parentId' => 10, 'name' => 'Saison' ),
    array( 'id' => 14, 'parentId' => 10, 'name' => 'Geschäftskunden' ),
    array( 'id' => 15, 'parentId' => 10, 'name' => 'Mittagsmenue' ),

    array( 'id' => 16, 'parentId' => 3, 'name' => 'Alles ansehen' ),
    array( 'id' => 17, 'parentId' => 3, 'name' => 'Klassiker' ),
    array( 'id' => 18, 'parentId' => 3, 'name' => 'Vegetarisch' ),

    array( 'id' => 19, 'parentId' => 4, 'name' => 'Alles ansehen' ),
    array( 'id' => 20, 'parentId' => 4, 'name' => 'Klassiker' ),
    array( 'id' => 21, 'parentId' => 4, 'name' => 'Vegetarisch' ),

    array( 'id' => 22, 'parentId' => 5, 'name' => 'Alles ansehen' ),
    array( 'id' => 23, 'parentId' => 5, 'name' => 'Laktosefrei' ),
    array( 'id' => 24, 'parentId' => 5, 'name' => 'Vegetarisch' ),

    array( 'id' => 25, 'parentId' => 6, 'name' => 'Alkoholfrei' ),
    array( 'id' => 26, 'parentId' => 6, 'name' => 'Alkoholisch' ),

    array( 'id' => 27, 'parentId' => 28, 'name' => 'Saft' ),
    array( 'id' => 28, 'parentId' => 25, 'name' => 'Koffeinfrei' ),
    array( 'id' => 29, 'parentId' => 26, 'name' => 'Koffeinhaltig' ),

    array( 'id' => 30, 'parentId' => 26, 'name' => 'Bier' ),
    array( 'id' => 31, 'parentId' => 26, 'name' => 'Wein' ),
    array( 'id' => 32, 'parentId' => 26, 'name' => 'Sekt' ),

    array( 'id' => 33, 'parentId' => 7, 'name' => 'Alle' ),
    array( 'id' => 34, 'parentId' => 7, 'name' => 'Klassic' ),
    array( 'id' => 35, 'parentId' => 7, 'name' => 'Vegetarisch' ),

    array( 'id' => 36, 'parentId' => 8, 'name' => 'Warm' ),
    array( 'id' => 37, 'parentId' => 8, 'name' => 'Kalt' ),
    array( 'id' => 38, 'parentId' => 8, 'name' => 'Süß' ),
    array( 'id' => 39, 'parentId' => 8, 'name' => 'Herzhaft' ),
);

// Recursive Function Testdaten von oben zu ersezen durch einen Array aus datenbank
    function mainMenu($arr,$vater){
        $ausgabe = '';

        foreach ($arr as $seite){
            if($seite['parentId'] == $vater){
                $ausgabe .= '<li>';
                $ausgabe .= $seite['name'];
                $ausgabe .= mainMenu($arr, $seite['id']);
                $ausgabe .= '</li>';
            }
        }
        if($ausgabe) {
            $ausgabe = '<ul>'.$ausgabe.'</ul>';
        }
        return $ausgabe;
    }

    echo mainMenu($menu, 1);