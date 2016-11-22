<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 24.10.2016
 * Time: 11:32
 */

namespace Class152\PizzaMamamia\Services\CampaignService\Library;

use Class152\PizzaMamamia\Services\CampaignService\Repositories\CampaignRepository;

class CampaignListFactory
{
    /**
     * @var CampaignList
     */
    private $campaignList;

    /**
     * CampaignListFactory constructor.
     */
    public function __construct()
    {
        $repository = new CampaignRepository();
        $campaigns = $repository->getCampaigns();

        foreach (array_keys($campaigns) as $key)
        {
            $campaigns[$key] = new CampaignItem(
                $campaigns[$key]->getId(),
                $campaigns[$key]->getName(),
                $campaigns[$key]->getDescription(),
                $this->convertBool( $campaigns[$key]->getHasBanner() ),
                $campaigns[$key]->getBanner(),
                $this->convertBool( $campaigns[$key]->getIsActive() ),
                $this->convertBool( $campaigns[$key]->getHasDayTimeRule() ),
                $campaigns[$key]->getReduceType(),
                $this->convertFloat( $campaigns[$key]->getReduceValue() ),
                new \DateTimeImmutable( $campaigns[$key]->getStartDate() ),
                new \DateTimeImmutable( $campaigns[$key]->getEndDate() ),
                new \DateTimeImmutable( $campaigns[$key]->getDayTimeStart() ),
                new \DateTimeImmutable( $campaigns[$key]->getDayTimeEnd() ),
                $campaigns[$key]->getUrl()
//                $campaigns[$key]['id'],
//                $campaigns[$key]['name'],
//                $campaigns[$key]['description'],
//                $campaigns[$key]['hasBanner'],
//                $campaigns[$key]['banner'],
//                $campaigns[$key]['isActive'],
//                $campaigns[$key]['hasDayTimeRule'],
//                $campaigns[$key]['reduceType'],
//                $campaigns[$key]['reduceValue'],
//                $campaigns[$key]['startDate'],
//                $campaigns[$key]['endDate'],
//                $campaigns[$key]['dayTimeStart'],
//                $campaigns[$key]['dayTimeEnd'],
//                $campaigns[$key]['url']
            );
        }
        $this->campaignList = new CampaignList($campaigns);
        //var_dump($this->campaignList);
        //die();
    }

    /**
     * @param string $value
     * @return bool
     */
    private function convertBool( string $value ) : bool
    {
        if( $value == 'Y' || $value == 'percent' ) return true;
        return false;
    }

    /**
     * @param string $value
     * @return float
     */
    private function convertFloat( string $value ) : float
    {
        return floatval($value);
    }

    /**
     * @return CampaignList
     */
    public function getCampaignList() : CampaignList
    {
        return $this->campaignList;
    }
}