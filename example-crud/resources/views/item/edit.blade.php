<h1>編集</h1>
<p><a href="{{ route('item.index') }}"></a>Item List</p>

<form action="{{ route('item.update', $item->id) }} " method="POST">
    @csrf
    @method('PUT')
    <p>Item name: <input type="text" name="name" value="{{ $item->title }}"></p>
    <p>memo: <input type="text" name="memo" value="{{ $item->author }}"></p>
    <input type="submit" value="編集">
</form>