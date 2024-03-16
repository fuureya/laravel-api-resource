<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{

    public $data;

    public ContactForm $contact;

    public function save()
    {
        $this->contact->store();
    }

    public function render()
    {
        $this->data = Contact::all();

        return view('livewire.contact-index');
    }
}
