@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Customer</div>

                    <div class="card-body">
                        {{--                        <form action="/customers" method="post">--}}
                        <form action="{{route('products.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label> Product Name</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif


                            </div>

                            <div class="form-group">
                                <label> Price </label>
                                <input type="number" class="form-control" value="{{ old('price') }}" name="price">
                                @if($errors->has('price'))
                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                @endif
                                {{--                            </div>--}}
                            </div>

                            <div class="form-group">
                                <label> Quantity </label>
                                <input type="number" class="form-control" value="{{ old('quantity') }}" name="quantity">
                                @if($errors->has('quantity'))
                                    <span class="text-danger">{{$errors->first('quantity')}}</span>
                                @endif
                                {{--                            </div>--}}
                            </div>

                            <button class="btn btn-info">Add Product</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
