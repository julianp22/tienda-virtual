<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaveProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'marca' => 'required',
            'prenda' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',
            'talla' => 'required',
            'foto' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ];
    }

    public function message() 
    {
        return [
            'nombre.required' => 'Se requiere de un nombre',
            'marca.required' => 'Se requiere de una marca',
            'prenda.required' => 'Se requiere de una prenda',
            'descripcion.required' => 'Se requiere una descripcion',
            'costo.required' => 'Se requiere de un costo',
            'talla.required' => 'Se requiere de una talla',
            'foto.required' => 'Se requiere una foto'
        ];
    }
}
