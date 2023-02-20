@extends('layouts/fullLayoutMaster')

@section('title', 'ใบกำกับภาษี')

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-print.css')) }}">
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
                            <div class="row" style="border-bottom: 1px solid gray">
                                <div class="col-6">
                                    <p>บริษัท ศรีดาราทัวร์ จำกัด (สำนักงานใหญ่)</p>
                                    <p>123 ถนน ชยางกูร ตรอก/ซอย-ตำบล/แขวง บุ่ง อำเภอ/เขต เมืองอำนาจเจริญ จังหวัด อำนาจเจริญ
                                        37000</p>
                                    <p>เบอร์มือถือ 0823656514</p>
                                    <p>www.facebook/sridaratourfanpage</p>
                                    <br>
                                    <p class="text-info">ลูกค้า</p>
                                    <p>ธนาคารออมสินภาค 12 (สำนักงานใหญ่)</p>
                                    <p>343 ชั้น 3 หมู่ 9 ตำบลโนนผึ้ง อำเภอวารินชำราบ จังหวัดอุบลราชธานี 34190</p>
                                    <p>เลขประจำตัวผู้เสียภาษี 0994000164891</p>
                                </div>
                                <div class="col-6">
                                    <h1 class="text-info text-center">ใบกำกับภาษี/ใบเสร็จรับเงิน</h1>
                                    <p class="text-info text-center">ต้นฉบับ (เอกสารออกเป็นชุด)</p>
                                    <div class="row" style="border-top:solid 1px grey; padding:10px">
                                        <div class="col-4">
                                            <p class="text-info text-left">เลขที่</p>
                                            <p class="text-info text-left">วันที่</p>
                                            <p class="text-info text-left">ผู้ขาย</p>
                                        </div>
                                        <div class="col-8">
                                            <p>INV202301001</p>
                                            <p>31/01/2023</p>
                                            <p>Sasithorn Butta</p>
                                        </div>
                                    </div>
                                    <div class="row" style="border-top:solid 1px grey; padding:10px">
                                        <div class="col-4">
                                            <p class="text-info text-left">ชื่องาน</p>
                                            <p class="text-info text-left">ผู้ติดต่อ</p>
                                            <p class="text-info text-left">เบอร์โทร</p>
                                        </div>
                                        <div class="col-8">
                                            <p>ตั๋วเครื่องบินในประเทศ</p>
                                            <p>สำนักงานภาค</p>
                                            <p>045424262</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <th scope="col">#</th>
                                    <th scope="col">รายละเอียด</th>
                                    <th scope="col">จำนวน</th>
                                    <th scope="col">ราคาต่อหน่วย</th>
                                    <th scope="col">ส่วนลด</th>
                                    <th scope="col">ภาษี</th>
                                    <th scope="col">มูลค่า</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ค่าตั๋วเครื่องบิน สายการบินแอร์นกแอร์ </td>
                                        <td>1</td>
                                        <td>2,250.00</td>
                                        <td></td>
                                        <td>7%</td>
                                        <td>2,250.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ภาษีสนามบิน AIRPORT TAX</td>
                                        <td>1</td>
                                        <td>50</td>
                                        <td></td>
                                        <td>0%</td>
                                        <td>2,300.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row" style="border-top: solid 1px grey;padding-top:20px">
                            <div class="col-3"></div>
                            <div class="col-3"></div>
                            <div class="col-3" style="text-align: right">
                                <p class="text-info">รวมเป็นเงิน</p>
                                <p class="text-info">มูลค่าที่ไม่มี/ยกเว้นภาษี</p>
                                <p class="text-info">มูลค่าที่คำนวณภาษี</p>
                                <p class="text-info">ภาษีมูลค่าเพิ่ม 7%</p>
                                <p class="text-info">จำนวนเงินรวมทั้งสิ้น</p>
                            </div>
                            <div class="col-3" style="text-align: right">
                                <p>4600.00 บาท</p>
                                <p>150.00 บาท</p>
                                <p>4158.87 บาท</p>
                                <p>291.13 บาท</p>
                                <p>4,600.00 บาท</p>

                            </div>
                        </div>
                        <div class="row">
                            <p>(สี่พันหกร้อยบาทถ้วน)</p>
                        </div>
                        <div class="row" style="border-top: solid 1px grey;padding-top:20px">
                            <div class="col-4">
                                <p>การชำระเงินจะสมบูรณ์เมื่อบริษัทได้รับเงินเรียบร้อยแล้ว</p>
                            </div>
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        เงินสด
                                    </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        เช็ค
                                    </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        โอนเงิน
                                    </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        บัตรเครดิต
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p>ธนาคาร.............................................เลขที่............................................วันที่..........................................จำนวนเงิน..................................
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6" style="text-align: left">
                                <p>ในนาม ธนาคารออมสินภาค 12</p>
                            </div>
                            <div class="col-6" style="text-align: right">
                                <p>ในนาม บริษัท ศรีดาราทัวร์ จำกัด</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <hr>
                                <p class="text-center">ผู้จ่ายเงิน</p>
                            </div>
                            <div class="col-3">
                                <hr>
                                <p class="text-center">วันที่</p>
                            </div>
                            <div class="col-3">
                                <hr>
                                <p class="text-center">ผู้รับเงิน</p>
                            </div>
                            <div class="col-3">
                                <hr>
                                <p class="text-center">วันที่</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Invoice -->
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/app-invoice-print.js') }}"></script>
@endsection
