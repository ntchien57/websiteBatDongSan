<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Service\Product\ProductAdminService;
use App\Models\Product;
use Illuminate\Http\Request;
use Toastr;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductAdminService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('admin.product.list',[
            'title' => 'Danh sách sản phẩm ',
            'products' => $this->productService->get()
        ]);
    }


    public function create()
    {
        return view('admin.product.add',[
            'title' => 'Thêm sản phẩm',
            'menus' => $this->productService->getMenu()
        ]);
    }


    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);
        return redirect()->back();
    }


    public function show(Product $product)
    {
        return view('admin.product.edit',[
           'title'=>'Sửa sản phẩm',
            'product' => $product,
            'menus' => $this->productService->getMenu()

        ]);
    }



    public function update(Request $request, Product $product)
    {
        $result = $this->productService->update($request,$product);

        if ($result){
            return redirect('/admin/product/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->productService->delete($request);

        return true;

    }
}
