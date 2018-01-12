<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StoreCategoria extends FormRequest
{

  protected $redirectRoute = 'categoria.create'; //ruta definida en alguno de los archivos de la carpeta routes/

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
          'nombre' => 'required|unique:categorias|max:200',
        ];
    }
    public function messages()
    {
          return [
              'nombre.required' => 'El :attribute es obligatorio.',
              'nombre.unique' => 'El :attribute debe ser unico.',
              'nombre.max' => 'El :attribute debe ser máximo 200'
          ];
    }
}
