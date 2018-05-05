<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class SerwisanciTableSeeder extends CsvSeeder {

	public function __construct()
	{
        $this->table = 'serwisanci';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/database/seeds/csvp/serwisanci.csv';
        $this->mapping = [
            1 => 'nazwa_serwisanta',
          
          
        ];
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