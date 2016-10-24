<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 13:53
	 */

	namespace Class152\PizzaMamamia\Services\ProductDetailService\Library;

	use Class152\PizzaMamamia\Interfaces\MediaFileInterface;
	use Class152\PizzaMamamia\Interfaces\Product\ProductAdditivesListInterface;
	use Class152\PizzaMamamia\Interfaces\Product\ProductComponentsListInterface;
	use Class152\PizzaMamamia\Interfaces\Product\ProductDetailInformationsInterface;
	use Class152\PizzaMamamia\Interfaces\Product\ProductVariantsIteratorInterface;
	use Class152\PizzaMamamia\Library\Price;


	class Product implements ProductDetailInformationsInterface
	{

						
		
		
		
		/**
		 * @var MediaFileInterface
		 */
		private $mediaInformation;
		
		private $type;

		
		public function __construct( )
		{

			// ToDo: too much to do
//			$this->mediaInformation = $mediaFile;
//			
////			$sql= new ProductRepository();
////			$productentity=$sql->getProductById(  $productId );
////			
//			$this->name = $productentity->getName();
//			$this->parentId = $productentity->getParentId();
//			$this->productGroup = $productentity->getProductGroup();
//			
//			$this->type = $productentity->getType();

		}

		
		
		public function getImages() : \IteratorIterator
		{
			// TODO: Implement getImages() method.
		}


		/**
		 * @return string
		 */
		public function getId()
		{
			// TODO: Implement getId() method.
		}

		/**
		 * @return string
		 */
		public function getName()
		{
			// TODO: Implement getName() method.
		}

		/**
		 * @return MediaFileInterface
		 */
		public function getThumb()
		{
			// TODO: Implement getThumb() method.
		}

		/**
		 * text type depends of current scope
		 *
		 * @return string
		 */
		public function getDescription()
		{
			// TODO: Implement getDescription() method.
		}

		/**
		 * @return bool
		 */
		public function hasDescription()
		{
			// TODO: Implement hasDescription() method.
		}

		/**
		 * @return bool
		 */
		public function isSingle()
		{
			// TODO: Implement isSingle() method.
		}

		/**
		 * @return bool
		 */
		public function hasVariants()
		{
			// TODO: Implement hasVariants() method.
		}

		/**
		 * @return ProductVariantsIteratorInterface
		 */
		public function getVariants()
		{
			// TODO: Implement getVariants() method.
		}

		/**
		 * @return bool
		 */
		public function hasImages()
		{
			// TODO: Implement hasImages() method.
		}

		/**
		 * @return ProductComponentsListInterface
		 */
		public function getComponents() : ProductComponentsListInterface
		{
			// TODO: Implement getComponents() method.
		}

		/**
		 * @return bool
		 */
		public function hasComponents() : bool
		{
			// TODO: Implement hasComponents() method.
		}

		/**
		 * @return ProductAdditivesListInterface
		 */
		public function getAdditives() : ProductAdditivesListInterface
		{
			// TODO: Implement getAdditives() method.
		}

		/**
		 * @return bool
		 */
		public function hasAdditives() : bool
		{
			// TODO: Implement hasAdditives() method.
		}

		/**
		 * @return ProductAdditivesListInterface
		 */
		public function getAllergics() : ProductAdditivesListInterface
		{
			// TODO: Implement getAllergics() method.
		}

		/**
		 * @return bool
		 */
		public function hasAllergics() : bool
		{
			// TODO: Implement hasAllergics() method.
		}
	}