<?php

namespace App\Http\Controllers;

use App\DirputModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class DirputController extends Controller
{
    public function construct__()
    {

        $this->middleware('guest');
    }

    public function index()
    {
        $dirput = DB::table('tb_dirput')->orderBy('created_at', 'desc')->get();

        return view('dirput_admin/v_dirput_admin', compact('dirput'));
    }

    public function create()
    {
        $data = [
            'title' => 'Input Dirput'
        ];
        return view('/dirput_admin/v_create_dirput', $data);
    }

    public function store(Request $request)
    {
        $data = new DirputModel();
        $data->no_banding = $request->no_banding;
        $data->j_perkara = $request->j_perkara;
        $data->tgl_put_banding = $request->tgl_put_banding;
        $data->putusan = $request->putusan;
        $data->save();

        if ($data->save())
            return redirect()->route('index')->with('alert-success', 'Berhasil Menambahkan Data!');
        else
            return redirect()->back()->withInput();
    }

    public function edit($id)
    {
        $data = DirputModel::where('id', $id)->get();

        return view('dirput_admin/v_edit_dirput', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = DirputModel::where('id', $id)->first();
        $data->no_banding = $request->no_banding;
        $data->j_perkara = $request->j_perkara;
        $data->tgl_put_banding = $request->tgl_put_banding;
        $data->putusan = $request->putusan;
        $data->save();
        if ($data->save())
            return redirect()->route('index')->with('alert-success', 'Berhasil Update Data!');
        else
            return redirect()->back()->withInput();
    }

    public function destroy($id)
    {
        $data = DirputModel::where('id', $id)->first();
        $data->delete();
        if ($data->delete())
            return redirect()->route('index')->with('alert-success', 'Berhasil Update Data!');
        else
            return redirect()->back()->withInput();
    }
}
