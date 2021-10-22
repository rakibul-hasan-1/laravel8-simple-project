<?php

namespace App\Http\Livewire;

use App\Models\Home;
use Livewire\Component;

class EditHomeComponent extends Component
{
    public $student_id;
    public $name;
    public $phone;

    public function mount($student_id){
        $this->student_id=$student_id;
        $student=Home::where('id',$this->student_id)->first();
        $this->name=$student->name;
        $this->phone=$student->phone;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'phone'=>'required'
        ]);
    }

    public function updateStudent(){
        $this->validate([
            'name'=>'required',
            'phone'=>'required'
        ]);
        $student=Home::find($this->student_id);
        $student->name=$this->name;
        $student->phone=$this->phone;
        $student->save();
        session()->flash('message','Students Details has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.edit-home-component')->layout('layouts.base');
    }
}
