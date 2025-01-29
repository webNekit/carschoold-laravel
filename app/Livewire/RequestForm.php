<?php

namespace App\Livewire;

use App\Models\Request;
use Livewire\Component;

class RequestForm extends Component
{

    public $first_name;
    public $email;
    public $last_name;
    public $phone;
    public $text;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'email' => 'required|email',
        'last_name' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:15',
        'text' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Создаем новую запись в модели Request
        Request::create([
            'first_name' => $this->first_name,
            'email' => $this->email,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'text' => $this->text,
        ]);

        // Обнуляем поля после успешной отправки
        $this->reset();

        // Можно добавить уведомление об успешной отправке
        session()->flash('message', 'Ваше сообщение отправлено!');
    }

    public function render()
    {
        return view('livewire.request-form');
    }
}
