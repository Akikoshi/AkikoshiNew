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
		public function hasBanner() : bool;

		/**
		 * @return MediaFileInterface
		 */
		public function getBanner() : MediaFileInterface;

		/**
		 * @return bool
		 */
		public function isActive() : bool;

		/**
		 * @param \DateTimeImmutable $date
		 *
		 * @return bool
		 */
		public function isActiveAtDate( \DateTimeImmutable $date ) : bool;

		/**
		 * @return bool
		 */
		public function isReducedByPercent() : bool;

		/**
		 * @return bool
		 */
		public function isReducedToFixPrice() : bool;

		/**
		 * percent|fixprice
		 *
		 * @return mixed
		 */
		public function getReduceRule();

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
		 * @return bool
		 */
		public function hasDayTimeRule() : bool;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getDayTimeStart() : \DateTimeImmutable;

		/**
		 * @return \DateTimeImmutable
		 */
		public function getDayTimeEnd() : \DateTimeImmutable;

		/**
		 * @return CampaignItemListInterface
		 */
		public function getItems() : CampaignItemListInterface;
	}