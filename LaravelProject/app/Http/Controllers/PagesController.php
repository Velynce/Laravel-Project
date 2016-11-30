<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller{
	public function __construct()
	{
		
	}

	public function home()
	{
		return view('template')->nest('content', 'home');
	}

	public function about()
	{
		return 'message from controller,about us.';
	}
public function contact()
	{
		return 'Another message';
	}

	public function user()
	{
		$users = DB::select('Select * FROM tbl_users');
		return response()->json($users);
	}

	DB::table('users')
			->join('contact', 'users.id', '=', 'contacts.id')
			->join('orders', 'users.id', '=', 'order.')
			->select('users.id', 'contacts.phone')
			->get();

	public function portfolio()
	{
		return view('portfolio')->nest('content', 'portfolioContent');
	}
}