<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroUsuario extends FormRequest
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
        return [
            'nombre'=>['required','min:8'],
            'condicion'=>'required',
            'selectDepartamento'=>'required',
            'selectProvincia'=>'required',
            'dni'=>'required|numeric|min:10000000|max:99999999',
            'fechaNac'=>'required|date',
        ];
    }

    // protected $messages = [
    //     'nombre.required' => 'Precio mínimo requerido',
    //     'precioMax.required' => 'Precio máximo requerido',
    //     'precioMin.numeric' => 'Solo carácteres numéricos',
    //     'precioMax.numeric' => 'Solo carácteres numéricos',
    //     'precioMax.regex' => 'Máximo 999.99',
    //     'precioMin.regex' => 'Mínimo 10.00',
    //     'condicion.required' => 'Seleccione condicion',
    //     'departamento.required' => 'Seleccione departamento'
    // ];
}
