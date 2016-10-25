<?php
/**
 * Created by PhpStorm.
 * User: johannesj
 * Date: 17.10.2016
 * Time: 13:11
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities;


class MediaFileEntity
{

 private $mime ;
    private$height ;
private $width ;
 private$thumbHeight;
private $thumbWidth ;
private$bigHeight ;
private $bigWidth ;
 private   $url;
private $thumbUrl;
 private$bigUrl ;
private $titleTag ;
private $altTag;


    public function __construct( array $userRow )
    {

        $this->mime = $userRow['mime'];
        $this->height = $userRow['height'];
        $this->width = $userRow['width'];
        $this->thumbHeight= $userRow['thumbHeight'];
        $this->thumbWidth = $userRow['thumbWidth'];
        $this->bigHeight = $userRow['bigHeight'];
        $this->thumbUrl= $userRow['thumbUrl'];
        $this->bigWidth= $userRow['bigWidth'];
        $this->url= $userRow['url'];
        $this->bigUrl= $userRow['bigUrl'];
        $this->titleTag = $userRow['titleTag'];
        $this->altTag = $userRow['altTag'];
    }










}