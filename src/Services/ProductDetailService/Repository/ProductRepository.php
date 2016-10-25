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
use Class152\PizzaMamamia\Services\ProductDetailService\Library\Addenda\AddendaItem;
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

    /**
     * ProductRepository constructor.
     * @param $productId
     */
    public function __construct( int $productId )
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


	/**
	 * @param int|null $componentId
	 * @return \Generator
	 * @throws NoResultException
	 */
	public function getAdditiveEntities( int $componentId = null ) : \Generator
	{
		if ( $componentId == null ) {
			$componentId = $this->productId;
		};

		$result = $this->obtainAddendaByTypeRequest( $componentId, 'Additives' );

		$resultItems = $result->fetch_assoc();

		try {
			foreach ( array_keys( $resultItems ) as $key ) {
				yield new AddendaItem(
					$resultItems[ $key ][ "id" ],
					$resultItems[ $key ][ "type" ],
					$resultItems[ $key ][ "name" ],
					$resultItems[ $key ][ "tag" ],
					$componentId );
			}
		} finally {
			$result->free_result();
		}

	}

	/**
	 * @param int|null $componentId
	 * @return \Generator
	 * @throws NoResultException
	 */
	public function getAllergenEntities( int $componentId = null ) : \Generator
	{
		if ( $componentId == null ) {
			$componentId = $this->productId;
		};

		$result = $this->obtainAddendaByTypeRequest( $componentId, 'Allergics' );

		$resultItems = $result->fetch_assoc();

		try {
			foreach ( array_keys( $resultItems ) as $key ) {
				yield new AddendaItem(
					$resultItems[ $key ][ "id" ],
					$resultItems[ $key ][ "type" ],
					$resultItems[ $key ][ "name" ],
					$resultItems[ $key ][ "tag" ],
					$componentId );
			}
		} finally {
			$result->free_result();
		}
	}

	/**
	 * @param int $componentId
	 * @param string $type
	 * @return \mysqli_result
	 * @throws NoResultException
	 */
	private function obtainAddendaByTypeRequest( int $componentId, string $type ) : \mysqli_result
	{
		$sql = "SELECT
                    a1.id,
                    a1.`type`,
                    a1.name,
                    a1.tag
                FROM
                    Addons AS a1
                JOIN
                    AddonsToComponets AS atc1 ON (a1.id = atc1.fk_Addons)
                WHERE
                    atc1.fk_Components = " . $componentId . "
                AND
                    a1.`type` = '" . $type . "';";

		$result = $this->db->query( $sql );

		if ( empty( $result ) ) {
			throw new NoResultException();
		}
		return $result;
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



}