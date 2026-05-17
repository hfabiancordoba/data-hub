<?php

namespace App\Livewire;

use Livewire\Component;

class SalesChart extends Component
{
    public array $labels = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'];
    public array $shopifyData = [12000, 19000, 15000, 22000, 28000, 25000];
    public array $erpData = [10000, 18000, 14000, 20000, 27000, 24000];

    public function render()
    {
        return view('livewire.sales-chart');
    }
}
