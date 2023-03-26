@extends('backend.master')

@section('title')
{{isset($feeType) ?'Update':'Create'}} Fee Types
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>' Fee Types', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="float-start">{{isset($feeType) ?'Update':'Create'}} Notice</h4>
                    <a href="{{ route('fee-types.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{isset($feeType) ? route('fee-types.update', $feeType->id) : route('fee-types.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($feeType))
                                @method('put')
                            @endif

                            <div class="row mt-2">
                                <div class="col-md-12 mb-4">
                                    <label  class="form-label">
                                        Student Fee Types
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Write Salary Grade Name Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="text"  class="form-control" name="fee_type" placeholder="" value="{{ $errors->any() ? old('fee_type') : (isset($feeType)? $feeType->fee_type :'')}}">
                                    @error('fee_type')<span class="text-danger f-s-12">{{$errors->first('fee_type')}}</span> @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="" class="form-label">
                                        Type Note
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Content" data-bs-placement="right"></i>
                                    </label>
                                    <textarea name="note" id="editor" cols="20" rows="5" class="form-control" >{!!$errors->any() ? (old('note')) :(isset($feeType)? $feeType->note:'')!!}</textarea>
                                    @error('note')<span class="text-danger f-s-12">{{$errors->first('note')}}</span> @enderror
                                </div>

                                <div class="col-md-8">
                                    <label for="" class="col-md-4">
                                        Status
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i><br>
                                    </label>

                                    <div class="d-inline">
                                        <input type="checkbox" {{ isset($feeType) && $feeType->status == 0 ? '' : 'checked' }} name="status" id="switch1"  data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    @error('status')<span class="text-danger f-s-12" >{{$errors->first('status')}}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="mt-3 btn btn-success col-md-3 mx-auto" value="{{ isset($feeType) ? 'Update ' : 'Create ' }} Fee Type ">
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
