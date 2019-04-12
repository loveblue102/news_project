@extends('admin.Layout')
@section('content')
	<div class="col-md-10 col-xs-offset-1" >
		<div style="margin-bottom:5px;">
			@if(isset($session))
				@foreach($session["per"] as $row)
					<?php
					$check = explode(',', $row["check_action"]);
					?>
					@if($row["action_code"] == "category_news" && (in_array(2, $check) || in_array(9, $check)))
							<a href="<?= base_url() ?>admin/CategoryNews/Add" class="btn btn-primary">
								Add Category News
							</a>
					@endif
				@endforeach
			@endif&nbsp;

		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				List Category News
			</div>
			<div class="panel-body">
				<table class="tree table table-bordered table-hover">
						<tbody>
						<tr>
							<th>Category</th>
							<th>Manager</th>
						</tr>
						<?php
						$key = 0;
						?>
						@foreach($category as $value)
						<tr @if( isset($value["category_child"]))class="treegrid-<?= $key?> expanded" @else class="treegrid-<?= $key?>" @endif >
							<td>{{ $value["category_name"] }}</td>
							<td>
								@if(isset($session))
									@foreach($session["per"] as $row)
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										@if($row["action_code"] == "category_news" && (in_array(3, $check) || in_array(9, $check)))
												<a href="<?= base_url() ?>admin/CategoryNews/Edit/<?= $value["category_id"]?>">Edit</a>
										@endif
										@if($row["action_code"] == "category_news" && (in_array(4, $check) || in_array(9, $check)))
												<a href="<?= base_url() ?>admin/CategoryNews/Delete/<?= $value["category_id"]?>">Delete</a>
										@endif
									@endforeach
								@endif&nbsp;


							</td>
						</tr>
						@if( isset($value["category_child"] ))
							<?php
							$keyParent = $key;
							?>
							@foreach($value["category_child"] as $rows)
								<?php
								$key++;
								?>
						<tr class="treegrid-<?= $key?> treegrid-parent-<?= $keyParent?>">
							<td>{{ $rows["category_name"] }}</td>
							<td>
								@if(isset($session))
									@foreach($session["per"] as $row)
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										@if($row["action_code"] == "category_news" && (in_array(3, $check) || in_array(9, $check)))
												<a href="<?= base_url() ?>admin/CategoryNews/Edit/<?= $rows["category_id"]?>">Edit</a>
										@endif
											@if($row["action_code"] == "category_news" && (in_array(4, $check) || in_array(9, $check)))
												<a href="<?= base_url() ?>admin/CategoryNews/Delete/<?= $rows["category_id"]?>">Delete</a>
											@endif
									@endforeach
								@endif&nbsp;

							</td>
						</tr>
								@endforeach

							@endif
						<?php
						$key++;
						?>
						@endforeach

						</tbody>
				</table>
			</div>
		</div>

		</div>






@endsection
@section('script')
	<link href="<?= base_url()?>asset/css/jquery.treegrid.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url()?>asset/js/jquery.treegrid.js"></script>
	<script>
		$('.tree').treegrid();
	</script>
@endsection
