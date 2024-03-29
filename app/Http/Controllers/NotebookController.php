<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;

class NotebookController extends Controller
{
    public function index()
    {
        return Notebook::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'company' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'nullable|date',
            'photo' => 'nullable',
        ]);

        $notebook = Notebook::create($validatedData);

        return $notebook;
    }

    public function show($id)
    {
        return Notebook::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $notebook = Notebook::findOrFail($id);

        $validatedData = $request->validate([
            'full_name' => 'required',
            'company' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'nullable|date',
            'photo' => 'nullable',
        ]);

        $notebook->update($validatedData);

        return $notebook;
    }


    public function destroy($id){
        $notebook = Notebook::findOrFail($id);
        $notebook->delete();

        return ['message' => 'Notebook deleted'];
    }

}
