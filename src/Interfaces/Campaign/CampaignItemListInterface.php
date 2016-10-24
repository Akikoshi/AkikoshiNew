<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 24.10.2016
	 * Time: 08:51
	 */

	namespace Class152\PizzaMamamia\Interfaces\Campaign;


	use Class152\PizzaMamamia\Interfaces\AbstractIteratorInterface;
	use Class152\PizzaMamamia\Interfaces\Product\ProductBasicInformationsInterface;

	interface CampaignItemListInterface extends AbstractIteratorInterface
	{
		public function filterByRandom( int $amount );

		public function filterByProductGroupId( int $productGroupId );

		public function sortByPrice();

		public function sortByProductGroup();

		public function isThisProductIdInThisCampaign( int $productId );

		/**
		 * @return ProductBasicInformationsInterface
		 */
		public function current() : ProductBasicInformationsInterface;
	}