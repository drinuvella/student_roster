<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CollegeController extends Controller
{
    public function index(){
        $colleges = College::all();

        return view('college.index',compact('colleges')) ;
    }

    public function create(){
        $college = new College();
        return view('college.create', compact('college'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required',Rule::unique('colleges')],
            'address' => 'required',
        ]);

        College::create($request->all());
        return redirect()->route('college.index');
    }

    public function edit($id){
        $college = College::find($id);
        if(is_null($college))
            return redirect()->route('college.index');

        return view('college.edit',compact('college'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required', Rule::unique('colleges')->ignore($id)],
            'address' => 'required',
        ]);

        $college = College::find($id);
        if(is_null($college))
            return redirect()->route('college.index');

        $college->update($request->all());

        return redirect()->route('college.index');
    }

    public function destroy($id){
        $college = College::find($id);
        if(is_null($college))
            return redirect()->route('college.index');

        $college->delete();
        return redirect()->route('college.index');
    }
}
