@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 80px">ID</th>
            <th>Tiêu đề</th>
            <th>Đường dẫn</th>
            <th>Ảnh</th>
            <th>Trạng thái</th>
            <th>Cập nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>

        <tbody>
        @foreach($sliders as $key => $slider)
            <tr>
                <td> {{ $slider->id }}</td>
                <td> {{ $slider->name }}</td>
                <td> {{ $slider->url }}</td>
                <td><a href=" {{ $slider->thumb }}" target="_blank">
                        <img src=" {{ $slider->thumb }}" height="40px" alt="">
                    </a>
                </td>
                <td> {!! \App\Helpers\Helper::active($slider->active) !!}</td>
                <td> {{ $slider->updated_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/ {{$slider->id}}">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a class="btn btn-danger btn-sm btn-delete-slide"
                       href="#">                       
                        <i onclick="getSliderId({{ $slider->id }})" class="fas fa-trash-alt"></i>
                    </a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <input id="slider-id" type="hidden">

    {!! $sliders->links() !!}

@endsection
