@extends('layouts/contentLayoutMaster')

@section('title', 'ใบเสนอราคา')

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
                            <table class="table-bordered text-center" style="border:solid 1px black">
                                <thead>
                                    <th>NO.<br>ลำดับ</th>
                                    <th>DESCRIPTION<br>รายการ</th>
                                    <th>QUANTITY<br>จำนวน</th>
                                    <th>UNIT PRICE<br>ราคาต่อหน่วย</th>
                                    <th>Amount(BAHT)<br>จำนวนเงิน</th>
                                    <th colspan="2"></th>
                                </thead>
                                <tbody id="item-container">

                                    <tr class="item-row">
                                        <td class="item-count"></td>
                                        <td>
                                            <input type="text" class="form-control item-description"
                                                placeholder="รายการ">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control item-quantity" placeholder="จำนวน">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control item-price"
                                                placeholder="ราคาต่อหน่วย">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control item-amount" placeholder="จำนวนเงิน">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm delete-item">ลบ</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="6">
                                            <div>
                                                <div class="px-1 py-1"
                                                    style="display: flex;justify-content: right; flex-wrap: nowrap;width: 100%;">
                                                    <button type="button" class="btn btn-primary btn-sm btn-add-new">
                                                        <i data-feather="plus" class="me-25"></i>
                                                        <span class="align-middle">Add Item</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
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
                                                สามารถใช้คูปองส่วนลดเราเที่ยวด้วยกันได้ ราคานี้ไม่รวม VAT7%
                                            </p>
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
                                <div class="row" style="border:solid 1px black">
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
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('quotationPrint') }}" target="_blank">
                            Print </a>
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

We would appreciate payment of this invoice by 05/11/2019</textarea>
                        </div>
                        <div class="mb-1">
                            <span class="badge badge-light-primary">
                                <i data-feather="link" class="me-25"></i>
                                <span class="align-middle">Invoice Attached</span>
                            </span>
                        </div>
                        <div class="mb-1 d-flex flex-wrap mt-2">
                            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
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
                            <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00"
                                disabled />
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
    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            // Add event listener for the "Add Item" button
            $('.btn-add-new').click(function() {
                var template = $('#item-container').find('.item-row').first().clone();
                var rowCount = $('#item-container').find('.item-row').length;

                template.find('.item-count').text(rowCount + 1);
                template.find('.item-description').val('');
                template.find('.item-quantity').val('');
                template.find('.item-price').val('');
                template.find('.item-amount').val('');

                $(this).closest('tr').before(template);

                // Update item count for all rows
                var rows = $('#item-container').find('.item-row');
                for (var i = 0; i < rows.length; i++) {
                    $(rows[i]).find('.item-count').text(i + 1);
                }

                // Re-enable "Delete" button for all rows
                $('.delete-item').prop('disabled', false);
            });

            // Add event listener for the "Delete" button
            $(document).on('click', '.delete-item', function() {
                if ($('#item-container').find('.item-row').length === 1) {
                    // Disable "Delete" button if there is only one row
                    $(this).prop('disabled', true);
                } else {
                    $(this).closest('.item-row').remove();

                    // Renumber the item count
                    var rows = $('#item-container').find('.item-row');
                    for (var i = 0; i < rows.length; i++) {
                        $(rows[i]).find('.item-count').text(i + 1);
                    }
                }
            });
        });
    </script>

@endsection
