<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:students,email',
        'city' => 'required|string',
        'age' => 'required|numeric',
        'phone' => 'required|numeric',
    ];
}

    public function messages(): array
{
    return [
        'name.required' => 'Student name is required',
        'name.min' => 'Student name must be at least 3 characters long',
        'email.required' => 'Student email is required',
        'email.email' => 'Please provide a valid email address',
        'email.unique' => 'This email address is already taken',
        'city.required' => 'City field is required',
        'age.required' => 'Age field is required',
        'age.numeric' => 'Age field should be numeric',
        'phone.required' => 'Phone number is required',
        'phone.numeric' => 'Phone field should be numeric',
        //'phone.min'  => 'Phone number must be at least 10 digits',
       // 'phone.max'  => 'Phone number cannot exceed 10 digits'
    ];
}

 protected $stopOnFirstFailure =true; 
}
