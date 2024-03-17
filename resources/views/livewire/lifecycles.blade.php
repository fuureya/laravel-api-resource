<div>

    @error('data')
        {{ $message }}
    @enderror
    <div>
        <form wire:submit="add">
            <input type="text" wire:model="todo" placeholder="masukkan data">
            <button type="submit">Masukkan</button>
        </form>
        <ul>
            @foreach ($todos as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
