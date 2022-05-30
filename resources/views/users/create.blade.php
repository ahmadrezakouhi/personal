@extends('layouts.main')
@section('title','کاربر جدید')
@section('content')

    <div class="container mt-5">
        <div class="card my-3 shadow">
            <div class="card-header">
<h2 class="persian">کاربر جدید</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                <div class="row my-3">
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label persian">نام</label>
                            <input type="text" class="form-control persian" id="name"  >
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="last_name" class="form-label persian">نام خانوادگی</label>
                            <input type="text" class="form-control persian" id="last_name"  >
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="phone" class="form-label persian">شماره تماس</label>
                            <input type="text" class="form-control persian" id="phone"  >
                          </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 my-3">
                            <div class="persian mb-3">
                                جنسیت
                            </div>
                            <input type="radio" class="form-check-input " id="man" name="gender" value="1" checked><span class="persian">مرد</span>
                            <label class="form-check-label" for="man"></label>


                            <input type="radio" class="form-check-input persian" id="woman" name="gender" value="2"><span class="persian">زن</span>
                            <label class="form-check-label" for="woman"></label>

                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="personal_code" class="form-label persian">کد ملی</label>
                            <input type="test" class="form-control persian" id="personal_code" name="personal_code" >
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label persian">ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email" >
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 my-2">
                        <label for="military_service_status" class="mb-3 persian">وضعیت خدمت</label>
                        <select class="form-select persian" id="military_service_status" name="military_service_status">
                            <option value="1">پایان خدمت</option>
                            <option value="2" >در حال خدمت</option>
                          </select>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="salary" class="form-label persian">حقوق</label>
                            <input type="text" class="form-control persian" id="salary" name="salary" >
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="education" class="form-label persian">مدرک تحصیلی</label>
                            <input type="text" class="form-control persian" id="education" name="education" >
                          </div>
                    </div>

                </div>
                <label for="address" class="persian my-2">آدرس</label>
                <textarea name="address" id="address" class="form-control persian" cols="30" rows="5" name="address"></textarea>
                <label for="business_address" class="persian my-2">آدرس محل کار</label>
                <textarea name="business_address" id="business_address" class="form-control persian" cols="30" rows="5" name="business_address"></textarea>


                <button type="submit" class="btn btn-primary  persian mt-3">ثبت</button>
                </form>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $('form').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    method: "POST",
                    url: "{{ route('users.store') }}",
                    data: $(this).serialize(),
                    success: function(res) {

                    }
    })
</script>
@endsection
