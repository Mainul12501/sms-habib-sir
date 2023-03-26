@extends('backend.master')

@section('title')
    Sections
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Notices', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Notices</h4>
                    <a href="{{ route('notices.create') }}" class="btn btn-success float-end">
                        {{--                        <i class="mdi mdi-plus"></i>--}}
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Notice</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Uploaded By</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notices as $notice)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{!! $notice->notice !!} </td>
                                    <td><a href="{{ asset($notice->file) }}" download="" class="btn">File</a></td>
                                    <td>{{ $notice->date }}</td>
                                    <td>{{ $notice->user->name }}</td>
                                    <td>{{ $notice->status==0? 'Unpublished':'Published'}}</td>
                                    <td>
                                        {{--                                        <a href="{{route('notices.show',$notice->id)}}" class="btn btn-{{$notice->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$notice->status==0? 'down':'up'}}"></i></a>--}}
                                        <a href="{{ route('notices.edit', $notice->slug) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('notices.destroy', $notice->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Section'); ">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm py-0 px-1">
                                                <i class="dripicons-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
