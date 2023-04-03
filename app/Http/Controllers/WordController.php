<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::orderBy('english', 'ASC')->get();
        return view('word.index', compact('words'));
    }

    public function create()
    {
        return view('word.form');
    }

    public function store(Request $request)
    {
        $word = new Word;
        $word->english = $request->english;
        $word->portuguese = $request->portuguese;
        $word->save();

        return redirect(route('word.index'));
        
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
