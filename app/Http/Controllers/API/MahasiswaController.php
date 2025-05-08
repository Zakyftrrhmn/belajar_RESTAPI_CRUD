<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return MahasiswaResource::collection($mahasiswa);
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return MahasiswaResource::make($mahasiswa);
    }

    public function store(Request $request)
    {
        // silahkan tambahkan validasi jika mau
        $mahasiswa = Mahasiswa::create($request->all());
        return MahasiswaResource::make($mahasiswa);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // silahkan tambahkan validasi jika mau
        $mahasiswa->update($request->all());
        return MahasiswaResource::make($mahasiswa);
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->noContent();
    }
}
