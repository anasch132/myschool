<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('MIX_USER') . ':' . env('MIX_PASSUSER')),
        ])->acceptJson()->get('https://egdev.crmforschools.net/api/contacts');

        $total = $contacts['total'];
        $contacts = $contacts['contacts'];

        // print_r($contacts);
        return view('home', ['total' => $total, 'contacts' => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addcontact = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('MIX_USER') . ':' . env('MIX_PASSUSER')),
        ])->post('https://egdev.crmforschools.net/api/contacts/new', [
            'campus' => 'developer',
            'contact_type' => 'Lead',
            'owner' => '40',
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'birth_date' => $request->birthdate,
            'city' => $request->city,
            'state' => $request->state,
            'nationality' => $request->nationality
        ]);
        return $addcontact;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('MIX_USER') . ':' . env('MIX_PASSUSER')),
        ])->acceptJson()->get('https://egdev.crmforschools.net/api/contacts/' . $id);


        return view('edit', ['user' => $contact['contact']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editcontact = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('MIX_USER') . ':' . env('MIX_PASSUSER')),
        ])->patch('https://egdev.crmforschools.net/api/contacts/' . $id . '/edit', [
            'campus' => 'developer',
            'contact_type' => 'Lead',
            'owner' => '40',
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'birth_date' => $request->birthdate,
            'city' => $request->city,
            'state' => $request->state,
            'nationality' => $request->nationality
        ]);
        return $editcontact;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletecontact = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('MIX_USER') . ':' . env('MIX_PASSUSER')),
        ])->delete('https://egdev.crmforschools.net/api/contacts/' . $id . '/delete');

        return $deletecontact;
    }
}
