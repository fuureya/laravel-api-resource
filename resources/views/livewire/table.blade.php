<div>
    <h2>Post : </h2>
    <table border="1">
        <thead>
            <th>Title</th>
            <th>comment</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($data as $post)
                <tr wire:key="{{ $post->id }}">
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->coment, 60, '...') }}</td>
                    <td><button type="button" wire:click="delete({{ $post->id }})"
                            wire:confirm="Yakin?">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
