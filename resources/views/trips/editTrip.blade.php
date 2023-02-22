@extends('layouts/contentLayoutMaster')

@section('title', 'แก้ไขทริป')

@section('vendor-style')
@endsection

@section('page-style')
@endsection

@section('content')

    <section>
        <form action="{{ route('trips.update',$trip->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="first-name-column">โปรแกรม</label>
                                            <input type="text" id="trip_name" name="trip_name" class="form-control"
                                                placeholder="ชื่อโปรแกรม" name="trip_name" value="{{ $trip->trip_name }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="start_date">วันเริ่มทริป</label>
                                            <input type="date" id="start_date" name="start_date" class="form-control"
                                                name="trip_name" value="{{ $trip->start_date }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="end_date">วันจบทริป</label>
                                            <input type="date" id="end_date" name="end_date" class="form-control"
                                                value="{{ $trip->end_date }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="outbound_flight">เที่ยวบินขาไป</label>
                                            <input type="text" id="outbound_flight" class="form-control"
                                                placeholder="เที่ยวบินขาไป" name="outbound_flight"
                                                value="{{ $trip->outbound_flight }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="inbound_flight">เที่ยวบินขากลับ</label>
                                            <input type="text" id="inbound_flight" class="form-control"
                                                placeholder="เที่ยวบินขากลับ" name="inbound_flight"
                                                value="{{ $trip->inbound_flight }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="guide_name">ไกด์</label>
                                            <textarea class="form-control" id="guide_name" name="guide_name" rows="3" placeholder="รายละเอียดเพิ่มเติม">{{ $trip->guide_name }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="hotel">โรงแรม</label>
                                            <textarea class="form-control" id="hotel" name="hotel" rows="3" placeholder="รายละเอียดโรงแรม">{{ $trip->hotel }}</textarea>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-1">ยืนยัน</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>


@endsection

@section('vendor-script')
@endsection

@section('page-script')

@endsection
