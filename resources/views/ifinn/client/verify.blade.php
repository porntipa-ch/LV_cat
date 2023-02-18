@extends('layouts/contentLayoutMaster')

@section('title', 'ยืนยันตัวตน')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection

@section('content')
    <!-- Horizontal Wizard -->

    <section class="input-mask-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">ข้อมูลทั่วไป</h5>
                        <small class="text-muted">กรุณากรอกรายละเอียดให้ครบ.</small>
                    </div>
                    <form action="{{ route('postverify') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="prefix">คำนำหน้านาม</label>
                                    <br>
                                    {{-- <img src="{{ asset('storage/file_link_id_card_front/tY4wNqsZWjiDA76JGKUGlypRWHzKl6KCTwGbDqxx.jpg') }}" alt="sss"> --}}

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prefix" id="inlineRadio1"
                                            value="นาย" checked />
                                        <label class="form-check-label" for="inlineRadio1">นาย</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prefix" id="inlineRadio2"
                                            value="นาง" />
                                        <label class="form-check-label" for="inlineRadio2">นาง</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prefix" id="inlineRadio3"
                                            value="นางสาว" />
                                        <label class="form-check-label" for="inlineRadio3">นางสาว</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="name">ชื่อ</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="johndoe" required />
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="surname">นามสกุล</label>
                                    <input type="text" name="surname" id="surname" class="form-control"
                                        placeholder="johndoe" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="gender">เพศ</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender1"
                                            value="ชาย" checked />
                                        <label class="form-check-label" for="gender1">ชาย</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender2"
                                            value="หญิง" />
                                        <label class="form-check-label" for="gender2">หญิง</label>
                                    </div>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="birthdate">วันเกิด</label>
                                    <input type="text" id="birthdate" name="birthdate"
                                        class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="age">อายุ (ปี)</label>
                                        <input type="text" name="age" id="age" class="form-control"
                                            disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="address">ที่อยู่</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="ที่อยู่" required />
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="province">จังหวัด</label>
                                    <select class="form-select" name="province" id="basicSelect" required>
                                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                    </select>
                                </div>

                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="zipcode">รหัสไปรษณีย์</label>
                                    <input type="number" name="zipcode" id="zipcode" class="form-control"
                                        placeholder="รหัสไปรษณีย์" required />
                                </div>
                            </div>

                                <h5 class="mb-2 mt-1">ข้อมูลรายได้</h5>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="career">อาชีพ</label>
                                        <input type="text" name="career" id="career" class="form-control"
                                            placeholder="อาชีพ" required />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="income">รายได้ต่อเดือน</label>
                                        <input type="number" name="income" id="income" class="form-control"
                                            placeholder="รายได้ต่อเดือน" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="phone_number">โทรศัพท์</label>
                                        <input type="number" name="phone_number" id="phone_number" class="form-control"
                                            placeholder="หมายเลขโทรศัพท์" required />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="line_id">Line ID</label>
                                        <input type="text" name="line_id" id="line_id" class="form-control"
                                            placeholder="Line ID" required />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="facebook">Facebook</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control"
                                            placeholder="Facebook" required />
                                    </div>
                                </div>
                                <h5 class="mb-2 mt-1">ภาพถ่าย</h5>

                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="file_link_id_card_front">รูปถ่ายด้านหน้าบัตรประชาชน</label>
                                    <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" name="file_link_id_card_front" id="file_link_id_card_front" required/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="file_link_id_card_back">รูปถ่ายด้านหลังบัตรประชาชน</label>
                                    <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" name="file_link_id_card_back" id="file_link_id_card_back" required />
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="file_link_id_card_hold">รูปถ่ายคู่บัตรประชาชน</label>
                                    <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" name="file_link_id_card_hold" id="file_link_id_card_hold" required/>
                                </div>

                                    <input type="hidden" name="user_id" id="user_id" class="form-control"
                                        placeholder="user_id" value="{{ Auth::user()->id }}" />

                            <div class="d-flex justify-content-between">

                                <button class="btn btn-primary btn-next" type="submit">
                                    <span class="align-middle d-sm-inline-block d-none">บันทึก</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->

@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
    <script>
        // Initialize date picker


        // Calculate age from birthdate
        $('#birthdate').change(function() {
            var birthdate = $(this).val();
            var age = calculateAge(birthdate);
            $('#age').val(age);
        });

        function calculateAge(birthday) {
            var ageDifMs = Date.now() - new Date(birthday).getTime();
            var ageDate = new Date(ageDifMs);
            return Math.abs(ageDate.getUTCFullYear() - 1970);
        }
    </script>
@endsection
