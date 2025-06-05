<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name' => 'required | min:3',
            'surname' => 'required',
            'date' => 'required',
            'comment' => 'required',
            'img' => 'required|image'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Il nome deve avere minimo 3 caratteri',
            'surname.required' => 'Il cognome è obbligatorio',
            'date.required' => 'La data è obbligatoria',
            'comment.required' => 'Scrivi un messaggio alla squadra',
            'img.required' => "L'immagine è obbligatoria",
            'img.image' => "Il file deve essere un'immagine"

        ];
    }
}
