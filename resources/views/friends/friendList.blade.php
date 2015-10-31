<ul class="list-style-1 row">
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
</ul>