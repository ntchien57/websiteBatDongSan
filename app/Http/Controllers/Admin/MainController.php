<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Service\Product\ProductAdminService;

class MainController extends Controller
{
    protected $productService;

    public function __construct(ProductAdminService $productService)
    {
        $this->productService = $productService;
    }

    public function index(){
        $newOrder = Customer::select('id')->where('active',0)->get();
        $shipOrder = Customer::select('id')->where('active',1)->get();
        $successOrder = Customer::select('id')->where('active',2)->get();
        $cancelOrder = Customer::select('id')->where('active',3)->get();

        return view('admin.home',[
            'title' => 'Quản lí hệ thống',
            'newOders' => $newOrder,
            'shipOders' => $shipOrder,
            'successOrders' => $successOrder,
            'cancelOders' => $cancelOrder,
            'products' => $this->productService->get()
        ]);
    }

}
