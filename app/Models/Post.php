<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $description;
    public $date;
    public $body;
    public $slug;
    public function __construct($title, $description, $date, $body, $slug)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        // return the cache file 
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts/")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortByDesc('date');
        });
    }

    public static function find($slug)
    {
       // of all the blog posts, find the one with a slug that matches the one that was requested
       $posts = static::all();
         return $posts->firstWhere('slug', $slug);
    }


}
