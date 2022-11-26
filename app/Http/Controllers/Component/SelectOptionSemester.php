<?php

namespace App\Http\Controllers\Component;

use Livewire\Component;

class SelectOptionSemester extends Component
{
    public function render()
    {
        $semesters = $this->generateSemester();
        return view('component.select-option-semester', ['semesters' => $semesters]);
    }

    public function generateSemester()
    {
        $currentYear = date("Y");
        $semesters = [];

        for ($i=$currentYear+1; $i >= ($currentYear - 2); $i--) {
            $semesters[$i."2"] = $i."/".($i+1)." Semester Genap";
            $semesters[$i."1"] = $i."/".($i+1)." Semester Ganjil";
        }

        return $semesters;
    }
}
