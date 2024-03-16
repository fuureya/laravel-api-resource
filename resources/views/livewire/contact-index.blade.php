<div>

    <h1 class="text-center my-5">CRUD LIVEWIRE</h1>

    <div class="container">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Orang</label>
                <input type="text" class="form-control @error('contact.name') border border-danger @enderror"
                    id="exampleInputEmail1" wire:model="contact.name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Number Phone</label>
                <input type="number" class="form-control @error('contact.phone') border border-danger @enderror"
                    id="exampleInputPassword1" wire:model="contact.phone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Hp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dat)
                    <tr>
                        <th>{{ $dat->id }}</th>
                        <td>{{ $dat->name }}</td>
                        <td>{{ $dat->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
