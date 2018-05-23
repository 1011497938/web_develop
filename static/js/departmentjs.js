var ctrlBar = false;

    var float_timer = null;
    var float_max_X;
    var float_max_Y;
    var float_ctrl_X = true;
    var float_ctrl_Y = true;
    $(function () {
        float_max_X = $(window).width();
        float_max_Y = $(window).height();
    });
    function showVideoImage() {
        if ($('.vjs-poster').css('display') == 'none') {
        $('.vjs-poster').addClass('index').show();
        } else {
            setTimeout('showVideoImage()', 50);
        }
    }

    function startMove() {
        var obj = $('#floatAdv');
        var limit_X = float_max_X - obj.width();
        var limit_Y = float_max_Y - obj.height();
        float_timer = setInterval(function () {
            var _x = parseInt(obj.css('left'));
            var _y = parseInt(obj.css('top'));
            if (_x >= limit_X) {
                float_ctrl_X = false;
            }
            if (_x <= 0) {
                float_ctrl_X = true;
            }
            if (_y >= limit_Y) {
                float_ctrl_Y = false;
            }
            if (_y <= 0) {
                float_ctrl_Y = true;
            }
            if (float_ctrl_X) {
                _x += 1;
            } else {
                _x -= 1;
            }
            if (float_ctrl_Y) {
                _y += 1;
            } else {
                _y -= 1;
            }
            obj.css({
                'left': _x + 'px',
                'top': _y + 'px'
            });
        }, 10);
    }

    function endMove() {
        clearInterval(float_timer);
    }

    $(document).ready(function () {
        $('.ag-header ul li:eq(0)').addClass('current-page');
        showVideoImage();

        $('#floatAdv').mouseenter(function () {
            endMove();
        });
        $('#floatAdv').mouseleave(function () {
            startMove();
        });
        $('#floatAdv span').click(function (e) {
            endMove();
            $('#floatAdv').attr('href', 'javascript:;').removeAttr('target').hide();
        });

        $(".ele").bind("mouseenter mouseleave", function (e) {
		    var w = $(this).width();
		    var h = $(this).height();
		    var x = (e.pageX - this.offsetLeft - (w / 2)) * (w > h ? (h / w) : 1);
		    var y = (e.pageY - this.offsetTop - (h / 2)) * (h > w ? (w / h) : 1);
		    var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
		    if (e.type == 'mouseenter') {
                // 0:up - 1:right - 2:down - 3:left
			    if(direction == 0) {
				    $(this).find('div').css({
					    'top' : '-580px',
					    'left' : '0px'
				    });
				    $(this).find('div').animate({ 'top': 0 }, { queue: false, duration: 300 });
			    } else if(direction == 2) {
				    $(this).find('div').css({
					    'top' : '580px',
					    'left' : '0px'
				    });
				    $(this).find('div').animate({ 'top': 0 }, { queue: false, duration: 300 });
			    } else if(direction == 1) {
				    $(this).find('div').css({
					    'top' : '0px',
					    'left' : '154px'
				    });
				    $(this).find('div').animate({ 'left': 0 }, { queue: false, duration: 300 });
			    } else if(direction == 3) {
				    $(this).find('div').css({
					    'top' : '0px',
					    'left' : '-154px'
				    });
				    $(this).find('div').animate({ 'left': 0 }, { queue: false, duration: 300 });
			    }
			    $(this).find('span').css('color', '#fff');
			    $(this).find('img').animate({ 'left': $(this).find('img').attr('data-hover') }, { queue: false, duration: 200 });
		    }else{
			    if(direction == 0) {
			        $(this).find('div').animate({ 'top': -580 }, { queue: false, duration: 300 });
			    } else if(direction == 2) {
			        $(this).find('div').animate({ 'top': 580 }, { queue: false, duration: 300 });
			    } else if(direction == 1) {
			        $(this).find('div').animate({ 'left': 154 }, { queue: false, duration: 300 });
			    } else if(direction == 3) {
			        $(this).find('div').animate({ 'left': -154 }, { queue: false, duration: 300 });
			    }
			    $(this).find('span').css('color', '#262626');
			    $(this).find('img').animate({ 'left': $(this).find('img').attr('data-normal') }, { queue: false, duration: 200 });
		    }
        });

        //大图点入
        $(".ele").bind('click', function (e) {

            var navIndex = $(e.target).parent().index();
            $('.ele-detail ul li').removeClass('current');
            $('.ele-detail ul li').eq(navIndex).addClass('current');
            $('.signup').show();
            $('.return').show();

            // $('.wrap').css('background-color', '#97BFF4');
            $('.ele').animate({ 'width': 0 }, 500);

            $('.ele-detail').animate({ 'width': 1028 }, {
                duration: 500,
                complete: function () {
                    $('.ele-detail ul li').eq(navIndex).click();
                }
            });
        });

        //返回选择
        $('.return').bind('click', function (e) {
            // $('.wrap').css('background-color', '#f1f1f1');
            $('.ele-detail').css('overflow', 'hidden');
            $('.ele').animate({ 'width': 154 }, 500);
            $('.ele-detail').animate({ 'width': 0 }, 500);
            $('.ele-detail-display').hide();
        });

        //左侧小圆
        $('.ele-detail ul li').bind('click', function () {

            $('.ele-detail ul li').removeClass('current');
            $(this).addClass('current');
            $('.ele-detail').css('overflow', 'visible');
            $('.signup').show();
            $('.return').show();

            var disIndex = $(this).index();
            $('.ele-detail-display').hide();
            $('.form').hide();
            $('.ele-detail-display').eq(disIndex).show();

            // IE
            if ("ActiveXObject" in window) {
                $('.ele-detail-display-left').css({
                    'left': '0px',
                    'opacity':'1'
                });
                $('.ele-detail-display-right').css({
                    'right': '-120px',
                    'opacity': '1'
                });
                $('.ele-detail-display-left').eq(disIndex).animate({ 'left': 120 }, { duration: 1000, easing: 'easeOutQuint' });
                $('.ele-detail-display-right').eq(disIndex).animate({ 'right': 0 }, { duration: 1000, easing: 'easeOutQuint' });
            }
        });

        $('body').on('click', '.vjs-big-play-button', function () {
            $(this).hide();
            ctrlBar = true;
            $('.vjs-control-bar').removeClass('vjs-fade-out').addClass('vjs-fade-in');
        });

        

        // IE7
        if (window.navigator.userAgent.indexOf('MSIE 7.0') >= 0) {

            $('.vjs-big-play-button').css({
                'width': '100px',
                'height': '100px',
                'position': 'absolute',
                'top': '140px',
                'left': '235px'
            });
            $('.ag-content-app-wytgg-right').css('overflow', 'hidden');
        } else {
            $('.ag-content-app-wytgg-right').hover(
                function () {
                    if (ctrlBar) {
                        $('.vjs-control-bar').removeClass('vjs-fade-out').addClass('vjs-fade-in');
                    }
                },
                function () {
                    $('.vjs-control-bar').removeClass('vjs-fade-in').addClass('vjs-fade-out');
                }
            );
        }
    });