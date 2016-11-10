<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 24.10.2016
	 * Time: 09:12
	 */

	namespace Class152\PizzaMamamia\Interfaces\Campaign;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;

    interface CampaignListInterface extends AbstractIteratorInterface
	{
        /**
         * @return CampaignInterface
         */
		public function current() : CampaignInterface;

        /**
         * @param null $key
         * @return CampaignInterface
         */
        public function getElement($key = null) : CampaignInterface;
    }