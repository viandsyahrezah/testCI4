<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('public/home');
		echo view('templates/footer');
	}

	function showme($page= 'home'){
	if (! is_file(APPPATH.'/Views/public/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		echo view('templates/header');
		echo view('public/'.$page);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
