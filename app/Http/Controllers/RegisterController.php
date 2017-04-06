<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\RegUser;
use Alert;

class RegisterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//DB::insert('insert into reg_users (username, password) values (?, ?)', ['Dayle', 'password']);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */	
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$message = $request->input('message');
		DB::insert('insert into reg_users (name, email, message) values (?, ?, ?)', [$name, $email, $message]);
		session::flash('accept_comment', 'Send Successfully!');
		alert()->success('Successfully Sent!', 'God Bless!');
		return view('welcome');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		/*$Reg = RegUser::find($id);
		return view('Reg.show', array('reg_users' => $Reg));*/
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
