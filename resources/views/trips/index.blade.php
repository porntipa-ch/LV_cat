@extends('layouts/contentLayoutMaster')

@section('title', 'ทริปทั้งหมด')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <a class="btn btn-success mb-2" href="{{ route('trips.create') }}">เพิ่มทริป</a>
        </div>
    </div>
    <!-- Basic table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อทริป</th>
                                <th>วันที่เริ่ม</th>
                                <th>วันทีจบ</th>
                                <th>ชื่อไกด์</th>
                                <th>จัดการ</th>
                                <th>เอกสาร</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($tripView as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->trip_name }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td>{{ $item->end_date }}</td>
                                    <td>{{ $item->guide_name }}</td>
                                    <td>

                                        <div class="btn-group">
                                            <a href="{{ route('trips.show', $item->id) }}" type="button"
                                                class="btn btn-primary">รายละเอียด</a>
                                            <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item"
                                                    href="{{ route('trips.edit', $item->id) }}">แก้ไข</a>
                                                    <a class="dropdown-item"
                                                    href="trips/addCustomer/{{$item->id}}">จัดการลูกค้า</a>
                                                <form action="{{ route('trips.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">ลบ</button>
                                                </form>

                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>


                                    </td>
                                    <td><a href="trips/addQuotation/{{ $item->id }}">ใบเสนอราคา</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @endsection


        @section('vendor-script')
            {{-- vendor files --}}
            <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
        @endsection
        @section('page-script')
            {{-- Page js files --}}
            <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
        @endsection
