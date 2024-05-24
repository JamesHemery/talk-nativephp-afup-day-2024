<div class="rounded bg-slate-700 items-center text-white border-slate-600 p-3 flex gap-4">
    <div>
        <div class="flex gap-1">
            <span class="text-lg">{{$task->title}}</span>
            <button type="submit" wire:click="copy">
                <x-lucide-clipboard-copy class="size-4"/>
            </button>
        </div>
    </div>

    <button
        type="button"
        @class(['flex-shrink-0 ml-auto rounded-full size-6 flex items-center justify-center cursor-pointer text-white', 'bg-white' => !$task->done, 'bg-green-500'=> $task->done])
        wire:click="toggle"
    >
        @if($task->done)
            <x-lucide-check class="size-4"/>
        @endif
    </button>

    <button type="button" wire:click="delete">
        <x-lucide-trash class="size-4"/>
    </button>
</div>
