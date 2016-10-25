<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 24.10.2016
	 * Time: 09:20
	 */

	namespace Class152\PizzaMamamia\Interfaces\Campaign;


	interface CampaignListFilterInterface
	{
		/**
		 * shows the list configured for a specific customerGroupId
		 *
		 * @param int $customerGroupId
		 */
		public function filterByCustomerGroupId( int $customerGroupId );

		/**
		 * shows the list with campaigns which are not active
		 * (for example with lunch campaigns at the evening)
		 */
		public function showWithInactiveCampagns();

		/**
		 * shows the campaigns which are touched by this products
		 *
		 * @param array $productIds
		 */
		public function filterByThisProductIds( array $productIds );

		/**
		 * lunch lists have to show at the beginning of the lists
		 */
		public function showDayTimeCampaignsFirst();

		/**
		 * shows the lunch list without other campaigns
		 */
		public function showOnlyDayTimeCampaigns();

		/**
		 * show only the campaings which comming in the feature
		 *
		 * @param \DateTimeImmutable $startDate
		 */
		public function showCommingNextCampaigns( \DateTimeImmutable $startDate );

	}