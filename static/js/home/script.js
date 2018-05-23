// rem的自适应代码 
var docEl = document.documentElement,
    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
    recalc = function() {
        //设置根字体大小
        docEl.style.fontSize = 20 * (docEl.clientWidth / 320) + 'px';
    };

//绑定浏览器缩放与加载时间
window.addEventListener(resizeEvt, recalc, false);
document.addEventListener('DOMContentLoaded', recalc, false);


// 滑块布局
var matrix = [
    [
        {full:0},{full:1,first:true,moveDirection:'x'},{full:1}
    ],
    [
        {full:0},{full:1,moveDirection:'x'},{full:1}
    ],
    [
        {full:0},{full:0},{full:0}
    ]
];

$(document).ready(function() {
	//滑块加载
    $(".slidingSpaces").ferroSlider({
        axis                    : 'xy',
        displace                : matrix,     //设置page格式
        createMap               : true,			//是否设置地图
        mapPosition             : '85%_85%',
        createSensibleAreas     : false,
        playerTheme				: 'light',
        disableSwipe			: true,   //是否禁止页面拖动
        time					: 1000
    });

 	// 滑动按钮 
	var button = $(".button");
	button.mouseenter(function(){
		$(this).animate({top:"-=20px"},150,function(){
			$(this).animate({top:"+=20px"},100);
		});
	});

	$("#firstToSecond").click(function(){
		$.fn.ferroSlider.slideTo("div2");
	});

	$("#firstToThird").click(function(){
		$.fn.ferroSlider.slideTo("div3");
	});

	$("#secondToFirst").click(function(){
		$.fn.ferroSlider.slideTo("div1");
	});

	$("#secondToForth").click(function(){
		$.fn.ferroSlider.slideTo("div4");
	});

	$("#thirdToFirst").click(function(){
		$.fn.ferroSlider.slideTo("div1");
	});

	$("#thirdToForth").click(function(){
		$.fn.ferroSlider.slideTo("div4");
	});	

	$("#forthToThird").click(function(){
		$.fn.ferroSlider.slideTo("div3");
	});		

	$("#forthToSecond").click(function(){
		$.fn.ferroSlider.slideTo("div2");
	});				

});


