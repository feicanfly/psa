@extends('layout')

@section('content')


      <div class="row">
      		<div class="col-md-4">
      			<ul>
      				<li>好友列表</li>
      				<li>好友列表</li>
      				<li>好友列表</li>
      				<li>好友列表</li>
      				<li>好友列表</li>
      			</ul>
      		</div>
      		<div class="col-md-8" id="allmap">
      		</div>
      </div>

      <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=l5aPgKDLaoWS7GOBTrCwPp8y"></script>

      <script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("allmap");    // 创建Map实例
			map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
			map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
			map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	</script>
@stop