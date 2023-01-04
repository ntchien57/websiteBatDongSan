<?php

namespace App\Http\Service\Product;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use \Illuminate\Support\Facades\Session;
use Toastr;

class ProductAdminService
{
    public function getMenu(){
        return Menu::where('active',1)->get();
    }

    protected function isValidPrice($request){

        if ($request->input('price') != 0 && $request->input('price_sale') != 0
        && $request->input('price_sale') >= $request->input('price')
        ){
            Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
            return false;
        }

        if ($request->input('price') == 0 && $request->input('price_sale') != 0){

            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        }

        return true;
    }

    public function insert($request){
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice == false){
            return false;
        }

        try {
            $request->except('_token');
            Product::create($request->all());

//            Session::flash('success','Thêm sản phẩm thành công');
            Toastr::success('Thêm sản phẩm thành công','Thành công');

        }
        catch (\Exception $err){

//            Session::flash('success','Thêm sản phẩm thành công');
            Toastr::error('Thêm sản phẩm thất bại','Thất bại');

            Log::info($err->getMessage());
            return false;
        }

        return true;
    }

    public function get(){
        return Product::with('menu') -> orderByDesc('id')
            ->search()->paginate(5);
    }

    public function update($request, $product){
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice == false){
            return false;
        }

        try {

            $product->fill($request->input());
            $product->save();

//            Session::flash('success','Cập nhật thành công');
            Toastr::success('Cập nhật sản phẩm thành công','Thành công');

        }catch (\Exception $err){
//            Session::flash('error','Vui lòng nhập lại');
            Toastr::error('Vui lòng nhập lại','Thất bại');

            \Log::info($err->getMessage());
            return false;
        }

        return true;
    }

    public function delete($request){

        $product = Product::where('id', $request->id)->first();
        if ($product){

            $product->delete();
            return true;
        }

        return false;
    }
}
