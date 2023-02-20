@extends('layouts/fullLayoutMaster')

@section('title', 'ใบกำกับภาษี')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-print.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/app-invoice.css') }}">
@endsection

@section('content')
    <div class="row invoice-preview">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-text mb-25">ห้างหุ้นส่วนจำกัด นิลผกา</h3>
                                    <p>49/175 ม.5 ต.หนองบัว อ.เมืองอุดรธานี จ.อุดรธานี 41000</p>
                                    <p>โทร. 063-2452369 E-mail : Chamapeet@gmail.com</p>
                                    <p><b>เลขประจำตัวผู้เสียภาษี</b>: 0413558001156</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                        <div class="row" style="border:solid 1px black">
                            <div class="col-8 p-1" style="border-right:solid 1px black">
                                <h6>ชื่อลูกค้า / CUSTOMER : เจ้าคุณทัวร์</h6>
                                <h6>เบอร์โทร / TEL.:098-096-1787 (คุณบีม)</h6>
                                <h6>ที่อยู่ / Address</h6>
                                <h6>เลขประจำตัวผู้เสียภาษี TAX ID : </h6>
                            </div>
                            <div class="col-4 p-1">
                                <div class="row">
                                    <div class="col-6">
                                        <h6>เลขที่ / NO</h6>
                                        <h6>วันที่ / DATE</h6>
                                        <h6>อ้างอิง / REF.</h6>
                                        <h6>พนักงานขาย / SALE</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6>: 0918518</h6>
                                        <h6>: 27 ธ.ค. 2022</h6>
                                        <h6>: AR_09185</h6>
                                        <h6>: AKIRA</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <table class="table-bordered text-center" style="border:solid 1px black;">
                                <thead>
                                    <th>NO.<br>ลำดับ</th>
                                    <th></th>DESCRIPTION<br>รายการ</th>
                                    <th>QUANTITY<br>จำนวน</th>
                                    <th>UNIT PRICE<br>ราคาต่อหน่วย</th>
                                    <th>Amount(BAHT)<br>จำนวนเงิน</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <p>ค่าเช่าเหมารถทัวร์
                                            </p>
                                        </td>
                                        <td>3 วัน</td>
                                        <td>18,000</td>
                                        <td>54,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>รวมเป็นเงิน</td>
                                        <td>54,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <p><span
                                                    class="text-danger">*หมายเหตุ*</span>อัตราค่าบริการนี้ไม่รวมค่าใช้จ่ายที่เกิดขึ้นเพิ่มเติมนอกเหนือข้อตกลงที่คุยกันไว้
                                                สามารถใช้คูปองส่วนลดเราเที่ยวด้วยกันได้ ราคานี้ไม่รวม VAT7%</p>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>ตัวอักษร</td>
                                        <td colspan="3">ห้าหมื่นสี่พันบาทถ้วน</td>
                                        <td>54,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row my-2">
                            <div class="col-6 text-center">
                                <div class="row"style="border:solid 1px black">
                                    <div class="col-12 m-2">
                                        <p>.......................</p>
                                        <p>(นาย พิษณุ บุญลี)</p>
                                        <h6>Manager</h6>
                                        <p>( DATE 27/12/2565 )</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="row" style="border:solid 1px black">
                                    <div class="col-12 m-2">
                                        <p>.......................</p>
                                        <p>(.............................)</p>
                                        <h6>Manager</h6>
                                        <p>( DATE ...../...../.....)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Invoice -->
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset('vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/app-invoice-print.js') }}"></script>
    <script src="{{ asset('js/scripts/pages/app-invoice.js') }}"></script>
@endsection
