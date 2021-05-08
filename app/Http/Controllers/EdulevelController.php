<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdulevelController extends Controller
{


    public function data()
    {
        $edulevels = DB::table('edulevels')->get();
        return view('edulevel.data', compact('edulevels'));

        //  return view('edulevel.data',['edulevels'=>$edulevels]);
        // return $users;

    }

    public function add()
    {
        return view('edulevel.add');
    }

    public function addProcess(Request $request)
    {
        // return $request;
        DB::table('edulevels')->insert(
            [
                'name' => $request->name,
                'desc' => $request->desc,
            ]
        );

        return redirect('edulevels')->with('status', 'Telah berhasi; dibuat');
    }


    public function edit($id)
    {
        $edulevel = DB::table('edulevels')->where('id', $id)->first();
        return view('edulevel.edit', compact('edulevel'));
        // return $edulevel;

    }

    public function update(Request $request, $id)
    {
        $edulevel = DB::table('edulevels')->where('id', $id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        return redirect('edulevels')->with('status', 'Telah berhasi di update');
    }

    public function delete($id){
      
        DB::table('edulevels')->where('id',$id)->delete();
        return redirect('edulevels')->with('status', 'Telah berhasi di hapus');
    }
}
