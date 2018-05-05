<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class KasyTableSeeder extends CsvSeeder {

	public function __construct()
	{
        $this->table = 'typy_kas';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/database/seeds/csvp/typy_kas.csv';
        $this->mapping = [
            2 => 'nazwa_kasy',
            1 => 'producent',
          
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