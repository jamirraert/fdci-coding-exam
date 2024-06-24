<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {

        $contacts = Contact::all();

        return view('contact.contact', compact('contacts'));
    }
    public function create() {
        return view('contact.add');
    }

    public function store(Request $request) {   
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:contacts,email',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'company' => $request->company,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $successMessage = 'Contact added successfully!';

        return redirect()->route('contact.create', compact('successMessage'));
    }

    public function edit($id) {
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:contacts,email,' . $id,
        ]);

        $contact = Contact::findOrFail($id);

        $contact->update($request->only('name', 'company', 'phone', 'email'));
        

        return redirect()->route('contact.edit', ['id' => $id])->with('success', 'Contact updated successfully!');
    }

    // public function destroy($id, Request $request) {
    //     $contact = Contact::findOrFail($id);

    //     $contact->delete();

    //     return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    //     // return redirect()->back()->with('success', 'Contact deleted successfully!');
    // }

    public function searchUsers(Request $request)
    {
        $keyword = $request->input('keyword');

        $search = Contact::where(function ($query) use ($keyword) {
            $query->where('name', 'like', '%'.$keyword.'%')
                ->orWhere('company', 'like', '%'.$keyword.'%')
                ->orWhere('email', 'like', '%'.$keyword.'%');
        })->paginate(10);

        return view('contact.search', compact('search'));
    }
}
