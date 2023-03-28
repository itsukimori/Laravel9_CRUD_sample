@extends('products.layout')

@section('content')
<h2>Laravel 9 CRUD</h2>

@if ($message = Session::get('success'))
<article>
    <div>
        <p>success</p>
    </div>
    <div>
        <p>{{ $message }}</p>
    </div>
</article>
@endif
<div>
    <a href="{{ route('products.create') }}">新規作成</a>
    <table>
        <tr>
            <th>ID</th>
            <th>製品名</th>
            <th>操作</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    <a href="{{ route('products.show', $product->id) }}">詳細表示</a>
                    <a href="{{ route('products.edit', $product->id) }}">編集</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection