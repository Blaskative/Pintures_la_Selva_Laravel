<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Galeria;
use Illuminate\Support\Facades\DB;

class GaleriaCreate extends Component{

use WithFileUploads;
    
protected $paginationTheme = 'bootstrap';
public $titol;
public $apartat;
public $photo;

public function render(){
    return view('livewire.admin.galeria-create');
}
public function crear(){
        $this->validate([
            'titol' => 'required',
            'apartat' => 'required',
            'photo' => 'image|max:2000',
        ]);
        $this->photo->store('images/galeria','public');
       
     
   $insert=  DB::table('galerias')->insert(['titol'=>$this->titol,'ruta'=>'/storage/images/galeria/'.$this->photo->hashName(),'apartat_id'=>$this->apartat]);
   if($insert){
    return redirect('/admin/galeria');
   }else{
        return back()->with('fail','Ha fallat al pujar la imatge');
   }

}
}
