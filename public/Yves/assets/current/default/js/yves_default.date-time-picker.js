(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["date-time-picker"],{

/***/ "./node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.js":
/*!********************************************************************************!*\
  !*** ./node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.js ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @version 1.3.4
 *
 * Date formatter utility library that allows formatting date/time variables or Date objects using PHP DateTime format.
 * @see http://php.net/manual/en/function.date.php
 *
 * For more JQuery plugins visit http://plugins.krajee.com
 * For more Yii related demos visit http://demos.krajee.com
 */var DateFormatter;!function(){"use strict";var t,e,r,n,a,u,i;u=864e5,i=3600,t=function(t,e){return"string"==typeof t&&"string"==typeof e&&t.toLowerCase()===e.toLowerCase()},e=function(t,r,n){var a=n||"0",u=t.toString();return u.length<r?e(a+u,r):u},r=function(t){var e,n;for(t=t||{},e=1;e<arguments.length;e++)if(n=arguments[e])for(var a in n)n.hasOwnProperty(a)&&("object"==typeof n[a]?r(t[a],n[a]):t[a]=n[a]);return t},n=function(t,e){for(var r=0;r<e.length;r++)if(e[r].toLowerCase()===t.toLowerCase())return r;return-1},a={dateSettings:{days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],daysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],meridiem:["AM","PM"],ordinal:function(t){var e=t%10,r={1:"st",2:"nd",3:"rd"};return 1!==Math.floor(t%100/10)&&r[e]?r[e]:"th"}},separators:/[ \-+\/\.T:@]/g,validParts:/[dDjlNSwzWFmMntLoYyaABgGhHisueTIOPZcrU]/g,intParts:/[djwNzmnyYhHgGis]/g,tzParts:/\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,tzClip:/[^-+\dA-Z]/g},DateFormatter=function(t){var e=this,n=r(a,t);e.dateSettings=n.dateSettings,e.separators=n.separators,e.validParts=n.validParts,e.intParts=n.intParts,e.tzParts=n.tzParts,e.tzClip=n.tzClip},DateFormatter.prototype={constructor:DateFormatter,getMonth:function(t){var e,r=this;return e=n(t,r.dateSettings.monthsShort)+1,0===e&&(e=n(t,r.dateSettings.months)+1),e},parseDate:function(e,r){var n,a,u,i,s,o,c,f,l,h,d=this,g=!1,m=!1,p=d.dateSettings,y={date:null,year:null,month:null,day:null,hour:0,min:0,sec:0};if(!e)return null;if(e instanceof Date)return e;if("U"===r)return u=parseInt(e),u?new Date(1e3*u):e;switch(typeof e){case"number":return new Date(e);case"string":break;default:return null}if(n=r.match(d.validParts),!n||0===n.length)throw new Error("Invalid date format definition.");for(a=e.replace(d.separators,"\x00").split("\x00"),u=0;u<a.length;u++)switch(i=a[u],s=parseInt(i),n[u]){case"y":case"Y":if(!s)return null;l=i.length,y.year=2===l?parseInt((70>s?"20":"19")+i):s,g=!0;break;case"m":case"n":case"M":case"F":if(isNaN(s)){if(o=d.getMonth(i),!(o>0))return null;y.month=o}else{if(!(s>=1&&12>=s))return null;y.month=s}g=!0;break;case"d":case"j":if(!(s>=1&&31>=s))return null;y.day=s,g=!0;break;case"g":case"h":if(c=n.indexOf("a")>-1?n.indexOf("a"):n.indexOf("A")>-1?n.indexOf("A"):-1,h=a[c],c>-1)f=t(h,p.meridiem[0])?0:t(h,p.meridiem[1])?12:-1,s>=1&&12>=s&&f>-1?y.hour=s+f-1:s>=0&&23>=s&&(y.hour=s);else{if(!(s>=0&&23>=s))return null;y.hour=s}m=!0;break;case"G":case"H":if(!(s>=0&&23>=s))return null;y.hour=s,m=!0;break;case"i":if(!(s>=0&&59>=s))return null;y.min=s,m=!0;break;case"s":if(!(s>=0&&59>=s))return null;y.sec=s,m=!0}if(g===!0&&y.year&&y.month&&y.day)y.date=new Date(y.year,y.month-1,y.day,y.hour,y.min,y.sec,0);else{if(m!==!0)return null;y.date=new Date(0,0,0,y.hour,y.min,y.sec,0)}return y.date},guessDate:function(t,e){if("string"!=typeof t)return t;var r,n,a,u,i,s,o=this,c=t.replace(o.separators,"\x00").split("\x00"),f=/^[djmn]/g,l=e.match(o.validParts),h=new Date,d=0;if(!f.test(l[0]))return t;for(a=0;a<c.length;a++){if(d=2,i=c[a],s=parseInt(i.substr(0,2)),isNaN(s))return null;switch(a){case 0:"m"===l[0]||"n"===l[0]?h.setMonth(s-1):h.setDate(s);break;case 1:"m"===l[0]||"n"===l[0]?h.setDate(s):h.setMonth(s-1);break;case 2:if(n=h.getFullYear(),r=i.length,d=4>r?r:4,n=parseInt(4>r?n.toString().substr(0,4-r)+i:i.substr(0,4)),!n)return null;h.setFullYear(n);break;case 3:h.setHours(s);break;case 4:h.setMinutes(s);break;case 5:h.setSeconds(s)}u=i.substr(d),u.length>0&&c.splice(a+1,0,u)}return h},parseFormat:function(t,r){var n,a=this,s=a.dateSettings,o=/\\?(.?)/gi,c=function(t,e){return n[t]?n[t]():e};return n={d:function(){return e(n.j(),2)},D:function(){return s.daysShort[n.w()]},j:function(){return r.getDate()},l:function(){return s.days[n.w()]},N:function(){return n.w()||7},w:function(){return r.getDay()},z:function(){var t=new Date(n.Y(),n.n()-1,n.j()),e=new Date(n.Y(),0,1);return Math.round((t-e)/u)},W:function(){var t=new Date(n.Y(),n.n()-1,n.j()-n.N()+3),r=new Date(t.getFullYear(),0,4);return e(1+Math.round((t-r)/u/7),2)},F:function(){return s.months[r.getMonth()]},m:function(){return e(n.n(),2)},M:function(){return s.monthsShort[r.getMonth()]},n:function(){return r.getMonth()+1},t:function(){return new Date(n.Y(),n.n(),0).getDate()},L:function(){var t=n.Y();return t%4===0&&t%100!==0||t%400===0?1:0},o:function(){var t=n.n(),e=n.W(),r=n.Y();return r+(12===t&&9>e?1:1===t&&e>9?-1:0)},Y:function(){return r.getFullYear()},y:function(){return n.Y().toString().slice(-2)},a:function(){return n.A().toLowerCase()},A:function(){var t=n.G()<12?0:1;return s.meridiem[t]},B:function(){var t=r.getUTCHours()*i,n=60*r.getUTCMinutes(),a=r.getUTCSeconds();return e(Math.floor((t+n+a+i)/86.4)%1e3,3)},g:function(){return n.G()%12||12},G:function(){return r.getHours()},h:function(){return e(n.g(),2)},H:function(){return e(n.G(),2)},i:function(){return e(r.getMinutes(),2)},s:function(){return e(r.getSeconds(),2)},u:function(){return e(1e3*r.getMilliseconds(),6)},e:function(){var t=/\((.*)\)/.exec(String(r))[1];return t||"Coordinated Universal Time"},I:function(){var t=new Date(n.Y(),0),e=Date.UTC(n.Y(),0),r=new Date(n.Y(),6),a=Date.UTC(n.Y(),6);return t-e!==r-a?1:0},O:function(){var t=r.getTimezoneOffset(),n=Math.abs(t);return(t>0?"-":"+")+e(100*Math.floor(n/60)+n%60,4)},P:function(){var t=n.O();return t.substr(0,3)+":"+t.substr(3,2)},T:function(){var t=(String(r).match(a.tzParts)||[""]).pop().replace(a.tzClip,"");return t||"UTC"},Z:function(){return 60*-r.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(o,c)},r:function(){return"D, d M Y H:i:s O".replace(o,c)},U:function(){return r.getTime()/1e3||0}},c(t,t)},formatDate:function(t,e){var r,n,a,u,i,s=this,o="",c="\\";if("string"==typeof t&&(t=s.parseDate(t,e),!t))return null;if(t instanceof Date){for(a=e.length,r=0;a>r;r++)i=e.charAt(r),"S"!==i&&i!==c&&(r>0&&e.charAt(r-1)===c?o+=i:(u=s.parseFormat(i,t),r!==a-1&&s.intParts.test(i)&&"S"===e.charAt(r+1)&&(n=parseInt(u)||0,u+=s.dateSettings.ordinal(n)),o+=u));return o}return""}}}();/**
 * @preserve jQuery DateTimePicker
 * @homepage http://xdsoft.net/jqplugins/datetimepicker/
 * @author Chupurnov Valeriy (<chupurnov@gmail.com>)
 */

/**
 * @param {jQuery} $
 */
var datetimepickerFactory = function ($) {
	'use strict';

	var default_options  = {
		i18n: {
			ar: { // Arabic
				months: [
					"كانون الثاني", "شباط", "آذار", "نيسان", "مايو", "حزيران", "تموز", "آب", "أيلول", "تشرين الأول", "تشرين الثاني", "كانون الأول"
				],
				dayOfWeekShort: [
					"ن", "ث", "ع", "خ", "ج", "س", "ح"
				],
				dayOfWeek: ["الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت", "الأحد"]
			},
			ro: { // Romanian
				months: [
					"Ianuarie", "Februarie", "Martie", "Aprilie", "Mai", "Iunie", "Iulie", "August", "Septembrie", "Octombrie", "Noiembrie", "Decembrie"
				],
				dayOfWeekShort: [
					"Du", "Lu", "Ma", "Mi", "Jo", "Vi", "Sâ"
				],
				dayOfWeek: ["Duminică", "Luni", "Marţi", "Miercuri", "Joi", "Vineri", "Sâmbătă"]
			},
			id: { // Indonesian
				months: [
					"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
				],
				dayOfWeekShort: [
					"Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"
				],
				dayOfWeek: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]
			},
			is: { // Icelandic
				months: [
					"Janúar", "Febrúar", "Mars", "Apríl", "Maí", "Júní", "Júlí", "Ágúst", "September", "Október", "Nóvember", "Desember"
				],
				dayOfWeekShort: [
					"Sun", "Mán", "Þrið", "Mið", "Fim", "Fös", "Lau"
				],
				dayOfWeek: ["Sunnudagur", "Mánudagur", "Þriðjudagur", "Miðvikudagur", "Fimmtudagur", "Föstudagur", "Laugardagur"]
			},
			bg: { // Bulgarian
				months: [
					"Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември"
				],
				dayOfWeekShort: [
					"Нд", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"
				],
				dayOfWeek: ["Неделя", "Понеделник", "Вторник", "Сряда", "Четвъртък", "Петък", "Събота"]
			},
			fa: { // Persian/Farsi
				months: [
					'فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'
				],
				dayOfWeekShort: [
					'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه'
				],
				dayOfWeek: ["یک‌شنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه", "شنبه", "یک‌شنبه"]
			},
			ru: { // Russian
				months: [
					'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
				],
				dayOfWeekShort: [
					"Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"
				],
				dayOfWeek: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"]
			},
			uk: { // Ukrainian
				months: [
					'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень'
				],
				dayOfWeekShort: [
					"Ндл", "Пнд", "Втр", "Срд", "Чтв", "Птн", "Сбт"
				],
				dayOfWeek: ["Неділя", "Понеділок", "Вівторок", "Середа", "Четвер", "П'ятниця", "Субота"]
			},
			en: { // English
				months: [
					"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
				],
				dayOfWeekShort: [
					"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"
				],
				dayOfWeek: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
			},
			el: { // Ελληνικά
				months: [
					"Ιανουάριος", "Φεβρουάριος", "Μάρτιος", "Απρίλιος", "Μάιος", "Ιούνιος", "Ιούλιος", "Αύγουστος", "Σεπτέμβριος", "Οκτώβριος", "Νοέμβριος", "Δεκέμβριος"
				],
				dayOfWeekShort: [
					"Κυρ", "Δευ", "Τρι", "Τετ", "Πεμ", "Παρ", "Σαβ"
				],
				dayOfWeek: ["Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο"]
			},
			de: { // German
				months: [
					'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'
				],
				dayOfWeekShort: [
					"So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"
				],
				dayOfWeek: ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"]
			},
			nl: { // Dutch
				months: [
					"januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"
				],
				dayOfWeekShort: [
					"zo", "ma", "di", "wo", "do", "vr", "za"
				],
				dayOfWeek: ["zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag"]
			},
			tr: { // Turkish
				months: [
					"Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
				],
				dayOfWeekShort: [
					"Paz", "Pts", "Sal", "Çar", "Per", "Cum", "Cts"
				],
				dayOfWeek: ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"]
			},
			fr: { //French
				months: [
					"Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
				],
				dayOfWeekShort: [
					"Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"
				],
				dayOfWeek: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"]
			},
			es: { // Spanish
				months: [
					"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
				],
				dayOfWeekShort: [
					"Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"
				],
				dayOfWeek: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"]
			},
			th: { // Thai
				months: [
					'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
				],
				dayOfWeekShort: [
					'อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'
				],
				dayOfWeek: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์", "อาทิตย์"]
			},
			pl: { // Polish
				months: [
					"styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"
				],
				dayOfWeekShort: [
					"nd", "pn", "wt", "śr", "cz", "pt", "sb"
				],
				dayOfWeek: ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"]
			},
			pt: { // Portuguese
				months: [
					"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
				],
				dayOfWeekShort: [
					"Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"
				],
				dayOfWeek: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"]
			},
			ch: { // Simplified Chinese
				months: [
					"一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"
				],
				dayOfWeekShort: [
					"日", "一", "二", "三", "四", "五", "六"
				]
			},
			se: { // Swedish
				months: [
					"Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September",  "Oktober", "November", "December"
				],
				dayOfWeekShort: [
					"Sön", "Mån", "Tis", "Ons", "Tor", "Fre", "Lör"
				]
			},
			km: { // Khmer (ភាសាខ្មែរ)
				months: [
					"មករា​", "កុម្ភៈ", "មិនា​", "មេសា​", "ឧសភា​", "មិថុនា​", "កក្កដា​", "សីហា​", "កញ្ញា​", "តុលា​", "វិច្ឆិកា", "ធ្នូ​"
				],
				dayOfWeekShort: ["អាទិ​", "ច័ន្ទ​", "អង្គារ​", "ពុធ​", "ព្រហ​​", "សុក្រ​", "សៅរ៍"],
				dayOfWeek: ["អាទិត្យ​", "ច័ន្ទ​", "អង្គារ​", "ពុធ​", "ព្រហស្បតិ៍​", "សុក្រ​", "សៅរ៍"]
			},
			kr: { // Korean
				months: [
					"1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"
				],
				dayOfWeekShort: [
					"일", "월", "화", "수", "목", "금", "토"
				],
				dayOfWeek: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"]
			},
			it: { // Italian
				months: [
					"Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"
				],
				dayOfWeekShort: [
					"Dom", "Lun", "Mar", "Mer", "Gio", "Ven", "Sab"
				],
				dayOfWeek: ["Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"]
			},
			da: { // Dansk
				months: [
					"Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", "August", "September", "Oktober", "November", "December"
				],
				dayOfWeekShort: [
					"Søn", "Man", "Tir", "Ons", "Tor", "Fre", "Lør"
				],
				dayOfWeek: ["søndag", "mandag", "tirsdag", "onsdag", "torsdag", "fredag", "lørdag"]
			},
			no: { // Norwegian
				months: [
					"Januar", "Februar", "Mars", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Desember"
				],
				dayOfWeekShort: [
					"Søn", "Man", "Tir", "Ons", "Tor", "Fre", "Lør"
				],
				dayOfWeek: ['Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag']
			},
			ja: { // Japanese
				months: [
					"1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"
				],
				dayOfWeekShort: [
					"日", "月", "火", "水", "木", "金", "土"
				],
				dayOfWeek: ["日曜", "月曜", "火曜", "水曜", "木曜", "金曜", "土曜"]
			},
			vi: { // Vietnamese
				months: [
					"Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
				],
				dayOfWeekShort: [
					"CN", "T2", "T3", "T4", "T5", "T6", "T7"
				],
				dayOfWeek: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"]
			},
			sl: { // Slovenščina
				months: [
					"Januar", "Februar", "Marec", "April", "Maj", "Junij", "Julij", "Avgust", "September", "Oktober", "November", "December"
				],
				dayOfWeekShort: [
					"Ned", "Pon", "Tor", "Sre", "Čet", "Pet", "Sob"
				],
				dayOfWeek: ["Nedelja", "Ponedeljek", "Torek", "Sreda", "Četrtek", "Petek", "Sobota"]
			},
			cs: { // Čeština
				months: [
					"Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec"
				],
				dayOfWeekShort: [
					"Ne", "Po", "Út", "St", "Čt", "Pá", "So"
				]
			},
			hu: { // Hungarian
				months: [
					"Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December"
				],
				dayOfWeekShort: [
					"Va", "Hé", "Ke", "Sze", "Cs", "Pé", "Szo"
				],
				dayOfWeek: ["vasárnap", "hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat"]
			},
			az: { //Azerbaijanian (Azeri)
				months: [
					"Yanvar", "Fevral", "Mart", "Aprel", "May", "Iyun", "Iyul", "Avqust", "Sentyabr", "Oktyabr", "Noyabr", "Dekabr"
				],
				dayOfWeekShort: [
					"B", "Be", "Ça", "Ç", "Ca", "C", "Ş"
				],
				dayOfWeek: ["Bazar", "Bazar ertəsi", "Çərşənbə axşamı", "Çərşənbə", "Cümə axşamı", "Cümə", "Şənbə"]
			},
			bs: { //Bosanski
				months: [
					"Januar", "Februar", "Mart", "April", "Maj", "Jun", "Jul", "Avgust", "Septembar", "Oktobar", "Novembar", "Decembar"
				],
				dayOfWeekShort: [
					"Ned", "Pon", "Uto", "Sri", "Čet", "Pet", "Sub"
				],
				dayOfWeek: ["Nedjelja","Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota"]
			},
			ca: { //Català
				months: [
					"Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"
				],
				dayOfWeekShort: [
					"Dg", "Dl", "Dt", "Dc", "Dj", "Dv", "Ds"
				],
				dayOfWeek: ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte"]
			},
			'en-GB': { //English (British)
				months: [
					"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
				],
				dayOfWeekShort: [
					"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"
				],
				dayOfWeek: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
			},
			et: { //"Eesti"
				months: [
					"Jaanuar", "Veebruar", "Märts", "Aprill", "Mai", "Juuni", "Juuli", "August", "September", "Oktoober", "November", "Detsember"
				],
				dayOfWeekShort: [
					"P", "E", "T", "K", "N", "R", "L"
				],
				dayOfWeek: ["Pühapäev", "Esmaspäev", "Teisipäev", "Kolmapäev", "Neljapäev", "Reede", "Laupäev"]
			},
			eu: { //Euskara
				months: [
					"Urtarrila", "Otsaila", "Martxoa", "Apirila", "Maiatza", "Ekaina", "Uztaila", "Abuztua", "Iraila", "Urria", "Azaroa", "Abendua"
				],
				dayOfWeekShort: [
					"Ig.", "Al.", "Ar.", "Az.", "Og.", "Or.", "La."
				],
				dayOfWeek: ['Igandea', 'Astelehena', 'Asteartea', 'Asteazkena', 'Osteguna', 'Ostirala', 'Larunbata']
			},
			fi: { //Finnish (Suomi)
				months: [
					"Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"
				],
				dayOfWeekShort: [
					"Su", "Ma", "Ti", "Ke", "To", "Pe", "La"
				],
				dayOfWeek: ["sunnuntai", "maanantai", "tiistai", "keskiviikko", "torstai", "perjantai", "lauantai"]
			},
			gl: { //Galego
				months: [
					"Xan", "Feb", "Maz", "Abr", "Mai", "Xun", "Xul", "Ago", "Set", "Out", "Nov", "Dec"
				],
				dayOfWeekShort: [
					"Dom", "Lun", "Mar", "Mer", "Xov", "Ven", "Sab"
				],
				dayOfWeek: ["Domingo", "Luns", "Martes", "Mércores", "Xoves", "Venres", "Sábado"]
			},
			hr: { //Hrvatski
				months: [
					"Siječanj", "Veljača", "Ožujak", "Travanj", "Svibanj", "Lipanj", "Srpanj", "Kolovoz", "Rujan", "Listopad", "Studeni", "Prosinac"
				],
				dayOfWeekShort: [
					"Ned", "Pon", "Uto", "Sri", "Čet", "Pet", "Sub"
				],
				dayOfWeek: ["Nedjelja", "Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota"]
			},
			ko: { //Korean (한국어)
				months: [
					"1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"
				],
				dayOfWeekShort: [
					"일", "월", "화", "수", "목", "금", "토"
				],
				dayOfWeek: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"]
			},
			lt: { //Lithuanian (lietuvių)
				months: [
					"Sausio", "Vasario", "Kovo", "Balandžio", "Gegužės", "Birželio", "Liepos", "Rugpjūčio", "Rugsėjo", "Spalio", "Lapkričio", "Gruodžio"
				],
				dayOfWeekShort: [
					"Sek", "Pir", "Ant", "Tre", "Ket", "Pen", "Šeš"
				],
				dayOfWeek: ["Sekmadienis", "Pirmadienis", "Antradienis", "Trečiadienis", "Ketvirtadienis", "Penktadienis", "Šeštadienis"]
			},
			lv: { //Latvian (Latviešu)
				months: [
					"Janvāris", "Februāris", "Marts", "Aprīlis ", "Maijs", "Jūnijs", "Jūlijs", "Augusts", "Septembris", "Oktobris", "Novembris", "Decembris"
				],
				dayOfWeekShort: [
					"Sv", "Pr", "Ot", "Tr", "Ct", "Pk", "St"
				],
				dayOfWeek: ["Svētdiena", "Pirmdiena", "Otrdiena", "Trešdiena", "Ceturtdiena", "Piektdiena", "Sestdiena"]
			},
			mk: { //Macedonian (Македонски)
				months: [
					"јануари", "февруари", "март", "април", "мај", "јуни", "јули", "август", "септември", "октомври", "ноември", "декември"
				],
				dayOfWeekShort: [
					"нед", "пон", "вто", "сре", "чет", "пет", "саб"
				],
				dayOfWeek: ["Недела", "Понеделник", "Вторник", "Среда", "Четврток", "Петок", "Сабота"]
			},
			mn: { //Mongolian (Монгол)
				months: [
					"1-р сар", "2-р сар", "3-р сар", "4-р сар", "5-р сар", "6-р сар", "7-р сар", "8-р сар", "9-р сар", "10-р сар", "11-р сар", "12-р сар"
				],
				dayOfWeekShort: [
					"Дав", "Мяг", "Лха", "Пүр", "Бсн", "Бям", "Ням"
				],
				dayOfWeek: ["Даваа", "Мягмар", "Лхагва", "Пүрэв", "Баасан", "Бямба", "Ням"]
			},
			'pt-BR': { //Português(Brasil)
				months: [
					"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
				],
				dayOfWeekShort: [
					"Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"
				],
				dayOfWeek: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"]
			},
			sk: { //Slovenčina
				months: [
					"Január", "Február", "Marec", "Apríl", "Máj", "Jún", "Júl", "August", "September", "Október", "November", "December"
				],
				dayOfWeekShort: [
					"Ne", "Po", "Ut", "St", "Št", "Pi", "So"
				],
				dayOfWeek: ["Nedeľa", "Pondelok", "Utorok", "Streda", "Štvrtok", "Piatok", "Sobota"]
			},
			sq: { //Albanian (Shqip)
				months: [
					"Janar", "Shkurt", "Mars", "Prill", "Maj", "Qershor", "Korrik", "Gusht", "Shtator", "Tetor", "Nëntor", "Dhjetor"
				],
				dayOfWeekShort: [
					"Die", "Hën", "Mar", "Mër", "Enj", "Pre", "Shtu"
				],
				dayOfWeek: ["E Diel", "E Hënë", "E Martē", "E Mërkurë", "E Enjte", "E Premte", "E Shtunë"]
			},
			'sr-YU': { //Serbian (Srpski)
				months: [
					"Januar", "Februar", "Mart", "April", "Maj", "Jun", "Jul", "Avgust", "Septembar", "Oktobar", "Novembar", "Decembar"
				],
				dayOfWeekShort: [
					"Ned", "Pon", "Uto", "Sre", "čet", "Pet", "Sub"
				],
				dayOfWeek: ["Nedelja","Ponedeljak", "Utorak", "Sreda", "Četvrtak", "Petak", "Subota"]
			},
			sr: { //Serbian Cyrillic (Српски)
				months: [
					"јануар", "фебруар", "март", "април", "мај", "јун", "јул", "август", "септембар", "октобар", "новембар", "децембар"
				],
				dayOfWeekShort: [
					"нед", "пон", "уто", "сре", "чет", "пет", "суб"
				],
				dayOfWeek: ["Недеља","Понедељак", "Уторак", "Среда", "Четвртак", "Петак", "Субота"]
			},
			sv: { //Svenska
				months: [
					"Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December"
				],
				dayOfWeekShort: [
					"Sön", "Mån", "Tis", "Ons", "Tor", "Fre", "Lör"
				],
				dayOfWeek: ["Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag"]
			},
			'zh-TW': { //Traditional Chinese (繁體中文)
				months: [
					"一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"
				],
				dayOfWeekShort: [
					"日", "一", "二", "三", "四", "五", "六"
				],
				dayOfWeek: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"]
			},
			zh: { //Simplified Chinese (简体中文)
				months: [
					"一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"
				],
				dayOfWeekShort: [
					"日", "一", "二", "三", "四", "五", "六"
				],
				dayOfWeek: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"]
			},
			ug:{ // Uyghur(ئۇيغۇرچە)
				months: [
					"1-ئاي","2-ئاي","3-ئاي","4-ئاي","5-ئاي","6-ئاي","7-ئاي","8-ئاي","9-ئاي","10-ئاي","11-ئاي","12-ئاي"
				],
				dayOfWeek: [
					"يەكشەنبە", "دۈشەنبە","سەيشەنبە","چارشەنبە","پەيشەنبە","جۈمە","شەنبە"
				]
			},
			he: { //Hebrew (עברית)
				months: [
					'ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'
				],
				dayOfWeekShort: [
					'א\'', 'ב\'', 'ג\'', 'ד\'', 'ה\'', 'ו\'', 'שבת'
				],
				dayOfWeek: ["ראשון", "שני", "שלישי", "רביעי", "חמישי", "שישי", "שבת", "ראשון"]
			},
			hy: { // Armenian
				months: [
					"Հունվար", "Փետրվար", "Մարտ", "Ապրիլ", "Մայիս", "Հունիս", "Հուլիս", "Օգոստոս", "Սեպտեմբեր", "Հոկտեմբեր", "Նոյեմբեր", "Դեկտեմբեր"
				],
				dayOfWeekShort: [
					"Կի", "Երկ", "Երք", "Չոր", "Հնգ", "Ուրբ", "Շբթ"
				],
				dayOfWeek: ["Կիրակի", "Երկուշաբթի", "Երեքշաբթի", "Չորեքշաբթի", "Հինգշաբթի", "Ուրբաթ", "Շաբաթ"]
			},
			kg: { // Kyrgyz
				months: [
					'Үчтүн айы', 'Бирдин айы', 'Жалган Куран', 'Чын Куран', 'Бугу', 'Кулжа', 'Теке', 'Баш Оона', 'Аяк Оона', 'Тогуздун айы', 'Жетинин айы', 'Бештин айы'
				],
				dayOfWeekShort: [
					"Жек", "Дүй", "Шей", "Шар", "Бей", "Жум", "Ише"
				],
				dayOfWeek: [
					"Жекшемб", "Дүйшөмб", "Шейшемб", "Шаршемб", "Бейшемби", "Жума", "Ишенб"
				]
			},
			rm: { // Romansh
				months: [
					"Schaner", "Favrer", "Mars", "Avrigl", "Matg", "Zercladur", "Fanadur", "Avust", "Settember", "October", "November", "December"
				],
				dayOfWeekShort: [
					"Du", "Gli", "Ma", "Me", "Gie", "Ve", "So"
				],
				dayOfWeek: [
					"Dumengia", "Glindesdi", "Mardi", "Mesemna", "Gievgia", "Venderdi", "Sonda"
				]
			},
			ka: { // Georgian
				months: [
					'იანვარი', 'თებერვალი', 'მარტი', 'აპრილი', 'მაისი', 'ივნისი', 'ივლისი', 'აგვისტო', 'სექტემბერი', 'ოქტომბერი', 'ნოემბერი', 'დეკემბერი'
				],
				dayOfWeekShort: [
					"კვ", "ორშ", "სამშ", "ოთხ", "ხუთ", "პარ", "შაბ"
				],
				dayOfWeek: ["კვირა", "ორშაბათი", "სამშაბათი", "ოთხშაბათი", "ხუთშაბათი", "პარასკევი", "შაბათი"]
			}
		},

		ownerDocument: document,
		contentWindow: window,

		value: '',
		rtl: false,

		format:	'Y/m/d H:i',
		formatTime:	'H:i',
		formatDate:	'Y/m/d',

		startDate:	false, // new Date(), '1986/12/08', '-1970/01/05','-1970/01/05',
		step: 60,
		monthChangeSpinner: true,

		closeOnDateSelect: false,
		closeOnTimeSelect: true,
		closeOnWithoutClick: true,
		closeOnInputClick: true,
		openOnFocus: true,

		timepicker: true,
		datepicker: true,
		weeks: false,

		defaultTime: false,	// use formatTime format (ex. '10:00' for formatTime:	'H:i')
		defaultDate: false,	// use formatDate format (ex new Date() or '1986/12/08' or '-1970/01/05' or '-1970/01/05')

		minDate: false,
		maxDate: false,
		minTime: false,
		maxTime: false,
		minDateTime: false,
		maxDateTime: false,

		allowTimes: [],
		opened: false,
		initTime: true,
		inline: false,
		theme: '',
		touchMovedThreshold: 5,

		onSelectDate: function () {},
		onSelectTime: function () {},
		onChangeMonth: function () {},
		onGetWeekOfYear: function () {},
		onChangeYear: function () {},
		onChangeDateTime: function () {},
		onShow: function () {},
		onClose: function () {},
		onGenerate: function () {},

		withoutCopyright: true,
		inverseButton: false,
		hours12: false,
		next: 'xdsoft_next',
		prev : 'xdsoft_prev',
		dayOfWeekStart: 0,
		parentID: 'body',
		timeHeightInTimePicker: 25,
		timepickerScrollbar: true,
		todayButton: true,
		prevButton: true,
		nextButton: true,
		defaultSelect: true,

		scrollMonth: true,
		scrollTime: true,
		scrollInput: true,

		lazyInit: false,
		mask: false,
		validateOnBlur: true,
		allowBlank: true,
		yearStart: 1950,
		yearEnd: 2050,
		monthStart: 0,
		monthEnd: 11,
		style: '',
		id: '',
		fixed: false,
		roundTime: 'round', // ceil, floor
		className: '',
		weekends: [],
		highlightedDates: [],
		highlightedPeriods: [],
		allowDates : [],
		allowDateRe : null,
		disabledDates : [],
		disabledWeekDays: [],
		yearOffset: 0,
		beforeShowDay: null,

		enterLikeTab: true,
        showApplyButton: false,
        insideParent: false,
	};

	var dateHelper = null,
		defaultDateHelper = null,
		globalLocaleDefault = 'en',
		globalLocale = 'en';

	var dateFormatterOptionsDefault = {
		meridiem: ['AM', 'PM']
	};

	var initDateFormatter = function(){
		var locale = default_options.i18n[globalLocale],
			opts = {
				days: locale.dayOfWeek,
				daysShort: locale.dayOfWeekShort,
				months: locale.months,
				monthsShort: $.map(locale.months, function(n){ return n.substring(0, 3) })
			};

		if (typeof DateFormatter === 'function') {
			dateHelper = defaultDateHelper = new DateFormatter({
				dateSettings: $.extend({}, dateFormatterOptionsDefault, opts)
			});
		}
	};

	var dateFormatters = {
		moment: {
			default_options:{
				format: 'YYYY/MM/DD HH:mm',
				formatDate: 'YYYY/MM/DD',
				formatTime: 'HH:mm',
			},
			formatter: {
				parseDate: function (date, format) {
					if(isFormatStandard(format)){
						return defaultDateHelper.parseDate(date, format);
					} 
					var d = moment(date, format);
					return d.isValid() ? d.toDate() : false;
				},

				formatDate: function (date, format) {
					if(isFormatStandard(format)){
						return defaultDateHelper.formatDate(date, format);
					} 
					return moment(date).format(format);
				},

				formatMask: function(format){
					return format
						.replace(/Y{4}/g, '9999')
						.replace(/Y{2}/g, '99')
						.replace(/M{2}/g, '19')
						.replace(/D{2}/g, '39')
						.replace(/H{2}/g, '29')
						.replace(/m{2}/g, '59')
						.replace(/s{2}/g, '59');
				},
			}
		}
	}

	// for locale settings
	$.datetimepicker = {
		setLocale: function(locale){
			var newLocale = default_options.i18n[locale] ? locale : globalLocaleDefault;
			if (globalLocale !== newLocale) {
				globalLocale = newLocale;
				// reinit date formatter
				initDateFormatter();
			}
		},

		setDateFormatter: function(dateFormatter) {
			if(typeof dateFormatter === 'string' && dateFormatters.hasOwnProperty(dateFormatter)){
				var df = dateFormatters[dateFormatter];
				$.extend(default_options, df.default_options);
				dateHelper = df.formatter; 
			}
			else {
				dateHelper = dateFormatter;
			}
		},
	};

	var standardFormats = {
		RFC_2822: 'D, d M Y H:i:s O',
		ATOM: 'Y-m-d\TH:i:sP',
		ISO_8601: 'Y-m-d\TH:i:sO',
		RFC_822: 'D, d M y H:i:s O',
		RFC_850: 'l, d-M-y H:i:s T',
		RFC_1036: 'D, d M y H:i:s O',
		RFC_1123: 'D, d M Y H:i:s O',
		RSS: 'D, d M Y H:i:s O',
		W3C: 'Y-m-d\TH:i:sP'
	}

	var isFormatStandard = function(format){
		return Object.values(standardFormats).indexOf(format) === -1 ? false : true;
	}

	$.extend($.datetimepicker, standardFormats);

	// first init date formatter
	initDateFormatter();

	// fix for ie8
	if (!window.getComputedStyle) {
		window.getComputedStyle = function (el) {
			this.el = el;
			this.getPropertyValue = function (prop) {
				var re = /(-([a-z]))/g;
				if (prop === 'float') {
					prop = 'styleFloat';
				}
				if (re.test(prop)) {
					prop = prop.replace(re, function (a, b, c) {
						return c.toUpperCase();
					});
				}
				return el.currentStyle[prop] || null;
			};
			return this;
		};
	}
	if (!Array.prototype.indexOf) {
		Array.prototype.indexOf = function (obj, start) {
			var i, j;
			for (i = (start || 0), j = this.length; i < j; i += 1) {
				if (this[i] === obj) { return i; }
			}
			return -1;
		};
	}

	Date.prototype.countDaysInMonth = function () {
		return new Date(this.getFullYear(), this.getMonth() + 1, 0).getDate();
	};

	$.fn.xdsoftScroller = function (options, percent) {
		return this.each(function () {
			var timeboxparent = $(this),
				pointerEventToXY = function (e) {
					var out = {x: 0, y: 0},
						touch;
					if (e.type === 'touchstart' || e.type === 'touchmove' || e.type === 'touchend' || e.type === 'touchcancel') {
						touch  = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
						out.x = touch.clientX;
						out.y = touch.clientY;
					} else if (e.type === 'mousedown' || e.type === 'mouseup' || e.type === 'mousemove' || e.type === 'mouseover' || e.type === 'mouseout' || e.type === 'mouseenter' || e.type === 'mouseleave') {
						out.x = e.clientX;
						out.y = e.clientY;
					}
					return out;
				},
				timebox,
				parentHeight,
				height,
				scrollbar,
				scroller,
				maximumOffset = 100,
				start = false,
				startY = 0,
				startTop = 0,
				h1 = 0,
				touchStart = false,
				startTopScroll = 0,
				calcOffset = function () {};

			if (percent === 'hide') {
				timeboxparent.find('.xdsoft_scrollbar').hide();
				return;
			}

			if (!$(this).hasClass('xdsoft_scroller_box')) {
				timebox = timeboxparent.children().eq(0);
				parentHeight = timeboxparent[0].clientHeight;
				height = timebox[0].offsetHeight;
				scrollbar = $('<div class="xdsoft_scrollbar"></div>');
				scroller = $('<div class="xdsoft_scroller"></div>');
				scrollbar.append(scroller);

				timeboxparent.addClass('xdsoft_scroller_box').append(scrollbar);
				calcOffset = function calcOffset(event) {
					var offset = pointerEventToXY(event).y - startY + startTopScroll;
					if (offset < 0) {
						offset = 0;
					}
					if (offset + scroller[0].offsetHeight > h1) {
						offset = h1 - scroller[0].offsetHeight;
					}
					timeboxparent.trigger('scroll_element.xdsoft_scroller', [maximumOffset ? offset / maximumOffset : 0]);
				};

				scroller
					.on('touchstart.xdsoft_scroller mousedown.xdsoft_scroller', function (event) {
						if (!parentHeight) {
							timeboxparent.trigger('resize_scroll.xdsoft_scroller', [percent]);
						}

						startY = pointerEventToXY(event).y;
						startTopScroll = parseInt(scroller.css('margin-top'), 10);
						h1 = scrollbar[0].offsetHeight;

						if (event.type === 'mousedown' || event.type === 'touchstart') {
							if (options.ownerDocument) {
								$(options.ownerDocument.body).addClass('xdsoft_noselect');
							}
							$([options.ownerDocument.body, options.contentWindow]).on('touchend mouseup.xdsoft_scroller', function arguments_callee() {
								$([options.ownerDocument.body, options.contentWindow]).off('touchend mouseup.xdsoft_scroller', arguments_callee)
									.off('mousemove.xdsoft_scroller', calcOffset)
									.removeClass('xdsoft_noselect');
							});
							$(options.ownerDocument.body).on('mousemove.xdsoft_scroller', calcOffset);
						} else {
							touchStart = true;
							event.stopPropagation();
							event.preventDefault();
						}
					})
					.on('touchmove', function (event) {
						if (touchStart) {
							event.preventDefault();
							calcOffset(event);
						}
					})
					.on('touchend touchcancel', function () {
						touchStart =  false;
						startTopScroll = 0;
					});

				timeboxparent
					.on('scroll_element.xdsoft_scroller', function (event, percentage) {
						if (!parentHeight) {
							timeboxparent.trigger('resize_scroll.xdsoft_scroller', [percentage, true]);
						}
						percentage = percentage > 1 ? 1 : (percentage < 0 || isNaN(percentage)) ? 0 : percentage;

						scroller.css('margin-top', maximumOffset * percentage);

						setTimeout(function () {
							timebox.css('marginTop', -parseInt((timebox[0].offsetHeight - parentHeight) * percentage, 10));
						}, 10);
					})
					.on('resize_scroll.xdsoft_scroller', function (event, percentage, noTriggerScroll) {
						var percent, sh;
						parentHeight = timeboxparent[0].clientHeight;
						height = timebox[0].offsetHeight;
						percent = parentHeight / height;
						sh = percent * scrollbar[0].offsetHeight;
						if (percent > 1) {
							scroller.hide();
						} else {
							scroller.show();
							scroller.css('height', parseInt(sh > 10 ? sh : 10, 10));
							maximumOffset = scrollbar[0].offsetHeight - scroller[0].offsetHeight;
							if (noTriggerScroll !== true) {
								timeboxparent.trigger('scroll_element.xdsoft_scroller', [percentage || Math.abs(parseInt(timebox.css('marginTop'), 10)) / (height - parentHeight)]);
							}
						}
					});

				timeboxparent.on('mousewheel', function (event) {
					var top = Math.abs(parseInt(timebox.css('marginTop'), 10));

					top = top - (event.deltaY * 20);
					if (top < 0) {
						top = 0;
					}

					timeboxparent.trigger('scroll_element.xdsoft_scroller', [top / (height - parentHeight)]);
					event.stopPropagation();
					return false;
				});

				timeboxparent.on('touchstart', function (event) {
					start = pointerEventToXY(event);
					startTop = Math.abs(parseInt(timebox.css('marginTop'), 10));
				});

				timeboxparent.on('touchmove', function (event) {
					if (start) {
						event.preventDefault();
						var coord = pointerEventToXY(event);
						timeboxparent.trigger('scroll_element.xdsoft_scroller', [(startTop - (coord.y - start.y)) / (height - parentHeight)]);
					}
				});

				timeboxparent.on('touchend touchcancel', function () {
					start = false;
					startTop = 0;
				});
			}
			timeboxparent.trigger('resize_scroll.xdsoft_scroller', [percent]);
		});
	};

	$.fn.datetimepicker = function (opt, opt2) {
		var result = this,
			KEY0 = 48,
			KEY9 = 57,
			_KEY0 = 96,
			_KEY9 = 105,
            CTRLKEY = 17,
            CMDKEY = 91,
			DEL = 46,
			ENTER = 13,
			ESC = 27,
			BACKSPACE = 8,
			ARROWLEFT = 37,
			ARROWUP = 38,
			ARROWRIGHT = 39,
			ARROWDOWN = 40,
			TAB = 9,
			F5 = 116,
			AKEY = 65,
			CKEY = 67,
			VKEY = 86,
			ZKEY = 90,
			YKEY = 89,
            ctrlDown	=	false,
            cmdDown = false,
			options = ($.isPlainObject(opt) || !opt) ? $.extend(true, {}, default_options, opt) : $.extend(true, {}, default_options),

			lazyInitTimer = 0,
			createDateTimePicker,
			destroyDateTimePicker,

			lazyInit = function (input) {
				input
					.on('open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart', function initOnActionCallback() {
						if (input.is(':disabled') || input.data('xdsoft_datetimepicker')) {
							return;
						}
						clearTimeout(lazyInitTimer);
						lazyInitTimer = setTimeout(function () {

							if (!input.data('xdsoft_datetimepicker')) {
								createDateTimePicker(input);
							}
							input
								.off('open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart', initOnActionCallback)
								.trigger('open.xdsoft');
						}, 100);
					});
			};

		createDateTimePicker = function (input) {
			var datetimepicker = $('<div class="xdsoft_datetimepicker xdsoft_noselect"></div>'),
				xdsoft_copyright = $('<div class="xdsoft_copyright"><a target="_blank" href="http://xdsoft.net/jqplugins/datetimepicker/">xdsoft.net</a></div>'),
				datepicker = $('<div class="xdsoft_datepicker active"></div>'),
				month_picker = $('<div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev"></button><button type="button" class="xdsoft_today_button"></button>' +
					'<div class="xdsoft_label xdsoft_month"><span></span><i></i></div>' +
					'<div class="xdsoft_label xdsoft_year"><span></span><i></i></div>' +
					'<button type="button" class="xdsoft_next"></button></div>'),
				calendar = $('<div class="xdsoft_calendar"></div>'),
				timepicker = $('<div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box"></div><button type="button" class="xdsoft_next"></button></div>'),
				timeboxparent = timepicker.find('.xdsoft_time_box').eq(0),
				timebox = $('<div class="xdsoft_time_variant"></div>'),
				applyButton = $('<button type="button" class="xdsoft_save_selected blue-gradient-button">Save Selected</button>'),

				monthselect = $('<div class="xdsoft_select xdsoft_monthselect"><div></div></div>'),
				yearselect = $('<div class="xdsoft_select xdsoft_yearselect"><div></div></div>'),
				triggerAfterOpen = false,
				XDSoft_datetime,

				xchangeTimer,
				timerclick,
				current_time_index,
				setPos,
				timer = 0,
				_xdsoft_datetime,
				forEachAncestorOf;

			if (options.id) {
				datetimepicker.attr('id', options.id);
			}
			if (options.style) {
				datetimepicker.attr('style', options.style);
			}
			if (options.weeks) {
				datetimepicker.addClass('xdsoft_showweeks');
			}
			if (options.rtl) {
				datetimepicker.addClass('xdsoft_rtl');
			}

			datetimepicker.addClass('xdsoft_' + options.theme);
			datetimepicker.addClass(options.className);

			month_picker
				.find('.xdsoft_month span')
				.after(monthselect);
			month_picker
				.find('.xdsoft_year span')
				.after(yearselect);

			month_picker
				.find('.xdsoft_month,.xdsoft_year')
				.on('touchstart mousedown.xdsoft', function (event) {
					var select = $(this).find('.xdsoft_select').eq(0),
						val = 0,
						top = 0,
						visible = select.is(':visible'),
						items,
						i;

					month_picker
						.find('.xdsoft_select')
						.hide();
					if (_xdsoft_datetime.currentTime) {
						val = _xdsoft_datetime.currentTime[$(this).hasClass('xdsoft_month') ? 'getMonth' : 'getFullYear']();
					}

					select[visible ? 'hide' : 'show']();
					for (items = select.find('div.xdsoft_option'), i = 0; i < items.length; i += 1) {
						if (items.eq(i).data('value') === val) {
							break;
						} else {
							top += items[0].offsetHeight;
						}
					}

					select.xdsoftScroller(options, top / (select.children()[0].offsetHeight - (select[0].clientHeight)));
					event.stopPropagation();
					return false;
				});

			var handleTouchMoved = function (event) {
				var evt = event.originalEvent;
				var touchPosition = evt.touches ? evt.touches[0] : evt;
				this.touchStartPosition = this.touchStartPosition || touchPosition;
				var xMovement = Math.abs(this.touchStartPosition.clientX - touchPosition.clientX);
				var yMovement = Math.abs(this.touchStartPosition.clientY - touchPosition.clientY);
				var distance = Math.sqrt(xMovement * xMovement + yMovement * yMovement);
				if(distance > options.touchMovedThreshold) {
					this.touchMoved = true;
				}
			}

			month_picker
				.find('.xdsoft_select')
				.xdsoftScroller(options)
				.on('touchstart mousedown.xdsoft', function (event) {
					var evt = event.originalEvent;
					this.touchMoved = false;
					this.touchStartPosition = evt.touches ? evt.touches[0] : evt;
					event.stopPropagation();
					event.preventDefault();
				})
				.on('touchmove', '.xdsoft_option', handleTouchMoved)
				.on('touchend mousedown.xdsoft', '.xdsoft_option', function () {
					if (!this.touchMoved) {
						if (_xdsoft_datetime.currentTime === undefined || _xdsoft_datetime.currentTime === null) {
							_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
						}

						var year = _xdsoft_datetime.currentTime.getFullYear();
						if (_xdsoft_datetime && _xdsoft_datetime.currentTime) {
							_xdsoft_datetime.currentTime[$(this).parent().parent().hasClass('xdsoft_monthselect') ? 'setMonth' : 'setFullYear']($(this).data('value'));
						}

						$(this).parent().parent().hide();

						datetimepicker.trigger('xchange.xdsoft');
						if (options.onChangeMonth && $.isFunction(options.onChangeMonth)) {
							options.onChangeMonth.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
						}

						if (year !== _xdsoft_datetime.currentTime.getFullYear() && $.isFunction(options.onChangeYear)) {
							options.onChangeYear.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
						}
					}
				});

			datetimepicker.getValue = function () {
				return _xdsoft_datetime.getCurrentTime();
			};

			datetimepicker.setOptions = function (_options) {
				var highlightedDates = {};

				options = $.extend(true, {}, options, _options);

				if (_options.allowTimes && $.isArray(_options.allowTimes) && _options.allowTimes.length) {
					options.allowTimes = $.extend(true, [], _options.allowTimes);
				}

				if (_options.weekends && $.isArray(_options.weekends) && _options.weekends.length) {
					options.weekends = $.extend(true, [], _options.weekends);
				}

				if (_options.allowDates && $.isArray(_options.allowDates) && _options.allowDates.length) {
					options.allowDates = $.extend(true, [], _options.allowDates);
				}

				if (_options.allowDateRe && Object.prototype.toString.call(_options.allowDateRe)==="[object String]") {
					options.allowDateRe = new RegExp(_options.allowDateRe);
				}

				if (_options.highlightedDates && $.isArray(_options.highlightedDates) && _options.highlightedDates.length) {
					$.each(_options.highlightedDates, function (index, value) {
						var splitData = $.map(value.split(','), $.trim),
							exDesc,
							hDate = new HighlightedDate(dateHelper.parseDate(splitData[0], options.formatDate), splitData[1], splitData[2]), // date, desc, style
							keyDate = dateHelper.formatDate(hDate.date, options.formatDate);
						if (highlightedDates[keyDate] !== undefined) {
							exDesc = highlightedDates[keyDate].desc;
							if (exDesc && exDesc.length && hDate.desc && hDate.desc.length) {
								highlightedDates[keyDate].desc = exDesc + "\n" + hDate.desc;
							}
						} else {
							highlightedDates[keyDate] = hDate;
						}
					});

					options.highlightedDates = $.extend(true, [], highlightedDates);
				}

				if (_options.highlightedPeriods && $.isArray(_options.highlightedPeriods) && _options.highlightedPeriods.length) {
					highlightedDates = $.extend(true, [], options.highlightedDates);
					$.each(_options.highlightedPeriods, function (index, value) {
						var dateTest, // start date
							dateEnd,
							desc,
							hDate,
							keyDate,
							exDesc,
							style;
						if ($.isArray(value)) {
							dateTest = value[0];
							dateEnd = value[1];
							desc = value[2];
							style = value[3];
						}
						else {
							var splitData = $.map(value.split(','), $.trim);
							dateTest = dateHelper.parseDate(splitData[0], options.formatDate);
							dateEnd = dateHelper.parseDate(splitData[1], options.formatDate);
							desc = splitData[2];
							style = splitData[3];
						}

						while (dateTest <= dateEnd) {
							hDate = new HighlightedDate(dateTest, desc, style);
							keyDate = dateHelper.formatDate(dateTest, options.formatDate);
							dateTest.setDate(dateTest.getDate() + 1);
							if (highlightedDates[keyDate] !== undefined) {
								exDesc = highlightedDates[keyDate].desc;
								if (exDesc && exDesc.length && hDate.desc && hDate.desc.length) {
									highlightedDates[keyDate].desc = exDesc + "\n" + hDate.desc;
								}
							} else {
								highlightedDates[keyDate] = hDate;
							}
						}
					});

					options.highlightedDates = $.extend(true, [], highlightedDates);
				}

				if (_options.disabledDates && $.isArray(_options.disabledDates) && _options.disabledDates.length) {
					options.disabledDates = $.extend(true, [], _options.disabledDates);
				}

				if (_options.disabledWeekDays && $.isArray(_options.disabledWeekDays) && _options.disabledWeekDays.length) {
					options.disabledWeekDays = $.extend(true, [], _options.disabledWeekDays);
				}

				if ((options.open || options.opened) && (!options.inline)) {
					input.trigger('open.xdsoft');
				}

				if (options.inline) {
					triggerAfterOpen = true;
					datetimepicker.addClass('xdsoft_inline');
					input.after(datetimepicker).hide();
				}

				if (options.inverseButton) {
					options.next = 'xdsoft_prev';
					options.prev = 'xdsoft_next';
				}

				if (options.datepicker) {
					datepicker.addClass('active');
				} else {
					datepicker.removeClass('active');
				}

				if (options.timepicker) {
					timepicker.addClass('active');
				} else {
					timepicker.removeClass('active');
				}

				if (options.value) {
					_xdsoft_datetime.setCurrentTime(options.value);
					if (input && input.val) {
						input.val(_xdsoft_datetime.str);
					}
				}

				if (isNaN(options.dayOfWeekStart)) {
					options.dayOfWeekStart = 0;
				} else {
					options.dayOfWeekStart = parseInt(options.dayOfWeekStart, 10) % 7;
				}

				if (!options.timepickerScrollbar) {
					timeboxparent.xdsoftScroller(options, 'hide');
				}

				if (options.minDate && /^[\+\-](.*)$/.test(options.minDate)) {
					options.minDate = dateHelper.formatDate(_xdsoft_datetime.strToDateTime(options.minDate), options.formatDate);
				}

				if (options.maxDate &&  /^[\+\-](.*)$/.test(options.maxDate)) {
					options.maxDate = dateHelper.formatDate(_xdsoft_datetime.strToDateTime(options.maxDate), options.formatDate);
				}

                if (options.minDateTime &&  /^\+(.*)$/.test(options.minDateTime)) {
                	options.minDateTime = _xdsoft_datetime.strToDateTime(options.minDateTime).dateFormat(options.formatDate);
                }

                if (options.maxDateTime &&  /^\+(.*)$/.test(options.maxDateTime)) {
                	options.maxDateTime = _xdsoft_datetime.strToDateTime(options.maxDateTime).dateFormat(options.formatDate);
                }

				applyButton.toggle(options.showApplyButton);

				month_picker
					.find('.xdsoft_today_button')
					.css('visibility', !options.todayButton ? 'hidden' : 'visible');

				month_picker
					.find('.' + options.prev)
					.css('visibility', !options.prevButton ? 'hidden' : 'visible');

				month_picker
					.find('.' + options.next)
					.css('visibility', !options.nextButton ? 'hidden' : 'visible');

				setMask(options);

				if (options.validateOnBlur) {
					input
						.off('blur.xdsoft')
						.on('blur.xdsoft', function () {
							if (options.allowBlank && (!$.trim($(this).val()).length ||
									(typeof options.mask === "string" && $.trim($(this).val()) === options.mask.replace(/[0-9]/g, '_')))) {
								$(this).val(null);
								datetimepicker.data('xdsoft_datetime').empty();
							} else {
								var d = dateHelper.parseDate($(this).val(), options.format);
								if (d) { // parseDate() may skip some invalid parts like date or time, so make it clear for user: show parsed date/time
									$(this).val(dateHelper.formatDate(d, options.format));
								} else {
									var splittedHours   = +([$(this).val()[0], $(this).val()[1]].join('')),
										splittedMinutes = +([$(this).val()[2], $(this).val()[3]].join(''));

									// parse the numbers as 0312 => 03:12
									if (!options.datepicker && options.timepicker && splittedHours >= 0 && splittedHours < 24 && splittedMinutes >= 0 && splittedMinutes < 60) {
										$(this).val([splittedHours, splittedMinutes].map(function (item) {
											return item > 9 ? item : '0' + item;
										}).join(':'));
									} else {
										$(this).val(dateHelper.formatDate(_xdsoft_datetime.now(), options.format));
									}
								}
								datetimepicker.data('xdsoft_datetime').setCurrentTime($(this).val());
							}

							datetimepicker.trigger('changedatetime.xdsoft');
							datetimepicker.trigger('close.xdsoft');
						});
				}
				options.dayOfWeekStartPrev = (options.dayOfWeekStart === 0) ? 6 : options.dayOfWeekStart - 1;

				datetimepicker
					.trigger('xchange.xdsoft')
					.trigger('afterOpen.xdsoft');
			};

			datetimepicker
				.data('options', options)
				.on('touchstart mousedown.xdsoft', function (event) {
					event.stopPropagation();
					event.preventDefault();
					yearselect.hide();
					monthselect.hide();
					return false;
				});

			//scroll_element = timepicker.find('.xdsoft_time_box');
			timeboxparent.append(timebox);
			timeboxparent.xdsoftScroller(options);

			datetimepicker.on('afterOpen.xdsoft', function () {
				timeboxparent.xdsoftScroller(options);
			});

			datetimepicker
				.append(datepicker)
				.append(timepicker);

			if (options.withoutCopyright !== true) {
				datetimepicker
					.append(xdsoft_copyright);
			}

			datepicker
				.append(month_picker)
				.append(calendar)
				.append(applyButton);

            if (options.insideParent) {
                $(input).parent().append(datetimepicker);
            } else {
                $(options.parentID).append(datetimepicker);
            }

			XDSoft_datetime = function () {
				var _this = this;
				_this.now = function (norecursion) {
					var d = new Date(),
						date,
						time;

					if (!norecursion && options.defaultDate) {
						date = _this.strToDateTime(options.defaultDate);
						d.setFullYear(date.getFullYear());
						d.setMonth(date.getMonth());
						d.setDate(date.getDate());
					}

					d.setFullYear(d.getFullYear());

					if (!norecursion && options.defaultTime) {
						time = _this.strtotime(options.defaultTime);
						d.setHours(time.getHours());
						d.setMinutes(time.getMinutes());
						d.setSeconds(time.getSeconds());
						d.setMilliseconds(time.getMilliseconds());
					}
					return d;
				};

				_this.isValidDate = function (d) {
					if (Object.prototype.toString.call(d) !== "[object Date]") {
						return false;
					}
					return !isNaN(d.getTime());
				};

				_this.setCurrentTime = function (dTime, requireValidDate) {
					if (typeof dTime === 'string') {
						_this.currentTime = _this.strToDateTime(dTime);
					}
					else if (_this.isValidDate(dTime)) {
						_this.currentTime = dTime;
					}
					else if (!dTime && !requireValidDate && options.allowBlank && !options.inline) {
						_this.currentTime = null;
					}
					else {
						_this.currentTime = _this.now();
					}

					datetimepicker.trigger('xchange.xdsoft');
				};

				_this.empty = function () {
					_this.currentTime = null;
				};

				_this.getCurrentTime = function () {
					return _this.currentTime;
				};

				_this.nextMonth = function () {

					if (_this.currentTime === undefined || _this.currentTime === null) {
						_this.currentTime = _this.now();
					}

					var month = _this.currentTime.getMonth() + 1,
						year;
					if (month === 12) {
						_this.currentTime.setFullYear(_this.currentTime.getFullYear() + 1);
						month = 0;
					}

					year = _this.currentTime.getFullYear();

					_this.currentTime.setDate(
						Math.min(
							new Date(_this.currentTime.getFullYear(), month + 1, 0).getDate(),
							_this.currentTime.getDate()
						)
					);
					_this.currentTime.setMonth(month);

					if (options.onChangeMonth && $.isFunction(options.onChangeMonth)) {
						options.onChangeMonth.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}

					if (year !== _this.currentTime.getFullYear() && $.isFunction(options.onChangeYear)) {
						options.onChangeYear.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}

					datetimepicker.trigger('xchange.xdsoft');
					return month;
				};

				_this.prevMonth = function () {

					if (_this.currentTime === undefined || _this.currentTime === null) {
						_this.currentTime = _this.now();
					}

					var month = _this.currentTime.getMonth() - 1;
					if (month === -1) {
						_this.currentTime.setFullYear(_this.currentTime.getFullYear() - 1);
						month = 11;
					}
					_this.currentTime.setDate(
						Math.min(
							new Date(_this.currentTime.getFullYear(), month + 1, 0).getDate(),
							_this.currentTime.getDate()
						)
					);
					_this.currentTime.setMonth(month);
					if (options.onChangeMonth && $.isFunction(options.onChangeMonth)) {
						options.onChangeMonth.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}
					datetimepicker.trigger('xchange.xdsoft');
					return month;
				};

				_this.getWeekOfYear = function (datetime) {
					if (options.onGetWeekOfYear && $.isFunction(options.onGetWeekOfYear)) {
						var week = options.onGetWeekOfYear.call(datetimepicker, datetime);
						if (typeof week !== 'undefined') {
							return week;
						}
					}
					var onejan = new Date(datetime.getFullYear(), 0, 1);

					//First week of the year is th one with the first Thursday according to ISO8601
					if (onejan.getDay() !== 4) {
						onejan.setMonth(0, 1 + ((4 - onejan.getDay()+ 7) % 7));
					}

					return Math.ceil((((datetime - onejan) / 86400000) + onejan.getDay() + 1) / 7);
				};

				_this.strToDateTime = function (sDateTime) {
					var tmpDate = [], timeOffset, currentTime;

					if (sDateTime && sDateTime instanceof Date && _this.isValidDate(sDateTime)) {
						return sDateTime;
					}

					tmpDate = /^([+-]{1})(.*)$/.exec(sDateTime);

					if (tmpDate) {
						tmpDate[2] = dateHelper.parseDate(tmpDate[2], options.formatDate);
					}

					if (tmpDate  && tmpDate[2]) {
						timeOffset = tmpDate[2].getTime() - (tmpDate[2].getTimezoneOffset()) * 60000;
						currentTime = new Date((_this.now(true)).getTime() + parseInt(tmpDate[1] + '1', 10) * timeOffset);
					} else {
						currentTime = sDateTime ? dateHelper.parseDate(sDateTime, options.format) : _this.now();
					}

					if (!_this.isValidDate(currentTime)) {
						currentTime = _this.now();
					}

					return currentTime;
				};

				_this.strToDate = function (sDate) {
					if (sDate && sDate instanceof Date && _this.isValidDate(sDate)) {
						return sDate;
					}

					var currentTime = sDate ? dateHelper.parseDate(sDate, options.formatDate) : _this.now(true);
					if (!_this.isValidDate(currentTime)) {
						currentTime = _this.now(true);
					}
					return currentTime;
				};

				_this.strtotime = function (sTime) {
					if (sTime && sTime instanceof Date && _this.isValidDate(sTime)) {
						return sTime;
					}
					var currentTime = sTime ? dateHelper.parseDate(sTime, options.formatTime) : _this.now(true);
					if (!_this.isValidDate(currentTime)) {
						currentTime = _this.now(true);
					}
					return currentTime;
				};

				_this.str = function () {
					var format = options.format;
					if (options.yearOffset) {
						format = format.replace('Y', _this.currentTime.getFullYear() + options.yearOffset);
						format = format.replace('y', String(_this.currentTime.getFullYear() + options.yearOffset).substring(2, 4));
					}
					return dateHelper.formatDate(_this.currentTime, format);
				};
				_this.currentTime = this.now();
			};

			_xdsoft_datetime = new XDSoft_datetime();

			applyButton.on('touchend click', function (e) {//pathbrite
				e.preventDefault();
				datetimepicker.data('changed', true);
				_xdsoft_datetime.setCurrentTime(getCurrentValue());
				input.val(_xdsoft_datetime.str());
				datetimepicker.trigger('close.xdsoft');
			});
			month_picker
				.find('.xdsoft_today_button')
				.on('touchend mousedown.xdsoft', function () {
					datetimepicker.data('changed', true);
					_xdsoft_datetime.setCurrentTime(0, true);
					datetimepicker.trigger('afterOpen.xdsoft');
				}).on('dblclick.xdsoft', function () {
				var currentDate = _xdsoft_datetime.getCurrentTime(), minDate, maxDate;
				currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
				minDate = _xdsoft_datetime.strToDate(options.minDate);
				minDate = new Date(minDate.getFullYear(), minDate.getMonth(), minDate.getDate());
				if (currentDate < minDate) {
					return;
				}
				maxDate = _xdsoft_datetime.strToDate(options.maxDate);
				maxDate = new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate());
				if (currentDate > maxDate) {
					return;
				}
				input.val(_xdsoft_datetime.str());
				input.trigger('change');
				datetimepicker.trigger('close.xdsoft');
			});
			month_picker
				.find('.xdsoft_prev,.xdsoft_next')
				.on('touchend mousedown.xdsoft', function () {
					var $this = $(this),
						timer = 0,
						stop = false;

					(function arguments_callee1(v) {
						if ($this.hasClass(options.next)) {
							_xdsoft_datetime.nextMonth();
						} else if ($this.hasClass(options.prev)) {
							_xdsoft_datetime.prevMonth();
						}
						if (options.monthChangeSpinner) {
							if (!stop) {
								timer = setTimeout(arguments_callee1, v || 100);
							}
						}
					}(500));

					$([options.ownerDocument.body, options.contentWindow]).on('touchend mouseup.xdsoft', function arguments_callee2() {
						clearTimeout(timer);
						stop = true;
						$([options.ownerDocument.body, options.contentWindow]).off('touchend mouseup.xdsoft', arguments_callee2);
					});
				});

			timepicker
				.find('.xdsoft_prev,.xdsoft_next')
				.on('touchend mousedown.xdsoft', function () {
					var $this = $(this),
						timer = 0,
						stop = false,
						period = 110;
					(function arguments_callee4(v) {
						var pheight = timeboxparent[0].clientHeight,
							height = timebox[0].offsetHeight,
							top = Math.abs(parseInt(timebox.css('marginTop'), 10));
						if ($this.hasClass(options.next) && (height - pheight) - options.timeHeightInTimePicker >= top) {
							timebox.css('marginTop', '-' + (top + options.timeHeightInTimePicker) + 'px');
						} else if ($this.hasClass(options.prev) && top - options.timeHeightInTimePicker >= 0) {
							timebox.css('marginTop', '-' + (top - options.timeHeightInTimePicker) + 'px');
						}
						/**
						 * Fixed bug:
						 * When using css3 transition, it will cause a bug that you cannot scroll the timepicker list.
						 * The reason is that the transition-duration time, if you set it to 0, all things fine, otherwise, this
						 * would cause a bug when you use jquery.css method.
						 * Let's say: * { transition: all .5s ease; }
						 * jquery timebox.css('marginTop') will return the original value which is before you clicking the next/prev button,
						 * meanwhile the timebox[0].style.marginTop will return the right value which is after you clicking the
						 * next/prev button.
						 *
						 * What we should do:
						 * Replace timebox.css('marginTop') with timebox[0].style.marginTop.
						 */
						timeboxparent.trigger('scroll_element.xdsoft_scroller', [Math.abs(parseInt(timebox[0].style.marginTop, 10) / (height - pheight))]);
						period = (period > 10) ? 10 : period - 10;
						if (!stop) {
							timer = setTimeout(arguments_callee4, v || period);
						}
					}(500));
					$([options.ownerDocument.body, options.contentWindow]).on('touchend mouseup.xdsoft', function arguments_callee5() {
						clearTimeout(timer);
						stop = true;
						$([options.ownerDocument.body, options.contentWindow])
							.off('touchend mouseup.xdsoft', arguments_callee5);
					});
				});

			xchangeTimer = 0;
			// base handler - generating a calendar and timepicker
			datetimepicker
				.on('xchange.xdsoft', function (event) {
					clearTimeout(xchangeTimer);
					xchangeTimer = setTimeout(function () {

						if (_xdsoft_datetime.currentTime === undefined || _xdsoft_datetime.currentTime === null) {
							_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
						}

						var table =	'',
							start = new Date(_xdsoft_datetime.currentTime.getFullYear(), _xdsoft_datetime.currentTime.getMonth(), 1, 12, 0, 0),
							i = 0,
							j,
							today = _xdsoft_datetime.now(),
							maxDate = false,
							minDate = false,
							minDateTime = false,
							maxDateTime = false,
							hDate,
							day,
							d,
							y,
							m,
							w,
							classes = [],
							customDateSettings,
							newRow = true,
							time = '',
							h,
							line_time,
							description;

						while (start.getDay() !== options.dayOfWeekStart) {
							start.setDate(start.getDate() - 1);
						}

						table += '<table><thead><tr>';

						if (options.weeks) {
							table += '<th></th>';
						}

						for (j = 0; j < 7; j += 1) {
							table += '<th>' + options.i18n[globalLocale].dayOfWeekShort[(j + options.dayOfWeekStart) % 7] + '</th>';
						}

						table += '</tr></thead>';
						table += '<tbody>';

						if (options.maxDate !== false) {
							maxDate = _xdsoft_datetime.strToDate(options.maxDate);
							maxDate = new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate(), 23, 59, 59, 999);
						}

						if (options.minDate !== false) {
							minDate = _xdsoft_datetime.strToDate(options.minDate);
							minDate = new Date(minDate.getFullYear(), minDate.getMonth(), minDate.getDate());
						}

                        if (options.minDateTime !== false) {
							minDateTime = _xdsoft_datetime.strToDate(options.minDateTime);
							minDateTime = new Date(minDateTime.getFullYear(), minDateTime.getMonth(), minDateTime.getDate(), minDateTime.getHours(), minDateTime.getMinutes(), minDateTime.getSeconds());
						}

                        if (options.maxDateTime !== false) {
							maxDateTime = _xdsoft_datetime.strToDate(options.maxDateTime);
							maxDateTime = new Date(maxDateTime.getFullYear(), maxDateTime.getMonth(), maxDateTime.getDate(), maxDateTime.getHours(), maxDateTime.getMinutes(), maxDateTime.getSeconds());
						}

						var maxDateTimeDay;
						if (maxDateTime !== false) {
							maxDateTimeDay = ((maxDateTime.getFullYear() * 12) + maxDateTime.getMonth()) * 31 + maxDateTime.getDate();
						}

						while (i < _xdsoft_datetime.currentTime.countDaysInMonth() || start.getDay() !== options.dayOfWeekStart || _xdsoft_datetime.currentTime.getMonth() === start.getMonth()) {
							classes = [];
							i += 1;

							day = start.getDay();
							d = start.getDate();
							y = start.getFullYear();
							m = start.getMonth();
							w = _xdsoft_datetime.getWeekOfYear(start);
							description = '';

							classes.push('xdsoft_date');

							if (options.beforeShowDay && $.isFunction(options.beforeShowDay.call)) {
								customDateSettings = options.beforeShowDay.call(datetimepicker, start);
							} else {
								customDateSettings = null;
							}

							if(options.allowDateRe && Object.prototype.toString.call(options.allowDateRe) === "[object RegExp]"){
								if(!options.allowDateRe.test(dateHelper.formatDate(start, options.formatDate))){
									classes.push('xdsoft_disabled');
								}
							}
							
							if(options.allowDates && options.allowDates.length>0){
								if(options.allowDates.indexOf(dateHelper.formatDate(start, options.formatDate)) === -1){
									classes.push('xdsoft_disabled');
								}
							}
							
							var currentDay = ((start.getFullYear() * 12) + start.getMonth()) * 31 + start.getDate();
							if ((maxDate !== false && start > maxDate) || (minDateTime !== false && start < minDateTime)  || (minDate !== false && start < minDate) || (maxDateTime !== false && currentDay > maxDateTimeDay) || (customDateSettings && customDateSettings[0] === false)) {
								classes.push('xdsoft_disabled');
							}
							
							if (options.disabledDates.indexOf(dateHelper.formatDate(start, options.formatDate)) !== -1) {
								classes.push('xdsoft_disabled');
							}
							
							if (options.disabledWeekDays.indexOf(day) !== -1) {
								classes.push('xdsoft_disabled');
							}
							
							if (input.is('[disabled]')) {
								classes.push('xdsoft_disabled');
							}

							if (customDateSettings && customDateSettings[1] !== "") {
								classes.push(customDateSettings[1]);
							}

							if (_xdsoft_datetime.currentTime.getMonth() !== m) {
								classes.push('xdsoft_other_month');
							}

							if ((options.defaultSelect || datetimepicker.data('changed')) && dateHelper.formatDate(_xdsoft_datetime.currentTime, options.formatDate) === dateHelper.formatDate(start, options.formatDate)) {
								classes.push('xdsoft_current');
							}

							if (dateHelper.formatDate(today, options.formatDate) === dateHelper.formatDate(start, options.formatDate)) {
								classes.push('xdsoft_today');
							}

							if (start.getDay() === 0 || start.getDay() === 6 || options.weekends.indexOf(dateHelper.formatDate(start, options.formatDate)) !== -1) {
								classes.push('xdsoft_weekend');
							}

							if (options.highlightedDates[dateHelper.formatDate(start, options.formatDate)] !== undefined) {
								hDate = options.highlightedDates[dateHelper.formatDate(start, options.formatDate)];
								classes.push(hDate.style === undefined ? 'xdsoft_highlighted_default' : hDate.style);
								description = hDate.desc === undefined ? '' : hDate.desc;
							}

							if (options.beforeShowDay && $.isFunction(options.beforeShowDay)) {
								classes.push(options.beforeShowDay(start));
							}

							if (newRow) {
								table += '<tr>';
								newRow = false;
								if (options.weeks) {
									table += '<th>' + w + '</th>';
								}
							}

							table += '<td data-date="' + d + '" data-month="' + m + '" data-year="' + y + '"' + ' class="xdsoft_date xdsoft_day_of_week' + start.getDay() + ' ' + classes.join(' ') + '" title="' + description + '">' +
								'<div>' + d + '</div>' +
								'</td>';

							if (start.getDay() === options.dayOfWeekStartPrev) {
								table += '</tr>';
								newRow = true;
							}

							start.setDate(d + 1);
						}
						table += '</tbody></table>';

						calendar.html(table);

						month_picker.find('.xdsoft_label span').eq(0).text(options.i18n[globalLocale].months[_xdsoft_datetime.currentTime.getMonth()]);
						month_picker.find('.xdsoft_label span').eq(1).text(_xdsoft_datetime.currentTime.getFullYear() + options.yearOffset);

						// generate timebox
						time = '';
						h = '';
						m = '';

						var minTimeMinutesOfDay = 0;
						if (options.minTime !== false) {
						    var t = _xdsoft_datetime.strtotime(options.minTime);
						    minTimeMinutesOfDay = 60 * t.getHours() + t.getMinutes();
						}
						var maxTimeMinutesOfDay = 24 * 60;
						if (options.maxTime !== false) {
						    var t = _xdsoft_datetime.strtotime(options.maxTime);
						    maxTimeMinutesOfDay = 60 * t.getHours() + t.getMinutes();
						}

						if (options.minDateTime !== false) {
							var t = _xdsoft_datetime.strToDateTime(options.minDateTime);
						        var currentDayIsMinDateTimeDay = dateHelper.formatDate(_xdsoft_datetime.currentTime, options.formatDate) === dateHelper.formatDate(t, options.formatDate);
							if (currentDayIsMinDateTimeDay) {
								var m = 60 * t.getHours() + t.getMinutes();
								if (m > minTimeMinutesOfDay) minTimeMinutesOfDay = m;
							}
						}

						if (options.maxDateTime !== false) {
							var t = _xdsoft_datetime.strToDateTime(options.maxDateTime);
						        var currentDayIsMaxDateTimeDay = dateHelper.formatDate(_xdsoft_datetime.currentTime, options.formatDate) === dateHelper.formatDate(t, options.formatDate);
							if (currentDayIsMaxDateTimeDay) {
								var m = 60 * t.getHours() + t.getMinutes();
								if (m < maxTimeMinutesOfDay) maxTimeMinutesOfDay = m;
							}
						}

						line_time = function line_time(h, m) {
							var now = _xdsoft_datetime.now(), current_time,
								isALlowTimesInit = options.allowTimes && $.isArray(options.allowTimes) && options.allowTimes.length;
							now.setHours(h);
							h = parseInt(now.getHours(), 10);
							now.setMinutes(m);
							m = parseInt(now.getMinutes(), 10);
							classes = [];
							var currentMinutesOfDay = 60 * h + m;
							if (input.is('[disabled]') || (currentMinutesOfDay >= maxTimeMinutesOfDay) || (currentMinutesOfDay < minTimeMinutesOfDay)) {
								classes.push('xdsoft_disabled');
							}

							current_time = new Date(_xdsoft_datetime.currentTime);
							current_time.setHours(parseInt(_xdsoft_datetime.currentTime.getHours(), 10));

							if (!isALlowTimesInit) {
								current_time.setMinutes(Math[options.roundTime](_xdsoft_datetime.currentTime.getMinutes() / options.step) * options.step);
							}

							if ((options.initTime || options.defaultSelect || datetimepicker.data('changed')) && current_time.getHours() === parseInt(h, 10) && ((!isALlowTimesInit && options.step > 59) || current_time.getMinutes() === parseInt(m, 10))) {
								if (options.defaultSelect || datetimepicker.data('changed')) {
									classes.push('xdsoft_current');
								} else if (options.initTime) {
									classes.push('xdsoft_init_time');
								}
							}
							if (parseInt(today.getHours(), 10) === parseInt(h, 10) && parseInt(today.getMinutes(), 10) === parseInt(m, 10)) {
								classes.push('xdsoft_today');
							}
							time += '<div class="xdsoft_time ' + classes.join(' ') + '" data-hour="' + h + '" data-minute="' + m + '">' + dateHelper.formatDate(now, options.formatTime) + '</div>';
						};

						if (!options.allowTimes || !$.isArray(options.allowTimes) || !options.allowTimes.length) {
							for (i = 0, j = 0; i < (options.hours12 ? 12 : 24); i += 1) {
								for (j = 0; j < 60; j += options.step) {
								        var currentMinutesOfDay = i * 60 + j;
								        if (currentMinutesOfDay < minTimeMinutesOfDay) continue;
								        if (currentMinutesOfDay >= maxTimeMinutesOfDay) continue;
									h = (i < 10 ? '0' : '') + i;
									m = (j < 10 ? '0' : '') + j;
									line_time(h, m);
								}
							}
						} else {
							for (i = 0; i < options.allowTimes.length; i += 1) {
								h = _xdsoft_datetime.strtotime(options.allowTimes[i]).getHours();
								m = _xdsoft_datetime.strtotime(options.allowTimes[i]).getMinutes();
								line_time(h, m);
							}
						}

						timebox.html(time);

						opt = '';

						for (i = parseInt(options.yearStart, 10); i <= parseInt(options.yearEnd, 10); i += 1) {
							opt += '<div class="xdsoft_option ' + (_xdsoft_datetime.currentTime.getFullYear() === i ? 'xdsoft_current' : '') + '" data-value="' + i + '">' + (i + options.yearOffset) + '</div>';
						}
						yearselect.children().eq(0)
							.html(opt);

						for (i = parseInt(options.monthStart, 10), opt = ''; i <= parseInt(options.monthEnd, 10); i += 1) {
							opt += '<div class="xdsoft_option ' + (_xdsoft_datetime.currentTime.getMonth() === i ? 'xdsoft_current' : '') + '" data-value="' + i + '">' + options.i18n[globalLocale].months[i] + '</div>';
						}
						monthselect.children().eq(0).html(opt);
						$(datetimepicker)
							.trigger('generate.xdsoft');
					}, 10);
					event.stopPropagation();
				})
				.on('afterOpen.xdsoft', function () {
					if (options.timepicker) {
						var classType, pheight, height, top;
						if (timebox.find('.xdsoft_current').length) {
							classType = '.xdsoft_current';
						} else if (timebox.find('.xdsoft_init_time').length) {
							classType = '.xdsoft_init_time';
						}
						if (classType) {
							pheight = timeboxparent[0].clientHeight;
							height = timebox[0].offsetHeight;
							top = timebox.find(classType).index() * options.timeHeightInTimePicker + 1;
							if ((height - pheight) < top) {
								top = height - pheight;
							}
							timeboxparent.trigger('scroll_element.xdsoft_scroller', [parseInt(top, 10) / (height - pheight)]);
						} else {
							timeboxparent.trigger('scroll_element.xdsoft_scroller', [0]);
						}
					}
				});

			timerclick = 0;
			calendar
				.on('touchend click.xdsoft', 'td', function (xdevent) {
					xdevent.stopPropagation();  // Prevents closing of Pop-ups, Modals and Flyouts in Bootstrap
					timerclick += 1;
					var $this = $(this),
						currentTime = _xdsoft_datetime.currentTime;

					if (currentTime === undefined || currentTime === null) {
						_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
						currentTime = _xdsoft_datetime.currentTime;
					}

					if ($this.hasClass('xdsoft_disabled')) {
						return false;
					}

					currentTime.setDate(1);
					currentTime.setFullYear($this.data('year'));
					currentTime.setMonth($this.data('month'));
					currentTime.setDate($this.data('date'));

					datetimepicker.trigger('select.xdsoft', [currentTime]);

					input.val(_xdsoft_datetime.str());

					if (options.onSelectDate &&	$.isFunction(options.onSelectDate)) {
						options.onSelectDate.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), xdevent);
					}

					datetimepicker.data('changed', true);
					datetimepicker.trigger('xchange.xdsoft');
					datetimepicker.trigger('changedatetime.xdsoft');
					if ((timerclick > 1 || (options.closeOnDateSelect === true || (options.closeOnDateSelect === false && !options.timepicker))) && !options.inline) {
						datetimepicker.trigger('close.xdsoft');
					}
					setTimeout(function () {
						timerclick = 0;
					}, 200);
				});

			timebox
				.on('touchstart', 'div', function (xdevent) {
					this.touchMoved = false;
				})
				.on('touchmove', 'div', handleTouchMoved)
				.on('touchend click.xdsoft', 'div', function (xdevent) {
					if (!this.touchMoved) {
						xdevent.stopPropagation();
						var $this = $(this),
							currentTime = _xdsoft_datetime.currentTime;

						if (currentTime === undefined || currentTime === null) {
							_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
							currentTime = _xdsoft_datetime.currentTime;
						}

						if ($this.hasClass('xdsoft_disabled')) {
							return false;
						}
						currentTime.setHours($this.data('hour'));
						currentTime.setMinutes($this.data('minute'));
						datetimepicker.trigger('select.xdsoft', [currentTime]);

						datetimepicker.data('input').val(_xdsoft_datetime.str());

						if (options.onSelectTime && $.isFunction(options.onSelectTime)) {
							options.onSelectTime.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), xdevent);
						}
						datetimepicker.data('changed', true);
						datetimepicker.trigger('xchange.xdsoft');
						datetimepicker.trigger('changedatetime.xdsoft');
						if (options.inline !== true && options.closeOnTimeSelect === true) {
							datetimepicker.trigger('close.xdsoft');
						}
					}
				});

			datepicker
				.on('mousewheel.xdsoft', function (event) {
					if (!options.scrollMonth) {
						return true;
					}
					if (event.deltaY < 0) {
						_xdsoft_datetime.nextMonth();
					} else {
						_xdsoft_datetime.prevMonth();
					}
					return false;
				});

			input
				.on('mousewheel.xdsoft', function (event) {
					if (!options.scrollInput) {
						return true;
					}
					if (!options.datepicker && options.timepicker) {
						current_time_index = timebox.find('.xdsoft_current').length ? timebox.find('.xdsoft_current').eq(0).index() : 0;
						if (current_time_index + event.deltaY >= 0 && current_time_index + event.deltaY < timebox.children().length) {
							current_time_index += event.deltaY;
						}
						if (timebox.children().eq(current_time_index).length) {
							timebox.children().eq(current_time_index).trigger('mousedown');
						}
						return false;
					}
					if (options.datepicker && !options.timepicker) {
						datepicker.trigger(event, [event.deltaY, event.deltaX, event.deltaY]);
						if (input.val) {
							input.val(_xdsoft_datetime.str());
						}
						datetimepicker.trigger('changedatetime.xdsoft');
						return false;
					}
				});

			datetimepicker
				.on('changedatetime.xdsoft', function (event) {
					if (options.onChangeDateTime && $.isFunction(options.onChangeDateTime)) {
						var $input = datetimepicker.data('input');
						options.onChangeDateTime.call(datetimepicker, _xdsoft_datetime.currentTime, $input, event);
						delete options.value;
						$input.trigger('change');
					}
				})
				.on('generate.xdsoft', function () {
					if (options.onGenerate && $.isFunction(options.onGenerate)) {
						options.onGenerate.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}
					if (triggerAfterOpen) {
						datetimepicker.trigger('afterOpen.xdsoft');
						triggerAfterOpen = false;
					}
				})
				.on('click.xdsoft', function (xdevent) {
					xdevent.stopPropagation();
				});

			current_time_index = 0;

			/**
			 * Runs the callback for each of the specified node's ancestors.
			 *
			 * Return FALSE from the callback to stop ascending.
			 *
			 * @param {DOMNode} node
			 * @param {Function} callback
			 * @returns {undefined}
			 */
			forEachAncestorOf = function (node, callback) {
				do {
					node = node.parentNode;

					if (!node || callback(node) === false) {
						break;
					}
				} while (node.nodeName !== 'HTML');
			};

			/**
			 * Sets the position of the picker.
			 *
			 * @returns {undefined}
			 */
			setPos = function () {
				var dateInputOffset,
					dateInputElem,
					verticalPosition,
					left,
					position,
					datetimepickerElem,
					dateInputHasFixedAncestor,
					$dateInput,
					windowWidth,
					verticalAnchorEdge,
					datetimepickerCss,
					windowHeight,
					windowScrollTop;

				$dateInput = datetimepicker.data('input');
				dateInputOffset = $dateInput.offset();
				dateInputElem = $dateInput[0];

				verticalAnchorEdge = 'top';
				verticalPosition = (dateInputOffset.top + dateInputElem.offsetHeight) - 1;
				left = dateInputOffset.left;
				position = "absolute";

				windowWidth = $(options.contentWindow).width();
				windowHeight = $(options.contentWindow).height();
				windowScrollTop = $(options.contentWindow).scrollTop();

				if ((options.ownerDocument.documentElement.clientWidth - dateInputOffset.left) < datepicker.parent().outerWidth(true)) {
					var diff = datepicker.parent().outerWidth(true) - dateInputElem.offsetWidth;
					left = left - diff;
				}

				if ($dateInput.parent().css('direction') === 'rtl') {
					left -= (datetimepicker.outerWidth() - $dateInput.outerWidth());
				}

				if (options.fixed) {
					verticalPosition -= windowScrollTop;
					left -= $(options.contentWindow).scrollLeft();
					position = "fixed";
				} else {
					dateInputHasFixedAncestor = false;

					forEachAncestorOf(dateInputElem, function (ancestorNode) {
						if (ancestorNode === null) {
							return false;
						}

						if (options.contentWindow.getComputedStyle(ancestorNode).getPropertyValue('position') === 'fixed') {
							dateInputHasFixedAncestor = true;
							return false;
						}
					});

					if (dateInputHasFixedAncestor && !options.insideParent) {
						position = 'fixed';

						//If the picker won't fit entirely within the viewport then display it above the date input.
						if (verticalPosition + datetimepicker.outerHeight() > windowHeight + windowScrollTop) {
							verticalAnchorEdge = 'bottom';
							verticalPosition = (windowHeight + windowScrollTop) - dateInputOffset.top;
						} else {
							verticalPosition -= windowScrollTop;
						}
					} else {
						if (verticalPosition + datetimepicker[0].offsetHeight > windowHeight + windowScrollTop) {
							verticalPosition = dateInputOffset.top - datetimepicker[0].offsetHeight + 1;
						}
					}

					if (verticalPosition < 0) {
						verticalPosition = 0;
					}

					if (left + dateInputElem.offsetWidth > windowWidth) {
						left = windowWidth - dateInputElem.offsetWidth;
					}
				}

				datetimepickerElem = datetimepicker[0];

				forEachAncestorOf(datetimepickerElem, function (ancestorNode) {
					var ancestorNodePosition;

					ancestorNodePosition = options.contentWindow.getComputedStyle(ancestorNode).getPropertyValue('position');

					if (ancestorNodePosition === 'relative' && windowWidth >= ancestorNode.offsetWidth) {
						left = left - ((windowWidth - ancestorNode.offsetWidth) / 2);
						return false;
					}
				});

				datetimepickerCss = {
					position: position,
					left: options.insideParent ? dateInputElem.offsetLeft : left,
					top: '',  //Initialize to prevent previous values interfering with new ones.
					bottom: ''  //Initialize to prevent previous values interfering with new ones.
				};

				if (options.insideParent) {
                    datetimepickerCss[verticalAnchorEdge] = dateInputElem.offsetTop + dateInputElem.offsetHeight;
                } else {
                    datetimepickerCss[verticalAnchorEdge] = verticalPosition;
                }

				datetimepicker.css(datetimepickerCss);
			};

			datetimepicker
				.on('open.xdsoft', function (event) {
					var onShow = true;
					if (options.onShow && $.isFunction(options.onShow)) {
						onShow = options.onShow.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), event);
					}
					if (onShow !== false) {
						datetimepicker.show();
						setPos();
						$(options.contentWindow)
							.off('resize.xdsoft', setPos)
							.on('resize.xdsoft', setPos);

						if (options.closeOnWithoutClick) {
							$([options.ownerDocument.body, options.contentWindow]).on('touchstart mousedown.xdsoft', function arguments_callee6() {
								datetimepicker.trigger('close.xdsoft');
								$([options.ownerDocument.body, options.contentWindow]).off('touchstart mousedown.xdsoft', arguments_callee6);
							});
						}
					}
				})
				.on('close.xdsoft', function (event) {
					var onClose = true;
					month_picker
						.find('.xdsoft_month,.xdsoft_year')
						.find('.xdsoft_select')
						.hide();
					if (options.onClose && $.isFunction(options.onClose)) {
						onClose = options.onClose.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), event);
					}
					if (onClose !== false && !options.opened && !options.inline) {
						datetimepicker.hide();
					}
					event.stopPropagation();
				})
				.on('toggle.xdsoft', function () {
					if (datetimepicker.is(':visible')) {
						datetimepicker.trigger('close.xdsoft');
					} else {
						datetimepicker.trigger('open.xdsoft');
					}
				})
				.data('input', input);

			timer = 0;

			datetimepicker.data('xdsoft_datetime', _xdsoft_datetime);
			datetimepicker.setOptions(options);

			function getCurrentValue() {
				var ct = false, time;

				if (options.startDate) {
					ct = _xdsoft_datetime.strToDate(options.startDate);
				} else {
					ct = options.value || ((input && input.val && input.val()) ? input.val() : '');
					if (ct) {
						ct = _xdsoft_datetime.strToDateTime(ct);
						if (options.yearOffset) {
							ct = new Date(ct.getFullYear() - options.yearOffset, ct.getMonth(), ct.getDate(), ct.getHours(), ct.getMinutes(), ct.getSeconds(), ct.getMilliseconds());
						}
					} else if (options.defaultDate) {
						ct = _xdsoft_datetime.strToDateTime(options.defaultDate);
						if (options.defaultTime) {
							time = _xdsoft_datetime.strtotime(options.defaultTime);
							ct.setHours(time.getHours());
							ct.setMinutes(time.getMinutes());
						}
					}
				}

				if (ct && _xdsoft_datetime.isValidDate(ct)) {
					datetimepicker.data('changed', true);
				} else {
					ct = '';
				}

				return ct || 0;
			}

			function setMask(options) {

				var isValidValue = function (mask, value) {
						var reg = mask
							.replace(/([\[\]\/\{\}\(\)\-\.\+]{1})/g, '\\$1')
							.replace(/_/g, '{digit+}')
							.replace(/([0-9]{1})/g, '{digit$1}')
							.replace(/\{digit([0-9]{1})\}/g, '[0-$1_]{1}')
							.replace(/\{digit[\+]\}/g, '[0-9_]{1}');
						return (new RegExp(reg)).test(value);
					},
					getCaretPos = function (input) {
						try {
							if (options.ownerDocument.selection && options.ownerDocument.selection.createRange) {
								var range = options.ownerDocument.selection.createRange();
								return range.getBookmark().charCodeAt(2) - 2;
							}
							if (input.setSelectionRange) {
								return input.selectionStart;
							}
						} catch (e) {
							return 0;
						}
					},
					setCaretPos = function (node, pos) {
						node = (typeof node === "string" || node instanceof String) ? options.ownerDocument.getElementById(node) : node;
						if (!node) {
							return false;
						}
						if (node.createTextRange) {
							var textRange = node.createTextRange();
							textRange.collapse(true);
							textRange.moveEnd('character', pos);
							textRange.moveStart('character', pos);
							textRange.select();
							return true;
						}
						if (node.setSelectionRange) {
							node.setSelectionRange(pos, pos);
							return true;
						}
						return false;
					};

				if(options.mask) {
					input.off('keydown.xdsoft');
				}

				if (options.mask === true) {
					if (dateHelper.formatMask) {
						options.mask = dateHelper.formatMask(options.format)
					} else {
						options.mask = options.format
							.replace(/Y/g, '9999')
							.replace(/F/g, '9999')
							.replace(/m/g, '19')
							.replace(/d/g, '39')
							.replace(/H/g, '29')
							.replace(/i/g, '59')
							.replace(/s/g, '59');
					}
				}

				if ($.type(options.mask) === 'string') {
					if (!isValidValue(options.mask, input.val())) {
						input.val(options.mask.replace(/[0-9]/g, '_'));
						setCaretPos(input[0], 0);
					}

					input.on('paste.xdsoft', function (event) {
					    // couple options here
					    // 1. return false - tell them they can't paste
					    // 2. insert over current characters - minimal validation
					    // 3. full fledged parsing and validation
					    // let's go option 2 for now

					    // fires multiple times for some reason

					    // https://stackoverflow.com/a/30496488/1366033
					    var clipboardData = event.clipboardData || event.originalEvent.clipboardData || window.clipboardData,
						pastedData = clipboardData.getData('text'),
						val = this.value,
						pos = this.selectionStart

					    var valueBeforeCursor = val.substr(0, pos);
					    var valueAfterPaste = val.substr(pos + pastedData.length);

					    val = valueBeforeCursor + pastedData + valueAfterPaste;           
					    pos += pastedData.length;

					    if (isValidValue(options.mask, val)) {
						this.value = val;
						setCaretPos(this, pos);
					    } else if ($.trim(val) === '') {
						this.value = options.mask.replace(/[0-9]/g, '_');
					    } else {
						input.trigger('error_input.xdsoft');
					    }

					    event.preventDefault();
					    return false;
					  });

					  input.on('keydown.xdsoft', function (event) {
					    var val = this.value,
						key = event.which,
						pos = this.selectionStart,
						selEnd = this.selectionEnd,
						hasSel = pos !== selEnd,
						digit;

					    // only alow these characters
					    if (((key >=  KEY0 && key <=  KEY9)  ||
						 (key >= _KEY0 && key <= _KEY9)) || 
						 (key === BACKSPACE || key === DEL)) {

					      // get char to insert which is new character or placeholder ('_')
					      digit = (key === BACKSPACE || key === DEL) ? '_' :
							  String.fromCharCode((_KEY0 <= key && key <= _KEY9) ? key - KEY0 : key);

						// we're deleting something, we're not at the start, and have normal cursor, move back one
						// if we have a selection length, cursor actually sits behind deletable char, not in front
						if (key === BACKSPACE && pos && !hasSel) {
						    pos -= 1;
						}

						// don't stop on a separator, continue whatever direction you were going
						//   value char - keep incrementing position while on separator char and we still have room
						//   del char   - keep decrementing position while on separator char and we still have room
						while (true) {
						  var maskValueAtCurPos = options.mask.substr(pos, 1);
						  var posShorterThanMaskLength = pos < options.mask.length;
						  var posGreaterThanZero = pos > 0;
						  var notNumberOrPlaceholder = /[^0-9_]/;
						  var curPosOnSep = notNumberOrPlaceholder.test(maskValueAtCurPos);
						  var continueMovingPosition = curPosOnSep && posShorterThanMaskLength && posGreaterThanZero

						  // if we hit a real char, stay where we are
						  if (!continueMovingPosition) break;

						  // hitting backspace in a selection, you can possibly go back any further - go forward
						  pos += (key === BACKSPACE && !hasSel) ? -1 : 1;

                        }
                        
                        if (event.metaKey) {    // cmd has been pressed
                            pos = 0;
                            hasSel = true;
                        }

						if (hasSel) {
						  // pos might have moved so re-calc length
						  var selLength = selEnd - pos

						  // if we have a selection length we will wipe out entire selection and replace with default template for that range
						  var defaultBlank = options.mask.replace(/[0-9]/g, '_');
						  var defaultBlankSelectionReplacement = defaultBlank.substr(pos, selLength); 
						  var selReplacementRemainder = defaultBlankSelectionReplacement.substr(1) // might be empty

						  var valueBeforeSel = val.substr(0, pos);
						  var insertChars = digit + selReplacementRemainder;
						  var charsAfterSelection = val.substr(pos + selLength);

						  val = valueBeforeSel + insertChars + charsAfterSelection

						} else {
						  var valueBeforeCursor = val.substr(0, pos);
						  var insertChar = digit;
						  var valueAfterNextChar = val.substr(pos + 1);

						  val = valueBeforeCursor + insertChar + valueAfterNextChar
						}

						if ($.trim(val) === '') {
						  // if empty, set to default
						    val = defaultBlank
						} else {
						  // if at the last character don't need to do anything
						    if (pos === options.mask.length) {
							event.preventDefault();
							return false;
						    }
						}

						// resume cursor location
						pos += (key === BACKSPACE) ? 0 : 1;
						// don't stop on a separator, continue whatever direction you were going
						while (/[^0-9_]/.test(options.mask.substr(pos, 1)) && pos < options.mask.length && pos > 0) {
						    pos += (key === BACKSPACE) ? 0 : 1;
						}

						if (isValidValue(options.mask, val)) {
						    this.value = val;
						    setCaretPos(this, pos);
						} else if ($.trim(val) === '') {
						    this.value = options.mask.replace(/[0-9]/g, '_');
						} else {
						    input.trigger('error_input.xdsoft');
						}
					    } else {
						if (([AKEY, CKEY, VKEY, ZKEY, YKEY].indexOf(key) !== -1 && ctrlDown) || [ESC, ARROWUP, ARROWDOWN, ARROWLEFT, ARROWRIGHT, F5, CTRLKEY, TAB, ENTER].indexOf(key) !== -1) {
						    return true;
						}
					    }

					    event.preventDefault();
					    return false;
					  });
				}
			}

			_xdsoft_datetime.setCurrentTime(getCurrentValue());

			input
				.data('xdsoft_datetimepicker', datetimepicker)
				.on('open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart', function () {
					if (input.is(':disabled') || (input.data('xdsoft_datetimepicker').is(':visible') && options.closeOnInputClick)) {
						return;
					}
					if (!options.openOnFocus) {
						return;
					}
					clearTimeout(timer);
					timer = setTimeout(function () {
						if (input.is(':disabled')) {
							return;
						}

						triggerAfterOpen = true;
						_xdsoft_datetime.setCurrentTime(getCurrentValue(), true);
						if(options.mask) {
							setMask(options);
						}
						datetimepicker.trigger('open.xdsoft');
					}, 100);
				})
				.on('keydown.xdsoft', function (event) {
					var elementSelector,
						key = event.which;
					if ([ENTER].indexOf(key) !== -1 && options.enterLikeTab) {
						elementSelector = $("input:visible,textarea:visible,button:visible,a:visible");
						datetimepicker.trigger('close.xdsoft');
						elementSelector.eq(elementSelector.index(this) + 1).focus();
						return false;
					}
					if ([TAB].indexOf(key) !== -1) {
						datetimepicker.trigger('close.xdsoft');
						return true;
					}
				})
				.on('blur.xdsoft', function () {
					datetimepicker.trigger('close.xdsoft');
				});
		};
		destroyDateTimePicker = function (input) {
			var datetimepicker = input.data('xdsoft_datetimepicker');
			if (datetimepicker) {
				datetimepicker.data('xdsoft_datetime', null);
				datetimepicker.remove();
				input
					.data('xdsoft_datetimepicker', null)
					.off('.xdsoft');
				$(options.contentWindow).off('resize.xdsoft');
				$([options.contentWindow, options.ownerDocument.body]).off('mousedown.xdsoft touchstart');
				if (input.unmousewheel) {
					input.unmousewheel();
				}
			}
		};
		$(options.ownerDocument)
            .off('keydown.xdsoftctrl keyup.xdsoftctrl')
            .off('keydown.xdsoftcmd keyup.xdsoftcmd')
			.on('keydown.xdsoftctrl', function (e) {
				if (e.keyCode === CTRLKEY) {
					ctrlDown = true;
                }
			})
			.on('keyup.xdsoftctrl', function (e) {
				if (e.keyCode === CTRLKEY) {
					ctrlDown = false;
                }
            })
            .on('keydown.xdsoftcmd', function (e) {
                if (e.keyCode === CMDKEY) {
                    cmdDown = true;
                }
			})
			.on('keyup.xdsoftcmd', function (e) {
                if (e.keyCode === CMDKEY) {
                    cmdDown = false;
                }
			});

		this.each(function () {
			var datetimepicker = $(this).data('xdsoft_datetimepicker'), $input;
			if (datetimepicker) {
				if ($.type(opt) === 'string') {
					switch (opt) {
						case 'show':
							$(this).select().focus();
							datetimepicker.trigger('open.xdsoft');
							break;
						case 'hide':
							datetimepicker.trigger('close.xdsoft');
							break;
						case 'toggle':
							datetimepicker.trigger('toggle.xdsoft');
							break;
						case 'destroy':
							destroyDateTimePicker($(this));
							break;
						case 'reset':
							this.value = this.defaultValue;
							if (!this.value || !datetimepicker.data('xdsoft_datetime').isValidDate(dateHelper.parseDate(this.value, options.format))) {
								datetimepicker.data('changed', false);
							}
							datetimepicker.data('xdsoft_datetime').setCurrentTime(this.value);
							break;
						case 'validate':
							$input = datetimepicker.data('input');
							$input.trigger('blur.xdsoft');
							break;
						default:
							if (datetimepicker[opt] && $.isFunction(datetimepicker[opt])) {
								result = datetimepicker[opt](opt2);
							}
					}
				} else {
					datetimepicker
						.setOptions(opt);
				}
				return 0;
			}
			if ($.type(opt) !== 'string') {
				if (!options.lazyInit || options.open || options.inline) {
					createDateTimePicker($(this));
				} else {
					lazyInit($(this));
				}
			}
		});

		return result;
	};

	$.fn.datetimepicker.defaults = default_options;

	function HighlightedDate(date, desc, style) {
		"use strict";
		this.date = date;
		this.desc = desc;
		this.style = style;
	}
};
;(function (factory) {
	if ( true ) {
		// AMD. Register as an anonymous module.
		!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"), __webpack_require__(/*! jquery-mousewheel */ "./node_modules/jquery-mousewheel/jquery.mousewheel.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	} else {}
}(datetimepickerFactory));


/*!
 * jQuery Mousewheel 3.1.13
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 */

(function (factory) {
    if ( true ) {
        // AMD. Register as an anonymous module.
        !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
    } else {}
}(function ($) {

    var toFix  = ['wheel', 'mousewheel', 'DOMMouseScroll', 'MozMousePixelScroll'],
        toBind = ( 'onwheel' in document || document.documentMode >= 9 ) ?
                    ['wheel'] : ['mousewheel', 'DomMouseScroll', 'MozMousePixelScroll'],
        slice  = Array.prototype.slice,
        nullLowestDeltaTimeout, lowestDelta;

    if ( $.event.fixHooks ) {
        for ( var i = toFix.length; i; ) {
            $.event.fixHooks[ toFix[--i] ] = $.event.mouseHooks;
        }
    }

    var special = $.event.special.mousewheel = {
        version: '3.1.12',

        setup: function() {
            if ( this.addEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.addEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = handler;
            }
            // Store the line height and page height for this particular element
            $.data(this, 'mousewheel-line-height', special.getLineHeight(this));
            $.data(this, 'mousewheel-page-height', special.getPageHeight(this));
        },

        teardown: function() {
            if ( this.removeEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.removeEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = null;
            }
            // Clean up the data we added to the element
            $.removeData(this, 'mousewheel-line-height');
            $.removeData(this, 'mousewheel-page-height');
        },

        getLineHeight: function(elem) {
            var $elem = $(elem),
                $parent = $elem['offsetParent' in $.fn ? 'offsetParent' : 'parent']();
            if (!$parent.length) {
                $parent = $('body');
            }
            return parseInt($parent.css('fontSize'), 10) || parseInt($elem.css('fontSize'), 10) || 16;
        },

        getPageHeight: function(elem) {
            return $(elem).height();
        },

        settings: {
            adjustOldDeltas: true, // see shouldAdjustOldDeltas() below
            normalizeOffset: true  // calls getBoundingClientRect for each event
        }
    };

    $.fn.extend({
        mousewheel: function(fn) {
            return fn ? this.bind('mousewheel', fn) : this.trigger('mousewheel');
        },

        unmousewheel: function(fn) {
            return this.unbind('mousewheel', fn);
        }
    });


    function handler(event) {
        var orgEvent   = event || window.event,
            args       = slice.call(arguments, 1),
            delta      = 0,
            deltaX     = 0,
            deltaY     = 0,
            absDelta   = 0,
            offsetX    = 0,
            offsetY    = 0;
        event = $.event.fix(orgEvent);
        event.type = 'mousewheel';

        // Old school scrollwheel delta
        if ( 'detail'      in orgEvent ) { deltaY = orgEvent.detail * -1;      }
        if ( 'wheelDelta'  in orgEvent ) { deltaY = orgEvent.wheelDelta;       }
        if ( 'wheelDeltaY' in orgEvent ) { deltaY = orgEvent.wheelDeltaY;      }
        if ( 'wheelDeltaX' in orgEvent ) { deltaX = orgEvent.wheelDeltaX * -1; }

        // Firefox < 17 horizontal scrolling related to DOMMouseScroll event
        if ( 'axis' in orgEvent && orgEvent.axis === orgEvent.HORIZONTAL_AXIS ) {
            deltaX = deltaY * -1;
            deltaY = 0;
        }

        // Set delta to be deltaY or deltaX if deltaY is 0 for backwards compatabilitiy
        delta = deltaY === 0 ? deltaX : deltaY;

        // New school wheel delta (wheel event)
        if ( 'deltaY' in orgEvent ) {
            deltaY = orgEvent.deltaY * -1;
            delta  = deltaY;
        }
        if ( 'deltaX' in orgEvent ) {
            deltaX = orgEvent.deltaX;
            if ( deltaY === 0 ) { delta  = deltaX * -1; }
        }

        // No change actually happened, no reason to go any further
        if ( deltaY === 0 && deltaX === 0 ) { return; }

        // Need to convert lines and pages to pixels if we aren't already in pixels
        // There are three delta modes:
        //   * deltaMode 0 is by pixels, nothing to do
        //   * deltaMode 1 is by lines
        //   * deltaMode 2 is by pages
        if ( orgEvent.deltaMode === 1 ) {
            var lineHeight = $.data(this, 'mousewheel-line-height');
            delta  *= lineHeight;
            deltaY *= lineHeight;
            deltaX *= lineHeight;
        } else if ( orgEvent.deltaMode === 2 ) {
            var pageHeight = $.data(this, 'mousewheel-page-height');
            delta  *= pageHeight;
            deltaY *= pageHeight;
            deltaX *= pageHeight;
        }

        // Store lowest absolute delta to normalize the delta values
        absDelta = Math.max( Math.abs(deltaY), Math.abs(deltaX) );

        if ( !lowestDelta || absDelta < lowestDelta ) {
            lowestDelta = absDelta;

            // Adjust older deltas if necessary
            if ( shouldAdjustOldDeltas(orgEvent, absDelta) ) {
                lowestDelta /= 40;
            }
        }

        // Adjust older deltas if necessary
        if ( shouldAdjustOldDeltas(orgEvent, absDelta) ) {
            // Divide all the things by 40!
            delta  /= 40;
            deltaX /= 40;
            deltaY /= 40;
        }

        // Get a whole, normalized value for the deltas
        delta  = Math[ delta  >= 1 ? 'floor' : 'ceil' ](delta  / lowestDelta);
        deltaX = Math[ deltaX >= 1 ? 'floor' : 'ceil' ](deltaX / lowestDelta);
        deltaY = Math[ deltaY >= 1 ? 'floor' : 'ceil' ](deltaY / lowestDelta);

        // Normalise offsetX and offsetY properties
        if ( special.settings.normalizeOffset && this.getBoundingClientRect ) {
            var boundingRect = this.getBoundingClientRect();
            offsetX = event.clientX - boundingRect.left;
            offsetY = event.clientY - boundingRect.top;
        }

        // Add information to the event object
        event.deltaX = deltaX;
        event.deltaY = deltaY;
        event.deltaFactor = lowestDelta;
        event.offsetX = offsetX;
        event.offsetY = offsetY;
        // Go ahead and set deltaMode to 0 since we converted to pixels
        // Although this is a little odd since we overwrite the deltaX/Y
        // properties with normalized deltas.
        event.deltaMode = 0;

        // Add event and delta to the front of the arguments
        args.unshift(event, delta, deltaX, deltaY);

        // Clearout lowestDelta after sometime to better
        // handle multiple device types that give different
        // a different lowestDelta
        // Ex: trackpad = 3 and mouse wheel = 120
        if (nullLowestDeltaTimeout) { clearTimeout(nullLowestDeltaTimeout); }
        nullLowestDeltaTimeout = setTimeout(nullLowestDelta, 200);

        return ($.event.dispatch || $.event.handle).apply(this, args);
    }

    function nullLowestDelta() {
        lowestDelta = null;
    }

    function shouldAdjustOldDeltas(orgEvent, absDelta) {
        // If this is an older event and the delta is divisable by 120,
        // then we are assuming that the browser is treating this as an
        // older mouse wheel event and that we should divide the deltas
        // by 40 to try and get a more usable deltaFactor.
        // Side note, this actually impacts the reported scroll distance
        // in older browsers and can cause scrolling to be slower than native.
        // Turn this off by setting $.event.special.mousewheel.settings.adjustOldDeltas to false.
        return special.settings.adjustOldDeltas && orgEvent.type === 'mousewheel' && absDelta % 120 === 0;
    }

}));


/***/ }),

/***/ "./node_modules/jquery-mousewheel/jquery.mousewheel.js":
/*!*************************************************************!*\
  !*** ./node_modules/jquery-mousewheel/jquery.mousewheel.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * jQuery Mousewheel 3.1.13
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 */

(function (factory) {
    if ( true ) {
        // AMD. Register as an anonymous module.
        !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
    } else {}
}(function ($) {

    var toFix  = ['wheel', 'mousewheel', 'DOMMouseScroll', 'MozMousePixelScroll'],
        toBind = ( 'onwheel' in document || document.documentMode >= 9 ) ?
                    ['wheel'] : ['mousewheel', 'DomMouseScroll', 'MozMousePixelScroll'],
        slice  = Array.prototype.slice,
        nullLowestDeltaTimeout, lowestDelta;

    if ( $.event.fixHooks ) {
        for ( var i = toFix.length; i; ) {
            $.event.fixHooks[ toFix[--i] ] = $.event.mouseHooks;
        }
    }

    var special = $.event.special.mousewheel = {
        version: '3.1.12',

        setup: function() {
            if ( this.addEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.addEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = handler;
            }
            // Store the line height and page height for this particular element
            $.data(this, 'mousewheel-line-height', special.getLineHeight(this));
            $.data(this, 'mousewheel-page-height', special.getPageHeight(this));
        },

        teardown: function() {
            if ( this.removeEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.removeEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = null;
            }
            // Clean up the data we added to the element
            $.removeData(this, 'mousewheel-line-height');
            $.removeData(this, 'mousewheel-page-height');
        },

        getLineHeight: function(elem) {
            var $elem = $(elem),
                $parent = $elem['offsetParent' in $.fn ? 'offsetParent' : 'parent']();
            if (!$parent.length) {
                $parent = $('body');
            }
            return parseInt($parent.css('fontSize'), 10) || parseInt($elem.css('fontSize'), 10) || 16;
        },

        getPageHeight: function(elem) {
            return $(elem).height();
        },

        settings: {
            adjustOldDeltas: true, // see shouldAdjustOldDeltas() below
            normalizeOffset: true  // calls getBoundingClientRect for each event
        }
    };

    $.fn.extend({
        mousewheel: function(fn) {
            return fn ? this.bind('mousewheel', fn) : this.trigger('mousewheel');
        },

        unmousewheel: function(fn) {
            return this.unbind('mousewheel', fn);
        }
    });


    function handler(event) {
        var orgEvent   = event || window.event,
            args       = slice.call(arguments, 1),
            delta      = 0,
            deltaX     = 0,
            deltaY     = 0,
            absDelta   = 0,
            offsetX    = 0,
            offsetY    = 0;
        event = $.event.fix(orgEvent);
        event.type = 'mousewheel';

        // Old school scrollwheel delta
        if ( 'detail'      in orgEvent ) { deltaY = orgEvent.detail * -1;      }
        if ( 'wheelDelta'  in orgEvent ) { deltaY = orgEvent.wheelDelta;       }
        if ( 'wheelDeltaY' in orgEvent ) { deltaY = orgEvent.wheelDeltaY;      }
        if ( 'wheelDeltaX' in orgEvent ) { deltaX = orgEvent.wheelDeltaX * -1; }

        // Firefox < 17 horizontal scrolling related to DOMMouseScroll event
        if ( 'axis' in orgEvent && orgEvent.axis === orgEvent.HORIZONTAL_AXIS ) {
            deltaX = deltaY * -1;
            deltaY = 0;
        }

        // Set delta to be deltaY or deltaX if deltaY is 0 for backwards compatabilitiy
        delta = deltaY === 0 ? deltaX : deltaY;

        // New school wheel delta (wheel event)
        if ( 'deltaY' in orgEvent ) {
            deltaY = orgEvent.deltaY * -1;
            delta  = deltaY;
        }
        if ( 'deltaX' in orgEvent ) {
            deltaX = orgEvent.deltaX;
            if ( deltaY === 0 ) { delta  = deltaX * -1; }
        }

        // No change actually happened, no reason to go any further
        if ( deltaY === 0 && deltaX === 0 ) { return; }

        // Need to convert lines and pages to pixels if we aren't already in pixels
        // There are three delta modes:
        //   * deltaMode 0 is by pixels, nothing to do
        //   * deltaMode 1 is by lines
        //   * deltaMode 2 is by pages
        if ( orgEvent.deltaMode === 1 ) {
            var lineHeight = $.data(this, 'mousewheel-line-height');
            delta  *= lineHeight;
            deltaY *= lineHeight;
            deltaX *= lineHeight;
        } else if ( orgEvent.deltaMode === 2 ) {
            var pageHeight = $.data(this, 'mousewheel-page-height');
            delta  *= pageHeight;
            deltaY *= pageHeight;
            deltaX *= pageHeight;
        }

        // Store lowest absolute delta to normalize the delta values
        absDelta = Math.max( Math.abs(deltaY), Math.abs(deltaX) );

        if ( !lowestDelta || absDelta < lowestDelta ) {
            lowestDelta = absDelta;

            // Adjust older deltas if necessary
            if ( shouldAdjustOldDeltas(orgEvent, absDelta) ) {
                lowestDelta /= 40;
            }
        }

        // Adjust older deltas if necessary
        if ( shouldAdjustOldDeltas(orgEvent, absDelta) ) {
            // Divide all the things by 40!
            delta  /= 40;
            deltaX /= 40;
            deltaY /= 40;
        }

        // Get a whole, normalized value for the deltas
        delta  = Math[ delta  >= 1 ? 'floor' : 'ceil' ](delta  / lowestDelta);
        deltaX = Math[ deltaX >= 1 ? 'floor' : 'ceil' ](deltaX / lowestDelta);
        deltaY = Math[ deltaY >= 1 ? 'floor' : 'ceil' ](deltaY / lowestDelta);

        // Normalise offsetX and offsetY properties
        if ( special.settings.normalizeOffset && this.getBoundingClientRect ) {
            var boundingRect = this.getBoundingClientRect();
            offsetX = event.clientX - boundingRect.left;
            offsetY = event.clientY - boundingRect.top;
        }

        // Add information to the event object
        event.deltaX = deltaX;
        event.deltaY = deltaY;
        event.deltaFactor = lowestDelta;
        event.offsetX = offsetX;
        event.offsetY = offsetY;
        // Go ahead and set deltaMode to 0 since we converted to pixels
        // Although this is a little odd since we overwrite the deltaX/Y
        // properties with normalized deltas.
        event.deltaMode = 0;

        // Add event and delta to the front of the arguments
        args.unshift(event, delta, deltaX, deltaY);

        // Clearout lowestDelta after sometime to better
        // handle multiple device types that give different
        // a different lowestDelta
        // Ex: trackpad = 3 and mouse wheel = 120
        if (nullLowestDeltaTimeout) { clearTimeout(nullLowestDeltaTimeout); }
        nullLowestDeltaTimeout = setTimeout(nullLowestDelta, 200);

        return ($.event.dispatch || $.event.handle).apply(this, args);
    }

    function nullLowestDelta() {
        lowestDelta = null;
    }

    function shouldAdjustOldDeltas(orgEvent, absDelta) {
        // If this is an older event and the delta is divisable by 120,
        // then we are assuming that the browser is treating this as an
        // older mouse wheel event and that we should divide the deltas
        // by 40 to try and get a more usable deltaFactor.
        // Side note, this actually impacts the reported scroll distance
        // in older browsers and can cause scrolling to be slower than native.
        // Turn this off by setting $.event.special.mousewheel.settings.adjustOldDeltas to false.
        return special.settings.adjustOldDeltas && orgEvent.type === 'mousewheel' && absDelta % 120 === 0;
    }

}));


/***/ }),

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/date-time-picker/date-time-picker.ts":
/*!*****************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/date-time-picker/date-time-picker.ts ***!
  \*****************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return DateTimePicker; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery/dist/jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var jquery_datetimepicker_build_jquery_datetimepicker_full__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! jquery-datetimepicker/build/jquery.datetimepicker.full */ "./node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.js");
/* harmony import */ var jquery_datetimepicker_build_jquery_datetimepicker_full__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(jquery_datetimepicker_build_jquery_datetimepicker_full__WEBPACK_IMPORTED_MODULE_2__);



class DateTimePicker extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.trigger = void 0;
  }

  readyCallback() {}

  init() {
    this.trigger = this.getElementsByTagName('input')[0];
    this.mapEvents();
  }

  mapEvents() {
    this.datetimepickerInit();
    this.setLanguage(this.language);
  }

  datetimepickerInit() {
    if (this.formattedDateTime && jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1___default()(this.trigger).val()) {
      jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1___default()(this.trigger).val(this.formattedDateTime);
    }

    jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1___default()(this.trigger).datetimepicker(this.config);
  }

  setLanguage(language) {
    jquery_dist_jquery__WEBPACK_IMPORTED_MODULE_1___default.a.datetimepicker.setLocale(language);
  }

  get parent() {
    return this.getAttribute('parent-id');
  }

  get language() {
    return this.getAttribute('language');
  }

  get config() {
    var config = JSON.parse(this.getAttribute('config'));
    config.parentID = this.parent;
    return config;
  }

  get formattedDateTime() {
    return this.getAttribute('formatted-date-time');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvanF1ZXJ5LWRhdGV0aW1lcGlja2VyL2J1aWxkL2pxdWVyeS5kYXRldGltZXBpY2tlci5mdWxsLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9qcXVlcnktbW91c2V3aGVlbC9qcXVlcnkubW91c2V3aGVlbC5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZGF0ZS10aW1lLXBpY2tlci9kYXRlLXRpbWUtcGlja2VyLnRzIl0sIm5hbWVzIjpbIkRhdGVUaW1lUGlja2VyIiwiQ29tcG9uZW50IiwidHJpZ2dlciIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJtYXBFdmVudHMiLCJkYXRldGltZXBpY2tlckluaXQiLCJzZXRMYW5ndWFnZSIsImxhbmd1YWdlIiwiZm9ybWF0dGVkRGF0ZVRpbWUiLCIkIiwidmFsIiwiZGF0ZXRpbWVwaWNrZXIiLCJjb25maWciLCJzZXRMb2NhbGUiLCJwYXJlbnQiLCJnZXRBdHRyaWJ1dGUiLCJKU09OIiwicGFyc2UiLCJwYXJlbnRJRCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUE7QUFDQSw4QkFBOEI7QUFDOUI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxxQkFBcUIsWUFBWSxhQUFhLGtCQUFrQiwrQkFBK0IsZ0ZBQWdGLG1CQUFtQiw0QkFBNEIsNkJBQTZCLGVBQWUsUUFBUSxXQUFXLEtBQUssbUJBQW1CLHlHQUF5RyxTQUFTLGlCQUFpQixZQUFZLFdBQVcscURBQXFELFNBQVMsSUFBSSxjQUFjLDBYQUEwWCxjQUFjLHNCQUFzQixpREFBaUQsc1BBQXNQLEVBQUUsNkJBQTZCLDJCQUEyQixvQkFBb0IsOElBQThJLDBCQUEwQiwrQ0FBK0MsYUFBYSxxRkFBcUYseUJBQXlCLDZEQUE2RCw0REFBNEQsa0JBQWtCLDhCQUE4Qixv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QTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLGFBQWE7QUFDYjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osYUFBYTtBQUNiO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFD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Q0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsTUFBTTtBQUNOO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLDBDQUEwQyxPQUFPO0FBQ2pELDBCQUEwQixVQUFVO0FBQ3BDO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGdCQUFnQixXQUFXO0FBQzNCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxNQUFNO0FBQ047QUFDQTtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsUUFBUTtBQUNSO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsTUFBTTtBQUNOO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxNQUFNO0FBQ047QUFDQTtBQUNBO0FBQ0EsTUFBTTs7QUFFTjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBLE9BQU87QUFDUCxNQUFNO0FBQ047QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLE9BQU87QUFDUDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLE1BQU07O0FBRU47QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxLQUFLOztBQUVMO0FBQ0E7QUFDQTtBQUNBLEtBQUs7O0FBRUw7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQTtBQUNBLEdBQUc7QUFDSDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLCtEQUErRCwyQ0FBMkM7O0FBRTFHO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLE9BQU87QUFDUCxNQUFNO0FBQ047O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQSwwREFBMEQsa0JBQWtCO0FBQzVFO0FBQ0E7QUFDQSxPQUFPO0FBQ1A7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLEtBQUs7O0FBRUw7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQSwrQkFBK0I7O0FBRS9CO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQSxNQUFNOztBQUVOO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0EsTUFBTTs7QUFFTjtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLEtBQUs7QUFDTDtBQUNBOztBQUVBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLEtBQUs7QUFDTDtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFFBQVE7QUFDUjtBQUNBLGdCQUFnQjtBQUNoQjtBQUNBLFNBQVM7QUFDVDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsV0FBVztBQUNYLFVBQVU7QUFDVjtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQSxPQUFPO0FBQ1A7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLElBQUk7O0FBRUo7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQSxhQUFhO0FBQ2I7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUEsdUJBQXVCLEVBQUU7O0FBRXpCO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxNQUFNO0FBQ047QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUEsa0RBQWtEO0FBQ2xEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSztBQUNMO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsTUFBTTs7QUFFTjtBQUNBO0FBQ0E7QUFDQTtBQUNBLE1BQU07QUFDTixLQUFLOztBQUVMO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsdUJBQXVCLDBCQUEwQjtBQUNqRDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxNQUFNO0FBQ047QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLE1BQU07QUFDTixLQUFLOztBQUVMO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQSxpQkFBaUIsT0FBTztBQUN4QjtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0EsUUFBUTtBQUNSO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNB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RUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBLGdFO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsVUFBVTtBQUNWO0FBQ0EsVUFBVTtBQUNWO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLFFBQVE7O0FBRVI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBLDRDQUE0QztBQUM1QztBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQSxtRjtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQSxPQUFPO0FBQ1A7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQSxVQUFVO0FBQ1Y7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLFFBQVE7QUFDUjtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsTUFBTTtBQUNOLEtBQUs7QUFDTDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEtBQUs7QUFDTDtBQUNB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QUMsS0FBS1QsT0FBTixDQUFELENBQWdCVSxHQUFoQixDQUFvQixLQUFLRixpQkFBekI7QUFDSDs7QUFFREMsNkRBQUMsQ0FBQyxLQUFLVCxPQUFOLENBQUQsQ0FBZ0JXLGNBQWhCLENBQStCLEtBQUtDLE1BQXBDO0FBQ0g7O0FBRVNOLGFBQVcsQ0FBQ0MsUUFBRCxFQUF5QjtBQUMxQ0UsNkRBQUMsQ0FBQ0UsY0FBRixDQUFpQkUsU0FBakIsQ0FBMkJOLFFBQTNCO0FBQ0g7O0FBRW1CLE1BQU5PLE1BQU0sR0FBVztBQUMzQixXQUFPLEtBQUtDLFlBQUwsQ0FBa0IsV0FBbEIsQ0FBUDtBQUNIOztBQUVxQixNQUFSUixRQUFRLEdBQVc7QUFDN0IsV0FBTyxLQUFLUSxZQUFMLENBQWtCLFVBQWxCLENBQVA7QUFDSDs7QUFFbUIsTUFBTkgsTUFBTSxHQUFXO0FBQzNCLFFBQU1BLE1BQU0sR0FBR0ksSUFBSSxDQUFDQyxLQUFMLENBQVcsS0FBS0YsWUFBTCxDQUFrQixRQUFsQixDQUFYLENBQWY7QUFDQUgsVUFBTSxDQUFDTSxRQUFQLEdBQWtCLEtBQUtKLE1BQXZCO0FBRUEsV0FBT0YsTUFBUDtBQUNIOztBQUU4QixNQUFqQkosaUJBQWlCLEdBQVc7QUFDdEMsV0FBTyxLQUFLTyxZQUFMLENBQWtCLHFCQUFsQixDQUFQO0FBQ0g7O0FBNUNpRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmRhdGUtdGltZS1waWNrZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKiFcbiAqIEBjb3B5cmlnaHQgQ29weXJpZ2h0ICZjb3B5OyBLYXJ0aWsgVmlzd2Vzd2FyYW4sIEtyYWplZS5jb20sIDIwMTQgLSAyMDE2XG4gKiBAdmVyc2lvbiAxLjMuNFxuICpcbiAqIERhdGUgZm9ybWF0dGVyIHV0aWxpdHkgbGlicmFyeSB0aGF0IGFsbG93cyBmb3JtYXR0aW5nIGRhdGUvdGltZSB2YXJpYWJsZXMgb3IgRGF0ZSBvYmplY3RzIHVzaW5nIFBIUCBEYXRlVGltZSBmb3JtYXQuXG4gKiBAc2VlIGh0dHA6Ly9waHAubmV0L21hbnVhbC9lbi9mdW5jdGlvbi5kYXRlLnBocFxuICpcbiAqIEZvciBtb3JlIEpRdWVyeSBwbHVnaW5zIHZpc2l0IGh0dHA6Ly9wbHVnaW5zLmtyYWplZS5jb21cbiAqIEZvciBtb3JlIFlpaSByZWxhdGVkIGRlbW9zIHZpc2l0IGh0dHA6Ly9kZW1vcy5rcmFqZWUuY29tXG4gKi92YXIgRGF0ZUZvcm1hdHRlcjshZnVuY3Rpb24oKXtcInVzZSBzdHJpY3RcIjt2YXIgdCxlLHIsbixhLHUsaTt1PTg2NGU1LGk9MzYwMCx0PWZ1bmN0aW9uKHQsZSl7cmV0dXJuXCJzdHJpbmdcIj09dHlwZW9mIHQmJlwic3RyaW5nXCI9PXR5cGVvZiBlJiZ0LnRvTG93ZXJDYXNlKCk9PT1lLnRvTG93ZXJDYXNlKCl9LGU9ZnVuY3Rpb24odCxyLG4pe3ZhciBhPW58fFwiMFwiLHU9dC50b1N0cmluZygpO3JldHVybiB1Lmxlbmd0aDxyP2UoYSt1LHIpOnV9LHI9ZnVuY3Rpb24odCl7dmFyIGUsbjtmb3IodD10fHx7fSxlPTE7ZTxhcmd1bWVudHMubGVuZ3RoO2UrKylpZihuPWFyZ3VtZW50c1tlXSlmb3IodmFyIGEgaW4gbiluLmhhc093blByb3BlcnR5KGEpJiYoXCJvYmplY3RcIj09dHlwZW9mIG5bYV0/cih0W2FdLG5bYV0pOnRbYV09blthXSk7cmV0dXJuIHR9LG49ZnVuY3Rpb24odCxlKXtmb3IodmFyIHI9MDtyPGUubGVuZ3RoO3IrKylpZihlW3JdLnRvTG93ZXJDYXNlKCk9PT10LnRvTG93ZXJDYXNlKCkpcmV0dXJuIHI7cmV0dXJuLTF9LGE9e2RhdGVTZXR0aW5nczp7ZGF5czpbXCJTdW5kYXlcIixcIk1vbmRheVwiLFwiVHVlc2RheVwiLFwiV2VkbmVzZGF5XCIsXCJUaHVyc2RheVwiLFwiRnJpZGF5XCIsXCJTYXR1cmRheVwiXSxkYXlzU2hvcnQ6W1wiU3VuXCIsXCJNb25cIixcIlR1ZVwiLFwiV2VkXCIsXCJUaHVcIixcIkZyaVwiLFwiU2F0XCJdLG1vbnRoczpbXCJKYW51YXJ5XCIsXCJGZWJydWFyeVwiLFwiTWFyY2hcIixcIkFwcmlsXCIsXCJNYXlcIixcIkp1bmVcIixcIkp1bHlcIixcIkF1Z3VzdFwiLFwiU2VwdGVtYmVyXCIsXCJPY3RvYmVyXCIsXCJOb3ZlbWJlclwiLFwiRGVjZW1iZXJcIl0sbW9udGhzU2hvcnQ6W1wiSmFuXCIsXCJGZWJcIixcIk1hclwiLFwiQXByXCIsXCJNYXlcIixcIkp1blwiLFwiSnVsXCIsXCJBdWdcIixcIlNlcFwiLFwiT2N0XCIsXCJOb3ZcIixcIkRlY1wiXSxtZXJpZGllbTpbXCJBTVwiLFwiUE1cIl0sb3JkaW5hbDpmdW5jdGlvbih0KXt2YXIgZT10JTEwLHI9ezE6XCJzdFwiLDI6XCJuZFwiLDM6XCJyZFwifTtyZXR1cm4gMSE9PU1hdGguZmxvb3IodCUxMDAvMTApJiZyW2VdP3JbZV06XCJ0aFwifX0sc2VwYXJhdG9yczovWyBcXC0rXFwvXFwuVDpAXS9nLHZhbGlkUGFydHM6L1tkRGpsTlN3eldGbU1udExvWXlhQUJnR2hIaXN1ZVRJT1BaY3JVXS9nLGludFBhcnRzOi9bZGp3TnptbnlZaEhnR2lzXS9nLHR6UGFydHM6L1xcYig/OltQTUNFQV1bU0RQXVR8KD86UGFjaWZpY3xNb3VudGFpbnxDZW50cmFsfEVhc3Rlcm58QXRsYW50aWMpICg/OlN0YW5kYXJkfERheWxpZ2h0fFByZXZhaWxpbmcpIFRpbWV8KD86R01UfFVUQykoPzpbLStdXFxkezR9KT8pXFxiL2csdHpDbGlwOi9bXi0rXFxkQS1aXS9nfSxEYXRlRm9ybWF0dGVyPWZ1bmN0aW9uKHQpe3ZhciBlPXRoaXMsbj1yKGEsdCk7ZS5kYXRlU2V0dGluZ3M9bi5kYXRlU2V0dGluZ3MsZS5zZXBhcmF0b3JzPW4uc2VwYXJhdG9ycyxlLnZhbGlkUGFydHM9bi52YWxpZFBhcnRzLGUuaW50UGFydHM9bi5pbnRQYXJ0cyxlLnR6UGFydHM9bi50elBhcnRzLGUudHpDbGlwPW4udHpDbGlwfSxEYXRlRm9ybWF0dGVyLnByb3RvdHlwZT17Y29uc3RydWN0b3I6RGF0ZUZvcm1hdHRlcixnZXRNb250aDpmdW5jdGlvbih0KXt2YXIgZSxyPXRoaXM7cmV0dXJuIGU9bih0LHIuZGF0ZVNldHRpbmdzLm1vbnRoc1Nob3J0KSsxLDA9PT1lJiYoZT1uKHQsci5kYXRlU2V0dGluZ3MubW9udGhzKSsxKSxlfSxwYXJzZURhdGU6ZnVuY3Rpb24oZSxyKXt2YXIgbixhLHUsaSxzLG8sYyxmLGwsaCxkPXRoaXMsZz0hMSxtPSExLHA9ZC5kYXRlU2V0dGluZ3MseT17ZGF0ZTpudWxsLHllYXI6bnVsbCxtb250aDpudWxsLGRheTpudWxsLGhvdXI6MCxtaW46MCxzZWM6MH07aWYoIWUpcmV0dXJuIG51bGw7aWYoZSBpbnN0YW5jZW9mIERhdGUpcmV0dXJuIGU7aWYoXCJVXCI9PT1yKXJldHVybiB1PXBhcnNlSW50KGUpLHU/bmV3IERhdGUoMWUzKnUpOmU7c3dpdGNoKHR5cGVvZiBlKXtjYXNlXCJudW1iZXJcIjpyZXR1cm4gbmV3IERhdGUoZSk7Y2FzZVwic3RyaW5nXCI6YnJlYWs7ZGVmYXVsdDpyZXR1cm4gbnVsbH1pZihuPXIubWF0Y2goZC52YWxpZFBhcnRzKSwhbnx8MD09PW4ubGVuZ3RoKXRocm93IG5ldyBFcnJvcihcIkludmFsaWQgZGF0ZSBmb3JtYXQgZGVmaW5pdGlvbi5cIik7Zm9yKGE9ZS5yZXBsYWNlKGQuc2VwYXJhdG9ycyxcIlxceDAwXCIpLnNwbGl0KFwiXFx4MDBcIiksdT0wO3U8YS5sZW5ndGg7dSsrKXN3aXRjaChpPWFbdV0scz1wYXJzZUludChpKSxuW3VdKXtjYXNlXCJ5XCI6Y2FzZVwiWVwiOmlmKCFzKXJldHVybiBudWxsO2w9aS5sZW5ndGgseS55ZWFyPTI9PT1sP3BhcnNlSW50KCg3MD5zP1wiMjBcIjpcIjE5XCIpK2kpOnMsZz0hMDticmVhaztjYXNlXCJtXCI6Y2FzZVwiblwiOmNhc2VcIk1cIjpjYXNlXCJGXCI6aWYoaXNOYU4ocykpe2lmKG89ZC5nZXRNb250aChpKSwhKG8+MCkpcmV0dXJuIG51bGw7eS5tb250aD1vfWVsc2V7aWYoIShzPj0xJiYxMj49cykpcmV0dXJuIG51bGw7eS5tb250aD1zfWc9ITA7YnJlYWs7Y2FzZVwiZFwiOmNhc2VcImpcIjppZighKHM+PTEmJjMxPj1zKSlyZXR1cm4gbnVsbDt5LmRheT1zLGc9ITA7YnJlYWs7Y2FzZVwiZ1wiOmNhc2VcImhcIjppZihjPW4uaW5kZXhPZihcImFcIik+LTE/bi5pbmRleE9mKFwiYVwiKTpuLmluZGV4T2YoXCJBXCIpPi0xP24uaW5kZXhPZihcIkFcIik6LTEsaD1hW2NdLGM+LTEpZj10KGgscC5tZXJpZGllbVswXSk/MDp0KGgscC5tZXJpZGllbVsxXSk/MTI6LTEscz49MSYmMTI+PXMmJmY+LTE/eS5ob3VyPXMrZi0xOnM+PTAmJjIzPj1zJiYoeS5ob3VyPXMpO2Vsc2V7aWYoIShzPj0wJiYyMz49cykpcmV0dXJuIG51bGw7eS5ob3VyPXN9bT0hMDticmVhaztjYXNlXCJHXCI6Y2FzZVwiSFwiOmlmKCEocz49MCYmMjM+PXMpKXJldHVybiBudWxsO3kuaG91cj1zLG09ITA7YnJlYWs7Y2FzZVwiaVwiOmlmKCEocz49MCYmNTk+PXMpKXJldHVybiBudWxsO3kubWluPXMsbT0hMDticmVhaztjYXNlXCJzXCI6aWYoIShzPj0wJiY1OT49cykpcmV0dXJuIG51bGw7eS5zZWM9cyxtPSEwfWlmKGc9PT0hMCYmeS55ZWFyJiZ5Lm1vbnRoJiZ5LmRheSl5LmRhdGU9bmV3IERhdGUoeS55ZWFyLHkubW9udGgtMSx5LmRheSx5LmhvdXIseS5taW4seS5zZWMsMCk7ZWxzZXtpZihtIT09ITApcmV0dXJuIG51bGw7eS5kYXRlPW5ldyBEYXRlKDAsMCwwLHkuaG91cix5Lm1pbix5LnNlYywwKX1yZXR1cm4geS5kYXRlfSxndWVzc0RhdGU6ZnVuY3Rpb24odCxlKXtpZihcInN0cmluZ1wiIT10eXBlb2YgdClyZXR1cm4gdDt2YXIgcixuLGEsdSxpLHMsbz10aGlzLGM9dC5yZXBsYWNlKG8uc2VwYXJhdG9ycyxcIlxceDAwXCIpLnNwbGl0KFwiXFx4MDBcIiksZj0vXltkam1uXS9nLGw9ZS5tYXRjaChvLnZhbGlkUGFydHMpLGg9bmV3IERhdGUsZD0wO2lmKCFmLnRlc3QobFswXSkpcmV0dXJuIHQ7Zm9yKGE9MDthPGMubGVuZ3RoO2ErKyl7aWYoZD0yLGk9Y1thXSxzPXBhcnNlSW50KGkuc3Vic3RyKDAsMikpLGlzTmFOKHMpKXJldHVybiBudWxsO3N3aXRjaChhKXtjYXNlIDA6XCJtXCI9PT1sWzBdfHxcIm5cIj09PWxbMF0/aC5zZXRNb250aChzLTEpOmguc2V0RGF0ZShzKTticmVhaztjYXNlIDE6XCJtXCI9PT1sWzBdfHxcIm5cIj09PWxbMF0/aC5zZXREYXRlKHMpOmguc2V0TW9udGgocy0xKTticmVhaztjYXNlIDI6aWYobj1oLmdldEZ1bGxZZWFyKCkscj1pLmxlbmd0aCxkPTQ+cj9yOjQsbj1wYXJzZUludCg0PnI/bi50b1N0cmluZygpLnN1YnN0cigwLDQtcikraTppLnN1YnN0cigwLDQpKSwhbilyZXR1cm4gbnVsbDtoLnNldEZ1bGxZZWFyKG4pO2JyZWFrO2Nhc2UgMzpoLnNldEhvdXJzKHMpO2JyZWFrO2Nhc2UgNDpoLnNldE1pbnV0ZXMocyk7YnJlYWs7Y2FzZSA1Omguc2V0U2Vjb25kcyhzKX11PWkuc3Vic3RyKGQpLHUubGVuZ3RoPjAmJmMuc3BsaWNlKGErMSwwLHUpfXJldHVybiBofSxwYXJzZUZvcm1hdDpmdW5jdGlvbih0LHIpe3ZhciBuLGE9dGhpcyxzPWEuZGF0ZVNldHRpbmdzLG89L1xcXFw/KC4/KS9naSxjPWZ1bmN0aW9uKHQsZSl7cmV0dXJuIG5bdF0/blt0XSgpOmV9O3JldHVybiBuPXtkOmZ1bmN0aW9uKCl7cmV0dXJuIGUobi5qKCksMil9LEQ6ZnVuY3Rpb24oKXtyZXR1cm4gcy5kYXlzU2hvcnRbbi53KCldfSxqOmZ1bmN0aW9uKCl7cmV0dXJuIHIuZ2V0RGF0ZSgpfSxsOmZ1bmN0aW9uKCl7cmV0dXJuIHMuZGF5c1tuLncoKV19LE46ZnVuY3Rpb24oKXtyZXR1cm4gbi53KCl8fDd9LHc6ZnVuY3Rpb24oKXtyZXR1cm4gci5nZXREYXkoKX0sejpmdW5jdGlvbigpe3ZhciB0PW5ldyBEYXRlKG4uWSgpLG4ubigpLTEsbi5qKCkpLGU9bmV3IERhdGUobi5ZKCksMCwxKTtyZXR1cm4gTWF0aC5yb3VuZCgodC1lKS91KX0sVzpmdW5jdGlvbigpe3ZhciB0PW5ldyBEYXRlKG4uWSgpLG4ubigpLTEsbi5qKCktbi5OKCkrMykscj1uZXcgRGF0ZSh0LmdldEZ1bGxZZWFyKCksMCw0KTtyZXR1cm4gZSgxK01hdGgucm91bmQoKHQtcikvdS83KSwyKX0sRjpmdW5jdGlvbigpe3JldHVybiBzLm1vbnRoc1tyLmdldE1vbnRoKCldfSxtOmZ1bmN0aW9uKCl7cmV0dXJuIGUobi5uKCksMil9LE06ZnVuY3Rpb24oKXtyZXR1cm4gcy5tb250aHNTaG9ydFtyLmdldE1vbnRoKCldfSxuOmZ1bmN0aW9uKCl7cmV0dXJuIHIuZ2V0TW9udGgoKSsxfSx0OmZ1bmN0aW9uKCl7cmV0dXJuIG5ldyBEYXRlKG4uWSgpLG4ubigpLDApLmdldERhdGUoKX0sTDpmdW5jdGlvbigpe3ZhciB0PW4uWSgpO3JldHVybiB0JTQ9PT0wJiZ0JTEwMCE9PTB8fHQlNDAwPT09MD8xOjB9LG86ZnVuY3Rpb24oKXt2YXIgdD1uLm4oKSxlPW4uVygpLHI9bi5ZKCk7cmV0dXJuIHIrKDEyPT09dCYmOT5lPzE6MT09PXQmJmU+OT8tMTowKX0sWTpmdW5jdGlvbigpe3JldHVybiByLmdldEZ1bGxZZWFyKCl9LHk6ZnVuY3Rpb24oKXtyZXR1cm4gbi5ZKCkudG9TdHJpbmcoKS5zbGljZSgtMil9LGE6ZnVuY3Rpb24oKXtyZXR1cm4gbi5BKCkudG9Mb3dlckNhc2UoKX0sQTpmdW5jdGlvbigpe3ZhciB0PW4uRygpPDEyPzA6MTtyZXR1cm4gcy5tZXJpZGllbVt0XX0sQjpmdW5jdGlvbigpe3ZhciB0PXIuZ2V0VVRDSG91cnMoKSppLG49NjAqci5nZXRVVENNaW51dGVzKCksYT1yLmdldFVUQ1NlY29uZHMoKTtyZXR1cm4gZShNYXRoLmZsb29yKCh0K24rYStpKS84Ni40KSUxZTMsMyl9LGc6ZnVuY3Rpb24oKXtyZXR1cm4gbi5HKCklMTJ8fDEyfSxHOmZ1bmN0aW9uKCl7cmV0dXJuIHIuZ2V0SG91cnMoKX0saDpmdW5jdGlvbigpe3JldHVybiBlKG4uZygpLDIpfSxIOmZ1bmN0aW9uKCl7cmV0dXJuIGUobi5HKCksMil9LGk6ZnVuY3Rpb24oKXtyZXR1cm4gZShyLmdldE1pbnV0ZXMoKSwyKX0sczpmdW5jdGlvbigpe3JldHVybiBlKHIuZ2V0U2Vjb25kcygpLDIpfSx1OmZ1bmN0aW9uKCl7cmV0dXJuIGUoMWUzKnIuZ2V0TWlsbGlzZWNvbmRzKCksNil9LGU6ZnVuY3Rpb24oKXt2YXIgdD0vXFwoKC4qKVxcKS8uZXhlYyhTdHJpbmcocikpWzFdO3JldHVybiB0fHxcIkNvb3JkaW5hdGVkIFVuaXZlcnNhbCBUaW1lXCJ9LEk6ZnVuY3Rpb24oKXt2YXIgdD1uZXcgRGF0ZShuLlkoKSwwKSxlPURhdGUuVVRDKG4uWSgpLDApLHI9bmV3IERhdGUobi5ZKCksNiksYT1EYXRlLlVUQyhuLlkoKSw2KTtyZXR1cm4gdC1lIT09ci1hPzE6MH0sTzpmdW5jdGlvbigpe3ZhciB0PXIuZ2V0VGltZXpvbmVPZmZzZXQoKSxuPU1hdGguYWJzKHQpO3JldHVybih0PjA/XCItXCI6XCIrXCIpK2UoMTAwKk1hdGguZmxvb3Iobi82MCkrbiU2MCw0KX0sUDpmdW5jdGlvbigpe3ZhciB0PW4uTygpO3JldHVybiB0LnN1YnN0cigwLDMpK1wiOlwiK3Quc3Vic3RyKDMsMil9LFQ6ZnVuY3Rpb24oKXt2YXIgdD0oU3RyaW5nKHIpLm1hdGNoKGEudHpQYXJ0cyl8fFtcIlwiXSkucG9wKCkucmVwbGFjZShhLnR6Q2xpcCxcIlwiKTtyZXR1cm4gdHx8XCJVVENcIn0sWjpmdW5jdGlvbigpe3JldHVybiA2MCotci5nZXRUaW1lem9uZU9mZnNldCgpfSxjOmZ1bmN0aW9uKCl7cmV0dXJuXCJZLW0tZFxcXFxUSDppOnNQXCIucmVwbGFjZShvLGMpfSxyOmZ1bmN0aW9uKCl7cmV0dXJuXCJELCBkIE0gWSBIOmk6cyBPXCIucmVwbGFjZShvLGMpfSxVOmZ1bmN0aW9uKCl7cmV0dXJuIHIuZ2V0VGltZSgpLzFlM3x8MH19LGModCx0KX0sZm9ybWF0RGF0ZTpmdW5jdGlvbih0LGUpe3ZhciByLG4sYSx1LGkscz10aGlzLG89XCJcIixjPVwiXFxcXFwiO2lmKFwic3RyaW5nXCI9PXR5cGVvZiB0JiYodD1zLnBhcnNlRGF0ZSh0LGUpLCF0KSlyZXR1cm4gbnVsbDtpZih0IGluc3RhbmNlb2YgRGF0ZSl7Zm9yKGE9ZS5sZW5ndGgscj0wO2E+cjtyKyspaT1lLmNoYXJBdChyKSxcIlNcIiE9PWkmJmkhPT1jJiYocj4wJiZlLmNoYXJBdChyLTEpPT09Yz9vKz1pOih1PXMucGFyc2VGb3JtYXQoaSx0KSxyIT09YS0xJiZzLmludFBhcnRzLnRlc3QoaSkmJlwiU1wiPT09ZS5jaGFyQXQocisxKSYmKG49cGFyc2VJbnQodSl8fDAsdSs9cy5kYXRlU2V0dGluZ3Mub3JkaW5hbChuKSksbys9dSkpO3JldHVybiBvfXJldHVyblwiXCJ9fX0oKTsvKipcbiAqIEBwcmVzZXJ2ZSBqUXVlcnkgRGF0ZVRpbWVQaWNrZXJcbiAqIEBob21lcGFnZSBodHRwOi8veGRzb2Z0Lm5ldC9qcXBsdWdpbnMvZGF0ZXRpbWVwaWNrZXIvXG4gKiBAYXV0aG9yIENodXB1cm5vdiBWYWxlcml5ICg8Y2h1cHVybm92QGdtYWlsLmNvbT4pXG4gKi9cblxuLyoqXG4gKiBAcGFyYW0ge2pRdWVyeX0gJFxuICovXG52YXIgZGF0ZXRpbWVwaWNrZXJGYWN0b3J5ID0gZnVuY3Rpb24gKCQpIHtcblx0J3VzZSBzdHJpY3QnO1xuXG5cdHZhciBkZWZhdWx0X29wdGlvbnMgID0ge1xuXHRcdGkxOG46IHtcblx0XHRcdGFyOiB7IC8vIEFyYWJpY1xuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcItmD2KfZhtmI2YYg2KfZhNir2KfZhtmKXCIsIFwi2LTYqNin2LdcIiwgXCLYotiw2KfYsVwiLCBcItmG2YrYs9in2YZcIiwgXCLZhdin2YrZiFwiLCBcItit2LLZitix2KfZhlwiLCBcItiq2YXZiNiyXCIsIFwi2KLYqFwiLCBcItij2YrZhNmI2YRcIiwgXCLYqti02LHZitmGINin2YTYo9mI2YRcIiwgXCLYqti02LHZitmGINin2YTYq9in2YbZilwiLCBcItmD2KfZhtmI2YYg2KfZhNij2YjZhFwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCLZhlwiLCBcItirXCIsIFwi2LlcIiwgXCLYrlwiLCBcItisXCIsIFwi2LNcIiwgXCLYrVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi2KfZhNij2K3Yr1wiLCBcItin2YTYp9ir2YbZitmGXCIsIFwi2KfZhNir2YTYp9ir2KfYoVwiLCBcItin2YTYo9ix2KjYudin2KFcIiwgXCLYp9mE2K7ZhdmK2LNcIiwgXCLYp9mE2KzZhdi52KlcIiwgXCLYp9mE2LPYqNiqXCIsIFwi2KfZhNij2K3Yr1wiXVxuXHRcdFx0fSxcblx0XHRcdHJvOiB7IC8vIFJvbWFuaWFuXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSWFudWFyaWVcIiwgXCJGZWJydWFyaWVcIiwgXCJNYXJ0aWVcIiwgXCJBcHJpbGllXCIsIFwiTWFpXCIsIFwiSXVuaWVcIiwgXCJJdWxpZVwiLCBcIkF1Z3VzdFwiLCBcIlNlcHRlbWJyaWVcIiwgXCJPY3RvbWJyaWVcIiwgXCJOb2llbWJyaWVcIiwgXCJEZWNlbWJyaWVcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiRHVcIiwgXCJMdVwiLCBcIk1hXCIsIFwiTWlcIiwgXCJKb1wiLCBcIlZpXCIsIFwiU8OiXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCJEdW1pbmljxINcIiwgXCJMdW5pXCIsIFwiTWFyxaNpXCIsIFwiTWllcmN1cmlcIiwgXCJKb2lcIiwgXCJWaW5lcmlcIiwgXCJTw6JtYsSDdMSDXCJdXG5cdFx0XHR9LFxuXHRcdFx0aWQ6IHsgLy8gSW5kb25lc2lhblxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbnVhcmlcIiwgXCJGZWJydWFyaVwiLCBcIk1hcmV0XCIsIFwiQXByaWxcIiwgXCJNZWlcIiwgXCJKdW5pXCIsIFwiSnVsaVwiLCBcIkFndXN0dXNcIiwgXCJTZXB0ZW1iZXJcIiwgXCJPa3RvYmVyXCIsIFwiTm92ZW1iZXJcIiwgXCJEZXNlbWJlclwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJNaW5cIiwgXCJTZW5cIiwgXCJTZWxcIiwgXCJSYWJcIiwgXCJLYW1cIiwgXCJKdW1cIiwgXCJTYWJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIk1pbmdndVwiLCBcIlNlbmluXCIsIFwiU2VsYXNhXCIsIFwiUmFidVwiLCBcIkthbWlzXCIsIFwiSnVtYXRcIiwgXCJTYWJ0dVwiXVxuXHRcdFx0fSxcblx0XHRcdGlzOiB7IC8vIEljZWxhbmRpY1xuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbsO6YXJcIiwgXCJGZWJyw7phclwiLCBcIk1hcnNcIiwgXCJBcHLDrWxcIiwgXCJNYcOtXCIsIFwiSsO6bsOtXCIsIFwiSsO6bMOtXCIsIFwiw4Fnw7pzdFwiLCBcIlNlcHRlbWJlclwiLCBcIk9rdMOzYmVyXCIsIFwiTsOzdmVtYmVyXCIsIFwiRGVzZW1iZXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiU3VuXCIsIFwiTcOhblwiLCBcIsOecmnDsFwiLCBcIk1pw7BcIiwgXCJGaW1cIiwgXCJGw7ZzXCIsIFwiTGF1XCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCJTdW5udWRhZ3VyXCIsIFwiTcOhbnVkYWd1clwiLCBcIsOecmnDsGp1ZGFndXJcIiwgXCJNacOwdmlrdWRhZ3VyXCIsIFwiRmltbXR1ZGFndXJcIiwgXCJGw7ZzdHVkYWd1clwiLCBcIkxhdWdhcmRhZ3VyXCJdXG5cdFx0XHR9LFxuXHRcdFx0Ymc6IHsgLy8gQnVsZ2FyaWFuXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwi0K/QvdGD0LDRgNC4XCIsIFwi0KTQtdCy0YDRg9Cw0YDQuFwiLCBcItCc0LDRgNGCXCIsIFwi0JDQv9GA0LjQu1wiLCBcItCc0LDQuVwiLCBcItCu0L3QuFwiLCBcItCu0LvQuFwiLCBcItCQ0LLQs9GD0YHRglwiLCBcItCh0LXQv9GC0LXQvNCy0YDQuFwiLCBcItCe0LrRgtC+0LzQstGA0LhcIiwgXCLQndC+0LXQvNCy0YDQuFwiLCBcItCU0LXQutC10LzQstGA0LhcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi0J3QtFwiLCBcItCf0L1cIiwgXCLQktGCXCIsIFwi0KHRgFwiLCBcItCn0YJcIiwgXCLQn9GCXCIsIFwi0KHQsVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi0J3QtdC00LXQu9GPXCIsIFwi0J/QvtC90LXQtNC10LvQvdC40LpcIiwgXCLQktGC0L7RgNC90LjQulwiLCBcItCh0YDRj9C00LBcIiwgXCLQp9C10YLQstGK0YDRgtGK0LpcIiwgXCLQn9C10YLRitC6XCIsIFwi0KHRitCx0L7RgtCwXCJdXG5cdFx0XHR9LFxuXHRcdFx0ZmE6IHsgLy8gUGVyc2lhbi9GYXJzaVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHQn2YHYsdmI2LHYr9uM2YYnLCAn2KfYsdiv24zYqNmH2LTYqicsICfYrtix2K/Yp9ivJywgJ9iq24zYsScsICfZhdix2K/Yp9ivJywgJ9i02YfYsduM2YjYsScsICfZhdmH2LEnLCAn2KLYqNin2YYnLCAn2KLYsNixJywgJ9iv24wnLCAn2KjZh9mF2YYnLCAn2KfYs9mB2YbYrydcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHQn24zaqdi02YbYqNmHJywgJ9iv2YjYtNmG2KjZhycsICfYs9mHINi02YbYqNmHJywgJ9qG2YfYp9ix2LTZhtio2YcnLCAn2b7Zhtis2LTZhtio2YcnLCAn2KzZhdi52YcnLCAn2LTZhtio2YcnXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi24zaqeKAjNi02YbYqNmHXCIsIFwi2K/ZiNi02YbYqNmHXCIsIFwi2LPZh+KAjNi02YbYqNmHXCIsIFwi2obZh9in2LHYtNmG2KjZh1wiLCBcItm+2YbYrOKAjNi02YbYqNmHXCIsIFwi2KzZhdi52YdcIiwgXCLYtNmG2KjZh1wiLCBcItuM2qnigIzYtNmG2KjZh1wiXVxuXHRcdFx0fSxcblx0XHRcdHJ1OiB7IC8vIFJ1c3NpYW5cblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0J9Cv0L3QstCw0YDRjCcsICfQpNC10LLRgNCw0LvRjCcsICfQnNCw0YDRgicsICfQkNC/0YDQtdC70YwnLCAn0JzQsNC5JywgJ9CY0Y7QvdGMJywgJ9CY0Y7Qu9GMJywgJ9CQ0LLQs9GD0YHRgicsICfQodC10L3RgtGP0LHRgNGMJywgJ9Ce0LrRgtGP0LHRgNGMJywgJ9Cd0L7Rj9Cx0YDRjCcsICfQlNC10LrQsNCx0YDRjCdcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcItCS0YFcIiwgXCLQn9C9XCIsIFwi0JLRglwiLCBcItCh0YBcIiwgXCLQp9GCXCIsIFwi0J/RglwiLCBcItCh0LFcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcItCS0L7RgdC60YDQtdGB0LXQvdGM0LVcIiwgXCLQn9C+0L3QtdC00LXQu9GM0L3QuNC6XCIsIFwi0JLRgtC+0YDQvdC40LpcIiwgXCLQodGA0LXQtNCwXCIsIFwi0KfQtdGC0LLQtdGA0LNcIiwgXCLQn9GP0YLQvdC40YbQsFwiLCBcItCh0YPQsdCx0L7RgtCwXCJdXG5cdFx0XHR9LFxuXHRcdFx0dWs6IHsgLy8gVWtyYWluaWFuXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdCfQodGW0YfQtdC90YwnLCAn0JvRjtGC0LjQuScsICfQkdC10YDQtdC30LXQvdGMJywgJ9Ca0LLRltGC0LXQvdGMJywgJ9Ci0YDQsNCy0LXQvdGMJywgJ9Cn0LXRgNCy0LXQvdGMJywgJ9Cb0LjQv9C10L3RjCcsICfQodC10YDQv9C10L3RjCcsICfQktC10YDQtdGB0LXQvdGMJywgJ9CW0L7QstGC0LXQvdGMJywgJ9Cb0LjRgdGC0L7Qv9Cw0LQnLCAn0JPRgNGD0LTQtdC90YwnXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCLQndC00LtcIiwgXCLQn9C90LRcIiwgXCLQktGC0YBcIiwgXCLQodGA0LRcIiwgXCLQp9GC0LJcIiwgXCLQn9GC0L1cIiwgXCLQodCx0YJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcItCd0LXQtNGW0LvRj1wiLCBcItCf0L7QvdC10LTRltC70L7QulwiLCBcItCS0ZbQstGC0L7RgNC+0LpcIiwgXCLQodC10YDQtdC00LBcIiwgXCLQp9C10YLQstC10YBcIiwgXCLQnyfRj9GC0L3QuNGG0Y9cIiwgXCLQodGD0LHQvtGC0LBcIl1cblx0XHRcdH0sXG5cdFx0XHRlbjogeyAvLyBFbmdsaXNoXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSmFudWFyeVwiLCBcIkZlYnJ1YXJ5XCIsIFwiTWFyY2hcIiwgXCJBcHJpbFwiLCBcIk1heVwiLCBcIkp1bmVcIiwgXCJKdWx5XCIsIFwiQXVndXN0XCIsIFwiU2VwdGVtYmVyXCIsIFwiT2N0b2JlclwiLCBcIk5vdmVtYmVyXCIsIFwiRGVjZW1iZXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiU3VuXCIsIFwiTW9uXCIsIFwiVHVlXCIsIFwiV2VkXCIsIFwiVGh1XCIsIFwiRnJpXCIsIFwiU2F0XCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCJTdW5kYXlcIiwgXCJNb25kYXlcIiwgXCJUdWVzZGF5XCIsIFwiV2VkbmVzZGF5XCIsIFwiVGh1cnNkYXlcIiwgXCJGcmlkYXlcIiwgXCJTYXR1cmRheVwiXVxuXHRcdFx0fSxcblx0XHRcdGVsOiB7IC8vIM6VzrvOu863zr3Ouc66zqxcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCLOmc6xzr3Ov8+FzqzPgc65zr/PglwiLCBcIs6mzrXOss+Bzr/Phc6sz4HOuc6/z4JcIiwgXCLOnM6sz4HPhM65zr/PglwiLCBcIs6Rz4DPgc6vzrvOuc6/z4JcIiwgXCLOnM6szrnOv8+CXCIsIFwizpnOv8+Nzr3Ouc6/z4JcIiwgXCLOmc6/z43Ou865zr/PglwiLCBcIs6Rz43Os86/z4XPg8+Ezr/PglwiLCBcIs6jzrXPgM+Ezq3OvM6yz4HOuc6/z4JcIiwgXCLOn866z4TPjs6yz4HOuc6/z4JcIiwgXCLOnc6/zq3OvM6yz4HOuc6/z4JcIiwgXCLOlM61zrrOrc68zrLPgc65zr/PglwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCLOms+Fz4FcIiwgXCLOlM61z4VcIiwgXCLOpM+BzrlcIiwgXCLOpM61z4RcIiwgXCLOoM61zrxcIiwgXCLOoM6xz4FcIiwgXCLOo86xzrJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIs6az4XPgc65zrHOus6uXCIsIFwizpTOtc+Fz4TOrc+BzrFcIiwgXCLOpM+Bzq/PhM63XCIsIFwizqTOtc+EzqzPgc+EzrdcIiwgXCLOoM6tzrzPgM+EzrdcIiwgXCLOoM6xz4HOsc+DzrrOtc+Fzq5cIiwgXCLOo86szrLOss6xz4TOv1wiXVxuXHRcdFx0fSxcblx0XHRcdGRlOiB7IC8vIEdlcm1hblxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHQnSmFudWFyJywgJ0ZlYnJ1YXInLCAnTcOkcnonLCAnQXByaWwnLCAnTWFpJywgJ0p1bmknLCAnSnVsaScsICdBdWd1c3QnLCAnU2VwdGVtYmVyJywgJ09rdG9iZXInLCAnTm92ZW1iZXInLCAnRGV6ZW1iZXInXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJTb1wiLCBcIk1vXCIsIFwiRGlcIiwgXCJNaVwiLCBcIkRvXCIsIFwiRnJcIiwgXCJTYVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiU29ubnRhZ1wiLCBcIk1vbnRhZ1wiLCBcIkRpZW5zdGFnXCIsIFwiTWl0dHdvY2hcIiwgXCJEb25uZXJzdGFnXCIsIFwiRnJlaXRhZ1wiLCBcIlNhbXN0YWdcIl1cblx0XHRcdH0sXG5cdFx0XHRubDogeyAvLyBEdXRjaFxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcImphbnVhcmlcIiwgXCJmZWJydWFyaVwiLCBcIm1hYXJ0XCIsIFwiYXByaWxcIiwgXCJtZWlcIiwgXCJqdW5pXCIsIFwianVsaVwiLCBcImF1Z3VzdHVzXCIsIFwic2VwdGVtYmVyXCIsIFwib2t0b2JlclwiLCBcIm5vdmVtYmVyXCIsIFwiZGVjZW1iZXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiem9cIiwgXCJtYVwiLCBcImRpXCIsIFwid29cIiwgXCJkb1wiLCBcInZyXCIsIFwiemFcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcInpvbmRhZ1wiLCBcIm1hYW5kYWdcIiwgXCJkaW5zZGFnXCIsIFwid29lbnNkYWdcIiwgXCJkb25kZXJkYWdcIiwgXCJ2cmlqZGFnXCIsIFwiemF0ZXJkYWdcIl1cblx0XHRcdH0sXG5cdFx0XHR0cjogeyAvLyBUdXJraXNoXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiT2Nha1wiLCBcIsWedWJhdFwiLCBcIk1hcnRcIiwgXCJOaXNhblwiLCBcIk1hecSxc1wiLCBcIkhhemlyYW5cIiwgXCJUZW1tdXpcIiwgXCJBxJ91c3Rvc1wiLCBcIkV5bMO8bFwiLCBcIkVraW1cIiwgXCJLYXPEsW1cIiwgXCJBcmFsxLFrXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIlBhelwiLCBcIlB0c1wiLCBcIlNhbFwiLCBcIsOHYXJcIiwgXCJQZXJcIiwgXCJDdW1cIiwgXCJDdHNcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIlBhemFyXCIsIFwiUGF6YXJ0ZXNpXCIsIFwiU2FsxLFcIiwgXCLDh2FyxZ9hbWJhXCIsIFwiUGVyxZ9lbWJlXCIsIFwiQ3VtYVwiLCBcIkN1bWFydGVzaVwiXVxuXHRcdFx0fSxcblx0XHRcdGZyOiB7IC8vRnJlbmNoXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSmFudmllclwiLCBcIkbDqXZyaWVyXCIsIFwiTWFyc1wiLCBcIkF2cmlsXCIsIFwiTWFpXCIsIFwiSnVpblwiLCBcIkp1aWxsZXRcIiwgXCJBb8O7dFwiLCBcIlNlcHRlbWJyZVwiLCBcIk9jdG9icmVcIiwgXCJOb3ZlbWJyZVwiLCBcIkTDqWNlbWJyZVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJEaW1cIiwgXCJMdW5cIiwgXCJNYXJcIiwgXCJNZXJcIiwgXCJKZXVcIiwgXCJWZW5cIiwgXCJTYW1cIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcImRpbWFuY2hlXCIsIFwibHVuZGlcIiwgXCJtYXJkaVwiLCBcIm1lcmNyZWRpXCIsIFwiamV1ZGlcIiwgXCJ2ZW5kcmVkaVwiLCBcInNhbWVkaVwiXVxuXHRcdFx0fSxcblx0XHRcdGVzOiB7IC8vIFNwYW5pc2hcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJFbmVyb1wiLCBcIkZlYnJlcm9cIiwgXCJNYXJ6b1wiLCBcIkFicmlsXCIsIFwiTWF5b1wiLCBcIkp1bmlvXCIsIFwiSnVsaW9cIiwgXCJBZ29zdG9cIiwgXCJTZXB0aWVtYnJlXCIsIFwiT2N0dWJyZVwiLCBcIk5vdmllbWJyZVwiLCBcIkRpY2llbWJyZVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJEb21cIiwgXCJMdW5cIiwgXCJNYXJcIiwgXCJNacOpXCIsIFwiSnVlXCIsIFwiVmllXCIsIFwiU8OhYlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiRG9taW5nb1wiLCBcIkx1bmVzXCIsIFwiTWFydGVzXCIsIFwiTWnDqXJjb2xlc1wiLCBcIkp1ZXZlc1wiLCBcIlZpZXJuZXNcIiwgXCJTw6FiYWRvXCJdXG5cdFx0XHR9LFxuXHRcdFx0dGg6IHsgLy8gVGhhaVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHQn4Lih4LiB4Lij4Liy4LiE4LihJywgJ+C4geC4uOC4oeC4oOC4suC4nuC4seC4meC4mOC5jCcsICfguKHguLXguJnguLLguITguKEnLCAn4LmA4Lih4Lip4Liy4Lii4LiZJywgJ+C4nuC4pOC4qeC4oOC4suC4hOC4oScsICfguKHguLTguJbguLjguJnguLLguKLguJknLCAn4LiB4Lij4LiB4LiO4Liy4LiE4LihJywgJ+C4quC4tOC4h+C4q+C4suC4hOC4oScsICfguIHguLHguJnguKLguLLguKLguJknLCAn4LiV4Li44Lil4Liy4LiE4LihJywgJ+C4nuC4pOC4qOC4iOC4tOC4geC4suC4ouC4mScsICfguJjguLHguJnguKfguLLguITguKEnXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0J+C4reC4si4nLCAn4LiILicsICfguK0uJywgJ+C4ni4nLCAn4Lie4LikLicsICfguKguJywgJ+C4qi4nXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi4Lit4Liy4LiX4Li04LiV4Lii4LmMXCIsIFwi4LiI4Lix4LiZ4LiX4Lij4LmMXCIsIFwi4Lit4Lix4LiH4LiE4Liy4LijXCIsIFwi4Lie4Li44LiYXCIsIFwi4Lie4Lik4Lir4Lix4LiqXCIsIFwi4Lio4Li44LiB4Lij4LmMXCIsIFwi4LmA4Liq4Liy4Lij4LmMXCIsIFwi4Lit4Liy4LiX4Li04LiV4Lii4LmMXCJdXG5cdFx0XHR9LFxuXHRcdFx0cGw6IHsgLy8gUG9saXNoXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwic3R5Y3plxYRcIiwgXCJsdXR5XCIsIFwibWFyemVjXCIsIFwia3dpZWNpZcWEXCIsIFwibWFqXCIsIFwiY3plcndpZWNcIiwgXCJsaXBpZWNcIiwgXCJzaWVycGllxYRcIiwgXCJ3cnplc2llxYRcIiwgXCJwYcW6ZHppZXJuaWtcIiwgXCJsaXN0b3BhZFwiLCBcImdydWR6aWXFhFwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJuZFwiLCBcInBuXCIsIFwid3RcIiwgXCLFm3JcIiwgXCJjelwiLCBcInB0XCIsIFwic2JcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIm5pZWR6aWVsYVwiLCBcInBvbmllZHppYcWCZWtcIiwgXCJ3dG9yZWtcIiwgXCLFm3JvZGFcIiwgXCJjendhcnRla1wiLCBcInBpxIV0ZWtcIiwgXCJzb2JvdGFcIl1cblx0XHRcdH0sXG5cdFx0XHRwdDogeyAvLyBQb3J0dWd1ZXNlXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSmFuZWlyb1wiLCBcIkZldmVyZWlyb1wiLCBcIk1hcsOnb1wiLCBcIkFicmlsXCIsIFwiTWFpb1wiLCBcIkp1bmhvXCIsIFwiSnVsaG9cIiwgXCJBZ29zdG9cIiwgXCJTZXRlbWJyb1wiLCBcIk91dHVicm9cIiwgXCJOb3ZlbWJyb1wiLCBcIkRlemVtYnJvXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIkRvbVwiLCBcIlNlZ1wiLCBcIlRlclwiLCBcIlF1YVwiLCBcIlF1aVwiLCBcIlNleFwiLCBcIlNhYlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiRG9taW5nb1wiLCBcIlNlZ3VuZGFcIiwgXCJUZXLDp2FcIiwgXCJRdWFydGFcIiwgXCJRdWludGFcIiwgXCJTZXh0YVwiLCBcIlPDoWJhZG9cIl1cblx0XHRcdH0sXG5cdFx0XHRjaDogeyAvLyBTaW1wbGlmaWVkIENoaW5lc2Vcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCLkuIDmnIhcIiwgXCLkuozmnIhcIiwgXCLkuInmnIhcIiwgXCLlm5vmnIhcIiwgXCLkupTmnIhcIiwgXCLlha3mnIhcIiwgXCLkuIPmnIhcIiwgXCLlhavmnIhcIiwgXCLkuZ3mnIhcIiwgXCLljYHmnIhcIiwgXCLljYHkuIDmnIhcIiwgXCLljYHkuozmnIhcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi5pelXCIsIFwi5LiAXCIsIFwi5LqMXCIsIFwi5LiJXCIsIFwi5ZubXCIsIFwi5LqUXCIsIFwi5YWtXCJcblx0XHRcdFx0XVxuXHRcdFx0fSxcblx0XHRcdHNlOiB7IC8vIFN3ZWRpc2hcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJKYW51YXJpXCIsIFwiRmVicnVhcmlcIiwgXCJNYXJzXCIsIFwiQXByaWxcIiwgXCJNYWpcIiwgXCJKdW5pXCIsIFwiSnVsaVwiLCBcIkF1Z3VzdGlcIiwgXCJTZXB0ZW1iZXJcIiwgIFwiT2t0b2JlclwiLCBcIk5vdmVtYmVyXCIsIFwiRGVjZW1iZXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiU8O2blwiLCBcIk3DpW5cIiwgXCJUaXNcIiwgXCJPbnNcIiwgXCJUb3JcIiwgXCJGcmVcIiwgXCJMw7ZyXCJcblx0XHRcdFx0XVxuXHRcdFx0fSxcblx0XHRcdGttOiB7IC8vIEtobWVyICjhnpfhnrbhnp/hnrbhnoHhn5Lhnpjhn4LhnpopXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwi4Z6Y4Z6A4Z6a4Z624oCLXCIsIFwi4Z6A4Z674Z6Y4Z+S4Z6X4Z+IXCIsIFwi4Z6Y4Z634Z6T4Z624oCLXCIsIFwi4Z6Y4Z+B4Z6f4Z624oCLXCIsIFwi4Z6n4Z6f4Z6X4Z624oCLXCIsIFwi4Z6Y4Z634Z6Q4Z674Z6T4Z624oCLXCIsIFwi4Z6A4Z6A4Z+S4Z6A4Z6K4Z624oCLXCIsIFwi4Z6f4Z644Z6g4Z624oCLXCIsIFwi4Z6A4Z6J4Z+S4Z6J4Z624oCLXCIsIFwi4Z6P4Z674Z6b4Z624oCLXCIsIFwi4Z6c4Z634Z6F4Z+S4Z6G4Z634Z6A4Z62XCIsIFwi4Z6S4Z+S4Z6T4Z684oCLXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcIuGeouGetuGekeGet+KAi1wiLCBcIuGeheGfkOGek+GfkuGekeKAi1wiLCBcIuGeouGehOGfkuGeguGetuGemuKAi1wiLCBcIuGeluGeu+GekuKAi1wiLCBcIuGeluGfkuGemuGeoOKAi+KAi1wiLCBcIuGen+Geu+GegOGfkuGemuKAi1wiLCBcIuGen+GfheGemuGfjVwiXSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLhnqLhnrbhnpHhnrfhno/hn5LhnpnigItcIiwgXCLhnoXhn5DhnpPhn5LhnpHigItcIiwgXCLhnqLhnoThn5LhnoLhnrbhnprigItcIiwgXCLhnpbhnrvhnpLigItcIiwgXCLhnpbhn5LhnprhnqDhnp/hn5LhnpThno/hnrfhn43igItcIiwgXCLhnp/hnrvhnoDhn5LhnprigItcIiwgXCLhnp/hn4Xhnprhn41cIl1cblx0XHRcdH0sXG5cdFx0XHRrcjogeyAvLyBLb3JlYW5cblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCIx7JuUXCIsIFwiMuyblFwiLCBcIjPsm5RcIiwgXCI07JuUXCIsIFwiNeyblFwiLCBcIjbsm5RcIiwgXCI37JuUXCIsIFwiOOyblFwiLCBcIjnsm5RcIiwgXCIxMOyblFwiLCBcIjEx7JuUXCIsIFwiMTLsm5RcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi7J28XCIsIFwi7JuUXCIsIFwi7ZmUXCIsIFwi7IiYXCIsIFwi66qpXCIsIFwi6riIXCIsIFwi7YagXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLsnbzsmpTsnbxcIiwgXCLsm5TsmpTsnbxcIiwgXCLtmZTsmpTsnbxcIiwgXCLsiJjsmpTsnbxcIiwgXCLrqqnsmpTsnbxcIiwgXCLquIjsmpTsnbxcIiwgXCLthqDsmpTsnbxcIl1cblx0XHRcdH0sXG5cdFx0XHRpdDogeyAvLyBJdGFsaWFuXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiR2VubmFpb1wiLCBcIkZlYmJyYWlvXCIsIFwiTWFyem9cIiwgXCJBcHJpbGVcIiwgXCJNYWdnaW9cIiwgXCJHaXVnbm9cIiwgXCJMdWdsaW9cIiwgXCJBZ29zdG9cIiwgXCJTZXR0ZW1icmVcIiwgXCJPdHRvYnJlXCIsIFwiTm92ZW1icmVcIiwgXCJEaWNlbWJyZVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJEb21cIiwgXCJMdW5cIiwgXCJNYXJcIiwgXCJNZXJcIiwgXCJHaW9cIiwgXCJWZW5cIiwgXCJTYWJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIkRvbWVuaWNhXCIsIFwiTHVuZWTDrFwiLCBcIk1hcnRlZMOsXCIsIFwiTWVyY29sZWTDrFwiLCBcIkdpb3ZlZMOsXCIsIFwiVmVuZXJkw6xcIiwgXCJTYWJhdG9cIl1cblx0XHRcdH0sXG5cdFx0XHRkYTogeyAvLyBEYW5za1xuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbnVhclwiLCBcIkZlYnJ1YXJcIiwgXCJNYXJ0c1wiLCBcIkFwcmlsXCIsIFwiTWFqXCIsIFwiSnVuaVwiLCBcIkp1bGlcIiwgXCJBdWd1c3RcIiwgXCJTZXB0ZW1iZXJcIiwgXCJPa3RvYmVyXCIsIFwiTm92ZW1iZXJcIiwgXCJEZWNlbWJlclwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJTw7huXCIsIFwiTWFuXCIsIFwiVGlyXCIsIFwiT25zXCIsIFwiVG9yXCIsIFwiRnJlXCIsIFwiTMO4clwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wic8O4bmRhZ1wiLCBcIm1hbmRhZ1wiLCBcInRpcnNkYWdcIiwgXCJvbnNkYWdcIiwgXCJ0b3JzZGFnXCIsIFwiZnJlZGFnXCIsIFwibMO4cmRhZ1wiXVxuXHRcdFx0fSxcblx0XHRcdG5vOiB7IC8vIE5vcndlZ2lhblxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbnVhclwiLCBcIkZlYnJ1YXJcIiwgXCJNYXJzXCIsIFwiQXByaWxcIiwgXCJNYWlcIiwgXCJKdW5pXCIsIFwiSnVsaVwiLCBcIkF1Z3VzdFwiLCBcIlNlcHRlbWJlclwiLCBcIk9rdG9iZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlc2VtYmVyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIlPDuG5cIiwgXCJNYW5cIiwgXCJUaXJcIiwgXCJPbnNcIiwgXCJUb3JcIiwgXCJGcmVcIiwgXCJMw7hyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbJ1PDuG5kYWcnLCAnTWFuZGFnJywgJ1RpcnNkYWcnLCAnT25zZGFnJywgJ1RvcnNkYWcnLCAnRnJlZGFnJywgJ0zDuHJkYWcnXVxuXHRcdFx0fSxcblx0XHRcdGphOiB7IC8vIEphcGFuZXNlXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiMeaciFwiLCBcIjLmnIhcIiwgXCIz5pyIXCIsIFwiNOaciFwiLCBcIjXmnIhcIiwgXCI25pyIXCIsIFwiN+aciFwiLCBcIjjmnIhcIiwgXCI55pyIXCIsIFwiMTDmnIhcIiwgXCIxMeaciFwiLCBcIjEy5pyIXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIuaXpVwiLCBcIuaciFwiLCBcIueBq1wiLCBcIuawtFwiLCBcIuacqFwiLCBcIumHkVwiLCBcIuWcn1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi5pel5pucXCIsIFwi5pyI5pucXCIsIFwi54Gr5pucXCIsIFwi5rC05pucXCIsIFwi5pyo5pucXCIsIFwi6YeR5pucXCIsIFwi5Zyf5pucXCJdXG5cdFx0XHR9LFxuXHRcdFx0dmk6IHsgLy8gVmlldG5hbWVzZVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIlRow6FuZyAxXCIsIFwiVGjDoW5nIDJcIiwgXCJUaMOhbmcgM1wiLCBcIlRow6FuZyA0XCIsIFwiVGjDoW5nIDVcIiwgXCJUaMOhbmcgNlwiLCBcIlRow6FuZyA3XCIsIFwiVGjDoW5nIDhcIiwgXCJUaMOhbmcgOVwiLCBcIlRow6FuZyAxMFwiLCBcIlRow6FuZyAxMVwiLCBcIlRow6FuZyAxMlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJDTlwiLCBcIlQyXCIsIFwiVDNcIiwgXCJUNFwiLCBcIlQ1XCIsIFwiVDZcIiwgXCJUN1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiQ2jhu6cgbmjhuq10XCIsIFwiVGjhu6kgaGFpXCIsIFwiVGjhu6kgYmFcIiwgXCJUaOG7qSB0xrBcIiwgXCJUaOG7qSBuxINtXCIsIFwiVGjhu6kgc8OhdVwiLCBcIlRo4bupIGLhuqN5XCJdXG5cdFx0XHR9LFxuXHRcdFx0c2w6IHsgLy8gU2xvdmVuxaHEjWluYVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbnVhclwiLCBcIkZlYnJ1YXJcIiwgXCJNYXJlY1wiLCBcIkFwcmlsXCIsIFwiTWFqXCIsIFwiSnVuaWpcIiwgXCJKdWxpalwiLCBcIkF2Z3VzdFwiLCBcIlNlcHRlbWJlclwiLCBcIk9rdG9iZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlY2VtYmVyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIk5lZFwiLCBcIlBvblwiLCBcIlRvclwiLCBcIlNyZVwiLCBcIsSMZXRcIiwgXCJQZXRcIiwgXCJTb2JcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIk5lZGVsamFcIiwgXCJQb25lZGVsamVrXCIsIFwiVG9yZWtcIiwgXCJTcmVkYVwiLCBcIsSMZXRydGVrXCIsIFwiUGV0ZWtcIiwgXCJTb2JvdGFcIl1cblx0XHRcdH0sXG5cdFx0XHRjczogeyAvLyDEjGXFoXRpbmFcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJMZWRlblwiLCBcIsOabm9yXCIsIFwiQsWZZXplblwiLCBcIkR1YmVuXCIsIFwiS3bEm3RlblwiLCBcIsSMZXJ2ZW5cIiwgXCLEjGVydmVuZWNcIiwgXCJTcnBlblwiLCBcIlrDocWZw61cIiwgXCLFmMOtamVuXCIsIFwiTGlzdG9wYWRcIiwgXCJQcm9zaW5lY1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJOZVwiLCBcIlBvXCIsIFwiw5p0XCIsIFwiU3RcIiwgXCLEjHRcIiwgXCJQw6FcIiwgXCJTb1wiXG5cdFx0XHRcdF1cblx0XHRcdH0sXG5cdFx0XHRodTogeyAvLyBIdW5nYXJpYW5cblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJKYW51w6FyXCIsIFwiRmVicnXDoXJcIiwgXCJNw6FyY2l1c1wiLCBcIsOBcHJpbGlzXCIsIFwiTcOhanVzXCIsIFwiSsO6bml1c1wiLCBcIkrDumxpdXNcIiwgXCJBdWd1c3p0dXNcIiwgXCJTemVwdGVtYmVyXCIsIFwiT2t0w7NiZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlY2VtYmVyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIlZhXCIsIFwiSMOpXCIsIFwiS2VcIiwgXCJTemVcIiwgXCJDc1wiLCBcIlDDqVwiLCBcIlN6b1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1widmFzw6FybmFwXCIsIFwiaMOpdGbFkVwiLCBcImtlZGRcIiwgXCJzemVyZGFcIiwgXCJjc8O8dMO2cnTDtmtcIiwgXCJww6ludGVrXCIsIFwic3pvbWJhdFwiXVxuXHRcdFx0fSxcblx0XHRcdGF6OiB7IC8vQXplcmJhaWphbmlhbiAoQXplcmkpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiWWFudmFyXCIsIFwiRmV2cmFsXCIsIFwiTWFydFwiLCBcIkFwcmVsXCIsIFwiTWF5XCIsIFwiSXl1blwiLCBcIkl5dWxcIiwgXCJBdnF1c3RcIiwgXCJTZW50eWFiclwiLCBcIk9rdHlhYnJcIiwgXCJOb3lhYnJcIiwgXCJEZWthYnJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiQlwiLCBcIkJlXCIsIFwiw4dhXCIsIFwiw4dcIiwgXCJDYVwiLCBcIkNcIiwgXCLFnlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiQmF6YXJcIiwgXCJCYXphciBlcnTJmXNpXCIsIFwiw4fJmXLFn8mZbmLJmSBheMWfYW3EsVwiLCBcIsOHyZlyxZ/JmW5iyZlcIiwgXCJDw7xtyZkgYXjFn2FtxLFcIiwgXCJDw7xtyZlcIiwgXCLFnsmZbmLJmVwiXVxuXHRcdFx0fSxcblx0XHRcdGJzOiB7IC8vQm9zYW5za2lcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJKYW51YXJcIiwgXCJGZWJydWFyXCIsIFwiTWFydFwiLCBcIkFwcmlsXCIsIFwiTWFqXCIsIFwiSnVuXCIsIFwiSnVsXCIsIFwiQXZndXN0XCIsIFwiU2VwdGVtYmFyXCIsIFwiT2t0b2JhclwiLCBcIk5vdmVtYmFyXCIsIFwiRGVjZW1iYXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiTmVkXCIsIFwiUG9uXCIsIFwiVXRvXCIsIFwiU3JpXCIsIFwixIxldFwiLCBcIlBldFwiLCBcIlN1YlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiTmVkamVsamFcIixcIlBvbmVkamVsamFrXCIsIFwiVXRvcmFrXCIsIFwiU3JpamVkYVwiLCBcIsSMZXR2cnRha1wiLCBcIlBldGFrXCIsIFwiU3Vib3RhXCJdXG5cdFx0XHR9LFxuXHRcdFx0Y2E6IHsgLy9DYXRhbMOgXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiR2VuZXJcIiwgXCJGZWJyZXJcIiwgXCJNYXLDp1wiLCBcIkFicmlsXCIsIFwiTWFpZ1wiLCBcIkp1bnlcIiwgXCJKdWxpb2xcIiwgXCJBZ29zdFwiLCBcIlNldGVtYnJlXCIsIFwiT2N0dWJyZVwiLCBcIk5vdmVtYnJlXCIsIFwiRGVzZW1icmVcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiRGdcIiwgXCJEbFwiLCBcIkR0XCIsIFwiRGNcIiwgXCJEalwiLCBcIkR2XCIsIFwiRHNcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIkRpdW1lbmdlXCIsIFwiRGlsbHVuc1wiLCBcIkRpbWFydHNcIiwgXCJEaW1lY3Jlc1wiLCBcIkRpam91c1wiLCBcIkRpdmVuZHJlc1wiLCBcIkRpc3NhYnRlXCJdXG5cdFx0XHR9LFxuXHRcdFx0J2VuLUdCJzogeyAvL0VuZ2xpc2ggKEJyaXRpc2gpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSmFudWFyeVwiLCBcIkZlYnJ1YXJ5XCIsIFwiTWFyY2hcIiwgXCJBcHJpbFwiLCBcIk1heVwiLCBcIkp1bmVcIiwgXCJKdWx5XCIsIFwiQXVndXN0XCIsIFwiU2VwdGVtYmVyXCIsIFwiT2N0b2JlclwiLCBcIk5vdmVtYmVyXCIsIFwiRGVjZW1iZXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiU3VuXCIsIFwiTW9uXCIsIFwiVHVlXCIsIFwiV2VkXCIsIFwiVGh1XCIsIFwiRnJpXCIsIFwiU2F0XCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCJTdW5kYXlcIiwgXCJNb25kYXlcIiwgXCJUdWVzZGF5XCIsIFwiV2VkbmVzZGF5XCIsIFwiVGh1cnNkYXlcIiwgXCJGcmlkYXlcIiwgXCJTYXR1cmRheVwiXVxuXHRcdFx0fSxcblx0XHRcdGV0OiB7IC8vXCJFZXN0aVwiXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSmFhbnVhclwiLCBcIlZlZWJydWFyXCIsIFwiTcOkcnRzXCIsIFwiQXByaWxsXCIsIFwiTWFpXCIsIFwiSnV1bmlcIiwgXCJKdXVsaVwiLCBcIkF1Z3VzdFwiLCBcIlNlcHRlbWJlclwiLCBcIk9rdG9vYmVyXCIsIFwiTm92ZW1iZXJcIiwgXCJEZXRzZW1iZXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiUFwiLCBcIkVcIiwgXCJUXCIsIFwiS1wiLCBcIk5cIiwgXCJSXCIsIFwiTFwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiUMO8aGFww6RldlwiLCBcIkVzbWFzcMOkZXZcIiwgXCJUZWlzaXDDpGV2XCIsIFwiS29sbWFww6RldlwiLCBcIk5lbGphcMOkZXZcIiwgXCJSZWVkZVwiLCBcIkxhdXDDpGV2XCJdXG5cdFx0XHR9LFxuXHRcdFx0ZXU6IHsgLy9FdXNrYXJhXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiVXJ0YXJyaWxhXCIsIFwiT3RzYWlsYVwiLCBcIk1hcnR4b2FcIiwgXCJBcGlyaWxhXCIsIFwiTWFpYXR6YVwiLCBcIkVrYWluYVwiLCBcIlV6dGFpbGFcIiwgXCJBYnV6dHVhXCIsIFwiSXJhaWxhXCIsIFwiVXJyaWFcIiwgXCJBemFyb2FcIiwgXCJBYmVuZHVhXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIklnLlwiLCBcIkFsLlwiLCBcIkFyLlwiLCBcIkF6LlwiLCBcIk9nLlwiLCBcIk9yLlwiLCBcIkxhLlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogWydJZ2FuZGVhJywgJ0FzdGVsZWhlbmEnLCAnQXN0ZWFydGVhJywgJ0FzdGVhemtlbmEnLCAnT3N0ZWd1bmEnLCAnT3N0aXJhbGEnLCAnTGFydW5iYXRhJ11cblx0XHRcdH0sXG5cdFx0XHRmaTogeyAvL0Zpbm5pc2ggKFN1b21pKVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIlRhbW1pa3V1XCIsIFwiSGVsbWlrdXVcIiwgXCJNYWFsaXNrdXVcIiwgXCJIdWh0aWt1dVwiLCBcIlRvdWtva3V1XCIsIFwiS2Vzw6RrdXVcIiwgXCJIZWluw6RrdXVcIiwgXCJFbG9rdXVcIiwgXCJTeXlza3V1XCIsIFwiTG9rYWt1dVwiLCBcIk1hcnJhc2t1dVwiLCBcIkpvdWx1a3V1XCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIlN1XCIsIFwiTWFcIiwgXCJUaVwiLCBcIktlXCIsIFwiVG9cIiwgXCJQZVwiLCBcIkxhXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCJzdW5udW50YWlcIiwgXCJtYWFuYW50YWlcIiwgXCJ0aWlzdGFpXCIsIFwia2Vza2l2aWlra29cIiwgXCJ0b3JzdGFpXCIsIFwicGVyamFudGFpXCIsIFwibGF1YW50YWlcIl1cblx0XHRcdH0sXG5cdFx0XHRnbDogeyAvL0dhbGVnb1xuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIlhhblwiLCBcIkZlYlwiLCBcIk1helwiLCBcIkFiclwiLCBcIk1haVwiLCBcIlh1blwiLCBcIlh1bFwiLCBcIkFnb1wiLCBcIlNldFwiLCBcIk91dFwiLCBcIk5vdlwiLCBcIkRlY1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJEb21cIiwgXCJMdW5cIiwgXCJNYXJcIiwgXCJNZXJcIiwgXCJYb3ZcIiwgXCJWZW5cIiwgXCJTYWJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIkRvbWluZ29cIiwgXCJMdW5zXCIsIFwiTWFydGVzXCIsIFwiTcOpcmNvcmVzXCIsIFwiWG92ZXNcIiwgXCJWZW5yZXNcIiwgXCJTw6FiYWRvXCJdXG5cdFx0XHR9LFxuXHRcdFx0aHI6IHsgLy9IcnZhdHNraVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIlNpamXEjWFualwiLCBcIlZlbGphxI1hXCIsIFwiT8W+dWpha1wiLCBcIlRyYXZhbmpcIiwgXCJTdmliYW5qXCIsIFwiTGlwYW5qXCIsIFwiU3JwYW5qXCIsIFwiS29sb3ZvelwiLCBcIlJ1amFuXCIsIFwiTGlzdG9wYWRcIiwgXCJTdHVkZW5pXCIsIFwiUHJvc2luYWNcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiTmVkXCIsIFwiUG9uXCIsIFwiVXRvXCIsIFwiU3JpXCIsIFwixIxldFwiLCBcIlBldFwiLCBcIlN1YlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiTmVkamVsamFcIiwgXCJQb25lZGplbGpha1wiLCBcIlV0b3Jha1wiLCBcIlNyaWplZGFcIiwgXCLEjGV0dnJ0YWtcIiwgXCJQZXRha1wiLCBcIlN1Ym90YVwiXVxuXHRcdFx0fSxcblx0XHRcdGtvOiB7IC8vS29yZWFuICjtlZzqta3slrQpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiMeyblFwiLCBcIjLsm5RcIiwgXCIz7JuUXCIsIFwiNOyblFwiLCBcIjXsm5RcIiwgXCI27JuUXCIsIFwiN+yblFwiLCBcIjjsm5RcIiwgXCI57JuUXCIsIFwiMTDsm5RcIiwgXCIxMeyblFwiLCBcIjEy7JuUXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIuydvFwiLCBcIuyblFwiLCBcIu2ZlFwiLCBcIuyImFwiLCBcIuuqqVwiLCBcIuq4iFwiLCBcIu2GoFwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi7J287JqU7J28XCIsIFwi7JuU7JqU7J28XCIsIFwi7ZmU7JqU7J28XCIsIFwi7IiY7JqU7J28XCIsIFwi66qp7JqU7J28XCIsIFwi6riI7JqU7J28XCIsIFwi7Yag7JqU7J28XCJdXG5cdFx0XHR9LFxuXHRcdFx0bHQ6IHsgLy9MaXRodWFuaWFuIChsaWV0dXZpxbMpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiU2F1c2lvXCIsIFwiVmFzYXJpb1wiLCBcIktvdm9cIiwgXCJCYWxhbmTFvmlvXCIsIFwiR2VndcW+xJdzXCIsIFwiQmlyxb5lbGlvXCIsIFwiTGllcG9zXCIsIFwiUnVncGrFq8SNaW9cIiwgXCJSdWdzxJdqb1wiLCBcIlNwYWxpb1wiLCBcIkxhcGtyacSNaW9cIiwgXCJHcnVvZMW+aW9cIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiU2VrXCIsIFwiUGlyXCIsIFwiQW50XCIsIFwiVHJlXCIsIFwiS2V0XCIsIFwiUGVuXCIsIFwixaBlxaFcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIlNla21hZGllbmlzXCIsIFwiUGlybWFkaWVuaXNcIiwgXCJBbnRyYWRpZW5pc1wiLCBcIlRyZcSNaWFkaWVuaXNcIiwgXCJLZXR2aXJ0YWRpZW5pc1wiLCBcIlBlbmt0YWRpZW5pc1wiLCBcIsWgZcWhdGFkaWVuaXNcIl1cblx0XHRcdH0sXG5cdFx0XHRsdjogeyAvL0xhdHZpYW4gKExhdHZpZcWhdSlcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJKYW52xIFyaXNcIiwgXCJGZWJydcSBcmlzXCIsIFwiTWFydHNcIiwgXCJBcHLEq2xpcyBcIiwgXCJNYWlqc1wiLCBcIkrFq25panNcIiwgXCJKxatsaWpzXCIsIFwiQXVndXN0c1wiLCBcIlNlcHRlbWJyaXNcIiwgXCJPa3RvYnJpc1wiLCBcIk5vdmVtYnJpc1wiLCBcIkRlY2VtYnJpc1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2Vla1Nob3J0OiBbXG5cdFx0XHRcdFx0XCJTdlwiLCBcIlByXCIsIFwiT3RcIiwgXCJUclwiLCBcIkN0XCIsIFwiUGtcIiwgXCJTdFwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiU3bEk3RkaWVuYVwiLCBcIlBpcm1kaWVuYVwiLCBcIk90cmRpZW5hXCIsIFwiVHJlxaFkaWVuYVwiLCBcIkNldHVydGRpZW5hXCIsIFwiUGlla3RkaWVuYVwiLCBcIlNlc3RkaWVuYVwiXVxuXHRcdFx0fSxcblx0XHRcdG1rOiB7IC8vTWFjZWRvbmlhbiAo0JzQsNC60LXQtNC+0L3RgdC60LgpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwi0ZjQsNC90YPQsNGA0LhcIiwgXCLRhNC10LLRgNGD0LDRgNC4XCIsIFwi0LzQsNGA0YJcIiwgXCLQsNC/0YDQuNC7XCIsIFwi0LzQsNGYXCIsIFwi0ZjRg9C90LhcIiwgXCLRmNGD0LvQuFwiLCBcItCw0LLQs9GD0YHRglwiLCBcItGB0LXQv9GC0LXQvNCy0YDQuFwiLCBcItC+0LrRgtC+0LzQstGA0LhcIiwgXCLQvdC+0LXQvNCy0YDQuFwiLCBcItC00LXQutC10LzQstGA0LhcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi0L3QtdC0XCIsIFwi0L/QvtC9XCIsIFwi0LLRgtC+XCIsIFwi0YHRgNC1XCIsIFwi0YfQtdGCXCIsIFwi0L/QtdGCXCIsIFwi0YHQsNCxXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLQndC10LTQtdC70LBcIiwgXCLQn9C+0L3QtdC00LXQu9C90LjQulwiLCBcItCS0YLQvtGA0L3QuNC6XCIsIFwi0KHRgNC10LTQsFwiLCBcItCn0LXRgtCy0YDRgtC+0LpcIiwgXCLQn9C10YLQvtC6XCIsIFwi0KHQsNCx0L7RgtCwXCJdXG5cdFx0XHR9LFxuXHRcdFx0bW46IHsgLy9Nb25nb2xpYW4gKNCc0L7QvdCz0L7Quylcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCIxLdGAINGB0LDRgFwiLCBcIjIt0YAg0YHQsNGAXCIsIFwiMy3RgCDRgdCw0YBcIiwgXCI0LdGAINGB0LDRgFwiLCBcIjUt0YAg0YHQsNGAXCIsIFwiNi3RgCDRgdCw0YBcIiwgXCI3LdGAINGB0LDRgFwiLCBcIjgt0YAg0YHQsNGAXCIsIFwiOS3RgCDRgdCw0YBcIiwgXCIxMC3RgCDRgdCw0YBcIiwgXCIxMS3RgCDRgdCw0YBcIiwgXCIxMi3RgCDRgdCw0YBcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi0JTQsNCyXCIsIFwi0JzRj9CzXCIsIFwi0JvRhdCwXCIsIFwi0J/Sr9GAXCIsIFwi0JHRgdC9XCIsIFwi0JHRj9C8XCIsIFwi0J3Rj9C8XCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLQlNCw0LLQsNCwXCIsIFwi0JzRj9Cz0LzQsNGAXCIsIFwi0JvRhdCw0LPQstCwXCIsIFwi0J/Sr9GA0Y3QslwiLCBcItCR0LDQsNGB0LDQvVwiLCBcItCR0Y/QvNCx0LBcIiwgXCLQndGP0LxcIl1cblx0XHRcdH0sXG5cdFx0XHQncHQtQlInOiB7IC8vUG9ydHVndcOqcyhCcmFzaWwpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwiSmFuZWlyb1wiLCBcIkZldmVyZWlyb1wiLCBcIk1hcsOnb1wiLCBcIkFicmlsXCIsIFwiTWFpb1wiLCBcIkp1bmhvXCIsIFwiSnVsaG9cIiwgXCJBZ29zdG9cIiwgXCJTZXRlbWJyb1wiLCBcIk91dHVicm9cIiwgXCJOb3ZlbWJyb1wiLCBcIkRlemVtYnJvXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIkRvbVwiLCBcIlNlZ1wiLCBcIlRlclwiLCBcIlF1YVwiLCBcIlF1aVwiLCBcIlNleFwiLCBcIlPDoWJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIkRvbWluZ29cIiwgXCJTZWd1bmRhXCIsIFwiVGVyw6dhXCIsIFwiUXVhcnRhXCIsIFwiUXVpbnRhXCIsIFwiU2V4dGFcIiwgXCJTw6FiYWRvXCJdXG5cdFx0XHR9LFxuXHRcdFx0c2s6IHsgLy9TbG92ZW7EjWluYVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbnXDoXJcIiwgXCJGZWJydcOhclwiLCBcIk1hcmVjXCIsIFwiQXByw61sXCIsIFwiTcOhalwiLCBcIkrDum5cIiwgXCJKw7psXCIsIFwiQXVndXN0XCIsIFwiU2VwdGVtYmVyXCIsIFwiT2t0w7NiZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlY2VtYmVyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIk5lXCIsIFwiUG9cIiwgXCJVdFwiLCBcIlN0XCIsIFwixaB0XCIsIFwiUGlcIiwgXCJTb1wiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiTmVkZcS+YVwiLCBcIlBvbmRlbG9rXCIsIFwiVXRvcm9rXCIsIFwiU3RyZWRhXCIsIFwixaB0dnJ0b2tcIiwgXCJQaWF0b2tcIiwgXCJTb2JvdGFcIl1cblx0XHRcdH0sXG5cdFx0XHRzcTogeyAvL0FsYmFuaWFuIChTaHFpcClcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJKYW5hclwiLCBcIlNoa3VydFwiLCBcIk1hcnNcIiwgXCJQcmlsbFwiLCBcIk1halwiLCBcIlFlcnNob3JcIiwgXCJLb3JyaWtcIiwgXCJHdXNodFwiLCBcIlNodGF0b3JcIiwgXCJUZXRvclwiLCBcIk7Dq250b3JcIiwgXCJEaGpldG9yXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIkRpZVwiLCBcIkjDq25cIiwgXCJNYXJcIiwgXCJNw6tyXCIsIFwiRW5qXCIsIFwiUHJlXCIsIFwiU2h0dVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiRSBEaWVsXCIsIFwiRSBIw6tuw6tcIiwgXCJFIE1hcnTEk1wiLCBcIkUgTcOrcmt1csOrXCIsIFwiRSBFbmp0ZVwiLCBcIkUgUHJlbXRlXCIsIFwiRSBTaHR1bsOrXCJdXG5cdFx0XHR9LFxuXHRcdFx0J3NyLVlVJzogeyAvL1NlcmJpYW4gKFNycHNraSlcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCJKYW51YXJcIiwgXCJGZWJydWFyXCIsIFwiTWFydFwiLCBcIkFwcmlsXCIsIFwiTWFqXCIsIFwiSnVuXCIsIFwiSnVsXCIsIFwiQXZndXN0XCIsIFwiU2VwdGVtYmFyXCIsIFwiT2t0b2JhclwiLCBcIk5vdmVtYmFyXCIsIFwiRGVjZW1iYXJcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwiTmVkXCIsIFwiUG9uXCIsIFwiVXRvXCIsIFwiU3JlXCIsIFwixI1ldFwiLCBcIlBldFwiLCBcIlN1YlwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiTmVkZWxqYVwiLFwiUG9uZWRlbGpha1wiLCBcIlV0b3Jha1wiLCBcIlNyZWRhXCIsIFwixIxldHZydGFrXCIsIFwiUGV0YWtcIiwgXCJTdWJvdGFcIl1cblx0XHRcdH0sXG5cdFx0XHRzcjogeyAvL1NlcmJpYW4gQ3lyaWxsaWMgKNCh0YDQv9GB0LrQuClcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCLRmNCw0L3Rg9Cw0YBcIiwgXCLRhNC10LHRgNGD0LDRgFwiLCBcItC80LDRgNGCXCIsIFwi0LDQv9GA0LjQu1wiLCBcItC80LDRmFwiLCBcItGY0YPQvVwiLCBcItGY0YPQu1wiLCBcItCw0LLQs9GD0YHRglwiLCBcItGB0LXQv9GC0LXQvNCx0LDRgFwiLCBcItC+0LrRgtC+0LHQsNGAXCIsIFwi0L3QvtCy0LXQvNCx0LDRgFwiLCBcItC00LXRhtC10LzQsdCw0YBcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi0L3QtdC0XCIsIFwi0L/QvtC9XCIsIFwi0YPRgtC+XCIsIFwi0YHRgNC1XCIsIFwi0YfQtdGCXCIsIFwi0L/QtdGCXCIsIFwi0YHRg9CxXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLQndC10LTQtdGZ0LBcIixcItCf0L7QvdC10LTQtdGZ0LDQulwiLCBcItCj0YLQvtGA0LDQulwiLCBcItCh0YDQtdC00LBcIiwgXCLQp9C10YLQstGA0YLQsNC6XCIsIFwi0J/QtdGC0LDQulwiLCBcItCh0YPQsdC+0YLQsFwiXVxuXHRcdFx0fSxcblx0XHRcdHN2OiB7IC8vU3ZlbnNrYVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIkphbnVhcmlcIiwgXCJGZWJydWFyaVwiLCBcIk1hcnNcIiwgXCJBcHJpbFwiLCBcIk1halwiLCBcIkp1bmlcIiwgXCJKdWxpXCIsIFwiQXVndXN0aVwiLCBcIlNlcHRlbWJlclwiLCBcIk9rdG9iZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlY2VtYmVyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIlPDtm5cIiwgXCJNw6VuXCIsIFwiVGlzXCIsIFwiT25zXCIsIFwiVG9yXCIsIFwiRnJlXCIsIFwiTMO2clwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wiU8O2bmRhZ1wiLCBcIk3DpW5kYWdcIiwgXCJUaXNkYWdcIiwgXCJPbnNkYWdcIiwgXCJUb3JzZGFnXCIsIFwiRnJlZGFnXCIsIFwiTMO2cmRhZ1wiXVxuXHRcdFx0fSxcblx0XHRcdCd6aC1UVyc6IHsgLy9UcmFkaXRpb25hbCBDaGluZXNlICjnuYHpq5TkuK3mlocpXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdFwi5LiA5pyIXCIsIFwi5LqM5pyIXCIsIFwi5LiJ5pyIXCIsIFwi5Zub5pyIXCIsIFwi5LqU5pyIXCIsIFwi5YWt5pyIXCIsIFwi5LiD5pyIXCIsIFwi5YWr5pyIXCIsIFwi5Lmd5pyIXCIsIFwi5Y2B5pyIXCIsIFwi5Y2B5LiA5pyIXCIsIFwi5Y2B5LqM5pyIXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIuaXpVwiLCBcIuS4gFwiLCBcIuS6jFwiLCBcIuS4iVwiLCBcIuWbm1wiLCBcIuS6lFwiLCBcIuWFrVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi5pif5pyf5pelXCIsIFwi5pif5pyf5LiAXCIsIFwi5pif5pyf5LqMXCIsIFwi5pif5pyf5LiJXCIsIFwi5pif5pyf5ZubXCIsIFwi5pif5pyf5LqUXCIsIFwi5pif5pyf5YWtXCJdXG5cdFx0XHR9LFxuXHRcdFx0emg6IHsgLy9TaW1wbGlmaWVkIENoaW5lc2UgKOeugOS9k+S4reaWhylcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0XCLkuIDmnIhcIiwgXCLkuozmnIhcIiwgXCLkuInmnIhcIiwgXCLlm5vmnIhcIiwgXCLkupTmnIhcIiwgXCLlha3mnIhcIiwgXCLkuIPmnIhcIiwgXCLlhavmnIhcIiwgXCLkuZ3mnIhcIiwgXCLljYHmnIhcIiwgXCLljYHkuIDmnIhcIiwgXCLljYHkuozmnIhcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi5pelXCIsIFwi5LiAXCIsIFwi5LqMXCIsIFwi5LiJXCIsIFwi5ZubXCIsIFwi5LqUXCIsIFwi5YWtXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLmmJ/mnJ/ml6VcIiwgXCLmmJ/mnJ/kuIBcIiwgXCLmmJ/mnJ/kuoxcIiwgXCLmmJ/mnJ/kuIlcIiwgXCLmmJ/mnJ/lm5tcIiwgXCLmmJ/mnJ/kupRcIiwgXCLmmJ/mnJ/lha1cIl1cblx0XHRcdH0sXG5cdFx0XHR1Zzp7IC8vIFV5Z2h1cijYptuH2YrYutuH2LHahtuVKVxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIjEt2KbYp9mKXCIsXCIyLdim2KfZilwiLFwiMy3Yptin2YpcIixcIjQt2KbYp9mKXCIsXCI1Ldim2KfZilwiLFwiNi3Yptin2YpcIixcIjct2KbYp9mKXCIsXCI4Ldim2KfZilwiLFwiOS3Yptin2YpcIixcIjEwLdim2KfZilwiLFwiMTEt2KbYp9mKXCIsXCIxMi3Yptin2YpcIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcblx0XHRcdFx0XHRcItmK25XZg9i025XZhtio25VcIiwgXCLYr9uI2LTbldmG2KjblVwiLFwi2LPbldmK2LTbldmG2KjblVwiLFwi2obYp9ix2LTbldmG2KjblVwiLFwi2b7bldmK2LTbldmG2KjblVwiLFwi2KzbiNmF25VcIixcIti025XZhtio25VcIlxuXHRcdFx0XHRdXG5cdFx0XHR9LFxuXHRcdFx0aGU6IHsgLy9IZWJyZXcgKNei15HXqNeZ16opXG5cdFx0XHRcdG1vbnRoczogW1xuXHRcdFx0XHRcdCfXmdeg15XXkNeoJywgJ9ek15HXqNeV15DXqCcsICfXnteo16UnLCAn15DXpNeo15nXnCcsICfXnteQ15knLCAn15nXldeg15knLCAn15nXldec15knLCAn15DXldeS15XXodeYJywgJ9eh16TXmNee15HXqCcsICfXkNeV16fXmNeV15HXqCcsICfXoNeV15HXnteR16gnLCAn15PXptee15HXqCdcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHQn15BcXCcnLCAn15FcXCcnLCAn15JcXCcnLCAn15NcXCcnLCAn15RcXCcnLCAn15VcXCcnLCAn16nXkdeqJ1xuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcIteo15DXqdeV159cIiwgXCLXqdeg15lcIiwgXCLXqdec15nXqdeZXCIsIFwi16jXkdeZ16LXmVwiLCBcIteX157Xmdep15lcIiwgXCLXqdeZ16nXmVwiLCBcItep15HXqlwiLCBcIteo15DXqdeV159cIl1cblx0XHRcdH0sXG5cdFx0XHRoeTogeyAvLyBBcm1lbmlhblxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcItWA1bjWgtW21b7VodaAXCIsIFwi1ZPVpdW/1oDVvtWh1oBcIiwgXCLVhNWh1oDVv1wiLCBcItSx1brWgNWr1axcIiwgXCLVhNWh1bXVq9W9XCIsIFwi1YDVuNaC1bbVq9W9XCIsIFwi1YDVuNaC1azVq9W9XCIsIFwi1ZXVo9W41b3Vv9W41b1cIiwgXCLVjdWl1brVv9Wl1bTVotWl1oBcIiwgXCLVgNW41a/Vv9Wl1bTVotWl1oBcIiwgXCLVhtW41bXVpdW01aLVpdaAXCIsIFwi1LTVpdWv1b/VpdW01aLVpdaAXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcItS/1atcIiwgXCLUtdaA1a9cIiwgXCLUtdaA1oRcIiwgXCLVidW41oBcIiwgXCLVgNW21aNcIiwgXCLViNaC1oDVolwiLCBcItWH1aLVqVwiXG5cdFx0XHRcdF0sXG5cdFx0XHRcdGRheU9mV2VlazogW1wi1L/Vq9aA1aHVr9WrXCIsIFwi1LXWgNWv1bjWgtW31aHVotWp1atcIiwgXCLUtdaA1aXWhNW31aHVotWp1atcIiwgXCLVidW41oDVpdaE1bfVodWi1anVq1wiLCBcItWA1avVttWj1bfVodWi1anVq1wiLCBcItWI1oLWgNWi1aHVqVwiLCBcItWH1aHVotWh1alcIl1cblx0XHRcdH0sXG5cdFx0XHRrZzogeyAvLyBLeXJneXpcblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0J9Ku0YfRgtKv0L0g0LDQudGLJywgJ9CR0LjRgNC00LjQvSDQsNC50YsnLCAn0JbQsNC70LPQsNC9INCa0YPRgNCw0L0nLCAn0KfRi9C9INCa0YPRgNCw0L0nLCAn0JHRg9Cz0YMnLCAn0JrRg9C70LbQsCcsICfQotC10LrQtScsICfQkdCw0Ygg0J7QvtC90LAnLCAn0JDRj9C6INCe0L7QvdCwJywgJ9Ci0L7Qs9GD0LfQtNGD0L0g0LDQudGLJywgJ9CW0LXRgtC40L3QuNC9INCw0LnRiycsICfQkdC10YjRgtC40L0g0LDQudGLJ1xuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi0JbQtdC6XCIsIFwi0JTSr9C5XCIsIFwi0KjQtdC5XCIsIFwi0KjQsNGAXCIsIFwi0JHQtdC5XCIsIFwi0JbRg9C8XCIsIFwi0JjRiNC1XCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXG5cdFx0XHRcdFx0XCLQltC10LrRiNC10LzQsVwiLCBcItCU0q/QudGI06nQvNCxXCIsIFwi0KjQtdC50YjQtdC80LFcIiwgXCLQqNCw0YDRiNC10LzQsVwiLCBcItCR0LXQudGI0LXQvNCx0LhcIiwgXCLQltGD0LzQsFwiLCBcItCY0YjQtdC90LFcIlxuXHRcdFx0XHRdXG5cdFx0XHR9LFxuXHRcdFx0cm06IHsgLy8gUm9tYW5zaFxuXHRcdFx0XHRtb250aHM6IFtcblx0XHRcdFx0XHRcIlNjaGFuZXJcIiwgXCJGYXZyZXJcIiwgXCJNYXJzXCIsIFwiQXZyaWdsXCIsIFwiTWF0Z1wiLCBcIlplcmNsYWR1clwiLCBcIkZhbmFkdXJcIiwgXCJBdnVzdFwiLCBcIlNldHRlbWJlclwiLCBcIk9jdG9iZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlY2VtYmVyXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrU2hvcnQ6IFtcblx0XHRcdFx0XHRcIkR1XCIsIFwiR2xpXCIsIFwiTWFcIiwgXCJNZVwiLCBcIkdpZVwiLCBcIlZlXCIsIFwiU29cIlxuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWs6IFtcblx0XHRcdFx0XHRcIkR1bWVuZ2lhXCIsIFwiR2xpbmRlc2RpXCIsIFwiTWFyZGlcIiwgXCJNZXNlbW5hXCIsIFwiR2lldmdpYVwiLCBcIlZlbmRlcmRpXCIsIFwiU29uZGFcIlxuXHRcdFx0XHRdXG5cdFx0XHR9LFxuXHRcdFx0a2E6IHsgLy8gR2VvcmdpYW5cblx0XHRcdFx0bW9udGhzOiBbXG5cdFx0XHRcdFx0J+GDmOGDkOGDnOGDleGDkOGDoOGDmCcsICfhg5fhg5Thg5Hhg5Thg6Dhg5Xhg5Dhg5rhg5gnLCAn4YOb4YOQ4YOg4YOi4YOYJywgJ+GDkOGDnuGDoOGDmOGDmuGDmCcsICfhg5vhg5Dhg5jhg6Hhg5gnLCAn4YOY4YOV4YOc4YOY4YOh4YOYJywgJ+GDmOGDleGDmuGDmOGDoeGDmCcsICfhg5Dhg5Lhg5Xhg5jhg6Hhg6Lhg50nLCAn4YOh4YOU4YOl4YOi4YOU4YOb4YOR4YOU4YOg4YOYJywgJ+GDneGDpeGDouGDneGDm+GDkeGDlOGDoOGDmCcsICfhg5zhg53hg5Thg5vhg5Hhg5Thg6Dhg5gnLCAn4YOT4YOU4YOZ4YOU4YOb4YOR4YOU4YOg4YOYJ1xuXHRcdFx0XHRdLFxuXHRcdFx0XHRkYXlPZldlZWtTaG9ydDogW1xuXHRcdFx0XHRcdFwi4YOZ4YOVXCIsIFwi4YOd4YOg4YOoXCIsIFwi4YOh4YOQ4YOb4YOoXCIsIFwi4YOd4YOX4YOuXCIsIFwi4YOu4YOj4YOXXCIsIFwi4YOe4YOQ4YOgXCIsIFwi4YOo4YOQ4YORXCJcblx0XHRcdFx0XSxcblx0XHRcdFx0ZGF5T2ZXZWVrOiBbXCLhg5nhg5Xhg5jhg6Dhg5BcIiwgXCLhg53hg6Dhg6jhg5Dhg5Hhg5Dhg5fhg5hcIiwgXCLhg6Hhg5Dhg5vhg6jhg5Dhg5Hhg5Dhg5fhg5hcIiwgXCLhg53hg5fhg67hg6jhg5Dhg5Hhg5Dhg5fhg5hcIiwgXCLhg67hg6Phg5fhg6jhg5Dhg5Hhg5Dhg5fhg5hcIiwgXCLhg57hg5Dhg6Dhg5Dhg6Hhg5nhg5Thg5Xhg5hcIiwgXCLhg6jhg5Dhg5Hhg5Dhg5fhg5hcIl1cblx0XHRcdH1cblx0XHR9LFxuXG5cdFx0b3duZXJEb2N1bWVudDogZG9jdW1lbnQsXG5cdFx0Y29udGVudFdpbmRvdzogd2luZG93LFxuXG5cdFx0dmFsdWU6ICcnLFxuXHRcdHJ0bDogZmFsc2UsXG5cblx0XHRmb3JtYXQ6XHQnWS9tL2QgSDppJyxcblx0XHRmb3JtYXRUaW1lOlx0J0g6aScsXG5cdFx0Zm9ybWF0RGF0ZTpcdCdZL20vZCcsXG5cblx0XHRzdGFydERhdGU6XHRmYWxzZSwgLy8gbmV3IERhdGUoKSwgJzE5ODYvMTIvMDgnLCAnLTE5NzAvMDEvMDUnLCctMTk3MC8wMS8wNScsXG5cdFx0c3RlcDogNjAsXG5cdFx0bW9udGhDaGFuZ2VTcGlubmVyOiB0cnVlLFxuXG5cdFx0Y2xvc2VPbkRhdGVTZWxlY3Q6IGZhbHNlLFxuXHRcdGNsb3NlT25UaW1lU2VsZWN0OiB0cnVlLFxuXHRcdGNsb3NlT25XaXRob3V0Q2xpY2s6IHRydWUsXG5cdFx0Y2xvc2VPbklucHV0Q2xpY2s6IHRydWUsXG5cdFx0b3Blbk9uRm9jdXM6IHRydWUsXG5cblx0XHR0aW1lcGlja2VyOiB0cnVlLFxuXHRcdGRhdGVwaWNrZXI6IHRydWUsXG5cdFx0d2Vla3M6IGZhbHNlLFxuXG5cdFx0ZGVmYXVsdFRpbWU6IGZhbHNlLFx0Ly8gdXNlIGZvcm1hdFRpbWUgZm9ybWF0IChleC4gJzEwOjAwJyBmb3IgZm9ybWF0VGltZTpcdCdIOmknKVxuXHRcdGRlZmF1bHREYXRlOiBmYWxzZSxcdC8vIHVzZSBmb3JtYXREYXRlIGZvcm1hdCAoZXggbmV3IERhdGUoKSBvciAnMTk4Ni8xMi8wOCcgb3IgJy0xOTcwLzAxLzA1JyBvciAnLTE5NzAvMDEvMDUnKVxuXG5cdFx0bWluRGF0ZTogZmFsc2UsXG5cdFx0bWF4RGF0ZTogZmFsc2UsXG5cdFx0bWluVGltZTogZmFsc2UsXG5cdFx0bWF4VGltZTogZmFsc2UsXG5cdFx0bWluRGF0ZVRpbWU6IGZhbHNlLFxuXHRcdG1heERhdGVUaW1lOiBmYWxzZSxcblxuXHRcdGFsbG93VGltZXM6IFtdLFxuXHRcdG9wZW5lZDogZmFsc2UsXG5cdFx0aW5pdFRpbWU6IHRydWUsXG5cdFx0aW5saW5lOiBmYWxzZSxcblx0XHR0aGVtZTogJycsXG5cdFx0dG91Y2hNb3ZlZFRocmVzaG9sZDogNSxcblxuXHRcdG9uU2VsZWN0RGF0ZTogZnVuY3Rpb24gKCkge30sXG5cdFx0b25TZWxlY3RUaW1lOiBmdW5jdGlvbiAoKSB7fSxcblx0XHRvbkNoYW5nZU1vbnRoOiBmdW5jdGlvbiAoKSB7fSxcblx0XHRvbkdldFdlZWtPZlllYXI6IGZ1bmN0aW9uICgpIHt9LFxuXHRcdG9uQ2hhbmdlWWVhcjogZnVuY3Rpb24gKCkge30sXG5cdFx0b25DaGFuZ2VEYXRlVGltZTogZnVuY3Rpb24gKCkge30sXG5cdFx0b25TaG93OiBmdW5jdGlvbiAoKSB7fSxcblx0XHRvbkNsb3NlOiBmdW5jdGlvbiAoKSB7fSxcblx0XHRvbkdlbmVyYXRlOiBmdW5jdGlvbiAoKSB7fSxcblxuXHRcdHdpdGhvdXRDb3B5cmlnaHQ6IHRydWUsXG5cdFx0aW52ZXJzZUJ1dHRvbjogZmFsc2UsXG5cdFx0aG91cnMxMjogZmFsc2UsXG5cdFx0bmV4dDogJ3hkc29mdF9uZXh0Jyxcblx0XHRwcmV2IDogJ3hkc29mdF9wcmV2Jyxcblx0XHRkYXlPZldlZWtTdGFydDogMCxcblx0XHRwYXJlbnRJRDogJ2JvZHknLFxuXHRcdHRpbWVIZWlnaHRJblRpbWVQaWNrZXI6IDI1LFxuXHRcdHRpbWVwaWNrZXJTY3JvbGxiYXI6IHRydWUsXG5cdFx0dG9kYXlCdXR0b246IHRydWUsXG5cdFx0cHJldkJ1dHRvbjogdHJ1ZSxcblx0XHRuZXh0QnV0dG9uOiB0cnVlLFxuXHRcdGRlZmF1bHRTZWxlY3Q6IHRydWUsXG5cblx0XHRzY3JvbGxNb250aDogdHJ1ZSxcblx0XHRzY3JvbGxUaW1lOiB0cnVlLFxuXHRcdHNjcm9sbElucHV0OiB0cnVlLFxuXG5cdFx0bGF6eUluaXQ6IGZhbHNlLFxuXHRcdG1hc2s6IGZhbHNlLFxuXHRcdHZhbGlkYXRlT25CbHVyOiB0cnVlLFxuXHRcdGFsbG93Qmxhbms6IHRydWUsXG5cdFx0eWVhclN0YXJ0OiAxOTUwLFxuXHRcdHllYXJFbmQ6IDIwNTAsXG5cdFx0bW9udGhTdGFydDogMCxcblx0XHRtb250aEVuZDogMTEsXG5cdFx0c3R5bGU6ICcnLFxuXHRcdGlkOiAnJyxcblx0XHRmaXhlZDogZmFsc2UsXG5cdFx0cm91bmRUaW1lOiAncm91bmQnLCAvLyBjZWlsLCBmbG9vclxuXHRcdGNsYXNzTmFtZTogJycsXG5cdFx0d2Vla2VuZHM6IFtdLFxuXHRcdGhpZ2hsaWdodGVkRGF0ZXM6IFtdLFxuXHRcdGhpZ2hsaWdodGVkUGVyaW9kczogW10sXG5cdFx0YWxsb3dEYXRlcyA6IFtdLFxuXHRcdGFsbG93RGF0ZVJlIDogbnVsbCxcblx0XHRkaXNhYmxlZERhdGVzIDogW10sXG5cdFx0ZGlzYWJsZWRXZWVrRGF5czogW10sXG5cdFx0eWVhck9mZnNldDogMCxcblx0XHRiZWZvcmVTaG93RGF5OiBudWxsLFxuXG5cdFx0ZW50ZXJMaWtlVGFiOiB0cnVlLFxuICAgICAgICBzaG93QXBwbHlCdXR0b246IGZhbHNlLFxuICAgICAgICBpbnNpZGVQYXJlbnQ6IGZhbHNlLFxuXHR9O1xuXG5cdHZhciBkYXRlSGVscGVyID0gbnVsbCxcblx0XHRkZWZhdWx0RGF0ZUhlbHBlciA9IG51bGwsXG5cdFx0Z2xvYmFsTG9jYWxlRGVmYXVsdCA9ICdlbicsXG5cdFx0Z2xvYmFsTG9jYWxlID0gJ2VuJztcblxuXHR2YXIgZGF0ZUZvcm1hdHRlck9wdGlvbnNEZWZhdWx0ID0ge1xuXHRcdG1lcmlkaWVtOiBbJ0FNJywgJ1BNJ11cblx0fTtcblxuXHR2YXIgaW5pdERhdGVGb3JtYXR0ZXIgPSBmdW5jdGlvbigpe1xuXHRcdHZhciBsb2NhbGUgPSBkZWZhdWx0X29wdGlvbnMuaTE4bltnbG9iYWxMb2NhbGVdLFxuXHRcdFx0b3B0cyA9IHtcblx0XHRcdFx0ZGF5czogbG9jYWxlLmRheU9mV2Vlayxcblx0XHRcdFx0ZGF5c1Nob3J0OiBsb2NhbGUuZGF5T2ZXZWVrU2hvcnQsXG5cdFx0XHRcdG1vbnRoczogbG9jYWxlLm1vbnRocyxcblx0XHRcdFx0bW9udGhzU2hvcnQ6ICQubWFwKGxvY2FsZS5tb250aHMsIGZ1bmN0aW9uKG4peyByZXR1cm4gbi5zdWJzdHJpbmcoMCwgMykgfSlcblx0XHRcdH07XG5cblx0XHRpZiAodHlwZW9mIERhdGVGb3JtYXR0ZXIgPT09ICdmdW5jdGlvbicpIHtcblx0XHRcdGRhdGVIZWxwZXIgPSBkZWZhdWx0RGF0ZUhlbHBlciA9IG5ldyBEYXRlRm9ybWF0dGVyKHtcblx0XHRcdFx0ZGF0ZVNldHRpbmdzOiAkLmV4dGVuZCh7fSwgZGF0ZUZvcm1hdHRlck9wdGlvbnNEZWZhdWx0LCBvcHRzKVxuXHRcdFx0fSk7XG5cdFx0fVxuXHR9O1xuXG5cdHZhciBkYXRlRm9ybWF0dGVycyA9IHtcblx0XHRtb21lbnQ6IHtcblx0XHRcdGRlZmF1bHRfb3B0aW9uczp7XG5cdFx0XHRcdGZvcm1hdDogJ1lZWVkvTU0vREQgSEg6bW0nLFxuXHRcdFx0XHRmb3JtYXREYXRlOiAnWVlZWS9NTS9ERCcsXG5cdFx0XHRcdGZvcm1hdFRpbWU6ICdISDptbScsXG5cdFx0XHR9LFxuXHRcdFx0Zm9ybWF0dGVyOiB7XG5cdFx0XHRcdHBhcnNlRGF0ZTogZnVuY3Rpb24gKGRhdGUsIGZvcm1hdCkge1xuXHRcdFx0XHRcdGlmKGlzRm9ybWF0U3RhbmRhcmQoZm9ybWF0KSl7XG5cdFx0XHRcdFx0XHRyZXR1cm4gZGVmYXVsdERhdGVIZWxwZXIucGFyc2VEYXRlKGRhdGUsIGZvcm1hdCk7XG5cdFx0XHRcdFx0fSBcblx0XHRcdFx0XHR2YXIgZCA9IG1vbWVudChkYXRlLCBmb3JtYXQpO1xuXHRcdFx0XHRcdHJldHVybiBkLmlzVmFsaWQoKSA/IGQudG9EYXRlKCkgOiBmYWxzZTtcblx0XHRcdFx0fSxcblxuXHRcdFx0XHRmb3JtYXREYXRlOiBmdW5jdGlvbiAoZGF0ZSwgZm9ybWF0KSB7XG5cdFx0XHRcdFx0aWYoaXNGb3JtYXRTdGFuZGFyZChmb3JtYXQpKXtcblx0XHRcdFx0XHRcdHJldHVybiBkZWZhdWx0RGF0ZUhlbHBlci5mb3JtYXREYXRlKGRhdGUsIGZvcm1hdCk7XG5cdFx0XHRcdFx0fSBcblx0XHRcdFx0XHRyZXR1cm4gbW9tZW50KGRhdGUpLmZvcm1hdChmb3JtYXQpO1xuXHRcdFx0XHR9LFxuXG5cdFx0XHRcdGZvcm1hdE1hc2s6IGZ1bmN0aW9uKGZvcm1hdCl7XG5cdFx0XHRcdFx0cmV0dXJuIGZvcm1hdFxuXHRcdFx0XHRcdFx0LnJlcGxhY2UoL1l7NH0vZywgJzk5OTknKVxuXHRcdFx0XHRcdFx0LnJlcGxhY2UoL1l7Mn0vZywgJzk5Jylcblx0XHRcdFx0XHRcdC5yZXBsYWNlKC9NezJ9L2csICcxOScpXG5cdFx0XHRcdFx0XHQucmVwbGFjZSgvRHsyfS9nLCAnMzknKVxuXHRcdFx0XHRcdFx0LnJlcGxhY2UoL0h7Mn0vZywgJzI5Jylcblx0XHRcdFx0XHRcdC5yZXBsYWNlKC9tezJ9L2csICc1OScpXG5cdFx0XHRcdFx0XHQucmVwbGFjZSgvc3syfS9nLCAnNTknKTtcblx0XHRcdFx0fSxcblx0XHRcdH1cblx0XHR9XG5cdH1cblxuXHQvLyBmb3IgbG9jYWxlIHNldHRpbmdzXG5cdCQuZGF0ZXRpbWVwaWNrZXIgPSB7XG5cdFx0c2V0TG9jYWxlOiBmdW5jdGlvbihsb2NhbGUpe1xuXHRcdFx0dmFyIG5ld0xvY2FsZSA9IGRlZmF1bHRfb3B0aW9ucy5pMThuW2xvY2FsZV0gPyBsb2NhbGUgOiBnbG9iYWxMb2NhbGVEZWZhdWx0O1xuXHRcdFx0aWYgKGdsb2JhbExvY2FsZSAhPT0gbmV3TG9jYWxlKSB7XG5cdFx0XHRcdGdsb2JhbExvY2FsZSA9IG5ld0xvY2FsZTtcblx0XHRcdFx0Ly8gcmVpbml0IGRhdGUgZm9ybWF0dGVyXG5cdFx0XHRcdGluaXREYXRlRm9ybWF0dGVyKCk7XG5cdFx0XHR9XG5cdFx0fSxcblxuXHRcdHNldERhdGVGb3JtYXR0ZXI6IGZ1bmN0aW9uKGRhdGVGb3JtYXR0ZXIpIHtcblx0XHRcdGlmKHR5cGVvZiBkYXRlRm9ybWF0dGVyID09PSAnc3RyaW5nJyAmJiBkYXRlRm9ybWF0dGVycy5oYXNPd25Qcm9wZXJ0eShkYXRlRm9ybWF0dGVyKSl7XG5cdFx0XHRcdHZhciBkZiA9IGRhdGVGb3JtYXR0ZXJzW2RhdGVGb3JtYXR0ZXJdO1xuXHRcdFx0XHQkLmV4dGVuZChkZWZhdWx0X29wdGlvbnMsIGRmLmRlZmF1bHRfb3B0aW9ucyk7XG5cdFx0XHRcdGRhdGVIZWxwZXIgPSBkZi5mb3JtYXR0ZXI7IFxuXHRcdFx0fVxuXHRcdFx0ZWxzZSB7XG5cdFx0XHRcdGRhdGVIZWxwZXIgPSBkYXRlRm9ybWF0dGVyO1xuXHRcdFx0fVxuXHRcdH0sXG5cdH07XG5cblx0dmFyIHN0YW5kYXJkRm9ybWF0cyA9IHtcblx0XHRSRkNfMjgyMjogJ0QsIGQgTSBZIEg6aTpzIE8nLFxuXHRcdEFUT006ICdZLW0tZFxcVEg6aTpzUCcsXG5cdFx0SVNPXzg2MDE6ICdZLW0tZFxcVEg6aTpzTycsXG5cdFx0UkZDXzgyMjogJ0QsIGQgTSB5IEg6aTpzIE8nLFxuXHRcdFJGQ184NTA6ICdsLCBkLU0teSBIOmk6cyBUJyxcblx0XHRSRkNfMTAzNjogJ0QsIGQgTSB5IEg6aTpzIE8nLFxuXHRcdFJGQ18xMTIzOiAnRCwgZCBNIFkgSDppOnMgTycsXG5cdFx0UlNTOiAnRCwgZCBNIFkgSDppOnMgTycsXG5cdFx0VzNDOiAnWS1tLWRcXFRIOmk6c1AnXG5cdH1cblxuXHR2YXIgaXNGb3JtYXRTdGFuZGFyZCA9IGZ1bmN0aW9uKGZvcm1hdCl7XG5cdFx0cmV0dXJuIE9iamVjdC52YWx1ZXMoc3RhbmRhcmRGb3JtYXRzKS5pbmRleE9mKGZvcm1hdCkgPT09IC0xID8gZmFsc2UgOiB0cnVlO1xuXHR9XG5cblx0JC5leHRlbmQoJC5kYXRldGltZXBpY2tlciwgc3RhbmRhcmRGb3JtYXRzKTtcblxuXHQvLyBmaXJzdCBpbml0IGRhdGUgZm9ybWF0dGVyXG5cdGluaXREYXRlRm9ybWF0dGVyKCk7XG5cblx0Ly8gZml4IGZvciBpZThcblx0aWYgKCF3aW5kb3cuZ2V0Q29tcHV0ZWRTdHlsZSkge1xuXHRcdHdpbmRvdy5nZXRDb21wdXRlZFN0eWxlID0gZnVuY3Rpb24gKGVsKSB7XG5cdFx0XHR0aGlzLmVsID0gZWw7XG5cdFx0XHR0aGlzLmdldFByb3BlcnR5VmFsdWUgPSBmdW5jdGlvbiAocHJvcCkge1xuXHRcdFx0XHR2YXIgcmUgPSAvKC0oW2Etel0pKS9nO1xuXHRcdFx0XHRpZiAocHJvcCA9PT0gJ2Zsb2F0Jykge1xuXHRcdFx0XHRcdHByb3AgPSAnc3R5bGVGbG9hdCc7XG5cdFx0XHRcdH1cblx0XHRcdFx0aWYgKHJlLnRlc3QocHJvcCkpIHtcblx0XHRcdFx0XHRwcm9wID0gcHJvcC5yZXBsYWNlKHJlLCBmdW5jdGlvbiAoYSwgYiwgYykge1xuXHRcdFx0XHRcdFx0cmV0dXJuIGMudG9VcHBlckNhc2UoKTtcblx0XHRcdFx0XHR9KTtcblx0XHRcdFx0fVxuXHRcdFx0XHRyZXR1cm4gZWwuY3VycmVudFN0eWxlW3Byb3BdIHx8IG51bGw7XG5cdFx0XHR9O1xuXHRcdFx0cmV0dXJuIHRoaXM7XG5cdFx0fTtcblx0fVxuXHRpZiAoIUFycmF5LnByb3RvdHlwZS5pbmRleE9mKSB7XG5cdFx0QXJyYXkucHJvdG90eXBlLmluZGV4T2YgPSBmdW5jdGlvbiAob2JqLCBzdGFydCkge1xuXHRcdFx0dmFyIGksIGo7XG5cdFx0XHRmb3IgKGkgPSAoc3RhcnQgfHwgMCksIGogPSB0aGlzLmxlbmd0aDsgaSA8IGo7IGkgKz0gMSkge1xuXHRcdFx0XHRpZiAodGhpc1tpXSA9PT0gb2JqKSB7IHJldHVybiBpOyB9XG5cdFx0XHR9XG5cdFx0XHRyZXR1cm4gLTE7XG5cdFx0fTtcblx0fVxuXG5cdERhdGUucHJvdG90eXBlLmNvdW50RGF5c0luTW9udGggPSBmdW5jdGlvbiAoKSB7XG5cdFx0cmV0dXJuIG5ldyBEYXRlKHRoaXMuZ2V0RnVsbFllYXIoKSwgdGhpcy5nZXRNb250aCgpICsgMSwgMCkuZ2V0RGF0ZSgpO1xuXHR9O1xuXG5cdCQuZm4ueGRzb2Z0U2Nyb2xsZXIgPSBmdW5jdGlvbiAob3B0aW9ucywgcGVyY2VudCkge1xuXHRcdHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24gKCkge1xuXHRcdFx0dmFyIHRpbWVib3hwYXJlbnQgPSAkKHRoaXMpLFxuXHRcdFx0XHRwb2ludGVyRXZlbnRUb1hZID0gZnVuY3Rpb24gKGUpIHtcblx0XHRcdFx0XHR2YXIgb3V0ID0ge3g6IDAsIHk6IDB9LFxuXHRcdFx0XHRcdFx0dG91Y2g7XG5cdFx0XHRcdFx0aWYgKGUudHlwZSA9PT0gJ3RvdWNoc3RhcnQnIHx8IGUudHlwZSA9PT0gJ3RvdWNobW92ZScgfHwgZS50eXBlID09PSAndG91Y2hlbmQnIHx8IGUudHlwZSA9PT0gJ3RvdWNoY2FuY2VsJykge1xuXHRcdFx0XHRcdFx0dG91Y2ggID0gZS5vcmlnaW5hbEV2ZW50LnRvdWNoZXNbMF0gfHwgZS5vcmlnaW5hbEV2ZW50LmNoYW5nZWRUb3VjaGVzWzBdO1xuXHRcdFx0XHRcdFx0b3V0LnggPSB0b3VjaC5jbGllbnRYO1xuXHRcdFx0XHRcdFx0b3V0LnkgPSB0b3VjaC5jbGllbnRZO1xuXHRcdFx0XHRcdH0gZWxzZSBpZiAoZS50eXBlID09PSAnbW91c2Vkb3duJyB8fCBlLnR5cGUgPT09ICdtb3VzZXVwJyB8fCBlLnR5cGUgPT09ICdtb3VzZW1vdmUnIHx8IGUudHlwZSA9PT0gJ21vdXNlb3ZlcicgfHwgZS50eXBlID09PSAnbW91c2VvdXQnIHx8IGUudHlwZSA9PT0gJ21vdXNlZW50ZXInIHx8IGUudHlwZSA9PT0gJ21vdXNlbGVhdmUnKSB7XG5cdFx0XHRcdFx0XHRvdXQueCA9IGUuY2xpZW50WDtcblx0XHRcdFx0XHRcdG91dC55ID0gZS5jbGllbnRZO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRyZXR1cm4gb3V0O1xuXHRcdFx0XHR9LFxuXHRcdFx0XHR0aW1lYm94LFxuXHRcdFx0XHRwYXJlbnRIZWlnaHQsXG5cdFx0XHRcdGhlaWdodCxcblx0XHRcdFx0c2Nyb2xsYmFyLFxuXHRcdFx0XHRzY3JvbGxlcixcblx0XHRcdFx0bWF4aW11bU9mZnNldCA9IDEwMCxcblx0XHRcdFx0c3RhcnQgPSBmYWxzZSxcblx0XHRcdFx0c3RhcnRZID0gMCxcblx0XHRcdFx0c3RhcnRUb3AgPSAwLFxuXHRcdFx0XHRoMSA9IDAsXG5cdFx0XHRcdHRvdWNoU3RhcnQgPSBmYWxzZSxcblx0XHRcdFx0c3RhcnRUb3BTY3JvbGwgPSAwLFxuXHRcdFx0XHRjYWxjT2Zmc2V0ID0gZnVuY3Rpb24gKCkge307XG5cblx0XHRcdGlmIChwZXJjZW50ID09PSAnaGlkZScpIHtcblx0XHRcdFx0dGltZWJveHBhcmVudC5maW5kKCcueGRzb2Z0X3Njcm9sbGJhcicpLmhpZGUoKTtcblx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0fVxuXG5cdFx0XHRpZiAoISQodGhpcykuaGFzQ2xhc3MoJ3hkc29mdF9zY3JvbGxlcl9ib3gnKSkge1xuXHRcdFx0XHR0aW1lYm94ID0gdGltZWJveHBhcmVudC5jaGlsZHJlbigpLmVxKDApO1xuXHRcdFx0XHRwYXJlbnRIZWlnaHQgPSB0aW1lYm94cGFyZW50WzBdLmNsaWVudEhlaWdodDtcblx0XHRcdFx0aGVpZ2h0ID0gdGltZWJveFswXS5vZmZzZXRIZWlnaHQ7XG5cdFx0XHRcdHNjcm9sbGJhciA9ICQoJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfc2Nyb2xsYmFyXCI+PC9kaXY+Jyk7XG5cdFx0XHRcdHNjcm9sbGVyID0gJCgnPGRpdiBjbGFzcz1cInhkc29mdF9zY3JvbGxlclwiPjwvZGl2PicpO1xuXHRcdFx0XHRzY3JvbGxiYXIuYXBwZW5kKHNjcm9sbGVyKTtcblxuXHRcdFx0XHR0aW1lYm94cGFyZW50LmFkZENsYXNzKCd4ZHNvZnRfc2Nyb2xsZXJfYm94JykuYXBwZW5kKHNjcm9sbGJhcik7XG5cdFx0XHRcdGNhbGNPZmZzZXQgPSBmdW5jdGlvbiBjYWxjT2Zmc2V0KGV2ZW50KSB7XG5cdFx0XHRcdFx0dmFyIG9mZnNldCA9IHBvaW50ZXJFdmVudFRvWFkoZXZlbnQpLnkgLSBzdGFydFkgKyBzdGFydFRvcFNjcm9sbDtcblx0XHRcdFx0XHRpZiAob2Zmc2V0IDwgMCkge1xuXHRcdFx0XHRcdFx0b2Zmc2V0ID0gMDtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0aWYgKG9mZnNldCArIHNjcm9sbGVyWzBdLm9mZnNldEhlaWdodCA+IGgxKSB7XG5cdFx0XHRcdFx0XHRvZmZzZXQgPSBoMSAtIHNjcm9sbGVyWzBdLm9mZnNldEhlaWdodDtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0dGltZWJveHBhcmVudC50cmlnZ2VyKCdzY3JvbGxfZWxlbWVudC54ZHNvZnRfc2Nyb2xsZXInLCBbbWF4aW11bU9mZnNldCA/IG9mZnNldCAvIG1heGltdW1PZmZzZXQgOiAwXSk7XG5cdFx0XHRcdH07XG5cblx0XHRcdFx0c2Nyb2xsZXJcblx0XHRcdFx0XHQub24oJ3RvdWNoc3RhcnQueGRzb2Z0X3Njcm9sbGVyIG1vdXNlZG93bi54ZHNvZnRfc2Nyb2xsZXInLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHRcdGlmICghcGFyZW50SGVpZ2h0KSB7XG5cdFx0XHRcdFx0XHRcdHRpbWVib3hwYXJlbnQudHJpZ2dlcigncmVzaXplX3Njcm9sbC54ZHNvZnRfc2Nyb2xsZXInLCBbcGVyY2VudF0pO1xuXHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRzdGFydFkgPSBwb2ludGVyRXZlbnRUb1hZKGV2ZW50KS55O1xuXHRcdFx0XHRcdFx0c3RhcnRUb3BTY3JvbGwgPSBwYXJzZUludChzY3JvbGxlci5jc3MoJ21hcmdpbi10b3AnKSwgMTApO1xuXHRcdFx0XHRcdFx0aDEgPSBzY3JvbGxiYXJbMF0ub2Zmc2V0SGVpZ2h0O1xuXG5cdFx0XHRcdFx0XHRpZiAoZXZlbnQudHlwZSA9PT0gJ21vdXNlZG93bicgfHwgZXZlbnQudHlwZSA9PT0gJ3RvdWNoc3RhcnQnKSB7XG5cdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLm93bmVyRG9jdW1lbnQpIHtcblx0XHRcdFx0XHRcdFx0XHQkKG9wdGlvbnMub3duZXJEb2N1bWVudC5ib2R5KS5hZGRDbGFzcygneGRzb2Z0X25vc2VsZWN0Jyk7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0JChbb3B0aW9ucy5vd25lckRvY3VtZW50LmJvZHksIG9wdGlvbnMuY29udGVudFdpbmRvd10pLm9uKCd0b3VjaGVuZCBtb3VzZXVwLnhkc29mdF9zY3JvbGxlcicsIGZ1bmN0aW9uIGFyZ3VtZW50c19jYWxsZWUoKSB7XG5cdFx0XHRcdFx0XHRcdFx0JChbb3B0aW9ucy5vd25lckRvY3VtZW50LmJvZHksIG9wdGlvbnMuY29udGVudFdpbmRvd10pLm9mZigndG91Y2hlbmQgbW91c2V1cC54ZHNvZnRfc2Nyb2xsZXInLCBhcmd1bWVudHNfY2FsbGVlKVxuXHRcdFx0XHRcdFx0XHRcdFx0Lm9mZignbW91c2Vtb3ZlLnhkc29mdF9zY3JvbGxlcicsIGNhbGNPZmZzZXQpXG5cdFx0XHRcdFx0XHRcdFx0XHQucmVtb3ZlQ2xhc3MoJ3hkc29mdF9ub3NlbGVjdCcpO1xuXHRcdFx0XHRcdFx0XHR9KTtcblx0XHRcdFx0XHRcdFx0JChvcHRpb25zLm93bmVyRG9jdW1lbnQuYm9keSkub24oJ21vdXNlbW92ZS54ZHNvZnRfc2Nyb2xsZXInLCBjYWxjT2Zmc2V0KTtcblx0XHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRcdHRvdWNoU3RhcnQgPSB0cnVlO1xuXHRcdFx0XHRcdFx0XHRldmVudC5zdG9wUHJvcGFnYXRpb24oKTtcblx0XHRcdFx0XHRcdFx0ZXZlbnQucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9KVxuXHRcdFx0XHRcdC5vbigndG91Y2htb3ZlJywgZnVuY3Rpb24gKGV2ZW50KSB7XG5cdFx0XHRcdFx0XHRpZiAodG91Y2hTdGFydCkge1xuXHRcdFx0XHRcdFx0XHRldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0XHRcdFx0XHRjYWxjT2Zmc2V0KGV2ZW50KTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9KVxuXHRcdFx0XHRcdC5vbigndG91Y2hlbmQgdG91Y2hjYW5jZWwnLCBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0XHR0b3VjaFN0YXJ0ID0gIGZhbHNlO1xuXHRcdFx0XHRcdFx0c3RhcnRUb3BTY3JvbGwgPSAwO1xuXHRcdFx0XHRcdH0pO1xuXG5cdFx0XHRcdHRpbWVib3hwYXJlbnRcblx0XHRcdFx0XHQub24oJ3Njcm9sbF9lbGVtZW50Lnhkc29mdF9zY3JvbGxlcicsIGZ1bmN0aW9uIChldmVudCwgcGVyY2VudGFnZSkge1xuXHRcdFx0XHRcdFx0aWYgKCFwYXJlbnRIZWlnaHQpIHtcblx0XHRcdFx0XHRcdFx0dGltZWJveHBhcmVudC50cmlnZ2VyKCdyZXNpemVfc2Nyb2xsLnhkc29mdF9zY3JvbGxlcicsIFtwZXJjZW50YWdlLCB0cnVlXSk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRwZXJjZW50YWdlID0gcGVyY2VudGFnZSA+IDEgPyAxIDogKHBlcmNlbnRhZ2UgPCAwIHx8IGlzTmFOKHBlcmNlbnRhZ2UpKSA/IDAgOiBwZXJjZW50YWdlO1xuXG5cdFx0XHRcdFx0XHRzY3JvbGxlci5jc3MoJ21hcmdpbi10b3AnLCBtYXhpbXVtT2Zmc2V0ICogcGVyY2VudGFnZSk7XG5cblx0XHRcdFx0XHRcdHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdFx0XHR0aW1lYm94LmNzcygnbWFyZ2luVG9wJywgLXBhcnNlSW50KCh0aW1lYm94WzBdLm9mZnNldEhlaWdodCAtIHBhcmVudEhlaWdodCkgKiBwZXJjZW50YWdlLCAxMCkpO1xuXHRcdFx0XHRcdFx0fSwgMTApO1xuXHRcdFx0XHRcdH0pXG5cdFx0XHRcdFx0Lm9uKCdyZXNpemVfc2Nyb2xsLnhkc29mdF9zY3JvbGxlcicsIGZ1bmN0aW9uIChldmVudCwgcGVyY2VudGFnZSwgbm9UcmlnZ2VyU2Nyb2xsKSB7XG5cdFx0XHRcdFx0XHR2YXIgcGVyY2VudCwgc2g7XG5cdFx0XHRcdFx0XHRwYXJlbnRIZWlnaHQgPSB0aW1lYm94cGFyZW50WzBdLmNsaWVudEhlaWdodDtcblx0XHRcdFx0XHRcdGhlaWdodCA9IHRpbWVib3hbMF0ub2Zmc2V0SGVpZ2h0O1xuXHRcdFx0XHRcdFx0cGVyY2VudCA9IHBhcmVudEhlaWdodCAvIGhlaWdodDtcblx0XHRcdFx0XHRcdHNoID0gcGVyY2VudCAqIHNjcm9sbGJhclswXS5vZmZzZXRIZWlnaHQ7XG5cdFx0XHRcdFx0XHRpZiAocGVyY2VudCA+IDEpIHtcblx0XHRcdFx0XHRcdFx0c2Nyb2xsZXIuaGlkZSgpO1xuXHRcdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdFx0c2Nyb2xsZXIuc2hvdygpO1xuXHRcdFx0XHRcdFx0XHRzY3JvbGxlci5jc3MoJ2hlaWdodCcsIHBhcnNlSW50KHNoID4gMTAgPyBzaCA6IDEwLCAxMCkpO1xuXHRcdFx0XHRcdFx0XHRtYXhpbXVtT2Zmc2V0ID0gc2Nyb2xsYmFyWzBdLm9mZnNldEhlaWdodCAtIHNjcm9sbGVyWzBdLm9mZnNldEhlaWdodDtcblx0XHRcdFx0XHRcdFx0aWYgKG5vVHJpZ2dlclNjcm9sbCAhPT0gdHJ1ZSkge1xuXHRcdFx0XHRcdFx0XHRcdHRpbWVib3hwYXJlbnQudHJpZ2dlcignc2Nyb2xsX2VsZW1lbnQueGRzb2Z0X3Njcm9sbGVyJywgW3BlcmNlbnRhZ2UgfHwgTWF0aC5hYnMocGFyc2VJbnQodGltZWJveC5jc3MoJ21hcmdpblRvcCcpLCAxMCkpIC8gKGhlaWdodCAtIHBhcmVudEhlaWdodCldKTtcblx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH0pO1xuXG5cdFx0XHRcdHRpbWVib3hwYXJlbnQub24oJ21vdXNld2hlZWwnLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHR2YXIgdG9wID0gTWF0aC5hYnMocGFyc2VJbnQodGltZWJveC5jc3MoJ21hcmdpblRvcCcpLCAxMCkpO1xuXG5cdFx0XHRcdFx0dG9wID0gdG9wIC0gKGV2ZW50LmRlbHRhWSAqIDIwKTtcblx0XHRcdFx0XHRpZiAodG9wIDwgMCkge1xuXHRcdFx0XHRcdFx0dG9wID0gMDtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHR0aW1lYm94cGFyZW50LnRyaWdnZXIoJ3Njcm9sbF9lbGVtZW50Lnhkc29mdF9zY3JvbGxlcicsIFt0b3AgLyAoaGVpZ2h0IC0gcGFyZW50SGVpZ2h0KV0pO1xuXHRcdFx0XHRcdGV2ZW50LnN0b3BQcm9wYWdhdGlvbigpO1xuXHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0fSk7XG5cblx0XHRcdFx0dGltZWJveHBhcmVudC5vbigndG91Y2hzdGFydCcsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0XHRcdHN0YXJ0ID0gcG9pbnRlckV2ZW50VG9YWShldmVudCk7XG5cdFx0XHRcdFx0c3RhcnRUb3AgPSBNYXRoLmFicyhwYXJzZUludCh0aW1lYm94LmNzcygnbWFyZ2luVG9wJyksIDEwKSk7XG5cdFx0XHRcdH0pO1xuXG5cdFx0XHRcdHRpbWVib3hwYXJlbnQub24oJ3RvdWNobW92ZScsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0XHRcdGlmIChzdGFydCkge1xuXHRcdFx0XHRcdFx0ZXZlbnQucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0XHRcdHZhciBjb29yZCA9IHBvaW50ZXJFdmVudFRvWFkoZXZlbnQpO1xuXHRcdFx0XHRcdFx0dGltZWJveHBhcmVudC50cmlnZ2VyKCdzY3JvbGxfZWxlbWVudC54ZHNvZnRfc2Nyb2xsZXInLCBbKHN0YXJ0VG9wIC0gKGNvb3JkLnkgLSBzdGFydC55KSkgLyAoaGVpZ2h0IC0gcGFyZW50SGVpZ2h0KV0pO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fSk7XG5cblx0XHRcdFx0dGltZWJveHBhcmVudC5vbigndG91Y2hlbmQgdG91Y2hjYW5jZWwnLCBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0c3RhcnQgPSBmYWxzZTtcblx0XHRcdFx0XHRzdGFydFRvcCA9IDA7XG5cdFx0XHRcdH0pO1xuXHRcdFx0fVxuXHRcdFx0dGltZWJveHBhcmVudC50cmlnZ2VyKCdyZXNpemVfc2Nyb2xsLnhkc29mdF9zY3JvbGxlcicsIFtwZXJjZW50XSk7XG5cdFx0fSk7XG5cdH07XG5cblx0JC5mbi5kYXRldGltZXBpY2tlciA9IGZ1bmN0aW9uIChvcHQsIG9wdDIpIHtcblx0XHR2YXIgcmVzdWx0ID0gdGhpcyxcblx0XHRcdEtFWTAgPSA0OCxcblx0XHRcdEtFWTkgPSA1Nyxcblx0XHRcdF9LRVkwID0gOTYsXG5cdFx0XHRfS0VZOSA9IDEwNSxcbiAgICAgICAgICAgIENUUkxLRVkgPSAxNyxcbiAgICAgICAgICAgIENNREtFWSA9IDkxLFxuXHRcdFx0REVMID0gNDYsXG5cdFx0XHRFTlRFUiA9IDEzLFxuXHRcdFx0RVNDID0gMjcsXG5cdFx0XHRCQUNLU1BBQ0UgPSA4LFxuXHRcdFx0QVJST1dMRUZUID0gMzcsXG5cdFx0XHRBUlJPV1VQID0gMzgsXG5cdFx0XHRBUlJPV1JJR0hUID0gMzksXG5cdFx0XHRBUlJPV0RPV04gPSA0MCxcblx0XHRcdFRBQiA9IDksXG5cdFx0XHRGNSA9IDExNixcblx0XHRcdEFLRVkgPSA2NSxcblx0XHRcdENLRVkgPSA2Nyxcblx0XHRcdFZLRVkgPSA4Nixcblx0XHRcdFpLRVkgPSA5MCxcblx0XHRcdFlLRVkgPSA4OSxcbiAgICAgICAgICAgIGN0cmxEb3duXHQ9XHRmYWxzZSxcbiAgICAgICAgICAgIGNtZERvd24gPSBmYWxzZSxcblx0XHRcdG9wdGlvbnMgPSAoJC5pc1BsYWluT2JqZWN0KG9wdCkgfHwgIW9wdCkgPyAkLmV4dGVuZCh0cnVlLCB7fSwgZGVmYXVsdF9vcHRpb25zLCBvcHQpIDogJC5leHRlbmQodHJ1ZSwge30sIGRlZmF1bHRfb3B0aW9ucyksXG5cblx0XHRcdGxhenlJbml0VGltZXIgPSAwLFxuXHRcdFx0Y3JlYXRlRGF0ZVRpbWVQaWNrZXIsXG5cdFx0XHRkZXN0cm95RGF0ZVRpbWVQaWNrZXIsXG5cblx0XHRcdGxhenlJbml0ID0gZnVuY3Rpb24gKGlucHV0KSB7XG5cdFx0XHRcdGlucHV0XG5cdFx0XHRcdFx0Lm9uKCdvcGVuLnhkc29mdCBmb2N1c2luLnhkc29mdCBtb3VzZWRvd24ueGRzb2Z0IHRvdWNoc3RhcnQnLCBmdW5jdGlvbiBpbml0T25BY3Rpb25DYWxsYmFjaygpIHtcblx0XHRcdFx0XHRcdGlmIChpbnB1dC5pcygnOmRpc2FibGVkJykgfHwgaW5wdXQuZGF0YSgneGRzb2Z0X2RhdGV0aW1lcGlja2VyJykpIHtcblx0XHRcdFx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0Y2xlYXJUaW1lb3V0KGxhenlJbml0VGltZXIpO1xuXHRcdFx0XHRcdFx0bGF6eUluaXRUaW1lciA9IHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuXG5cdFx0XHRcdFx0XHRcdGlmICghaW5wdXQuZGF0YSgneGRzb2Z0X2RhdGV0aW1lcGlja2VyJykpIHtcblx0XHRcdFx0XHRcdFx0XHRjcmVhdGVEYXRlVGltZVBpY2tlcihpbnB1dCk7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0aW5wdXRcblx0XHRcdFx0XHRcdFx0XHQub2ZmKCdvcGVuLnhkc29mdCBmb2N1c2luLnhkc29mdCBtb3VzZWRvd24ueGRzb2Z0IHRvdWNoc3RhcnQnLCBpbml0T25BY3Rpb25DYWxsYmFjaylcblx0XHRcdFx0XHRcdFx0XHQudHJpZ2dlcignb3Blbi54ZHNvZnQnKTtcblx0XHRcdFx0XHRcdH0sIDEwMCk7XG5cdFx0XHRcdFx0fSk7XG5cdFx0XHR9O1xuXG5cdFx0Y3JlYXRlRGF0ZVRpbWVQaWNrZXIgPSBmdW5jdGlvbiAoaW5wdXQpIHtcblx0XHRcdHZhciBkYXRldGltZXBpY2tlciA9ICQoJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfZGF0ZXRpbWVwaWNrZXIgeGRzb2Z0X25vc2VsZWN0XCI+PC9kaXY+JyksXG5cdFx0XHRcdHhkc29mdF9jb3B5cmlnaHQgPSAkKCc8ZGl2IGNsYXNzPVwieGRzb2Z0X2NvcHlyaWdodFwiPjxhIHRhcmdldD1cIl9ibGFua1wiIGhyZWY9XCJodHRwOi8veGRzb2Z0Lm5ldC9qcXBsdWdpbnMvZGF0ZXRpbWVwaWNrZXIvXCI+eGRzb2Z0Lm5ldDwvYT48L2Rpdj4nKSxcblx0XHRcdFx0ZGF0ZXBpY2tlciA9ICQoJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfZGF0ZXBpY2tlciBhY3RpdmVcIj48L2Rpdj4nKSxcblx0XHRcdFx0bW9udGhfcGlja2VyID0gJCgnPGRpdiBjbGFzcz1cInhkc29mdF9tb250aHBpY2tlclwiPjxidXR0b24gdHlwZT1cImJ1dHRvblwiIGNsYXNzPVwieGRzb2Z0X3ByZXZcIj48L2J1dHRvbj48YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cInhkc29mdF90b2RheV9idXR0b25cIj48L2J1dHRvbj4nICtcblx0XHRcdFx0XHQnPGRpdiBjbGFzcz1cInhkc29mdF9sYWJlbCB4ZHNvZnRfbW9udGhcIj48c3Bhbj48L3NwYW4+PGk+PC9pPjwvZGl2PicgK1xuXHRcdFx0XHRcdCc8ZGl2IGNsYXNzPVwieGRzb2Z0X2xhYmVsIHhkc29mdF95ZWFyXCI+PHNwYW4+PC9zcGFuPjxpPjwvaT48L2Rpdj4nICtcblx0XHRcdFx0XHQnPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3M9XCJ4ZHNvZnRfbmV4dFwiPjwvYnV0dG9uPjwvZGl2PicpLFxuXHRcdFx0XHRjYWxlbmRhciA9ICQoJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfY2FsZW5kYXJcIj48L2Rpdj4nKSxcblx0XHRcdFx0dGltZXBpY2tlciA9ICQoJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfdGltZXBpY2tlciBhY3RpdmVcIj48YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cInhkc29mdF9wcmV2XCI+PC9idXR0b24+PGRpdiBjbGFzcz1cInhkc29mdF90aW1lX2JveFwiPjwvZGl2PjxidXR0b24gdHlwZT1cImJ1dHRvblwiIGNsYXNzPVwieGRzb2Z0X25leHRcIj48L2J1dHRvbj48L2Rpdj4nKSxcblx0XHRcdFx0dGltZWJveHBhcmVudCA9IHRpbWVwaWNrZXIuZmluZCgnLnhkc29mdF90aW1lX2JveCcpLmVxKDApLFxuXHRcdFx0XHR0aW1lYm94ID0gJCgnPGRpdiBjbGFzcz1cInhkc29mdF90aW1lX3ZhcmlhbnRcIj48L2Rpdj4nKSxcblx0XHRcdFx0YXBwbHlCdXR0b24gPSAkKCc8YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cInhkc29mdF9zYXZlX3NlbGVjdGVkIGJsdWUtZ3JhZGllbnQtYnV0dG9uXCI+U2F2ZSBTZWxlY3RlZDwvYnV0dG9uPicpLFxuXG5cdFx0XHRcdG1vbnRoc2VsZWN0ID0gJCgnPGRpdiBjbGFzcz1cInhkc29mdF9zZWxlY3QgeGRzb2Z0X21vbnRoc2VsZWN0XCI+PGRpdj48L2Rpdj48L2Rpdj4nKSxcblx0XHRcdFx0eWVhcnNlbGVjdCA9ICQoJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfc2VsZWN0IHhkc29mdF95ZWFyc2VsZWN0XCI+PGRpdj48L2Rpdj48L2Rpdj4nKSxcblx0XHRcdFx0dHJpZ2dlckFmdGVyT3BlbiA9IGZhbHNlLFxuXHRcdFx0XHRYRFNvZnRfZGF0ZXRpbWUsXG5cblx0XHRcdFx0eGNoYW5nZVRpbWVyLFxuXHRcdFx0XHR0aW1lcmNsaWNrLFxuXHRcdFx0XHRjdXJyZW50X3RpbWVfaW5kZXgsXG5cdFx0XHRcdHNldFBvcyxcblx0XHRcdFx0dGltZXIgPSAwLFxuXHRcdFx0XHRfeGRzb2Z0X2RhdGV0aW1lLFxuXHRcdFx0XHRmb3JFYWNoQW5jZXN0b3JPZjtcblxuXHRcdFx0aWYgKG9wdGlvbnMuaWQpIHtcblx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuYXR0cignaWQnLCBvcHRpb25zLmlkKTtcblx0XHRcdH1cblx0XHRcdGlmIChvcHRpb25zLnN0eWxlKSB7XG5cdFx0XHRcdGRhdGV0aW1lcGlja2VyLmF0dHIoJ3N0eWxlJywgb3B0aW9ucy5zdHlsZSk7XG5cdFx0XHR9XG5cdFx0XHRpZiAob3B0aW9ucy53ZWVrcykge1xuXHRcdFx0XHRkYXRldGltZXBpY2tlci5hZGRDbGFzcygneGRzb2Z0X3Nob3d3ZWVrcycpO1xuXHRcdFx0fVxuXHRcdFx0aWYgKG9wdGlvbnMucnRsKSB7XG5cdFx0XHRcdGRhdGV0aW1lcGlja2VyLmFkZENsYXNzKCd4ZHNvZnRfcnRsJyk7XG5cdFx0XHR9XG5cblx0XHRcdGRhdGV0aW1lcGlja2VyLmFkZENsYXNzKCd4ZHNvZnRfJyArIG9wdGlvbnMudGhlbWUpO1xuXHRcdFx0ZGF0ZXRpbWVwaWNrZXIuYWRkQ2xhc3Mob3B0aW9ucy5jbGFzc05hbWUpO1xuXG5cdFx0XHRtb250aF9waWNrZXJcblx0XHRcdFx0LmZpbmQoJy54ZHNvZnRfbW9udGggc3BhbicpXG5cdFx0XHRcdC5hZnRlcihtb250aHNlbGVjdCk7XG5cdFx0XHRtb250aF9waWNrZXJcblx0XHRcdFx0LmZpbmQoJy54ZHNvZnRfeWVhciBzcGFuJylcblx0XHRcdFx0LmFmdGVyKHllYXJzZWxlY3QpO1xuXG5cdFx0XHRtb250aF9waWNrZXJcblx0XHRcdFx0LmZpbmQoJy54ZHNvZnRfbW9udGgsLnhkc29mdF95ZWFyJylcblx0XHRcdFx0Lm9uKCd0b3VjaHN0YXJ0IG1vdXNlZG93bi54ZHNvZnQnLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHR2YXIgc2VsZWN0ID0gJCh0aGlzKS5maW5kKCcueGRzb2Z0X3NlbGVjdCcpLmVxKDApLFxuXHRcdFx0XHRcdFx0dmFsID0gMCxcblx0XHRcdFx0XHRcdHRvcCA9IDAsXG5cdFx0XHRcdFx0XHR2aXNpYmxlID0gc2VsZWN0LmlzKCc6dmlzaWJsZScpLFxuXHRcdFx0XHRcdFx0aXRlbXMsXG5cdFx0XHRcdFx0XHRpO1xuXG5cdFx0XHRcdFx0bW9udGhfcGlja2VyXG5cdFx0XHRcdFx0XHQuZmluZCgnLnhkc29mdF9zZWxlY3QnKVxuXHRcdFx0XHRcdFx0LmhpZGUoKTtcblx0XHRcdFx0XHRpZiAoX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSkge1xuXHRcdFx0XHRcdFx0dmFsID0gX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZVskKHRoaXMpLmhhc0NsYXNzKCd4ZHNvZnRfbW9udGgnKSA/ICdnZXRNb250aCcgOiAnZ2V0RnVsbFllYXInXSgpO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdHNlbGVjdFt2aXNpYmxlID8gJ2hpZGUnIDogJ3Nob3cnXSgpO1xuXHRcdFx0XHRcdGZvciAoaXRlbXMgPSBzZWxlY3QuZmluZCgnZGl2Lnhkc29mdF9vcHRpb24nKSwgaSA9IDA7IGkgPCBpdGVtcy5sZW5ndGg7IGkgKz0gMSkge1xuXHRcdFx0XHRcdFx0aWYgKGl0ZW1zLmVxKGkpLmRhdGEoJ3ZhbHVlJykgPT09IHZhbCkge1xuXHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRcdHRvcCArPSBpdGVtc1swXS5vZmZzZXRIZWlnaHQ7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0c2VsZWN0Lnhkc29mdFNjcm9sbGVyKG9wdGlvbnMsIHRvcCAvIChzZWxlY3QuY2hpbGRyZW4oKVswXS5vZmZzZXRIZWlnaHQgLSAoc2VsZWN0WzBdLmNsaWVudEhlaWdodCkpKTtcblx0XHRcdFx0XHRldmVudC5zdG9wUHJvcGFnYXRpb24oKTtcblx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdH0pO1xuXG5cdFx0XHR2YXIgaGFuZGxlVG91Y2hNb3ZlZCA9IGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0XHR2YXIgZXZ0ID0gZXZlbnQub3JpZ2luYWxFdmVudDtcblx0XHRcdFx0dmFyIHRvdWNoUG9zaXRpb24gPSBldnQudG91Y2hlcyA/IGV2dC50b3VjaGVzWzBdIDogZXZ0O1xuXHRcdFx0XHR0aGlzLnRvdWNoU3RhcnRQb3NpdGlvbiA9IHRoaXMudG91Y2hTdGFydFBvc2l0aW9uIHx8IHRvdWNoUG9zaXRpb247XG5cdFx0XHRcdHZhciB4TW92ZW1lbnQgPSBNYXRoLmFicyh0aGlzLnRvdWNoU3RhcnRQb3NpdGlvbi5jbGllbnRYIC0gdG91Y2hQb3NpdGlvbi5jbGllbnRYKTtcblx0XHRcdFx0dmFyIHlNb3ZlbWVudCA9IE1hdGguYWJzKHRoaXMudG91Y2hTdGFydFBvc2l0aW9uLmNsaWVudFkgLSB0b3VjaFBvc2l0aW9uLmNsaWVudFkpO1xuXHRcdFx0XHR2YXIgZGlzdGFuY2UgPSBNYXRoLnNxcnQoeE1vdmVtZW50ICogeE1vdmVtZW50ICsgeU1vdmVtZW50ICogeU1vdmVtZW50KTtcblx0XHRcdFx0aWYoZGlzdGFuY2UgPiBvcHRpb25zLnRvdWNoTW92ZWRUaHJlc2hvbGQpIHtcblx0XHRcdFx0XHR0aGlzLnRvdWNoTW92ZWQgPSB0cnVlO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cblx0XHRcdG1vbnRoX3BpY2tlclxuXHRcdFx0XHQuZmluZCgnLnhkc29mdF9zZWxlY3QnKVxuXHRcdFx0XHQueGRzb2Z0U2Nyb2xsZXIob3B0aW9ucylcblx0XHRcdFx0Lm9uKCd0b3VjaHN0YXJ0IG1vdXNlZG93bi54ZHNvZnQnLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHR2YXIgZXZ0ID0gZXZlbnQub3JpZ2luYWxFdmVudDtcblx0XHRcdFx0XHR0aGlzLnRvdWNoTW92ZWQgPSBmYWxzZTtcblx0XHRcdFx0XHR0aGlzLnRvdWNoU3RhcnRQb3NpdGlvbiA9IGV2dC50b3VjaGVzID8gZXZ0LnRvdWNoZXNbMF0gOiBldnQ7XG5cdFx0XHRcdFx0ZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG5cdFx0XHRcdFx0ZXZlbnQucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0fSlcblx0XHRcdFx0Lm9uKCd0b3VjaG1vdmUnLCAnLnhkc29mdF9vcHRpb24nLCBoYW5kbGVUb3VjaE1vdmVkKVxuXHRcdFx0XHQub24oJ3RvdWNoZW5kIG1vdXNlZG93bi54ZHNvZnQnLCAnLnhkc29mdF9vcHRpb24nLCBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0aWYgKCF0aGlzLnRvdWNoTW92ZWQpIHtcblx0XHRcdFx0XHRcdGlmIChfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lID09PSB1bmRlZmluZWQgfHwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSA9PT0gbnVsbCkge1xuXHRcdFx0XHRcdFx0XHRfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lID0gX3hkc29mdF9kYXRldGltZS5ub3coKTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0dmFyIHllYXIgPSBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLmdldEZ1bGxZZWFyKCk7XG5cdFx0XHRcdFx0XHRpZiAoX3hkc29mdF9kYXRldGltZSAmJiBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lKSB7XG5cdFx0XHRcdFx0XHRcdF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWVbJCh0aGlzKS5wYXJlbnQoKS5wYXJlbnQoKS5oYXNDbGFzcygneGRzb2Z0X21vbnRoc2VsZWN0JykgPyAnc2V0TW9udGgnIDogJ3NldEZ1bGxZZWFyJ10oJCh0aGlzKS5kYXRhKCd2YWx1ZScpKTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5wYXJlbnQoKS5oaWRlKCk7XG5cblx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ3hjaGFuZ2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHRpZiAob3B0aW9ucy5vbkNoYW5nZU1vbnRoICYmICQuaXNGdW5jdGlvbihvcHRpb25zLm9uQ2hhbmdlTW9udGgpKSB7XG5cdFx0XHRcdFx0XHRcdG9wdGlvbnMub25DaGFuZ2VNb250aC5jYWxsKGRhdGV0aW1lcGlja2VyLCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLCBkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpKTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0aWYgKHllYXIgIT09IF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUuZ2V0RnVsbFllYXIoKSAmJiAkLmlzRnVuY3Rpb24ob3B0aW9ucy5vbkNoYW5nZVllYXIpKSB7XG5cdFx0XHRcdFx0XHRcdG9wdGlvbnMub25DaGFuZ2VZZWFyLmNhbGwoZGF0ZXRpbWVwaWNrZXIsIF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUsIGRhdGV0aW1lcGlja2VyLmRhdGEoJ2lucHV0JykpO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH1cblx0XHRcdFx0fSk7XG5cblx0XHRcdGRhdGV0aW1lcGlja2VyLmdldFZhbHVlID0gZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRyZXR1cm4gX3hkc29mdF9kYXRldGltZS5nZXRDdXJyZW50VGltZSgpO1xuXHRcdFx0fTtcblxuXHRcdFx0ZGF0ZXRpbWVwaWNrZXIuc2V0T3B0aW9ucyA9IGZ1bmN0aW9uIChfb3B0aW9ucykge1xuXHRcdFx0XHR2YXIgaGlnaGxpZ2h0ZWREYXRlcyA9IHt9O1xuXG5cdFx0XHRcdG9wdGlvbnMgPSAkLmV4dGVuZCh0cnVlLCB7fSwgb3B0aW9ucywgX29wdGlvbnMpO1xuXG5cdFx0XHRcdGlmIChfb3B0aW9ucy5hbGxvd1RpbWVzICYmICQuaXNBcnJheShfb3B0aW9ucy5hbGxvd1RpbWVzKSAmJiBfb3B0aW9ucy5hbGxvd1RpbWVzLmxlbmd0aCkge1xuXHRcdFx0XHRcdG9wdGlvbnMuYWxsb3dUaW1lcyA9ICQuZXh0ZW5kKHRydWUsIFtdLCBfb3B0aW9ucy5hbGxvd1RpbWVzKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmIChfb3B0aW9ucy53ZWVrZW5kcyAmJiAkLmlzQXJyYXkoX29wdGlvbnMud2Vla2VuZHMpICYmIF9vcHRpb25zLndlZWtlbmRzLmxlbmd0aCkge1xuXHRcdFx0XHRcdG9wdGlvbnMud2Vla2VuZHMgPSAkLmV4dGVuZCh0cnVlLCBbXSwgX29wdGlvbnMud2Vla2VuZHMpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKF9vcHRpb25zLmFsbG93RGF0ZXMgJiYgJC5pc0FycmF5KF9vcHRpb25zLmFsbG93RGF0ZXMpICYmIF9vcHRpb25zLmFsbG93RGF0ZXMubGVuZ3RoKSB7XG5cdFx0XHRcdFx0b3B0aW9ucy5hbGxvd0RhdGVzID0gJC5leHRlbmQodHJ1ZSwgW10sIF9vcHRpb25zLmFsbG93RGF0ZXMpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKF9vcHRpb25zLmFsbG93RGF0ZVJlICYmIE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmcuY2FsbChfb3B0aW9ucy5hbGxvd0RhdGVSZSk9PT1cIltvYmplY3QgU3RyaW5nXVwiKSB7XG5cdFx0XHRcdFx0b3B0aW9ucy5hbGxvd0RhdGVSZSA9IG5ldyBSZWdFeHAoX29wdGlvbnMuYWxsb3dEYXRlUmUpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKF9vcHRpb25zLmhpZ2hsaWdodGVkRGF0ZXMgJiYgJC5pc0FycmF5KF9vcHRpb25zLmhpZ2hsaWdodGVkRGF0ZXMpICYmIF9vcHRpb25zLmhpZ2hsaWdodGVkRGF0ZXMubGVuZ3RoKSB7XG5cdFx0XHRcdFx0JC5lYWNoKF9vcHRpb25zLmhpZ2hsaWdodGVkRGF0ZXMsIGZ1bmN0aW9uIChpbmRleCwgdmFsdWUpIHtcblx0XHRcdFx0XHRcdHZhciBzcGxpdERhdGEgPSAkLm1hcCh2YWx1ZS5zcGxpdCgnLCcpLCAkLnRyaW0pLFxuXHRcdFx0XHRcdFx0XHRleERlc2MsXG5cdFx0XHRcdFx0XHRcdGhEYXRlID0gbmV3IEhpZ2hsaWdodGVkRGF0ZShkYXRlSGVscGVyLnBhcnNlRGF0ZShzcGxpdERhdGFbMF0sIG9wdGlvbnMuZm9ybWF0RGF0ZSksIHNwbGl0RGF0YVsxXSwgc3BsaXREYXRhWzJdKSwgLy8gZGF0ZSwgZGVzYywgc3R5bGVcblx0XHRcdFx0XHRcdFx0a2V5RGF0ZSA9IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShoRGF0ZS5kYXRlLCBvcHRpb25zLmZvcm1hdERhdGUpO1xuXHRcdFx0XHRcdFx0aWYgKGhpZ2hsaWdodGVkRGF0ZXNba2V5RGF0ZV0gIT09IHVuZGVmaW5lZCkge1xuXHRcdFx0XHRcdFx0XHRleERlc2MgPSBoaWdobGlnaHRlZERhdGVzW2tleURhdGVdLmRlc2M7XG5cdFx0XHRcdFx0XHRcdGlmIChleERlc2MgJiYgZXhEZXNjLmxlbmd0aCAmJiBoRGF0ZS5kZXNjICYmIGhEYXRlLmRlc2MubGVuZ3RoKSB7XG5cdFx0XHRcdFx0XHRcdFx0aGlnaGxpZ2h0ZWREYXRlc1trZXlEYXRlXS5kZXNjID0gZXhEZXNjICsgXCJcXG5cIiArIGhEYXRlLmRlc2M7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRcdGhpZ2hsaWdodGVkRGF0ZXNba2V5RGF0ZV0gPSBoRGF0ZTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9KTtcblxuXHRcdFx0XHRcdG9wdGlvbnMuaGlnaGxpZ2h0ZWREYXRlcyA9ICQuZXh0ZW5kKHRydWUsIFtdLCBoaWdobGlnaHRlZERhdGVzKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmIChfb3B0aW9ucy5oaWdobGlnaHRlZFBlcmlvZHMgJiYgJC5pc0FycmF5KF9vcHRpb25zLmhpZ2hsaWdodGVkUGVyaW9kcykgJiYgX29wdGlvbnMuaGlnaGxpZ2h0ZWRQZXJpb2RzLmxlbmd0aCkge1xuXHRcdFx0XHRcdGhpZ2hsaWdodGVkRGF0ZXMgPSAkLmV4dGVuZCh0cnVlLCBbXSwgb3B0aW9ucy5oaWdobGlnaHRlZERhdGVzKTtcblx0XHRcdFx0XHQkLmVhY2goX29wdGlvbnMuaGlnaGxpZ2h0ZWRQZXJpb2RzLCBmdW5jdGlvbiAoaW5kZXgsIHZhbHVlKSB7XG5cdFx0XHRcdFx0XHR2YXIgZGF0ZVRlc3QsIC8vIHN0YXJ0IGRhdGVcblx0XHRcdFx0XHRcdFx0ZGF0ZUVuZCxcblx0XHRcdFx0XHRcdFx0ZGVzYyxcblx0XHRcdFx0XHRcdFx0aERhdGUsXG5cdFx0XHRcdFx0XHRcdGtleURhdGUsXG5cdFx0XHRcdFx0XHRcdGV4RGVzYyxcblx0XHRcdFx0XHRcdFx0c3R5bGU7XG5cdFx0XHRcdFx0XHRpZiAoJC5pc0FycmF5KHZhbHVlKSkge1xuXHRcdFx0XHRcdFx0XHRkYXRlVGVzdCA9IHZhbHVlWzBdO1xuXHRcdFx0XHRcdFx0XHRkYXRlRW5kID0gdmFsdWVbMV07XG5cdFx0XHRcdFx0XHRcdGRlc2MgPSB2YWx1ZVsyXTtcblx0XHRcdFx0XHRcdFx0c3R5bGUgPSB2YWx1ZVszXTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdGVsc2Uge1xuXHRcdFx0XHRcdFx0XHR2YXIgc3BsaXREYXRhID0gJC5tYXAodmFsdWUuc3BsaXQoJywnKSwgJC50cmltKTtcblx0XHRcdFx0XHRcdFx0ZGF0ZVRlc3QgPSBkYXRlSGVscGVyLnBhcnNlRGF0ZShzcGxpdERhdGFbMF0sIG9wdGlvbnMuZm9ybWF0RGF0ZSk7XG5cdFx0XHRcdFx0XHRcdGRhdGVFbmQgPSBkYXRlSGVscGVyLnBhcnNlRGF0ZShzcGxpdERhdGFbMV0sIG9wdGlvbnMuZm9ybWF0RGF0ZSk7XG5cdFx0XHRcdFx0XHRcdGRlc2MgPSBzcGxpdERhdGFbMl07XG5cdFx0XHRcdFx0XHRcdHN0eWxlID0gc3BsaXREYXRhWzNdO1xuXHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHR3aGlsZSAoZGF0ZVRlc3QgPD0gZGF0ZUVuZCkge1xuXHRcdFx0XHRcdFx0XHRoRGF0ZSA9IG5ldyBIaWdobGlnaHRlZERhdGUoZGF0ZVRlc3QsIGRlc2MsIHN0eWxlKTtcblx0XHRcdFx0XHRcdFx0a2V5RGF0ZSA9IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShkYXRlVGVzdCwgb3B0aW9ucy5mb3JtYXREYXRlKTtcblx0XHRcdFx0XHRcdFx0ZGF0ZVRlc3Quc2V0RGF0ZShkYXRlVGVzdC5nZXREYXRlKCkgKyAxKTtcblx0XHRcdFx0XHRcdFx0aWYgKGhpZ2hsaWdodGVkRGF0ZXNba2V5RGF0ZV0gIT09IHVuZGVmaW5lZCkge1xuXHRcdFx0XHRcdFx0XHRcdGV4RGVzYyA9IGhpZ2hsaWdodGVkRGF0ZXNba2V5RGF0ZV0uZGVzYztcblx0XHRcdFx0XHRcdFx0XHRpZiAoZXhEZXNjICYmIGV4RGVzYy5sZW5ndGggJiYgaERhdGUuZGVzYyAmJiBoRGF0ZS5kZXNjLmxlbmd0aCkge1xuXHRcdFx0XHRcdFx0XHRcdFx0aGlnaGxpZ2h0ZWREYXRlc1trZXlEYXRlXS5kZXNjID0gZXhEZXNjICsgXCJcXG5cIiArIGhEYXRlLmRlc2M7XG5cdFx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0XHRcdGhpZ2hsaWdodGVkRGF0ZXNba2V5RGF0ZV0gPSBoRGF0ZTtcblx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH0pO1xuXG5cdFx0XHRcdFx0b3B0aW9ucy5oaWdobGlnaHRlZERhdGVzID0gJC5leHRlbmQodHJ1ZSwgW10sIGhpZ2hsaWdodGVkRGF0ZXMpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKF9vcHRpb25zLmRpc2FibGVkRGF0ZXMgJiYgJC5pc0FycmF5KF9vcHRpb25zLmRpc2FibGVkRGF0ZXMpICYmIF9vcHRpb25zLmRpc2FibGVkRGF0ZXMubGVuZ3RoKSB7XG5cdFx0XHRcdFx0b3B0aW9ucy5kaXNhYmxlZERhdGVzID0gJC5leHRlbmQodHJ1ZSwgW10sIF9vcHRpb25zLmRpc2FibGVkRGF0ZXMpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKF9vcHRpb25zLmRpc2FibGVkV2Vla0RheXMgJiYgJC5pc0FycmF5KF9vcHRpb25zLmRpc2FibGVkV2Vla0RheXMpICYmIF9vcHRpb25zLmRpc2FibGVkV2Vla0RheXMubGVuZ3RoKSB7XG5cdFx0XHRcdFx0b3B0aW9ucy5kaXNhYmxlZFdlZWtEYXlzID0gJC5leHRlbmQodHJ1ZSwgW10sIF9vcHRpb25zLmRpc2FibGVkV2Vla0RheXMpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKChvcHRpb25zLm9wZW4gfHwgb3B0aW9ucy5vcGVuZWQpICYmICghb3B0aW9ucy5pbmxpbmUpKSB7XG5cdFx0XHRcdFx0aW5wdXQudHJpZ2dlcignb3Blbi54ZHNvZnQnKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmIChvcHRpb25zLmlubGluZSkge1xuXHRcdFx0XHRcdHRyaWdnZXJBZnRlck9wZW4gPSB0cnVlO1xuXHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLmFkZENsYXNzKCd4ZHNvZnRfaW5saW5lJyk7XG5cdFx0XHRcdFx0aW5wdXQuYWZ0ZXIoZGF0ZXRpbWVwaWNrZXIpLmhpZGUoKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmIChvcHRpb25zLmludmVyc2VCdXR0b24pIHtcblx0XHRcdFx0XHRvcHRpb25zLm5leHQgPSAneGRzb2Z0X3ByZXYnO1xuXHRcdFx0XHRcdG9wdGlvbnMucHJldiA9ICd4ZHNvZnRfbmV4dCc7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRpZiAob3B0aW9ucy5kYXRlcGlja2VyKSB7XG5cdFx0XHRcdFx0ZGF0ZXBpY2tlci5hZGRDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0ZGF0ZXBpY2tlci5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRpZiAob3B0aW9ucy50aW1lcGlja2VyKSB7XG5cdFx0XHRcdFx0dGltZXBpY2tlci5hZGRDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0dGltZXBpY2tlci5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRpZiAob3B0aW9ucy52YWx1ZSkge1xuXHRcdFx0XHRcdF94ZHNvZnRfZGF0ZXRpbWUuc2V0Q3VycmVudFRpbWUob3B0aW9ucy52YWx1ZSk7XG5cdFx0XHRcdFx0aWYgKGlucHV0ICYmIGlucHV0LnZhbCkge1xuXHRcdFx0XHRcdFx0aW5wdXQudmFsKF94ZHNvZnRfZGF0ZXRpbWUuc3RyKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRpZiAoaXNOYU4ob3B0aW9ucy5kYXlPZldlZWtTdGFydCkpIHtcblx0XHRcdFx0XHRvcHRpb25zLmRheU9mV2Vla1N0YXJ0ID0gMDtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRvcHRpb25zLmRheU9mV2Vla1N0YXJ0ID0gcGFyc2VJbnQob3B0aW9ucy5kYXlPZldlZWtTdGFydCwgMTApICUgNztcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmICghb3B0aW9ucy50aW1lcGlja2VyU2Nyb2xsYmFyKSB7XG5cdFx0XHRcdFx0dGltZWJveHBhcmVudC54ZHNvZnRTY3JvbGxlcihvcHRpb25zLCAnaGlkZScpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKG9wdGlvbnMubWluRGF0ZSAmJiAvXltcXCtcXC1dKC4qKSQvLnRlc3Qob3B0aW9ucy5taW5EYXRlKSkge1xuXHRcdFx0XHRcdG9wdGlvbnMubWluRGF0ZSA9IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShfeGRzb2Z0X2RhdGV0aW1lLnN0clRvRGF0ZVRpbWUob3B0aW9ucy5taW5EYXRlKSwgb3B0aW9ucy5mb3JtYXREYXRlKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmIChvcHRpb25zLm1heERhdGUgJiYgIC9eW1xcK1xcLV0oLiopJC8udGVzdChvcHRpb25zLm1heERhdGUpKSB7XG5cdFx0XHRcdFx0b3B0aW9ucy5tYXhEYXRlID0gZGF0ZUhlbHBlci5mb3JtYXREYXRlKF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlVGltZShvcHRpb25zLm1heERhdGUpLCBvcHRpb25zLmZvcm1hdERhdGUpO1xuXHRcdFx0XHR9XG5cbiAgICAgICAgICAgICAgICBpZiAob3B0aW9ucy5taW5EYXRlVGltZSAmJiAgL15cXCsoLiopJC8udGVzdChvcHRpb25zLm1pbkRhdGVUaW1lKSkge1xuICAgICAgICAgICAgICAgIFx0b3B0aW9ucy5taW5EYXRlVGltZSA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlVGltZShvcHRpb25zLm1pbkRhdGVUaW1lKS5kYXRlRm9ybWF0KG9wdGlvbnMuZm9ybWF0RGF0ZSk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgaWYgKG9wdGlvbnMubWF4RGF0ZVRpbWUgJiYgIC9eXFwrKC4qKSQvLnRlc3Qob3B0aW9ucy5tYXhEYXRlVGltZSkpIHtcbiAgICAgICAgICAgICAgICBcdG9wdGlvbnMubWF4RGF0ZVRpbWUgPSBfeGRzb2Z0X2RhdGV0aW1lLnN0clRvRGF0ZVRpbWUob3B0aW9ucy5tYXhEYXRlVGltZSkuZGF0ZUZvcm1hdChvcHRpb25zLmZvcm1hdERhdGUpO1xuICAgICAgICAgICAgICAgIH1cblxuXHRcdFx0XHRhcHBseUJ1dHRvbi50b2dnbGUob3B0aW9ucy5zaG93QXBwbHlCdXR0b24pO1xuXG5cdFx0XHRcdG1vbnRoX3BpY2tlclxuXHRcdFx0XHRcdC5maW5kKCcueGRzb2Z0X3RvZGF5X2J1dHRvbicpXG5cdFx0XHRcdFx0LmNzcygndmlzaWJpbGl0eScsICFvcHRpb25zLnRvZGF5QnV0dG9uID8gJ2hpZGRlbicgOiAndmlzaWJsZScpO1xuXG5cdFx0XHRcdG1vbnRoX3BpY2tlclxuXHRcdFx0XHRcdC5maW5kKCcuJyArIG9wdGlvbnMucHJldilcblx0XHRcdFx0XHQuY3NzKCd2aXNpYmlsaXR5JywgIW9wdGlvbnMucHJldkJ1dHRvbiA/ICdoaWRkZW4nIDogJ3Zpc2libGUnKTtcblxuXHRcdFx0XHRtb250aF9waWNrZXJcblx0XHRcdFx0XHQuZmluZCgnLicgKyBvcHRpb25zLm5leHQpXG5cdFx0XHRcdFx0LmNzcygndmlzaWJpbGl0eScsICFvcHRpb25zLm5leHRCdXR0b24gPyAnaGlkZGVuJyA6ICd2aXNpYmxlJyk7XG5cblx0XHRcdFx0c2V0TWFzayhvcHRpb25zKTtcblxuXHRcdFx0XHRpZiAob3B0aW9ucy52YWxpZGF0ZU9uQmx1cikge1xuXHRcdFx0XHRcdGlucHV0XG5cdFx0XHRcdFx0XHQub2ZmKCdibHVyLnhkc29mdCcpXG5cdFx0XHRcdFx0XHQub24oJ2JsdXIueGRzb2Z0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdFx0XHRpZiAob3B0aW9ucy5hbGxvd0JsYW5rICYmICghJC50cmltKCQodGhpcykudmFsKCkpLmxlbmd0aCB8fFxuXHRcdFx0XHRcdFx0XHRcdFx0KHR5cGVvZiBvcHRpb25zLm1hc2sgPT09IFwic3RyaW5nXCIgJiYgJC50cmltKCQodGhpcykudmFsKCkpID09PSBvcHRpb25zLm1hc2sucmVwbGFjZSgvWzAtOV0vZywgJ18nKSkpKSB7XG5cdFx0XHRcdFx0XHRcdFx0JCh0aGlzKS52YWwobnVsbCk7XG5cdFx0XHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuZGF0YSgneGRzb2Z0X2RhdGV0aW1lJykuZW1wdHkoKTtcblx0XHRcdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdFx0XHR2YXIgZCA9IGRhdGVIZWxwZXIucGFyc2VEYXRlKCQodGhpcykudmFsKCksIG9wdGlvbnMuZm9ybWF0KTtcblx0XHRcdFx0XHRcdFx0XHRpZiAoZCkgeyAvLyBwYXJzZURhdGUoKSBtYXkgc2tpcCBzb21lIGludmFsaWQgcGFydHMgbGlrZSBkYXRlIG9yIHRpbWUsIHNvIG1ha2UgaXQgY2xlYXIgZm9yIHVzZXI6IHNob3cgcGFyc2VkIGRhdGUvdGltZVxuXHRcdFx0XHRcdFx0XHRcdFx0JCh0aGlzKS52YWwoZGF0ZUhlbHBlci5mb3JtYXREYXRlKGQsIG9wdGlvbnMuZm9ybWF0KSk7XG5cdFx0XHRcdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdFx0XHRcdHZhciBzcGxpdHRlZEhvdXJzICAgPSArKFskKHRoaXMpLnZhbCgpWzBdLCAkKHRoaXMpLnZhbCgpWzFdXS5qb2luKCcnKSksXG5cdFx0XHRcdFx0XHRcdFx0XHRcdHNwbGl0dGVkTWludXRlcyA9ICsoWyQodGhpcykudmFsKClbMl0sICQodGhpcykudmFsKClbM11dLmpvaW4oJycpKTtcblxuXHRcdFx0XHRcdFx0XHRcdFx0Ly8gcGFyc2UgdGhlIG51bWJlcnMgYXMgMDMxMiA9PiAwMzoxMlxuXHRcdFx0XHRcdFx0XHRcdFx0aWYgKCFvcHRpb25zLmRhdGVwaWNrZXIgJiYgb3B0aW9ucy50aW1lcGlja2VyICYmIHNwbGl0dGVkSG91cnMgPj0gMCAmJiBzcGxpdHRlZEhvdXJzIDwgMjQgJiYgc3BsaXR0ZWRNaW51dGVzID49IDAgJiYgc3BsaXR0ZWRNaW51dGVzIDwgNjApIHtcblx0XHRcdFx0XHRcdFx0XHRcdFx0JCh0aGlzKS52YWwoW3NwbGl0dGVkSG91cnMsIHNwbGl0dGVkTWludXRlc10ubWFwKGZ1bmN0aW9uIChpdGVtKSB7XG5cdFx0XHRcdFx0XHRcdFx0XHRcdFx0cmV0dXJuIGl0ZW0gPiA5ID8gaXRlbSA6ICcwJyArIGl0ZW07XG5cdFx0XHRcdFx0XHRcdFx0XHRcdH0pLmpvaW4oJzonKSk7XG5cdFx0XHRcdFx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0XHRcdFx0XHQkKHRoaXMpLnZhbChkYXRlSGVscGVyLmZvcm1hdERhdGUoX3hkc29mdF9kYXRldGltZS5ub3coKSwgb3B0aW9ucy5mb3JtYXQpKTtcblx0XHRcdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuZGF0YSgneGRzb2Z0X2RhdGV0aW1lJykuc2V0Q3VycmVudFRpbWUoJCh0aGlzKS52YWwoKSk7XG5cdFx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCdjaGFuZ2VkYXRldGltZS54ZHNvZnQnKTtcblx0XHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2xvc2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHR9KTtcblx0XHRcdFx0fVxuXHRcdFx0XHRvcHRpb25zLmRheU9mV2Vla1N0YXJ0UHJldiA9IChvcHRpb25zLmRheU9mV2Vla1N0YXJ0ID09PSAwKSA/IDYgOiBvcHRpb25zLmRheU9mV2Vla1N0YXJ0IC0gMTtcblxuXHRcdFx0XHRkYXRldGltZXBpY2tlclxuXHRcdFx0XHRcdC50cmlnZ2VyKCd4Y2hhbmdlLnhkc29mdCcpXG5cdFx0XHRcdFx0LnRyaWdnZXIoJ2FmdGVyT3Blbi54ZHNvZnQnKTtcblx0XHRcdH07XG5cblx0XHRcdGRhdGV0aW1lcGlja2VyXG5cdFx0XHRcdC5kYXRhKCdvcHRpb25zJywgb3B0aW9ucylcblx0XHRcdFx0Lm9uKCd0b3VjaHN0YXJ0IG1vdXNlZG93bi54ZHNvZnQnLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHRldmVudC5zdG9wUHJvcGFnYXRpb24oKTtcblx0XHRcdFx0XHRldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0XHRcdHllYXJzZWxlY3QuaGlkZSgpO1xuXHRcdFx0XHRcdG1vbnRoc2VsZWN0LmhpZGUoKTtcblx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdH0pO1xuXG5cdFx0XHQvL3Njcm9sbF9lbGVtZW50ID0gdGltZXBpY2tlci5maW5kKCcueGRzb2Z0X3RpbWVfYm94Jyk7XG5cdFx0XHR0aW1lYm94cGFyZW50LmFwcGVuZCh0aW1lYm94KTtcblx0XHRcdHRpbWVib3hwYXJlbnQueGRzb2Z0U2Nyb2xsZXIob3B0aW9ucyk7XG5cblx0XHRcdGRhdGV0aW1lcGlja2VyLm9uKCdhZnRlck9wZW4ueGRzb2Z0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHR0aW1lYm94cGFyZW50Lnhkc29mdFNjcm9sbGVyKG9wdGlvbnMpO1xuXHRcdFx0fSk7XG5cblx0XHRcdGRhdGV0aW1lcGlja2VyXG5cdFx0XHRcdC5hcHBlbmQoZGF0ZXBpY2tlcilcblx0XHRcdFx0LmFwcGVuZCh0aW1lcGlja2VyKTtcblxuXHRcdFx0aWYgKG9wdGlvbnMud2l0aG91dENvcHlyaWdodCAhPT0gdHJ1ZSkge1xuXHRcdFx0XHRkYXRldGltZXBpY2tlclxuXHRcdFx0XHRcdC5hcHBlbmQoeGRzb2Z0X2NvcHlyaWdodCk7XG5cdFx0XHR9XG5cblx0XHRcdGRhdGVwaWNrZXJcblx0XHRcdFx0LmFwcGVuZChtb250aF9waWNrZXIpXG5cdFx0XHRcdC5hcHBlbmQoY2FsZW5kYXIpXG5cdFx0XHRcdC5hcHBlbmQoYXBwbHlCdXR0b24pO1xuXG4gICAgICAgICAgICBpZiAob3B0aW9ucy5pbnNpZGVQYXJlbnQpIHtcbiAgICAgICAgICAgICAgICAkKGlucHV0KS5wYXJlbnQoKS5hcHBlbmQoZGF0ZXRpbWVwaWNrZXIpO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAkKG9wdGlvbnMucGFyZW50SUQpLmFwcGVuZChkYXRldGltZXBpY2tlcik7XG4gICAgICAgICAgICB9XG5cblx0XHRcdFhEU29mdF9kYXRldGltZSA9IGZ1bmN0aW9uICgpIHtcblx0XHRcdFx0dmFyIF90aGlzID0gdGhpcztcblx0XHRcdFx0X3RoaXMubm93ID0gZnVuY3Rpb24gKG5vcmVjdXJzaW9uKSB7XG5cdFx0XHRcdFx0dmFyIGQgPSBuZXcgRGF0ZSgpLFxuXHRcdFx0XHRcdFx0ZGF0ZSxcblx0XHRcdFx0XHRcdHRpbWU7XG5cblx0XHRcdFx0XHRpZiAoIW5vcmVjdXJzaW9uICYmIG9wdGlvbnMuZGVmYXVsdERhdGUpIHtcblx0XHRcdFx0XHRcdGRhdGUgPSBfdGhpcy5zdHJUb0RhdGVUaW1lKG9wdGlvbnMuZGVmYXVsdERhdGUpO1xuXHRcdFx0XHRcdFx0ZC5zZXRGdWxsWWVhcihkYXRlLmdldEZ1bGxZZWFyKCkpO1xuXHRcdFx0XHRcdFx0ZC5zZXRNb250aChkYXRlLmdldE1vbnRoKCkpO1xuXHRcdFx0XHRcdFx0ZC5zZXREYXRlKGRhdGUuZ2V0RGF0ZSgpKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRkLnNldEZ1bGxZZWFyKGQuZ2V0RnVsbFllYXIoKSk7XG5cblx0XHRcdFx0XHRpZiAoIW5vcmVjdXJzaW9uICYmIG9wdGlvbnMuZGVmYXVsdFRpbWUpIHtcblx0XHRcdFx0XHRcdHRpbWUgPSBfdGhpcy5zdHJ0b3RpbWUob3B0aW9ucy5kZWZhdWx0VGltZSk7XG5cdFx0XHRcdFx0XHRkLnNldEhvdXJzKHRpbWUuZ2V0SG91cnMoKSk7XG5cdFx0XHRcdFx0XHRkLnNldE1pbnV0ZXModGltZS5nZXRNaW51dGVzKCkpO1xuXHRcdFx0XHRcdFx0ZC5zZXRTZWNvbmRzKHRpbWUuZ2V0U2Vjb25kcygpKTtcblx0XHRcdFx0XHRcdGQuc2V0TWlsbGlzZWNvbmRzKHRpbWUuZ2V0TWlsbGlzZWNvbmRzKCkpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRyZXR1cm4gZDtcblx0XHRcdFx0fTtcblxuXHRcdFx0XHRfdGhpcy5pc1ZhbGlkRGF0ZSA9IGZ1bmN0aW9uIChkKSB7XG5cdFx0XHRcdFx0aWYgKE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmcuY2FsbChkKSAhPT0gXCJbb2JqZWN0IERhdGVdXCIpIHtcblx0XHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0cmV0dXJuICFpc05hTihkLmdldFRpbWUoKSk7XG5cdFx0XHRcdH07XG5cblx0XHRcdFx0X3RoaXMuc2V0Q3VycmVudFRpbWUgPSBmdW5jdGlvbiAoZFRpbWUsIHJlcXVpcmVWYWxpZERhdGUpIHtcblx0XHRcdFx0XHRpZiAodHlwZW9mIGRUaW1lID09PSAnc3RyaW5nJykge1xuXHRcdFx0XHRcdFx0X3RoaXMuY3VycmVudFRpbWUgPSBfdGhpcy5zdHJUb0RhdGVUaW1lKGRUaW1lKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0ZWxzZSBpZiAoX3RoaXMuaXNWYWxpZERhdGUoZFRpbWUpKSB7XG5cdFx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZSA9IGRUaW1lO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRlbHNlIGlmICghZFRpbWUgJiYgIXJlcXVpcmVWYWxpZERhdGUgJiYgb3B0aW9ucy5hbGxvd0JsYW5rICYmICFvcHRpb25zLmlubGluZSkge1xuXHRcdFx0XHRcdFx0X3RoaXMuY3VycmVudFRpbWUgPSBudWxsO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRlbHNlIHtcblx0XHRcdFx0XHRcdF90aGlzLmN1cnJlbnRUaW1lID0gX3RoaXMubm93KCk7XG5cdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcigneGNoYW5nZS54ZHNvZnQnKTtcblx0XHRcdFx0fTtcblxuXHRcdFx0XHRfdGhpcy5lbXB0eSA9IGZ1bmN0aW9uICgpIHtcblx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZSA9IG51bGw7XG5cdFx0XHRcdH07XG5cblx0XHRcdFx0X3RoaXMuZ2V0Q3VycmVudFRpbWUgPSBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0cmV0dXJuIF90aGlzLmN1cnJlbnRUaW1lO1xuXHRcdFx0XHR9O1xuXG5cdFx0XHRcdF90aGlzLm5leHRNb250aCA9IGZ1bmN0aW9uICgpIHtcblxuXHRcdFx0XHRcdGlmIChfdGhpcy5jdXJyZW50VGltZSA9PT0gdW5kZWZpbmVkIHx8IF90aGlzLmN1cnJlbnRUaW1lID09PSBudWxsKSB7XG5cdFx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZSA9IF90aGlzLm5vdygpO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdHZhciBtb250aCA9IF90aGlzLmN1cnJlbnRUaW1lLmdldE1vbnRoKCkgKyAxLFxuXHRcdFx0XHRcdFx0eWVhcjtcblx0XHRcdFx0XHRpZiAobW9udGggPT09IDEyKSB7XG5cdFx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZS5zZXRGdWxsWWVhcihfdGhpcy5jdXJyZW50VGltZS5nZXRGdWxsWWVhcigpICsgMSk7XG5cdFx0XHRcdFx0XHRtb250aCA9IDA7XG5cdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0eWVhciA9IF90aGlzLmN1cnJlbnRUaW1lLmdldEZ1bGxZZWFyKCk7XG5cblx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZS5zZXREYXRlKFxuXHRcdFx0XHRcdFx0TWF0aC5taW4oXG5cdFx0XHRcdFx0XHRcdG5ldyBEYXRlKF90aGlzLmN1cnJlbnRUaW1lLmdldEZ1bGxZZWFyKCksIG1vbnRoICsgMSwgMCkuZ2V0RGF0ZSgpLFxuXHRcdFx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZS5nZXREYXRlKClcblx0XHRcdFx0XHRcdClcblx0XHRcdFx0XHQpO1xuXHRcdFx0XHRcdF90aGlzLmN1cnJlbnRUaW1lLnNldE1vbnRoKG1vbnRoKTtcblxuXHRcdFx0XHRcdGlmIChvcHRpb25zLm9uQ2hhbmdlTW9udGggJiYgJC5pc0Z1bmN0aW9uKG9wdGlvbnMub25DaGFuZ2VNb250aCkpIHtcblx0XHRcdFx0XHRcdG9wdGlvbnMub25DaGFuZ2VNb250aC5jYWxsKGRhdGV0aW1lcGlja2VyLCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLCBkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRpZiAoeWVhciAhPT0gX3RoaXMuY3VycmVudFRpbWUuZ2V0RnVsbFllYXIoKSAmJiAkLmlzRnVuY3Rpb24ob3B0aW9ucy5vbkNoYW5nZVllYXIpKSB7XG5cdFx0XHRcdFx0XHRvcHRpb25zLm9uQ2hhbmdlWWVhci5jYWxsKGRhdGV0aW1lcGlja2VyLCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLCBkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCd4Y2hhbmdlLnhkc29mdCcpO1xuXHRcdFx0XHRcdHJldHVybiBtb250aDtcblx0XHRcdFx0fTtcblxuXHRcdFx0XHRfdGhpcy5wcmV2TW9udGggPSBmdW5jdGlvbiAoKSB7XG5cblx0XHRcdFx0XHRpZiAoX3RoaXMuY3VycmVudFRpbWUgPT09IHVuZGVmaW5lZCB8fCBfdGhpcy5jdXJyZW50VGltZSA9PT0gbnVsbCkge1xuXHRcdFx0XHRcdFx0X3RoaXMuY3VycmVudFRpbWUgPSBfdGhpcy5ub3coKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHR2YXIgbW9udGggPSBfdGhpcy5jdXJyZW50VGltZS5nZXRNb250aCgpIC0gMTtcblx0XHRcdFx0XHRpZiAobW9udGggPT09IC0xKSB7XG5cdFx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZS5zZXRGdWxsWWVhcihfdGhpcy5jdXJyZW50VGltZS5nZXRGdWxsWWVhcigpIC0gMSk7XG5cdFx0XHRcdFx0XHRtb250aCA9IDExO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZS5zZXREYXRlKFxuXHRcdFx0XHRcdFx0TWF0aC5taW4oXG5cdFx0XHRcdFx0XHRcdG5ldyBEYXRlKF90aGlzLmN1cnJlbnRUaW1lLmdldEZ1bGxZZWFyKCksIG1vbnRoICsgMSwgMCkuZ2V0RGF0ZSgpLFxuXHRcdFx0XHRcdFx0XHRfdGhpcy5jdXJyZW50VGltZS5nZXREYXRlKClcblx0XHRcdFx0XHRcdClcblx0XHRcdFx0XHQpO1xuXHRcdFx0XHRcdF90aGlzLmN1cnJlbnRUaW1lLnNldE1vbnRoKG1vbnRoKTtcblx0XHRcdFx0XHRpZiAob3B0aW9ucy5vbkNoYW5nZU1vbnRoICYmICQuaXNGdW5jdGlvbihvcHRpb25zLm9uQ2hhbmdlTW9udGgpKSB7XG5cdFx0XHRcdFx0XHRvcHRpb25zLm9uQ2hhbmdlTW9udGguY2FsbChkYXRldGltZXBpY2tlciwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSwgZGF0ZXRpbWVwaWNrZXIuZGF0YSgnaW5wdXQnKSk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ3hjaGFuZ2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0cmV0dXJuIG1vbnRoO1xuXHRcdFx0XHR9O1xuXG5cdFx0XHRcdF90aGlzLmdldFdlZWtPZlllYXIgPSBmdW5jdGlvbiAoZGF0ZXRpbWUpIHtcblx0XHRcdFx0XHRpZiAob3B0aW9ucy5vbkdldFdlZWtPZlllYXIgJiYgJC5pc0Z1bmN0aW9uKG9wdGlvbnMub25HZXRXZWVrT2ZZZWFyKSkge1xuXHRcdFx0XHRcdFx0dmFyIHdlZWsgPSBvcHRpb25zLm9uR2V0V2Vla09mWWVhci5jYWxsKGRhdGV0aW1lcGlja2VyLCBkYXRldGltZSk7XG5cdFx0XHRcdFx0XHRpZiAodHlwZW9mIHdlZWsgIT09ICd1bmRlZmluZWQnKSB7XG5cdFx0XHRcdFx0XHRcdHJldHVybiB3ZWVrO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHR2YXIgb25lamFuID0gbmV3IERhdGUoZGF0ZXRpbWUuZ2V0RnVsbFllYXIoKSwgMCwgMSk7XG5cblx0XHRcdFx0XHQvL0ZpcnN0IHdlZWsgb2YgdGhlIHllYXIgaXMgdGggb25lIHdpdGggdGhlIGZpcnN0IFRodXJzZGF5IGFjY29yZGluZyB0byBJU084NjAxXG5cdFx0XHRcdFx0aWYgKG9uZWphbi5nZXREYXkoKSAhPT0gNCkge1xuXHRcdFx0XHRcdFx0b25lamFuLnNldE1vbnRoKDAsIDEgKyAoKDQgLSBvbmVqYW4uZ2V0RGF5KCkrIDcpICUgNykpO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdHJldHVybiBNYXRoLmNlaWwoKCgoZGF0ZXRpbWUgLSBvbmVqYW4pIC8gODY0MDAwMDApICsgb25lamFuLmdldERheSgpICsgMSkgLyA3KTtcblx0XHRcdFx0fTtcblxuXHRcdFx0XHRfdGhpcy5zdHJUb0RhdGVUaW1lID0gZnVuY3Rpb24gKHNEYXRlVGltZSkge1xuXHRcdFx0XHRcdHZhciB0bXBEYXRlID0gW10sIHRpbWVPZmZzZXQsIGN1cnJlbnRUaW1lO1xuXG5cdFx0XHRcdFx0aWYgKHNEYXRlVGltZSAmJiBzRGF0ZVRpbWUgaW5zdGFuY2VvZiBEYXRlICYmIF90aGlzLmlzVmFsaWREYXRlKHNEYXRlVGltZSkpIHtcblx0XHRcdFx0XHRcdHJldHVybiBzRGF0ZVRpbWU7XG5cdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0dG1wRGF0ZSA9IC9eKFsrLV17MX0pKC4qKSQvLmV4ZWMoc0RhdGVUaW1lKTtcblxuXHRcdFx0XHRcdGlmICh0bXBEYXRlKSB7XG5cdFx0XHRcdFx0XHR0bXBEYXRlWzJdID0gZGF0ZUhlbHBlci5wYXJzZURhdGUodG1wRGF0ZVsyXSwgb3B0aW9ucy5mb3JtYXREYXRlKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRpZiAodG1wRGF0ZSAgJiYgdG1wRGF0ZVsyXSkge1xuXHRcdFx0XHRcdFx0dGltZU9mZnNldCA9IHRtcERhdGVbMl0uZ2V0VGltZSgpIC0gKHRtcERhdGVbMl0uZ2V0VGltZXpvbmVPZmZzZXQoKSkgKiA2MDAwMDtcblx0XHRcdFx0XHRcdGN1cnJlbnRUaW1lID0gbmV3IERhdGUoKF90aGlzLm5vdyh0cnVlKSkuZ2V0VGltZSgpICsgcGFyc2VJbnQodG1wRGF0ZVsxXSArICcxJywgMTApICogdGltZU9mZnNldCk7XG5cdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdGN1cnJlbnRUaW1lID0gc0RhdGVUaW1lID8gZGF0ZUhlbHBlci5wYXJzZURhdGUoc0RhdGVUaW1lLCBvcHRpb25zLmZvcm1hdCkgOiBfdGhpcy5ub3coKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRpZiAoIV90aGlzLmlzVmFsaWREYXRlKGN1cnJlbnRUaW1lKSkge1xuXHRcdFx0XHRcdFx0Y3VycmVudFRpbWUgPSBfdGhpcy5ub3coKTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRyZXR1cm4gY3VycmVudFRpbWU7XG5cdFx0XHRcdH07XG5cblx0XHRcdFx0X3RoaXMuc3RyVG9EYXRlID0gZnVuY3Rpb24gKHNEYXRlKSB7XG5cdFx0XHRcdFx0aWYgKHNEYXRlICYmIHNEYXRlIGluc3RhbmNlb2YgRGF0ZSAmJiBfdGhpcy5pc1ZhbGlkRGF0ZShzRGF0ZSkpIHtcblx0XHRcdFx0XHRcdHJldHVybiBzRGF0ZTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHR2YXIgY3VycmVudFRpbWUgPSBzRGF0ZSA/IGRhdGVIZWxwZXIucGFyc2VEYXRlKHNEYXRlLCBvcHRpb25zLmZvcm1hdERhdGUpIDogX3RoaXMubm93KHRydWUpO1xuXHRcdFx0XHRcdGlmICghX3RoaXMuaXNWYWxpZERhdGUoY3VycmVudFRpbWUpKSB7XG5cdFx0XHRcdFx0XHRjdXJyZW50VGltZSA9IF90aGlzLm5vdyh0cnVlKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0cmV0dXJuIGN1cnJlbnRUaW1lO1xuXHRcdFx0XHR9O1xuXG5cdFx0XHRcdF90aGlzLnN0cnRvdGltZSA9IGZ1bmN0aW9uIChzVGltZSkge1xuXHRcdFx0XHRcdGlmIChzVGltZSAmJiBzVGltZSBpbnN0YW5jZW9mIERhdGUgJiYgX3RoaXMuaXNWYWxpZERhdGUoc1RpbWUpKSB7XG5cdFx0XHRcdFx0XHRyZXR1cm4gc1RpbWU7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdHZhciBjdXJyZW50VGltZSA9IHNUaW1lID8gZGF0ZUhlbHBlci5wYXJzZURhdGUoc1RpbWUsIG9wdGlvbnMuZm9ybWF0VGltZSkgOiBfdGhpcy5ub3codHJ1ZSk7XG5cdFx0XHRcdFx0aWYgKCFfdGhpcy5pc1ZhbGlkRGF0ZShjdXJyZW50VGltZSkpIHtcblx0XHRcdFx0XHRcdGN1cnJlbnRUaW1lID0gX3RoaXMubm93KHRydWUpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRyZXR1cm4gY3VycmVudFRpbWU7XG5cdFx0XHRcdH07XG5cblx0XHRcdFx0X3RoaXMuc3RyID0gZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdHZhciBmb3JtYXQgPSBvcHRpb25zLmZvcm1hdDtcblx0XHRcdFx0XHRpZiAob3B0aW9ucy55ZWFyT2Zmc2V0KSB7XG5cdFx0XHRcdFx0XHRmb3JtYXQgPSBmb3JtYXQucmVwbGFjZSgnWScsIF90aGlzLmN1cnJlbnRUaW1lLmdldEZ1bGxZZWFyKCkgKyBvcHRpb25zLnllYXJPZmZzZXQpO1xuXHRcdFx0XHRcdFx0Zm9ybWF0ID0gZm9ybWF0LnJlcGxhY2UoJ3knLCBTdHJpbmcoX3RoaXMuY3VycmVudFRpbWUuZ2V0RnVsbFllYXIoKSArIG9wdGlvbnMueWVhck9mZnNldCkuc3Vic3RyaW5nKDIsIDQpKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0cmV0dXJuIGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShfdGhpcy5jdXJyZW50VGltZSwgZm9ybWF0KTtcblx0XHRcdFx0fTtcblx0XHRcdFx0X3RoaXMuY3VycmVudFRpbWUgPSB0aGlzLm5vdygpO1xuXHRcdFx0fTtcblxuXHRcdFx0X3hkc29mdF9kYXRldGltZSA9IG5ldyBYRFNvZnRfZGF0ZXRpbWUoKTtcblxuXHRcdFx0YXBwbHlCdXR0b24ub24oJ3RvdWNoZW5kIGNsaWNrJywgZnVuY3Rpb24gKGUpIHsvL3BhdGhicml0ZVxuXHRcdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XG5cdFx0XHRcdGRhdGV0aW1lcGlja2VyLmRhdGEoJ2NoYW5nZWQnLCB0cnVlKTtcblx0XHRcdFx0X3hkc29mdF9kYXRldGltZS5zZXRDdXJyZW50VGltZShnZXRDdXJyZW50VmFsdWUoKSk7XG5cdFx0XHRcdGlucHV0LnZhbChfeGRzb2Z0X2RhdGV0aW1lLnN0cigpKTtcblx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2xvc2UueGRzb2Z0Jyk7XG5cdFx0XHR9KTtcblx0XHRcdG1vbnRoX3BpY2tlclxuXHRcdFx0XHQuZmluZCgnLnhkc29mdF90b2RheV9idXR0b24nKVxuXHRcdFx0XHQub24oJ3RvdWNoZW5kIG1vdXNlZG93bi54ZHNvZnQnLCBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuZGF0YSgnY2hhbmdlZCcsIHRydWUpO1xuXHRcdFx0XHRcdF94ZHNvZnRfZGF0ZXRpbWUuc2V0Q3VycmVudFRpbWUoMCwgdHJ1ZSk7XG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignYWZ0ZXJPcGVuLnhkc29mdCcpO1xuXHRcdFx0XHR9KS5vbignZGJsY2xpY2sueGRzb2Z0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHR2YXIgY3VycmVudERhdGUgPSBfeGRzb2Z0X2RhdGV0aW1lLmdldEN1cnJlbnRUaW1lKCksIG1pbkRhdGUsIG1heERhdGU7XG5cdFx0XHRcdGN1cnJlbnREYXRlID0gbmV3IERhdGUoY3VycmVudERhdGUuZ2V0RnVsbFllYXIoKSwgY3VycmVudERhdGUuZ2V0TW9udGgoKSwgY3VycmVudERhdGUuZ2V0RGF0ZSgpKTtcblx0XHRcdFx0bWluRGF0ZSA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlKG9wdGlvbnMubWluRGF0ZSk7XG5cdFx0XHRcdG1pbkRhdGUgPSBuZXcgRGF0ZShtaW5EYXRlLmdldEZ1bGxZZWFyKCksIG1pbkRhdGUuZ2V0TW9udGgoKSwgbWluRGF0ZS5nZXREYXRlKCkpO1xuXHRcdFx0XHRpZiAoY3VycmVudERhdGUgPCBtaW5EYXRlKSB7XG5cdFx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0XHR9XG5cdFx0XHRcdG1heERhdGUgPSBfeGRzb2Z0X2RhdGV0aW1lLnN0clRvRGF0ZShvcHRpb25zLm1heERhdGUpO1xuXHRcdFx0XHRtYXhEYXRlID0gbmV3IERhdGUobWF4RGF0ZS5nZXRGdWxsWWVhcigpLCBtYXhEYXRlLmdldE1vbnRoKCksIG1heERhdGUuZ2V0RGF0ZSgpKTtcblx0XHRcdFx0aWYgKGN1cnJlbnREYXRlID4gbWF4RGF0ZSkge1xuXHRcdFx0XHRcdHJldHVybjtcblx0XHRcdFx0fVxuXHRcdFx0XHRpbnB1dC52YWwoX3hkc29mdF9kYXRldGltZS5zdHIoKSk7XG5cdFx0XHRcdGlucHV0LnRyaWdnZXIoJ2NoYW5nZScpO1xuXHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCdjbG9zZS54ZHNvZnQnKTtcblx0XHRcdH0pO1xuXHRcdFx0bW9udGhfcGlja2VyXG5cdFx0XHRcdC5maW5kKCcueGRzb2Z0X3ByZXYsLnhkc29mdF9uZXh0Jylcblx0XHRcdFx0Lm9uKCd0b3VjaGVuZCBtb3VzZWRvd24ueGRzb2Z0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdHZhciAkdGhpcyA9ICQodGhpcyksXG5cdFx0XHRcdFx0XHR0aW1lciA9IDAsXG5cdFx0XHRcdFx0XHRzdG9wID0gZmFsc2U7XG5cblx0XHRcdFx0XHQoZnVuY3Rpb24gYXJndW1lbnRzX2NhbGxlZTEodikge1xuXHRcdFx0XHRcdFx0aWYgKCR0aGlzLmhhc0NsYXNzKG9wdGlvbnMubmV4dCkpIHtcblx0XHRcdFx0XHRcdFx0X3hkc29mdF9kYXRldGltZS5uZXh0TW9udGgoKTtcblx0XHRcdFx0XHRcdH0gZWxzZSBpZiAoJHRoaXMuaGFzQ2xhc3Mob3B0aW9ucy5wcmV2KSkge1xuXHRcdFx0XHRcdFx0XHRfeGRzb2Z0X2RhdGV0aW1lLnByZXZNb250aCgpO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0aWYgKG9wdGlvbnMubW9udGhDaGFuZ2VTcGlubmVyKSB7XG5cdFx0XHRcdFx0XHRcdGlmICghc3RvcCkge1xuXHRcdFx0XHRcdFx0XHRcdHRpbWVyID0gc2V0VGltZW91dChhcmd1bWVudHNfY2FsbGVlMSwgdiB8fCAxMDApO1xuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fSg1MDApKTtcblxuXHRcdFx0XHRcdCQoW29wdGlvbnMub3duZXJEb2N1bWVudC5ib2R5LCBvcHRpb25zLmNvbnRlbnRXaW5kb3ddKS5vbigndG91Y2hlbmQgbW91c2V1cC54ZHNvZnQnLCBmdW5jdGlvbiBhcmd1bWVudHNfY2FsbGVlMigpIHtcblx0XHRcdFx0XHRcdGNsZWFyVGltZW91dCh0aW1lcik7XG5cdFx0XHRcdFx0XHRzdG9wID0gdHJ1ZTtcblx0XHRcdFx0XHRcdCQoW29wdGlvbnMub3duZXJEb2N1bWVudC5ib2R5LCBvcHRpb25zLmNvbnRlbnRXaW5kb3ddKS5vZmYoJ3RvdWNoZW5kIG1vdXNldXAueGRzb2Z0JywgYXJndW1lbnRzX2NhbGxlZTIpO1xuXHRcdFx0XHRcdH0pO1xuXHRcdFx0XHR9KTtcblxuXHRcdFx0dGltZXBpY2tlclxuXHRcdFx0XHQuZmluZCgnLnhkc29mdF9wcmV2LC54ZHNvZnRfbmV4dCcpXG5cdFx0XHRcdC5vbigndG91Y2hlbmQgbW91c2Vkb3duLnhkc29mdCcsIGZ1bmN0aW9uICgpIHtcblx0XHRcdFx0XHR2YXIgJHRoaXMgPSAkKHRoaXMpLFxuXHRcdFx0XHRcdFx0dGltZXIgPSAwLFxuXHRcdFx0XHRcdFx0c3RvcCA9IGZhbHNlLFxuXHRcdFx0XHRcdFx0cGVyaW9kID0gMTEwO1xuXHRcdFx0XHRcdChmdW5jdGlvbiBhcmd1bWVudHNfY2FsbGVlNCh2KSB7XG5cdFx0XHRcdFx0XHR2YXIgcGhlaWdodCA9IHRpbWVib3hwYXJlbnRbMF0uY2xpZW50SGVpZ2h0LFxuXHRcdFx0XHRcdFx0XHRoZWlnaHQgPSB0aW1lYm94WzBdLm9mZnNldEhlaWdodCxcblx0XHRcdFx0XHRcdFx0dG9wID0gTWF0aC5hYnMocGFyc2VJbnQodGltZWJveC5jc3MoJ21hcmdpblRvcCcpLCAxMCkpO1xuXHRcdFx0XHRcdFx0aWYgKCR0aGlzLmhhc0NsYXNzKG9wdGlvbnMubmV4dCkgJiYgKGhlaWdodCAtIHBoZWlnaHQpIC0gb3B0aW9ucy50aW1lSGVpZ2h0SW5UaW1lUGlja2VyID49IHRvcCkge1xuXHRcdFx0XHRcdFx0XHR0aW1lYm94LmNzcygnbWFyZ2luVG9wJywgJy0nICsgKHRvcCArIG9wdGlvbnMudGltZUhlaWdodEluVGltZVBpY2tlcikgKyAncHgnKTtcblx0XHRcdFx0XHRcdH0gZWxzZSBpZiAoJHRoaXMuaGFzQ2xhc3Mob3B0aW9ucy5wcmV2KSAmJiB0b3AgLSBvcHRpb25zLnRpbWVIZWlnaHRJblRpbWVQaWNrZXIgPj0gMCkge1xuXHRcdFx0XHRcdFx0XHR0aW1lYm94LmNzcygnbWFyZ2luVG9wJywgJy0nICsgKHRvcCAtIG9wdGlvbnMudGltZUhlaWdodEluVGltZVBpY2tlcikgKyAncHgnKTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdC8qKlxuXHRcdFx0XHRcdFx0ICogRml4ZWQgYnVnOlxuXHRcdFx0XHRcdFx0ICogV2hlbiB1c2luZyBjc3MzIHRyYW5zaXRpb24sIGl0IHdpbGwgY2F1c2UgYSBidWcgdGhhdCB5b3UgY2Fubm90IHNjcm9sbCB0aGUgdGltZXBpY2tlciBsaXN0LlxuXHRcdFx0XHRcdFx0ICogVGhlIHJlYXNvbiBpcyB0aGF0IHRoZSB0cmFuc2l0aW9uLWR1cmF0aW9uIHRpbWUsIGlmIHlvdSBzZXQgaXQgdG8gMCwgYWxsIHRoaW5ncyBmaW5lLCBvdGhlcndpc2UsIHRoaXNcblx0XHRcdFx0XHRcdCAqIHdvdWxkIGNhdXNlIGEgYnVnIHdoZW4geW91IHVzZSBqcXVlcnkuY3NzIG1ldGhvZC5cblx0XHRcdFx0XHRcdCAqIExldCdzIHNheTogKiB7IHRyYW5zaXRpb246IGFsbCAuNXMgZWFzZTsgfVxuXHRcdFx0XHRcdFx0ICoganF1ZXJ5IHRpbWVib3guY3NzKCdtYXJnaW5Ub3AnKSB3aWxsIHJldHVybiB0aGUgb3JpZ2luYWwgdmFsdWUgd2hpY2ggaXMgYmVmb3JlIHlvdSBjbGlja2luZyB0aGUgbmV4dC9wcmV2IGJ1dHRvbixcblx0XHRcdFx0XHRcdCAqIG1lYW53aGlsZSB0aGUgdGltZWJveFswXS5zdHlsZS5tYXJnaW5Ub3Agd2lsbCByZXR1cm4gdGhlIHJpZ2h0IHZhbHVlIHdoaWNoIGlzIGFmdGVyIHlvdSBjbGlja2luZyB0aGVcblx0XHRcdFx0XHRcdCAqIG5leHQvcHJldiBidXR0b24uXG5cdFx0XHRcdFx0XHQgKlxuXHRcdFx0XHRcdFx0ICogV2hhdCB3ZSBzaG91bGQgZG86XG5cdFx0XHRcdFx0XHQgKiBSZXBsYWNlIHRpbWVib3guY3NzKCdtYXJnaW5Ub3AnKSB3aXRoIHRpbWVib3hbMF0uc3R5bGUubWFyZ2luVG9wLlxuXHRcdFx0XHRcdFx0ICovXG5cdFx0XHRcdFx0XHR0aW1lYm94cGFyZW50LnRyaWdnZXIoJ3Njcm9sbF9lbGVtZW50Lnhkc29mdF9zY3JvbGxlcicsIFtNYXRoLmFicyhwYXJzZUludCh0aW1lYm94WzBdLnN0eWxlLm1hcmdpblRvcCwgMTApIC8gKGhlaWdodCAtIHBoZWlnaHQpKV0pO1xuXHRcdFx0XHRcdFx0cGVyaW9kID0gKHBlcmlvZCA+IDEwKSA/IDEwIDogcGVyaW9kIC0gMTA7XG5cdFx0XHRcdFx0XHRpZiAoIXN0b3ApIHtcblx0XHRcdFx0XHRcdFx0dGltZXIgPSBzZXRUaW1lb3V0KGFyZ3VtZW50c19jYWxsZWU0LCB2IHx8IHBlcmlvZCk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fSg1MDApKTtcblx0XHRcdFx0XHQkKFtvcHRpb25zLm93bmVyRG9jdW1lbnQuYm9keSwgb3B0aW9ucy5jb250ZW50V2luZG93XSkub24oJ3RvdWNoZW5kIG1vdXNldXAueGRzb2Z0JywgZnVuY3Rpb24gYXJndW1lbnRzX2NhbGxlZTUoKSB7XG5cdFx0XHRcdFx0XHRjbGVhclRpbWVvdXQodGltZXIpO1xuXHRcdFx0XHRcdFx0c3RvcCA9IHRydWU7XG5cdFx0XHRcdFx0XHQkKFtvcHRpb25zLm93bmVyRG9jdW1lbnQuYm9keSwgb3B0aW9ucy5jb250ZW50V2luZG93XSlcblx0XHRcdFx0XHRcdFx0Lm9mZigndG91Y2hlbmQgbW91c2V1cC54ZHNvZnQnLCBhcmd1bWVudHNfY2FsbGVlNSk7XG5cdFx0XHRcdFx0fSk7XG5cdFx0XHRcdH0pO1xuXG5cdFx0XHR4Y2hhbmdlVGltZXIgPSAwO1xuXHRcdFx0Ly8gYmFzZSBoYW5kbGVyIC0gZ2VuZXJhdGluZyBhIGNhbGVuZGFyIGFuZCB0aW1lcGlja2VyXG5cdFx0XHRkYXRldGltZXBpY2tlclxuXHRcdFx0XHQub24oJ3hjaGFuZ2UueGRzb2Z0JywgZnVuY3Rpb24gKGV2ZW50KSB7XG5cdFx0XHRcdFx0Y2xlYXJUaW1lb3V0KHhjaGFuZ2VUaW1lcik7XG5cdFx0XHRcdFx0eGNoYW5nZVRpbWVyID0gc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG5cblx0XHRcdFx0XHRcdGlmIChfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lID09PSB1bmRlZmluZWQgfHwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSA9PT0gbnVsbCkge1xuXHRcdFx0XHRcdFx0XHRfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lID0gX3hkc29mdF9kYXRldGltZS5ub3coKTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0dmFyIHRhYmxlID1cdCcnLFxuXHRcdFx0XHRcdFx0XHRzdGFydCA9IG5ldyBEYXRlKF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUuZ2V0RnVsbFllYXIoKSwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZS5nZXRNb250aCgpLCAxLCAxMiwgMCwgMCksXG5cdFx0XHRcdFx0XHRcdGkgPSAwLFxuXHRcdFx0XHRcdFx0XHRqLFxuXHRcdFx0XHRcdFx0XHR0b2RheSA9IF94ZHNvZnRfZGF0ZXRpbWUubm93KCksXG5cdFx0XHRcdFx0XHRcdG1heERhdGUgPSBmYWxzZSxcblx0XHRcdFx0XHRcdFx0bWluRGF0ZSA9IGZhbHNlLFxuXHRcdFx0XHRcdFx0XHRtaW5EYXRlVGltZSA9IGZhbHNlLFxuXHRcdFx0XHRcdFx0XHRtYXhEYXRlVGltZSA9IGZhbHNlLFxuXHRcdFx0XHRcdFx0XHRoRGF0ZSxcblx0XHRcdFx0XHRcdFx0ZGF5LFxuXHRcdFx0XHRcdFx0XHRkLFxuXHRcdFx0XHRcdFx0XHR5LFxuXHRcdFx0XHRcdFx0XHRtLFxuXHRcdFx0XHRcdFx0XHR3LFxuXHRcdFx0XHRcdFx0XHRjbGFzc2VzID0gW10sXG5cdFx0XHRcdFx0XHRcdGN1c3RvbURhdGVTZXR0aW5ncyxcblx0XHRcdFx0XHRcdFx0bmV3Um93ID0gdHJ1ZSxcblx0XHRcdFx0XHRcdFx0dGltZSA9ICcnLFxuXHRcdFx0XHRcdFx0XHRoLFxuXHRcdFx0XHRcdFx0XHRsaW5lX3RpbWUsXG5cdFx0XHRcdFx0XHRcdGRlc2NyaXB0aW9uO1xuXG5cdFx0XHRcdFx0XHR3aGlsZSAoc3RhcnQuZ2V0RGF5KCkgIT09IG9wdGlvbnMuZGF5T2ZXZWVrU3RhcnQpIHtcblx0XHRcdFx0XHRcdFx0c3RhcnQuc2V0RGF0ZShzdGFydC5nZXREYXRlKCkgLSAxKTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0dGFibGUgKz0gJzx0YWJsZT48dGhlYWQ+PHRyPic7XG5cblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLndlZWtzKSB7XG5cdFx0XHRcdFx0XHRcdHRhYmxlICs9ICc8dGg+PC90aD4nO1xuXHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRmb3IgKGogPSAwOyBqIDwgNzsgaiArPSAxKSB7XG5cdFx0XHRcdFx0XHRcdHRhYmxlICs9ICc8dGg+JyArIG9wdGlvbnMuaTE4bltnbG9iYWxMb2NhbGVdLmRheU9mV2Vla1Nob3J0WyhqICsgb3B0aW9ucy5kYXlPZldlZWtTdGFydCkgJSA3XSArICc8L3RoPic7XG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdHRhYmxlICs9ICc8L3RyPjwvdGhlYWQ+Jztcblx0XHRcdFx0XHRcdHRhYmxlICs9ICc8dGJvZHk+JztcblxuXHRcdFx0XHRcdFx0aWYgKG9wdGlvbnMubWF4RGF0ZSAhPT0gZmFsc2UpIHtcblx0XHRcdFx0XHRcdFx0bWF4RGF0ZSA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlKG9wdGlvbnMubWF4RGF0ZSk7XG5cdFx0XHRcdFx0XHRcdG1heERhdGUgPSBuZXcgRGF0ZShtYXhEYXRlLmdldEZ1bGxZZWFyKCksIG1heERhdGUuZ2V0TW9udGgoKSwgbWF4RGF0ZS5nZXREYXRlKCksIDIzLCA1OSwgNTksIDk5OSk7XG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLm1pbkRhdGUgIT09IGZhbHNlKSB7XG5cdFx0XHRcdFx0XHRcdG1pbkRhdGUgPSBfeGRzb2Z0X2RhdGV0aW1lLnN0clRvRGF0ZShvcHRpb25zLm1pbkRhdGUpO1xuXHRcdFx0XHRcdFx0XHRtaW5EYXRlID0gbmV3IERhdGUobWluRGF0ZS5nZXRGdWxsWWVhcigpLCBtaW5EYXRlLmdldE1vbnRoKCksIG1pbkRhdGUuZ2V0RGF0ZSgpKTtcblx0XHRcdFx0XHRcdH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKG9wdGlvbnMubWluRGF0ZVRpbWUgIT09IGZhbHNlKSB7XG5cdFx0XHRcdFx0XHRcdG1pbkRhdGVUaW1lID0gX3hkc29mdF9kYXRldGltZS5zdHJUb0RhdGUob3B0aW9ucy5taW5EYXRlVGltZSk7XG5cdFx0XHRcdFx0XHRcdG1pbkRhdGVUaW1lID0gbmV3IERhdGUobWluRGF0ZVRpbWUuZ2V0RnVsbFllYXIoKSwgbWluRGF0ZVRpbWUuZ2V0TW9udGgoKSwgbWluRGF0ZVRpbWUuZ2V0RGF0ZSgpLCBtaW5EYXRlVGltZS5nZXRIb3VycygpLCBtaW5EYXRlVGltZS5nZXRNaW51dGVzKCksIG1pbkRhdGVUaW1lLmdldFNlY29uZHMoKSk7XG5cdFx0XHRcdFx0XHR9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChvcHRpb25zLm1heERhdGVUaW1lICE9PSBmYWxzZSkge1xuXHRcdFx0XHRcdFx0XHRtYXhEYXRlVGltZSA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlKG9wdGlvbnMubWF4RGF0ZVRpbWUpO1xuXHRcdFx0XHRcdFx0XHRtYXhEYXRlVGltZSA9IG5ldyBEYXRlKG1heERhdGVUaW1lLmdldEZ1bGxZZWFyKCksIG1heERhdGVUaW1lLmdldE1vbnRoKCksIG1heERhdGVUaW1lLmdldERhdGUoKSwgbWF4RGF0ZVRpbWUuZ2V0SG91cnMoKSwgbWF4RGF0ZVRpbWUuZ2V0TWludXRlcygpLCBtYXhEYXRlVGltZS5nZXRTZWNvbmRzKCkpO1xuXHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHR2YXIgbWF4RGF0ZVRpbWVEYXk7XG5cdFx0XHRcdFx0XHRpZiAobWF4RGF0ZVRpbWUgIT09IGZhbHNlKSB7XG5cdFx0XHRcdFx0XHRcdG1heERhdGVUaW1lRGF5ID0gKChtYXhEYXRlVGltZS5nZXRGdWxsWWVhcigpICogMTIpICsgbWF4RGF0ZVRpbWUuZ2V0TW9udGgoKSkgKiAzMSArIG1heERhdGVUaW1lLmdldERhdGUoKTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0d2hpbGUgKGkgPCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLmNvdW50RGF5c0luTW9udGgoKSB8fCBzdGFydC5nZXREYXkoKSAhPT0gb3B0aW9ucy5kYXlPZldlZWtTdGFydCB8fCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLmdldE1vbnRoKCkgPT09IHN0YXJ0LmdldE1vbnRoKCkpIHtcblx0XHRcdFx0XHRcdFx0Y2xhc3NlcyA9IFtdO1xuXHRcdFx0XHRcdFx0XHRpICs9IDE7XG5cblx0XHRcdFx0XHRcdFx0ZGF5ID0gc3RhcnQuZ2V0RGF5KCk7XG5cdFx0XHRcdFx0XHRcdGQgPSBzdGFydC5nZXREYXRlKCk7XG5cdFx0XHRcdFx0XHRcdHkgPSBzdGFydC5nZXRGdWxsWWVhcigpO1xuXHRcdFx0XHRcdFx0XHRtID0gc3RhcnQuZ2V0TW9udGgoKTtcblx0XHRcdFx0XHRcdFx0dyA9IF94ZHNvZnRfZGF0ZXRpbWUuZ2V0V2Vla09mWWVhcihzdGFydCk7XG5cdFx0XHRcdFx0XHRcdGRlc2NyaXB0aW9uID0gJyc7XG5cblx0XHRcdFx0XHRcdFx0Y2xhc3Nlcy5wdXNoKCd4ZHNvZnRfZGF0ZScpO1xuXG5cdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmJlZm9yZVNob3dEYXkgJiYgJC5pc0Z1bmN0aW9uKG9wdGlvbnMuYmVmb3JlU2hvd0RheS5jYWxsKSkge1xuXHRcdFx0XHRcdFx0XHRcdGN1c3RvbURhdGVTZXR0aW5ncyA9IG9wdGlvbnMuYmVmb3JlU2hvd0RheS5jYWxsKGRhdGV0aW1lcGlja2VyLCBzdGFydCk7XG5cdFx0XHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRcdFx0Y3VzdG9tRGF0ZVNldHRpbmdzID0gbnVsbDtcblx0XHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRcdGlmKG9wdGlvbnMuYWxsb3dEYXRlUmUgJiYgT2JqZWN0LnByb3RvdHlwZS50b1N0cmluZy5jYWxsKG9wdGlvbnMuYWxsb3dEYXRlUmUpID09PSBcIltvYmplY3QgUmVnRXhwXVwiKXtcblx0XHRcdFx0XHRcdFx0XHRpZighb3B0aW9ucy5hbGxvd0RhdGVSZS50ZXN0KGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShzdGFydCwgb3B0aW9ucy5mb3JtYXREYXRlKSkpe1xuXHRcdFx0XHRcdFx0XHRcdFx0Y2xhc3Nlcy5wdXNoKCd4ZHNvZnRfZGlzYWJsZWQnKTtcblx0XHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0XG5cdFx0XHRcdFx0XHRcdGlmKG9wdGlvbnMuYWxsb3dEYXRlcyAmJiBvcHRpb25zLmFsbG93RGF0ZXMubGVuZ3RoPjApe1xuXHRcdFx0XHRcdFx0XHRcdGlmKG9wdGlvbnMuYWxsb3dEYXRlcy5pbmRleE9mKGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShzdGFydCwgb3B0aW9ucy5mb3JtYXREYXRlKSkgPT09IC0xKXtcblx0XHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdFxuXHRcdFx0XHRcdFx0XHR2YXIgY3VycmVudERheSA9ICgoc3RhcnQuZ2V0RnVsbFllYXIoKSAqIDEyKSArIHN0YXJ0LmdldE1vbnRoKCkpICogMzEgKyBzdGFydC5nZXREYXRlKCk7XG5cdFx0XHRcdFx0XHRcdGlmICgobWF4RGF0ZSAhPT0gZmFsc2UgJiYgc3RhcnQgPiBtYXhEYXRlKSB8fCAobWluRGF0ZVRpbWUgIT09IGZhbHNlICYmIHN0YXJ0IDwgbWluRGF0ZVRpbWUpICB8fCAobWluRGF0ZSAhPT0gZmFsc2UgJiYgc3RhcnQgPCBtaW5EYXRlKSB8fCAobWF4RGF0ZVRpbWUgIT09IGZhbHNlICYmIGN1cnJlbnREYXkgPiBtYXhEYXRlVGltZURheSkgfHwgKGN1c3RvbURhdGVTZXR0aW5ncyAmJiBjdXN0b21EYXRlU2V0dGluZ3NbMF0gPT09IGZhbHNlKSkge1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0XG5cdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmRpc2FibGVkRGF0ZXMuaW5kZXhPZihkYXRlSGVscGVyLmZvcm1hdERhdGUoc3RhcnQsIG9wdGlvbnMuZm9ybWF0RGF0ZSkpICE9PSAtMSkge1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0XG5cdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmRpc2FibGVkV2Vla0RheXMuaW5kZXhPZihkYXkpICE9PSAtMSkge1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0XG5cdFx0XHRcdFx0XHRcdGlmIChpbnB1dC5pcygnW2Rpc2FibGVkXScpKSB7XG5cdFx0XHRcdFx0XHRcdFx0Y2xhc3Nlcy5wdXNoKCd4ZHNvZnRfZGlzYWJsZWQnKTtcblx0XHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRcdGlmIChjdXN0b21EYXRlU2V0dGluZ3MgJiYgY3VzdG9tRGF0ZVNldHRpbmdzWzFdICE9PSBcIlwiKSB7XG5cdFx0XHRcdFx0XHRcdFx0Y2xhc3Nlcy5wdXNoKGN1c3RvbURhdGVTZXR0aW5nc1sxXSk7XG5cdFx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0XHRpZiAoX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZS5nZXRNb250aCgpICE9PSBtKSB7XG5cdFx0XHRcdFx0XHRcdFx0Y2xhc3Nlcy5wdXNoKCd4ZHNvZnRfb3RoZXJfbW9udGgnKTtcblx0XHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRcdGlmICgob3B0aW9ucy5kZWZhdWx0U2VsZWN0IHx8IGRhdGV0aW1lcGlja2VyLmRhdGEoJ2NoYW5nZWQnKSkgJiYgZGF0ZUhlbHBlci5mb3JtYXREYXRlKF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUsIG9wdGlvbnMuZm9ybWF0RGF0ZSkgPT09IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShzdGFydCwgb3B0aW9ucy5mb3JtYXREYXRlKSkge1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X2N1cnJlbnQnKTtcblx0XHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRcdGlmIChkYXRlSGVscGVyLmZvcm1hdERhdGUodG9kYXksIG9wdGlvbnMuZm9ybWF0RGF0ZSkgPT09IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShzdGFydCwgb3B0aW9ucy5mb3JtYXREYXRlKSkge1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X3RvZGF5Jyk7XG5cdFx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0XHRpZiAoc3RhcnQuZ2V0RGF5KCkgPT09IDAgfHwgc3RhcnQuZ2V0RGF5KCkgPT09IDYgfHwgb3B0aW9ucy53ZWVrZW5kcy5pbmRleE9mKGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShzdGFydCwgb3B0aW9ucy5mb3JtYXREYXRlKSkgIT09IC0xKSB7XG5cdFx0XHRcdFx0XHRcdFx0Y2xhc3Nlcy5wdXNoKCd4ZHNvZnRfd2Vla2VuZCcpO1xuXHRcdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdFx0aWYgKG9wdGlvbnMuaGlnaGxpZ2h0ZWREYXRlc1tkYXRlSGVscGVyLmZvcm1hdERhdGUoc3RhcnQsIG9wdGlvbnMuZm9ybWF0RGF0ZSldICE9PSB1bmRlZmluZWQpIHtcblx0XHRcdFx0XHRcdFx0XHRoRGF0ZSA9IG9wdGlvbnMuaGlnaGxpZ2h0ZWREYXRlc1tkYXRlSGVscGVyLmZvcm1hdERhdGUoc3RhcnQsIG9wdGlvbnMuZm9ybWF0RGF0ZSldO1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaChoRGF0ZS5zdHlsZSA9PT0gdW5kZWZpbmVkID8gJ3hkc29mdF9oaWdobGlnaHRlZF9kZWZhdWx0JyA6IGhEYXRlLnN0eWxlKTtcblx0XHRcdFx0XHRcdFx0XHRkZXNjcmlwdGlvbiA9IGhEYXRlLmRlc2MgPT09IHVuZGVmaW5lZCA/ICcnIDogaERhdGUuZGVzYztcblx0XHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmJlZm9yZVNob3dEYXkgJiYgJC5pc0Z1bmN0aW9uKG9wdGlvbnMuYmVmb3JlU2hvd0RheSkpIHtcblx0XHRcdFx0XHRcdFx0XHRjbGFzc2VzLnB1c2gob3B0aW9ucy5iZWZvcmVTaG93RGF5KHN0YXJ0KSk7XG5cdFx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0XHRpZiAobmV3Um93KSB7XG5cdFx0XHRcdFx0XHRcdFx0dGFibGUgKz0gJzx0cj4nO1xuXHRcdFx0XHRcdFx0XHRcdG5ld1JvdyA9IGZhbHNlO1xuXHRcdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLndlZWtzKSB7XG5cdFx0XHRcdFx0XHRcdFx0XHR0YWJsZSArPSAnPHRoPicgKyB3ICsgJzwvdGg+Jztcblx0XHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0XHR0YWJsZSArPSAnPHRkIGRhdGEtZGF0ZT1cIicgKyBkICsgJ1wiIGRhdGEtbW9udGg9XCInICsgbSArICdcIiBkYXRhLXllYXI9XCInICsgeSArICdcIicgKyAnIGNsYXNzPVwieGRzb2Z0X2RhdGUgeGRzb2Z0X2RheV9vZl93ZWVrJyArIHN0YXJ0LmdldERheSgpICsgJyAnICsgY2xhc3Nlcy5qb2luKCcgJykgKyAnXCIgdGl0bGU9XCInICsgZGVzY3JpcHRpb24gKyAnXCI+JyArXG5cdFx0XHRcdFx0XHRcdFx0JzxkaXY+JyArIGQgKyAnPC9kaXY+JyArXG5cdFx0XHRcdFx0XHRcdFx0JzwvdGQ+JztcblxuXHRcdFx0XHRcdFx0XHRpZiAoc3RhcnQuZ2V0RGF5KCkgPT09IG9wdGlvbnMuZGF5T2ZXZWVrU3RhcnRQcmV2KSB7XG5cdFx0XHRcdFx0XHRcdFx0dGFibGUgKz0gJzwvdHI+Jztcblx0XHRcdFx0XHRcdFx0XHRuZXdSb3cgPSB0cnVlO1xuXHRcdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdFx0c3RhcnQuc2V0RGF0ZShkICsgMSk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHR0YWJsZSArPSAnPC90Ym9keT48L3RhYmxlPic7XG5cblx0XHRcdFx0XHRcdGNhbGVuZGFyLmh0bWwodGFibGUpO1xuXG5cdFx0XHRcdFx0XHRtb250aF9waWNrZXIuZmluZCgnLnhkc29mdF9sYWJlbCBzcGFuJykuZXEoMCkudGV4dChvcHRpb25zLmkxOG5bZ2xvYmFsTG9jYWxlXS5tb250aHNbX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZS5nZXRNb250aCgpXSk7XG5cdFx0XHRcdFx0XHRtb250aF9waWNrZXIuZmluZCgnLnhkc29mdF9sYWJlbCBzcGFuJykuZXEoMSkudGV4dChfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLmdldEZ1bGxZZWFyKCkgKyBvcHRpb25zLnllYXJPZmZzZXQpO1xuXG5cdFx0XHRcdFx0XHQvLyBnZW5lcmF0ZSB0aW1lYm94XG5cdFx0XHRcdFx0XHR0aW1lID0gJyc7XG5cdFx0XHRcdFx0XHRoID0gJyc7XG5cdFx0XHRcdFx0XHRtID0gJyc7XG5cblx0XHRcdFx0XHRcdHZhciBtaW5UaW1lTWludXRlc09mRGF5ID0gMDtcblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLm1pblRpbWUgIT09IGZhbHNlKSB7XG5cdFx0XHRcdFx0XHQgICAgdmFyIHQgPSBfeGRzb2Z0X2RhdGV0aW1lLnN0cnRvdGltZShvcHRpb25zLm1pblRpbWUpO1xuXHRcdFx0XHRcdFx0ICAgIG1pblRpbWVNaW51dGVzT2ZEYXkgPSA2MCAqIHQuZ2V0SG91cnMoKSArIHQuZ2V0TWludXRlcygpO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0dmFyIG1heFRpbWVNaW51dGVzT2ZEYXkgPSAyNCAqIDYwO1xuXHRcdFx0XHRcdFx0aWYgKG9wdGlvbnMubWF4VGltZSAhPT0gZmFsc2UpIHtcblx0XHRcdFx0XHRcdCAgICB2YXIgdCA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RydG90aW1lKG9wdGlvbnMubWF4VGltZSk7XG5cdFx0XHRcdFx0XHQgICAgbWF4VGltZU1pbnV0ZXNPZkRheSA9IDYwICogdC5nZXRIb3VycygpICsgdC5nZXRNaW51dGVzKCk7XG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLm1pbkRhdGVUaW1lICE9PSBmYWxzZSkge1xuXHRcdFx0XHRcdFx0XHR2YXIgdCA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlVGltZShvcHRpb25zLm1pbkRhdGVUaW1lKTtcblx0XHRcdFx0XHRcdCAgICAgICAgdmFyIGN1cnJlbnREYXlJc01pbkRhdGVUaW1lRGF5ID0gZGF0ZUhlbHBlci5mb3JtYXREYXRlKF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUsIG9wdGlvbnMuZm9ybWF0RGF0ZSkgPT09IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZSh0LCBvcHRpb25zLmZvcm1hdERhdGUpO1xuXHRcdFx0XHRcdFx0XHRpZiAoY3VycmVudERheUlzTWluRGF0ZVRpbWVEYXkpIHtcblx0XHRcdFx0XHRcdFx0XHR2YXIgbSA9IDYwICogdC5nZXRIb3VycygpICsgdC5nZXRNaW51dGVzKCk7XG5cdFx0XHRcdFx0XHRcdFx0aWYgKG0gPiBtaW5UaW1lTWludXRlc09mRGF5KSBtaW5UaW1lTWludXRlc09mRGF5ID0gbTtcblx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0fVxuXG5cdFx0XHRcdFx0XHRpZiAob3B0aW9ucy5tYXhEYXRlVGltZSAhPT0gZmFsc2UpIHtcblx0XHRcdFx0XHRcdFx0dmFyIHQgPSBfeGRzb2Z0X2RhdGV0aW1lLnN0clRvRGF0ZVRpbWUob3B0aW9ucy5tYXhEYXRlVGltZSk7XG5cdFx0XHRcdFx0XHQgICAgICAgIHZhciBjdXJyZW50RGF5SXNNYXhEYXRlVGltZURheSA9IGRhdGVIZWxwZXIuZm9ybWF0RGF0ZShfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLCBvcHRpb25zLmZvcm1hdERhdGUpID09PSBkYXRlSGVscGVyLmZvcm1hdERhdGUodCwgb3B0aW9ucy5mb3JtYXREYXRlKTtcblx0XHRcdFx0XHRcdFx0aWYgKGN1cnJlbnREYXlJc01heERhdGVUaW1lRGF5KSB7XG5cdFx0XHRcdFx0XHRcdFx0dmFyIG0gPSA2MCAqIHQuZ2V0SG91cnMoKSArIHQuZ2V0TWludXRlcygpO1xuXHRcdFx0XHRcdFx0XHRcdGlmIChtIDwgbWF4VGltZU1pbnV0ZXNPZkRheSkgbWF4VGltZU1pbnV0ZXNPZkRheSA9IG07XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0bGluZV90aW1lID0gZnVuY3Rpb24gbGluZV90aW1lKGgsIG0pIHtcblx0XHRcdFx0XHRcdFx0dmFyIG5vdyA9IF94ZHNvZnRfZGF0ZXRpbWUubm93KCksIGN1cnJlbnRfdGltZSxcblx0XHRcdFx0XHRcdFx0XHRpc0FMbG93VGltZXNJbml0ID0gb3B0aW9ucy5hbGxvd1RpbWVzICYmICQuaXNBcnJheShvcHRpb25zLmFsbG93VGltZXMpICYmIG9wdGlvbnMuYWxsb3dUaW1lcy5sZW5ndGg7XG5cdFx0XHRcdFx0XHRcdG5vdy5zZXRIb3VycyhoKTtcblx0XHRcdFx0XHRcdFx0aCA9IHBhcnNlSW50KG5vdy5nZXRIb3VycygpLCAxMCk7XG5cdFx0XHRcdFx0XHRcdG5vdy5zZXRNaW51dGVzKG0pO1xuXHRcdFx0XHRcdFx0XHRtID0gcGFyc2VJbnQobm93LmdldE1pbnV0ZXMoKSwgMTApO1xuXHRcdFx0XHRcdFx0XHRjbGFzc2VzID0gW107XG5cdFx0XHRcdFx0XHRcdHZhciBjdXJyZW50TWludXRlc09mRGF5ID0gNjAgKiBoICsgbTtcblx0XHRcdFx0XHRcdFx0aWYgKGlucHV0LmlzKCdbZGlzYWJsZWRdJykgfHwgKGN1cnJlbnRNaW51dGVzT2ZEYXkgPj0gbWF4VGltZU1pbnV0ZXNPZkRheSkgfHwgKGN1cnJlbnRNaW51dGVzT2ZEYXkgPCBtaW5UaW1lTWludXRlc09mRGF5KSkge1xuXHRcdFx0XHRcdFx0XHRcdGNsYXNzZXMucHVzaCgneGRzb2Z0X2Rpc2FibGVkJyk7XG5cdFx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0XHRjdXJyZW50X3RpbWUgPSBuZXcgRGF0ZShfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lKTtcblx0XHRcdFx0XHRcdFx0Y3VycmVudF90aW1lLnNldEhvdXJzKHBhcnNlSW50KF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUuZ2V0SG91cnMoKSwgMTApKTtcblxuXHRcdFx0XHRcdFx0XHRpZiAoIWlzQUxsb3dUaW1lc0luaXQpIHtcblx0XHRcdFx0XHRcdFx0XHRjdXJyZW50X3RpbWUuc2V0TWludXRlcyhNYXRoW29wdGlvbnMucm91bmRUaW1lXShfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLmdldE1pbnV0ZXMoKSAvIG9wdGlvbnMuc3RlcCkgKiBvcHRpb25zLnN0ZXApO1xuXHRcdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdFx0aWYgKChvcHRpb25zLmluaXRUaW1lIHx8IG9wdGlvbnMuZGVmYXVsdFNlbGVjdCB8fCBkYXRldGltZXBpY2tlci5kYXRhKCdjaGFuZ2VkJykpICYmIGN1cnJlbnRfdGltZS5nZXRIb3VycygpID09PSBwYXJzZUludChoLCAxMCkgJiYgKCghaXNBTGxvd1RpbWVzSW5pdCAmJiBvcHRpb25zLnN0ZXAgPiA1OSkgfHwgY3VycmVudF90aW1lLmdldE1pbnV0ZXMoKSA9PT0gcGFyc2VJbnQobSwgMTApKSkge1xuXHRcdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmRlZmF1bHRTZWxlY3QgfHwgZGF0ZXRpbWVwaWNrZXIuZGF0YSgnY2hhbmdlZCcpKSB7XG5cdFx0XHRcdFx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ3hkc29mdF9jdXJyZW50Jyk7XG5cdFx0XHRcdFx0XHRcdFx0fSBlbHNlIGlmIChvcHRpb25zLmluaXRUaW1lKSB7XG5cdFx0XHRcdFx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ3hkc29mdF9pbml0X3RpbWUnKTtcblx0XHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0aWYgKHBhcnNlSW50KHRvZGF5LmdldEhvdXJzKCksIDEwKSA9PT0gcGFyc2VJbnQoaCwgMTApICYmIHBhcnNlSW50KHRvZGF5LmdldE1pbnV0ZXMoKSwgMTApID09PSBwYXJzZUludChtLCAxMCkpIHtcblx0XHRcdFx0XHRcdFx0XHRjbGFzc2VzLnB1c2goJ3hkc29mdF90b2RheScpO1xuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdHRpbWUgKz0gJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfdGltZSAnICsgY2xhc3Nlcy5qb2luKCcgJykgKyAnXCIgZGF0YS1ob3VyPVwiJyArIGggKyAnXCIgZGF0YS1taW51dGU9XCInICsgbSArICdcIj4nICsgZGF0ZUhlbHBlci5mb3JtYXREYXRlKG5vdywgb3B0aW9ucy5mb3JtYXRUaW1lKSArICc8L2Rpdj4nO1xuXHRcdFx0XHRcdFx0fTtcblxuXHRcdFx0XHRcdFx0aWYgKCFvcHRpb25zLmFsbG93VGltZXMgfHwgISQuaXNBcnJheShvcHRpb25zLmFsbG93VGltZXMpIHx8ICFvcHRpb25zLmFsbG93VGltZXMubGVuZ3RoKSB7XG5cdFx0XHRcdFx0XHRcdGZvciAoaSA9IDAsIGogPSAwOyBpIDwgKG9wdGlvbnMuaG91cnMxMiA/IDEyIDogMjQpOyBpICs9IDEpIHtcblx0XHRcdFx0XHRcdFx0XHRmb3IgKGogPSAwOyBqIDwgNjA7IGogKz0gb3B0aW9ucy5zdGVwKSB7XG5cdFx0XHRcdFx0XHRcdFx0ICAgICAgICB2YXIgY3VycmVudE1pbnV0ZXNPZkRheSA9IGkgKiA2MCArIGo7XG5cdFx0XHRcdFx0XHRcdFx0ICAgICAgICBpZiAoY3VycmVudE1pbnV0ZXNPZkRheSA8IG1pblRpbWVNaW51dGVzT2ZEYXkpIGNvbnRpbnVlO1xuXHRcdFx0XHRcdFx0XHRcdCAgICAgICAgaWYgKGN1cnJlbnRNaW51dGVzT2ZEYXkgPj0gbWF4VGltZU1pbnV0ZXNPZkRheSkgY29udGludWU7XG5cdFx0XHRcdFx0XHRcdFx0XHRoID0gKGkgPCAxMCA/ICcwJyA6ICcnKSArIGk7XG5cdFx0XHRcdFx0XHRcdFx0XHRtID0gKGogPCAxMCA/ICcwJyA6ICcnKSArIGo7XG5cdFx0XHRcdFx0XHRcdFx0XHRsaW5lX3RpbWUoaCwgbSk7XG5cdFx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0XHRmb3IgKGkgPSAwOyBpIDwgb3B0aW9ucy5hbGxvd1RpbWVzLmxlbmd0aDsgaSArPSAxKSB7XG5cdFx0XHRcdFx0XHRcdFx0aCA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RydG90aW1lKG9wdGlvbnMuYWxsb3dUaW1lc1tpXSkuZ2V0SG91cnMoKTtcblx0XHRcdFx0XHRcdFx0XHRtID0gX3hkc29mdF9kYXRldGltZS5zdHJ0b3RpbWUob3B0aW9ucy5hbGxvd1RpbWVzW2ldKS5nZXRNaW51dGVzKCk7XG5cdFx0XHRcdFx0XHRcdFx0bGluZV90aW1lKGgsIG0pO1xuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdHRpbWVib3guaHRtbCh0aW1lKTtcblxuXHRcdFx0XHRcdFx0b3B0ID0gJyc7XG5cblx0XHRcdFx0XHRcdGZvciAoaSA9IHBhcnNlSW50KG9wdGlvbnMueWVhclN0YXJ0LCAxMCk7IGkgPD0gcGFyc2VJbnQob3B0aW9ucy55ZWFyRW5kLCAxMCk7IGkgKz0gMSkge1xuXHRcdFx0XHRcdFx0XHRvcHQgKz0gJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfb3B0aW9uICcgKyAoX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZS5nZXRGdWxsWWVhcigpID09PSBpID8gJ3hkc29mdF9jdXJyZW50JyA6ICcnKSArICdcIiBkYXRhLXZhbHVlPVwiJyArIGkgKyAnXCI+JyArIChpICsgb3B0aW9ucy55ZWFyT2Zmc2V0KSArICc8L2Rpdj4nO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0eWVhcnNlbGVjdC5jaGlsZHJlbigpLmVxKDApXG5cdFx0XHRcdFx0XHRcdC5odG1sKG9wdCk7XG5cblx0XHRcdFx0XHRcdGZvciAoaSA9IHBhcnNlSW50KG9wdGlvbnMubW9udGhTdGFydCwgMTApLCBvcHQgPSAnJzsgaSA8PSBwYXJzZUludChvcHRpb25zLm1vbnRoRW5kLCAxMCk7IGkgKz0gMSkge1xuXHRcdFx0XHRcdFx0XHRvcHQgKz0gJzxkaXYgY2xhc3M9XCJ4ZHNvZnRfb3B0aW9uICcgKyAoX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZS5nZXRNb250aCgpID09PSBpID8gJ3hkc29mdF9jdXJyZW50JyA6ICcnKSArICdcIiBkYXRhLXZhbHVlPVwiJyArIGkgKyAnXCI+JyArIG9wdGlvbnMuaTE4bltnbG9iYWxMb2NhbGVdLm1vbnRoc1tpXSArICc8L2Rpdj4nO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0bW9udGhzZWxlY3QuY2hpbGRyZW4oKS5lcSgwKS5odG1sKG9wdCk7XG5cdFx0XHRcdFx0XHQkKGRhdGV0aW1lcGlja2VyKVxuXHRcdFx0XHRcdFx0XHQudHJpZ2dlcignZ2VuZXJhdGUueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0fSwgMTApO1xuXHRcdFx0XHRcdGV2ZW50LnN0b3BQcm9wYWdhdGlvbigpO1xuXHRcdFx0XHR9KVxuXHRcdFx0XHQub24oJ2FmdGVyT3Blbi54ZHNvZnQnLCBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0aWYgKG9wdGlvbnMudGltZXBpY2tlcikge1xuXHRcdFx0XHRcdFx0dmFyIGNsYXNzVHlwZSwgcGhlaWdodCwgaGVpZ2h0LCB0b3A7XG5cdFx0XHRcdFx0XHRpZiAodGltZWJveC5maW5kKCcueGRzb2Z0X2N1cnJlbnQnKS5sZW5ndGgpIHtcblx0XHRcdFx0XHRcdFx0Y2xhc3NUeXBlID0gJy54ZHNvZnRfY3VycmVudCc7XG5cdFx0XHRcdFx0XHR9IGVsc2UgaWYgKHRpbWVib3guZmluZCgnLnhkc29mdF9pbml0X3RpbWUnKS5sZW5ndGgpIHtcblx0XHRcdFx0XHRcdFx0Y2xhc3NUeXBlID0gJy54ZHNvZnRfaW5pdF90aW1lJztcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdGlmIChjbGFzc1R5cGUpIHtcblx0XHRcdFx0XHRcdFx0cGhlaWdodCA9IHRpbWVib3hwYXJlbnRbMF0uY2xpZW50SGVpZ2h0O1xuXHRcdFx0XHRcdFx0XHRoZWlnaHQgPSB0aW1lYm94WzBdLm9mZnNldEhlaWdodDtcblx0XHRcdFx0XHRcdFx0dG9wID0gdGltZWJveC5maW5kKGNsYXNzVHlwZSkuaW5kZXgoKSAqIG9wdGlvbnMudGltZUhlaWdodEluVGltZVBpY2tlciArIDE7XG5cdFx0XHRcdFx0XHRcdGlmICgoaGVpZ2h0IC0gcGhlaWdodCkgPCB0b3ApIHtcblx0XHRcdFx0XHRcdFx0XHR0b3AgPSBoZWlnaHQgLSBwaGVpZ2h0O1xuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdHRpbWVib3hwYXJlbnQudHJpZ2dlcignc2Nyb2xsX2VsZW1lbnQueGRzb2Z0X3Njcm9sbGVyJywgW3BhcnNlSW50KHRvcCwgMTApIC8gKGhlaWdodCAtIHBoZWlnaHQpXSk7XG5cdFx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0XHR0aW1lYm94cGFyZW50LnRyaWdnZXIoJ3Njcm9sbF9lbGVtZW50Lnhkc29mdF9zY3JvbGxlcicsIFswXSk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9KTtcblxuXHRcdFx0dGltZXJjbGljayA9IDA7XG5cdFx0XHRjYWxlbmRhclxuXHRcdFx0XHQub24oJ3RvdWNoZW5kIGNsaWNrLnhkc29mdCcsICd0ZCcsIGZ1bmN0aW9uICh4ZGV2ZW50KSB7XG5cdFx0XHRcdFx0eGRldmVudC5zdG9wUHJvcGFnYXRpb24oKTsgIC8vIFByZXZlbnRzIGNsb3Npbmcgb2YgUG9wLXVwcywgTW9kYWxzIGFuZCBGbHlvdXRzIGluIEJvb3RzdHJhcFxuXHRcdFx0XHRcdHRpbWVyY2xpY2sgKz0gMTtcblx0XHRcdFx0XHR2YXIgJHRoaXMgPSAkKHRoaXMpLFxuXHRcdFx0XHRcdFx0Y3VycmVudFRpbWUgPSBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lO1xuXG5cdFx0XHRcdFx0aWYgKGN1cnJlbnRUaW1lID09PSB1bmRlZmluZWQgfHwgY3VycmVudFRpbWUgPT09IG51bGwpIHtcblx0XHRcdFx0XHRcdF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUgPSBfeGRzb2Z0X2RhdGV0aW1lLm5vdygpO1xuXHRcdFx0XHRcdFx0Y3VycmVudFRpbWUgPSBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdGlmICgkdGhpcy5oYXNDbGFzcygneGRzb2Z0X2Rpc2FibGVkJykpIHtcblx0XHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRjdXJyZW50VGltZS5zZXREYXRlKDEpO1xuXHRcdFx0XHRcdGN1cnJlbnRUaW1lLnNldEZ1bGxZZWFyKCR0aGlzLmRhdGEoJ3llYXInKSk7XG5cdFx0XHRcdFx0Y3VycmVudFRpbWUuc2V0TW9udGgoJHRoaXMuZGF0YSgnbW9udGgnKSk7XG5cdFx0XHRcdFx0Y3VycmVudFRpbWUuc2V0RGF0ZSgkdGhpcy5kYXRhKCdkYXRlJykpO1xuXG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignc2VsZWN0Lnhkc29mdCcsIFtjdXJyZW50VGltZV0pO1xuXG5cdFx0XHRcdFx0aW5wdXQudmFsKF94ZHNvZnRfZGF0ZXRpbWUuc3RyKCkpO1xuXG5cdFx0XHRcdFx0aWYgKG9wdGlvbnMub25TZWxlY3REYXRlICYmXHQkLmlzRnVuY3Rpb24ob3B0aW9ucy5vblNlbGVjdERhdGUpKSB7XG5cdFx0XHRcdFx0XHRvcHRpb25zLm9uU2VsZWN0RGF0ZS5jYWxsKGRhdGV0aW1lcGlja2VyLCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLCBkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpLCB4ZGV2ZW50KTtcblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRkYXRldGltZXBpY2tlci5kYXRhKCdjaGFuZ2VkJywgdHJ1ZSk7XG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcigneGNoYW5nZS54ZHNvZnQnKTtcblx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCdjaGFuZ2VkYXRldGltZS54ZHNvZnQnKTtcblx0XHRcdFx0XHRpZiAoKHRpbWVyY2xpY2sgPiAxIHx8IChvcHRpb25zLmNsb3NlT25EYXRlU2VsZWN0ID09PSB0cnVlIHx8IChvcHRpb25zLmNsb3NlT25EYXRlU2VsZWN0ID09PSBmYWxzZSAmJiAhb3B0aW9ucy50aW1lcGlja2VyKSkpICYmICFvcHRpb25zLmlubGluZSkge1xuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2xvc2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdFx0dGltZXJjbGljayA9IDA7XG5cdFx0XHRcdFx0fSwgMjAwKTtcblx0XHRcdFx0fSk7XG5cblx0XHRcdHRpbWVib3hcblx0XHRcdFx0Lm9uKCd0b3VjaHN0YXJ0JywgJ2RpdicsIGZ1bmN0aW9uICh4ZGV2ZW50KSB7XG5cdFx0XHRcdFx0dGhpcy50b3VjaE1vdmVkID0gZmFsc2U7XG5cdFx0XHRcdH0pXG5cdFx0XHRcdC5vbigndG91Y2htb3ZlJywgJ2RpdicsIGhhbmRsZVRvdWNoTW92ZWQpXG5cdFx0XHRcdC5vbigndG91Y2hlbmQgY2xpY2sueGRzb2Z0JywgJ2RpdicsIGZ1bmN0aW9uICh4ZGV2ZW50KSB7XG5cdFx0XHRcdFx0aWYgKCF0aGlzLnRvdWNoTW92ZWQpIHtcblx0XHRcdFx0XHRcdHhkZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG5cdFx0XHRcdFx0XHR2YXIgJHRoaXMgPSAkKHRoaXMpLFxuXHRcdFx0XHRcdFx0XHRjdXJyZW50VGltZSA9IF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWU7XG5cblx0XHRcdFx0XHRcdGlmIChjdXJyZW50VGltZSA9PT0gdW5kZWZpbmVkIHx8IGN1cnJlbnRUaW1lID09PSBudWxsKSB7XG5cdFx0XHRcdFx0XHRcdF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUgPSBfeGRzb2Z0X2RhdGV0aW1lLm5vdygpO1xuXHRcdFx0XHRcdFx0XHRjdXJyZW50VGltZSA9IF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWU7XG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdGlmICgkdGhpcy5oYXNDbGFzcygneGRzb2Z0X2Rpc2FibGVkJykpIHtcblx0XHRcdFx0XHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0Y3VycmVudFRpbWUuc2V0SG91cnMoJHRoaXMuZGF0YSgnaG91cicpKTtcblx0XHRcdFx0XHRcdGN1cnJlbnRUaW1lLnNldE1pbnV0ZXMoJHRoaXMuZGF0YSgnbWludXRlJykpO1xuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignc2VsZWN0Lnhkc29mdCcsIFtjdXJyZW50VGltZV0pO1xuXG5cdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpLnZhbChfeGRzb2Z0X2RhdGV0aW1lLnN0cigpKTtcblxuXHRcdFx0XHRcdFx0aWYgKG9wdGlvbnMub25TZWxlY3RUaW1lICYmICQuaXNGdW5jdGlvbihvcHRpb25zLm9uU2VsZWN0VGltZSkpIHtcblx0XHRcdFx0XHRcdFx0b3B0aW9ucy5vblNlbGVjdFRpbWUuY2FsbChkYXRldGltZXBpY2tlciwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSwgZGF0ZXRpbWVwaWNrZXIuZGF0YSgnaW5wdXQnKSwgeGRldmVudCk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci5kYXRhKCdjaGFuZ2VkJywgdHJ1ZSk7XG5cdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCd4Y2hhbmdlLnhkc29mdCcpO1xuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2hhbmdlZGF0ZXRpbWUueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHRpZiAob3B0aW9ucy5pbmxpbmUgIT09IHRydWUgJiYgb3B0aW9ucy5jbG9zZU9uVGltZVNlbGVjdCA9PT0gdHJ1ZSkge1xuXHRcdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCdjbG9zZS54ZHNvZnQnKTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0pO1xuXG5cdFx0XHRkYXRlcGlja2VyXG5cdFx0XHRcdC5vbignbW91c2V3aGVlbC54ZHNvZnQnLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHRpZiAoIW9wdGlvbnMuc2Nyb2xsTW9udGgpIHtcblx0XHRcdFx0XHRcdHJldHVybiB0cnVlO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRpZiAoZXZlbnQuZGVsdGFZIDwgMCkge1xuXHRcdFx0XHRcdFx0X3hkc29mdF9kYXRldGltZS5uZXh0TW9udGgoKTtcblx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0X3hkc29mdF9kYXRldGltZS5wcmV2TW9udGgoKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdFx0XHR9KTtcblxuXHRcdFx0aW5wdXRcblx0XHRcdFx0Lm9uKCdtb3VzZXdoZWVsLnhkc29mdCcsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0XHRcdGlmICghb3B0aW9ucy5zY3JvbGxJbnB1dCkge1xuXHRcdFx0XHRcdFx0cmV0dXJuIHRydWU7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmICghb3B0aW9ucy5kYXRlcGlja2VyICYmIG9wdGlvbnMudGltZXBpY2tlcikge1xuXHRcdFx0XHRcdFx0Y3VycmVudF90aW1lX2luZGV4ID0gdGltZWJveC5maW5kKCcueGRzb2Z0X2N1cnJlbnQnKS5sZW5ndGggPyB0aW1lYm94LmZpbmQoJy54ZHNvZnRfY3VycmVudCcpLmVxKDApLmluZGV4KCkgOiAwO1xuXHRcdFx0XHRcdFx0aWYgKGN1cnJlbnRfdGltZV9pbmRleCArIGV2ZW50LmRlbHRhWSA+PSAwICYmIGN1cnJlbnRfdGltZV9pbmRleCArIGV2ZW50LmRlbHRhWSA8IHRpbWVib3guY2hpbGRyZW4oKS5sZW5ndGgpIHtcblx0XHRcdFx0XHRcdFx0Y3VycmVudF90aW1lX2luZGV4ICs9IGV2ZW50LmRlbHRhWTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdGlmICh0aW1lYm94LmNoaWxkcmVuKCkuZXEoY3VycmVudF90aW1lX2luZGV4KS5sZW5ndGgpIHtcblx0XHRcdFx0XHRcdFx0dGltZWJveC5jaGlsZHJlbigpLmVxKGN1cnJlbnRfdGltZV9pbmRleCkudHJpZ2dlcignbW91c2Vkb3duJyk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmIChvcHRpb25zLmRhdGVwaWNrZXIgJiYgIW9wdGlvbnMudGltZXBpY2tlcikge1xuXHRcdFx0XHRcdFx0ZGF0ZXBpY2tlci50cmlnZ2VyKGV2ZW50LCBbZXZlbnQuZGVsdGFZLCBldmVudC5kZWx0YVgsIGV2ZW50LmRlbHRhWV0pO1xuXHRcdFx0XHRcdFx0aWYgKGlucHV0LnZhbCkge1xuXHRcdFx0XHRcdFx0XHRpbnB1dC52YWwoX3hkc29mdF9kYXRldGltZS5zdHIoKSk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCdjaGFuZ2VkYXRldGltZS54ZHNvZnQnKTtcblx0XHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0pO1xuXG5cdFx0XHRkYXRldGltZXBpY2tlclxuXHRcdFx0XHQub24oJ2NoYW5nZWRhdGV0aW1lLnhkc29mdCcsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0XHRcdGlmIChvcHRpb25zLm9uQ2hhbmdlRGF0ZVRpbWUgJiYgJC5pc0Z1bmN0aW9uKG9wdGlvbnMub25DaGFuZ2VEYXRlVGltZSkpIHtcblx0XHRcdFx0XHRcdHZhciAkaW5wdXQgPSBkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpO1xuXHRcdFx0XHRcdFx0b3B0aW9ucy5vbkNoYW5nZURhdGVUaW1lLmNhbGwoZGF0ZXRpbWVwaWNrZXIsIF94ZHNvZnRfZGF0ZXRpbWUuY3VycmVudFRpbWUsICRpbnB1dCwgZXZlbnQpO1xuXHRcdFx0XHRcdFx0ZGVsZXRlIG9wdGlvbnMudmFsdWU7XG5cdFx0XHRcdFx0XHQkaW5wdXQudHJpZ2dlcignY2hhbmdlJyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9KVxuXHRcdFx0XHQub24oJ2dlbmVyYXRlLnhkc29mdCcsIGZ1bmN0aW9uICgpIHtcblx0XHRcdFx0XHRpZiAob3B0aW9ucy5vbkdlbmVyYXRlICYmICQuaXNGdW5jdGlvbihvcHRpb25zLm9uR2VuZXJhdGUpKSB7XG5cdFx0XHRcdFx0XHRvcHRpb25zLm9uR2VuZXJhdGUuY2FsbChkYXRldGltZXBpY2tlciwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSwgZGF0ZXRpbWVwaWNrZXIuZGF0YSgnaW5wdXQnKSk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmICh0cmlnZ2VyQWZ0ZXJPcGVuKSB7XG5cdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci50cmlnZ2VyKCdhZnRlck9wZW4ueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHR0cmlnZ2VyQWZ0ZXJPcGVuID0gZmFsc2U7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9KVxuXHRcdFx0XHQub24oJ2NsaWNrLnhkc29mdCcsIGZ1bmN0aW9uICh4ZGV2ZW50KSB7XG5cdFx0XHRcdFx0eGRldmVudC5zdG9wUHJvcGFnYXRpb24oKTtcblx0XHRcdFx0fSk7XG5cblx0XHRcdGN1cnJlbnRfdGltZV9pbmRleCA9IDA7XG5cblx0XHRcdC8qKlxuXHRcdFx0ICogUnVucyB0aGUgY2FsbGJhY2sgZm9yIGVhY2ggb2YgdGhlIHNwZWNpZmllZCBub2RlJ3MgYW5jZXN0b3JzLlxuXHRcdFx0ICpcblx0XHRcdCAqIFJldHVybiBGQUxTRSBmcm9tIHRoZSBjYWxsYmFjayB0byBzdG9wIGFzY2VuZGluZy5cblx0XHRcdCAqXG5cdFx0XHQgKiBAcGFyYW0ge0RPTU5vZGV9IG5vZGVcblx0XHRcdCAqIEBwYXJhbSB7RnVuY3Rpb259IGNhbGxiYWNrXG5cdFx0XHQgKiBAcmV0dXJucyB7dW5kZWZpbmVkfVxuXHRcdFx0ICovXG5cdFx0XHRmb3JFYWNoQW5jZXN0b3JPZiA9IGZ1bmN0aW9uIChub2RlLCBjYWxsYmFjaykge1xuXHRcdFx0XHRkbyB7XG5cdFx0XHRcdFx0bm9kZSA9IG5vZGUucGFyZW50Tm9kZTtcblxuXHRcdFx0XHRcdGlmICghbm9kZSB8fCBjYWxsYmFjayhub2RlKSA9PT0gZmFsc2UpIHtcblx0XHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fSB3aGlsZSAobm9kZS5ub2RlTmFtZSAhPT0gJ0hUTUwnKTtcblx0XHRcdH07XG5cblx0XHRcdC8qKlxuXHRcdFx0ICogU2V0cyB0aGUgcG9zaXRpb24gb2YgdGhlIHBpY2tlci5cblx0XHRcdCAqXG5cdFx0XHQgKiBAcmV0dXJucyB7dW5kZWZpbmVkfVxuXHRcdFx0ICovXG5cdFx0XHRzZXRQb3MgPSBmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdHZhciBkYXRlSW5wdXRPZmZzZXQsXG5cdFx0XHRcdFx0ZGF0ZUlucHV0RWxlbSxcblx0XHRcdFx0XHR2ZXJ0aWNhbFBvc2l0aW9uLFxuXHRcdFx0XHRcdGxlZnQsXG5cdFx0XHRcdFx0cG9zaXRpb24sXG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXJFbGVtLFxuXHRcdFx0XHRcdGRhdGVJbnB1dEhhc0ZpeGVkQW5jZXN0b3IsXG5cdFx0XHRcdFx0JGRhdGVJbnB1dCxcblx0XHRcdFx0XHR3aW5kb3dXaWR0aCxcblx0XHRcdFx0XHR2ZXJ0aWNhbEFuY2hvckVkZ2UsXG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXJDc3MsXG5cdFx0XHRcdFx0d2luZG93SGVpZ2h0LFxuXHRcdFx0XHRcdHdpbmRvd1Njcm9sbFRvcDtcblxuXHRcdFx0XHQkZGF0ZUlucHV0ID0gZGF0ZXRpbWVwaWNrZXIuZGF0YSgnaW5wdXQnKTtcblx0XHRcdFx0ZGF0ZUlucHV0T2Zmc2V0ID0gJGRhdGVJbnB1dC5vZmZzZXQoKTtcblx0XHRcdFx0ZGF0ZUlucHV0RWxlbSA9ICRkYXRlSW5wdXRbMF07XG5cblx0XHRcdFx0dmVydGljYWxBbmNob3JFZGdlID0gJ3RvcCc7XG5cdFx0XHRcdHZlcnRpY2FsUG9zaXRpb24gPSAoZGF0ZUlucHV0T2Zmc2V0LnRvcCArIGRhdGVJbnB1dEVsZW0ub2Zmc2V0SGVpZ2h0KSAtIDE7XG5cdFx0XHRcdGxlZnQgPSBkYXRlSW5wdXRPZmZzZXQubGVmdDtcblx0XHRcdFx0cG9zaXRpb24gPSBcImFic29sdXRlXCI7XG5cblx0XHRcdFx0d2luZG93V2lkdGggPSAkKG9wdGlvbnMuY29udGVudFdpbmRvdykud2lkdGgoKTtcblx0XHRcdFx0d2luZG93SGVpZ2h0ID0gJChvcHRpb25zLmNvbnRlbnRXaW5kb3cpLmhlaWdodCgpO1xuXHRcdFx0XHR3aW5kb3dTY3JvbGxUb3AgPSAkKG9wdGlvbnMuY29udGVudFdpbmRvdykuc2Nyb2xsVG9wKCk7XG5cblx0XHRcdFx0aWYgKChvcHRpb25zLm93bmVyRG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsaWVudFdpZHRoIC0gZGF0ZUlucHV0T2Zmc2V0LmxlZnQpIDwgZGF0ZXBpY2tlci5wYXJlbnQoKS5vdXRlcldpZHRoKHRydWUpKSB7XG5cdFx0XHRcdFx0dmFyIGRpZmYgPSBkYXRlcGlja2VyLnBhcmVudCgpLm91dGVyV2lkdGgodHJ1ZSkgLSBkYXRlSW5wdXRFbGVtLm9mZnNldFdpZHRoO1xuXHRcdFx0XHRcdGxlZnQgPSBsZWZ0IC0gZGlmZjtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGlmICgkZGF0ZUlucHV0LnBhcmVudCgpLmNzcygnZGlyZWN0aW9uJykgPT09ICdydGwnKSB7XG5cdFx0XHRcdFx0bGVmdCAtPSAoZGF0ZXRpbWVwaWNrZXIub3V0ZXJXaWR0aCgpIC0gJGRhdGVJbnB1dC5vdXRlcldpZHRoKCkpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKG9wdGlvbnMuZml4ZWQpIHtcblx0XHRcdFx0XHR2ZXJ0aWNhbFBvc2l0aW9uIC09IHdpbmRvd1Njcm9sbFRvcDtcblx0XHRcdFx0XHRsZWZ0IC09ICQob3B0aW9ucy5jb250ZW50V2luZG93KS5zY3JvbGxMZWZ0KCk7XG5cdFx0XHRcdFx0cG9zaXRpb24gPSBcImZpeGVkXCI7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0ZGF0ZUlucHV0SGFzRml4ZWRBbmNlc3RvciA9IGZhbHNlO1xuXG5cdFx0XHRcdFx0Zm9yRWFjaEFuY2VzdG9yT2YoZGF0ZUlucHV0RWxlbSwgZnVuY3Rpb24gKGFuY2VzdG9yTm9kZSkge1xuXHRcdFx0XHRcdFx0aWYgKGFuY2VzdG9yTm9kZSA9PT0gbnVsbCkge1xuXHRcdFx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmNvbnRlbnRXaW5kb3cuZ2V0Q29tcHV0ZWRTdHlsZShhbmNlc3Rvck5vZGUpLmdldFByb3BlcnR5VmFsdWUoJ3Bvc2l0aW9uJykgPT09ICdmaXhlZCcpIHtcblx0XHRcdFx0XHRcdFx0ZGF0ZUlucHV0SGFzRml4ZWRBbmNlc3RvciA9IHRydWU7XG5cdFx0XHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9KTtcblxuXHRcdFx0XHRcdGlmIChkYXRlSW5wdXRIYXNGaXhlZEFuY2VzdG9yICYmICFvcHRpb25zLmluc2lkZVBhcmVudCkge1xuXHRcdFx0XHRcdFx0cG9zaXRpb24gPSAnZml4ZWQnO1xuXG5cdFx0XHRcdFx0XHQvL0lmIHRoZSBwaWNrZXIgd29uJ3QgZml0IGVudGlyZWx5IHdpdGhpbiB0aGUgdmlld3BvcnQgdGhlbiBkaXNwbGF5IGl0IGFib3ZlIHRoZSBkYXRlIGlucHV0LlxuXHRcdFx0XHRcdFx0aWYgKHZlcnRpY2FsUG9zaXRpb24gKyBkYXRldGltZXBpY2tlci5vdXRlckhlaWdodCgpID4gd2luZG93SGVpZ2h0ICsgd2luZG93U2Nyb2xsVG9wKSB7XG5cdFx0XHRcdFx0XHRcdHZlcnRpY2FsQW5jaG9yRWRnZSA9ICdib3R0b20nO1xuXHRcdFx0XHRcdFx0XHR2ZXJ0aWNhbFBvc2l0aW9uID0gKHdpbmRvd0hlaWdodCArIHdpbmRvd1Njcm9sbFRvcCkgLSBkYXRlSW5wdXRPZmZzZXQudG9wO1xuXHRcdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdFx0dmVydGljYWxQb3NpdGlvbiAtPSB3aW5kb3dTY3JvbGxUb3A7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdGlmICh2ZXJ0aWNhbFBvc2l0aW9uICsgZGF0ZXRpbWVwaWNrZXJbMF0ub2Zmc2V0SGVpZ2h0ID4gd2luZG93SGVpZ2h0ICsgd2luZG93U2Nyb2xsVG9wKSB7XG5cdFx0XHRcdFx0XHRcdHZlcnRpY2FsUG9zaXRpb24gPSBkYXRlSW5wdXRPZmZzZXQudG9wIC0gZGF0ZXRpbWVwaWNrZXJbMF0ub2Zmc2V0SGVpZ2h0ICsgMTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRpZiAodmVydGljYWxQb3NpdGlvbiA8IDApIHtcblx0XHRcdFx0XHRcdHZlcnRpY2FsUG9zaXRpb24gPSAwO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdGlmIChsZWZ0ICsgZGF0ZUlucHV0RWxlbS5vZmZzZXRXaWR0aCA+IHdpbmRvd1dpZHRoKSB7XG5cdFx0XHRcdFx0XHRsZWZ0ID0gd2luZG93V2lkdGggLSBkYXRlSW5wdXRFbGVtLm9mZnNldFdpZHRoO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fVxuXG5cdFx0XHRcdGRhdGV0aW1lcGlja2VyRWxlbSA9IGRhdGV0aW1lcGlja2VyWzBdO1xuXG5cdFx0XHRcdGZvckVhY2hBbmNlc3Rvck9mKGRhdGV0aW1lcGlja2VyRWxlbSwgZnVuY3Rpb24gKGFuY2VzdG9yTm9kZSkge1xuXHRcdFx0XHRcdHZhciBhbmNlc3Rvck5vZGVQb3NpdGlvbjtcblxuXHRcdFx0XHRcdGFuY2VzdG9yTm9kZVBvc2l0aW9uID0gb3B0aW9ucy5jb250ZW50V2luZG93LmdldENvbXB1dGVkU3R5bGUoYW5jZXN0b3JOb2RlKS5nZXRQcm9wZXJ0eVZhbHVlKCdwb3NpdGlvbicpO1xuXG5cdFx0XHRcdFx0aWYgKGFuY2VzdG9yTm9kZVBvc2l0aW9uID09PSAncmVsYXRpdmUnICYmIHdpbmRvd1dpZHRoID49IGFuY2VzdG9yTm9kZS5vZmZzZXRXaWR0aCkge1xuXHRcdFx0XHRcdFx0bGVmdCA9IGxlZnQgLSAoKHdpbmRvd1dpZHRoIC0gYW5jZXN0b3JOb2RlLm9mZnNldFdpZHRoKSAvIDIpO1xuXHRcdFx0XHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0fSk7XG5cblx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXJDc3MgPSB7XG5cdFx0XHRcdFx0cG9zaXRpb246IHBvc2l0aW9uLFxuXHRcdFx0XHRcdGxlZnQ6IG9wdGlvbnMuaW5zaWRlUGFyZW50ID8gZGF0ZUlucHV0RWxlbS5vZmZzZXRMZWZ0IDogbGVmdCxcblx0XHRcdFx0XHR0b3A6ICcnLCAgLy9Jbml0aWFsaXplIHRvIHByZXZlbnQgcHJldmlvdXMgdmFsdWVzIGludGVyZmVyaW5nIHdpdGggbmV3IG9uZXMuXG5cdFx0XHRcdFx0Ym90dG9tOiAnJyAgLy9Jbml0aWFsaXplIHRvIHByZXZlbnQgcHJldmlvdXMgdmFsdWVzIGludGVyZmVyaW5nIHdpdGggbmV3IG9uZXMuXG5cdFx0XHRcdH07XG5cblx0XHRcdFx0aWYgKG9wdGlvbnMuaW5zaWRlUGFyZW50KSB7XG4gICAgICAgICAgICAgICAgICAgIGRhdGV0aW1lcGlja2VyQ3NzW3ZlcnRpY2FsQW5jaG9yRWRnZV0gPSBkYXRlSW5wdXRFbGVtLm9mZnNldFRvcCArIGRhdGVJbnB1dEVsZW0ub2Zmc2V0SGVpZ2h0O1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgIGRhdGV0aW1lcGlja2VyQ3NzW3ZlcnRpY2FsQW5jaG9yRWRnZV0gPSB2ZXJ0aWNhbFBvc2l0aW9uO1xuICAgICAgICAgICAgICAgIH1cblxuXHRcdFx0XHRkYXRldGltZXBpY2tlci5jc3MoZGF0ZXRpbWVwaWNrZXJDc3MpO1xuXHRcdFx0fTtcblxuXHRcdFx0ZGF0ZXRpbWVwaWNrZXJcblx0XHRcdFx0Lm9uKCdvcGVuLnhkc29mdCcsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0XHRcdHZhciBvblNob3cgPSB0cnVlO1xuXHRcdFx0XHRcdGlmIChvcHRpb25zLm9uU2hvdyAmJiAkLmlzRnVuY3Rpb24ob3B0aW9ucy5vblNob3cpKSB7XG5cdFx0XHRcdFx0XHRvblNob3cgPSBvcHRpb25zLm9uU2hvdy5jYWxsKGRhdGV0aW1lcGlja2VyLCBfeGRzb2Z0X2RhdGV0aW1lLmN1cnJlbnRUaW1lLCBkYXRldGltZXBpY2tlci5kYXRhKCdpbnB1dCcpLCBldmVudCk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmIChvblNob3cgIT09IGZhbHNlKSB7XG5cdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci5zaG93KCk7XG5cdFx0XHRcdFx0XHRzZXRQb3MoKTtcblx0XHRcdFx0XHRcdCQob3B0aW9ucy5jb250ZW50V2luZG93KVxuXHRcdFx0XHRcdFx0XHQub2ZmKCdyZXNpemUueGRzb2Z0Jywgc2V0UG9zKVxuXHRcdFx0XHRcdFx0XHQub24oJ3Jlc2l6ZS54ZHNvZnQnLCBzZXRQb3MpO1xuXG5cdFx0XHRcdFx0XHRpZiAob3B0aW9ucy5jbG9zZU9uV2l0aG91dENsaWNrKSB7XG5cdFx0XHRcdFx0XHRcdCQoW29wdGlvbnMub3duZXJEb2N1bWVudC5ib2R5LCBvcHRpb25zLmNvbnRlbnRXaW5kb3ddKS5vbigndG91Y2hzdGFydCBtb3VzZWRvd24ueGRzb2Z0JywgZnVuY3Rpb24gYXJndW1lbnRzX2NhbGxlZTYoKSB7XG5cdFx0XHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2xvc2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHRcdFx0JChbb3B0aW9ucy5vd25lckRvY3VtZW50LmJvZHksIG9wdGlvbnMuY29udGVudFdpbmRvd10pLm9mZigndG91Y2hzdGFydCBtb3VzZWRvd24ueGRzb2Z0JywgYXJndW1lbnRzX2NhbGxlZTYpO1xuXHRcdFx0XHRcdFx0XHR9KTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0pXG5cdFx0XHRcdC5vbignY2xvc2UueGRzb2Z0JywgZnVuY3Rpb24gKGV2ZW50KSB7XG5cdFx0XHRcdFx0dmFyIG9uQ2xvc2UgPSB0cnVlO1xuXHRcdFx0XHRcdG1vbnRoX3BpY2tlclxuXHRcdFx0XHRcdFx0LmZpbmQoJy54ZHNvZnRfbW9udGgsLnhkc29mdF95ZWFyJylcblx0XHRcdFx0XHRcdC5maW5kKCcueGRzb2Z0X3NlbGVjdCcpXG5cdFx0XHRcdFx0XHQuaGlkZSgpO1xuXHRcdFx0XHRcdGlmIChvcHRpb25zLm9uQ2xvc2UgJiYgJC5pc0Z1bmN0aW9uKG9wdGlvbnMub25DbG9zZSkpIHtcblx0XHRcdFx0XHRcdG9uQ2xvc2UgPSBvcHRpb25zLm9uQ2xvc2UuY2FsbChkYXRldGltZXBpY2tlciwgX3hkc29mdF9kYXRldGltZS5jdXJyZW50VGltZSwgZGF0ZXRpbWVwaWNrZXIuZGF0YSgnaW5wdXQnKSwgZXZlbnQpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRpZiAob25DbG9zZSAhPT0gZmFsc2UgJiYgIW9wdGlvbnMub3BlbmVkICYmICFvcHRpb25zLmlubGluZSkge1xuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuaGlkZSgpO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRldmVudC5zdG9wUHJvcGFnYXRpb24oKTtcblx0XHRcdFx0fSlcblx0XHRcdFx0Lm9uKCd0b2dnbGUueGRzb2Z0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdGlmIChkYXRldGltZXBpY2tlci5pcygnOnZpc2libGUnKSkge1xuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2xvc2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ29wZW4ueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9KVxuXHRcdFx0XHQuZGF0YSgnaW5wdXQnLCBpbnB1dCk7XG5cblx0XHRcdHRpbWVyID0gMDtcblxuXHRcdFx0ZGF0ZXRpbWVwaWNrZXIuZGF0YSgneGRzb2Z0X2RhdGV0aW1lJywgX3hkc29mdF9kYXRldGltZSk7XG5cdFx0XHRkYXRldGltZXBpY2tlci5zZXRPcHRpb25zKG9wdGlvbnMpO1xuXG5cdFx0XHRmdW5jdGlvbiBnZXRDdXJyZW50VmFsdWUoKSB7XG5cdFx0XHRcdHZhciBjdCA9IGZhbHNlLCB0aW1lO1xuXG5cdFx0XHRcdGlmIChvcHRpb25zLnN0YXJ0RGF0ZSkge1xuXHRcdFx0XHRcdGN0ID0gX3hkc29mdF9kYXRldGltZS5zdHJUb0RhdGUob3B0aW9ucy5zdGFydERhdGUpO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdGN0ID0gb3B0aW9ucy52YWx1ZSB8fCAoKGlucHV0ICYmIGlucHV0LnZhbCAmJiBpbnB1dC52YWwoKSkgPyBpbnB1dC52YWwoKSA6ICcnKTtcblx0XHRcdFx0XHRpZiAoY3QpIHtcblx0XHRcdFx0XHRcdGN0ID0gX3hkc29mdF9kYXRldGltZS5zdHJUb0RhdGVUaW1lKGN0KTtcblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLnllYXJPZmZzZXQpIHtcblx0XHRcdFx0XHRcdFx0Y3QgPSBuZXcgRGF0ZShjdC5nZXRGdWxsWWVhcigpIC0gb3B0aW9ucy55ZWFyT2Zmc2V0LCBjdC5nZXRNb250aCgpLCBjdC5nZXREYXRlKCksIGN0LmdldEhvdXJzKCksIGN0LmdldE1pbnV0ZXMoKSwgY3QuZ2V0U2Vjb25kcygpLCBjdC5nZXRNaWxsaXNlY29uZHMoKSk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fSBlbHNlIGlmIChvcHRpb25zLmRlZmF1bHREYXRlKSB7XG5cdFx0XHRcdFx0XHRjdCA9IF94ZHNvZnRfZGF0ZXRpbWUuc3RyVG9EYXRlVGltZShvcHRpb25zLmRlZmF1bHREYXRlKTtcblx0XHRcdFx0XHRcdGlmIChvcHRpb25zLmRlZmF1bHRUaW1lKSB7XG5cdFx0XHRcdFx0XHRcdHRpbWUgPSBfeGRzb2Z0X2RhdGV0aW1lLnN0cnRvdGltZShvcHRpb25zLmRlZmF1bHRUaW1lKTtcblx0XHRcdFx0XHRcdFx0Y3Quc2V0SG91cnModGltZS5nZXRIb3VycygpKTtcblx0XHRcdFx0XHRcdFx0Y3Quc2V0TWludXRlcyh0aW1lLmdldE1pbnV0ZXMoKSk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKGN0ICYmIF94ZHNvZnRfZGF0ZXRpbWUuaXNWYWxpZERhdGUoY3QpKSB7XG5cdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuZGF0YSgnY2hhbmdlZCcsIHRydWUpO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdGN0ID0gJyc7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRyZXR1cm4gY3QgfHwgMDtcblx0XHRcdH1cblxuXHRcdFx0ZnVuY3Rpb24gc2V0TWFzayhvcHRpb25zKSB7XG5cblx0XHRcdFx0dmFyIGlzVmFsaWRWYWx1ZSA9IGZ1bmN0aW9uIChtYXNrLCB2YWx1ZSkge1xuXHRcdFx0XHRcdFx0dmFyIHJlZyA9IG1hc2tcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoLyhbXFxbXFxdXFwvXFx7XFx9XFwoXFwpXFwtXFwuXFwrXXsxfSkvZywgJ1xcXFwkMScpXG5cdFx0XHRcdFx0XHRcdC5yZXBsYWNlKC9fL2csICd7ZGlnaXQrfScpXG5cdFx0XHRcdFx0XHRcdC5yZXBsYWNlKC8oWzAtOV17MX0pL2csICd7ZGlnaXQkMX0nKVxuXHRcdFx0XHRcdFx0XHQucmVwbGFjZSgvXFx7ZGlnaXQoWzAtOV17MX0pXFx9L2csICdbMC0kMV9dezF9Jylcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoL1xce2RpZ2l0W1xcK11cXH0vZywgJ1swLTlfXXsxfScpO1xuXHRcdFx0XHRcdFx0cmV0dXJuIChuZXcgUmVnRXhwKHJlZykpLnRlc3QodmFsdWUpO1xuXHRcdFx0XHRcdH0sXG5cdFx0XHRcdFx0Z2V0Q2FyZXRQb3MgPSBmdW5jdGlvbiAoaW5wdXQpIHtcblx0XHRcdFx0XHRcdHRyeSB7XG5cdFx0XHRcdFx0XHRcdGlmIChvcHRpb25zLm93bmVyRG9jdW1lbnQuc2VsZWN0aW9uICYmIG9wdGlvbnMub3duZXJEb2N1bWVudC5zZWxlY3Rpb24uY3JlYXRlUmFuZ2UpIHtcblx0XHRcdFx0XHRcdFx0XHR2YXIgcmFuZ2UgPSBvcHRpb25zLm93bmVyRG9jdW1lbnQuc2VsZWN0aW9uLmNyZWF0ZVJhbmdlKCk7XG5cdFx0XHRcdFx0XHRcdFx0cmV0dXJuIHJhbmdlLmdldEJvb2ttYXJrKCkuY2hhckNvZGVBdCgyKSAtIDI7XG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0aWYgKGlucHV0LnNldFNlbGVjdGlvblJhbmdlKSB7XG5cdFx0XHRcdFx0XHRcdFx0cmV0dXJuIGlucHV0LnNlbGVjdGlvblN0YXJ0O1xuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHR9IGNhdGNoIChlKSB7XG5cdFx0XHRcdFx0XHRcdHJldHVybiAwO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH0sXG5cdFx0XHRcdFx0c2V0Q2FyZXRQb3MgPSBmdW5jdGlvbiAobm9kZSwgcG9zKSB7XG5cdFx0XHRcdFx0XHRub2RlID0gKHR5cGVvZiBub2RlID09PSBcInN0cmluZ1wiIHx8IG5vZGUgaW5zdGFuY2VvZiBTdHJpbmcpID8gb3B0aW9ucy5vd25lckRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vZGUpIDogbm9kZTtcblx0XHRcdFx0XHRcdGlmICghbm9kZSkge1xuXHRcdFx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRpZiAobm9kZS5jcmVhdGVUZXh0UmFuZ2UpIHtcblx0XHRcdFx0XHRcdFx0dmFyIHRleHRSYW5nZSA9IG5vZGUuY3JlYXRlVGV4dFJhbmdlKCk7XG5cdFx0XHRcdFx0XHRcdHRleHRSYW5nZS5jb2xsYXBzZSh0cnVlKTtcblx0XHRcdFx0XHRcdFx0dGV4dFJhbmdlLm1vdmVFbmQoJ2NoYXJhY3RlcicsIHBvcyk7XG5cdFx0XHRcdFx0XHRcdHRleHRSYW5nZS5tb3ZlU3RhcnQoJ2NoYXJhY3RlcicsIHBvcyk7XG5cdFx0XHRcdFx0XHRcdHRleHRSYW5nZS5zZWxlY3QoKTtcblx0XHRcdFx0XHRcdFx0cmV0dXJuIHRydWU7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRpZiAobm9kZS5zZXRTZWxlY3Rpb25SYW5nZSkge1xuXHRcdFx0XHRcdFx0XHRub2RlLnNldFNlbGVjdGlvblJhbmdlKHBvcywgcG9zKTtcblx0XHRcdFx0XHRcdFx0cmV0dXJuIHRydWU7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XG5cdFx0XHRcdFx0fTtcblxuXHRcdFx0XHRpZihvcHRpb25zLm1hc2spIHtcblx0XHRcdFx0XHRpbnB1dC5vZmYoJ2tleWRvd24ueGRzb2Z0Jyk7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHRpZiAob3B0aW9ucy5tYXNrID09PSB0cnVlKSB7XG5cdFx0XHRcdFx0aWYgKGRhdGVIZWxwZXIuZm9ybWF0TWFzaykge1xuXHRcdFx0XHRcdFx0b3B0aW9ucy5tYXNrID0gZGF0ZUhlbHBlci5mb3JtYXRNYXNrKG9wdGlvbnMuZm9ybWF0KVxuXHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRvcHRpb25zLm1hc2sgPSBvcHRpb25zLmZvcm1hdFxuXHRcdFx0XHRcdFx0XHQucmVwbGFjZSgvWS9nLCAnOTk5OScpXG5cdFx0XHRcdFx0XHRcdC5yZXBsYWNlKC9GL2csICc5OTk5Jylcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoL20vZywgJzE5Jylcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoL2QvZywgJzM5Jylcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoL0gvZywgJzI5Jylcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoL2kvZywgJzU5Jylcblx0XHRcdFx0XHRcdFx0LnJlcGxhY2UoL3MvZywgJzU5Jyk7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9XG5cblx0XHRcdFx0aWYgKCQudHlwZShvcHRpb25zLm1hc2spID09PSAnc3RyaW5nJykge1xuXHRcdFx0XHRcdGlmICghaXNWYWxpZFZhbHVlKG9wdGlvbnMubWFzaywgaW5wdXQudmFsKCkpKSB7XG5cdFx0XHRcdFx0XHRpbnB1dC52YWwob3B0aW9ucy5tYXNrLnJlcGxhY2UoL1swLTldL2csICdfJykpO1xuXHRcdFx0XHRcdFx0c2V0Q2FyZXRQb3MoaW5wdXRbMF0sIDApO1xuXHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdGlucHV0Lm9uKCdwYXN0ZS54ZHNvZnQnLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRcdFx0XHQgICAgLy8gY291cGxlIG9wdGlvbnMgaGVyZVxuXHRcdFx0XHRcdCAgICAvLyAxLiByZXR1cm4gZmFsc2UgLSB0ZWxsIHRoZW0gdGhleSBjYW4ndCBwYXN0ZVxuXHRcdFx0XHRcdCAgICAvLyAyLiBpbnNlcnQgb3ZlciBjdXJyZW50IGNoYXJhY3RlcnMgLSBtaW5pbWFsIHZhbGlkYXRpb25cblx0XHRcdFx0XHQgICAgLy8gMy4gZnVsbCBmbGVkZ2VkIHBhcnNpbmcgYW5kIHZhbGlkYXRpb25cblx0XHRcdFx0XHQgICAgLy8gbGV0J3MgZ28gb3B0aW9uIDIgZm9yIG5vd1xuXG5cdFx0XHRcdFx0ICAgIC8vIGZpcmVzIG11bHRpcGxlIHRpbWVzIGZvciBzb21lIHJlYXNvblxuXG5cdFx0XHRcdFx0ICAgIC8vIGh0dHBzOi8vc3RhY2tvdmVyZmxvdy5jb20vYS8zMDQ5NjQ4OC8xMzY2MDMzXG5cdFx0XHRcdFx0ICAgIHZhciBjbGlwYm9hcmREYXRhID0gZXZlbnQuY2xpcGJvYXJkRGF0YSB8fCBldmVudC5vcmlnaW5hbEV2ZW50LmNsaXBib2FyZERhdGEgfHwgd2luZG93LmNsaXBib2FyZERhdGEsXG5cdFx0XHRcdFx0XHRwYXN0ZWREYXRhID0gY2xpcGJvYXJkRGF0YS5nZXREYXRhKCd0ZXh0JyksXG5cdFx0XHRcdFx0XHR2YWwgPSB0aGlzLnZhbHVlLFxuXHRcdFx0XHRcdFx0cG9zID0gdGhpcy5zZWxlY3Rpb25TdGFydFxuXG5cdFx0XHRcdFx0ICAgIHZhciB2YWx1ZUJlZm9yZUN1cnNvciA9IHZhbC5zdWJzdHIoMCwgcG9zKTtcblx0XHRcdFx0XHQgICAgdmFyIHZhbHVlQWZ0ZXJQYXN0ZSA9IHZhbC5zdWJzdHIocG9zICsgcGFzdGVkRGF0YS5sZW5ndGgpO1xuXG5cdFx0XHRcdFx0ICAgIHZhbCA9IHZhbHVlQmVmb3JlQ3Vyc29yICsgcGFzdGVkRGF0YSArIHZhbHVlQWZ0ZXJQYXN0ZTsgICAgICAgICAgIFxuXHRcdFx0XHRcdCAgICBwb3MgKz0gcGFzdGVkRGF0YS5sZW5ndGg7XG5cblx0XHRcdFx0XHQgICAgaWYgKGlzVmFsaWRWYWx1ZShvcHRpb25zLm1hc2ssIHZhbCkpIHtcblx0XHRcdFx0XHRcdHRoaXMudmFsdWUgPSB2YWw7XG5cdFx0XHRcdFx0XHRzZXRDYXJldFBvcyh0aGlzLCBwb3MpO1xuXHRcdFx0XHRcdCAgICB9IGVsc2UgaWYgKCQudHJpbSh2YWwpID09PSAnJykge1xuXHRcdFx0XHRcdFx0dGhpcy52YWx1ZSA9IG9wdGlvbnMubWFzay5yZXBsYWNlKC9bMC05XS9nLCAnXycpO1xuXHRcdFx0XHRcdCAgICB9IGVsc2Uge1xuXHRcdFx0XHRcdFx0aW5wdXQudHJpZ2dlcignZXJyb3JfaW5wdXQueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0ICAgIH1cblxuXHRcdFx0XHRcdCAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0XHRcdCAgICByZXR1cm4gZmFsc2U7XG5cdFx0XHRcdFx0ICB9KTtcblxuXHRcdFx0XHRcdCAgaW5wdXQub24oJ2tleWRvd24ueGRzb2Z0JywgZnVuY3Rpb24gKGV2ZW50KSB7XG5cdFx0XHRcdFx0ICAgIHZhciB2YWwgPSB0aGlzLnZhbHVlLFxuXHRcdFx0XHRcdFx0a2V5ID0gZXZlbnQud2hpY2gsXG5cdFx0XHRcdFx0XHRwb3MgPSB0aGlzLnNlbGVjdGlvblN0YXJ0LFxuXHRcdFx0XHRcdFx0c2VsRW5kID0gdGhpcy5zZWxlY3Rpb25FbmQsXG5cdFx0XHRcdFx0XHRoYXNTZWwgPSBwb3MgIT09IHNlbEVuZCxcblx0XHRcdFx0XHRcdGRpZ2l0O1xuXG5cdFx0XHRcdFx0ICAgIC8vIG9ubHkgYWxvdyB0aGVzZSBjaGFyYWN0ZXJzXG5cdFx0XHRcdFx0ICAgIGlmICgoKGtleSA+PSAgS0VZMCAmJiBrZXkgPD0gIEtFWTkpICB8fFxuXHRcdFx0XHRcdFx0IChrZXkgPj0gX0tFWTAgJiYga2V5IDw9IF9LRVk5KSkgfHwgXG5cdFx0XHRcdFx0XHQgKGtleSA9PT0gQkFDS1NQQUNFIHx8IGtleSA9PT0gREVMKSkge1xuXG5cdFx0XHRcdFx0ICAgICAgLy8gZ2V0IGNoYXIgdG8gaW5zZXJ0IHdoaWNoIGlzIG5ldyBjaGFyYWN0ZXIgb3IgcGxhY2Vob2xkZXIgKCdfJylcblx0XHRcdFx0XHQgICAgICBkaWdpdCA9IChrZXkgPT09IEJBQ0tTUEFDRSB8fCBrZXkgPT09IERFTCkgPyAnXycgOlxuXHRcdFx0XHRcdFx0XHQgIFN0cmluZy5mcm9tQ2hhckNvZGUoKF9LRVkwIDw9IGtleSAmJiBrZXkgPD0gX0tFWTkpID8ga2V5IC0gS0VZMCA6IGtleSk7XG5cblx0XHRcdFx0XHRcdC8vIHdlJ3JlIGRlbGV0aW5nIHNvbWV0aGluZywgd2UncmUgbm90IGF0IHRoZSBzdGFydCwgYW5kIGhhdmUgbm9ybWFsIGN1cnNvciwgbW92ZSBiYWNrIG9uZVxuXHRcdFx0XHRcdFx0Ly8gaWYgd2UgaGF2ZSBhIHNlbGVjdGlvbiBsZW5ndGgsIGN1cnNvciBhY3R1YWxseSBzaXRzIGJlaGluZCBkZWxldGFibGUgY2hhciwgbm90IGluIGZyb250XG5cdFx0XHRcdFx0XHRpZiAoa2V5ID09PSBCQUNLU1BBQ0UgJiYgcG9zICYmICFoYXNTZWwpIHtcblx0XHRcdFx0XHRcdCAgICBwb3MgLT0gMTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0Ly8gZG9uJ3Qgc3RvcCBvbiBhIHNlcGFyYXRvciwgY29udGludWUgd2hhdGV2ZXIgZGlyZWN0aW9uIHlvdSB3ZXJlIGdvaW5nXG5cdFx0XHRcdFx0XHQvLyAgIHZhbHVlIGNoYXIgLSBrZWVwIGluY3JlbWVudGluZyBwb3NpdGlvbiB3aGlsZSBvbiBzZXBhcmF0b3IgY2hhciBhbmQgd2Ugc3RpbGwgaGF2ZSByb29tXG5cdFx0XHRcdFx0XHQvLyAgIGRlbCBjaGFyICAgLSBrZWVwIGRlY3JlbWVudGluZyBwb3NpdGlvbiB3aGlsZSBvbiBzZXBhcmF0b3IgY2hhciBhbmQgd2Ugc3RpbGwgaGF2ZSByb29tXG5cdFx0XHRcdFx0XHR3aGlsZSAodHJ1ZSkge1xuXHRcdFx0XHRcdFx0ICB2YXIgbWFza1ZhbHVlQXRDdXJQb3MgPSBvcHRpb25zLm1hc2suc3Vic3RyKHBvcywgMSk7XG5cdFx0XHRcdFx0XHQgIHZhciBwb3NTaG9ydGVyVGhhbk1hc2tMZW5ndGggPSBwb3MgPCBvcHRpb25zLm1hc2subGVuZ3RoO1xuXHRcdFx0XHRcdFx0ICB2YXIgcG9zR3JlYXRlclRoYW5aZXJvID0gcG9zID4gMDtcblx0XHRcdFx0XHRcdCAgdmFyIG5vdE51bWJlck9yUGxhY2Vob2xkZXIgPSAvW14wLTlfXS87XG5cdFx0XHRcdFx0XHQgIHZhciBjdXJQb3NPblNlcCA9IG5vdE51bWJlck9yUGxhY2Vob2xkZXIudGVzdChtYXNrVmFsdWVBdEN1clBvcyk7XG5cdFx0XHRcdFx0XHQgIHZhciBjb250aW51ZU1vdmluZ1Bvc2l0aW9uID0gY3VyUG9zT25TZXAgJiYgcG9zU2hvcnRlclRoYW5NYXNrTGVuZ3RoICYmIHBvc0dyZWF0ZXJUaGFuWmVyb1xuXG5cdFx0XHRcdFx0XHQgIC8vIGlmIHdlIGhpdCBhIHJlYWwgY2hhciwgc3RheSB3aGVyZSB3ZSBhcmVcblx0XHRcdFx0XHRcdCAgaWYgKCFjb250aW51ZU1vdmluZ1Bvc2l0aW9uKSBicmVhaztcblxuXHRcdFx0XHRcdFx0ICAvLyBoaXR0aW5nIGJhY2tzcGFjZSBpbiBhIHNlbGVjdGlvbiwgeW91IGNhbiBwb3NzaWJseSBnbyBiYWNrIGFueSBmdXJ0aGVyIC0gZ28gZm9yd2FyZFxuXHRcdFx0XHRcdFx0ICBwb3MgKz0gKGtleSA9PT0gQkFDS1NQQUNFICYmICFoYXNTZWwpID8gLTEgOiAxO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChldmVudC5tZXRhS2V5KSB7ICAgIC8vIGNtZCBoYXMgYmVlbiBwcmVzc2VkXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcG9zID0gMDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBoYXNTZWwgPSB0cnVlO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG5cdFx0XHRcdFx0XHRpZiAoaGFzU2VsKSB7XG5cdFx0XHRcdFx0XHQgIC8vIHBvcyBtaWdodCBoYXZlIG1vdmVkIHNvIHJlLWNhbGMgbGVuZ3RoXG5cdFx0XHRcdFx0XHQgIHZhciBzZWxMZW5ndGggPSBzZWxFbmQgLSBwb3NcblxuXHRcdFx0XHRcdFx0ICAvLyBpZiB3ZSBoYXZlIGEgc2VsZWN0aW9uIGxlbmd0aCB3ZSB3aWxsIHdpcGUgb3V0IGVudGlyZSBzZWxlY3Rpb24gYW5kIHJlcGxhY2Ugd2l0aCBkZWZhdWx0IHRlbXBsYXRlIGZvciB0aGF0IHJhbmdlXG5cdFx0XHRcdFx0XHQgIHZhciBkZWZhdWx0QmxhbmsgPSBvcHRpb25zLm1hc2sucmVwbGFjZSgvWzAtOV0vZywgJ18nKTtcblx0XHRcdFx0XHRcdCAgdmFyIGRlZmF1bHRCbGFua1NlbGVjdGlvblJlcGxhY2VtZW50ID0gZGVmYXVsdEJsYW5rLnN1YnN0cihwb3MsIHNlbExlbmd0aCk7IFxuXHRcdFx0XHRcdFx0ICB2YXIgc2VsUmVwbGFjZW1lbnRSZW1haW5kZXIgPSBkZWZhdWx0QmxhbmtTZWxlY3Rpb25SZXBsYWNlbWVudC5zdWJzdHIoMSkgLy8gbWlnaHQgYmUgZW1wdHlcblxuXHRcdFx0XHRcdFx0ICB2YXIgdmFsdWVCZWZvcmVTZWwgPSB2YWwuc3Vic3RyKDAsIHBvcyk7XG5cdFx0XHRcdFx0XHQgIHZhciBpbnNlcnRDaGFycyA9IGRpZ2l0ICsgc2VsUmVwbGFjZW1lbnRSZW1haW5kZXI7XG5cdFx0XHRcdFx0XHQgIHZhciBjaGFyc0FmdGVyU2VsZWN0aW9uID0gdmFsLnN1YnN0cihwb3MgKyBzZWxMZW5ndGgpO1xuXG5cdFx0XHRcdFx0XHQgIHZhbCA9IHZhbHVlQmVmb3JlU2VsICsgaW5zZXJ0Q2hhcnMgKyBjaGFyc0FmdGVyU2VsZWN0aW9uXG5cblx0XHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHQgIHZhciB2YWx1ZUJlZm9yZUN1cnNvciA9IHZhbC5zdWJzdHIoMCwgcG9zKTtcblx0XHRcdFx0XHRcdCAgdmFyIGluc2VydENoYXIgPSBkaWdpdDtcblx0XHRcdFx0XHRcdCAgdmFyIHZhbHVlQWZ0ZXJOZXh0Q2hhciA9IHZhbC5zdWJzdHIocG9zICsgMSk7XG5cblx0XHRcdFx0XHRcdCAgdmFsID0gdmFsdWVCZWZvcmVDdXJzb3IgKyBpbnNlcnRDaGFyICsgdmFsdWVBZnRlck5leHRDaGFyXG5cdFx0XHRcdFx0XHR9XG5cblx0XHRcdFx0XHRcdGlmICgkLnRyaW0odmFsKSA9PT0gJycpIHtcblx0XHRcdFx0XHRcdCAgLy8gaWYgZW1wdHksIHNldCB0byBkZWZhdWx0XG5cdFx0XHRcdFx0XHQgICAgdmFsID0gZGVmYXVsdEJsYW5rXG5cdFx0XHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdFx0ICAvLyBpZiBhdCB0aGUgbGFzdCBjaGFyYWN0ZXIgZG9uJ3QgbmVlZCB0byBkbyBhbnl0aGluZ1xuXHRcdFx0XHRcdFx0ICAgIGlmIChwb3MgPT09IG9wdGlvbnMubWFzay5sZW5ndGgpIHtcblx0XHRcdFx0XHRcdFx0ZXZlbnQucHJldmVudERlZmF1bHQoKTtcblx0XHRcdFx0XHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdFx0XHRcdFx0ICAgIH1cblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0Ly8gcmVzdW1lIGN1cnNvciBsb2NhdGlvblxuXHRcdFx0XHRcdFx0cG9zICs9IChrZXkgPT09IEJBQ0tTUEFDRSkgPyAwIDogMTtcblx0XHRcdFx0XHRcdC8vIGRvbid0IHN0b3Agb24gYSBzZXBhcmF0b3IsIGNvbnRpbnVlIHdoYXRldmVyIGRpcmVjdGlvbiB5b3Ugd2VyZSBnb2luZ1xuXHRcdFx0XHRcdFx0d2hpbGUgKC9bXjAtOV9dLy50ZXN0KG9wdGlvbnMubWFzay5zdWJzdHIocG9zLCAxKSkgJiYgcG9zIDwgb3B0aW9ucy5tYXNrLmxlbmd0aCAmJiBwb3MgPiAwKSB7XG5cdFx0XHRcdFx0XHQgICAgcG9zICs9IChrZXkgPT09IEJBQ0tTUEFDRSkgPyAwIDogMTtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0aWYgKGlzVmFsaWRWYWx1ZShvcHRpb25zLm1hc2ssIHZhbCkpIHtcblx0XHRcdFx0XHRcdCAgICB0aGlzLnZhbHVlID0gdmFsO1xuXHRcdFx0XHRcdFx0ICAgIHNldENhcmV0UG9zKHRoaXMsIHBvcyk7XG5cdFx0XHRcdFx0XHR9IGVsc2UgaWYgKCQudHJpbSh2YWwpID09PSAnJykge1xuXHRcdFx0XHRcdFx0ICAgIHRoaXMudmFsdWUgPSBvcHRpb25zLm1hc2sucmVwbGFjZSgvWzAtOV0vZywgJ18nKTtcblx0XHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHQgICAgaW5wdXQudHJpZ2dlcignZXJyb3JfaW5wdXQueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0ICAgIH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRpZiAoKFtBS0VZLCBDS0VZLCBWS0VZLCBaS0VZLCBZS0VZXS5pbmRleE9mKGtleSkgIT09IC0xICYmIGN0cmxEb3duKSB8fCBbRVNDLCBBUlJPV1VQLCBBUlJPV0RPV04sIEFSUk9XTEVGVCwgQVJST1dSSUdIVCwgRjUsIENUUkxLRVksIFRBQiwgRU5URVJdLmluZGV4T2Yoa2V5KSAhPT0gLTEpIHtcblx0XHRcdFx0XHRcdCAgICByZXR1cm4gdHJ1ZTtcblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHQgICAgfVxuXG5cdFx0XHRcdFx0ICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cdFx0XHRcdFx0ICAgIHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHQgIH0pO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cblx0XHRcdF94ZHNvZnRfZGF0ZXRpbWUuc2V0Q3VycmVudFRpbWUoZ2V0Q3VycmVudFZhbHVlKCkpO1xuXG5cdFx0XHRpbnB1dFxuXHRcdFx0XHQuZGF0YSgneGRzb2Z0X2RhdGV0aW1lcGlja2VyJywgZGF0ZXRpbWVwaWNrZXIpXG5cdFx0XHRcdC5vbignb3Blbi54ZHNvZnQgZm9jdXNpbi54ZHNvZnQgbW91c2Vkb3duLnhkc29mdCB0b3VjaHN0YXJ0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdGlmIChpbnB1dC5pcygnOmRpc2FibGVkJykgfHwgKGlucHV0LmRhdGEoJ3hkc29mdF9kYXRldGltZXBpY2tlcicpLmlzKCc6dmlzaWJsZScpICYmIG9wdGlvbnMuY2xvc2VPbklucHV0Q2xpY2spKSB7XG5cdFx0XHRcdFx0XHRyZXR1cm47XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHRcdGlmICghb3B0aW9ucy5vcGVuT25Gb2N1cykge1xuXHRcdFx0XHRcdFx0cmV0dXJuO1xuXHRcdFx0XHRcdH1cblx0XHRcdFx0XHRjbGVhclRpbWVvdXQodGltZXIpO1xuXHRcdFx0XHRcdHRpbWVyID0gc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG5cdFx0XHRcdFx0XHRpZiAoaW5wdXQuaXMoJzpkaXNhYmxlZCcpKSB7XG5cdFx0XHRcdFx0XHRcdHJldHVybjtcblx0XHRcdFx0XHRcdH1cblxuXHRcdFx0XHRcdFx0dHJpZ2dlckFmdGVyT3BlbiA9IHRydWU7XG5cdFx0XHRcdFx0XHRfeGRzb2Z0X2RhdGV0aW1lLnNldEN1cnJlbnRUaW1lKGdldEN1cnJlbnRWYWx1ZSgpLCB0cnVlKTtcblx0XHRcdFx0XHRcdGlmKG9wdGlvbnMubWFzaykge1xuXHRcdFx0XHRcdFx0XHRzZXRNYXNrKG9wdGlvbnMpO1xuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignb3Blbi54ZHNvZnQnKTtcblx0XHRcdFx0XHR9LCAxMDApO1xuXHRcdFx0XHR9KVxuXHRcdFx0XHQub24oJ2tleWRvd24ueGRzb2Z0JywgZnVuY3Rpb24gKGV2ZW50KSB7XG5cdFx0XHRcdFx0dmFyIGVsZW1lbnRTZWxlY3Rvcixcblx0XHRcdFx0XHRcdGtleSA9IGV2ZW50LndoaWNoO1xuXHRcdFx0XHRcdGlmIChbRU5URVJdLmluZGV4T2Yoa2V5KSAhPT0gLTEgJiYgb3B0aW9ucy5lbnRlckxpa2VUYWIpIHtcblx0XHRcdFx0XHRcdGVsZW1lbnRTZWxlY3RvciA9ICQoXCJpbnB1dDp2aXNpYmxlLHRleHRhcmVhOnZpc2libGUsYnV0dG9uOnZpc2libGUsYTp2aXNpYmxlXCIpO1xuXHRcdFx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIudHJpZ2dlcignY2xvc2UueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHRlbGVtZW50U2VsZWN0b3IuZXEoZWxlbWVudFNlbGVjdG9yLmluZGV4KHRoaXMpICsgMSkuZm9jdXMoKTtcblx0XHRcdFx0XHRcdHJldHVybiBmYWxzZTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0aWYgKFtUQUJdLmluZGV4T2Yoa2V5KSAhPT0gLTEpIHtcblx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ2Nsb3NlLnhkc29mdCcpO1xuXHRcdFx0XHRcdFx0cmV0dXJuIHRydWU7XG5cdFx0XHRcdFx0fVxuXHRcdFx0XHR9KVxuXHRcdFx0XHQub24oJ2JsdXIueGRzb2Z0JywgZnVuY3Rpb24gKCkge1xuXHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ2Nsb3NlLnhkc29mdCcpO1xuXHRcdFx0XHR9KTtcblx0XHR9O1xuXHRcdGRlc3Ryb3lEYXRlVGltZVBpY2tlciA9IGZ1bmN0aW9uIChpbnB1dCkge1xuXHRcdFx0dmFyIGRhdGV0aW1lcGlja2VyID0gaW5wdXQuZGF0YSgneGRzb2Z0X2RhdGV0aW1lcGlja2VyJyk7XG5cdFx0XHRpZiAoZGF0ZXRpbWVwaWNrZXIpIHtcblx0XHRcdFx0ZGF0ZXRpbWVwaWNrZXIuZGF0YSgneGRzb2Z0X2RhdGV0aW1lJywgbnVsbCk7XG5cdFx0XHRcdGRhdGV0aW1lcGlja2VyLnJlbW92ZSgpO1xuXHRcdFx0XHRpbnB1dFxuXHRcdFx0XHRcdC5kYXRhKCd4ZHNvZnRfZGF0ZXRpbWVwaWNrZXInLCBudWxsKVxuXHRcdFx0XHRcdC5vZmYoJy54ZHNvZnQnKTtcblx0XHRcdFx0JChvcHRpb25zLmNvbnRlbnRXaW5kb3cpLm9mZigncmVzaXplLnhkc29mdCcpO1xuXHRcdFx0XHQkKFtvcHRpb25zLmNvbnRlbnRXaW5kb3csIG9wdGlvbnMub3duZXJEb2N1bWVudC5ib2R5XSkub2ZmKCdtb3VzZWRvd24ueGRzb2Z0IHRvdWNoc3RhcnQnKTtcblx0XHRcdFx0aWYgKGlucHV0LnVubW91c2V3aGVlbCkge1xuXHRcdFx0XHRcdGlucHV0LnVubW91c2V3aGVlbCgpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fTtcblx0XHQkKG9wdGlvbnMub3duZXJEb2N1bWVudClcbiAgICAgICAgICAgIC5vZmYoJ2tleWRvd24ueGRzb2Z0Y3RybCBrZXl1cC54ZHNvZnRjdHJsJylcbiAgICAgICAgICAgIC5vZmYoJ2tleWRvd24ueGRzb2Z0Y21kIGtleXVwLnhkc29mdGNtZCcpXG5cdFx0XHQub24oJ2tleWRvd24ueGRzb2Z0Y3RybCcsIGZ1bmN0aW9uIChlKSB7XG5cdFx0XHRcdGlmIChlLmtleUNvZGUgPT09IENUUkxLRVkpIHtcblx0XHRcdFx0XHRjdHJsRG93biA9IHRydWU7XG4gICAgICAgICAgICAgICAgfVxuXHRcdFx0fSlcblx0XHRcdC5vbigna2V5dXAueGRzb2Z0Y3RybCcsIGZ1bmN0aW9uIChlKSB7XG5cdFx0XHRcdGlmIChlLmtleUNvZGUgPT09IENUUkxLRVkpIHtcblx0XHRcdFx0XHRjdHJsRG93biA9IGZhbHNlO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAub24oJ2tleWRvd24ueGRzb2Z0Y21kJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICBpZiAoZS5rZXlDb2RlID09PSBDTURLRVkpIHtcbiAgICAgICAgICAgICAgICAgICAgY21kRG93biA9IHRydWU7XG4gICAgICAgICAgICAgICAgfVxuXHRcdFx0fSlcblx0XHRcdC5vbigna2V5dXAueGRzb2Z0Y21kJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICBpZiAoZS5rZXlDb2RlID09PSBDTURLRVkpIHtcbiAgICAgICAgICAgICAgICAgICAgY21kRG93biA9IGZhbHNlO1xuICAgICAgICAgICAgICAgIH1cblx0XHRcdH0pO1xuXG5cdFx0dGhpcy5lYWNoKGZ1bmN0aW9uICgpIHtcblx0XHRcdHZhciBkYXRldGltZXBpY2tlciA9ICQodGhpcykuZGF0YSgneGRzb2Z0X2RhdGV0aW1lcGlja2VyJyksICRpbnB1dDtcblx0XHRcdGlmIChkYXRldGltZXBpY2tlcikge1xuXHRcdFx0XHRpZiAoJC50eXBlKG9wdCkgPT09ICdzdHJpbmcnKSB7XG5cdFx0XHRcdFx0c3dpdGNoIChvcHQpIHtcblx0XHRcdFx0XHRcdGNhc2UgJ3Nob3cnOlxuXHRcdFx0XHRcdFx0XHQkKHRoaXMpLnNlbGVjdCgpLmZvY3VzKCk7XG5cdFx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ29wZW4ueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRcdFx0Y2FzZSAnaGlkZSc6XG5cdFx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ2Nsb3NlLnhkc29mdCcpO1xuXHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdGNhc2UgJ3RvZ2dsZSc6XG5cdFx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLnRyaWdnZXIoJ3RvZ2dsZS54ZHNvZnQnKTtcblx0XHRcdFx0XHRcdFx0YnJlYWs7XG5cdFx0XHRcdFx0XHRjYXNlICdkZXN0cm95Jzpcblx0XHRcdFx0XHRcdFx0ZGVzdHJveURhdGVUaW1lUGlja2VyKCQodGhpcykpO1xuXHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdGNhc2UgJ3Jlc2V0Jzpcblx0XHRcdFx0XHRcdFx0dGhpcy52YWx1ZSA9IHRoaXMuZGVmYXVsdFZhbHVlO1xuXHRcdFx0XHRcdFx0XHRpZiAoIXRoaXMudmFsdWUgfHwgIWRhdGV0aW1lcGlja2VyLmRhdGEoJ3hkc29mdF9kYXRldGltZScpLmlzVmFsaWREYXRlKGRhdGVIZWxwZXIucGFyc2VEYXRlKHRoaXMudmFsdWUsIG9wdGlvbnMuZm9ybWF0KSkpIHtcblx0XHRcdFx0XHRcdFx0XHRkYXRldGltZXBpY2tlci5kYXRhKCdjaGFuZ2VkJywgZmFsc2UpO1xuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdGRhdGV0aW1lcGlja2VyLmRhdGEoJ3hkc29mdF9kYXRldGltZScpLnNldEN1cnJlbnRUaW1lKHRoaXMudmFsdWUpO1xuXHRcdFx0XHRcdFx0XHRicmVhaztcblx0XHRcdFx0XHRcdGNhc2UgJ3ZhbGlkYXRlJzpcblx0XHRcdFx0XHRcdFx0JGlucHV0ID0gZGF0ZXRpbWVwaWNrZXIuZGF0YSgnaW5wdXQnKTtcblx0XHRcdFx0XHRcdFx0JGlucHV0LnRyaWdnZXIoJ2JsdXIueGRzb2Z0Jyk7XG5cdFx0XHRcdFx0XHRcdGJyZWFrO1xuXHRcdFx0XHRcdFx0ZGVmYXVsdDpcblx0XHRcdFx0XHRcdFx0aWYgKGRhdGV0aW1lcGlja2VyW29wdF0gJiYgJC5pc0Z1bmN0aW9uKGRhdGV0aW1lcGlja2VyW29wdF0pKSB7XG5cdFx0XHRcdFx0XHRcdFx0cmVzdWx0ID0gZGF0ZXRpbWVwaWNrZXJbb3B0XShvcHQyKTtcblx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH1cblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRkYXRldGltZXBpY2tlclxuXHRcdFx0XHRcdFx0LnNldE9wdGlvbnMob3B0KTtcblx0XHRcdFx0fVxuXHRcdFx0XHRyZXR1cm4gMDtcblx0XHRcdH1cblx0XHRcdGlmICgkLnR5cGUob3B0KSAhPT0gJ3N0cmluZycpIHtcblx0XHRcdFx0aWYgKCFvcHRpb25zLmxhenlJbml0IHx8IG9wdGlvbnMub3BlbiB8fCBvcHRpb25zLmlubGluZSkge1xuXHRcdFx0XHRcdGNyZWF0ZURhdGVUaW1lUGlja2VyKCQodGhpcykpO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdGxhenlJbml0KCQodGhpcykpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0XHRyZXR1cm4gcmVzdWx0O1xuXHR9O1xuXG5cdCQuZm4uZGF0ZXRpbWVwaWNrZXIuZGVmYXVsdHMgPSBkZWZhdWx0X29wdGlvbnM7XG5cblx0ZnVuY3Rpb24gSGlnaGxpZ2h0ZWREYXRlKGRhdGUsIGRlc2MsIHN0eWxlKSB7XG5cdFx0XCJ1c2Ugc3RyaWN0XCI7XG5cdFx0dGhpcy5kYXRlID0gZGF0ZTtcblx0XHR0aGlzLmRlc2MgPSBkZXNjO1xuXHRcdHRoaXMuc3R5bGUgPSBzdHlsZTtcblx0fVxufTtcbjsoZnVuY3Rpb24gKGZhY3RvcnkpIHtcblx0aWYgKCB0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQgKSB7XG5cdFx0Ly8gQU1ELiBSZWdpc3RlciBhcyBhbiBhbm9ueW1vdXMgbW9kdWxlLlxuXHRcdGRlZmluZShbJ2pxdWVyeScsICdqcXVlcnktbW91c2V3aGVlbCddLCBmYWN0b3J5KTtcblx0fSBlbHNlIGlmICh0eXBlb2YgZXhwb3J0cyA9PT0gJ29iamVjdCcpIHtcblx0XHQvLyBOb2RlL0NvbW1vbkpTIHN0eWxlIGZvciBCcm93c2VyaWZ5XG5cdFx0bW9kdWxlLmV4cG9ydHMgPSBmYWN0b3J5KHJlcXVpcmUoJ2pxdWVyeScpKTs7XG5cdH0gZWxzZSB7XG5cdFx0Ly8gQnJvd3NlciBnbG9iYWxzXG5cdFx0ZmFjdG9yeShqUXVlcnkpO1xuXHR9XG59KGRhdGV0aW1lcGlja2VyRmFjdG9yeSkpO1xuXG5cbi8qIVxuICogalF1ZXJ5IE1vdXNld2hlZWwgMy4xLjEzXG4gKlxuICogQ29weXJpZ2h0IGpRdWVyeSBGb3VuZGF0aW9uIGFuZCBvdGhlciBjb250cmlidXRvcnNcbiAqIFJlbGVhc2VkIHVuZGVyIHRoZSBNSVQgbGljZW5zZVxuICogaHR0cDovL2pxdWVyeS5vcmcvbGljZW5zZVxuICovXG5cbihmdW5jdGlvbiAoZmFjdG9yeSkge1xuICAgIGlmICggdHlwZW9mIGRlZmluZSA9PT0gJ2Z1bmN0aW9uJyAmJiBkZWZpbmUuYW1kICkge1xuICAgICAgICAvLyBBTUQuIFJlZ2lzdGVyIGFzIGFuIGFub255bW91cyBtb2R1bGUuXG4gICAgICAgIGRlZmluZShbJ2pxdWVyeSddLCBmYWN0b3J5KTtcbiAgICB9IGVsc2UgaWYgKHR5cGVvZiBleHBvcnRzID09PSAnb2JqZWN0Jykge1xuICAgICAgICAvLyBOb2RlL0NvbW1vbkpTIHN0eWxlIGZvciBCcm93c2VyaWZ5XG4gICAgICAgIG1vZHVsZS5leHBvcnRzID0gZmFjdG9yeTtcbiAgICB9IGVsc2Uge1xuICAgICAgICAvLyBCcm93c2VyIGdsb2JhbHNcbiAgICAgICAgZmFjdG9yeShqUXVlcnkpO1xuICAgIH1cbn0oZnVuY3Rpb24gKCQpIHtcblxuICAgIHZhciB0b0ZpeCAgPSBbJ3doZWVsJywgJ21vdXNld2hlZWwnLCAnRE9NTW91c2VTY3JvbGwnLCAnTW96TW91c2VQaXhlbFNjcm9sbCddLFxuICAgICAgICB0b0JpbmQgPSAoICdvbndoZWVsJyBpbiBkb2N1bWVudCB8fCBkb2N1bWVudC5kb2N1bWVudE1vZGUgPj0gOSApID9cbiAgICAgICAgICAgICAgICAgICAgWyd3aGVlbCddIDogWydtb3VzZXdoZWVsJywgJ0RvbU1vdXNlU2Nyb2xsJywgJ01vek1vdXNlUGl4ZWxTY3JvbGwnXSxcbiAgICAgICAgc2xpY2UgID0gQXJyYXkucHJvdG90eXBlLnNsaWNlLFxuICAgICAgICBudWxsTG93ZXN0RGVsdGFUaW1lb3V0LCBsb3dlc3REZWx0YTtcblxuICAgIGlmICggJC5ldmVudC5maXhIb29rcyApIHtcbiAgICAgICAgZm9yICggdmFyIGkgPSB0b0ZpeC5sZW5ndGg7IGk7ICkge1xuICAgICAgICAgICAgJC5ldmVudC5maXhIb29rc1sgdG9GaXhbLS1pXSBdID0gJC5ldmVudC5tb3VzZUhvb2tzO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgdmFyIHNwZWNpYWwgPSAkLmV2ZW50LnNwZWNpYWwubW91c2V3aGVlbCA9IHtcbiAgICAgICAgdmVyc2lvbjogJzMuMS4xMicsXG5cbiAgICAgICAgc2V0dXA6IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgaWYgKCB0aGlzLmFkZEV2ZW50TGlzdGVuZXIgKSB7XG4gICAgICAgICAgICAgICAgZm9yICggdmFyIGkgPSB0b0JpbmQubGVuZ3RoOyBpOyApIHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5hZGRFdmVudExpc3RlbmVyKCB0b0JpbmRbLS1pXSwgaGFuZGxlciwgZmFsc2UgKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHRoaXMub25tb3VzZXdoZWVsID0gaGFuZGxlcjtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIC8vIFN0b3JlIHRoZSBsaW5lIGhlaWdodCBhbmQgcGFnZSBoZWlnaHQgZm9yIHRoaXMgcGFydGljdWxhciBlbGVtZW50XG4gICAgICAgICAgICAkLmRhdGEodGhpcywgJ21vdXNld2hlZWwtbGluZS1oZWlnaHQnLCBzcGVjaWFsLmdldExpbmVIZWlnaHQodGhpcykpO1xuICAgICAgICAgICAgJC5kYXRhKHRoaXMsICdtb3VzZXdoZWVsLXBhZ2UtaGVpZ2h0Jywgc3BlY2lhbC5nZXRQYWdlSGVpZ2h0KHRoaXMpKTtcbiAgICAgICAgfSxcblxuICAgICAgICB0ZWFyZG93bjogZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBpZiAoIHRoaXMucmVtb3ZlRXZlbnRMaXN0ZW5lciApIHtcbiAgICAgICAgICAgICAgICBmb3IgKCB2YXIgaSA9IHRvQmluZC5sZW5ndGg7IGk7ICkge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnJlbW92ZUV2ZW50TGlzdGVuZXIoIHRvQmluZFstLWldLCBoYW5kbGVyLCBmYWxzZSApO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdGhpcy5vbm1vdXNld2hlZWwgPSBudWxsO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgLy8gQ2xlYW4gdXAgdGhlIGRhdGEgd2UgYWRkZWQgdG8gdGhlIGVsZW1lbnRcbiAgICAgICAgICAgICQucmVtb3ZlRGF0YSh0aGlzLCAnbW91c2V3aGVlbC1saW5lLWhlaWdodCcpO1xuICAgICAgICAgICAgJC5yZW1vdmVEYXRhKHRoaXMsICdtb3VzZXdoZWVsLXBhZ2UtaGVpZ2h0Jyk7XG4gICAgICAgIH0sXG5cbiAgICAgICAgZ2V0TGluZUhlaWdodDogZnVuY3Rpb24oZWxlbSkge1xuICAgICAgICAgICAgdmFyICRlbGVtID0gJChlbGVtKSxcbiAgICAgICAgICAgICAgICAkcGFyZW50ID0gJGVsZW1bJ29mZnNldFBhcmVudCcgaW4gJC5mbiA/ICdvZmZzZXRQYXJlbnQnIDogJ3BhcmVudCddKCk7XG4gICAgICAgICAgICBpZiAoISRwYXJlbnQubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgJHBhcmVudCA9ICQoJ2JvZHknKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHJldHVybiBwYXJzZUludCgkcGFyZW50LmNzcygnZm9udFNpemUnKSwgMTApIHx8IHBhcnNlSW50KCRlbGVtLmNzcygnZm9udFNpemUnKSwgMTApIHx8IDE2O1xuICAgICAgICB9LFxuXG4gICAgICAgIGdldFBhZ2VIZWlnaHQ6IGZ1bmN0aW9uKGVsZW0pIHtcbiAgICAgICAgICAgIHJldHVybiAkKGVsZW0pLmhlaWdodCgpO1xuICAgICAgICB9LFxuXG4gICAgICAgIHNldHRpbmdzOiB7XG4gICAgICAgICAgICBhZGp1c3RPbGREZWx0YXM6IHRydWUsIC8vIHNlZSBzaG91bGRBZGp1c3RPbGREZWx0YXMoKSBiZWxvd1xuICAgICAgICAgICAgbm9ybWFsaXplT2Zmc2V0OiB0cnVlICAvLyBjYWxscyBnZXRCb3VuZGluZ0NsaWVudFJlY3QgZm9yIGVhY2ggZXZlbnRcbiAgICAgICAgfVxuICAgIH07XG5cbiAgICAkLmZuLmV4dGVuZCh7XG4gICAgICAgIG1vdXNld2hlZWw6IGZ1bmN0aW9uKGZuKSB7XG4gICAgICAgICAgICByZXR1cm4gZm4gPyB0aGlzLmJpbmQoJ21vdXNld2hlZWwnLCBmbikgOiB0aGlzLnRyaWdnZXIoJ21vdXNld2hlZWwnKTtcbiAgICAgICAgfSxcblxuICAgICAgICB1bm1vdXNld2hlZWw6IGZ1bmN0aW9uKGZuKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy51bmJpbmQoJ21vdXNld2hlZWwnLCBmbik7XG4gICAgICAgIH1cbiAgICB9KTtcblxuXG4gICAgZnVuY3Rpb24gaGFuZGxlcihldmVudCkge1xuICAgICAgICB2YXIgb3JnRXZlbnQgICA9IGV2ZW50IHx8IHdpbmRvdy5ldmVudCxcbiAgICAgICAgICAgIGFyZ3MgICAgICAgPSBzbGljZS5jYWxsKGFyZ3VtZW50cywgMSksXG4gICAgICAgICAgICBkZWx0YSAgICAgID0gMCxcbiAgICAgICAgICAgIGRlbHRhWCAgICAgPSAwLFxuICAgICAgICAgICAgZGVsdGFZICAgICA9IDAsXG4gICAgICAgICAgICBhYnNEZWx0YSAgID0gMCxcbiAgICAgICAgICAgIG9mZnNldFggICAgPSAwLFxuICAgICAgICAgICAgb2Zmc2V0WSAgICA9IDA7XG4gICAgICAgIGV2ZW50ID0gJC5ldmVudC5maXgob3JnRXZlbnQpO1xuICAgICAgICBldmVudC50eXBlID0gJ21vdXNld2hlZWwnO1xuXG4gICAgICAgIC8vIE9sZCBzY2hvb2wgc2Nyb2xsd2hlZWwgZGVsdGFcbiAgICAgICAgaWYgKCAnZGV0YWlsJyAgICAgIGluIG9yZ0V2ZW50ICkgeyBkZWx0YVkgPSBvcmdFdmVudC5kZXRhaWwgKiAtMTsgICAgICB9XG4gICAgICAgIGlmICggJ3doZWVsRGVsdGEnICBpbiBvcmdFdmVudCApIHsgZGVsdGFZID0gb3JnRXZlbnQud2hlZWxEZWx0YTsgICAgICAgfVxuICAgICAgICBpZiAoICd3aGVlbERlbHRhWScgaW4gb3JnRXZlbnQgKSB7IGRlbHRhWSA9IG9yZ0V2ZW50LndoZWVsRGVsdGFZOyAgICAgIH1cbiAgICAgICAgaWYgKCAnd2hlZWxEZWx0YVgnIGluIG9yZ0V2ZW50ICkgeyBkZWx0YVggPSBvcmdFdmVudC53aGVlbERlbHRhWCAqIC0xOyB9XG5cbiAgICAgICAgLy8gRmlyZWZveCA8IDE3IGhvcml6b250YWwgc2Nyb2xsaW5nIHJlbGF0ZWQgdG8gRE9NTW91c2VTY3JvbGwgZXZlbnRcbiAgICAgICAgaWYgKCAnYXhpcycgaW4gb3JnRXZlbnQgJiYgb3JnRXZlbnQuYXhpcyA9PT0gb3JnRXZlbnQuSE9SSVpPTlRBTF9BWElTICkge1xuICAgICAgICAgICAgZGVsdGFYID0gZGVsdGFZICogLTE7XG4gICAgICAgICAgICBkZWx0YVkgPSAwO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gU2V0IGRlbHRhIHRvIGJlIGRlbHRhWSBvciBkZWx0YVggaWYgZGVsdGFZIGlzIDAgZm9yIGJhY2t3YXJkcyBjb21wYXRhYmlsaXRpeVxuICAgICAgICBkZWx0YSA9IGRlbHRhWSA9PT0gMCA/IGRlbHRhWCA6IGRlbHRhWTtcblxuICAgICAgICAvLyBOZXcgc2Nob29sIHdoZWVsIGRlbHRhICh3aGVlbCBldmVudClcbiAgICAgICAgaWYgKCAnZGVsdGFZJyBpbiBvcmdFdmVudCApIHtcbiAgICAgICAgICAgIGRlbHRhWSA9IG9yZ0V2ZW50LmRlbHRhWSAqIC0xO1xuICAgICAgICAgICAgZGVsdGEgID0gZGVsdGFZO1xuICAgICAgICB9XG4gICAgICAgIGlmICggJ2RlbHRhWCcgaW4gb3JnRXZlbnQgKSB7XG4gICAgICAgICAgICBkZWx0YVggPSBvcmdFdmVudC5kZWx0YVg7XG4gICAgICAgICAgICBpZiAoIGRlbHRhWSA9PT0gMCApIHsgZGVsdGEgID0gZGVsdGFYICogLTE7IH1cbiAgICAgICAgfVxuXG4gICAgICAgIC8vIE5vIGNoYW5nZSBhY3R1YWxseSBoYXBwZW5lZCwgbm8gcmVhc29uIHRvIGdvIGFueSBmdXJ0aGVyXG4gICAgICAgIGlmICggZGVsdGFZID09PSAwICYmIGRlbHRhWCA9PT0gMCApIHsgcmV0dXJuOyB9XG5cbiAgICAgICAgLy8gTmVlZCB0byBjb252ZXJ0IGxpbmVzIGFuZCBwYWdlcyB0byBwaXhlbHMgaWYgd2UgYXJlbid0IGFscmVhZHkgaW4gcGl4ZWxzXG4gICAgICAgIC8vIFRoZXJlIGFyZSB0aHJlZSBkZWx0YSBtb2RlczpcbiAgICAgICAgLy8gICAqIGRlbHRhTW9kZSAwIGlzIGJ5IHBpeGVscywgbm90aGluZyB0byBkb1xuICAgICAgICAvLyAgICogZGVsdGFNb2RlIDEgaXMgYnkgbGluZXNcbiAgICAgICAgLy8gICAqIGRlbHRhTW9kZSAyIGlzIGJ5IHBhZ2VzXG4gICAgICAgIGlmICggb3JnRXZlbnQuZGVsdGFNb2RlID09PSAxICkge1xuICAgICAgICAgICAgdmFyIGxpbmVIZWlnaHQgPSAkLmRhdGEodGhpcywgJ21vdXNld2hlZWwtbGluZS1oZWlnaHQnKTtcbiAgICAgICAgICAgIGRlbHRhICAqPSBsaW5lSGVpZ2h0O1xuICAgICAgICAgICAgZGVsdGFZICo9IGxpbmVIZWlnaHQ7XG4gICAgICAgICAgICBkZWx0YVggKj0gbGluZUhlaWdodDtcbiAgICAgICAgfSBlbHNlIGlmICggb3JnRXZlbnQuZGVsdGFNb2RlID09PSAyICkge1xuICAgICAgICAgICAgdmFyIHBhZ2VIZWlnaHQgPSAkLmRhdGEodGhpcywgJ21vdXNld2hlZWwtcGFnZS1oZWlnaHQnKTtcbiAgICAgICAgICAgIGRlbHRhICAqPSBwYWdlSGVpZ2h0O1xuICAgICAgICAgICAgZGVsdGFZICo9IHBhZ2VIZWlnaHQ7XG4gICAgICAgICAgICBkZWx0YVggKj0gcGFnZUhlaWdodDtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIFN0b3JlIGxvd2VzdCBhYnNvbHV0ZSBkZWx0YSB0byBub3JtYWxpemUgdGhlIGRlbHRhIHZhbHVlc1xuICAgICAgICBhYnNEZWx0YSA9IE1hdGgubWF4KCBNYXRoLmFicyhkZWx0YVkpLCBNYXRoLmFicyhkZWx0YVgpICk7XG5cbiAgICAgICAgaWYgKCAhbG93ZXN0RGVsdGEgfHwgYWJzRGVsdGEgPCBsb3dlc3REZWx0YSApIHtcbiAgICAgICAgICAgIGxvd2VzdERlbHRhID0gYWJzRGVsdGE7XG5cbiAgICAgICAgICAgIC8vIEFkanVzdCBvbGRlciBkZWx0YXMgaWYgbmVjZXNzYXJ5XG4gICAgICAgICAgICBpZiAoIHNob3VsZEFkanVzdE9sZERlbHRhcyhvcmdFdmVudCwgYWJzRGVsdGEpICkge1xuICAgICAgICAgICAgICAgIGxvd2VzdERlbHRhIC89IDQwO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgLy8gQWRqdXN0IG9sZGVyIGRlbHRhcyBpZiBuZWNlc3NhcnlcbiAgICAgICAgaWYgKCBzaG91bGRBZGp1c3RPbGREZWx0YXMob3JnRXZlbnQsIGFic0RlbHRhKSApIHtcbiAgICAgICAgICAgIC8vIERpdmlkZSBhbGwgdGhlIHRoaW5ncyBieSA0MCFcbiAgICAgICAgICAgIGRlbHRhICAvPSA0MDtcbiAgICAgICAgICAgIGRlbHRhWCAvPSA0MDtcbiAgICAgICAgICAgIGRlbHRhWSAvPSA0MDtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIEdldCBhIHdob2xlLCBub3JtYWxpemVkIHZhbHVlIGZvciB0aGUgZGVsdGFzXG4gICAgICAgIGRlbHRhICA9IE1hdGhbIGRlbHRhICA+PSAxID8gJ2Zsb29yJyA6ICdjZWlsJyBdKGRlbHRhICAvIGxvd2VzdERlbHRhKTtcbiAgICAgICAgZGVsdGFYID0gTWF0aFsgZGVsdGFYID49IDEgPyAnZmxvb3InIDogJ2NlaWwnIF0oZGVsdGFYIC8gbG93ZXN0RGVsdGEpO1xuICAgICAgICBkZWx0YVkgPSBNYXRoWyBkZWx0YVkgPj0gMSA/ICdmbG9vcicgOiAnY2VpbCcgXShkZWx0YVkgLyBsb3dlc3REZWx0YSk7XG5cbiAgICAgICAgLy8gTm9ybWFsaXNlIG9mZnNldFggYW5kIG9mZnNldFkgcHJvcGVydGllc1xuICAgICAgICBpZiAoIHNwZWNpYWwuc2V0dGluZ3Mubm9ybWFsaXplT2Zmc2V0ICYmIHRoaXMuZ2V0Qm91bmRpbmdDbGllbnRSZWN0ICkge1xuICAgICAgICAgICAgdmFyIGJvdW5kaW5nUmVjdCA9IHRoaXMuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XG4gICAgICAgICAgICBvZmZzZXRYID0gZXZlbnQuY2xpZW50WCAtIGJvdW5kaW5nUmVjdC5sZWZ0O1xuICAgICAgICAgICAgb2Zmc2V0WSA9IGV2ZW50LmNsaWVudFkgLSBib3VuZGluZ1JlY3QudG9wO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gQWRkIGluZm9ybWF0aW9uIHRvIHRoZSBldmVudCBvYmplY3RcbiAgICAgICAgZXZlbnQuZGVsdGFYID0gZGVsdGFYO1xuICAgICAgICBldmVudC5kZWx0YVkgPSBkZWx0YVk7XG4gICAgICAgIGV2ZW50LmRlbHRhRmFjdG9yID0gbG93ZXN0RGVsdGE7XG4gICAgICAgIGV2ZW50Lm9mZnNldFggPSBvZmZzZXRYO1xuICAgICAgICBldmVudC5vZmZzZXRZID0gb2Zmc2V0WTtcbiAgICAgICAgLy8gR28gYWhlYWQgYW5kIHNldCBkZWx0YU1vZGUgdG8gMCBzaW5jZSB3ZSBjb252ZXJ0ZWQgdG8gcGl4ZWxzXG4gICAgICAgIC8vIEFsdGhvdWdoIHRoaXMgaXMgYSBsaXR0bGUgb2RkIHNpbmNlIHdlIG92ZXJ3cml0ZSB0aGUgZGVsdGFYL1lcbiAgICAgICAgLy8gcHJvcGVydGllcyB3aXRoIG5vcm1hbGl6ZWQgZGVsdGFzLlxuICAgICAgICBldmVudC5kZWx0YU1vZGUgPSAwO1xuXG4gICAgICAgIC8vIEFkZCBldmVudCBhbmQgZGVsdGEgdG8gdGhlIGZyb250IG9mIHRoZSBhcmd1bWVudHNcbiAgICAgICAgYXJncy51bnNoaWZ0KGV2ZW50LCBkZWx0YSwgZGVsdGFYLCBkZWx0YVkpO1xuXG4gICAgICAgIC8vIENsZWFyb3V0IGxvd2VzdERlbHRhIGFmdGVyIHNvbWV0aW1lIHRvIGJldHRlclxuICAgICAgICAvLyBoYW5kbGUgbXVsdGlwbGUgZGV2aWNlIHR5cGVzIHRoYXQgZ2l2ZSBkaWZmZXJlbnRcbiAgICAgICAgLy8gYSBkaWZmZXJlbnQgbG93ZXN0RGVsdGFcbiAgICAgICAgLy8gRXg6IHRyYWNrcGFkID0gMyBhbmQgbW91c2Ugd2hlZWwgPSAxMjBcbiAgICAgICAgaWYgKG51bGxMb3dlc3REZWx0YVRpbWVvdXQpIHsgY2xlYXJUaW1lb3V0KG51bGxMb3dlc3REZWx0YVRpbWVvdXQpOyB9XG4gICAgICAgIG51bGxMb3dlc3REZWx0YVRpbWVvdXQgPSBzZXRUaW1lb3V0KG51bGxMb3dlc3REZWx0YSwgMjAwKTtcblxuICAgICAgICByZXR1cm4gKCQuZXZlbnQuZGlzcGF0Y2ggfHwgJC5ldmVudC5oYW5kbGUpLmFwcGx5KHRoaXMsIGFyZ3MpO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIG51bGxMb3dlc3REZWx0YSgpIHtcbiAgICAgICAgbG93ZXN0RGVsdGEgPSBudWxsO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIHNob3VsZEFkanVzdE9sZERlbHRhcyhvcmdFdmVudCwgYWJzRGVsdGEpIHtcbiAgICAgICAgLy8gSWYgdGhpcyBpcyBhbiBvbGRlciBldmVudCBhbmQgdGhlIGRlbHRhIGlzIGRpdmlzYWJsZSBieSAxMjAsXG4gICAgICAgIC8vIHRoZW4gd2UgYXJlIGFzc3VtaW5nIHRoYXQgdGhlIGJyb3dzZXIgaXMgdHJlYXRpbmcgdGhpcyBhcyBhblxuICAgICAgICAvLyBvbGRlciBtb3VzZSB3aGVlbCBldmVudCBhbmQgdGhhdCB3ZSBzaG91bGQgZGl2aWRlIHRoZSBkZWx0YXNcbiAgICAgICAgLy8gYnkgNDAgdG8gdHJ5IGFuZCBnZXQgYSBtb3JlIHVzYWJsZSBkZWx0YUZhY3Rvci5cbiAgICAgICAgLy8gU2lkZSBub3RlLCB0aGlzIGFjdHVhbGx5IGltcGFjdHMgdGhlIHJlcG9ydGVkIHNjcm9sbCBkaXN0YW5jZVxuICAgICAgICAvLyBpbiBvbGRlciBicm93c2VycyBhbmQgY2FuIGNhdXNlIHNjcm9sbGluZyB0byBiZSBzbG93ZXIgdGhhbiBuYXRpdmUuXG4gICAgICAgIC8vIFR1cm4gdGhpcyBvZmYgYnkgc2V0dGluZyAkLmV2ZW50LnNwZWNpYWwubW91c2V3aGVlbC5zZXR0aW5ncy5hZGp1c3RPbGREZWx0YXMgdG8gZmFsc2UuXG4gICAgICAgIHJldHVybiBzcGVjaWFsLnNldHRpbmdzLmFkanVzdE9sZERlbHRhcyAmJiBvcmdFdmVudC50eXBlID09PSAnbW91c2V3aGVlbCcgJiYgYWJzRGVsdGEgJSAxMjAgPT09IDA7XG4gICAgfVxuXG59KSk7XG4iLCIvKiFcbiAqIGpRdWVyeSBNb3VzZXdoZWVsIDMuMS4xM1xuICpcbiAqIENvcHlyaWdodCBqUXVlcnkgRm91bmRhdGlvbiBhbmQgb3RoZXIgY29udHJpYnV0b3JzXG4gKiBSZWxlYXNlZCB1bmRlciB0aGUgTUlUIGxpY2Vuc2VcbiAqIGh0dHA6Ly9qcXVlcnkub3JnL2xpY2Vuc2VcbiAqL1xuXG4oZnVuY3Rpb24gKGZhY3RvcnkpIHtcbiAgICBpZiAoIHR5cGVvZiBkZWZpbmUgPT09ICdmdW5jdGlvbicgJiYgZGVmaW5lLmFtZCApIHtcbiAgICAgICAgLy8gQU1ELiBSZWdpc3RlciBhcyBhbiBhbm9ueW1vdXMgbW9kdWxlLlxuICAgICAgICBkZWZpbmUoWydqcXVlcnknXSwgZmFjdG9yeSk7XG4gICAgfSBlbHNlIGlmICh0eXBlb2YgZXhwb3J0cyA9PT0gJ29iamVjdCcpIHtcbiAgICAgICAgLy8gTm9kZS9Db21tb25KUyBzdHlsZSBmb3IgQnJvd3NlcmlmeVxuICAgICAgICBtb2R1bGUuZXhwb3J0cyA9IGZhY3Rvcnk7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgLy8gQnJvd3NlciBnbG9iYWxzXG4gICAgICAgIGZhY3RvcnkoalF1ZXJ5KTtcbiAgICB9XG59KGZ1bmN0aW9uICgkKSB7XG5cbiAgICB2YXIgdG9GaXggID0gWyd3aGVlbCcsICdtb3VzZXdoZWVsJywgJ0RPTU1vdXNlU2Nyb2xsJywgJ01vek1vdXNlUGl4ZWxTY3JvbGwnXSxcbiAgICAgICAgdG9CaW5kID0gKCAnb253aGVlbCcgaW4gZG9jdW1lbnQgfHwgZG9jdW1lbnQuZG9jdW1lbnRNb2RlID49IDkgKSA/XG4gICAgICAgICAgICAgICAgICAgIFsnd2hlZWwnXSA6IFsnbW91c2V3aGVlbCcsICdEb21Nb3VzZVNjcm9sbCcsICdNb3pNb3VzZVBpeGVsU2Nyb2xsJ10sXG4gICAgICAgIHNsaWNlICA9IEFycmF5LnByb3RvdHlwZS5zbGljZSxcbiAgICAgICAgbnVsbExvd2VzdERlbHRhVGltZW91dCwgbG93ZXN0RGVsdGE7XG5cbiAgICBpZiAoICQuZXZlbnQuZml4SG9va3MgKSB7XG4gICAgICAgIGZvciAoIHZhciBpID0gdG9GaXgubGVuZ3RoOyBpOyApIHtcbiAgICAgICAgICAgICQuZXZlbnQuZml4SG9va3NbIHRvRml4Wy0taV0gXSA9ICQuZXZlbnQubW91c2VIb29rcztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHZhciBzcGVjaWFsID0gJC5ldmVudC5zcGVjaWFsLm1vdXNld2hlZWwgPSB7XG4gICAgICAgIHZlcnNpb246ICczLjEuMTInLFxuXG4gICAgICAgIHNldHVwOiBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIGlmICggdGhpcy5hZGRFdmVudExpc3RlbmVyICkge1xuICAgICAgICAgICAgICAgIGZvciAoIHZhciBpID0gdG9CaW5kLmxlbmd0aDsgaTsgKSB7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuYWRkRXZlbnRMaXN0ZW5lciggdG9CaW5kWy0taV0sIGhhbmRsZXIsIGZhbHNlICk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICB0aGlzLm9ubW91c2V3aGVlbCA9IGhhbmRsZXI7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICAvLyBTdG9yZSB0aGUgbGluZSBoZWlnaHQgYW5kIHBhZ2UgaGVpZ2h0IGZvciB0aGlzIHBhcnRpY3VsYXIgZWxlbWVudFxuICAgICAgICAgICAgJC5kYXRhKHRoaXMsICdtb3VzZXdoZWVsLWxpbmUtaGVpZ2h0Jywgc3BlY2lhbC5nZXRMaW5lSGVpZ2h0KHRoaXMpKTtcbiAgICAgICAgICAgICQuZGF0YSh0aGlzLCAnbW91c2V3aGVlbC1wYWdlLWhlaWdodCcsIHNwZWNpYWwuZ2V0UGFnZUhlaWdodCh0aGlzKSk7XG4gICAgICAgIH0sXG5cbiAgICAgICAgdGVhcmRvd246IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgaWYgKCB0aGlzLnJlbW92ZUV2ZW50TGlzdGVuZXIgKSB7XG4gICAgICAgICAgICAgICAgZm9yICggdmFyIGkgPSB0b0JpbmQubGVuZ3RoOyBpOyApIHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5yZW1vdmVFdmVudExpc3RlbmVyKCB0b0JpbmRbLS1pXSwgaGFuZGxlciwgZmFsc2UgKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHRoaXMub25tb3VzZXdoZWVsID0gbnVsbDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIC8vIENsZWFuIHVwIHRoZSBkYXRhIHdlIGFkZGVkIHRvIHRoZSBlbGVtZW50XG4gICAgICAgICAgICAkLnJlbW92ZURhdGEodGhpcywgJ21vdXNld2hlZWwtbGluZS1oZWlnaHQnKTtcbiAgICAgICAgICAgICQucmVtb3ZlRGF0YSh0aGlzLCAnbW91c2V3aGVlbC1wYWdlLWhlaWdodCcpO1xuICAgICAgICB9LFxuXG4gICAgICAgIGdldExpbmVIZWlnaHQ6IGZ1bmN0aW9uKGVsZW0pIHtcbiAgICAgICAgICAgIHZhciAkZWxlbSA9ICQoZWxlbSksXG4gICAgICAgICAgICAgICAgJHBhcmVudCA9ICRlbGVtWydvZmZzZXRQYXJlbnQnIGluICQuZm4gPyAnb2Zmc2V0UGFyZW50JyA6ICdwYXJlbnQnXSgpO1xuICAgICAgICAgICAgaWYgKCEkcGFyZW50Lmxlbmd0aCkge1xuICAgICAgICAgICAgICAgICRwYXJlbnQgPSAkKCdib2R5Jyk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICByZXR1cm4gcGFyc2VJbnQoJHBhcmVudC5jc3MoJ2ZvbnRTaXplJyksIDEwKSB8fCBwYXJzZUludCgkZWxlbS5jc3MoJ2ZvbnRTaXplJyksIDEwKSB8fCAxNjtcbiAgICAgICAgfSxcblxuICAgICAgICBnZXRQYWdlSGVpZ2h0OiBmdW5jdGlvbihlbGVtKSB7XG4gICAgICAgICAgICByZXR1cm4gJChlbGVtKS5oZWlnaHQoKTtcbiAgICAgICAgfSxcblxuICAgICAgICBzZXR0aW5nczoge1xuICAgICAgICAgICAgYWRqdXN0T2xkRGVsdGFzOiB0cnVlLCAvLyBzZWUgc2hvdWxkQWRqdXN0T2xkRGVsdGFzKCkgYmVsb3dcbiAgICAgICAgICAgIG5vcm1hbGl6ZU9mZnNldDogdHJ1ZSAgLy8gY2FsbHMgZ2V0Qm91bmRpbmdDbGllbnRSZWN0IGZvciBlYWNoIGV2ZW50XG4gICAgICAgIH1cbiAgICB9O1xuXG4gICAgJC5mbi5leHRlbmQoe1xuICAgICAgICBtb3VzZXdoZWVsOiBmdW5jdGlvbihmbikge1xuICAgICAgICAgICAgcmV0dXJuIGZuID8gdGhpcy5iaW5kKCdtb3VzZXdoZWVsJywgZm4pIDogdGhpcy50cmlnZ2VyKCdtb3VzZXdoZWVsJyk7XG4gICAgICAgIH0sXG5cbiAgICAgICAgdW5tb3VzZXdoZWVsOiBmdW5jdGlvbihmbikge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMudW5iaW5kKCdtb3VzZXdoZWVsJywgZm4pO1xuICAgICAgICB9XG4gICAgfSk7XG5cblxuICAgIGZ1bmN0aW9uIGhhbmRsZXIoZXZlbnQpIHtcbiAgICAgICAgdmFyIG9yZ0V2ZW50ICAgPSBldmVudCB8fCB3aW5kb3cuZXZlbnQsXG4gICAgICAgICAgICBhcmdzICAgICAgID0gc2xpY2UuY2FsbChhcmd1bWVudHMsIDEpLFxuICAgICAgICAgICAgZGVsdGEgICAgICA9IDAsXG4gICAgICAgICAgICBkZWx0YVggICAgID0gMCxcbiAgICAgICAgICAgIGRlbHRhWSAgICAgPSAwLFxuICAgICAgICAgICAgYWJzRGVsdGEgICA9IDAsXG4gICAgICAgICAgICBvZmZzZXRYICAgID0gMCxcbiAgICAgICAgICAgIG9mZnNldFkgICAgPSAwO1xuICAgICAgICBldmVudCA9ICQuZXZlbnQuZml4KG9yZ0V2ZW50KTtcbiAgICAgICAgZXZlbnQudHlwZSA9ICdtb3VzZXdoZWVsJztcblxuICAgICAgICAvLyBPbGQgc2Nob29sIHNjcm9sbHdoZWVsIGRlbHRhXG4gICAgICAgIGlmICggJ2RldGFpbCcgICAgICBpbiBvcmdFdmVudCApIHsgZGVsdGFZID0gb3JnRXZlbnQuZGV0YWlsICogLTE7ICAgICAgfVxuICAgICAgICBpZiAoICd3aGVlbERlbHRhJyAgaW4gb3JnRXZlbnQgKSB7IGRlbHRhWSA9IG9yZ0V2ZW50LndoZWVsRGVsdGE7ICAgICAgIH1cbiAgICAgICAgaWYgKCAnd2hlZWxEZWx0YVknIGluIG9yZ0V2ZW50ICkgeyBkZWx0YVkgPSBvcmdFdmVudC53aGVlbERlbHRhWTsgICAgICB9XG4gICAgICAgIGlmICggJ3doZWVsRGVsdGFYJyBpbiBvcmdFdmVudCApIHsgZGVsdGFYID0gb3JnRXZlbnQud2hlZWxEZWx0YVggKiAtMTsgfVxuXG4gICAgICAgIC8vIEZpcmVmb3ggPCAxNyBob3Jpem9udGFsIHNjcm9sbGluZyByZWxhdGVkIHRvIERPTU1vdXNlU2Nyb2xsIGV2ZW50XG4gICAgICAgIGlmICggJ2F4aXMnIGluIG9yZ0V2ZW50ICYmIG9yZ0V2ZW50LmF4aXMgPT09IG9yZ0V2ZW50LkhPUklaT05UQUxfQVhJUyApIHtcbiAgICAgICAgICAgIGRlbHRhWCA9IGRlbHRhWSAqIC0xO1xuICAgICAgICAgICAgZGVsdGFZID0gMDtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIFNldCBkZWx0YSB0byBiZSBkZWx0YVkgb3IgZGVsdGFYIGlmIGRlbHRhWSBpcyAwIGZvciBiYWNrd2FyZHMgY29tcGF0YWJpbGl0aXlcbiAgICAgICAgZGVsdGEgPSBkZWx0YVkgPT09IDAgPyBkZWx0YVggOiBkZWx0YVk7XG5cbiAgICAgICAgLy8gTmV3IHNjaG9vbCB3aGVlbCBkZWx0YSAod2hlZWwgZXZlbnQpXG4gICAgICAgIGlmICggJ2RlbHRhWScgaW4gb3JnRXZlbnQgKSB7XG4gICAgICAgICAgICBkZWx0YVkgPSBvcmdFdmVudC5kZWx0YVkgKiAtMTtcbiAgICAgICAgICAgIGRlbHRhICA9IGRlbHRhWTtcbiAgICAgICAgfVxuICAgICAgICBpZiAoICdkZWx0YVgnIGluIG9yZ0V2ZW50ICkge1xuICAgICAgICAgICAgZGVsdGFYID0gb3JnRXZlbnQuZGVsdGFYO1xuICAgICAgICAgICAgaWYgKCBkZWx0YVkgPT09IDAgKSB7IGRlbHRhICA9IGRlbHRhWCAqIC0xOyB9XG4gICAgICAgIH1cblxuICAgICAgICAvLyBObyBjaGFuZ2UgYWN0dWFsbHkgaGFwcGVuZWQsIG5vIHJlYXNvbiB0byBnbyBhbnkgZnVydGhlclxuICAgICAgICBpZiAoIGRlbHRhWSA9PT0gMCAmJiBkZWx0YVggPT09IDAgKSB7IHJldHVybjsgfVxuXG4gICAgICAgIC8vIE5lZWQgdG8gY29udmVydCBsaW5lcyBhbmQgcGFnZXMgdG8gcGl4ZWxzIGlmIHdlIGFyZW4ndCBhbHJlYWR5IGluIHBpeGVsc1xuICAgICAgICAvLyBUaGVyZSBhcmUgdGhyZWUgZGVsdGEgbW9kZXM6XG4gICAgICAgIC8vICAgKiBkZWx0YU1vZGUgMCBpcyBieSBwaXhlbHMsIG5vdGhpbmcgdG8gZG9cbiAgICAgICAgLy8gICAqIGRlbHRhTW9kZSAxIGlzIGJ5IGxpbmVzXG4gICAgICAgIC8vICAgKiBkZWx0YU1vZGUgMiBpcyBieSBwYWdlc1xuICAgICAgICBpZiAoIG9yZ0V2ZW50LmRlbHRhTW9kZSA9PT0gMSApIHtcbiAgICAgICAgICAgIHZhciBsaW5lSGVpZ2h0ID0gJC5kYXRhKHRoaXMsICdtb3VzZXdoZWVsLWxpbmUtaGVpZ2h0Jyk7XG4gICAgICAgICAgICBkZWx0YSAgKj0gbGluZUhlaWdodDtcbiAgICAgICAgICAgIGRlbHRhWSAqPSBsaW5lSGVpZ2h0O1xuICAgICAgICAgICAgZGVsdGFYICo9IGxpbmVIZWlnaHQ7XG4gICAgICAgIH0gZWxzZSBpZiAoIG9yZ0V2ZW50LmRlbHRhTW9kZSA9PT0gMiApIHtcbiAgICAgICAgICAgIHZhciBwYWdlSGVpZ2h0ID0gJC5kYXRhKHRoaXMsICdtb3VzZXdoZWVsLXBhZ2UtaGVpZ2h0Jyk7XG4gICAgICAgICAgICBkZWx0YSAgKj0gcGFnZUhlaWdodDtcbiAgICAgICAgICAgIGRlbHRhWSAqPSBwYWdlSGVpZ2h0O1xuICAgICAgICAgICAgZGVsdGFYICo9IHBhZ2VIZWlnaHQ7XG4gICAgICAgIH1cblxuICAgICAgICAvLyBTdG9yZSBsb3dlc3QgYWJzb2x1dGUgZGVsdGEgdG8gbm9ybWFsaXplIHRoZSBkZWx0YSB2YWx1ZXNcbiAgICAgICAgYWJzRGVsdGEgPSBNYXRoLm1heCggTWF0aC5hYnMoZGVsdGFZKSwgTWF0aC5hYnMoZGVsdGFYKSApO1xuXG4gICAgICAgIGlmICggIWxvd2VzdERlbHRhIHx8IGFic0RlbHRhIDwgbG93ZXN0RGVsdGEgKSB7XG4gICAgICAgICAgICBsb3dlc3REZWx0YSA9IGFic0RlbHRhO1xuXG4gICAgICAgICAgICAvLyBBZGp1c3Qgb2xkZXIgZGVsdGFzIGlmIG5lY2Vzc2FyeVxuICAgICAgICAgICAgaWYgKCBzaG91bGRBZGp1c3RPbGREZWx0YXMob3JnRXZlbnQsIGFic0RlbHRhKSApIHtcbiAgICAgICAgICAgICAgICBsb3dlc3REZWx0YSAvPSA0MDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC8vIEFkanVzdCBvbGRlciBkZWx0YXMgaWYgbmVjZXNzYXJ5XG4gICAgICAgIGlmICggc2hvdWxkQWRqdXN0T2xkRGVsdGFzKG9yZ0V2ZW50LCBhYnNEZWx0YSkgKSB7XG4gICAgICAgICAgICAvLyBEaXZpZGUgYWxsIHRoZSB0aGluZ3MgYnkgNDAhXG4gICAgICAgICAgICBkZWx0YSAgLz0gNDA7XG4gICAgICAgICAgICBkZWx0YVggLz0gNDA7XG4gICAgICAgICAgICBkZWx0YVkgLz0gNDA7XG4gICAgICAgIH1cblxuICAgICAgICAvLyBHZXQgYSB3aG9sZSwgbm9ybWFsaXplZCB2YWx1ZSBmb3IgdGhlIGRlbHRhc1xuICAgICAgICBkZWx0YSAgPSBNYXRoWyBkZWx0YSAgPj0gMSA/ICdmbG9vcicgOiAnY2VpbCcgXShkZWx0YSAgLyBsb3dlc3REZWx0YSk7XG4gICAgICAgIGRlbHRhWCA9IE1hdGhbIGRlbHRhWCA+PSAxID8gJ2Zsb29yJyA6ICdjZWlsJyBdKGRlbHRhWCAvIGxvd2VzdERlbHRhKTtcbiAgICAgICAgZGVsdGFZID0gTWF0aFsgZGVsdGFZID49IDEgPyAnZmxvb3InIDogJ2NlaWwnIF0oZGVsdGFZIC8gbG93ZXN0RGVsdGEpO1xuXG4gICAgICAgIC8vIE5vcm1hbGlzZSBvZmZzZXRYIGFuZCBvZmZzZXRZIHByb3BlcnRpZXNcbiAgICAgICAgaWYgKCBzcGVjaWFsLnNldHRpbmdzLm5vcm1hbGl6ZU9mZnNldCAmJiB0aGlzLmdldEJvdW5kaW5nQ2xpZW50UmVjdCApIHtcbiAgICAgICAgICAgIHZhciBib3VuZGluZ1JlY3QgPSB0aGlzLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuICAgICAgICAgICAgb2Zmc2V0WCA9IGV2ZW50LmNsaWVudFggLSBib3VuZGluZ1JlY3QubGVmdDtcbiAgICAgICAgICAgIG9mZnNldFkgPSBldmVudC5jbGllbnRZIC0gYm91bmRpbmdSZWN0LnRvcDtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIEFkZCBpbmZvcm1hdGlvbiB0byB0aGUgZXZlbnQgb2JqZWN0XG4gICAgICAgIGV2ZW50LmRlbHRhWCA9IGRlbHRhWDtcbiAgICAgICAgZXZlbnQuZGVsdGFZID0gZGVsdGFZO1xuICAgICAgICBldmVudC5kZWx0YUZhY3RvciA9IGxvd2VzdERlbHRhO1xuICAgICAgICBldmVudC5vZmZzZXRYID0gb2Zmc2V0WDtcbiAgICAgICAgZXZlbnQub2Zmc2V0WSA9IG9mZnNldFk7XG4gICAgICAgIC8vIEdvIGFoZWFkIGFuZCBzZXQgZGVsdGFNb2RlIHRvIDAgc2luY2Ugd2UgY29udmVydGVkIHRvIHBpeGVsc1xuICAgICAgICAvLyBBbHRob3VnaCB0aGlzIGlzIGEgbGl0dGxlIG9kZCBzaW5jZSB3ZSBvdmVyd3JpdGUgdGhlIGRlbHRhWC9ZXG4gICAgICAgIC8vIHByb3BlcnRpZXMgd2l0aCBub3JtYWxpemVkIGRlbHRhcy5cbiAgICAgICAgZXZlbnQuZGVsdGFNb2RlID0gMDtcblxuICAgICAgICAvLyBBZGQgZXZlbnQgYW5kIGRlbHRhIHRvIHRoZSBmcm9udCBvZiB0aGUgYXJndW1lbnRzXG4gICAgICAgIGFyZ3MudW5zaGlmdChldmVudCwgZGVsdGEsIGRlbHRhWCwgZGVsdGFZKTtcblxuICAgICAgICAvLyBDbGVhcm91dCBsb3dlc3REZWx0YSBhZnRlciBzb21ldGltZSB0byBiZXR0ZXJcbiAgICAgICAgLy8gaGFuZGxlIG11bHRpcGxlIGRldmljZSB0eXBlcyB0aGF0IGdpdmUgZGlmZmVyZW50XG4gICAgICAgIC8vIGEgZGlmZmVyZW50IGxvd2VzdERlbHRhXG4gICAgICAgIC8vIEV4OiB0cmFja3BhZCA9IDMgYW5kIG1vdXNlIHdoZWVsID0gMTIwXG4gICAgICAgIGlmIChudWxsTG93ZXN0RGVsdGFUaW1lb3V0KSB7IGNsZWFyVGltZW91dChudWxsTG93ZXN0RGVsdGFUaW1lb3V0KTsgfVxuICAgICAgICBudWxsTG93ZXN0RGVsdGFUaW1lb3V0ID0gc2V0VGltZW91dChudWxsTG93ZXN0RGVsdGEsIDIwMCk7XG5cbiAgICAgICAgcmV0dXJuICgkLmV2ZW50LmRpc3BhdGNoIHx8ICQuZXZlbnQuaGFuZGxlKS5hcHBseSh0aGlzLCBhcmdzKTtcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBudWxsTG93ZXN0RGVsdGEoKSB7XG4gICAgICAgIGxvd2VzdERlbHRhID0gbnVsbDtcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBzaG91bGRBZGp1c3RPbGREZWx0YXMob3JnRXZlbnQsIGFic0RlbHRhKSB7XG4gICAgICAgIC8vIElmIHRoaXMgaXMgYW4gb2xkZXIgZXZlbnQgYW5kIHRoZSBkZWx0YSBpcyBkaXZpc2FibGUgYnkgMTIwLFxuICAgICAgICAvLyB0aGVuIHdlIGFyZSBhc3N1bWluZyB0aGF0IHRoZSBicm93c2VyIGlzIHRyZWF0aW5nIHRoaXMgYXMgYW5cbiAgICAgICAgLy8gb2xkZXIgbW91c2Ugd2hlZWwgZXZlbnQgYW5kIHRoYXQgd2Ugc2hvdWxkIGRpdmlkZSB0aGUgZGVsdGFzXG4gICAgICAgIC8vIGJ5IDQwIHRvIHRyeSBhbmQgZ2V0IGEgbW9yZSB1c2FibGUgZGVsdGFGYWN0b3IuXG4gICAgICAgIC8vIFNpZGUgbm90ZSwgdGhpcyBhY3R1YWxseSBpbXBhY3RzIHRoZSByZXBvcnRlZCBzY3JvbGwgZGlzdGFuY2VcbiAgICAgICAgLy8gaW4gb2xkZXIgYnJvd3NlcnMgYW5kIGNhbiBjYXVzZSBzY3JvbGxpbmcgdG8gYmUgc2xvd2VyIHRoYW4gbmF0aXZlLlxuICAgICAgICAvLyBUdXJuIHRoaXMgb2ZmIGJ5IHNldHRpbmcgJC5ldmVudC5zcGVjaWFsLm1vdXNld2hlZWwuc2V0dGluZ3MuYWRqdXN0T2xkRGVsdGFzIHRvIGZhbHNlLlxuICAgICAgICByZXR1cm4gc3BlY2lhbC5zZXR0aW5ncy5hZGp1c3RPbGREZWx0YXMgJiYgb3JnRXZlbnQudHlwZSA9PT0gJ21vdXNld2hlZWwnICYmIGFic0RlbHRhICUgMTIwID09PSAwO1xuICAgIH1cblxufSkpO1xuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgJCBmcm9tICdqcXVlcnkvZGlzdC9qcXVlcnknO1xuaW1wb3J0ICdqcXVlcnktZGF0ZXRpbWVwaWNrZXIvYnVpbGQvanF1ZXJ5LmRhdGV0aW1lcGlja2VyLmZ1bGwnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBEYXRlVGltZVBpY2tlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxJbnB1dEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaW5wdXQnKVswXTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRhdGV0aW1lcGlja2VySW5pdCgpO1xuICAgICAgICB0aGlzLnNldExhbmd1YWdlKHRoaXMubGFuZ3VhZ2UpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBkYXRldGltZXBpY2tlckluaXQoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmZvcm1hdHRlZERhdGVUaW1lICYmICQodGhpcy50cmlnZ2VyKS52YWwoKSkge1xuICAgICAgICAgICAgJCh0aGlzLnRyaWdnZXIpLnZhbCh0aGlzLmZvcm1hdHRlZERhdGVUaW1lKTtcbiAgICAgICAgfVxuXG4gICAgICAgICQodGhpcy50cmlnZ2VyKS5kYXRldGltZXBpY2tlcih0aGlzLmNvbmZpZyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldExhbmd1YWdlKGxhbmd1YWdlOiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgJC5kYXRldGltZXBpY2tlci5zZXRMb2NhbGUobGFuZ3VhZ2UpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgcGFyZW50KCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncGFyZW50LWlkJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBsYW5ndWFnZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2xhbmd1YWdlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjb25maWcoKTogb2JqZWN0IHtcbiAgICAgICAgY29uc3QgY29uZmlnID0gSlNPTi5wYXJzZSh0aGlzLmdldEF0dHJpYnV0ZSgnY29uZmlnJykpO1xuICAgICAgICBjb25maWcucGFyZW50SUQgPSB0aGlzLnBhcmVudDtcblxuICAgICAgICByZXR1cm4gY29uZmlnO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZm9ybWF0dGVkRGF0ZVRpbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmb3JtYXR0ZWQtZGF0ZS10aW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==