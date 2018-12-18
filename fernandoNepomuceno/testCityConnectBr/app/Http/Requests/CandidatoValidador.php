<?php

namespace App\Http\Requests;

use App\Candidato;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CandidatoValidador extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules =  [
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date|before_or_equal:'.Carbon::now(),
            'sexo' => 'required|max:255',
            'data_cadastro' => 'required|date|before_or_equal:'.Carbon::now(),

        ];

        $candidato = Candidato::find($this['id']);

        if($candidato == null)
        {
            $rules['file'] = 'required|file';
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome deve ser informado.',
            'nome.max' => 'O nome é inválido',
            'data_nascimento.required'  => 'A data de nascimento deve ser informada.',
            'data_nascimento.date'  => 'A data de nascimento é inválida',
            'data_nascimento.before_or_equal'  => 'A data de nascimento é inválida',
            'sexo.required'  => 'O sexo deve ser informado',
            'data_cadastro.required'  => 'A data de cadastro deve ser informada.',
            'data_cadastro.date'  => 'A data de cadastro é inválida.',
            'data_cadastro.before_or_equal'  => 'A data de cadastro é inválida.',
            'file.required'  => 'O currículo deve ser anexado.',
        ];
    }
}
