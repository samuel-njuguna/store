@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Orders</div>

                    <div class="card-body">
                        {{--                        <form action="/customers" method="post">--}}
                        <form action="{{route('orders.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label> Select Customer </label>
                                <select name="customer_id" class="form-control">
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}"> {{ $customer->name }} </option>
                                    @endforeach

                                </select>
                            </div>

                            <button class="btn btn-info">Create Order</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
