@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

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
        <div class="col-6">
            <h3>NAMELISTGROUP</h3>
            <h5>PROGRAM : {{ $tripDetail->trip_name }}</h5>
            <h5>FILGHT : {{ $tripDetail->outbound_flight }}</h5>
            <h5>TOTAL :</h5>
        </div>
        <div class="col-6">
            <h5>HOTEL : {{ $tripDetail->hotel }}</h5>
            <h5>CHECK IN : {{ $tripDetail->start_date }}</h5>
            <h5>CHECK OUT : {{ $tripDetail->end_date }}</h5>
            <h5>GUIDE : {{ $tripDetail->guide_name }}</h5>
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
                                <th>ชื่อภาษาไทย</th>
                                <th>ชื่อภาษาอังกฤษ</th>
                                <th>เลข passport</th>
                                <th>วันที่ออก</th>
                                <th>วันหมดอายุ</th>
                                <th>วันเกิด</th>
                                <th>ห้อง</th>
                                <th>หมายเหตุ</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($members as $item)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->fname . ' ' . $item->lname }}</td>
                                    <td>{{ $item->en_fname . ' ' . $item->en_lname }}</td>
                                    <td>{{ $item->passport_name }}</td>
                                    <td>{{ $item->passport_start }}</td>
                                    <td>{{ $item->passport_end }}</td>
                                    <td>{{ $item->birthdate }}</td>
                                    <td>{{ $item->room }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>
                                        <div class="col">
                                            <form action="{{ route('customers.destroy', $item->id) }}" method="post">
                                                @csrf
                                                {{ method_field('delete')}}
                                                <input type="hidden" name="trip_id" value="{{ $item->trip_id }}">
                                                <input type="hidden" name="form" value="formShow">
                                                <button type="submit" class="btn btn-danger">ลบ</button>
                                            </form>
                                        </div>
                                    </td>
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
            <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
            <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
        @endsection
        @section('page-script')
            {{-- Page js files --}}
            <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>
        @endsection
