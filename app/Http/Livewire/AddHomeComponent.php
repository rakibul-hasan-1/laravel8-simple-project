<?php

namespace App\Http\Livewire;

use App\Models\Home;
use Livewire\Component;

class AddHomeComponent extends Component
{
    public $name;
    public $phone;
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'phone'=>'required'
        ]);
    }
    public function saveData(){
        $this->validate([
            'name'=>'required',
            'phone'=>'required'
        ]);
        $data=new Home();
        $data->name=$this->name;
        $data->phone=$this->phone;
        $data->save();
        session()->flash('message','Student Details has been saved successfully!');
    }
    public function render()
    {
        $data=Home::all();
        return view('livewire.add-home-component',['data'=>$data])->layout('layouts.base');
    }
}
