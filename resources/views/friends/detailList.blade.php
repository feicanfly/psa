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
		  <li class="friend-list">
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
		    		<p>
		    			<span>{{{ isset($friend->profile->phone) ? '电话:' . $friend->profile->phone : '' }}}</span>
		    			<span>{{{ isset($friend->profile->age) ? '年龄:' . $friend->profile->age : '' }}}</span>
		    			
		    			<?php if ($friend->profile->gender == 1): ?>
		    				<span>性别:男</span>
		    			<?php elseif($friend->profile->gender == 2): ?>
		    				<span>性别:女</span>
		    			<?php endif ?>
		    		</p>
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