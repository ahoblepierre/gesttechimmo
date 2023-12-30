@extends('admin.layout.template')

@push('style')

<style>
    /* Facultatif : pour personnaliser le style de la textarea */
    textarea {
        width: 100%;
        height: 100px!important; /* Ajustez la hauteur selon vos besoins */
        resize: vertical; /* Permet à l'utilisateur de redimensionner verticalement */
    }
</style>

@endpush

@section('contenu')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve a l'edition d'un temoignage</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Moifier un temoignage</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('update.temoignage',$temoignage->id) }}" method="POST" id="formService" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Nom & Prénoms
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('name') is-invalid @enderror"
                                        placeholder="Nom & Prénoms" name="name" required value="{{old("name", $temoignage->name)}}">
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
                                        placeholder="Profession" name="profession" required value="{{old("profession", $temoignage->profession)}}">
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
                                    <textarea name="content" class="form-control" cols="50"> {{old("content", $temoignage->description)}}</textarea>
                                </div>
    
                        
                                @error('content')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-lg-4 col-form-label" for="validationCustom01">Image du Service
                                    
                                </label>
                                <div class="form-file">
                                    <input type="file" name="file"
                                        class="form-file-input form-control  @error('file') is-invalid @enderror"  accept="/images">
                                </div>
                                <span class="mt-3 text-warning ">Laisser vide si vous ne voulez pas modifier</span>
                                @error('file')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary" form="formService">Modifier</button>
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
