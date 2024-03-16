{{--
    script ini menggunakan click untuk mengambil data 
    <div>
    <input type="text" wire:model="todo" placeholder="masukkan data">
    <button type="button" wire:click="add">Masukkan</button>
    <ul>
        @foreach ($todos as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div> --}}
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

{{-- catatan 
    
1. wire:model mengarah sebagai penerima inputan mirip seperti $request->nama_form    
--}}
