/*
 * 花子直播间焦点图代码
 */
;+function() {

	var dealy = 3000,	//3秒滾動一张圖片，可自行修改
		oBox = document.getElementsByClassName('box')[0],
		aList = oBox.getElementsByClassName('list')[0],
		oTitle = oBox.getElementsByClassName('title')[0].getElementsByTagName('li'),
		aNum = oBox.getElementsByClassName('num')[0].getElementsByTagName('li'),
		itemH = aList.getElementsByTagName('li')[0].offsetHeight,
		timer = null,
		now = 0;

	init();
	function init() {
		info();
		//初始化轮番样式
		aNum[0].className = 'active';
		oTitle[0].className = 'current';
		for (var i = 0, len = aNum.length; i < len; i++) {
			aNum[i].index = i;
			aNum[i].onmouseover = function() {
				now = this.index;
				play(Running);
			}
		}
		auto();
		oBox.onmouseover = function() {
			clearInterval(timer);
		}
		oBox.onmouseout = function() {
			auto();
		}	
	}
	function play(fn) {
		for (var i = 0, len = aNum.length; i < len; i++) {
			aNum[i].className = '';
			oTitle[i].className = '';
		}
		aNum[now].className = 'active';
		oTitle[now].className = 'current';
		fn(aList, { top: -itemH*now });			
	}
	function auto() {
		clearInterval(timer);
		timer = setInterval(function() {
			now++;
			if (now == aNum.length) now = 0;
			play(Flexing);
		}, dealy);
	}
	function Flexing(obj, json, fnEnd) {
		clearInterval(obj.timer);
		obj.timer = setInterval(function() {
			var now = 0;
			var bStop = true;
			for (var attr in json) {
				if (!obj.speed) obj.speed = {};
				if (!obj.speed[attr]) obj.speed[attr] = 0;
				now = parseInt(getStyle(obj,attr));
				if (Math.abs(json[attr]- now) > 1 || Math.abs(obj.speed[attr]) > 1) {
					bStop = false;
					obj.speed[attr] += (json[attr] - now)/5;
					obj.speed[attr] *= 0.85;
					var MaxSpeed = 50;
					if (Math.abs(obj.speed[attr]) > MaxSpeed) {
						obj.speed[attr] = obj.speed[attr] > 0 ? MaxSpeed : -MaxSpeed;
					}
					obj.style[attr] = now + obj.speed[attr] + 'px';
				}
			}
			if (bStop) {
				clearInterval(obj.timer);
				obj.style[attr] = json[attr] + 'px';
				if (fnEnd) fnEnd();
			}
		}, 30);
	}
	function Running(obj, json, fnEnd) {
		clearInterval(obj.timer);
		obj.timer = setInterval(function() {
			var now = 0;
			var bStop = true;
			for (var attr in json) {
				if (attr === 'opacity') {
					now = Math.round(parseFloat(getStyle(obj, attr))*100);
				} else {
					now = parseInt(getStyle(obj,attr));
				}
				var speed = (json[attr] - now)/5;
				speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
				if (now != json[attr]) bStop = false;
				if (attr === 'opacity') {
					obj.style.filter = 'alpha(opacity:' + now + speed + ')';
					obj.style.opacity = (now + speed)/100;
				} else {
					obj.style[attr] = speed + now + 'px';
				}
			}
			if (bStop) {
				clearInterval(obj.timer);
				if (fnEnd) fnEnd();
			}
		}, 30);
	}
	function getStyle(obj, name) {
		if (obj.currentStyle) return obj.currentStyle[name];
		else return getComputedStyle(obj, false)[name];
	}
	function info() {
		var aLink = document.createElement('a');
		var myinfo = '';
		aLink.innerHTML = myinfo;
		aLink.onmouseover = function() {
			aLink.style.textDecoration = 'underline';
		}
		aLink.onmouseout = function() {
			aLink.style.textDecoration = 'none';
		}
		document.body.appendChild(aLink);
	}

}();