<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BraceSection extends Component
{
    public $id;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sectionName)
    {
        $this->id = $sectionName;
        $this->generateTitle();
    }

    private function generateTitle()
    {
        if (strpos($this->id, "-") >= 0) {
            $words = explode("-", $this->id);
            for ($i = 0; $i < count($words); $i++) {
                $words[$i] = strtoupper($words[$i][0]) . substr($words[$i], 1);
            }
            $this->title = implode(" ", $words);
        }
        else $this->title = strtoupper($this->id[0]) . substr($this->id, 1);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brace-section');
    }
}
