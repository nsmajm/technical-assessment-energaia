@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                @can('view-inventory')
                  Inventory
                @endcan
                @can('view-supplies')
                  Supplies
                @endcan
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Product name</th>
                            <th>SKU</th>
                            <th>Quantity</th>
                            <th>Supplier name</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->user->name }}</td>
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
