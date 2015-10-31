<ul class="list-style-1 row">
      @foreach ($friendList as $friend)
      <li>
			<div class="pull-left block avatar">
				<img src="{{ $friend->friendProfile->avatar or '/image/avatar.jpg'}}">
			</div>

			<div class="pull-left block">
				<h4>{{ $friend->friendProfile->name }}</h4>
        		<p>{{ $friend->friendProfile->phone }}</p>
			</div>
			
      </li>
      @endforeach
</ul>