@extends('layout')

@section('css')

<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

@endsection

@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>


@endsection

@section('main_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">DANH SÁCH NGƯỜI CHƠI</h4>
                    <a href="{{ route('nguoi_choi.them_moi') }}" type="button" class="btn btn-primary waves-effect waves-light">
                        Thêm Mới</a>
                    <p class="text-muted font-13 mb-4">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                        function:
                        <code>$().DataTable();</code>.
                    </p>

                    <table id="linh_vuc_table" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Đăng Nhập</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach($listNguoiChoi as $nguoiChoi)
                            <tr>
                                <td>{{$nguoiChoi->id}}</td>
                                <td>{{$nguoiChoi->ten_dang_nhap}}</td>
                                
                                <td>
                                    <a href="{{ route('nguoi_choi.cap_nhat',['id' => $nguoiChoi->id]) }}" type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-pencil-outline"></i></a>  
                                    <a href="{{ route('nguoi_choi.xoa',['id' => $nguoiChoi->id]) }}" type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can-outline"></i></a>
                                </td>
                            
                            </tr>
                           @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
@endsection