@extends('layouts.dashboard.master')

@section('title','Edit Article')

@section('link')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Body: Header -->
    <div class="body-header border-0 rounded-0 px-xl-4 px-md-2">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <ol class="breadcrumb rounded-0 mb-0 ps-0 bg-transparent flex-grow-1">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.article.all') }}"><i class="fa fa-undo" aria-hidden="true"></i> Kembali</a></li>
                        </ol>
                    </div>
                </div>
            </div> <!-- .row end -->

        </div>
    </div>

    <!-- Body: Body -->
    <div class="body px-xl-4 px-md-2">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card mb-4 border-0 lift">
                        <div class="card-header py-3 d-flex flex-wrap justify-content-between align-items-center bg-transparent border-bottom-0">
                            <div>
                                <h6 class="card-title m-0">Edit Article</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- start --}}
                            <form class="row g-3" method="POST" action="{{ route('dashboard.article.update',['id' => $result->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="judul">Judul <i class="text-danger" style="font-size: 16px;">*</i></label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="exampleInputText1" placeholder="Judul" value="{{ old('judul',$result->judul) }}" autofocus>
                                    @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Isi</label>
                                    <textarea class="ckeditor form-control ckeditor @error('isi') is-invalid @enderror" id="editor" name="isi" rows="5">{!! $result->isi !!}</textarea>
                                    @error('isi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="customFile" name="foto" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Foto</label>
                                    </div>
                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            {{-- end --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $("#alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-success").slideUp(500);
        });

        $("#alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-danger").slideUp(500);
        });

        $(document).ready(function() {
            $('#editor').summernote({
                placeholder: "Let's write",
                height: 700,
                fontSizes: ['12', '14', '16', '18', '24', '36', '48'],
                toolbar: [
                ['fontname', ['fontname']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture', 'myvideo', 'link', 'table', 'hr']],
                ['misc', ['undo', 'redo']]
                ],
                disableDragAndDrop: true,
                shortcut: false
            });
        });
    </script>
@endsection
