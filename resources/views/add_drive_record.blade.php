@extends('master_layout')
@section('content')
<h4 class="mb-3">Add a Record</h4>
<form class="contact-form form-style-2 form-with-shadow needs-validation" action="add-drive-record" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="form-group col-lg-6">
			<div class="custom-select-1">
				<select class="form-select form-control h-auto" data-msg-required="Enter Type" name="record_type" required>
					<option value="">Type</option>
                    <option value="Bills">Bills</option>
					<option value="Deeds">Deeds</option>
					<option value="Documents">Documents</option>
					<option value="Photos">Photos</option>
					<option value="Others">Others</option>
				</select>
			</div>
		</div>
		<div class="form-group col-lg-6">
			<input type="file" data-msg-required="Enter Voucher" class="form-control text-3 h-auto py-2" name="record_file" placeholder="Upload File">
		</div>
	</div>
	<div class="row">
		<div class="form-group col">
			<textarea maxlength="5000" data-msg-required="Enter Record Detail." rows="5" class="form-control text-3 h-auto py-2" name="record_detail" placeholder="Record Detail" required></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col" style="text-align:center;">
			<input type="submit" class="btn btn-primary" data-loading-text="Loading...">
		</div>
	</div>
</form>
@endsection