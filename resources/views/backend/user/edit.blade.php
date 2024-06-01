@extends('backend.layouts.app')
@section('user','active')
@section('content')
<main class="content">
				<div class="container-fluid p-0">
					<div class="d-flex justify-content-between">
                        <h1 class="h3 mb-3"><strong>User Edit Form</strong></h1>
                        <div class="py-3 d-flex flex-row-reverse">
                            <button class="btn btn-secondary back-btn">Back <i class="align-middle" data-feather="arrow-left"></i></button>
                        </div>
                    </div>
                    <div class="">
						<div class="card">
							<div class="card-body">
									<div class = "p-2">
                                        <!-- @include('backend.layouts.flash') -->
										<form action="{{ route('user-account.update' , $user_account->id) }}" method="post" id="update" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="from-group">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="{{ $user_account->name }}" class="form-control">
                                            </div>
                                            <div class="from-group mt-2">
                                                <label for="">Email</label>
                                                <input type="email" name="email"  value="{{ $user_account->email }}" class="form-control">
                                            </div>
                                            <div class="from-group mt-2">
                                                <label for="">Phone</label>
                                                <input type="text" name="phone" value="{{ $user_account->phone }}" class="form-control">
                                            </div>
                                            <div class="from-group mt-2">
                                                <label for="">Password</label>
                                                <input type="password" value="" name="password" class="form-control">
                                            </div>
                                            <div class="from-group mt-2">
                                                    <label for="">Gender</label>
                                                    <select name="gender" class="form-control">
                                                    @if($user_account->gender == 'Male')
                                                        <option selected>Male</option>
                                                        <option>Female</option> 
                                                    @else
                                                        <option selected>Female</option>
                                                        <option >Male</option> 
                                                    @endif 
                                                    </select>
                                            </div>
                                            <div class="from-group mt-2">
                                                    <label for="">Profile</label>
                                                    <input type="file" name="profile" class="form-control">
                                                    <div class=" rounded-md bg-white">
                                                        @if(!$user_account->profile == '')
                                                        <img src="{{asset('images/' . $user_account->profile)}}" alt="" style="width:200px;height:200px;padding-top:px;object-fit:contain;" class="pt-1">
                                                        @else
                                                        <img src="{{asset('backend/assets/img/noimage.jpg')}}" alt="" style="width:200px;height:200px;padding-top:px;object-fit:contain;" class="pt-1">
                                                        @endif
                                                    </div>
                                            </div>
                                            <div class="from-group mt-2">
                                                    <label for="">Address</label>
                                                    <textarea  name="address" class="form-control" rows="3">{{ $user_account->address }}</textarea>
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
{!! JsValidator::formRequest('App\Http\Requests\UserUpdateRequest' , '#update') !!}
<script type="text/javascript">
</script>
@endpush