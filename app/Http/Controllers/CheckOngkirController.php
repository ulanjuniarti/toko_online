<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckOngkirController extends Controller
{
    public function cekongkir()
    {
        return view('cek-ongkir.index');
    }

    public function province(Request $request)
    {
        try {
            $provinces = Province::where('name', 'like', '%' . $request->keyword . '%')->select('id', 'name')->get();

            $data = $provinces->map(function ($province) {
                return [
                    'id'   => $province->id,
                    'text' => $province->name,
                ];
            });

            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Data Fetch Failed',
                'data'    => [],
            ]);
        }
    }

    public function city(Request $request)
    {
        try {
            $cities = City::where('province_id', $request->province_id)
                ->where('name', 'like', '%' . $request->keyword . '%')
                ->select('id', 'name')
                ->get();

            $data = $cities->map(function ($city) {
                return [
                    'id'   => $city->id,
                    'text' => $city->name,
                ];
            });

            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Data Fetch Failed',
                'data'    => [],
            ]);
        }
    }

    public function hitungongkir(Request $request)
    {
        try {
            $response = Http::withOptions(['verify' => false])->withHeaders([
                'key' => env('RAJAONGKIR_API_KEY'),
            ])->post('https://api.rajaongkir.com/starter/cost', [
                'origin'      => $request->origin,
                'destination' => $request->destination,
                'weight'      => $request->weight,
                'courier'     => $request->courier,
            ])->json()['rajaongkir']['results'][0]['costs'];

            return response()->json($response);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'data'    => [],
            ]);
        }
    }
}