@extends('layout')

@section('content')

      <div class="row">
      		<div class="col-md-3">
                        <ul>
                              @foreach ($friendList as $friend)
                              <li>
      				  <h4>{{ $friend->friendProfile->name }}</h4>
                                <p>{{ $friend->friendProfile->phone }}</p>
                              </li>
                              @endforeach
                        </ul>
      		</div>
      		<div class="col-md-9" id="allmap">
      		</div>
      </div>

      <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=l5aPgKDLaoWS7GOBTrCwPp8y"></script>
      <script>
      if (window.navigator.geolocation) {
             var options = {
                 enableHighAccuracy: true,
             };
             window.navigator.geolocation.getCurrentPosition(handleSuccess, handleError, options);
         } else {
             alert("浏览器不支持html5来获取地理位置信息");
         }
         
         function handleSuccess(position){
             // 获取到当前位置经纬度  本例中是chrome浏览器取到的是google地图中的经纬度
             var lng = position.coords.longitude;
             var lat = position.coords.latitude;
             alert(lng);
             // 调用百度地图api显示
             var map = new BMap.Map("allmap");
             var point = new BMap.Point(lng, lat);
             var marker = new BMap.Marker(point);  // 创建标注
             map.addOverlay(marker); 
             map.centerAndZoom(point, 15)

         }
         
         function handleError(error){
                  // 百度地图API功能
                  var map = new BMap.Map("allmap");    // 创建Map实例
                  map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
                  map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
                  map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
                  map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
         }
</script>
@stop