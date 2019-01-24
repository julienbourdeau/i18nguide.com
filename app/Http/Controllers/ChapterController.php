<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChapterController extends Controller
{
    public function show($slug)
    {
        $chapters = File::get(docs_path('chapters.md'));

        $file = docs_path($slug.'.md');

        return view('pages.chapter', [
            'toc' => markdown($chapters),
            'content' => markdown(File::get($file)),
        ]);
    }
}
