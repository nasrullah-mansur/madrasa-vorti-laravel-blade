<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function index() {
        $years = Year::all();
        return view('back.year.index', ['years' => $years]);
    }

    public function create() {
        return view('back.year.create');
    }
    public function store(Request $request) {
        $request->validate([
            'year' => "required|max:256"
        ], [
            "year.required" => "দয়া করে কিছু লিখুন"
        ]);

        $year = new Year();
        $year->year = convertToEnglishFont($request->year);
        $year->save();

        return redirect()->route('year.index')->with('success', "আপনি সফলভাবে শিক্ষাবর্ষ যুক্ত করেছেন");
    }

    public function edit($id) {
        $year = Year::where('id', $id)->firstOrFail();

        return view('back.year.edit', ['year' => $year]);
    }

    public function update(Request $request) {
        $request->validate([
            'year' => "required|max:256"
        ], [
            "year.required" => "দয়া করে কিছু লিখুন"
        ]);

        $year = Year::where('id', $request->id)->firstOrFail();

        $year->year = convertToEnglishFont($request->year);
        $year->save();

        return redirect()->route('year.index')->with('success', "আপনি সফলভাবে শিক্ষাবর্ষ এডিট করেছেন");
    }
    public function delete($id) {
        $year = Year::where('id', $id)->firstOrFail(); 
        $month = Month::where('year_id', $year->id)->first();
        if($month) {
            return redirect()->back()->withErrors(['error' => 'এই বর্ষে এখনও একটি মাস সংযুক্ত আছে। এটি মুছে ফেলা সম্ভব নয়।']);
        } else {
            $year->delete();
            return redirect()->route('year.index')->with('success', "আপনি সফলভাবে শিক্ষাবর্ষ রিমুভ করেছেন");
        }
    }
}
