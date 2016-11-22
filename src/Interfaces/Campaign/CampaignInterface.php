<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 24.10.2016
	 * Time: 08:45
	 */

	namespace Class152\PizzaMamamia\Interfaces\Campaign;


	use Class152\PizzaMamamia\Interfaces\MediaFileInterface;

	interface CampaignInterface
	{
		/**
		 * @return string
		 */
		public function getId() : string;

		/**
		 * @return string
		 */
		public function getName() : string;

		/**
		 * @return string
		 */
		public function getDescription() : string;

		/**
		 * @return bool
		 */
		public function getHasBanner() : bool;

		/**
		 * @return string
		 */
		public function getBanner() : string;

		/**
		 * @return bool
		 */
		public function getIsActive() : bool;

		/**
		 * @return bool
		 */
		public function getHasDayTimeRule() : bool;

		/**
		 * @return bool
		 */
		public function getReduceType() : bool;

		/**
		 * @return float
		 */
		public function getReduceValue() : float;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getStartDate() : \DateTimeImmutable;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getEndDate() : \DateTimeImmutable;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getDayTimeStart() : \DateTimeImmutable;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getDayTimeEnd() : \DateTimeImmutable;

		/**
		 * @return string
		 */
		public function getUrl() : string;

		/**
		 * @return CampaignItemListInterface
		 */
		public function getItems() : CampaignItemListInterface;
	}