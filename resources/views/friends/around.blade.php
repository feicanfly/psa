@extends('layout')

@section('content')

      <div class="row">
      		<div class="col-md-3">
                        <p class="tab-1 row">在线好友</p>
                        @include('friends.friendList')
      		</div>
      		<div class="col-md-9" id="allmap">
      		</div>
      </div>

      <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=l5aPgKDLaoWS7GOBTrCwPp8y"></script>
      <script>

              var map = new BMap.Map("allmap");
              var lng = 116.28702 + (Math.floor(Math.random()*50)  * 0.01);
              var lat = 39.917478 + (Math.floor(Math.random()*50)  * 0.01);
              var point = new BMap.Point(lng, lat);
              map.centerAndZoom(point, 10);

              function addMarker(point){
                  var marker = new BMap.Marker(point);
                  map.addOverlay(marker);
              }

             @foreach ($friendList as $friend)
                var lng = 116.28702 + (Math.floor(Math.random()*50)  * 0.01);
                var lat = 39.917478 + (Math.floor(Math.random()*50)  * 0.01);
                var point = new BMap.Point(lng, lat);
                addMarker(point);
             @endforeach

</script>
@stop