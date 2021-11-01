<?php

namespace App\Http\Livewire\Admin;

use App\Models\Galeria;
use Livewire\Component;
use Livewire\WithPagination;

class GaleriaIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render(){
        $galerias= Galeria::join('apartats', 'apartats.id', '=', 'galerias.apartat_id')
        ->where('titol','LIKE','%'. $this->search .'%')
        ->paginate(10);
        return view('livewire.admin.galeria-index',compact('galerias'));
    }
}
