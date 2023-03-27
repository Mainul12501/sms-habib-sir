@extends('backend.master')

@section('title')
{{isset($feePayment) ?'Update':'Create'}} Fee Payments
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Fee Payments', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="float-start">{{isset($feePayment) ?'Update':'Create'}} Fee Payments</h4>
                    <a href="{{ route('student-fee-payments.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{isset($feePayment) ? route('student-fee-payments.update', $feePayment->id) : route('student-fee-payments.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($feePayment))
                                @method('put')
                            @endif

                            <div class="row mt-2">
                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Academic Year
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <select name="academic_year_id" class=" form-control year-id" data-toggle="select2" data-placeholder="Choose ...">
                                        <option value="">Select a Academic Year</option>
                                        @foreach($academicYears as $academicYear)
                                            <option value="{{ $academicYear->id }}" {{ $errors->any() ? (old('academic_year_id')) : (isset($feePayment) && $feePayment->academic_year_id == $academicYear->id ? 'selected' : '')}}> {{ \Illuminate\Support\Carbon::parse($academicYear->session_year_start)->format('Y').' - '.\Illuminate\Support\Carbon::parse($academicYear->session_year_end)->format('Y') }}</option>
                                        @endforeach
                                    </select>
                                    @error('academic_year_id')<span class="text-danger f-s-12">{{$errors->first('academic_year_id')}}</span> @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Fee Type
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <select name="fee_type_id" class=" form-control fee-type-id" data-toggle="select2" data-placeholder="Choose ...">
                                        <option value="">Select a Type</option>
                                        @foreach($feeTypes as $feeType)
                                            <option value="{{ $feeType->id }}" {{ $errors->any() ? (old('fee_type_id')) : (isset($feePayment) && $feePayment->fee_type_id == $feeType->id ? 'selected' : '')}}> {{ $feeType->fee_type }}</option>
                                        @endforeach
                                    </select>
                                    @error('fee_type_id')<span class="text-danger f-s-12">{{$errors->first('fee_type_id')}}</span> @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Class
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <select name="academic_class_id" class=" form-control class-id" data-toggle="select2" data-placeholder="Choose ...">
                                        <option value="">Select a Class</option>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}" {{ $errors->any() ? (old('academic_class_id')) : (isset($feePayment) && $feePayment->academic_class_id == $class->id ? 'selected' : '')}}> {{ $class->class_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('academic_class_id')<span class="text-danger f-s-12">{{$errors->first('academic_class_id')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Section
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <select name="section_id" class=" form-control section-id" data-toggle="select2" data-placeholder="Choose ...">
                                        <option value="">Select a Section</option>
                                        @foreach($sections as $section)
                                            <option value="{{ $section->id }}" {{ $errors->any() ? (old('section_id')) : (isset($feePayment) && $feePayment->section_id == $section->id ? 'selected' : '')}}> {{ $section->section_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('section_id')<span class="text-danger f-s-12">{{$errors->first('section_id')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Month
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <select name="month" class="select2 form-control" id="exam" data-toggle="select2" data-placeholder="Choose Exam Name...">
                                        <option value="" disabled selected><-- Select a Type --></option>
                                        <option value="January" {{ isset($feePayment) && $feePayment->month == 'January' ? 'selected' : '' }}>January</option>
                                        <option value="February" {{ isset($feePayment) && $feePayment->month == 'February' ? 'selected' : '' }}>February</option>
                                        <option value="March" {{ isset($feePayment) && $feePayment->month == 'March' ? 'selected' : '' }}>March</option>
                                        <option value="April" {{ isset($feePayment) && $feePayment->month == 'April' ? 'selected' : '' }}>April</option>
                                        <option value="May" {{ isset($feePayment) && $feePayment->month == 'May' ? 'selected' : '' }}>May</option>
                                        <option value="June" {{ isset($feePayment) && $feePayment->month == 'June' ? 'selected' : '' }}>June</option>
                                        <option value="July" {{ isset($feePayment) && $feePayment->month == 'July' ? 'selected' : '' }}>July</option>
                                        <option value="August" {{ isset($feePayment) && $feePayment->month == 'August' ? 'selected' : '' }}>August</option>
                                        <option value="September" {{ isset($feePayment) && $feePayment->month == 'September' ? 'selected' : '' }}>September</option>
                                        <option value="October" {{ isset($feePayment) && $feePayment->month == 'October' ? 'selected' : '' }}>October</option>
                                        <option value="November" {{ isset($feePayment) && $feePayment->month == 'November' ? 'selected' : '' }}>November</option>
                                        <option value="December" {{ isset($feePayment) && $feePayment->month == 'December' ? 'selected' : '' }}>December</option>
                                    </select>
                                    @error('month')<span class="text-danger f-s-12">{{$errors->first('month')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Student
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <select name="student_id" id="studentSelect" class="form-control " data-toggle="select2" data-placeholder="Choose ...">
                                        <option value="">Select a Student</option>
                                        @if(isset($feePayment))
                                            <option value="{{ $feePayment->student_id }}" selected>{{ $feePayment->student->name_english }}</option>
                                        @endif
                                    </select>
                                    @error('section_id')<span class="text-danger f-s-12">{{$errors->first('section_id')}}</span> @enderror
                                </div>



                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Amount
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number"  class="form-control" name="amount" placeholder="" value="{{ $errors->any() ? old('others') : (isset($feePayment)? $feePayment->others :'')}}">
                                    @error('others')<span class="text-danger f-s-12">{{$errors->first('others')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label for="" class="form-label">
                                        Payment Method
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Content" data-bs-placement="right"></i>
                                    </label>
                                    <select name="payment_method" id="" class="form-control payment-method select2" data-toggle="select2">
                                        <option value="" disabled selected>Select a gateway</option>
                                        <option value="Cash" {{ isset($feePayment) && $feePayment->payment_method == 'Cash' ? 'selected' : '' }}>Cash</option>
                                        <option value="Bkash" {{ isset($feePayment) && $feePayment->payment_method == 'Bkash' ? 'selected' : '' }}>Bkash</option>
                                        <option value="Nagad"> {{ isset($feePayment) && $feePayment->payment_method == 'Nagad' ? 'selected' : '' }}Nagad</option>
                                        <option value="Rocket" {{ isset($feePayment) && $feePayment->payment_method == 'Rocket' ? 'selected' : '' }}>Rocket</option>
                                        <option value="Bank" {{ isset($feePayment) && $feePayment->payment_method == 'Bank' ? 'selected' : '' }}>Bank</option>
                                    </select>
                                    @error('note')<span class="text-danger f-s-12">{{$errors->first('note')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        TXT ID
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="text"  class="form-control" {{ isset($feePayment) && $feePayment->payment_method == 'Cash' ? 'disabled' : '' }}  name="txt_id" placeholder="" value="{{ $errors->any() ? old('txt_id') : (isset($feePayment)? $feePayment->txt_id :'')}}">
                                    @error('txt_id')<span class="text-danger f-s-12">{{$errors->first('txt_id')}}</span> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="col-md-4">
                                        Status
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i><br>
                                    </label>

                                    <div class="d-inline">
                                        <input type="checkbox" {{ isset($feePayment) && $feePayment->status == 0 ? '' : 'checked' }} name="status" id="switch1"  data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    @error('status')<span class="text-danger f-s-12" >{{$errors->first('status')}}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="mt-3 btn btn-success col-md-3 mx-auto" value="{{ isset($feePayment) ? 'Update ' : 'Create ' }} Student Fee Payment ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- ck Editor -->
    <script src="{{ asset('/') }}backend/assets/js/ckeditor/ckeditor.js"></script>

    {{--    @if(isset($syllabus))--}}
    <script>
        // var quill = new Quill('#snow-editor');
        {{--quill.root.innerHTML    = '{!! $stuff->description !!}';--}}
        CKEDITOR.replace( 'editor' );
    </script>
    {{--    @endif--}}

    <script>
        $(document).on('change', '.section-id', function () {
            var classId = $('.class-id').val();
            var sectionId = $(this).val();
            getStudents(classId, sectionId);
        })

        $(document).on('change', '.class-id', function () {
            var classId = $(this).val();
            var sectionId = $('.section-id').val();
            getStudents(classId, sectionId);
        })

        function getStudents(classId, sectionId) {
            $.ajax({
                url: "{{ route('get-students-by-class-section') }}",
                method: "POST",
                dataType: "JSON",
                data: {class_id: classId, section_id: sectionId},
                success: function (data) {
                    console.log(data);
                    if (data.status == 'empty')
                    {
                        toastr.error('No student found.');
                    }
                    if (data.status == 'success')
                    {
                        var student = '';
                        student += '<option value="" disabled selected>Select a Student</option>';
                        $.each(data.students, function (key, val) {
                            student += '<option value="'+val.id+'">'+val.name_english+'</option>';
                        })
                        $('#studentSelect').empty().append(student);
                    }
                }
            })
        }
        $(document).on('change', '.payment-method', function () {
            var method = $(this).val();
            if (method == 'Cash')
            {
                $('input[name="txt_id"]').attr('disabled', true);
            } else {
                $('input[name="txt_id"]').attr('disabled', false);
            }
        })
    </script>
@endsection
