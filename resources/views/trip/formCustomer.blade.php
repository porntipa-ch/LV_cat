@extends('layouts/contentLayoutMaster')

@section('title', 'เพิ่มข้อมูลลูกค้า')

@section('vendor-style')
@endsection

@section('page-style')
@endsection

@section('content')

    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <div class="row">
                            <h4 class="text-center mb-2">ข้อมูลทริป</h4>
                            <div class="col-6">
                                <p>
                                    <span class="font-weight-bold">โปรแกรม : {{$tripDetail->trip_name}}</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="font-weight-bold">โรงแรม : {{$tripDetail->hotel}}</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="font-weight-bold">วันเริ่มทริป : {{$tripDetail->start_date}}</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="font-weight-bold">วันจบทริป : {{$tripDetail->end_date}}</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="font-weight-bold">เที่ยวบินขาไป : {{$tripDetail->inbound_flight}}</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="font-weight-bold">เที่ยวบินขากลับ : {{$tripDetail->outbound_flight}}</span>
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="row mb-2 mt-1">
                            <div class="col-10">
                                <input type="text" class="form-control"
                                    placeholder="ค้นหาหมายเลขพาสปอร์ต/หมายเลขบัตรประชาชน" />
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </div>
                        <div class="row">
                            <p class="text-warning">พรทิพา ชนะน้อย <button type="submit"
                                    class="btn btn-primary">เพิ่มลูกค้า</button></p>
                        </div>

                        <div class="border border-2 rounded p-1">
                            <form class="form" action="{{ route('customers.store')}}" method="POST">
                                <input type="text" value="{{$tripDetail->id}}" name="trip_id">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="prefix">คำนำหน้าชื่อ</label>
                                            <select id="prefix" class="form-select" name="prefix">
                                                <option selected hidden>เลือกคำนำหน้า</option>
                                                <option>นาย</option>
                                                <option>นาง</option>
                                                <option>นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="fname">ชื่อ</label>
                                            <input type="text" id="fname" class="form-control"
                                                placeholder="ชื่อภาษาไทย" name="fname" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="lname">นามสกุล</label>
                                            <input type="text" id="lname" class="form-control"
                                                placeholder="นามสกุลภาษาไทย" name="lname" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="en_fname">ชื่อภาษาอังกฤษ</label>
                                            <input type="text" id="en_fname" class="form-control"
                                                placeholder="ชื่อภาษาอังกฤษ" name="en_fname" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="en_lname">นามสกุลภาษาอังกฤษ</label>
                                            <input type="text" id="en_lname" class="form-control"
                                                placeholder="นามสกุลภาษาอังกฤษ" name="en_lname" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for=".birthdate">วันเดือนปีเกิด</label>
                                            <input type="date" id=".birthdate" class="form-control" name="birthdate" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="birth_location">สถานที่เกิด</label>
                                            <input type="text" id="birth_location" class="form-control"
                                                placeholder="สถานที่เกิด" name="birth_location" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label"
                                                for="passport_name">หมายเลขพาสปอร์ต/หมายเลขบัตรประชาชน</label>
                                            <input type="text" id="passport_name" class="form-control"
                                                placeholder="หมายเลขพาสปอร์ต" name="passport_name" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="passport_start">วันที่ออกบัตร</label>
                                            <input type="date" id="passport_start" class="form-control"
                                                name="passport_start" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="passport_end">วันที่บัตรหมดอายุ</label>
                                            <input type="date" id="passport_end" class="form-control"
                                                name="passport_end" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="room">ห้อง</label>
                                            <input type="text" id="room" class="form-control" placeholder="ห้อง"
                                                name="room" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="note">หมายเหตุ</label>
                                            <textarea class="form-control" id="note" rows="3" placeholder="หมายเหตุ" name="note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- add customer -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1 mt-1">เพิ่มลูกค้า</button>
                                </div>
                        </div>

                        <div class="row">
                            <div class="row" id="table-bordered">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h4 class="card-title">รายชื่อลูกค้า</h4>
                                    </div>
                                    <div class="table-responsive">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อภาษาไทย</th>
                                            <th>ชื่อภาษาอังกฤษ</th>
                                            <th>หมายเลขพาสปอร์ต/บัตรประชาชน</th>
                                            <th>วันที่ออก</th>
                                            <th>วันที่หมด</th>
                                            <th>ว/ด/ป เกิด</th>
                                            <th>ห้อง</th>
                                            <th>หมายเหตุ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>พรทิพา ชนะน้อย</td>
                                            <td>Porntipa Chananoi</td>
                                            <td>1234567897458</td>
                                            <td>14/02/2545</td>
                                            <td>52/03/2565</td>
                                            <td>22/211/2543</td>
                                            <td>251</td>
                                            <td>-</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <!-- Button -->
                        <div class="col-12 text-center mt-2">
                            <a href="#" class="btn btn-secondary me-1">กลับ</a>
                            <button type="submit" class="btn btn-success me-1">ตกลง</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('vendor-script')
@endsection

@section('page-script')

@endsection
