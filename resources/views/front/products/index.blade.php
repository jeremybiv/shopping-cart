@extends('layouts.front')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.product.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table">
            <table class=" table table-bordered  table-hover datatable datatable-Product">
                <thead>
                    <tr>
                        
                        <th>
                            {{ trans('cruds.product.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                           
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                           
                            <td>
                                {{ $product->price ?? '' }}
                            </td>
                            <td>
                                
                                    <a class="fas fa-shopping-cart" href="{{ route('cart.add',$product->id) }}">
                                        {{ trans('global.add') }}
                                    </a>
                            </td>
                            

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
