<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::orderBy('english', 'ASC')->get();
        return response()->json($words);
    }

    public function create()
    {
        // return view('word.form');
    }

    public function store(Request $request)
    {
        $word = new Word;
        $word->english = $request->english;
        $word->portuguese = $request->portuguese;
        $word->save();
        return response()->json($word);
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $word = Word::find($id);
        return response()->json($word);
    }

    public function update(Request $request, $id)
    {
        $word = Word::find($id);
        $word->english = $request->english;
        $word->portuguese = $request->portuguese;
        $word->save();
        return response()->json($word);
    }

    public function destroy($id)
    {
        $word = Word::find($id);
        $word->delete();
        return response()->json(['success' => true]);        
    }

    public function import(Request $request)
    {
        return response()->json(['success' => true]); 
    }
}
