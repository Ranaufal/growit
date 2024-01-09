@extends('pages.layouts.main')

@section('container')
    <div class="row mb-5"></div>
    <div class="">
        {{-- Enroll the workspace  --}}
        <div class="container my-4">
            <h2 class="text-center">Enrollment Workspace</h2>
            <form method="post" action="/workspace-user">
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="input-group w-50  my-2">
                        <input type="text" class="form-control fs-5 py-3" placeholder="Enroll Workspace" name="enrollcode"
                            aria-label="Enroll" aria-describedby="basic-addon1">
                        <button class="btn btn-primary px-5" type="submit">Enroll</button>
                    </div>
                </div>
            </form>
        </div>




        <div class="container">
            <h2 class="font-weight-light">Recent Project</h2>
            <div class="d-flex flex-row flex-nowrap overflow-auto py-3 text-black gap-4">
                <div class="card card-body ">Card</div>
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
            </div>
            <div class="mb-4"></div>
            {{-- Workspace  ----------- --}}
            <h2 class="font-weight-light">Workspaces</h2>
            <div class="row">
                {{-- <a href="/workspace/create" class="text-decoration-none col-sm-3 mb-3 text-white">
                <img src="https://icon-library.com/images/add-image-icon-png/add-image-icon-png-17.jpg" class="h-10"
                    style="height: 70px; position: absolute; margin-left: 90px; margin-top: 50px">
                <div class=" bg-light rounded" style="height: 170px; ">
                </div>
                <div class="mb-2"></div>
                <b class="fs-6"></b> <br>
                <label class=" fw-lighter fs-6"></label>
            </a> --}}
                {{-- --------------------- --}}
                <!-- Button trigger modal -->
                <button type="button" class="text-decoration-none col-sm-3 mb-3 text-white border-0 bg-transparent"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class=" bg-primary rounded d-flex align-items-center justify-content-center"
                        style="height: 170px; ">
                        <span class="text-futura-bold">Create +</span>
                    </div>
                    <div class="mb-2"></div>
                    <b class="fs-6"></b> <br>
                    <label class=" fw-lighter fs-6"></label>
                </button>

                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content bg-light">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="myform bg-light text-black container">
                                    <h1 class="text-center">Create Workspace</h1>
                                    <form method="post" action="/workspace">
                                        <div class="row mb-3"></div>
                                        @csrf
                                        <div class="mb-2">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" placeholder="Workspace Name">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <input type="text" class="form-control @error('coh') is-invalid @enderror"
                                                name="coh" value="{{ old('coh') }}" placeholder="Cash on Hand">
                                            @error('coh')
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
                {{-- --------------------- --}}


                @foreach ($workspaces as $item)
                    <a href="/dash/{{ $item->workspace->id }}/{{ $item->workspace->workspace_name }}"
                        class="text-decoration-none col-sm-3 mb-3 text-white">
                        <div class=" bg-growitprimary rounded" style="height: 170px"></div>
                        <div class="mb-2"></div>
                        <b class="fs-6">{{ $item->workspace->workspace_name }}</b> <br>
                        @if ($item->workspace->owner_id === auth()->user()->id)
                            <label class=" fw-lighter fs-6">Owner </label>
                        @else
                            <label class=" fw-lighter fs-6">Viewer</label>
                        @endif
                    </a>
                @endforeach
                {{-- @for ($i = 0; $i < 6; $i++)
            <a href="" class="text-decoration-none col-sm-3 mb-3 text-white">
                <div class=" bg-light rounded" style="height: 170px"></div>
                <div class="mb-2"></div>
                <b class="fs-6">Title</b> <br>
                <label class=" fw-lighter fs-6">Viewer</label>
            </a>
        @endfor
        @for ($i = 0; $i < 3; $i++)
            <a href="" class="text-decoration-none col-sm-3 mb-3 text-white">
                <div class=" bg-light rounded" style="height: 170px"></div>
                <div class="mb-2"></div>
                <b class="fs-6 ">Title</b> <br>
                <label class=" fw-lighter fs-6 ">Owner</label>
            </a>
        @endfor --}}
            </div>
        </div>
    </div>
@endsection
