@extends('layouts/contentLayoutMaster')

@section('title', 'ใบกำกับภาษี')

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
                            <div class="row">
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
                        <div class="row" style="border-top: 1px solid gray">
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
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('invoicePrint') }}"
                            target="_blank">
                            Print </a>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('app/invoice/edit') }}"> Edit </a>
                        <button class="btn btn-success w-100" data-bs-toggle="modal"
                            data-bs-target="#add-payment-sidebar">
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
