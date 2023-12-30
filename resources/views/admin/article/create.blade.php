@extends('admin.layout.template')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.9/tagify.min.css"
        integrity="sha512-yWu5jVw5P8+IsI7tK+Uuc7pFfQvWiBfFfVlT5r0KP6UogGtZEc4BxDIhNwUysMKbLjqCezf6D8l6lWNQI6MR7Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('contenu')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve a l'ajout d'un article</a>
            </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ajouter un article</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('store.article') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Titre
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Titre" name="titre" required value="{{ old('titre') }}">
                                </div>
                                @error('titre')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Catégorie de l'article
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <select class="default-select select2 form-control wide mb-3" name="category" required>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->title }} </option>
                                        @endforeach
                                    </select>


                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label">Tags
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control input-default" placeholder="Tags"
                                                name="tags" required value="{{ old('tags') }}" id="tags">
                                        </div>
                                        <span class="fw-italic"> Veuillez séparer par une virgule pour ajouter plusieurs tags</span>

                                    </div>

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
                                    <textarea name="content" class="form-control" id="editor" required> {{ old('content') }}</textarea>
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
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-file">
                                    <input type="file" name="file"
                                        class="form-file-input form-control  @error('file') is-invalid @enderror" required>
                                </div>
                                @error('file')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.9/tagify.min.js"
        integrity="sha512-E6nwMgRlXtH01Lbn4sgPAn+WoV2UoEBlpgg9Ghs/YYOmxNpnOAS49+14JMxIKxKSH3DqsAUi13vo/y1wo9S/1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();


            var tagInput = document.getElementById('tags')
            // initialize Tagify on the above input node reference
            new Tagify(tagInput)



        });
    </script>
@endpush
