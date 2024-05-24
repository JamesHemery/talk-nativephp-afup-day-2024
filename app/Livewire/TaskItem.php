<?php

namespace App\Livewire;

use App\Events\TasksUpdated;
use App\Models\Task;
use Livewire\Component;
use Native\Laravel\Facades\Clipboard;

class TaskItem extends Component
{
    public Task $task;

    public function copy(){
        Clipboard::text($this->task->title);
    }

    public function delete(){
        $this->task->delete();
        event(new TasksUpdated());
    }

    public function toggle(){
        $this->task->update(['done' => !$this->task->done]);
        event(new TasksUpdated());
    }

    public function render()
    {
        return view('livewire.task-item');
    }
}
