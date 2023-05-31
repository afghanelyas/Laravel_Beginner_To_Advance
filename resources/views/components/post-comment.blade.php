@props(['comment'])

<div class="bg-white border border-gray-200 space-y-4 mb-10 rounded-md shadow-lg p-4">

    <figure class="md:flex rounded-xl p-8  md:p-0">
        <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto p-4" src="https://i.pravatar.cc/60?u={{ $comment->id }}"
            alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <div class="font-medium">
                <div class="text-sky-500 dark:text-sky-400">
                    {{ $comment->author->username }}
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    {{$comment->created_at}}
                </div>
            </div>

            {{$comment->body}}


        </div>
    </figure>
</div>