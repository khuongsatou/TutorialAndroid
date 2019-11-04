@extends('layout')

@section('main_content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">
                            @if(isset($cau_hoi))
                                Cập Nhật Câu Hỏi
                            @else
                                Thêm Câu Hỏi
                            @endif
                        
                    </h4>
                @if(isset($cau_hoi))
                    <form action="{{ route('cau_hoi.xu_ly_cap_nhat',['id' => $cau_hoi->id]) }}" method="POST">
                @else
                    <form action="{{ route('cau_hoi.xu_li_them_moi') }}" method="POST">
                @endif      
                      
                        @csrf
                        <div class="form-group">
                            <label for="noi_dung">Nội Dung</label>
                            <input type="text" class="form-control" id="noi_dung" name="noi_dung"
                            @if(isset($cau_hoi))
                                value="{{$cau_hoi->noi_dung}}"
                            @endif> 
                        </div>
                        <div class="form-group">
                                <label for="linh_vuc_id">Lĩnh Vực</label>

                                <select class="custom-select" name="linh_vuc_id">
                                   
                                    @foreach($listLinhVuc as $linh_vuc)
                                        <option 
                                            value="{{$linh_vuc->id}}" 
                                            @if(isset($cau_hoi))
                                                @if($linh_vuc->id == $cau_hoi->linh_vuc_id)
                                                    selected
                                                @endif
                                            @endif
                                            
                                        >
                                            {{$linh_vuc->ten_linh_vuc}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light">

                            @if(isset($cau_hoi))
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