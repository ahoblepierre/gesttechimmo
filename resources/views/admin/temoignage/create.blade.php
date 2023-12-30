@extends('admin.layout.template')

@push('style')
<style>
    /* Facultatif : pour personnaliser le style de la textarea */
    textarea {
        min-height: 100px !important;
		max-height: 150px !important;
        /* width: 100%;
        height: 250px; Ajustez la hauteur selon vos besoins */
        resize: vertical; /* Permet à l'utilisateur de redimensionner verticalement */
    }
</style>
@endpush

@section('contenu')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve a l'ajout d'un temoignage</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ajouter un temoignage</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('store.temoignage') }}" method="POST" id="formService" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Nom & Prénoms
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('name') is-invalid @enderror"
                                        placeholder="Nom & Prénoms" name="name" required value="{{old("name")}}">
                                </div>
                                @error('name')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Profession
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('profession') is-invalid @enderror"
                                        placeholder="Profession" name="profession" required value="{{old("profession")}}">
                                </div>
                                @error('name')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="description">Description
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <textarea name="content" class="form-control"  cols="50"> {{old("content")}}</textarea>
                                </div>
    
                        
                                @error('content')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-lg-4 col-form-label" for="validationCustom01">Image du Service
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-file">
                                    <input type="file" name="file"
                                        class="form-file-input form-control  @error('file') is-invalid @enderror" required accept="/images">
                                </div>
                                @error('file')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
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
