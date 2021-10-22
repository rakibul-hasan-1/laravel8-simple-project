<?php

namespace App\Http\Livewire;

use App\Models\Home;
use Livewire\Component;

class HomeComponent extends Component
{
    public function delete($id){
        $data=Home::find($id);
        $data->delete();
        session()->flash('message','Record deleted Successfully!');
    }

    public function render()
    {
        $data=Home::all();
        return view('livewire.home-component',['data'=>$data])->layout('layouts.base');
    }
}
