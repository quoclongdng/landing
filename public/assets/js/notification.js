/*===================================
File Name    : notification.js
Description  : Notifications JS.
Author       : Bestwebcreator.
Template Name: Cryptocash – ICO, Cryptocurrency Website & ICO Landing Page HTML + Dashboard Template
Version      : 1.6
===================================*/

var times = [3120, 4442, 5224, 7510, 8636, 16002, 17222];
var countries = ['flage_bra', 'flage_can','flage_chn','flage_deu', 'flage_eng', 'flage_frn', 'flage_idn', 'flage_ind', 'flage_ita', 'flage_jpn', 'flage_kor', 'flage_phl', 'flage_rus', 'flage_sgp', 'flage_tha', 'flage_usa', 'flage_vie'];
var themeInterval = setInterval('notification()', time());

function time() {
    return   times[parseInt(Math.random()*7)] + 8000;
}
function notification() {
    spop({
        template: '<div class="sale_notification d-flex align-items-center"><img src="assets/images/about_icon.png" alt="" /> <div class="notification_inner"> <h3>'+Math.floor(Math.random()*500 + 50)+' 6Coin9</h3><p>Sold in <img src="assets/images/'+countries[Math.floor(Math.random()*17)]+'.png" alt="" /></p></div></div>',
        group: 'submit-satus',
		style     : 'nav-fixed',// error or success
        position  : 'bottom-left',
        autoclose: 5000,
        icon: false
    });
    clearInterval(themeInterval);
    themeInterval = setInterval('notification()', time());
}
