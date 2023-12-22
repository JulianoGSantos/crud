<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'cpf'=>'required|cpf|formato_cpf',
            'phone'=>'telefone_com_ddd',
            'cellphone'=>'required|celular_com_ddd',
            'birth'=>'required',
            'cep'=>'formato_cep',
            'street'=>'required',
            'number',
            'complement',
            'district'=>'required',
            'city'=>'required',
            'state'=>'required',
        ];
    }

    public function message()
    {
        return[
            'name.required' => 'O campo nome é obrigatório.',
            'cpf.required' => 'O campo cpf é obrigatório',
            'cellphone.required' => 'O campo celular é obrigatório',
            'birth.required' => 'O campo nascimento é obrigatório',
            'street.required' => 'O campo rua é obrigatório.',
            'district.required' => 'O campo bairro é obrigatório',
            'city.required' => 'O campo cidade é obrigatório',
            'state.required' => 'O campo estado é obrigatório',
        ];
    }
}
