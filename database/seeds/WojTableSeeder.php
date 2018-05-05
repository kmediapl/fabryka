<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class WojTableSeeder extends CsvSeeder {

	public function __construct()
	{
        $this->table = 'wojewodztwa';
        $this->csv_delimiter = ',';
		$this->filename = base_path().'/database/seeds/csvp/wojewodztwa.csv';
	}

	public function run()
	{
		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();

		parent::run();
	}
}