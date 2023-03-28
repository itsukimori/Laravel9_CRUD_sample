@extends('products.layout')

@section('content')
<h2>編集</h2>

@if ($errors->any())
    <div>
        <p>
            <span>エラー！！</span>
        </p>
    </div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h3>製品名：</h3>
    <input type="text" name="input" value="{{ $product->name }}" placeholder="製品名">
    <h3>詳細：</h3>
    <textarea name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
    <div>
        <div>
            <button type="submit">送信</button>
        </div>
        <div>
            <a href="{{ route('products.index') }}">戻る</a>
        </div>
    </div>
</form>
@endsection