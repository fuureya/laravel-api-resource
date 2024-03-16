<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $phone;

    public function store()
    {
        $this->validate();

        Contact::create([
            "name" => $this->name,
            "phone" => $this->phone
        ]);

        $this->reset();
    }
}
