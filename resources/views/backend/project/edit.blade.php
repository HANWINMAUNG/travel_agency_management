@extends('backend.layouts.app')
@section('project','active')
@section('content')
<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Project Achievement Edit Form</strong></h1>
					<div class="py-3 d-flex flex-row-reverse">
						<button class="btn btn-secondary back-btn">Back <i class="align-middle" data-feather="arrow-left"></i></button>
					</div>
                    <div class="">
						<div class="card">
							<div class="card-body">
									<div class = "p-2">
                                        @include('backend.layouts.flash')
										<form action="{{ route('project.update' , $project->id) }}" method="post" id="update" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="from-group">
                                                <label for="">Address</label>
                                                <textarea  name="address" class="form-control" rows="3">{{ $project->address }}</textarea>
                                            </div>
                                            <div class="from-group mt-2">
                                                    <label for="">Images</label>
                                                    <input type="file" id="fileupload" name="image[]" class="form-control" multiple>
                                                    <div class="validation text-danger pt-2" style="display:none;"> Upload Max 4 Files allowed </div>
                                            </div>
                                            <div class="d-flex justify-content-center pt-4">
                                                <button class="btn btn-secondary back-btn" style="margin-right:10px;">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
									</div>
							</div>
						</div>
					</div>				
				</div>
</main> 
@endsection
@push('script')
{!! JsValidator::formRequest('App\Http\Requests\ProjectUpdateRequest','#update') !!}
<script type="text/javascript">
    $(document).ready(function(){
    $('#fileupload').change(function(){
            var input = document.getElementById('fileupload');
            if(input.files.length<4){
                $('.validation').css('display','block');
            }else{
                $('.validation').css('display','none');
            }
            });
        });
</script>
@endpush