@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="container mr-5 ml-5">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="">All Collaboration</h1>
            </div>
            <h4 class="">Kode Member : @foreach ($kode as $item)
                    {{ $item->member_kode }}
                @endforeach
            </h4>
            @if (session()->has('pesan'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('pesan') }}
                </div>
            @endif
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="text-futura-bold">Add New People</span>
                </button>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive container mt-3">
                        <table class="table" id="">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Access</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($team as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>
                                            @if ($item->workspace->owner_id == $item->user->id)
                                                owner
                                            @else
                                                Editor
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->workspace->owner_id == $item->user->id)
                                            @else
                                            <form action="/{{ session('myworkspaceid') }}/{{ $item->id }}/"
                                                method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin akan mengkick user ?')"><span
                                                        data-feather="trash-2"></span>Kick</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content bg-light">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="myform bg-light text-black container">
                                <h1 class="text-center">Invite user</h1>
                                <form method="post" action="/team-backend/{{ session('myworkspaceid') }}">
                                    <div class="row mb-3"></div>
                                    @csrf
                                    <div class="mb-2">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" placeholder="Email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3"></div>
                                    <button type="submit" class="btn btn-primary w-100">Create</button>
                                    <div class="row mb-2"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
{{-- <input type="hidden" id="table-url" value="{{route('table')}}"> --}}
