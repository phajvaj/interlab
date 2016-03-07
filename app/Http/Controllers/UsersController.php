<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
        $this->title = 'ผู้ใช้งานระบบ';
    }    

	/**
	 * Display a listing of the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		if(\Gate::denies('user-index')){//allows=false, denies=true
			return back()->withInput();
		}
		$users = User::wherenotin('id',[Auth::user()->id,'1'])->get();
		return View('users.index', ['titlepage' => $this->title,'users' => $users]);
	}

	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(\Gate::denies('user-create')){
			return back()->withInput();
		}
		$role = DB::table('roles')->get();
		return View('users.create', ['titlepage' => $this->title, 'role' => $role]);
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        if(\Gate::denies('user-create')){
            return back()->withInput();
        }
		$this->validate($request, [
			'name' => 'required|max:255',
			'username' => 'required|max:100|unique:users',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
			'role' => 'required',
		]);

		$user = new User;

		$user->name 		= $request->Input('name');
		$user->username 	= $request->Input('username');
		$user->email 		= $request->Input('email');
		$user->tel 			= $request->Input('tel');
		$user->password 	= bcrypt($request->Input('password'));
		$user->role 		= $request->Input('role');
		$ac = $request->Input('active');
		$user->active 		= empty($ac)?'N':'Y';

		$user->save();

		return Redirect('/users');
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        if(\Gate::denies('user-edit')){
            return back()->withInput();
        }

		$user = User::find($id);

		if (is_null($user))
			//abort(404);
			return view('pages.404');

		$role = DB::table('roles')->get();
		//echo $user->name;
		return View('users.edit', [ 'users' => $user , 'titlepage' => $this->title, 'role' => $role]);
	}

	public function profile()
	{
		$user = User::find(Auth::user()->id);
		//echo $user->name;
		return View('users.profile', [ 'users' => $user ,'titlepage' => 'Profile User']);
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        if(\Gate::denies('user-edit')){
            return back()->withInput();
        }

		$this->validate($request, [
			'name' => 'required|max:255',
			'role' => 'required',
		]);

		$user = User::find($id);

		$user->name 		= $request->Input('name');
		$user->tel 			= $request->Input('tel');
		$user->role 		= $request->Input('role');
		$ac = $request->Input('active');
		$user->active 		= empty($ac)?'N':'Y';

		#เช็คว่ามีการเปลี่ยนรหัสผ่านหรือไม่
		if ($user->email <> $request->Input('email')) {
			$this->validate($request, [
				'email' => 'required|email|max:255|unique:users',
			]);
			$user->email	= $request->Input('email');
		}
		#เช็คว่ามีการ ตั้งรหัสผ่านใหม่หรือไม่
		if (!empty($request->Input('password'))) {
			$this->validate($request, [
				'password' => 'required|confirmed|min:6'
			]);
			$user->password	= bcrypt($request->Input('password'));
		}

		$user->save();

		if (empty($request->Input('_profile')))
			return Redirect('/users');
		else
			return Redirect('/home');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (is_null($id))
			return view('pages.404');

        if(\Gate::denies('user-delete')){
            return back()->withInput();
        }

		User::destroy($id);

		return Redirect('/users');
	}

}