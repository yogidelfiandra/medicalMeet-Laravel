<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// request
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;

// use everything here
use Gate;
use Auth;

// use model here
use App\Models\ManagementAccess\Role;
use App\Models\ManagementAccess\RoleUser;
use App\Models\ManagementAccess\Permission;
use App\Models\ManagementAccess\PermissionRole;

// thirdparty package

class RoleController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$role = Role::orderBy('created_at', 'desc')->get();

		return view('pages.backsite.management-access.role.index', compact('role'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return abort(404);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreRoleRequest $request)
	{
		// get all request from frontsite
		$data = $request->all();

		// store to database
		$role = Role::create($data);

		alert()->success('Success Message', 'Successfully added new role');
		return redirect()->route('backsite.role.index');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Role $role)
	{
		// contains all the Permissions associated with the Role
		$role->load('permission');

		return view('pages.backsite.management-access.role.show', compact('role'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Role $role)
	{
		$permission = Permission::all();

		// contains all the Permissions associated with the Role
		$role->load('permission');

		return view('pages.backsite.management-access.role.edit', compact('permission', 'role'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateRoleRequest $request, Role $role)
	{

		$role->update($request->all());

		// synchronize data input permission with object relation between $role and $permission
		$role->permission()->sync($request->input('permission', []));

		alert()->success('Success Message', 'Successfully updated role');
		return redirect()->route('backsite.role.index');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Role $role)
	{

		$role->forceDelete();

		alert()->success('Success Message', 'Successfully deleted role');
		return back();
	}
}
