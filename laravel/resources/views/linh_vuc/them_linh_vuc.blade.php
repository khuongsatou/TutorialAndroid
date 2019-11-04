@extends('layout')

@section('main_content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">
                            @if(isset($linhVuc))
                            Cập Nhật Lĩnh Vực
                            @else
                            Thêm Lĩnh Vực
                            @endif
                        
                    </h4>
                @if(isset($linhVuc))
                    <form action="{{ route('linh_vuc.xu_ly_cap_nhat',['id' => $linhVuc->id]) }}" method="POST">
                @else
                    <form action="{{ route('linh_vuc.xu_li_them_moi') }}" method="POST">
                @endif      
                      
                        @csrf
                        <div class="form-group">
                            <label for="ten_linh_vuc">Tên Lĩnh Vực</label>
                            <input type="text" class="form-control" id="ten_linh_vuc" name ="ten_linh_vuc"
                            @if(isset($linhVuc))
                                value="{{$linhVuc->ten_linh_vuc}}"
                            @endif> 
                        </div>
                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light">

                            @if(isset($linhVuc))
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