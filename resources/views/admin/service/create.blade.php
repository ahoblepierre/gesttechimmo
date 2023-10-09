@extends('admin.layout.template')

@push('style')
@endpush

@section('contenu')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve a l'ajout d'un service</a></li>
    </ol>
</div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ajouter un service</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" >Titre
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Titre" name="titre" required>
                                </div>
                                @error('titre')
                                    <span class="invalid-feedback mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="description">Description
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="custom-ekeditor  @error('description') is-invalid @enderror">
                                    <div id="ckeditor"></div>
                                </div>
                                @error('titre')
                                    <span class="invalid-feedback mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-lg-4 col-form-label" for="validationCustom01">Image du Service
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-file">
                                    <input type="file"
                                        class="form-file-input form-control  @error('titre') is-invalid @enderror" required>
                                </div>
                                @error('file')
                                    <span class="invalid-feedback mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
@endpush
