<form class="form" action="{{ url('participants/add') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="backto" value="{{ isset($step) ? 'wizard' : 'view' }}" />
    <input type="hidden" name="project_id" value="{{ $id }}" />
    <div class="modal-header" id="kt_modal_add_customer_header" dir="rtl">
        <h2 class="fw-bold">اضافة مشارك</h2>
        <div onclick="$('#kt_modal_add_customer').modal('hide')" class="btn btn-icon btn-sm btn-active-icon-primary">
            <span class="svg-icon svg-icon-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>
    <div class="modal-body py-10 px-lg-17" dir="rtl">
        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
            <div class="fv-row mb-7">
                <label class="required fs-6 fw-semibold mb-2">اسم المشارك</label>
                <input type="text" class="form-control form-control-solid" placeholder="" name="name" required />
            </div>
            <div class="fv-row mb-7">
                <label class="required fs-6 fw-semibold mb-2">القسم</label>
                <input type="text" class="form-control form-control-solid" placeholder="" name="department"
                    required />
            </div>
            <div class="fv-row mb-7">
                <label class="required fs-6 fw-semibold mb-2">الرقم الوطني</label>
                <input type="text" class="form-control form-control-solid" placeholder="" name="national_id"
                    required />
            </div>
            <div class="fv-row mb-7">
                <label class="required fs-6 fw-semibold mb-2">العنوان</label>
                <input type="text" class="form-control form-control-solid" placeholder="" name="address" required />
            </div>
            <div class="fv-row mb-7">
                <label class="required fs-6 fw-semibold mb-2">رقم الهاتف</label>
                <input type="text" class="form-control form-control-solid" placeholder="" name="phone" required />
            </div>
            <div class="fv-row mb-7">
                <label class="required fs-6 fw-semibold mb-2">تاريخ الميلاد</label>
                <input type="text" class="form-control form-control-solid" placeholder="" name="birthday" required />
            </div>
        </div>
    </div>
    <div class="modal-footer flex-center">
        <button type="reset" onclick="$('#kt_modal_add_customer').modal('hide')"
            class="btn btn-light me-3">الغاء</button>
        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
            <span class="indicator-label">اضافة</span>
        </button>
    </div>
</form>
