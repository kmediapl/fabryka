<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class UsTableSeeder extends CsvSeeder {

	public function __construct()
	{
        $this->table = 'usadresy';
        $this->csv_delimiter = '|';
        $this->filename = base_path().'/database/seeds/csvp/us.csv';
        $this->mapping = [
			0 => 'nazwa_us',
			1 => 'ulica',
			2 => 'miejscowosc',
			4 => 'kodpocztowy',
			3 => 'nr_domu',
			5 => 'kod',
          
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