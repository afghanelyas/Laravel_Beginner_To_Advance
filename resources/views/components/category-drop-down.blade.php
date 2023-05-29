<x-dropdown>
          <x-slot name="trigger">
              <button
                  class=" rounded-md border-0 bg-white py-1.5  pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 pl-5 " 
                  >{{ isset($currentCategory) ? ucwords($currentCategory->name): 'categories'}}
              </button>
          </x-slot>
              <x-dropdown-item href="/" :active="request()->routeIs('home')" >All</x-dropdown-item>
               @foreach ($categories as $category)
                  <x-dropdown-item href="/?category={{ $category->slug }}"
                    :active='request()->is("categories/{$category->slug}")'
                    >{{ ucwords( $category->name )}}</x-dropdown-item>
              @endforeach
            </x-dropdown>