@extends('admin.Layout')
@section('content')
	<script language="JavaScript" src="<?= base_url() ?>asset/ckeditor/ckeditor.js"></script>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit news</div>
			<div class="panel-body">
				<form method="post" action="{{ $formAction }}" enctype="multipart/form-data">
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Title</div>
						<div class="col-md-10">
							<input type="text" name="title" class="form-control" required value="{{ isset($data["news_title"])?$data["news_title"]:"" }}">
						</div>
					</div>
					<!-- end row -->


					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Description</div>
						<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="description" required>
						{{ isset($data["news_description"])?$data["news_description"]:"" }}
					</textarea>
							<script type="text/javascript">CKEDITOR.replace("description");</script>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->

					<div class="row" style="margin:5px">
						<div class="col-md-2">Content</div>
						<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="content">
						{{ isset($data["news_content"])?$data["news_content"]:"" }}
					</textarea>
							<script type="text/javascript">CKEDITOR.replace("content");</script>
						</div>
					</div>
					<!-- row -->
					<!-- end row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Danh Muc Tin Tuc</div>
						<div class="col-md-10">

							<select name="category" id="">
								@foreach($category as $value)
									<option <?= isset($value["category_id"]) && isset($data) && $data["category_id"] == $value["category_id"]?"selected":""; ?> value="{{ $value["category_id"] }} " style="font-size: 15px">{{ $value["category_name"] }}</option>
									@if(isset($value["category_child"]))
										@foreach($value["category_child"] as $rows)
											<option <?= isset($rows["category_id"])&& isset($data) && $data["category_id"] == $rows["category_id"]?"selected":""; ?> value="{{ $rows["category_id"] }}" style="font-size: 13px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												{{ $rows["category_name"] }}
											</option>
										@endforeach
									@endif
								@endforeach
							</select>
						</div>
					</div>
					@if(isset($data))
						<div class="row" style="margin:5px">
							<div class="col-md-2">Trang Thai</div>
							<div class="col-md-10">
								<select name="status" id="" style="width: 114px">
									@foreach($status as $value)
										<option <?php if($value["news_status"] == "Đã Đăng"){?>disabled<?php } ?> <?= isset($value["news_status"]) && $value["news_status"] == $data["news_status"]?"selected":""; ?> value="{{ $value["news_status"] }}">{{ $value["news_status"] }}</option>
									@endforeach
								</select>
							</div>
						</div>
				@endif
				<!-- end row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Loai Tin</div>
						<div class="col-md-10">
							<select name="kind" id="" style="width: 114px">
								@foreach($kind as $value)
									<option <?= isset($value["news_kind"]) && $value["news_kind"] == "Hot"?"selected":""; ?> value="{{ $value["news_kind"] }}">{{ $value["news_kind"] }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Image</div>
						<div class="col-md-10">
							<input type="file" name="img">
							<div style="margin-top:5px;">
								@if(isset($data["news_image"])&&file_exists("./asset/upload/".$data["news_image"]))
									<img src="<?= base_url()."asset/upload/".$data["news_image"]; ?>" style="width:100px;" alt="Khong Co Anh De Hien Thi">
								@endif
							</div>
						</div>
					</div>
					<div class="row" style="margin:5px">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" name="btn" class="btn btn-primary" value="Process">

						</div>
					</div>

					<!-- end row -->
				</form>
			</div>
		</div>
	</div>
@endsection
