<?php

namespace App\Http\Controllers;

use App\KNN;
use Illuminate\Http\Request;

class KNNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knn = KNN::all();
        return view('knn', ['knn' => $knn]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_knn');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $k = 4;
        $knn = KNN::all();
        $hasil = array();
        foreach ($knn as $item) {
            $items = array();
            $items['id'] = $item['id'];
            $items['nanah'] = $item['nanah'];
            $items['kulit_meradang'] = $item['kulit_meradang'];
            $items['gatal'] = $item['gatal'];
            $items['demam'] = $item['demam'];
            $items['nyeri_perih'] = $item['nyeri_perih'];
            $items['status'] = $item['status'];
            $items['eu'] = round(
                sqrt((pow($item['nanah'] - $request['nanah'], 2)) +
                    (pow($item['kulit_meradang'] - $request['kulit_meradang'], 2)) +
                    (pow($item['gatal'] - $request['gatal'], 2)) +
                    (pow($item['demam'] - $request['demam'], 2)) +
                    (pow($item['nyeri_perih'] - $request['nyeri_perih'], 2))
                ), 2);
            array_push($hasil, $items);
        }
        usort($hasil, function ($a, $b) {
            return $a['eu'] <=> $b['eu'] ?: $a['id'] <=> $b['id'];
});
        $a = 0;
        $arraybaru = array();
        foreach ($hasil as $item) {
            $a++;
            if ($a > $k) {
                break;
            } else {
                $array = $item['status'];
            }
            array_push($arraybaru, $array);
        }
        $values = array_count_values($arraybaru);
        $mode = array_search(max($values), $values);

        $data [] = array(
            'nanah' => $request->nanah,
            'kulit_meradang' => $request->kulit_meradang,
            'gatal' => $request->gatal,
            'demam' => $request->demam,
            'nyeri_perih' => $request->nyeri_perih,
            'status' => $mode
        );
//        dd($hasil);
//        die;
        return view('hasil', ['hasil' => $hasil, 'data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\KNN $kNN
     * @return \Illuminate\Http\Response
     */
    public function show(KNN $kNN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\KNN $kNN
     * @return \Illuminate\Http\Response
     */
    public function edit(KNN $kNN)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\KNN $kNN
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KNN $kNN)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\KNN $kNN
     * @return \Illuminate\Http\Response
     */
    public function destroy(KNN $kNN)
    {
        //
    }
}
