<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 17.10.2016
 * Time: 14:00
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Interfaces;


interface CampaignInterface
{
    /**
     * CampaignInterface constructor.
     * @param string $picture
     * @param string $pictureUrl
     * @param string $headline
     * @param string $content
     * @param string $linkText
     * @param int $id
     */
    public function __construct( string $picture, string $pictureUrl, string $headline, string $content, string $linkText, int $id );

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
    public function getId() : int;
}