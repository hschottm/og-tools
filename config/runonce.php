<?php
class OGRunonceJob extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->import('Database');
	}
	
	public function run()
	{
		$data = array 
		( 
			array('name'=>'place', 'category'=>'general'), 
			array('name'=>'website', 'category'=>'general'), 
			array('name'=>'book', 'category'=>'general'), 
			array('name'=>'profile', 'category'=>'general'), 
			array('name'=>'object', 'category'=>'general'), 
			array('name'=>'article', 'category'=>'general'), 
			array('name'=>'product', 'category'=>'general'), 
			array('name'=>'event', 'category'=>'general'), 
			array('name'=>'restaurant.restaurant', 'category'=>'restaurant'), 
			array('name'=>'restaurant.menu_item', 'category'=>'restaurant'), 
			array('name'=>'restaurant.menu_section', 'category'=>'restaurant'), 
			array('name'=>'restaurant.menu', 'category'=>'restaurant'), 
			array('name'=>'books.author', 'category'=>'books'), 
			array('name'=>'books.book', 'category'=>'books'), 
			array('name'=>'books.genre', 'category'=>'books'), 
			array('name'=>'video.other', 'category'=>'video'), 
			array('name'=>'video.tv_show', 'category'=>'video'), 
			array('name'=>'video.movie', 'category'=>'video'), 
			array('name'=>'video.episode', 'category'=>'video'), 
			array('name'=>'music.song', 'category'=>'music'), 
			array('name'=>'music.radio_station', 'category'=>'music'), 
			array('name'=>'music.playlist', 'category'=>'music'), 
			array('name'=>'music.album', 'category'=>'music'), 
			array('name'=>'fitness.unit', 'category'=>'fitness'), 
			array('name'=>'fitness.course', 'category'=>'fitness'), 
			array('name'=>'invalid.place', 'category'=>'invalid'), 
			array('name'=>'business.business', 'category'=>'business')
		); 

		$arrProcedures = array(); 
		$arrValues = array(); 

		foreach( $data as $row ) 
		{ 
			$arrProcedures[] = '(?,?)'; 
			$arrValues[] = $row['name']; 
			$arrValues[] = $row['category']; 
		} 

		$this->Database->prepare("INSERT INTO tl_og_type (name, category) VALUES " . implode(',', $arrProcedures))->execute($arrValues);  
	}
}

$objRunonceJob = new OGRunonceJob();
$objRunonceJob->run();

?>
