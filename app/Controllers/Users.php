<?php namespace App\Controllers;


/**
 * 
 */
class Users extends BaseController
{
	
	public function index()
	{
		helper('html');
		helper('form');
		echo base_url();
		echo view('Users/ArticleList');
	}
}

?>