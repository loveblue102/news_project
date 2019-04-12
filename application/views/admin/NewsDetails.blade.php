@extends('admin.Layout')
@section('content')
	<div class="row" style="margin: 0px;">
		<div class="col-md-2" style="padding-left: 5px">
			<img src="<?= base_url() ?>asset/upload/<?= $PostDetails["news_image"]?>" alt="" style="width: 150px;">
		</div>
		<div class="col-md-4">
			<?= $PostDetails["news_title"] ?>
		</div>
		<div class="col-md-2">
			@if(isset($PostDetails["category_parent"]))
				{{ $PostDetails["category_parent"]." >> " .$PostDetails["category_name"] }}
			@else
				{{ $PostDetails["category_name"] }}
			@endif
		</div>
		<div class="col-md-1">
			{{ $PostDetails["username"] }}
		</div>
		<div class="col-md-1">
			{{ $PostDetails["news_kind"] }}
		</div>
		<div class="col-md-2">
			@if(isset($data) && $data != Null)
				<a href="" class="btn btn-info text-center" style="width:130px ">
					Đã Duyệt</a>
			@elseif(isset($PostDetails) && $session["per_name"] != "mod" && ($PostDetails["news_status"] == "Chờ Duyệt" ||  $PostDetails["news_status"] == "Ẩn"))
				<a href="<?= base_url()?>admin/Post/Check/<?=  $PostDetails["news_id"]?>" class="btn btn-info text-center" style="width:130px ">Duyệt Bài</a>
			@elseif($PostDetails["news_status"] == "Đã Đăng")
				@if(isset($session))
					@foreach($session["per"] as $row)
						<?php
						$check = explode(',', $row["check_action"]);
						?>
						@if($row["action_code"] == "comment" && (in_array(1, $check) || in_array(9, $check)))
							<a href="<?= base_url()?>admin/Comment/ListComment/<?=  $PostDetails["news_id"]?>" class="btn btn-info text-center" style="width:130px ">Comment</a>
						@endif
					@endforeach
				@endif&nbsp;

			@endif
			<a href="<?= base_url()?>admin/News/ListNews" class="btn btn-default back text-center" style="width: 130px;margin: 10px 0px 30px 0px">Quay Lại</a>
		</div>
	</div>
	<div class="row" style="margin: 0px;">
		<div class="col-md-12" style="padding-left: 3px;" ><h4 style="margin-right: 21px">{!! $PostDetails["news_description"] !!}</h4></div>
		<div class="col-md-12 vs" style="padding-left: 3px;">
			<p style="margin-right: 31px">
				{!! $PostDetails["news_content"] !!}
			</p>

		</div>

	</div>
@endsection
