function fullscreen(e){var n=window.innerWidth,o=window.innerHeight,r=!1;n/o<.575?o=Math.round(n/.575):n/o>1.55?o=Math.round(n/1.55):r=!0;var t=d$("#scroll-arrow");t&&(r&&!e?t.style.display="block":t.parentNode.removeChild(t));var d=d$a(".covering");Array.prototype.forEach.call(d,(function(e){e.setAttribute("style","width:"+n+"px; height:"+o+"px")})),topOfMain=d$("main").getBoundingClientRect().top+document.documentElement.scrollTop}var d$=document.querySelector.bind(document),d$a=document.querySelectorAll.bind(document),topOfMain=0;window.addEventListener("scroll",(function(){var e=d$("#scroll-arrow");e&&e.parentNode.removeChild(e)})),setTimeout((function(){var e=d$("#scroll-arrow");e&&e.parentNode.removeChild(e)}),4e3);var downArrow=d$(".down-arrow");downArrow.addEventListener("click",(function(){return setTimeout((function(){window.scrollTo(0,topOfMain)}),.25),!1})),window.addEventListener("resize",(function(){})),fullscreen(null),window.addEventListener("resize",(function(e){fullscreen(e)}));