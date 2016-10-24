<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 19.09.2016
 * Time: 14:23
 */

namespace Class152\PizzaMamamia\Services\ProductDetailService\Repository;


use Class152\PizzaMamamia\Database\MySql;
//use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\NotLoggedInException;
use Class152\PizzaMamamia\Services\ProductDetailService\Exceptions\NotLoggedInException;
use Class152\PizzaMamamia\Services\ProductDetailService\Library\MediaFile;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\ProductEntity;
use Class152\PizzaMamamia\Services\ProductDetailService\Repository\Entities\MediaFileEntity;

class ProductRepository
{
	/** @var Mysql */
	private $db;
	private $productId;

	public function __construct( $productId )
	{
		$db = new MySql();
		$this->db = $db->getInstance();
		$this->productId = productId;
	}

	/**
	 * @param string $userName
	 * @param string $password
	 *
	 * @return \Class152\PizzaMamamia\Services\UserService\Repository\Entities\UserEntity
	 * @throws \Class152\PizzaMamamia\Services\UserService\Exceptions\NotLoggedInException
	 */
	public function getProductEntity() : ProductEntity
	{
		$sql = "SELECT  name,parentId,productGroup,GrossPrice,type FROM Products WHERE id = "
			. $this->productId . ";";
		$result = $this->db->query( $sql );
		$product = $result->fetch_assoc();
		if ( empty( $product ) ) {
			throw new NotLoggedInException( 'Login failed' );
		}
		return new  ProductEntity( $product );
	}

	/** 
	 * RC 1
	 * 
	 * @return \Generator
	 * @throws NotLoggedInException
	 */
	public function getMediaFiles() : \Generator
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
					WHERE  id="
			. $this->productId . ";";
		$result = $this->db->query( $sql );

		if ( empty( $result ) ) {
			throw new NotLoggedInException( 'Login failed' );
		}
		$resultItem = $result->fetch_assoc();
		try {
			foreach ( array_keys( $resultItem ) as $key ) {
				yield new MediaFileEntity(
					$resultItem[ $key ][ "id" ],
					$resultItem[ $key ][ "mime" ],
					$resultItem[ $key ][ "height" ],
					$resultItem[ $key ][ "width" ],
					$resultItem[ $key ][ "thumbHeight" ],
					$resultItem[ $key ][ "thumbWidth" ],
					$resultItem[ $key ][ "bigHeight" ],
					$resultItem[ $key ][ "bigWidth" ],
					$resultItem[ $key ][ "url" ],
					$resultItem[ $key ][ "thumbUrl" ],
					$resultItem[ $key ][ "bigUrl" ],
					$resultItem[ $key ][ "titleTag" ],
					$resultItem[ $key ][ "altTag" ]
					
				);
			}
		} finally {
			$result->free_result();
		}
	}


	public function getComponentsEntity() : ComponentsEntity
	{
		$sql = "SELECT  name,parentId,productGroup,GrossPrice,type FROM Products WHERE id = "
			. $this->productId . ";";
		$result = $this->db->query( $sql );
		$product = $result->fetch_assoc();
		if ( empty( $product ) ) {
			throw new NotLoggedInException( 'Login failed' );
		}
		return new   ComponentsEntity( $product );
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