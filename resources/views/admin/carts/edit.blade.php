@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.cart.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carts.update", [$cart->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('identifier') ? 'has-error' : '' }}">
                <label for="identifier">{{ trans('cruds.cart.fields.identifier') }}*</label>
                <input type="text" id="identifier" name="identifier" class="form-control" value="{{ old('identifier', isset($cart) ? $cart->identifier : '') }}" required>
                @if($errors->has('identifier'))
                    <em class="invalid-feedback">
                        {{ $errors->first('identifier') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cart.fields.identifier_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('instance') ? 'has-error' : '' }}">
                <label for="instance">{{ trans('cruds.cart.fields.instance') }}*</label>
                <input type="text" id="instance" name="instance" class="form-control" value="{{ old('instance', isset($cart) ? $cart->instance : '') }}" required>
                @if($errors->has('instance'))
                    <em class="invalid-feedback">
                        {{ $errors->first('instance') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.cart.fields.instance_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection