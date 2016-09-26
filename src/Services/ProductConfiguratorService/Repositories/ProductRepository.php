<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 26.09.2016
 * Time: 13:38
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\Entities\ProductEntity;

class ProductRepository
{
	/** @var \MySqli */
	private $db;

	public function __construct()
	{
		$db = new MySql();
		$this->db = $db->getInstance();
	}

	public function getProductById( int $productId )
	{
		$sql = "SELECT
					prod1.id,
					prod1.name,
					prod1.nameExtension,
					prod1.description,
					prod1.mediaFileId,
					prod1.internalName,
					prod1.grossPrice,
					prod1.vat
				FROM
					Products AS prod1
				WHERE
					prod1.id = " . $productId . ";";

		$result = $this->db->query( $sql );

		if ( $line = $result->fetch_assoc() ) {
			

	(is_null($line['description'])) ? $line['description'] = '' : null ;

			return new ProductEntity(
				$line[ 'id' ],
				$line[ 'name' ],
				$line[ 'nameExtension' ],
				$line[ 'description' ],
				$line[ 'mediaFileId' ],
				$line[ 'internalName' ],
				$line[ 'grossPrice' ],
				$line[ 'vat' ]
			);
		}
		return null;
	}
}