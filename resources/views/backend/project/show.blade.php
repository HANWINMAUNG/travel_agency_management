@extends('backend.layouts.app')
@section('project','active')
@section('content')
<main class="content">
				<div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Project Achievement Detail</strong></h1>
                    <div class="py-3 d-flex flex-row-reverse">
                      <button class="btn btn-secondary back-btn">Back <i class="align-middle" data-feather="arrow-left"></i></a>
                    </div>
                    <div class="">
                            <div class="card">
                                <div class="card-body">
                                    <div class = "p-2">
                                       <div class="row">
                                        <div class="col">
                                            <h5>Images</h5>
                                            @foreach($project_images as $project_image)
                                            @if(!$project_image == '')
                                                <img src="{{asset('images/' . $project_image)}}" alt="" style="width:200px;height:200px;padding:10px;object-fit:contain;" class="border border-dark w-full mb-4">
                                            @else
                                                <img src="{{asset('backend/assets/img/noimage.jpg')}}" alt="" style="width:300px;height:200px;padding:5px;object-fit:contain;" class="mb-4">
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="mt-2">
                                            <h5>Address:  {{$project->address}}</h5>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                    </div>				
				</div>
</main> 
@endsection