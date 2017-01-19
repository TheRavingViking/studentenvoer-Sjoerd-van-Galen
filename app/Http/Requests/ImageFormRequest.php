<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function store(ImageFormRequest $request)
    {

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $name = $file->getClientOriginalName();

            $file->move(public_path() . '/images/', $name);

            return redirect('/')->with('status', 'Your image has been uploaded s\
 uccessfully!');
        }

    }


}
