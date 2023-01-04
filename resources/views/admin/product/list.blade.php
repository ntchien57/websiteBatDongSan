@extends('admin.main')


@section('content')
    <form action="" class="search m-b-30 m-t-10" style=" width: 60%; margin-left: 200px" >
        <input name="key-search" placeholder="Tìm kiếm sản phẩm"  class="input-search ">
        <button type="submit" class="btn-search">
            <i class="fa fa-search" style="color: #0c84ff" ></i>
        </button>
    </form>
    <table class="table" style="text-align: center">
        <thead>
        <tr>
            <th style="width: 80px">ID</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục</th>
            <th>Giá gốc</th>
            <th>Giá giảm</th>
            <th>Trạng Thái</th>
            <th>Ảnh sản phẩm</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>

        <tbody>
            @foreach($products as $key => $product)
             <tr>
                <td> {{ $product->id }}</td>
                <td> {{ $product->name }}</td>
                 <td> {{ $product->menu->name }}</td>
                 <td> {{ $product->price }}</td>
                <td>{{ $product->price_sale }}</td>
                <td> {!! \App\Helpers\Helper::active($product->active) !!}</td>
                <td><img src="{{ $product->thumb }}" alt="" width="70px" height="70px"></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/product/edit/ {{$product->id}}">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a class="btn btn-danger btn-sm btn-delete-product"
                       href="">
                        <i onclick="getProductId({{ $product->id }})" class="fas fa-trash-alt"></i>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <input type="hidden" id="product-id">
    {!! $products->links('my-pagination') !!}
@endsection
