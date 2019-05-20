@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order Details</div>

                    <div class="card-body">
                        <div>
                            <h2>{{ $order->customer->name }}</h2>
                            <p>{{ $order->customer->phone }}</p>
                            <p>{{ $order->shipped?'shipped':'Pending' }}</p>
                            <p>{{ $order->total }}</p>

                            <div id="details">
                                <table class="table">
                                    @foreach($order->details as $detail)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $detail->product->name }}</td>
                                            <td>{{ $detail->quantity }} </td>
                                            <td>{{ $detail -> total }} </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>

                        </div>

                        @if(!$order->shipped)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Add</th>
                                </tr>
                                </thead>
                                <tbody>
                                   @foreach($products as $product)
                                       <tr>
                                           <td>{{ $loop->iteration }}</td>
                                           <td>{{ $product->name }} </td>
                                           <td>{{ $product->price }}</td>
                                           <td>
                                               @can('update',$order)
                                               <form action="/orders/{{$order->id}}" method="post" class="form-inline">
                                                   @method('PUT')
                                                   @csrf
                                                   <input type="hidden" name="product_id" value="{{$product->id}}">
                                                   <input type="number" value="1" name="quantity" min="1" class="form-control">

                                                   <button class="btn btn-success">Add</button>

                                               </form>
                                               @endcan
                                           </td>
                                       </tr>
                                  @endforeach
                                </tbody>

                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
