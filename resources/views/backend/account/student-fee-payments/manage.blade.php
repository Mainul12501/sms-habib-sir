@extends('backend.master')

@section('title')
    Student Fee Payments
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Student Fee Payments', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Student Fee Payments</h4>
                    <a href="{{ route('student-fee-payments.create') }}" class="btn btn-success float-end">
                        {{--                        <i class="mdi mdi-plus"></i>--}}
                        Create
                    </a>
                </div>
                <div class="card-body">


                    <form action="{{ route('search-student-fee-payment') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label  class="form-label">
                                    Academic Year
                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                </label>
                                <select name="academic_year_id" class=" form-control " data-toggle="select2" data-placeholder="Choose ...">
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
                                <select name="fee_type_id" class=" form-control " data-toggle="select2" data-placeholder="Choose ...">
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
                                <select name="academic_class_id" class=" form-control " data-toggle="select2" data-placeholder="Choose ...">
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
                                <select name="section_id" class=" form-control " data-toggle="select2" data-placeholder="Choose ...">
                                    <option value="">Select a Section</option>
                                    @foreach($sections as $section)
                                        <option value="{{ $section->id }}" {{ $errors->any() ? (old('section_id')) : (isset($feePayment) && $feePayment->section_id == $section->id ? 'selected' : '')}}> {{ $section->section_name }}</option>
                                    @endforeach
                                </select>
                                @error('section_id')<span class="text-danger f-s-12">{{$errors->first('section_id')}}</span> @enderror
                            </div>

                            <div class="col-md-4 mb-4">
                                <label  class="form-label">
                                    Month (optional)
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
                                <input type="submit" class="btn btn-success mt-3 ms-3" value="Search" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Year</th>
                                <th>Fee Type</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Month</th>
                                <th>Student Name</th>
                                <th>Amount</th>
                                <th>P. Method</th>
                                <th>TXT ID</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Session::has('feePayments'))
                                @foreach(Session::get('feePayments') as $feePayment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Illuminate\Support\Carbon::parse($feePayment->academicYear->session_year_start)->format('Y').' - '.\Illuminate\Support\Carbon::parse($feePayment->academicYear->session_year_end)->format('Y') }}</td>
                                        <td>{{ $feePayment->feeType->fee_type }}</td>
                                        <td>{{ $feePayment->academicClass->class_name }}</td>
                                        <td>{{ $feePayment->section->section_name }}</td>
                                        <td>{{ $feePayment->month }}</td>
                                        <td>{{ $feePayment->user->name }}</td>
                                        <td>{!! $feePayment->amount !!} </td>
                                        <td>{!! $feePayment->payment_method !!} </td>
                                        <td>{!! $feePayment->txt_id !!} </td>
                                        <td>{{ $feePayment->status == 0 ? 'Unpublished':'Published'}}</td>
                                        <td>
                                            {{--                                                <a href="{{route('student-fee-payments.show',$feePayment->id)}}" class="btn btn-{{$feePayment->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$feePayment->status==0? 'down':'up'}}"></i></a>--}}
                                            <a href="{{ route('student-fee-payments.edit', $feePayment->id) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                            <form action="{{ route('student-fee-payments.destroy', $feePayment->id) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Section'); ">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm py-0 px-1">
                                                    <i class="dripicons-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <!-- Datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection

@section('script')
    <!-- Datatables js -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#datatable-buttons').DataTable();
        });

    </script>
@endsection
