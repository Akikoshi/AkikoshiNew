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
			$sql = "SELECT * FROM Menues WHERE ISNULL(parentId) AND id = "
			       . $menuId . " LIMIT 1;";
			return $this->askForSingleMenu($sql);
		}

		/**
		 * @param string $menuName
		 *
		 * @return null|\Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity|null
		 */
		public function getMenuByName( string $menuName )
		{
			$sql = "SELECT * FROM Menues WHERE ISNULL(parentId) AND name = '"
			       . $this->db->escape_string( $menuName )
			       . "' LIMIT 1;";
			return $this->askForSingleMenu($sql);
		}

		/**
		 * @param array $ids
		 *
		 * @return array
		 */
		public function getMenuesByParentIds( array $ids )
		{
			$sql = "SELECT * FROM Menues WHERE parentId IN ( "
			       . implode( ',', $ids ) . " ) LIMIT 50;";

			$result = $this->db->query($sql);
			$return = $result->fetch_all();

			foreach( array_keys($return) as $key )
			{
				var_dump($return[$key]);
				$return[$key] = new MenuEntity(
					$return[$key][0],
					$return[$key][1],
					$return[$key][2],
					$return[$key][3]
				);
			}

			return $return;

		}

		/**
		 * @param string $sql
		 *
		 * @return null|\Class152\PizzaMamamia\Services\MenuService\Repositories\Entities\MenuEntity
		 */
		private function askForSingleMenu( string $sql )
		{
			/** @var \MySqli_Result $result */
			$result = $this->db->query($sql);

			if( $line = $result->fetch_assoc() )
			{
				return new MenuEntity(
					$line['id'],
					$line['parentId'],
					$line['name'],
					$line['url']
				);
			}

			return null;
		}

	}