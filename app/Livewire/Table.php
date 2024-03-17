<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\Component;

class Table extends Component
{
    use WithPagination;

    #[Title('Contact List')]

    public $namaLengkap = '';
    public $nomorTelepon = '';
    public $alamat = '';
    public $token = '';

    public function add()
    {

        Post::insert([
            'nama_lengkap' => $this->namaLengkap,
            'nomor_telepon' => $this->nomorTelepon,
            'alamat' => $this->alamat
        ]);

        $this->reset('namaLengkap');
        $this->reset('nomorTelepon');
        $this->reset('alamat');
    }

    public function editView($id)
    {
        $data = Post::where('id', $id)->get()[0];
        $this->token = $data->id;
        $this->namaLengkap = $data->nama_lengkap;
        $this->nomorTelepon = $data->nomor_telepon;
        $this->alamat = $data->alamat;
    }

    public function edit(Post $post)
    {
        $post->where('id', $this->token)->update([
            'nama_lengkap' => $this->namaLengkap,
            'nomor_telepon' => $this->nomorTelepon,
            'alamat' => $this->alamat
        ]);

        $this->reset('namaLengkap');
        $this->reset('nomorTelepon');
        $this->reset('alamat');
    }

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.table', [
            'data' => Post::simplePaginate(2)
        ]);
    }
}
