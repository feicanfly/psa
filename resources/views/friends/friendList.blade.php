<ul class="list-style-1 row">

		<li id="notice-add-friend">
			<div class="pull-left block">
				<a href="/friends/find">
					<p class="name">暂时没有好友</p>
					<p>立即添加</p>
				</a>
			</div>
		</li>

		@foreach ($friendList as $friend)
		  <li class="friend-list"
		  	<?php 
			  	if (! empty($friend->profile->last_lng)) {
					$lng = $friend->profile->last_lng;
	          		$lat = $friend->profile->last_lat;
			  	}else{
			  		$lng = 116.28702 + substr($friend->profile->created_at, -2) * 0.01;
	          		$lat = 39.917478 + substr($friend->profile->created_at, -2) * 0.01;
			  	}
		  	?>

		  	lng={{ $lng }} lat={{ $lat }} name='{{ $friend->profile->name }}'' age='{{ $friend->profile->age }}'' gender='{{ $friend->profile->gender }}'' phone='{{ $friend->profile->phone }}'
		  >
				<div class="pull-left block avatar">
					<img src="
						<?php if (! empty($friend->profile->avatar)): ?>
							{{ $friend->profile->avatar }}
						<?php else: ?>
							/image/avatar.jpg
						<?php endif ?>
					">
				</div>

				<div class="pull-left block">
					<p class="name">{{ $friend->profile->name }}</p>
		    		<p>{{ $friend->profile->phone }}</p>
				</div>
		  </li>
		  @endforeach
</ul>

<script type="text/javascript">

	$(document).ready(function() {
	    var o = $(".friend-list");
	    if(o.length == 0) {
	    	$('#notice-add-friend').show();
		}
	});
	
</script>