<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class TypyTableSeeder extends CsvSeeder {

	public function __construct()
	{
        $this->table = 'typ_zgloszenia';
        $this->csv_delimiter = '|';
        $this->filename = base_path().'/database/seeds/csvp/typy.csv';
        $this->mapping = [
            0 => 'nazwa_typu',
          
          
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