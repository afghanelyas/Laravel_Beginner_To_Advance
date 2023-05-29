<?php

namespace App\View\Components;

use App\Models\Category;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropDown extends Component
{
   
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-drop-down',[
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug' , request('category'))
        ]);
    }
}
