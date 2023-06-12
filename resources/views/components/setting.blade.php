@props(['hedding'])
<div class=" max-w-full mb-10 border-b-2">
    <h1 class="text-lg font-bold mb-5">{{$hedding}}</h1>
</div>
<div class="flex">
    <aside class="w-48">
        <h4 class="font-semibold mb-4">Links</h4>
        <ul>
            <li class="mb-2"><a href="/admin/posts" class="text-blue-500">All Posts</a></li> 
           <li class="mb-2"><a href="/admin/posts/create" class="text-blue-500">New Post</a></li>
        </ul>
    </aside>



    <main class="flex-1">
        <article class="bg-white border border-gray-200 mb-40  p-5  text-lg max-w-lg m-auto shadow-md leading-loose ">

            {{ $slot}}
        </article>
    </main>
</div>