<?php
	/**
	 * Created by PhpStorm.
	 * User: cbiedermann
	 * Date: 19.09.2016
	 * Time: 10:22
	 */

	namespace Class152\PizzaMamamia\Services\MenuService\Repositories;


	use Class152\PizzaMamamia\Database\MySql;
	use Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity;

	class MenuRepository
	{
		/** @var \MySqli */
		private $db;

		public function __construct()
		{
			$db = new MySql();
			$this->db = $db->getInstance();
		}

		/**
		 * @param int $menuId
		 *
		 * @return null|\Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity|null
		 */
		public function getMenuById(int $menuId)
		{
			$sql = "SELECT id,parentId,name,url FROM Menus WHERE ISNULL(parentId) AND id = "
			       . $menuId . " LIMIT 1;";
			return $this->askForSingleMenu($sql);
		}

		/**
		 * @param string $sql
		 *
		 * @return null|\Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity
		 */
		private function askForSingleMenu( string $sql )
		{
			/** @var \MySqli_Result $result */
			$result = $this->db->query( $sql );

			if ( $line = $result->fetch_assoc() ) {
				return new MenuEntity(
					$line['id'],
					$line['parentId'],
					$line['name'],
					$line['url']
				);
			}

			return null;
		}

		/**
		 * @param string $menuName
		 *
		 * @return null|\Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity|null
		 */
		public function getMenuByName( string $menuName )
		{
			$sql = "SELECT id,parentId,name,url FROM Menus WHERE ISNULL(parentId) AND name = '"
			       . $this->db->escape_string( $menuName )
			       . "' LIMIT 1;";
			return $this->askForSingleMenu($sql);
		}

		/**
		 * @param array $ids
		 *
		 * @return \Generator
		 */
		public function getMenusByParentIds( array $ids ) : \Generator
		{
			$sql = "SELECT id,parentId,name,url FROM Menus WHERE parentId IN ( "
			       . implode( ',', $ids ) . " ) ORDER BY position LIMIT 50 ;";

			$result = $this->db->query($sql);
			$return = $result->fetch_all();

			try {
				foreach ( array_keys( $return ) as $key ) {
					yield new MenuEntity(
						$return[ $key ][0],
						$return[ $key ][1],
						$return[ $key ][2],
						$return[ $key ][3]
					);
				}
			}
			finally {
				$result->free_result();
			}
		}
	}