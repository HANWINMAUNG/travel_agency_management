@extends('backend.layouts.app')
@section('project','active')
@section('content')
<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Project Achievement Table</strong></h1>
					<div class="py-3 d-flex flex-row-reverse">
						<a href="{{ route('project.create') }}" class="btn btn-secondary">Project Create <i class="align-middle" data-feather="plus-circle"></i></a>
					</div>
                    <div class="">
						<div class="card">
							<div class="card-body">
									<div class = "p-2">
										<table class = "table table-hover" id="data-table" style="width:100%;">
											<thead>
												<tr>
												    <th style="">No</th>
													<th style="">Address</th>
													<th style="">Joined Date</th>
													<th style="">Updated Date</th>
													<th style="">Actions</th>													
												</tr>
											</thead>
											<tbody class = "">
											</tbody>
										</table>
									</div>
							</div>
						</div>
					</div>				
				</div>
</main> 
@endsection
@push('script')
<script type="text/javascript">

		$(function () {

		var table = new DataTable('#data-table',{
			
			scrollX: true,

			processing: true,

			serverSide: true,

			ajax: "{{ route('project.index') }}",

			order: [
				[3,'desc']
			],

			columns: [

				{data: 'id', name: 'id',class:'text-center'},

				{data: 'address', name: '',class:'text-center'},
				
				{data: 'created_at', name: 'created_at',class:'text-center',searchable: false,sortable:false},

				{data: 'updated_at', name: 'updated_at',class:'text-center',searchable: false,sortable:false},

				{data: 'action', name: 'action',class:'text-center',searchable: false,sortable:false},
				
			]
		}); 
		$(document).on('click','.delete',function(e){
			e.preventDefault();
			var id = $(this).data('id');
			Swal.fire({
				title: 'Are you sure,you want to delete?',
				showCancelButton: true,
				confirmButtonText: 'Confirm',
				}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
                          url : '/admin/project/' + id,
						  type : 'DELETE',
						  success : function(){
							table.ajax.reload();
						  }
					});
				}
				})
		});
		
		});
</script>
@endpush