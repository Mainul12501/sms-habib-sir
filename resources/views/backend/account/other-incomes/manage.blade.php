@extends('backend.master')

@section('title')
    Incomes
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Incomes', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Incomes</h4>
                    <a href="{{ route('other-incomes.create') }}" class="btn btn-success float-end">
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
                            @foreach($otherIncomes as $otherIncome)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $otherIncome->name }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse($otherIncome->date)->format('d-m-Y') }}</td>
                                    <td>{{ $otherIncome->amount }}</td>
                                    <td><a href="{{ asset($otherIncome->file) }}" download="">File</a></td>
                                    <td>{!! $otherIncome->note !!}</td>
                                    <td>{{ $otherIncome->user->name }}</td>
                                    <td>{{ $otherIncome->status == 0 ? 'Unpublished':'Published'}}</td>
                                    <td>
                                        {{--                                        <a href="{{route('other-incomes.show',$otherIncome->id)}}" class="btn btn-{{$otherIncome->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$otherIncome->status==0? 'down':'up'}}"></i></a>--}}
                                        <a href="{{ route('other-incomes.edit', $otherIncome->id) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('other-incomes.destroy', $otherIncome->id) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Section'); ">
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
