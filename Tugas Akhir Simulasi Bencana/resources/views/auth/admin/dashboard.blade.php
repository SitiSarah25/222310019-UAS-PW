@extends('templates.navbar')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h1 class="mt-5 pt-5 text-center">Sistem Simulasi Bencana</h1>
                    <div class="text-center mt-4">
                        <div id="map" style="width: 100%; height: 375px;"></div>
                    </div>
                    <form action="/dashboard" method="POST">
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
                                <select id="province" class="form-select" onchange="updateCities(this.value)"
                                    name="province_id">
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="city" class="form-label">Kota</label>
                                <select id="city" class="form-select" name="city_id">
                                    @if (isset($selectedCity))
                                        <option value="{{ $selectedCity->id }}">{{ $selectedCity->nama_kota }}</option>
                                    @else
                                        <option value="">Pilih Kota</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    <div class="container mt-5">
                        <h4>History Aktifitas Simulasi:</h4>
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Bencana Alam</th>
                                    <th scope="col">Waktu Simulasi</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th>
                                    <th scope="col">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                    <tr>
                                        <td>{{ $report->disaster->nama_bencana }}</td>
                                        <td>{{ $report->created_at }}</td>
                                        <td>{{ $report->city->nama_kota }}</td>
                                        <td>{{ $report->city->latitude }}</td>
                                        <td>{{ $report->city->longitude }}</td>
                                        <td><a href="{{ $report->city->lokasi }}" target="_blank">Lihat Lokasi</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
