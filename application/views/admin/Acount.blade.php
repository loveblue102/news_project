@extends('admin.Layout')
@section('content')
	<style>
		.col-md-2.col-md-offset-4.text-center.pagi {
			width: 180px;
			padding: 10px;
			border: 1px solid lightblue;
			border-radius: 10px;
		}

		.col-md-2.col-md-offset-4.text-center.pagi a {
			padding: 6px;
			/* border-right: 1px solid; */
			/* margin-top: 15px; */
		}
	</style>
	<div class="col-md-10 col-xs-offset-1">
		<div style="margin-bottom:5px;">
			@if(isset($session))
				@foreach($session["per"] as $row)
					<?php
					$check = explode(',', $row["check_action"]);
					?>
					@if($row["action_code"] == "acount" && (in_array(2, $check) || in_array(9, $check)))
						<a href="<?= base_url() ?>admin/Acount/Add" class="btn btn-primary">
							Add Acount
						</a>
					@endif
				@endforeach
			@endif&nbsp;

		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				List Acount
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="text-align: center;">Username</th>
						<th style="width: 70px;text-align: center">Permission</th>
						<th style="width:120px;text-align: center;">Acount</th>
						<th style="text-align: center;">News</th>
						<th style="width: 70px;text-align: center;">Category News</th>
						<th style="width: 70px;text-align: center;">Post</th>
						<th style="width: 70px;text-align: center;">Comment</th>
						<th style="width: 70px;text-align: center;">My News</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					@foreach($data as $value)
						<tr>
							<td style="text-align: center">{{ $value["username"] }}</td>
							<td style="text-align: center;">{{ $value["per_name"] }}</td>

							<td style="text-align: center;">
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "acount" && isset($check) && in_array(1, $check))
										Xem
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "acount" && isset($check) && in_array(2, $check))
										Thêm
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "acount" && isset($check) && in_array(3, $check))
										Sửa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "acount" && isset($check) && in_array(4, $check))
										Xóa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "acount" && isset($check) && in_array(9, $check))
										Tất Cả
									@endif
								@endforeach


							</td>

							<td style="text-align: center;">
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "news" && isset($check) && in_array(1, $check))
										Xem
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "news" && isset($check) && in_array(2, $check))
										Thêm
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "news" && isset($check) && in_array(3, $check))
										Sửa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "news" && isset($check) && in_array(4, $check))
										Xóa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "news" && isset($check) && in_array(9, $check))
										Tất Cả
									@endif
								@endforeach


							</td>
							<td style="text-align: center;">
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "category_news" && isset($check) && in_array(1, $check))
										Xem
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(2, $check))
										Thêm
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "category_news" && isset($check) && in_array(3, $check))
										Sửa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "category_news" && isset($check) && in_array(4, $check))
										Xóa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "category_news" && isset($check) && in_array(9, $check))
										Tất Cả
									@endif
								@endforeach


							</td>
							<td style="text-align: center;">
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "post" && isset($check) && in_array(1, $check))
										Xem
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "post" && isset($check) && in_array(2, $check))
										Thêm
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "post" && isset($check) && in_array(3, $check))
										Sửa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "post" && isset($check) && in_array(4, $check))
										Xóa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "post" && isset($check) && in_array(9, $check))
										Tất Cả
									@endif
								@endforeach


							</td>

							<td style="text-align: center;">
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "comment" && isset($check) && in_array(1, $check))
										Xem
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "comment" && isset($check) && in_array(2, $check))
										Thêm
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "comment" && isset($check) && in_array(3, $check))
										Sửa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "comment" && isset($check) && in_array(4, $check))
										Xóa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "comment" && isset($check) && in_array(9, $check))
										Tất Cả
									@endif
								@endforeach
							</td>
							<td style="text-align: center;">
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "my_news" && isset($check) && in_array(1, $check))
										Xem
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(2, $check))
										Thêm
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "my_news" && isset($check) && in_array(3, $check))
										Sửa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ( $rows["action_code"] == "my_news" && isset($check) && in_array(4, $check))
										Xóa
									@endif
								@endforeach
								@foreach ($value["PerDetail"] as $rows )
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									@if ($rows["action_code"] == "my_news" && isset($check) && in_array(9, $check))
										Tất Cả
									@endif
								@endforeach


							</td>
							<td style="text-align:center">
								@if(isset($session))
									@foreach($session["per"] as $row)
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										@if($row["action_code"] == "acount" && (in_array(3, $check) || in_array(9, $check)))
											<a href="<?= base_url() ?>admin/Acount/Edit/<?= $value["per_id"]?>">
												Edit
											</a>
										@endif
										@if($row["action_code"] == "acount" && (in_array(4, $check) || in_array(9, $check)))
											<a href="<?= base_url() ?>admin/Acount/Delete/<?= $value["per_id"]?>"
											   onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
										@endif

									@endforeach
								@endif&nbsp;
							</td>
						</tr>
					@endforeach
				</table>
				{{--phan trang gi do o day--}}
				<div class="container">
					<div class="row">
						<?php
						if (getCI()->pagination->create_links() != null) {
						?>
						<div class="col-md-2 col-md-offset-4 text-center pagi">
							<?= getCI()->pagination->create_links() ?>
						</div>
						<?php }?>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
