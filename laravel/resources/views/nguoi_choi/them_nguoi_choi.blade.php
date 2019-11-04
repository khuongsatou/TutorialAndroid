@extends('layout')

@section('main_content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">
                            @if(isset($nguoiChoi))
                            Cập Nhật Người Chơi
                            @else
                            Thêm Người chơi
                            @endif
                        
                    </h4>
                @if(isset($nguoiChoi))
                    <form action="{{ route('nguoi_choi.xu_ly_cap_nhat',['id' => $nguoiChoi->id]) }}" method="POST">
                @else
                    <form action="{{ route('nguoi_choi.xu_li_them_moi') }}" method="POST">
                @endif      
                      
                        @csrf
                        <div class="form-group">
                            <label for="ten_dang_nhap">Tên Đăng Nhập</label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name ="ten_dang_nhap"
                            @if(isset($nguoiChoi))
                                value="{{$nguoiChoi->ten_dang_nhap}}"
                            @endif> 
                        </div>
                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light">

                            @if(isset($nguoiChoi))
                                Cập Nhật
                           @else
                                Thêm
                           @endif
                            </button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    @endsection