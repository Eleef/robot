// adaptive(document, window);//初始加载自适应
// function adaptive(doc, win) {
// 	var docEl = doc.documentElement,
// 	resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
// 	recalc = function() {
// 		var clientWidth = docEl.clientWidth;
// 		if(!clientWidth) return;
// 		if(clientWidth >= 1920) {
// 			docEl.style.fontSize = '10px';//这个是根据我自己项目调的
// 		} else {
// 			docEl.style.fontSize = 10 * (clientWidth / 1920) + 'px';
// 		}
// 	};
// 	if(!doc.addEventListener) return;
// 	        win.addEventListener(resizeEvt, recalc, false);
// 		doc.addEventListener('DOMContentLoaded', recalc, false);
// 	}
// 	//随浏览器大小自适应
// 	window.onresize = function() {
// 	adaptive(document, window);
// }

var deviceWidth
setHtmlFontSize()

if (window.addEventListener) {
  window.addEventListener('resize', function () {
      setHtmlFontSize()
  }, false)
}
function setHtmlFontSize () {
  // 1366是设计稿的宽度，当大于1366时采用1366宽度，比例也是除以13.66
    deviceWidth = document.documentElement.clientWidth > 1366 ? 1366 : document.documentElement.clientWidth
    document.getElementsByTagName('html')[0].style.cssText = 'font-size:' + deviceWidth / 120 + 'px !important'
}