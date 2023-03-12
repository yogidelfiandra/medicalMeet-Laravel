<?php

namespace App\Http\Requests\ConfigPayment;

use App\Models\MasterData\ConfigPayment;
// use Gate;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;

class UpdateConfigPaymentRequest extends FormRequest
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
			'fee' => [
				'required', 'string', 'max:255',
			],
			'vat' => [
				'required', 'string', 'max:255',
			],
		];
	}
}
