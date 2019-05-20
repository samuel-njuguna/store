@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View All Customers Orders</div>

                    <div class="card-body">
                        <table class="table" id="orders">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->customer->name }}</td>
                                    <td>{{ $order->customer->phone }}</td>
                                    <td>{{ $order->shipped?'shipped':'Pending' }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>
                                        <a href="/orders/{{$order->id}}" class="btn btn-info">Details</a>
                                    </td>
                                    <td>
                                        @if(!$order->shipped)
                                            @can('delete',$order)
                                        <form action="/orders/{{$order->id}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Remove</button>

                                        </form>
                                            @endcan
                                        @endif
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

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>
    <script>
        $(document).ready(function() {
            $('#orders').DataTable();
        } );
    </script>
@endsection
