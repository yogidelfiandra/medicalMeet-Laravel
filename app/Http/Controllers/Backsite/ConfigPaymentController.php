<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// request
use App\Http\Requests\ConfigPayment\UpdateConfigPaymentRequest;

// use everything here
use Gate;
use Auth;

// use model here
use App\Models\MasterData\ConfigPayment;

class ConfigPaymentController extends Controller
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
		$config_payment = ConfigPayment::all();

		return view('pages.backsite.master-data.config-payment.index', compact('config_payment'));
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
	public function store(Request $request)
	{
		return abort(404);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		return abort(404);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		return abort(404);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		return abort(404);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		return abort(404);
	}
}
