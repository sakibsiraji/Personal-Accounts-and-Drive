@extends('master_layout')
@section('content')
<h4 class="mb-3">Edit a Record</h4>
<form class="contact-form form-style-2 form-with-shadow needs-validation" action="editAccountRecord" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="form-group col-lg-2">
			<input type="number" data-msg-required="Enter Day" maxlength="2" class="form-control text-3 h-auto py-2" name="date" placeholder="Day" required>
		</div>
		<div class="form-group col-lg-4">
			<div class="custom-select-1">
				<select class="form-select form-control h-auto" data-msg-required="Enter Month" name="month" required>
					<option value="">Month</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
			</div>
		</div>
		<div class="form-group col-lg-2">
			<input type="year" value="" data-msg-required="Enter Year" maxlength="4" class="form-control text-3 h-auto py-2" name="year" placeholder="Year" required>
		</div>
		<div class="form-group col-lg-4">
			<div class="custom-select-1">
				<select class="form-select form-control h-auto" data-msg-required="Enter Country" name="country" required>
					<option value="">Country</option>
					<option value="BD">BD</option>
					<option value="USA">USA</option>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-lg-6">
			<div class="custom-select-1">
				<select class="form-select form-control h-auto" data-msg-required="Enter Record Type." name="record_type" required>
					<option value="">Record Type...</option>
					<option value="Income">Income</option>
					<option value="Expense">Expense</option>
				</select>
			</div>
		</div>
		<div class="form-group col-lg-6">
			<div class="custom-select-1">
				<select class="form-select form-control h-auto" data-msg-required="Enter Record Sector." name="record_sector" required>
					<option value="">Record Sector...</option>
					<option value="MLS USA">MLS USA</option>
					<option value="MLS BD">MLS BD</option>
					<option value="Personal">Personal</option>
					<option value="Sheikh Plaza">Sheikh Plaza</option>
					<option value="Others">Others</option>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col">
			<textarea maxlength="5000" data-msg-required="Enter Record Detail." rows="5" class="form-control text-3 h-auto py-2" name="record_detail" placeholder="Record Detail" required></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-lg-2">
			<div class="custom-select-1">
				<select class="form-select form-control h-auto" data-msg-required="Enter Currency" name="currency" required>
					<option value="">Currency</option>
					<option value="BDT">BDT</option>
					<option value="USD">USD</option>
				</select>
			</div>
		</div>
		<div class="form-group col-lg-2">
			<input type="number" data-msg-required="Enter Amount in BDT" class="form-control text-3 h-auto py-2" name="amount_bdt" placeholder="BDT">
		</div>
		<div class="form-group col-lg-2">
			<input type="number" data-msg-required="Enter Amount in USD" class="form-control text-3 h-auto py-2" name="amount_usd" placeholder="USD">
		</div>
		<div class="form-group col-lg-6">
			<input type="file" data-msg-required="Enter Voucher" class="form-control text-3 h-auto py-2" name="voucher" placeholder="Voucher">
		</div>
	</div>
	<div class="row">
		<div class="form-group col" style="text-align:center;">
			<input type="submit" class="btn btn-primary" data-loading-text="Loading...">
		</div>
	</div>
</form>
@endsection