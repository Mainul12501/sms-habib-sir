@extends('backend.master')

@section('title')
    Expenses
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Expenses', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Expenses</h4>
                    <a href="{{ route('expenses.create') }}" class="btn btn-success float-end">
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
                                <th>Year</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>File</th>
                                <th>Note</th>
                                <th>Uploaded By</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse($expense->session_year_start)->format('Y').' - '.\Illuminate\Support\Carbon::parse($expense->session_year_end)->format('Y') }}</td>
                                    <td>{{ $expense->name }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse($expense->date)->format('d-m-Y') }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td><a href="{{ asset($expense->file) }}" download="">File</a></td>
                                    <td>{!! $expense->note !!}</td>
                                    <td>{{ $expense->user->name }}</td>
                                    <td>{{ $expense->status == 0 ? 'Unpublished':'Published'}}</td>
                                    <td>
                                        {{--                                        <a href="{{route('expenses.show',$expense->id)}}" class="btn btn-{{$expense->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$expense->status==0? 'down':'up'}}"></i></a>--}}
                                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Section'); ">
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
