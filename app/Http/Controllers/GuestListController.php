<?php

namespace App\Http\Controllers;
use App\GuestList;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $guestlists=GuestList::all();
      return view('guestlist.index', compact('guestlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('guestlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        GuestList::create(Request::all());
        return $this->redirectTo();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $guest = GuestList::find($id);
        return view('guestlist.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $guestlist = GuestList::find($id);
      return view('guestlist.edit', compact('guestlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(GuestList $guest,$id)
    {
      $guest->find($id)->update(Request::all());
      return $this->redirectTo();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       GuestList::find($id)->delete();
      return $this->redirectTo();
    }

    public function redirectTo()
    {
      return redirect('guestlists');
    }
}
