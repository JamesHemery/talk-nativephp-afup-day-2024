<form wire:submit="save" class="flex gap-4">
    <div class="w-full relative">
        <input autofocus type="text" class="form-input !text-lg" wire:model="title" placeholder="{{$clipboard}}" />
    </div>
    <button type="submit" class="button !text-lg">Ajouter</button>
</form>
@script
<script>
    document.addEventListener("keydown", (event) => {
        if (event.key === "Tab") {
            event.preventDefault();
            $wire.title = $wire.clipboard;
        }
    });
</script>
@endscript
