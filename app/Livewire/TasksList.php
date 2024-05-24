<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class TasksList extends Component
{
    public Collection $tasks;

    public function mount(){
        $this->refreshTasks();
    }

    #[On('echo:nativephp,TasksUpdated')]
    public function refreshTasks(){
        $this->tasks = Task::query()->latest()->get();
    }

    public function render()
    {
        return view('livewire.tasks-list');
    }
}
