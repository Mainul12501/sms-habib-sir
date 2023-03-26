@extends('backend.master')

@section('title')
{{isset($notice) ?'Update':'Create'}} Notice
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>' Notices', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="float-start">{{isset($notice) ?'Update':'Create'}} Notice</h4>
                    <a href="{{ route('notices.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{isset($notice) ? route('notices.update', $notice->id) : route('notices.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($notice))
                                @method('put')
                            @endif

                            <div class="row mt-2">
                                <div class="col-md-12 mb-4">
                                    <label  class="form-label">
                                        Title
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Title Here" data-bs-placement="right"></i>
                                    </label>
                                    <input type="text"  class="form-control" name="title" placeholder="" value="{{ $errors->any() ? old('title') : (isset($notice)? $notice->title :'')}}">
                                    @error('title')<span class="text-danger f-s-12">{{$errors->first('title')}}</span> @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label  class="form-label">
                                        Date
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set section capacity" data-bs-placement="right"></i>
                                    </label>
{{--                                    <input type="text" data-provide="datepicker" data-date-container="#datepicker1"  class="form-control" name="date" placeholder="" value="{{ $errors->any() ? old('date') : (isset($attendance)? $attendance->date :'')}}">--}}
                                    <input type="text" class="form-control date" name="date" id="birthdatepicker" value="{{ $errors->any() ? old('date') : (isset($attendance)? $attendance->date :'')}}" data-toggle="date-picker" data-single-date-picker="true">
                                    @error('date')<span class="text-danger f-s-12">{{$errors->first('date')}}</span> @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="" class="form-label">
                                        Notice File
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Content" data-bs-placement="right"></i>
                                    </label>
                                    <input type="file" name="file" class="form-control">
                                    @error('notice')<span class="text-danger f-s-12">{{$errors->first('notice')}}</span> @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="" class="form-label">
                                        Notice content
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Notice Content" data-bs-placement="right"></i>
                                    </label>
                                    <textarea name="notice" id="editor" cols="20" rows="5" class="form-control" >{!!$errors->any() ? (old('notice')) :(isset($notice)? $notice->notice:'')!!}</textarea>
                                    @error('notice')<span class="text-danger f-s-12">{{$errors->first('notice')}}</span> @enderror
                                </div>



                                <div class="col-md-4">
                                    <label for="" class="col-md-4">
                                        Status
                                        <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i><br>
                                    </label>

                                    <div class="d-inline">
                                        <input type="checkbox" {{ isset($notice) && $notice->status == 0 ? '' : 'checked' }} name="status" id="switch1"  data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    @error('status')<span class="text-danger f-s-12" >{{$errors->first('status')}}</span> @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <input type="submit" class="mt-3 btn btn-success col-md-3 mx-auto" value="{{ isset($notice) ? 'Update ' : 'Create ' }} Notice ">
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
