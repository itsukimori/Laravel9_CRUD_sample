@extends('products.layout')

@section('content')
<h2>詳細</h2>
<div>
    <h3>製品名：</h3>
    <div>
        <p>{{ $product->detail }}</p>
    </div>
    <div>
        <a href="{{ route('products.index') }}">戻る</a>
    </div>
</div>
@endsection