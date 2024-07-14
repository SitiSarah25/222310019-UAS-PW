@extends('index')

@section('content')
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 40rem; ">
                <div class="card-body ">
                    <h5 class="card-title text-center fs-2 text-danger" style="margin-bottom: 35px">Admin !n Aware</h5>

                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Masukkan Password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger w-100 mb-2">Submit</button><br>

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger mt-2">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
