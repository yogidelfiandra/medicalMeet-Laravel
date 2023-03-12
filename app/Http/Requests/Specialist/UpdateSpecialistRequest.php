<?php

namespace App\Http\Requests\Specialist;

use App\Models\MasterData\Specialist;
// use Gate;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSpecialistRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
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
				'required', 'string', 'max:255', Rule::unique('specialists')->ignore($this->specialist),
			],
			'price' => [
				'required', 'string', 'max:255',
			],
		];
	}
}
