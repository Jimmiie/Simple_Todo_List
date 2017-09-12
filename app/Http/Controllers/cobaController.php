<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DataList;

class cobaController extends Controller
{
    public function index()
    {
        return view('list');
    }

    public function tampil(){
        $listdata= DataList::orderBy('created_at','desc')->get();
        return view('tampildata',compact('listdata'));
    }

    public function hapusall(Request $request){
        foreach ($request['id'] as $id) {
            $datalist=DataList::find($id);
            $datalist->delete();
        }

    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $datalist = new DataList;
        $datalist->name = $request['name'];
        $datalist->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $datalist= DataList::find($id);
        $datalist->delete();
    }
}
