<?php

namespace App\Livewire;

use App\Events\TasksUpdated;
use App\Models\Task;
use Livewire\Component;
use Native\Laravel\Facades\Clipboard;

class NewTaskForm extends Component
{
    public string $title = '';

    public string $clipboard = '';

    public function mount(){
        $this->clipboard = Clipboard::text();
    }

    public function save(){
        Task::create(['title' => $this->title]);
        event(new TasksUpdated);
        $this->reset('title');
    }

    public function render()
    {
        return view('livewire.new-task-form');
    }
}
