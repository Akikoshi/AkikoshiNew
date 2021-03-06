<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 26.09.2016
 * Time: 11:27
 */
namespace Class152\PizzaMamamia\Interfaces;

interface MediaFileInterface
{
    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @return string
     */
    public function getMime() : string;

    /**
     * @return int
     */
    public function getHeight() : int;

    /**
     * @return int
     */
    public function getWidth() : int;

    /**
     * @return int
     */
    public function getThumbHeight() : int;

    /**
     * @return int
     */
    public function getThumbWidth() : int;

    /**
     * @return int
     */
    public function getBigHeight() : int;

    /**
     * @return int
     */
    public function getBigWidth() : int;

    /**
     * @return string
     */
    public function getUrl() : string;

    /**
     * @return string
     */
    public function getThumbUrl() : string;

    /**
     * @return string
     */
    public function getBigUrl() : string;

    /**
     * @return string
     */
    public function getTitleTag() : string;

    /**
     * @return string
     */
    public function getAltTag() : string;
}