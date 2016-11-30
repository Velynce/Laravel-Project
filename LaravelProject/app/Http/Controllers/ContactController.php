<?php
namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;

class ContactController extends Controller{
	public function __construct()
	{
		
	}

	public function getIndex()
	{
		$users = app('db')->select('Select * from tbl_users');
		return response()->json($users);
	}

	//Will replace camelcase to lowercase, and dashs for every camelcase.
	public function getMyDetails($id)
	{
		$users = app('db')->table('tbl_users')->where('id', $id)->first();
		return response()->json($users);
	}

	public function getForm()
	{
		//contacts/form
		return view('template')->nest('content', 'form');
	}

	public function postCreate() 
	{
		//contacts/create

		//validation

		//grab all form inputs
		$data = request()->input();

		//create a validator object and add rules.
		$validator = validator()->make($data, [
				'fname' => 'required',
				'lname' => 'required',
				'email' => 'required|email'
			]);
		//if validation passes, insert into db
		if($validator->passes()) {
			app('db')->table('tbl_users')->insert([
			'fname' => request()->input('fname'),
			'lname' => request()->input('lname'),
			'email' => request()->input('email')
			]);
			return 'user have been added.';
		}
		
		//if validation fails, return errors back to the form view.
		//would be nice if the old values in the form wehre saved.
		return redirect()->back()->withErrors($validator->errors())->withInput();
	}
}