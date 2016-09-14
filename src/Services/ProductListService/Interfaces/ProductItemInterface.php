<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 13.09.2016
 * Time: 13:58
 */

namespace Class152\PizzaMamamia\Services\ProductService\Interfaces;


interface ProductItemInterface
{
    /** @param  string          $name
     *  @param  string           $description
     *  @param  string           $pictureUrl
     *  @param  string           $detailUrl
     */
    
    public function __construct(string $name, string $description, string $pictureUrl, string $detailUrl);

    /** @return string */     
    public function getName() : string;
    
    /** @return string */
    public function getDescription() : string;
    
    /** @return string */
    public function getPictureUrl() : string;
    
    /** @return string */
    public function getDetailUrl() : string;
    
}