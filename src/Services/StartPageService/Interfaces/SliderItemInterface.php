<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 14.09.2016
 * Time: 09:39
 */
namespace Class152\PizzaMamamia\Services\StartPageService\Interfaces;

interface SliderItemInterface
{
    /**
     * SliderItem constructor.
     * @param string $picture
     * @param string $pictureUrl
     * @param string $headline
     * @param string $content
     * @param string $linkText
     */
    public function __construct(string $picture, string $pictureUrl, string $headline, string $content, string $linkText);

    /**
     * @return string
     */
    public function getPicture() : string ;

    /**
     * @return string
     */
    public function getPictureUrl() : string;

    /**
     * @return string
     */
    public function getHeadline()  : string;

    /**
     * @return string
     */
    public function getContent() : string;

    /**
     * @return string
     */
    public function getLinkText()  : string;
}