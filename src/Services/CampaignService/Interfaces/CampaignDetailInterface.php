<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 15:25
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Interfaces;


interface CampaignDetailInterface
{
    /**
     * CampaignDetailInterface constructor.
     * @param string $picture
     * @param string $pictureUrl
     * @param string $headline
     * @param string $content
     * @param string $linkText
     * @param int $position
     */
    public function __construct( string $picture, string $pictureUrl, string $headline, string $content, string $linkText, int $position );

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
    public function getLinkText() : string;

    /**
     * @return int
     */
    public function getPosition() : int;
}