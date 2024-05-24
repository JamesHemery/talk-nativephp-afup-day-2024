<div class="flex flex-col gap-y-2">
    @foreach($tasks as $task)
        <livewire:task-item :task="$task" :key="md5($task)"/>
    @endforeach
</div>
