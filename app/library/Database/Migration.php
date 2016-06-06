<?php

namespace ResponsiveMenu\Database;
use ResponsiveMenu\Options\Options as Options;
use ResponsiveMenu\Database\Database as Database;

class Migration
{

	protected $db;
	protected $table;

  const TABLE_NAME = 'responsive_menu';
  const VERSION_VAR = 'RMVer';

	public function __construct(Database $db)
	{
		$this->db = $db;
		$this->table = $this->db->getPrefix() . self::TABLE_NAME;
	}

	public function setup($default_options)
	{
		$this->defaults = $default_options;
    $this->init();
	}

	protected function addNewOptions()
	{
		foreach($this->defaults as $name => $value):
			$this->db->insertIfNotExists(
				$this->table,
				array('name' => $name, 'value' => $value)
			);
		endforeach;
	}

	protected function tidyUpOptions()
	{
		$current = array_map(function($a) { return $a->name; }, $this->db->all($this->table));
    $defaults = array_keys($this->defaults);
    foreach(array_diff($current, $defaults) as $to_delete)
      $this->db->delete($this->table, array('name' => $to_delete));

	}

	protected function init()
	{
    if(!$this->isVersion3()) :
      $charset_collate = $this->db->getCharset();
  		$sql = "CREATE TABLE IF NOT EXISTS `$this->table` (
  				  `name` varchar(255) NOT NULL,
  				  `value` varchar(5000) DEFAULT NULL,
  				  `created_at` datetime NOT NULL,
  				  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  				) $charset_collate;

  				ALTER TABLE `$this->table` ADD UNIQUE KEY `name` (`name`);";

  		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  		dbDelta( $sql );
      $this->migrateVersion2Options();
  		$this->addNewOptions();
    endif;
	}

	public function migrate()
	{
		$this->addNewOptions();
    $this->tidyUpOptions();
		if($this->needsUpdate($this->getVersion(), $this->db->getVersion())):
			$this->migrations();
			$this->updateVersion();
		endif;
	}

	public function needsUpdate($current_version, $old_version)
	{
		return version_compare($current_version, $old_version, '<');
	}

	protected function getVersion()
	{
		return get_option(self::VERSION_VAR);
	}

	protected function updateVersion()
	{
		update_option(self::VERSION_VAR, $this->db->getVersion());
	}

  protected function isVersion3()
  {
    return substr($this->getVersion(), 1, 1) == 3;
  }

	protected function migrations()
	{

	}

  protected function migrateVersion2Options()
  {

  }

}
