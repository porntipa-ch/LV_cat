@extends('layouts/contentLayoutMaster')

@section('title', 'ใบแจ้งหนี้')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/app-invoice.css') }}">
@endsection

@section('content')
    <section class="invoice-preview-wrapper">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
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

                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    <div class="card-body invoice-padding pt-0">
                        <h1 class="mb-2">ใบแจ้งชำระเงินค่ามัดจำ <span class="fs-5"> Deposit Invoice</span></h1>
                        <div class="row">
                            <div class="col-9">
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
                            <div class="col-3">
                                <div class="col-12 text-center" style="background-color: rgb(224, 224, 224);padding:5px">
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
                        <div class="row mt-1">
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

            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal"
                            data-bs-target="#send-invoice-sidebar">
                            Send Invoice
                        </button>
                        <button class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</button>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('billingPrint') }}"
                            target="_blank"> Print </a>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('app/invoice/edit') }}"> Edit </a>
                        <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                            Add Payment
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>
    </section>

    <!-- Send Invoice Sidebar -->
    <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
        <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title">
                        <span class="align-middle">Send Invoice</span>
                    </h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <form>
                        <div class="mb-1">
                            <label for="invoice-from" class="form-label">From</label>
                            <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com"
                                placeholder="company@email.com" />
                        </div>
                        <div class="mb-1">
                            <label for="invoice-to" class="form-label">To</label>
                            <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com"
                                placeholder="company@email.com" />
                        </div>
                        <div class="mb-1">
                            <label for="invoice-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="invoice-subject"
                                value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                        </div>
                        <div class="mb-1">
                            <label for="invoice-message" class="form-label">Message</label>
                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11"
                                placeholder="Message...">
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of $95.59

We would appreciate payment of this invoice by 05/11/2019</textarea
            >
          </div>
          <div class="mb-1">
            <span class="badge badge-light-primary">
              <i data-feather="link" class="me-25"></i>
              <span class="align-middle">Invoice Attached</span>
            </span>
          </div>
          <div class="mb-1 d-flex flex-wrap mt-2">
            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Send Invoice Sidebar -->

<!-- Add Payment Sidebar -->
<div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title"></h5>
          <span class="align-middle">Add Payment</span>
        </h5>
      </div>
      <div class="modal-body flex-grow-1">
        <form>
          <div class="mb-1">
            <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
          </div>
          <div class="mb-1">
            <label class="form-label" for="amount">Payment Amount</label>
            <input id="amount" class="form-control" type="number" placeholder="$1000" />
          </div>
          <div class="mb-1">
            <label class="form-label" for="payment-date">Payment Date</label>
            <input id="payment-date" class="form-control date-picker" type="text" />
          </div>
          <div class="mb-1">
            <label class="form-label" for="payment-method">Payment Method</label>
            <select class="form-select" id="payment-method">
              <option value="" selected disabled>Select payment method</option>
              <option value="Cash">Cash</option>
              <option value="Bank Transfer">Bank Transfer</option>
              <option value="Debit">Debit</option>
              <option value="Credit">Credit</option>
              <option value="Paypal">Paypal</option>
            </select>
          </div>
          <div class="mb-1">
            <label class="form-label" for="payment-note">Internal Payment Note</label>
            <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                        </div>
                        <div class="d-flex flex-wrap mb-0">
                            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Payment Sidebar -->
@endsection

@section('vendor-script')
    <script src="{{ asset('vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/app-invoice.js') }}"></script>
@endsection
