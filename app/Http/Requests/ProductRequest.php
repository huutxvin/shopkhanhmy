<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required|unique:product_table,name',
            'price'=>'required',
            'img'=>'required',
            'img'=>'image',
            'warranty'=>'required',
            'condition'=>'required',
            'status'=>'required',
            'promotion'=>'required',
            'description'=>'required',
        ];
    }
    public function messages() {
        return [
            'name.required'=> 'Tên sản phẩm không được trống',
            'name.unique'=> 'Tên sản phẩm đã tồn tại',
            'price.required'=> 'Giá sản phẩm không được trống',
            'img.required'=> 'Ảnh sản phẩm không được trống',
            'img.image'=> 'Ảnh sản phẩm không đúng định dạng',
            'warranty.required'=> 'Chế độ bảo hành không được trống',
            'status.required'=> 'Tình trạng sản phẩm không được trống',
            'promotion.required'=> 'Tình trạng khuyến mại không được trống',
            'description.required'=> 'Mô tả sản phẩm không được trống',
        ];
    }
}
