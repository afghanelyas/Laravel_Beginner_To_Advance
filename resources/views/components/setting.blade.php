@props(['heading'])
<div class=" max-w-full mb-10 border-b-2">
    <h1 class="text-lg font-bold mb-5">{{$heading}}</h1>
</div>
<div class="flex">
    <aside class="w-48 flex-shrink-0">
        <h4 class="font-semibold mb-4">Links</h4>
        <ul>
            <li class="mb-2">
                <a href="/admin/posts" class="{{request()->is('admin/posts') ? 'text-blue-500': ''}}">All
                    Posts
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin/posts/create"
                    class="{{request()->is('admin/posts/create') ? 'text-blue-500': ''}}text-blue-500">
                    New Post
                </a>
            </li>
        </ul>
    </aside>



    <main class="flex-1">
        <article class="bg-white border border-gray-200 mb-40  p-5  text-lg max-w-lg m-auto shadow-md leading-loose ">

            {{ $slot}}
        </article>
    </main>
</div>