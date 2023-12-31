/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-student-1': '&#xe904;',
		'icon-student': '&#xe905;',
		'icon-computer': '&#xe906;',
		'icon-search': '&#xe907;',
		'icon-medal': '&#xe908;',
		'icon-laptop': '&#xe909;',
		'icon-team': '&#xe90a;',
		'icon-group': '&#xe90b;',
		'icon-conversation': '&#xe90c;',
		'icon-award': '&#xe900;',
		'icon-test': '&#xe901;',
		'icon-cap': '&#xe902;',
		'icon-diploma': '&#xe903;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
