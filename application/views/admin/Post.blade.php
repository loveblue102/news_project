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
		<div class="panel panel-primary">
			<div class="panel-heading">
				List news
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width:50px">Username</th>
						<th style="width:120px;">images</th>
						<th>Title</th>
						<th style="width: 150px;">Category News</th>
						<th>Status</th>
						<th>Hot News</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					@foreach($data as $value)
						<tr>
							<td style="text-align:center">{{ $value["username"] }}</td>
							<td style="text-align:center;">
								<img src="<?= base_url() ?>asset/upload/<?= $value["news_image"] ?>" alt=""
									 style="width: 150px">
							</td>
							<td>
								<a href="<?= base_url() ?>admin/Post/PostDetails/<?= $value["news_id"] ?>">{!! $value["news_title"] !!}</a>
							</td>
							<td style="text-align: center">
								@if(isset($value["categoryParent"]))
									{{ $value["categoryParent"]." >> " .$value["categorySlide"] }}
								@else
									{{ $value["categorySlide"] }}
								@endif
							</td>

							<td style="text-align: center">
								{{ $value["news_status"] }}
							</td>
							<td>
								{{ $value["news_kind"] != ""?$value["news_kind"]:"" }}
							</td>

							<td style="text-align:center">
								@if(isset($session))
									@foreach($session["per"] as $row)
										<?php
										$check = explode(',', $row["check_action"]);

										?>
										@if($row["action_code"] == "post" && (in_array(3, $check) || in_array(9, $check)))
											<a href="<?= base_url() ?>admin/Post/Edit/<?= $value["news_id"]?>">Edit</a>
											&nbsp;
										@endif
										@if($row["action_code"] == "post" && (in_array(4, $check) || in_array(9, $check)))
											<a href="<?= base_url() ?>admin/Post/Delete/<?= $value["news_id"]?>"
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
