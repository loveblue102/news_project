@extends('admin.Layout')
@section('content')
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit category news</div>
			<div class="panel-body">

				<!-- PRODUCT LIST -->
					<!-- /.box-header -->
					<div class="box-body">
						<form method="post" action="<?= $formAction ?>">
							<!-- row -->
							<div class="row" style="margin:5px">
								<div class="col-md-2">Category Type Name</div>
								<div class="col-md-10">
									<input type="text" name="c_name" class="form-control" required value="<?= isset($categoryEdit)?$categoryEdit["category_name"]:"" ?>">
								</div>
							</div>
							@if(!isset($categoryEdit))
							<div class="row" style="margin:5px">
								<div class="col-md-2">Select Category</div>
								<div class="col-md-10">
									<select name="category" id="">
										<option value="">Category</option>
										@foreach($category as $value)
											<option value="{{ $value["category_id"] }} " style="font-size: 15px">{{ $value["category_name"] }}</option>
													@if(isset($value["category_child"]))
														@foreach($value["category_child"] as $rows)
															<option value="{{ $rows["category_id"] }}" style="font-size: 13px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																{{ $rows["category_name"] }}
															</option>
												@endforeach
											@endif
										@endforeach
									</select>
								</div>
							</div>
							@endif
							<!-- end row -->
							<!-- row -->
							<div class="row" style="margin:5px">
								<div class="col-md-2"></div>
								<div class="col-md-10">
									<input type="submit" name="btn" class="btn btn-primary" value="Process">
									<a href="<?= base_url()?>"><input type="submit" name="btn" class="btn btn-info" value="Back"></a>
								</div>
							</div>
							<!-- end row -->
						</form>
					</div>


				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
