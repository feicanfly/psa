<div class="col-md-9" id="allmap">
</div>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=l5aPgKDLaoWS7GOBTrCwPp8y"></script>

	<script>
	var map = new BMap.Map("allmap");
	var lng = 116.28702 + (Math.floor(Math.random()*50)  * 0.01);
	var lat = 39.917478 + (Math.floor(Math.random()*50)  * 0.01);
	var point = new BMap.Point(lng, lat);
	map.centerAndZoom(point, 10);

	function addMarker(point, myIcon, name, phone, age, gender){
	    var marker = new BMap.Marker(point,{icon:myIcon});
	    map.addOverlay(marker);

	    var opts = {
	    width : 20,     // 信息窗口宽度
	    height: 10,     // 信息窗口高度
	    title : name , // 信息窗口标题
	    enableMessage:false,//设置允许信息窗发送短息
	    message:phone
	  }

	  $message = '';
	  
	  if (phone) {
	    $message += '电话：' + phone +',';
	  }

	  if (age) {
	    $message += age +'岁,';
	  }

	  if (gender == 1) {
	    $message += '男';
	  }else if ( gender == 2) {
	    $message += '女';
	  }

	  var infoWindow = new BMap.InfoWindow($message, opts);  // 创建信息窗口对象 
	  marker.addEventListener("click", function(){          
	    map.openInfoWindow(infoWindow,point); //开启信息窗口
	  });
	}

	@foreach ($friendList as $friend)
	  var lng = 116.28702 +  <?php echo substr($friend->profile->created_at, -2) ?> * 0.01;
	  var lat = 39.917478 + <?php echo substr($friend->profile->created_at, -2) ?> * 0.01;
	  var point = new BMap.Point(lng, lat);
	  var myIcon = new BMap.Icon("{{ $friend->profile->avatar }}", new BMap.Size(50,50));
	  addMarker(point, myIcon, '{{ $friend->profile->name or '' }}', '{{ $friend->profile->phone or '' }}',  '{{ $friend->profile->age or '' }}', '{{ $friend->profile->gender or '' }}');
	@endforeach

	//获取当前位置开始
	if (window.navigator.geolocation) {
	     var options = {
	         enableHighAccuracy: true,
	     };
	     window.navigator.geolocation.getCurrentPosition(handleSuccess, handleError, options);
	 } else {
	     alert("浏览器不支持html5来获取地理位置信息");
	 }

	 function handleSuccess(position){
	     var lng = position.coords.longitude;
	     var lat = position.coords.latitude;

	     // 调用百度地图api显示
	     var point = new BMap.Point(lng, lat);
	     var marker = new BMap.Marker(point);  // 创建标注
	     map.addOverlay(marker);

	     alert(lng);
	     //更新当前位置
	     $.post("/updateLocation",{last_lng:lng,last_lat:lat,_token:'{{ csrf_token() }}'});
	 }
	 
	 function handleError(error){
	 }
	 
	 //获取当前位置结束

	 //点击列表
	$(document).ready(function() {
	    $(".friend-list").click(function(){
	      lng = $(this).attr('lng');
	      lat = $(this).attr('lat');
	    
	      var opts = {
	        width : 20,     // 信息窗口宽度
	        height: 10,     // 信息窗口高度
	        title : $(this).attr('name') , // 信息窗口标题
	        enableMessage:false,//设置允许信息窗发送短息
	        message:''
	      }

	      $message = '';
	      if ($(this).attr('phone')) {
	        $message += '电话：' + $(this).attr('phone') +',';
	      }

	      if ($(this).attr('age')) {
	        $message += $(this).attr('age') +'岁,';
	      }

	      if ($(this).attr('gender') == 1) {
	        $message += '男';
	      }else if ( $(this).attr('gender') == 2) {
	        $message += '女';
	      }


	    var point = new BMap.Point(lng, lat);
	    var infoWindow = new BMap.InfoWindow($message, opts);
	    map.openInfoWindow(infoWindow,point); //开启信息窗口
	});
	});

	//点击列表结束
	</script>