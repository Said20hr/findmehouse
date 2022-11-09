<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Form extends Component
{
    public $step;
    public $data = [];
    public $interior =[];

    public $city ;
    public $number ;
    public $composition ;
    public $pet ;
    public $budget  ;
    public $name ;
    public $email ;
    public $phone ;
    public $birth_date;
    public $employer ;
    public $accept ;
    public $income ;

    protected $listeners = ['step-2' => '$refresh'];


    public function mount($city)
    {
      $this->step  = 1;
      $this->city = $city;
      $this->number =1;
      $this->composition ="single";
      $this->pet = "no-pets";
      $this->budget = 650;
    }

    public function changeStep($number)
    {
        if ($number == 3)
        {
            if ( !empty($this->data) && !empty($this->information))
            {
                $this->step = $number;
                $this->emit('step-'.$number);
            }
        }
        if ($number == 2)
        {
            if ( $this->data  != [])
            {
                $this->step = $number;
                $this->emit('step-'.$number);
            }
        }
        if ($number == 1)
        {
            $this->step = $number;
            $this->emit('step-'.$number);
        }

    }
    public function StepOne()
    {
        $validatedData = $this->validate([
            'city' => 'required|string',
            'number' => 'required|numeric',
            'composition' => 'required|string',
            'pet' => 'required|string',
            'budget' => 'required|numeric|min:650',
            'interior' => 'required',
        ]);
        $this->data = $validatedData;

        $this->step =2;
        $this->emit('step-2');
    }
    public function StepTwo()
    {

        $validatedData2 = $this->validate([
            'name' => 'required|string',
            'email' =>  'required|email',
            'phone' => 'required|string',
            'birth_date'=> 'required|date',
            'employer'=> 'required|string',
            'income'=> 'required|numeric'
        ]);
        $this->data = array_merge($this->data,$validatedData2);

        $this->step = 3;
        $this->emit('step-2');
    }
    public function StepThree()
    {
        $validatedData3 = $this->validate([
            'accept' => 'required|string',
        ]);

        \App\Models\Contact::create($this->data);
        $this->step = 4;
        $this->emit('saved');

    }
    public function decrease()
    {
        if ($this->number > 1)
        {
            $this->number--;
        }
        else
        {
            $this->number == 1;
        }
    }
    public function increase()
    {
        if ($this->number < 10)
        {
            $this->number++;
        }
        else
        {
            $this->number == 10;
        }
    }
    public function render()
    {

        return view('livewire.form');

    }
}
