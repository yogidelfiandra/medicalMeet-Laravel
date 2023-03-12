<?php

namespace App\Http\Requests\User;

use App\Models\User;
// use Gate;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;

//this rule only at update request
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
				'required', 'email', 'max:255', Rule::unique('users')->ignore($this->user),
			],
			//add validation for role this here
		];
	}
}
