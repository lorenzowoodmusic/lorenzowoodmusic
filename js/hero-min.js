function fullscreen(n){var e=window.innerWidth,o=window.innerHeight,r=!1;e/o<.575?o=Math.round(e/.575):e/o>1.55?o=Math.round(e/1.55):r=!0;var t=d$("#scroll-arrow");t&&(r&&!n?t.classList.remove("none"):t.parentNode.removeChild(t)),topOfMain=d$("main").getBoundingClientRect().top+document.documentElement.scrollTop}var d$=document.querySelector.bind(document),topOfMain=0;window.addEventListener("scroll",(function(){var n=d$("#scroll-arrow");n&&n.parentNode.removeChild(n)})),setTimeout((function(){var n=d$("#scroll-arrow");n&&n.parentNode.removeChild(n)}),4e3);var downArrow=d$(".down-arrow");downArrow.addEventListener("click",(function(){return setTimeout((function(){window.scrollTo(0,topOfMain)}),.25),!1})),fullscreen(null),window.addEventListener("resize",(function(n){fullscreen(n)}));