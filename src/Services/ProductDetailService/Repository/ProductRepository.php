<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 19.09.2016
 * Time: 14:23
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\NoResultException;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\NotLoggedInException;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\Components;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\ProductEntity;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\MediaFileEntity;

class ProductRepository
{
	/** @var Mysql */
	private $db;
	/**
	 * @var int
	 */
	private $productId;

	public function __construct( $productId )
	{
		$db = new MySql();
		$this->db = $db->getInstance();
		$this->productId = $productId;
	}

	/**
	 * @return ProductEntity
	 * @throws NoResultException
	 */
	public function getProductEntity() : ProductEntity
	{

		$sql = "SELECT  
					pr1.name,
					pr1.internalName,
					pr1.parentId,
					pr1.productGroup,
					pr1.GrossPrice,
					pr1.vat,
					pr1.type,
					de1.shortDescription,
					de1.longDescription
				FROM 
					Products AS pr1
				LEFT JOIN
					Descriptions AS de1 ON (de1.fk_products = pr1.id)
				WHERE 
					pr1.id = " . $this->productId .
			" LIMIT 1;";
		$result = $this->db->query( $sql );

		if ( empty( $result ) ) {
			throw new NoResultException();
		}

		$resultItem = $result->fetch_assoc();

		return new ProductEntity(
			$resultItem[ 'name' ],
			$resultItem[ 'internalName' ],
			$resultItem[ 'parentId' ],
			$resultItem[ 'productGroup' ],
			$resultItem[ 'grossPrice' ],
			$resultItem[ 'vat' ],
			$resultItem[ 'type' ],
			$resultItem[ 'shortDescription' ],
			$resultItem[ 'longDescription' ]
		);
	}

	private function getMediaFileResult( $id=null )
	{
		$sql = "SELECT  id,
						mime,
						height,
						width,
						thumbHeight,
						thumbWidth, 
						bigHeight, 
						bigWidth, 
						url, 
						thumbUrl, 
						bigUrl, 
						titleTag, 
						altTag 
					FROM 
						MediaFiles 
					WHERE  id = "
			. ( is_null( $id ) ? $this->productId : $id ) . ";";

		$result = $this->db->query( $sql );

		if ( empty( $result ) ) {
			throw new NoResultException();
		}

		return $result;
	}

	/**
	 * @param null $id
	 * @return MediaFileEntity
	 * @throws NoResultException
	 */
	public function getMediaFile( $id=null ) : MediaFileEntity
	{
		$result = $this->getMediaFileResult( $id );
		$resultItem = $result->fetch_assoc();

		return new MediaFileEntity(
			$resultItem[ "id" ],
			$resultItem[ "mime" ],
			$resultItem[ "height" ],
			$resultItem[ "width" ],
			$resultItem[ "thumbHeight" ],
			$resultItem[ "thumbWidth" ],
			$resultItem[ "bigHeight" ],
			$resultItem[ "bigWidth" ],
			$resultItem[ "url" ],
			$resultItem[ "thumbUrl" ],
			$resultItem[ "bigUrl" ],
			$resultItem[ "titleTag" ],
			$resultItem[ "altTag" ]

		);
	}

	/**
	 * RC 1
	 *
	 * @return \Generator
	 * @throws NoResultException
	 */
	public function getMediaFiles( $id = null ) : \Generator
	{
		$result = $this->getMediaFileResult( $id );

		try {
			while ( false !== ( $resultItem = $result->fetch_assoc() ) ) {
				yield new MediaFileEntity(
					$resultItem[ "id" ],
					$resultItem[ "mime" ],
					$resultItem[ "height" ],
					$resultItem[ "width" ],
					$resultItem[ "thumbHeight" ],
					$resultItem[ "thumbWidth" ],
					$resultItem[ "bigHeight" ],
					$resultItem[ "bigWidth" ],
					$resultItem[ "url" ],
					$resultItem[ "thumbUrl" ],
					$resultItem[ "bigUrl" ],
					$resultItem[ "titleTag" ],
					$resultItem[ "altTag" ]

				);
			}
		} finally {
			$result->free_result();
		}
	}


	public function getComponentsEntity() : ComponentsEntity
	{

		$sql = "SELECT  
					Comp.componentId,
					Comp.name,
					Comp.componentGroup,
					Comp.fk_MediaFiles,
					ptc. ordering
				FROM 
					Components AS Comp
				LEFT JOIN
					ProductsToComponents AS ptc ON (ptc.componentId = comp.componentId)
				WHERE 
					ptc.productId = " . $this->productId .";";
		$result = $this->db->query( $sql );

		if ( empty( $result ) ) {
			throw new NoResultException();
		}

		$resultItem = $result->fetch_assoc();

		try {
			foreach ( array_keys( $resultItem ) as $key ) {
				yield new ComponentsEntity(
					$resultItem[ 'componentId'],
					$resultItem[ 'name'],
					$resultItem[ 'componentGroup' ],
					$resultItem[ 'fk_MediaFiles' ],
					$resultItem[ 'ordering'	]
				);
			}
		} finally {
			$result->free_result();
		}
	
	}


	public function AddonsEntity() : ComponentsEntity
	{
		$sql = "SELECT  name,parentId,productGroup,GrossPrice,type FROM Products WHERE id = "
			. $this->productId . ";";
		$result = $this->db->query( $sql );
		$product = $result->fetch_assoc();
		if ( empty( $product ) ) {
			throw new NotLoggedInException( 'Login failed' );
		}
		return new  AddonsEntity( $product );
	}


}