@extends('layouts/contentLayoutMaster')

@section('title', 'สร้างทริป')

@section('vendor-style')
@endsection

@section('page-style')
@endsection

@section('content')

<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">โปรแกรม</label>
                                    <input type="text" id="trip_name" class="form-control" placeholder="ชื่อโปรแกรม" name="trip_name" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="start_date">วันเริ่มทริป</label>
                                    <input type="date" id="start_date" class="form-control" name="trip_name" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="end_date">วันจบทริป</label>
                                    <input type="date" id="end_date" class="form-control" name="trip_name" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="outbound_flight">เที่ยวบินขาไป</label>
                                    <input type="text" id="outbound_flight" class="form-control" placeholder="เที่ยวบินขาไป" name="outbound_flight" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="inbound_flight">เที่ยวบินขากลับ</label>
                                    <input type="text" id="inbound_flight" class="form-control" placeholder="เที่ยวบินขากลับ" name="inbound_flight" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="guide_name">ไกด์</label>
                                    <textarea class="form-control" id="guide_name" rows="3" placeholder="รายละเอียดเพิ่มเติม"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="hotel">โรงแรม</label>
                                    <textarea class="form-control" id="hotel" rows="3" placeholder="รายละเอียดโรงแรม"></textarea>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-1">ถัดไป</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('vendor-script')
@endsection

@section('page-script')

@endsection
