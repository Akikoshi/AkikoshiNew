<?php
/**
 * Created by PhpStorm.
 * User: frankenfeldtp
 * Date: 26.09.2016
 * Time: 13:14
 */

namespace Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories;


use Class152\PizzaMamamia\Database\MySql;
use Class152\PizzaMamamia\Services\ProductConfiguratorService\Repositories\Entities\MediaEntity;

class MediaFileRepository
{

	/** @var \MySqli */
	private $db;

	public function __construct()
	{
		$db = new MySql();
		$this->db = $db->getInstance();
	}


	public function getMediaFileById(int $imageId)
	{
		$sql = "SELECT 
					id, 
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
				WHERE 
					id = ". $imageId .";";
		$result = $this->db->query($sql);

		if( $line = $result->fetch_assoc() )
		{
			return new MediaEntity(
				$line['id'],
				$line['mime'],
				$line['height'],
				$line['width'],
				$line['thumbHeight'],
				$line['thumbWidth'],
				$line['bigHeight'],
				$line['bigWidth'],
				$line['url'],
				$line['thumbUrl'],
				$line['bigUrl'],
				$line['titleTag'],
				$line['altTag']
			);
		}
		return null;

	}

}