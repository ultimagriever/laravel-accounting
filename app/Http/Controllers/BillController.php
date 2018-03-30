<?php

namespace App\Http\Controllers;
use App\Bill;
use App\Http\Requests\BillRequest;
use Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bills = Bill::all();
      return Request::wantsJson() ? $bills : view('bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bill = new Bill();

        return view('bills.create', compact('bill'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillRequest $request)
    {
        $bill = Bill::create($request->all());

        return Request::wantsJson() ? $bill : redirect('bills');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill = Bill::find($id);

        return Request::wantsJson() ? $bill : view('bills.show', compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = Bill::find($id);

        return view('bills.edit', compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BillRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BillRequest $request, $id)
    {
        $bill = Bill::find($id);
        $bill->update($request->all());

        return Request::wantsJson() ? $bill : redirect('bills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        $deleted = $bill->delete();

        return Request::wantsJson() ? (string) $deleted : redirect('bills');
    }
}
