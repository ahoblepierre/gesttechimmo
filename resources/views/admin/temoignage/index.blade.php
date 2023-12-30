@extends('admin.layout.template')

@push('style')
@endpush

@section('contenu')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Cette section est reserve a la liste des temoignages</a></li>
    </ol>
</div>

{{-- <div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rechercher</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route("search.service")}}" method="GET" id="formSearch">
                        <div class="row">

                            <div class="mb-3 row">
                                <div class="col-lg-4">
                                    <label for="">Titre ou description</label>
                                    <input type="text"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Titre" name="titre_or_description" required>
                                </div>

                                <div class="col-lg-4">
                                    <label for="">Date debut</label>
                                    <input type="date"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Date" name="debut" >
                                </div>

                                <div class="col-lg-4">
                                    <label for="">Date fin</label>
                                    <input type="date"
                                        class="form-control input-default @error('titre') is-invalid @enderror"
                                        placeholder="Date" name="fin" >
                                </div>

                                <div class="col-lg-4 mt-3">
                                    <label for="">Statut</label>
                                    <select class="default-select form-control wide mb-3">
                                        <option value="1">Active</option>
                                        <option value="0">Desactive</option>
                                    </select>
                                </div>
                               
                            </div>
                           
                        </div>
                        
                      
                       
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary" form="formSearch">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste des Temoignages</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>Avatar</strong></th>
                                    <th><strong>NOM & PRENOMS</strong></th>
                                    <th><strong>Profession</strong></th>
                                    <th><strong>DESCRIPTION</strong></th>
                                    <th><strong>STATUS</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($temoignages  as $key=> $temoignage)
                                <tr>
                                    <td><strong>{{$key >=10?  $key  :'0'.$key+1  }}</strong></td>
                                    <td >
                                        <div class="delivery-customer me-auto mb-2">
                                            <img src="{{$temoignage->iamge_url}}" width="50" alt="">
                                        </div>
                                    </td>
                                    <td>{{$temoignage->name}}</td>
                                    <td>{{ $temoignage->profession }}</td>
                                    <td>{!! $temoignage->description !!}</td>
                                    @switch($temoignage->statut)
                                        @case(0)
                                        <td><span class="badge light badge-danger">Inactif</span></td>
                                            @break
                                        @case(1)
                                        <td><span class="badge light badge-success">Actif</span></td>
                                            @break
                                        @default
                                            
                                    @endswitch
                                    
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route("edit.temoignage",["id"=>$temoignage->id])}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pen"></i></a>
                                            <a href="{{route("change.temoignage",["id"=>$temoignage->id])}}" class="btn btn-danger shadow btn-xs sharp me-1"><i class="{{$temoignage->statut==1?'fa fa-times-circle':' fa fa-check'}}"></i></a>
                                            {{-- <a href="{{route("destroy.temoignage",["id"=>$temoignage->id])}}" class="btn btn-danger shadow btn-xs sharp" onclick="return window.confirm('Voulez-vous supprimer ce service ?')" ><i class="fa fa-trash"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                    
                                @endforeach
                               
                               
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    {{$temoignages->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script> --}}
@endpush
