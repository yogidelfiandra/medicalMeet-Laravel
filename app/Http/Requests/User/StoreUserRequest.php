<?php

namespace App\Http\Requests\User;

use App\Models\User;
// use Gate;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		//create middleware from Kernel at here
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'name' => [
				'required', 'string', 'max:255',
			],
			'email' => [
				'required', 'email', 'unique:users', 'max:255',
			],
			'password' => [
				'min:8', 'string', 'max:16', 'mixedCase',
			],

			//add validation for role this here
		];
	}
}
