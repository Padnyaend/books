<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index() {
		$books = new Model_Listbooks();
    	echo View::factory('frame')->set('books', $books->getBooks());
	}
	
}
