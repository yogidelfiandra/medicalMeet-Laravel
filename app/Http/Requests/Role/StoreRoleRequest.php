<?php

namespace App\Http\Requests\Role;

use App\Models\ManagementAccess\Role;
// use Gate;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
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
			'title' => [
				'required', 'string', 'max:255', 'unique:role',
			],
		];
	}
}
