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
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2" style="margin-left: 14px !important;">
			@if(isset($session))
				@foreach($session["per"] as $row)
					<?php
					$check = explode(',', $row["check_action"]);
					?>
					@if($row["action_code"] == "news" && (in_array(2, $check) || in_array(9, $check)))
							<a href="<?= base_url() ?>admin/News/AddNews" class="btn btn-primary">
								Add news
							</a>
					@endif
				@endforeach
			@endif&nbsp;

		</div>
		<div class="col-md-1"></div>
		<form method="post" action="<?= base_url()?>admin/MyNews/Fillter">
			<div class="col-md-5" style="margin-bottom:5px;margin-left: 70px !important;">
				<div class="form-group">
					<select class="form-control" name="category">
						<option value="">Category</option>
						@foreach($category as $value)
							<option value="{{ $value["category_id"] }}">{{ $value["category_name"] }}</option>
							@if($value["category_child"] != Null)
								@foreach($value["category_child"] as $rows)
									<option value="{{ $rows["category_id"] }}">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{  $rows["category_name"] }}
									</option>
								@endforeach
							@endif
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-1">
				<input type="submit" class="form-control btn btn-primary" value="Gui">
			</div>
		</form>

		<div class="col-md-1"></div>
	</div>
	<div class="col-md-10 col-xs-offset-1">


		<div class="panel panel-primary">
			<div class="panel-heading">
				List news
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width:50px">STT</th>
						<th style="width:120px;">Image</th>
						<th>Title</th>
						<th>Category News</th>
						<th style="70px">status</th>
						<th style="70px">Hot News</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					@foreach($data as $key => $value)
						<tr>
							<td style="text-align:center">{{ $key+1 }}</td>
							<td style="text-align:center;">
								<img src="<?= base_url() ?>asset/upload/<?= $value["news_image"] ?>" alt=""
									 style="width: 150px">
							</td>
							<td>
								<a href="<?= base_url()?>admin/News/NewsDetails/<?= $value["news_id"]?>">
									{!! $value["news_title"] !!}
								</a>
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
							<td style="text-align: center">
								{{ $value["news_kind"] != ""?$value["news_kind"]:"" }}
							</td>
							<td style="text-align:center">
								@if(isset($session))
									@foreach($session["per"] as $row)
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										@if($row["action_code"] == "news" && (in_array(4, $check) || in_array(9, $check)))
											<a href="<?= base_url() ?>admin/News/Edit/<?= $value["news_id"]?>">Edit</a>
											&nbsp;
										@endif
										@if($row["action_code"] == "news" && (in_array(4, $check) || in_array(9, $check)))
											<a href="<?= base_url() ?>admin/News/Delete/<?= $value["news_id"]?>"
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
