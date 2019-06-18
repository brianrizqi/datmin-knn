@extends('layout.app')
@section('content')
    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Tabel Data Penyakit Baru</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="static-table-list">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nanah</td>
                                        <td>Kulit Meradang</td>
                                        <td>Gatal</td>
                                        <td>Demam</td>
                                        <td>Nyeri Perih</td>
                                        <td>Status</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0;?>
                                    @foreach($data as $item)
                                        <?php $no++;?>
                                        <tr>
                                            <td>{{$no}}</td>
                                            @if($item['nanah'] == 1);
                                            <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['kulit_meradang'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['gatal'] == 1)
                                                <td>Terpusat</td>
                                            @else
                                                <td>Sekujur</td>
                                            @endif
                                            @if($item['demam'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['nyeri_perih'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['status'] == 1)
                                                <td>URTIKARIA</td>
                                            @elseif($item['status'] == 2)
                                                <td>PIODERMA</td>
                                            @else
                                                <td>HERPES</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Tabel Data Penyakit</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>ID</td>
                                        <td>Nanah</td>
                                        <td>Kulit Meradang</td>
                                        <td>Gatal</td>
                                        <td>Demam</td>
                                        <td>Nyeri Perih</td>
                                        <td>Euclidean Distance</td>
                                        <td>Status</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0;?>
                                    @foreach($hasil as $item)
                                        <?php $no++;?>
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$item['id']}}</td>
                                            @if($item['nanah'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['kulit_meradang'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['gatal'] == 1)
                                                <td>Terpusat</td>
                                            @else
                                                <td>Sekujur</td>
                                            @endif
                                            @if($item['demam'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            @if($item['nyeri_perih'] == 1)
                                                <td>Ya</td>
                                            @else
                                                <td>Tidak</td>
                                            @endif
                                            <td>{{$item['eu']}}</td>
                                            @if($item['status'] == 1)
                                                <td>URTIKARIA</td>
                                            @elseif($item['status'] == 2)
                                                <td>PIODERMA</td>
                                            @else
                                                <td>HERPES</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
