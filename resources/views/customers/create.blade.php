@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Customer</div>

                    <div class="card-body">
{{--                        <form action="/customers" method="post">--}}
                        <form action="{{route('customers.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label> Customer Names</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif


                            </div>

                            <div class="form-group">
                                <label> Customer's Phone</label>
                                <input type="text" class="form-control" value="{{ old('phone') }}" name="phone">
                                @if($errors->has('phone'))
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                @endif
                                {{--                            </div>--}}
                            </div>

                            <div class="form-group">
                                <label> Customer's Address</label>
                                <input type="text" class="form-control" value="{{ old('address') }}" name="address">
                                @if($errors->has('address'))
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                @endif
                                {{--                            </div>--}}
                            </div>

                            <button class="btn btn-info">Add Customer</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
