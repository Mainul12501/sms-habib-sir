@extends('backend.master')

@section('title')
{{isset($salaryGrade) ?'Update':'Create'}} Salary Grade
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>' Salary Grades', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="float-start">{{isset($salaryGrade) ?'Update':'Create'}} Notice</h4>
                    <a href="{{ route('salary-grades.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{isset($salaryGrade) ? route('salary-grades.update', $salaryGrade->id) : route('salary-grades.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($salaryGrade))
                                @method('put')
                            @endif

                            <div class="row mt-2">
                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Salary Grade
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="text"  class="form-control" name="salary_grade" placeholder="" value="{{ $errors->any() ? old('salary_grade') : (isset($salaryGrade)? $salaryGrade->salary_grade :'')}}">
                                    @error('salary_grade')<span class="text-danger f-s-12">{{$errors->first('salary_grade')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Basic Salary
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number"  class="form-control" name="basic" placeholder="" value="{{ $errors->any() ? old('basic') : (isset($salaryGrade)? $salaryGrade->basic :'')}}">
                                    @error('basic')<span class="text-danger f-s-12">{{$errors->first('basic')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        House Rent
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number"  class="form-control" name="house_rent" placeholder="" value="{{ $errors->any() ? old('house_rent') : (isset($salaryGrade)? $salaryGrade->house_rent :'')}}">
                                    @error('house_rent')<span class="text-danger f-s-12">{{$errors->first('house_rent')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Medical Allowance
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number"  class="form-control" name="medical" placeholder="" value="{{ $errors->any() ? old('medical') : (isset($salaryGrade)? $salaryGrade->medical :'')}}">
                                    @error('medical')<span class="text-danger f-s-12">{{$errors->first('medical')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Transport Allowance
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number"  class="form-control" name="ta_da" placeholder="" value="{{ $errors->any() ? old('ta_da') : (isset($salaryGrade)? $salaryGrade->ta_da :'')}}">
                                    @error('ta_da')<span class="text-danger f-s-12">{{$errors->first('ta_da')}}</span> @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label  class="form-label">
                                        Other Allowance
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number"  class="form-control" name="others" placeholder="" value="{{ $errors->any() ? old('others') : (isset($salaryGrade)? $salaryGrade->others :'')}}">
                                    @error('others')<span class="text-danger f-s-12">{{$errors->first('others')}}</span> @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="" class="form-label">
                                        Salary Grade Note
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Content" data-bs-placement="right"></i>
                                    </label>
                                    <textarea name="note" id="editor" cols="20" rows="5" class="form-control" >{!!$errors->any() ? (old('note')) :(isset($salaryGrade)? $salaryGrade->note:'')!!}</textarea>
                                    @error('note')<span class="text-danger f-s-12">{{$errors->first('note')}}</span> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="col-md-4">
                                        Status
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i><br>
                                    </label>

                                    <div class="d-inline">
                                        <input type="checkbox" {{ isset($salaryGrade) && $salaryGrade->status == 0 ? '' : 'checked' }} name="status" id="switch1"  data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    @error('status')<span class="text-danger f-s-12" >{{$errors->first('status')}}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="mt-3 btn btn-success col-md-3 mx-auto" value="{{ isset($salaryGrade) ? 'Update ' : 'Create ' }} Salary Grade ">
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
@endsection
