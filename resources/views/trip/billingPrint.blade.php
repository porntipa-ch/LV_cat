@extends('layouts/fullLayoutMaster')

@section('title', 'ใบแจ้งหนี้')

@section('page-style')
<link rel="stylesheet" href="{{asset(mix('css/base/pages/app-invoice-print.css'))}}">
@endsection

@section('content')
<div class="row invoice-preview">
    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12">
        <div class="card invoice-preview-card">
            <div class="card-body invoice-padding pb-0 mb-1" style="border-bottom: solid 1px black">
                <!-- Header starts -->
                <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                    <div>
                        <h3 class="card-text mb-25">ศรีดารา ทัวร์</h3>
                        <p>123 ถนน ชยางกูร ตรอก/ซอย-ตำบล/แขวง บุ่ง อำเภอ/เขต เมืองอำนาจเจริญ จังหวัด อำนาจเจริญ
                            37000</p>
                        <p>โทร. 0801615100</p>
                    </div>
                </div>
                <!-- Header ends -->
            </div>


            <!-- Address and Contact starts -->
            <div class="card-body invoice-padding pt-0">
                <h1 class="mb-2">ใบแจ้งชำระเงินค่ามัดจำ <span class="fs-5"> Deposit Invoice</span></h1>
                <div class="row">
                    <div class="col-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th
                                        style="background-color: rgb(233, 243, 254);padding:5px;border:3px solid rgb(255, 255, 255);text-align:right">
                                        <p>ผู้สั่งซื้อ :</p>
                                        <p>Buyer</p>
                                    </th>
                                    <td
                                        style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(255, 255, 255);">
                                        <p>คุณศรีดารา บุตตะ</p>
                                        <p>Tel. 0801615100,Email. sridaratour@yahoo.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        style="background-color: rgb(233, 243, 254);padding:5px;border:3px solid rgb(255, 255, 255);text-align:right">
                                        <p>ชื่อโปรแกรม :</p>
                                        <p>Program Name</p>
                                    </th>
                                    <td
                                        style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(255, 255, 255);">
                                        <p>Beautiful Tokyo Nikko Sakura 6D 4N โดยสายการบินไทย(TG)</p>
                                        <p>TG024</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        style="background-color: rgb(233, 243, 254);padding:5px;border:3px solid rgb(255, 255, 255);text-align:right">
                                        <p>รายละเอียด :</p>
                                        <p>Detail</p>
                                    </th>
                                    <td
                                        style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(255, 255, 255);">
                                        <p><b>รหัสกลุ่ม (GROUP CODE) : </b>GQ2NRTTG230325A</p>
                                        <p><b>วันเดินทาง (TRAVEL DATE) : </b>25 มี.ค. 2566 ถึง 30 มี.ค. 2566</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-4"  style="border: solid 1px black">
                        <div class="col-12 text-center">
                            <p>กำหนดชำระเงิน</p>
                            <p>(Payment due date):</p>
                        </div>
                        <div class="col-12 text-center"
                            style="background-color: rgb(246, 246, 246);padding:5px;border-bottom:3px solid rgb(255, 255, 255);">
                            <h1>01/02/2023</h1>
                            <h1>23:32</h1>
                            <p>ยอดที่ต้องชำระ</p>
                            <p>(ภายใน <span class="text-danger">36</span> ชั่วโมง)</p>
                        </div>
                        <div class="col-12 text-center"
                            style="background-color: rgb(246, 246, 246);padding:5px;border-bottom:3px solid rgb(255, 255, 255);">
                            <p><b>รหัสการจอง(BOOKING CODE) :</b></p>
                            <p>BK2023000098002</p>
                        </div>
                        <div class="col-12 text-center"
                            style="background-color: rgb(246, 246, 246);padding:5px;border-bottom:3px solid rgb(255, 255, 255);">
                            <p><b>วันที่จอง(Date Rese) :</b></p>
                            <p>31/01/2023 11:34:02</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-1"  style="border-top: solid 1px black">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr
                                style="background-color: rgb(233, 243, 254);padding:5px;border:3px solid rgb(255, 255, 255);text-align:right">
                                <th>ลำดับ<br>NO.</th>
                                <th>รายละเอียด<br>DETAIL</th>
                                <th>จำนวน<br>QUANTITY</th>
                                <th>ราคาต่อหน่วย<br>UNIT PRICE</th>
                                <th>ราคารวม<br>TOTAL PRICE</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>ผู้ใหญ่ 2 ท่านพัก 1 ห้อง ราคาท่านละ</td>
                                <td>4</td>
                                <td>53,900</td>
                                <td>215,600</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-1">
                    <div class="col-8">
                        <p style="background-color: rgb(246, 246, 246);padding:5px;"><b>หมายเหตุ
                                :</b>กรุณาชำระเงินภายในเวลาที่กำหนด นับจากวันที่ท่านได้ทำการจอง
                            ถ้าชำระไม่ตรงกำหนด ระบบจะทำการตัดที่นั่งโดยอัตโนมัติ</p>
                    </div>
                    <div class="col-4">
                        <table class="table-borderless">
                            <tbody style="text-align: right">
                                <tr>
                                    <td>รวมเงิน</td>
                                    <td style="padding-left: 30px">269,500.00</td>
                                </tr>
                                <tr>
                                    <td>รวมยอดหลังหักส่วนลด</td>
                                    <td>269,500.00</td>
                                </tr>
                                <tr>
                                    <td>หัดเงินมัดจำ</td>
                                    <td>100,00.00</td>
                                </tr>
                                <tr>
                                    <td>รวมเงินทั้งสิ้น</td>
                                    <td>169,500.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-1 text-center"
                    style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(255, 255, 255);text-align:right">
                    <div class="col-6">
                        <h6>ข้อมูลการจ่ายเงิน</h6>
                        <h6>Payment Information</h6>
                    </div>
                    <div class="col-6">
                        <h6>ยอดที่ต้องชำระ(ภายใน 36 ชั่วโมง)</h6>
                        <h6>Pay(WITHIN 36 HOURS)</h6>
                    </div>
                </div>
                <div class="row text-center"
                    style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(255, 255, 255);text-align:right">
                    <div class="col-6">
                        <h1>เงินมัดจำ</h1>
                    </div>
                    <div class="col-6">
                        <h1 class="text-danger">100,000.00</h1>
                    </div>
                </div>
                <div class="row mt-1">
                    <table class="table text-center">
                        <thead>
                            <th style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(227, 227, 227);">
                                พนักงานขาย<br>Salesman
                            </th>
                            <th style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(227, 227, 227);">
                                ผู้รับเงิน<br>Collector
                            </th>
                            <th style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(227, 227, 227);">
                                ผู้ตรวจสอบ<br>Auditor
                            </th>
                            <th style="background-color: rgb(246, 246, 246);padding:5px;border:3px solid rgb(227, 227, 227);">
                                ผู้อนุมัติ<br>Approver
                            </th>
                        </thead>
                        <tbody>
                            <td style="padding:20px;border:3px solid rgb(227, 227, 227);"> </td>
                            <td style="padding:20px;border:3px solid rgb(227, 227, 227);"> </td>
                            <td style="padding:20px;border:3px solid rgb(227, 227, 227);"> </td>
                            <td style="padding:20px;border:3px solid rgb(227, 227, 227);"> </td>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoice -->
</div>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice-print.js')}}"></script>
@endsection
