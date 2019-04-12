@extends('admin.Layout')
@section('content')
	<div class="col-md-10 col-xs-offset-1" >
		<div class="panel panel-primary" style="font-size: 14px">
			<div class="panel-heading">
				List Comment
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover tree">
					<tr>
						<th style="width:100px;text-align: center">Username</th>
						<th style="width:550px;text-align: center">Comment</th>
						<th style="text-align: center">Date Comment</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					<?php
					$key = 0;
					?>
					@foreach($comment as $value)
						<tr @if( isset($value["category_child"]))class="treegrid-<?= $key?> expanded" @else class="treegrid-<?= $key?>" @endif >
						<td>{{ $value["username"] }}</td>
						<td style="text-align:center;">
							{{ $value["comment_content"] }}
						</td>
						<td style="text-align: center">{{ date('d-m-Y', strtotime($value["comment_date"])) }}</td>
						<td style="text-align:center">
							@if(isset($session))
								@foreach($session["per"] as $row)
									<?php
									$check = explode(',', $row["check_action"]);
									?>
								@if($row["action_code"] == "comment" && (in_array(4, $check) || in_array(9, $check)))
							<a href="<?= base_url()?>admin/Comment/delete/<?= $value["comment_id"] ?>/<?= $value["news_id"] ?>" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
								@endif
								@endforeach
							@endif
						</td>
					</tr>
						@if( isset($value["comment_child"] ))
							<?php
							$keyParent = $key;
							?>
							@foreach($value["comment_child"] as $rows)
								<?php
								$key++;
								?>
					<tr class="treegrid-<?= $key?> treegrid-parent-<?= $keyParent?>">
						<td style="text-align:center">{{ $rows["username"] }}</td>
						<td style="text-align:center;">
							{{ $rows["comment_content"] }}
						</td>
						<td style="text-align: center">{{ date('d-m-Y', strtotime($rows["comment_date"])) }}</td>
						<td style="text-align:center">
							@if(isset($session))
									@foreach($session["per"] as $row)
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										@if($row["action_code"] == "comment" && (in_array(4, $check) || in_array(9, $check)))
											<a href="<?= base_url()?>admin/Comment/delete/<?= $rows["comment_id"] ?>/<?= $value["news_id"] ?>" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
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

				</table>
				{{--phan trang gi do o day--}}
				<div class="container">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<ul class="pagination">

							</ul>
						</div>
					</div>
				</div>

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
