@extends('layout.app')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Tabel <span class="table-project-n">Penyakit</span> Kulit</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                       data-show-columns="true" data-show-pagination-switch="true"
                                       data-show-refresh="true" data-key-events="true" data-show-toggle="true"
                                       data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                       data-toolbar="#toolbar">
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
                                    @foreach($knn as $item)
                                        <?php $no++;?>
                                        <tr>
                                            <td>{{$no}}</td>
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
