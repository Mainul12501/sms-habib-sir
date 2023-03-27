@extends('backend.master')

@section('title')
{{isset($otherIncome) ?'Update':'Create'}} Incomes
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Incomes', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="float-start">{{isset($otherIncome) ?'Update':'Create'}} Income</h4>
                    <a href="{{ route('other-incomes.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{isset($otherIncome) ? route('other-incomes.update', $otherIncome->id) : route('other-incomes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($otherIncome))
                                @method('put')
                            @endif

                            <div class="row mt-2">
                                <div class="col-md-6 mb-4">
                                    <label  class="form-label">
                                        Title
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="text"  class="form-control" name="name" placeholder="" value="{{ $errors->any() ? old('name') : (isset($otherIncome)? $otherIncome->name :'')}}">
                                    @error('name')<span class="text-danger f-s-12">{{$errors->first('name')}}</span> @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label  class="form-label">
                                        Date
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="text" class="form-control date" name="date" placeholder="" value="{{ $errors->any() ? old('date') : (isset($otherIncome)? $otherIncome->date :'')}}" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true" />
                                    @error('date')<span class="text-danger f-s-12">{{$errors->first('date')}}</span> @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label  class="form-label">
                                        Income Amount
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="number" class="form-control" name="amount" placeholder="" value="{{ $errors->any() ? old('amount') : (isset($otherIncome)? $otherIncome->amount :'')}}">
                                    @error('amount')<span class="text-danger f-s-12">{{$errors->first('amount')}}</span> @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label  class="form-label">
                                        Document
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="file"  class="form-control" name="file" placeholder="" value="{{ $errors->any() ? old('file') : (isset($otherIncome)? $otherIncome->file :'')}}">
                                    @error('file')<span class="text-danger f-s-12">{{$errors->first('file')}}</span> @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="" class="form-label">
                                        Income Note
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Content" data-bs-placement="right"></i>
                                    </label>
                                    <textarea name="note" id="editor" cols="20" rows="5" class="form-control" >{!!$errors->any() ? (old('note')) :(isset($otherIncome)? $otherIncome->note:'')!!}</textarea>
                                    @error('note')<span class="text-danger f-s-12">{{$errors->first('note')}}</span> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="col-md-4">
                                        Status
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i><br>
                                    </label>

                                    <div class="d-inline">
                                        <input type="checkbox" {{ isset($otherIncome) && $otherIncome->status == 0 ? '' : 'checked' }} name="status" id="switch1"  data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    @error('status')<span class="text-danger f-s-12" >{{$errors->first('status')}}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="mt-3 btn btn-success col-md-3 mx-auto" value="{{ isset($otherIncome) ? 'Update ' : 'Create ' }} Income ">
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
