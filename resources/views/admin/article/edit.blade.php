@extends('admin.layout.template')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.9/tagify.min.css"
        integrity="sha512-yWu5jVw5P8+IsI7tK+Uuc7pFfQvWiBfFfVlT5r0KP6UogGtZEc4BxDIhNwUysMKbLjqCezf6D8l6lWNQI6MR7Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('contenu')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve a la modification d'un article</a></li>
    </ol>
</div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Modifier d'une article</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route("update.article",["id"=>$article->id])}}" method="POST" enctype="multipart/form-data" id="formFormation">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" >Titre
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input type="text"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Titre" name="titre" required {{old("titre",$article->title)}}
                                        value="{{$article->title}}"
                                        >
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
                                        <option value="{{$categorie->id}}" @selected($categorie->id=== $article->id) >{{$categorie->title}} </option>
                                    @endforeach
								</select>

                                </div>
                                @error('titre')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Tags 
                                </label>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control input-default" placeholder="Tags"
                                        name="tags" required value="{{ old('tags', str_replace('|',',',$article->tags) ) }}" id="tags">
                                </div>
                                <span class="fw-italic"> Veuillez séparer par une virgule pour ajouter plusieurs tags</span>

                            </div>



                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="description">Description
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <textarea name="content" class="form-control" id="editor"> {{old("content",$article->description)}}</textarea>
                                </div>
                                {{-- <div class="custom-ekeditor  @error('description') is-invalid @enderror">
                                    <div id="ckeditor"></div>
                                </div> --}}
                                @error('content')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-lg-4 col-form-label" for="validationCustom01">Image de la formation
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-file">
                                    <input type="file" name="file"
                                        class="form-file-input form-control  @error('file') is-invalid 
                                        @enderror" accept=".png,.jpeg,jpg"
                                    >
                                </div>
                                @error('file')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                                <p class="text-warning mt-3">Laisser à vide ce champ si vous ne voulez pas modifier ....</p>


                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary" form="formFormation">Modifier</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.9/tagify.min.js"
        integrity="sha512-E6nwMgRlXtH01Lbn4sgPAn+WoV2UoEBlpgg9Ghs/YYOmxNpnOAS49+14JMxIKxKSH3DqsAUi13vo/y1wo9S/1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
        
            var tagInput = document.getElementById('tags')
            // initialize Tagify on the above input node reference
            new Tagify(tagInput)



        });
    </script>

@endpush
