@extends('layouts/contentLayoutMaster')

@section('title', 'Refinance')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/app-invoice.css') }}">
@endsection

@section('content')
    <section class="invoice-edit-wrapper">
        <div class="row invoice-edit">
            <!-- Invoice Edit Left starts -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <!-- Header starts -->
                    <div class="card-body invoice-padding pb-0">
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div>
                                <div class="logo-wrapper">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="50" zoomAndPan="magnify" viewBox="0 0 224.87999 225" height="60"
                                        preserveAspectRatio="xMidYMid meet" version="1.0">
                                        <defs>
                                            <clipPath id="6a7e3ada4a">
                                                <path
                                                    d="M 0 17 L 224.761719 17 L 224.761719 224.9375 L 0 224.9375 Z M 0 17 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                            <clipPath id="d0b013539b">
                                                <path
                                                    d="M 112.441406 242.179688 C 82.421875 242.179688 54.152344 230.496094 32.941406 209.238281 C 11.683594 188.027344 0 159.761719 0 129.742188 C 0 99.722656 11.683594 71.453125 32.941406 50.242188 C 54.152344 28.984375 82.421875 17.300781 112.441406 17.300781 C 142.460938 17.300781 170.726562 28.984375 191.9375 50.242188 C 213.195312 71.5 224.878906 99.722656 224.878906 129.742188 C 224.878906 159.761719 213.195312 188.027344 191.9375 209.238281 C 170.726562 230.496094 142.460938 242.179688 112.441406 242.179688 Z M 112.441406 24.042969 C 84.21875 24.042969 57.65625 35.050781 37.703125 55.003906 C 17.75 74.957031 6.742188 101.519531 6.742188 129.742188 C 6.742188 157.964844 17.75 184.523438 37.703125 204.476562 C 57.65625 224.429688 84.21875 235.441406 112.441406 235.441406 C 140.664062 235.441406 167.222656 224.429688 187.175781 204.476562 C 207.128906 184.523438 218.140625 157.964844 218.140625 129.742188 C 218.140625 101.519531 207.128906 74.957031 187.175781 55.003906 C 167.222656 35.050781 140.664062 24.042969 112.441406 24.042969 Z M 112.441406 24.042969 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                            <clipPath id="d2d632174d">
                                                <path
                                                    d="M 5.402344 24.035156 L 219.816406 24.035156 L 219.816406 224.9375 L 5.402344 224.9375 Z M 5.402344 24.035156 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                            <clipPath id="175d05b357">
                                                <path
                                                    d="M 112.441406 24.035156 C 53.324219 24.035156 5.402344 74.777344 5.402344 137.367188 C 5.402344 199.957031 53.324219 250.699219 112.441406 250.699219 C 171.554688 250.699219 219.476562 199.957031 219.476562 137.367188 C 219.476562 74.777344 171.554688 24.035156 112.441406 24.035156 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                            <clipPath id="922258c289">
                                                <path
                                                    d="M 91.234375 48.464844 L 133.964844 48.464844 L 133.964844 91.191406 L 91.234375 91.191406 Z M 91.234375 48.464844 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                            <clipPath id="2831db8cef">
                                                <path
                                                    d="M 91.023438 98.699219 L 133.640625 98.699219 L 133.640625 194 L 91.023438 194 Z M 91.023438 98.699219 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                            <clipPath id="b1940c88fa">
                                                <path
                                                    d="M 133.640625 173.273438 C 133.640625 184.683594 124.144531 193.933594 112.433594 193.933594 C 100.726562 193.933594 91.230469 184.683594 91.230469 173.273438 L 91.230469 119.359375 C 91.230469 107.949219 100.726562 98.699219 112.433594 98.699219 C 124.144531 98.699219 133.640625 107.949219 133.640625 119.359375 L 133.640625 173.273438 "
                                                    clip-rule="nonzero" />
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#6a7e3ada4a)">
                                            <g clip-path="url(#d0b013539b)">
                                                <path fill="#aba3f5"
                                                    d="M 0 17.300781 L 224.699219 17.300781 L 224.699219 242 L 0 242 Z M 0 17.300781 "
                                                    fill-opacity="1" fill-rule="nonzero" />
                                            </g>
                                        </g>
                                        <g clip-path="url(#d2d632174d)">
                                            <g clip-path="url(#175d05b357)">
                                                <path fill="#ffffff"
                                                    d="M 5.402344 24.035156 L 219.816406 24.035156 L 219.816406 251.441406 L 5.402344 251.441406 Z M 5.402344 24.035156 "
                                                    fill-opacity="1" fill-rule="nonzero" />
                                            </g>
                                        </g>
                                        <g clip-path="url(#922258c289)">
                                            <path fill="#7367f0"
                                                d="M 133.964844 69.828125 C 133.964844 70.527344 133.929688 71.226562 133.859375 71.921875 C 133.792969 72.617188 133.6875 73.308594 133.554688 73.996094 C 133.417969 74.683594 133.246094 75.359375 133.042969 76.03125 C 132.839844 76.699219 132.605469 77.359375 132.335938 78.003906 C 132.070312 78.652344 131.769531 79.28125 131.441406 79.898438 C 131.109375 80.515625 130.75 81.117188 130.363281 81.699219 C 129.972656 82.28125 129.558594 82.839844 129.113281 83.382812 C 128.671875 83.921875 128.199219 84.441406 127.707031 84.933594 C 127.210938 85.429688 126.695312 85.898438 126.152344 86.34375 C 125.613281 86.785156 125.050781 87.203125 124.46875 87.59375 C 123.886719 87.980469 123.289062 88.339844 122.671875 88.667969 C 122.054688 89 121.421875 89.296875 120.773438 89.566406 C 120.128906 89.832031 119.472656 90.070312 118.800781 90.273438 C 118.132812 90.476562 117.453125 90.644531 116.765625 90.78125 C 116.082031 90.917969 115.390625 91.019531 114.695312 91.089844 C 113.996094 91.15625 113.300781 91.191406 112.601562 91.191406 C 111.898438 91.191406 111.203125 91.15625 110.503906 91.089844 C 109.808594 91.019531 109.117188 90.917969 108.433594 90.78125 C 107.746094 90.644531 107.066406 90.476562 106.398438 90.273438 C 105.730469 90.070312 105.070312 89.832031 104.425781 89.566406 C 103.777344 89.296875 103.144531 89 102.527344 88.667969 C 101.910156 88.339844 101.3125 87.980469 100.730469 87.59375 C 100.148438 87.203125 99.585938 86.785156 99.046875 86.34375 C 98.507812 85.898438 97.988281 85.429688 97.492188 84.933594 C 97 84.441406 96.53125 83.921875 96.085938 83.382812 C 95.640625 82.839844 95.226562 82.28125 94.835938 81.699219 C 94.449219 81.117188 94.089844 80.515625 93.757812 79.898438 C 93.429688 79.28125 93.128906 78.652344 92.863281 78.003906 C 92.59375 77.359375 92.359375 76.699219 92.15625 76.03125 C 91.953125 75.359375 91.78125 74.683594 91.648438 73.996094 C 91.511719 73.308594 91.40625 72.617188 91.339844 71.921875 C 91.269531 71.226562 91.234375 70.527344 91.234375 69.828125 C 91.234375 69.128906 91.269531 68.429688 91.339844 67.734375 C 91.40625 67.039062 91.511719 66.347656 91.648438 65.660156 C 91.78125 64.976562 91.953125 64.296875 92.15625 63.628906 C 92.359375 62.957031 92.59375 62.300781 92.863281 61.652344 C 93.128906 61.007812 93.429688 60.375 93.757812 59.757812 C 94.089844 59.140625 94.449219 58.542969 94.835938 57.960938 C 95.226562 57.378906 95.640625 56.816406 96.085938 56.277344 C 96.53125 55.734375 97 55.21875 97.492188 54.722656 C 97.988281 54.226562 98.507812 53.757812 99.046875 53.3125 C 99.585938 52.871094 100.148438 52.453125 100.730469 52.066406 C 101.3125 51.675781 101.910156 51.316406 102.527344 50.988281 C 103.144531 50.65625 103.777344 50.359375 104.425781 50.089844 C 105.070312 49.824219 105.730469 49.589844 106.398438 49.386719 C 107.066406 49.183594 107.746094 49.011719 108.433594 48.875 C 109.117188 48.738281 109.808594 48.636719 110.503906 48.566406 C 111.203125 48.5 111.898438 48.464844 112.601562 48.464844 C 113.300781 48.464844 113.996094 48.5 114.695312 48.566406 C 115.390625 48.636719 116.082031 48.738281 116.765625 48.875 C 117.453125 49.011719 118.132812 49.183594 118.800781 49.386719 C 119.472656 49.589844 120.128906 49.824219 120.773438 50.089844 C 121.421875 50.359375 122.054688 50.65625 122.671875 50.988281 C 123.289062 51.316406 123.886719 51.675781 124.46875 52.066406 C 125.050781 52.453125 125.613281 52.871094 126.152344 53.3125 C 126.695312 53.757812 127.210938 54.226562 127.707031 54.722656 C 128.199219 55.21875 128.671875 55.734375 129.113281 56.277344 C 129.558594 56.816406 129.972656 57.378906 130.363281 57.960938 C 130.75 58.542969 131.109375 59.140625 131.441406 59.757812 C 131.769531 60.375 132.070312 61.007812 132.335938 61.652344 C 132.605469 62.300781 132.839844 62.957031 133.042969 63.628906 C 133.246094 64.296875 133.417969 64.976562 133.554688 65.660156 C 133.6875 66.347656 133.792969 67.039062 133.859375 67.734375 C 133.929688 68.429688 133.964844 69.128906 133.964844 69.828125 Z M 133.964844 69.828125 "
                                                fill-opacity="1" fill-rule="nonzero" />
                                        </g>
                                        <g clip-path="url(#2831db8cef)">
                                            <g clip-path="url(#b1940c88fa)">
                                                <path fill="#7367f0"
                                                    d="M 133.640625 98.699219 L 133.640625 194.257812 L 91.023438 194.257812 L 91.023438 98.699219 Z M 133.640625 98.699219 "
                                                    fill-opacity="1" fill-rule="nonzero" />
                                            </g>
                                        </g>
                                    </svg>

                                    <h3 class="text-primary invoice-logo">Catflow</h3>
                                </div>
                                <p class="card-text mb-25">บริษัท ไอฟินน์ จำกัด (สำนักงานใหญ่)</p>
                                <p class="card-text mb-25">ตำบลสำราญ อำเภอสามชัย จังหวัดกาฬสินธุ์ 46180</p>
                                <p class="card-text mb-0">082-2802000, 082-2809000</p>
                            </div>
                            <div class="invoice-number-date mt-md-0 mt-2">
                                <div class="d-flex align-items-center justify-content-md-end mb-1">
                                    <h4 class="invoice-title">สัญญา</h4>
                                    <div class="input-group input-group-merge invoice-edit-input-group">

                                        <input type="text" class="form-control invoice-edit-input"
                                            value="จำนำ / รีไฟแนนซ์" disabled />
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="title">วันที่:</span>
                                    <input type="text" class="form-control invoice-edit-input date-picker" disabled />
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="title">วันที่สิ้นสุด:</span>
                                    <input type="text" class="form-control invoice-edit-input due-date-picker"
                                        disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header ends -->

                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
                            <div class="col-xl-8 p-0">
                                <h6 class="mb-2">ชื่อ-สกุล (ผู้รับบริการ):</h6>
                                <h6 class="mb-25">{{ $userProfile->prefix }} {{ $userProfile->name }}
                                    {{ $userProfile->surname }}</h6>
                                <p class="card-text mb-25">{{ $userProfile->address }}</p>
                                <p class="card-text mb-25">{{ $userProfile->province }} {{ $userProfile->zipcode }}</p>
                                <p class="card-text mb-25">โทร {{ $userProfile->phone_number }}</p>
                                <p class="card-text mb-25">อีเมล {{ Auth::user()->email }}</p>
                                <p class="card-text mb-25">Line id @if ($userProfile->line_id)
                                        {{ $userProfile->line_id }}
                                    @else
                                        -
                                    @endif
                                </p>
                                <p class="card-text mb-0">Facebook @if ($userProfile->facebook)
                                        {{ $userProfile->facebook }}
                                    @else
                                        -
                                    @endif
                                </p>


                            </div>
                            <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                <h6 class="mb-2">อาชีพ - รายได้:</h6>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pe-1">อาชีพ:</td>
                                            <td>{{ $userProfile->career }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">รายได้:</td>
                                            <td>{{ $userProfile->income }} บาท/เดือน</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">อายุ:</td>
                                            <td>{{ $userProfile->age }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Address and Contact ends -->

                    <!-- Product Details starts -->
                    <div class="card-body invoice-padding invoice-product-details">
                        <form class="source-item">
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="name">รุ่น iPhone</label>
                                    <select name="product_id" id="product_select" class="form-control">
                                        <option value="">เลือกรุ่นของ iPhone</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->product_model }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="surname">ราคาสูงสุด</label>
                                    <input type="range" min="0" max="10000" step="100" value="0" id="max_price_range">
                                    <input type="text" name="max_price" class="form-control" id="price_input"
                                        value="{{ old('max_price') }}">

                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="name">ตกลง จำนำ / รีไฟแนนซ์</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="สินค้า" required />
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="surname">เลขประจำเครื่อง</label>
                                    <input type="text" name="surname" id="surname" class="form-control"
                                        placeholder="เลขประจำเครื่อง" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="name">ยอดจำนำ / รีไฟแนนซ์</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="ยอดเงิน" required />
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="name">ยอดจำนำ / รีไฟแนนซ์</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="ยอดเงิน" required />
                                </div>

                            </div>


                        </form>
                    </div>
                    <!-- Product Details ends -->

                    <!-- Invoice Total starts -->
                    {{--  <div class="card-body invoice-padding">
          <div class="row invoice-sales-total-wrapper">
            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
              <div class="d-flex align-items-center mb-1">
                <label for="salesperson" class="form-label">Salesperson:</label>
                <input type="text" class="form-control ms-50" id="salesperson" placeholder="Edward Crowley" />
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
              <div class="invoice-total-wrapper">
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Subtotal:</p>
                  <p class="invoice-total-amount">$1800</p>
                </div>
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Discount:</p>
                  <p class="invoice-total-amount">$28</p>
                </div>
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Tax:</p>
                  <p class="invoice-total-amount">21%</p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total:</p>
                  <p class="invoice-total-amount">$1690</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
                    <!-- Invoice Total ends -->

                    <hr class="invoice-spacing mt-0" />

                    <div class="card-body invoice-padding py-0">
                        <!-- Invoice Note starts -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="note" class="form-label fw-bold">Note:</label>
                                    <p class="form-control" rows="4" id="note">
                                        ข้าพเจ้า {{ $userProfile->prefix }} {{ $userProfile->name }}
                                        {{ $userProfile->surname }} ได้ตกลงไว้ว่า จะชำระให้ครบตามกำหนดดังกล่าว
                                        หากข้าพเจ้าไม่ทำตามสัญญาเงื่อนไขที่ตกลงไว้ให้
                                        ผู้ขาย/ผู้รับจำนำ/ผู้รับรีไฟแนนซ์ ยึดทรัพย์สิน มีค่าของข้าพเจ้า และนำไปขาย
                                        ทอดตลาดและแปลสภาพมาชำระแทนเงินสดในส่วนที่ค้างเอาไว้ จนหมดยอด
                                        ที่ค้างชำระไว้ต่อกัน และข้าพเจ้ายินยอมให้ประจานข้าพเจ้าทางโซเชียลได้เลย
                                        โดยไม่ยึดกฎหมาย พรบ.คอมฯ และข้าพเจ้ายินยอมดำเนินคดีในข้อหาฉ้อโกง
                                        และข้อหายัดยอกทรัพย์ ข้าเจ้ายินยอมรับผิดและยอมให้เอาผิด
                                        ดำเนินการตามกฏหมายให้ถึงที่สุด หากไม่ส่งให้ครบตามกำหนดและหนีหายไป ให้
                                        ................................................................
                                        ผู้มีสถานภาพเป็นผู้ค้ำประกัน
                                        จะรับผิดชอบแทนทุกอย่างและข้าพเจ้าอนุญาตให้ยึดทรัพย์สมบัติของมีค่าทุกชิ้นของข้าพเจ้าและผู้ค้ำได้เท่ายอดที่ค้างไว้ต่อกัน
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Invoice Note ends -->
                    </div>
                    <hr class="invoice-spacing mt-0" />
                    {{-- <div class="card-body invoice-padding py-0">
                        <!-- Invoice Note starts -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="note" class="form-label fw-bold">เอกสารประกอบ:</label>
                                    <div class="row mb-2">

                                        <div class="col-6 border border-red-500 border-solid text-center">
                                            <p>รูปบัตรประชาชนด้านหน้า</p>
                                            <img class="w-50"
                                                src="{{ asset('storage/' . $userProfile->file_link_id_card_front) }}"
                                                alt="sss">
                                        </div>
                                        <div class="col-6 border border-red-500 border-solid text-center">
                                            <p>รูปบัตรประชาชนด้านหลัง</p>
                                            <img class="w-50"
                                                src="{{ asset('storage/' . $userProfile->file_link_id_card_back) }}"
                                                alt="sss">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-6  border border-red-500 border-solid text-center">
                                            <p>รูปถือบัตรประชาชน</p>
                                            <img class="w-50"
                                                src="{{ asset('storage/' . $userProfile->file_link_id_card_hold) }}"
                                                alt="sss">
                                        </div>
                                        <div class="col-6 border border-red-500 border-solid text-center">
                                            <p>เลข IMEI / Serial No.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Invoice Note ends -->
                    </div> --}}
                </div>
            </div>
            <!-- Invoice Edit Left ends -->

            <!-- Invoice Edit Right starts -->
            <div class="col-xl-3 col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal"
                            data-bs-target="#send-invoice-sidebar">
                            Send Invoice
                        </button>
                        <a href="{{ url('app/invoice/preview') }}"
                            class="btn btn-outline-primary w-100 mb-75">Preview</a>
                        <button type="button" class="btn btn-outline-primary w-100 mb-75">Save</button>
                        <button class="btn btn-success w-100 mb-75" data-bs-toggle="modal"
                            data-bs-target="#add-payment-sidebar">
                            Add Payment
                        </button>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="mb-50">Accept payments via</p>
                    <select class="form-select">
                        <option value="Bank Account">Bank Account</option>
                        <option value="Paypal">Paypal</option>
                        <option value="UPI Transfer">UPI Transfer</option>
                    </select>
                    <div class="invoice-terms mt-1">
                        <div class="d-flex justify-content-between">
                            <label class="invoice-terms-title mb-0" for="paymentTerms">Payment Terms</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" checked id="paymentTerms" />
                                <label class="form-check-label" for="paymentTerms"></label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between py-1">
                            <label class="invoice-terms-title mb-0" for="clientNotes">Client Notes</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" checked id="clientNotes" />
                                <label class="form-check-label" for="clientNotes"></label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label class="invoice-terms-title mb-0" for="paymentStub">Payment Stub</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="paymentStub" />
                                <label class="form-check-label" for="paymentStub"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice Edit Right ends -->
        </div>

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
                                <input type="text" class="form-control" id="invoice-from"
                                    value="shelbyComapny@email.com" placeholder="company@email.com" />
                            </div>
                            <div class="mb-1">
                                <label for="invoice-to" class="form-label">To</label>
                                <input type="text" class="form-control" id="invoice-to"
                                    value="qConsolidated@email.com" placeholder="company@email.com" />
                            </div>
                            <div class="mb-1">
                                <label for="invoice-subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="invoice-subject"
                                    value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                            </div>
                            <div class="mb-1">
                                <label for="invoice-message" class="form-label">Message</label>
                                <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11">
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
          <h5 class="modal-title">
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
    </section>
@endsection

@section('vendor-script')
    <script src="{{ asset('vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>

@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/app-invoice.js') }}"></script>
    <script>
        document.getElementById('product_select').addEventListener('change', function () {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Set the callback function to handle the response
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the price input field with the retrieved max_price
                    var response = JSON.parse(xhr.responseText);
                    document.getElementById('price_input').value = response.max_price;
                }
            };

            // Send the request to the server
            xhr.open('GET', '/products/' + this.value + '/price', true);
            xhr.send();
        });
    </script>
@endsection
