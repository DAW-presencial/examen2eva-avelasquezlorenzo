<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTutorRequest;
use App\Models\Tutor;

class TutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutorRequest $request)
    {
        $validated = $request->validated();

        $tutor = new Tutor([
            'enterprise'     => $request->get('enterprise'),
            'documentType' => $request->get('documentType'),
            'document' => $request->get('document'),
            'name' => $request->get('name'),
            'lastName' => $request->get('lastName'),
            'lastName2' => $request->get('lastName2'),
            'country' => $request->get('country'),
            'province' => $request->get('province'),
            'municipality' => $request->get('municipality'),
            'status' => $request->get('status'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
        ]);
        $tutor->save();
        // return redirect('/tutors')->with('success', 'Tutor saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
