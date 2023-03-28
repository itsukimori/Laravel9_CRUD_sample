@extends('products.layout')

@section('content')
<h2>新規作成</h2>

@if ($errors->any())
<article>
    <div>
        <p>エラー！！</p>
    </div>
    <div>
        <ul>
            @foreach ($errors as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</article>
@endif
<div>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <h3>製品名：</h3>
        <input type="text" name="name" placeholder="製品名">
        <h3>詳細</h3>
        <textarea name="detail" placeholder="詳細"></textarea>
        <div>
            <div>
                <button type="submit">送信</button>
            </div>
            <div>
                <a href="{{ route('products.index') }}">戻る</a>
            </div>
        </div>
    </form>
</div>
@endsection