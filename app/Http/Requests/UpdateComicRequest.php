<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'Required | String | max:50',
            'description' => 'String | nullable | max:65000',
            'thumb' => 'required| URL',
            'price' => 'required| Integer | max:500',
            'sale_date' => 'required',
            'type' => 'required| String | max:50',
            'series' => 'required| String | max:50',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Titolo richiesto.',
            'title.max' => 'Ammessi massimo 50 caratteri',

            'description.max' => 'Lunghezza massima della descrizione di 65000 caratteri',

            'thumb.required' => 'URL richiesto.',
            'thumb.url' => 'L\'URL inserito non è valido',

            'price.required' => 'Prezzo richiesto.',
            'price.numeric' => 'Il prezzo inserito deve essere un numero.',

            'series.required' => 'Nome della Serie richiesto.',
            'series.max' => 'Il nome inserito puo avere massimo 50 caratteri.',

            'sale_date.required' => 'Il campo data è obbligatorio.',

            'type.max' => 'Il tipo inserito puo avere massimo 50 caratteri.',
            'type.required' => 'Il campo type è obbligatorio.',
        ];
    }
}
