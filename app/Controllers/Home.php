<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/index.php');
	}
	public function index2()
	{
		return view('pages/index2.php');
	}
	public function index3()
	{
		return view('pages/index3.php');
	}
	public function starter()
	{
		return view('pages/starter.php');
	}
	public function pages($i)
	{
		// return $i;
		return view('pages/'.$i.'.html');
	}
	public function others($i,$j)
	{
		// return $i;
		return view('pages/'.$i.'/'.$j);
	}
	//--------------------------------------------------------------------

}
