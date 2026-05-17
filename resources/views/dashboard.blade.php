<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-clemont-text leading-tight">
            {{ __('Dashboard General') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Bienvenida -->
            <div class="bg-clemont-card overflow-hidden shadow-sm border border-gray-200 sm:rounded-md">
                <div class="p-6 text-clemont-text">
                    {{ __("Bienvenido al panel analítico de Clemont.") }}
                </div>
            </div>

            <!-- Gráfico de Ventas -->
            <livewire:sales-chart />
        </div>
    </div>
</x-app-layout>
