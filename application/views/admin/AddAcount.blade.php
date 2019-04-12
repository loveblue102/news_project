@extends('admin.Layout')
@section('content')
	<style>
		.select2-selection__choice {
			color: blue !important;
		}
	</style>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add Edit Acount</div>
			<div class="panel-body">
				<form method="post" action="{{ $formAction }}" enctype="multipart/form-data">
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Username</div>
						<div class="col-md-10">
							<input type="text" name="name" class="form-control" required
								   value="{{ isset($user[0]['username'])?$user[0]['username']:'' }}">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Email</div>
						<div class="col-md-10">
							<input type="email" name="email" class="form-control"
								   {{ isset($user[0]['email'])?"disabled":"required"  }} value="{{ isset($user[0]['email'])?$user[0]['email']:'' }}">
							@if(isset($user[0]['email']))
							<input type="hidden" name="email" class="form-control"
								   value="{{ isset($user[0]['email'])?$user[0]['email']:'' }}">
								@endif
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Fullname</div>
						<div class="col-md-10">
							<input type="text" name="fullname" class="form-control" required
								   value="{{ isset($user[0]['fullname'])?$user[0]['fullname']:'' }}">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Password</div>
						<div class="col-md-10">
							<input type="password" name="password" class="form-control" value=""
								   <?php if(isset($user[0]["password"])){?> placeholder="Nếu Không Đổi Mật Khẩu Thì Để Trống Trường Này" <?php } ?> >
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Permission</div>
						<div class="col-md-10">
							<select name="per" class="form-control">
								<option value="mod"
										<?php if(isset($per["per_name"]) && $per["per_name"] == 'mod'){ ?> selected <?php }?> >
									mod
								</option>
								<option value="user"
										<?php if(isset($per["per_name"]) && $per["per_name"] == 'user'){ ?> selected <?php }?> >
									user
								</option>
							</select>
						</div>
					</div>

					<div class="row " style="margin: 5px">
						<div class="col-md-2">Acount</div>
						<div class="col-md-10">
							<select class="js-example-basic-multiple col-md-12" name="acount[]" multiple="multiple">
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "acount" && isset($check) && in_array(2, $check))
										selected
										@endif
										@endforeach
										@endif
										value="2">Thêm
								</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "acount" && isset($check) && in_array(3, $check))
										selected
										@endif
										@endforeach
										@endif
										value="3">Sửa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "acount" && isset($check) && in_array(4, $check))
										selected
										@endif
										@endforeach
										@endif
										value="4">Xóa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "acount" && isset($check) && in_array(1, $check))
										selected
										@endif
										@endforeach
										@endif
										value="1">Xem</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "acount" && isset($check) && in_array(9, $check))
										selected
										@endif
										@endforeach
										@endif
										value="9">Tất Cả</option>
							</select>
						</div>
					</div>
					<div class="row " style="margin: 5px">
						<div class="col-md-2">News</div>
						<div class="col-md-10">
							<select class="js-example-basic-multiple col-md-12" name="news[]" multiple="multiple">
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "news" && isset($check) && in_array(2, $check))
										selected
										@endif
										@endforeach
										@endif
										value="2">Thêm
								</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "news" && isset($check) && in_array(3, $check))
										selected
										@endif
										@endforeach
										@endif
										value="3">Sửa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "news" && isset($check) && in_array(4, $check))
										selected
										@endif
										@endforeach
										@endif
										value="4">Xóa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "news" && isset($check) && in_array(1, $check))
										selected
										@endif
										@endforeach
										@endif
										value="1">Xem</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "news" && isset($check) && in_array(9, $check))
										selected
										@endif
										@endforeach
										@endif
										value="9">Tất Cả</option>
							</select>
						</div>
					</div>
					<div class="row " style="margin: 5px">
						<div class="col-md-2">Category News</div>
						<div class="col-md-10">
							<select class="js-example-basic-multiple col-md-12" name="category[]" multiple="multiple">
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(2, $check))
												selected
										@endif
										@endforeach
										@endif
										value="2">Thêm
								</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(3, $check))
										selected
										@endif
										@endforeach
										@endif
										value="3">Sửa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(4, $check))
										selected
										@endif
										@endforeach
										@endif
										value="4">Xóa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(1, $check))
										selected
										@endif
										@endforeach
										@endif
										value="1">Xem</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(9, $check))
										selected
										@endif
										@endforeach
										@endif
										value="9">Tất Cả</option>
							</select>
						</div>
					</div>
					<div class="row " style="margin: 5px">
						<div class="col-md-2">Post</div>
						<div class="col-md-10">
							<select class="js-example-basic-multiple col-md-12" name="post[]" multiple="multiple">
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "post" && isset($check) && in_array(2, $check))
										selected
										@endif
										@endforeach
										@endif
										value="2">Thêm
								</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "post" && isset($check) && in_array(3, $check))
										selected
										@endif
										@endforeach
										@endif
										value="3">Sửa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "post" && isset($check) && in_array(4, $check))
										selected
										@endif
										@endforeach
										@endif
										value="4">Xóa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "post" && isset($check) && in_array(1, $check))
										selected
										@endif
										@endforeach
										@endif
										value="1">Xem</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "post" && isset($check) && in_array(9, $check))
										selected
										@endif
										@endforeach
										@endif
										value="9">Tất Cả</option>
							</select>
						</div>
					</div>
					<div class="row " style="margin: 5px">
						<div class="col-md-2">Comment</div>
						<div class="col-md-10">
							<select class="js-example-basic-multiple col-md-12" name="comment[]" multiple="multiple">
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "comment" && isset($check) && in_array(4, $check))
										selected
										@endif
										@endforeach
										@endif
										value="4">Xóa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "comment" && isset($check) && in_array(1, $check))
										selected
										@endif
										@endforeach
										@endif
										value="1">Xem</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "comment" && isset($check) && in_array(9, $check))
										selected
										@endif
										@endforeach
										@endif
										value="9">Tất Cả</option>
							</select>
						</div>
					</div>
					<div class="row " style="margin: 5px">
						<div class="col-md-2">My News</div>
						<div class="col-md-10">
							<select class="js-example-basic-multiple col-md-12" name="my[]" multiple="multiple">
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(2, $check))
										selected
										@endif
										@endforeach
										@endif
										value="2">Thêm
								</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(3, $check))
										selected
										@endif
										@endforeach
										@endif
										value="3">Sửa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(4, $check))
										selected
										@endif
										@endforeach
										@endif
										value="4">Xóa</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(1, $check))
										selected
										@endif
										@endforeach
										@endif
										value="1">Xem</option>
								<option
										@if(isset($perDetail))
										@foreach ($perDetail as $rows )
										<?php
										$check = explode(',', $rows["check_action"]);
										?>
										@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(9, $check))
										selected
										@endif
										@endforeach
										@endif
										value="9">Tất Cả</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">Image</div>
					@if(isset($user[0]['user_image']))
						<div class="col-md-10">
							<input type="file" name="image">
							@if(isset($user[0]['user_image']))
							<div style="margin-top:5px;">
								<img src="<?= base_url()?>asset/upload/<?= $user[0]['user_image'] ?>"
									 style="width:100px;" alt="Khong Co Anh De Hien Thi">
							</div>
								@endif
						</div>
				@endif
			</div>

			<div class="row" style="margin:5px">

				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" name="btn" class="btn btn-primary" value="Process">
					<input type="submit" name="btn" class="btn btn-primary" value="Back">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
	</div>
@endsection
@section('script')
	<script src="<?= base_url()?>asset/vendor/select2/select2.min.js">
	</script>
	<script>
		$(document).ready(function () {
			$('.js-example-basic-multiple').select2();
		});
	</script>
@endsection
