<h1>詳細</h1>
<p><a href="{{ route('item.index') }}">Item List</a></p>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>memo</th>
        <th>create_at</th>
        <th>update_at</th>
    </tr>
    <tr>
        <th>{{ $item->id }}</th>
        <th>{{ $item->name }}</th>
        <th>{{ $item->memo }}</th>
        <th>{{ $item->create_at }}</th>
        <th>{{ $item->update_at }}</th>
    </tr>
</table>