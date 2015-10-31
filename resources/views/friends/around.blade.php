@extends('layout')

@section('content')

      <div class="row">
      		<div class="col-md-3 user-list">
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

              function addMarker(point, myIcon, name){
                  var marker = new BMap.Marker(point,{icon:myIcon});
                  map.addOverlay(marker);

                  var opts = {
                  width : 20,     // 信息窗口宽度
                  height: 10,     // 信息窗口高度
                  title : name , // 信息窗口标题
                  enableMessage:false,//设置允许信息窗发送短息
                  message:''
                }
                var infoWindow = new BMap.InfoWindow('', opts);  // 创建信息窗口对象 
                  marker.addEventListener("click", function(){          
                  map.openInfoWindow(infoWindow,point); //开启信息窗口
                });
              }

             @foreach ($friendList as $friend)
                var lng = 116.28702 + (Math.floor(Math.random()*50)  * 0.01);
                var lat = 39.917478 + (Math.floor(Math.random()*50)  * 0.01);
                var point = new BMap.Point(lng, lat);
                var myIcon = new BMap.Icon("{{ $friend->profile->avatar }}", new BMap.Size(50,50));
                addMarker(point, myIcon, '{{ $friend->profile->name }}' );
             @endforeach

</script>
@stop