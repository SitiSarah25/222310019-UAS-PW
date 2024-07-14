@extends('templates.navbar')

@section('content')
    <div class="container mt-5">
        <h1 class="mt-5 pt-5">Respon Bencana Alam</h1>
        <div class="form-row align-items-center">
            <div class="col-auto">
                <form action="/response" method="POST">
                    @csrf
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="disasterType" class="form-label">Tipe Bencana Alam</label>
                            <select id="disasterType" class="form-select" name="disaster_id">
                                @foreach ($disasters as $disaster)
                                    <option value="{{ $disaster->id }}">{{ $disaster->nama_bencana }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="region" class="form-label">Wilayah</label>
                            <select id="region" class="form-select" name="province_id">
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->nama_provinsi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-auto mt-4">
                        <button type="submit" class="btn btn-primary mb-2">Cari</button>
                    </div>
                </form>
            </div>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Nama Bencana</th>
                        <th>Wilayah</th>
                        <th>Kota</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Jumlah Responden</th>
                    </tr>
                </thead>
                @if (!isset($reports))
                    <p>Tidak ada data</p>
                @elseif (!isset($totalRespondents))
                    <p>Tidak ada data</p>
                @elseif(!isset($provinceRespondentCounts))
                    <p>Tidak ada data</p>
                @else
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->disaster->nama_bencana }}</td>
                                <td>{{ $report->province->nama_provinsi }}</td>
                                <td>{{ $report->city->nama_kota }}</td>
                                <td>{{ $report->city->latitude }}</td>
                                <td>{{ $report->city->longitude }}</td>
                                <td>{{ $provinceRespondentCounts[$report->province_id] ?? 0 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>
@endsection
