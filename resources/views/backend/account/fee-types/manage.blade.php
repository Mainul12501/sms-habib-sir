@extends('backend.master')

@section('title')
    Salary Grades
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Salary Grades', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Fee Types</h4>
                    <a href="{{ route('fee-types.create') }}" class="btn btn-success float-end">
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
                                <th>Fee Type</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feeTypes as $feeType)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $feeType->fee_type }}</td>
                                    <td>{!! $feeType->note !!} </td>
                                    <td>{{ $feeType->status == 0 ? 'Unpublished':'Published'}}</td>
                                    <td>
                                        {{--                                        <a href="{{route('fee-types.show',$feeType->id)}}" class="btn btn-{{$feeType->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$feeType->status==0? 'down':'up'}}"></i></a>--}}
                                        <a href="{{ route('fee-types.edit', $feeType->slug) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('fee-types.destroy', $feeType->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Section'); ">
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
