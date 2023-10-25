@extends('admin.layout.template')

@push('style')
@endpush

@section('contenu')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve à la modification d'un service</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Modifier un service</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('update.service') }}" method="POST" id="formService" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$service->id}}" name="id">
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Titre
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Titre" name="titre" required value="{{old("titre", $service->title)}}">
                                </div>
                                @error('titre')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="description">Description
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <textarea name="content" class="form-control" id="editor"> {{old("content", $service->description)}}</textarea>
                                </div>
                                {{-- <div class="custom-ekeditor  @error('description') is-invalid @enderror">
                                    <div id="ckeditor"></div>
                                </div> --}}
                                @error('content')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-lg-4 col-form-label" for="validationCustom01">Image du Service
                                </label>
                                <div class="form-file">
                                    <input type="file" name="file"
                                        class="form-file-input form-control  @error('file') is-invalid @enderror">
                                </div>
                               <p class="mt-3 text-italic text-warning">Laisser ce champ vide si vous ne voulez pas modifié l'image *</p>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary" form="formService">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script> --}}
@endpush
