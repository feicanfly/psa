<ul class="list-style-1 row">
      	<?php 
      		if (empty($friendList)) :
      	?>
		<li>
			<div class="pull-left block">
				<a href="/friends/find">
					<p class="name">暂时没有好友</p>
					<p>立即添加</p>
				</a>
			</div>
		</li>

	<?php else: ?>
		@foreach ($friendList as $friend)
	      <li>
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
      <?php endif ?>

     
</ul>