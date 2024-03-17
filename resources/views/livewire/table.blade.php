<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="font-weight-bold text-center mt-5">Contact List</h3>
            </div>
            <div class="col-12">
                <button class="btn btn-success mb-5" data-toggle="modal" data-target="#kontak">+ tambah data</button>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama lengkap</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $num)
                            <tr>
                                <td>{{ $num->id }}</td>
                                <td>{{ $num->nama_lengkap }}</td>
                                <td>{{ $num->nomor_telepon }}</td>
                                <td>{{ $num->alamat }}</td>
                                <td>
                                    <div>
                                        <button wire:click="delete({{ $num->id }})"
                                            class="btn border-0 p-0 m-0 mx-1">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </button>
                                        <button data-toggle="modal" data-target="#edit"
                                            wire:click='editView({{ $num->id }})'
                                            class="btn border-0 p-0 m-0 mx-1">
                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>

    {{-- start add modal --}}

    <div wire:ignore.self class="modal fade" id="kontak" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Isi Kontak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit="add">
                        <div class="form-group">
                            <label for="nama_lengkap" class="col-form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" id="nama_lengkap" autocomplete="off"
                                wire:model="namaLengkap">
                        </div>
                        <div class="form-group">
                            <label for="nomor_telepon" class="col-form-label">Nomor Telepon :</label>
                            <input type="text" class="form-control" id="nomor_telepon" autocomplete="off"
                                wire:model="nomorTelepon">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-form-label">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" autocomplete="off"
                                wire:model="alamat">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" wire:click="$refresh">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    {{-- end modal --}}
    {{-- start edit modal --}}

    @if ($data != null)
        <div wire:ignore.self class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Isi Kontak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit="edit()">
                            <div class="form-group">
                                <label for="nama_lengkap" class="col-form-label">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama_lengkap" autocomplete="off"
                                    wire:model="namaLengkap">
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon" class="col-form-label">Nomor Telepon :</label>
                                <input type="text" class="form-control" id="nomor_telepon" autocomplete="off"
                                    wire:model="nomorTelepon">
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="col-form-label">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" autocomplete="off"
                                    wire:model="alamat">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" wire:click="$refresh">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endif

    {{-- end edit modal --}}
</div>
