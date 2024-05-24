<x-layout :header="false" :transparent="true">
    <livewire:new-task-form/>
    <script>
        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                event.preventDefault();
                window.close();
            }
        });
    </script>
</x-layout>
