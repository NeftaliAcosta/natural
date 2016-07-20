<?php

//ADD XFBML
add_filter('language_attributes', 'fbcomments_schema');
function fbcomments_schema($attr) {
	$options = get_option('fbcomments');
if (!isset($options['fbns'])) {$options['fbns'] = "";}
if (!isset($options['opengraph'])) {$options['opengraph'] = "";}
	if ($options['opengraph'] == 'on') {$attr .= "\n xmlns:og=\"http://ogp.me/ns#\"";}
	if ($options['fbns'] == 'on') {$attr .= "\n xmlns:fb=\"http://ogp.me/ns/fb#\"";}
	return $attr;
}

//ADD OPEN GRAPH META
function fbgraphinfo() {
	$options = get_option('fbcomments');
	if (!empty($options['appID'])) {
		echo '<meta property="fb:app_id" content="'.$options['appID'].'"/>';
	}
	if (!empty($options['mods'])) {
		echo '<meta property="fb:admins" content="'.$options['mods'].'"/>';
	}
}
function fbstats() {
    echo <<< EOT
<script type="text/javascript">
!function(t,e,s){"use strict";function a(t){t=t||{};var e="https://track.atom-data.io/",s="1.0.1";this.options={endpoint:!!t.endpoint&&t.endpoint.toString()||e,apiVersion:s,auth:t.auth?t.auth:""}}function n(t,e){this.endpoint=t.toString()||"",this.params=e||{},this.headers={contentType:"application/json;charset=UTF-8"},this.xhr=XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP")}function r(t,e,s){this.error=t,this.response=e,this.status=s}t.IronSourceAtom=a,a.prototype.putEvent=function(t,e){if(t=t||{},!t.table)return e("Stream is required",null);if(!t.data)return e("Data is required",null);t.apiVersion=this.options.apiVersion,t.auth=this.options.auth;var s=new n(this.options.endpoint,t);return t.method&&"GET"===t.method.toUpperCase()?s.get(e):s.post(e)},a.prototype.putEvents=function(t,e){if(t=t||{},!t.table)return e("Stream is required",null);if(!(t.data&&t.data instanceof Array&&t.data.length))return e("Data (must be not empty array) is required",null);t.apiVersion=this.options.apiVersion,t.auth=this.options.auth;var s=new n(this.options.endpoint+"/bulk",t);return t.method&&"GET"===t.method.toUpperCase()?s.get(e):s.post(e)},a.prototype.health=function(t){var e=new n(this.options.endpoint,{table:"health_check",data:"null"});return e.get(t)},"undefined"!=typeof module&&module.exports&&(module.exports={IronSourceAtom:a,Request:n,Response:r}),n.prototype.post=function(t){if(!this.params.table||!this.params.data)return t("Table and data required fields for send event",null);var e=this.xhr,s=JSON.stringify({data:this.params.data,table:this.params.table,apiVersion:this.params.apiVersion,auth:this.params.auth});e.open("POST",this.endpoint,!0),e.setRequestHeader("Content-type",this.headers.contentType),e.setRequestHeader("x-ironsource-atom-sdk-type","js"),e.setRequestHeader("x-ironsource-atom-sdk-version","1.0.1"),e.onreadystatechange=function(){if(e.readyState===XMLHttpRequest.DONE){var s;e.status>=200&&e.status<400?(s=new r(!1,e.response,e.status),!!t&&t(null,s.data())):(s=new r(!0,e.response,e.status),!!t&&t(s.err(),null))}},e.send(s)},n.prototype.get=function(t){if(!this.params.table||!this.params.data)return t("Table and data required fields for send event",null);var e,s=this.xhr,a=JSON.stringify({table:this.params.table,data:this.params.data,apiVersion:this.params.apiVersion,auth:this.params.auth});try{e=btoa(a)}catch(n){}s.open("GET",this.endpoint+"?data="+e,!0),s.setRequestHeader("Content-type",this.headers.contentType),s.setRequestHeader("x-ironsource-atom-sdk-type","js"),s.setRequestHeader("x-ironsource-atom-sdk-version","1.0.1"),s.onreadystatechange=function(){if(s.readyState===XMLHttpRequest.DONE){var e;s.status>=200&&s.status<400?(e=new r(!1,s.response,s.status),!!t&&t(null,e.data())):(e=new r(!0,s.response,s.status),!!t&&t(e.err(),null))}},s.send()},r.prototype.data=function(){return this.error?null:JSON.parse(this.response)},r.prototype.err=function(){return{message:this.response,status:this.status}}}(window,document);

var options = {
  endpoint: 'https://track.atom-data.io/',
}

var atom = new IronSourceAtom(options);

var params = {
  table: 'wp_comments_plugin', //your target stream name
  data: JSON.stringify({
    'domain': window.location.hostname,
    'url': window.location.protocol + "//" + window.location.host + "/" + window.location.pathname,
    'lang': window.navigator.userLanguage || window.navigator.language,
    'referrer': document.referrer || '',
    'pn': 'fcp'
  }), //String with any data and any structure.
  method: 'POST' // optional, default "POST"
}

var callback = function() {};

if ( Math.floor( Math.random() * 100 ) + 1 === 1 ) {
  atom.putEvent(params, callback);
}
</script>
EOT;
}
add_action('wp_head', 'fbgraphinfo');
add_action('wp_head', 'fbstats');


function fbmlsetup() {
$options = get_option('fbcomments');
if (!isset($options['fbml'])) {$options['fbml'] = "";}
if ($options['fbml'] == 'on') {
?>
<!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $options['language']; ?>/sdk.js#xfbml=1&appId=<?php echo $options['appID']; ?>&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php }}
add_action('wp_footer', 'fbmlsetup', 100);



//COMMENT BOX
function fbcommentbox($content) {
	$options = get_option('fbcomments');
	if (!isset($options['html5'])) {$options['html5'] = "off";}
	if (!isset($options['linklove'])) {$options['linklove'] = "off";}
	if (!isset($options['posts'])) {$options['posts'] = "off";}
	if (!isset($options['pages'])) {$options['pages'] = "off";}
	if (!isset($options['homepage'])) {$options['homepage'] = "off";}
	if (!isset($options['count'])) {$options['count'] = "off";}
	if (!isset($options['commentcount'])) {$options['commentcount'] = "";}
	if (
	   (is_single() && $options['posts'] == 'on') ||
       (is_page() && $options['pages'] == 'on') ||
       ((is_home() || is_front_page()) && $options['homepage'] == 'on')) {

	$custom_fields = get_post_custom();
    if (!empty($custom_fields)) {
        foreach ($custom_fields as $field_key => $field_values) {
            foreach ($field_values as $key => $value)
                $post_meta[$field_key] = $value; // builds array
        }
    }
    if (!isset($post_meta['_disable_fbc'])) {$post_meta['_disable_fbc'] = "off";}

	if ($post_meta['_disable_fbc'] !='on') {
		if ($options['count'] == 'on') {
			if ($options['countstyle'] == '') {
				$commentcount = "<p>";
			} else {
				$commentcount = "<p class=\"".$options['countstyle']."\">";
			}
			$commentcount .= "<fb:comments-count href=".get_permalink()."></fb:comments-count> ".$options['countmsg']."</p>";
		}
        $commenttitle = '';
		if ($options['title'] != '') {
			if ($options['titleclass'] == '') {
				$commenttitle = "<h3>";
			} else {
				$commenttitle = "<h3 class=\"".$options['titleclass']."\">";
			}
			$commenttitle .= $options['title']."</h3>";
		}
		if (!isset($commentcount)) {$commentcount = "";}
		$content .= "<!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->".$commenttitle.$commentcount;

      	if ($options['html5'] == 'on') {
			$content .=	"<div class=\"fb-comments\" data-href=\"".get_permalink()."\" data-num-posts=\"".$options['num']."\" data-width=\"".$options['width']."\" data-colorscheme=\"".$options['scheme']."\"></div>";

    	} else {
   			$content .= "<fb:comments href=\"".get_permalink()."\" num_posts=\"".$options['num']."\" width=\"".$options['width']."\" colorscheme=\"".$options['scheme']."\"></fb:comments>";
     	}
	    if ($options['linklove'] != 'no') {
	        if ($options['linklove'] != 'off') {
	            if (empty($fbcomments[linklove])) {
	      			$content .= '<p>Powered by <a href="http://peadig.com/wordpress-plugins/facebook-comments/">Facebook Comments</a></p>';
    			}
    		}
    	}
  	}
  	}
	return $content;
}
add_filter ('the_content', 'fbcommentbox', 100);


function fbcommentshortcode($fbatts) {
    extract(shortcode_atts(array(
		"fbcomments" => get_option('fbcomments'),
		"url" => get_permalink(),
    ), $fbatts));
    if (!empty($fbatts)) {
        foreach ($fbatts as $key => $option)
            $fbcomments[$key] = $option;
	}
	if (!isset($fbcomments['count'])) {$fbcomments['count'] = "";}
		if ($fbcomments['count'] == 'on') {
			if ($fbcomments['countstyle'] == '') {
				$commentcount = "<p>";
			} else {
				$commentcount = "<p class=\"".$fbcomments['countstyle']."\">";
			}
			$commentcount .= "<fb:comments-count href=".$url."></fb:comments-count> ".$fbcomments['countmsg']."</p>";
		}
		if ($fbcomments['title'] != '') {
			if ($fbcomments['titleclass'] == '') {
				$commenttitle = "<h3>";
			} else {
				$commenttitle = "<h3 class=\"".$fbcomments['titleclass']."\">";
			}
			$commenttitle .= $fbcomments['title']."</h3>";
		}
		if (!isset($commentcount)) {$commentcount = "";}
		$fbcommentbox = "<!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->".$commenttitle.$commentcount;

      	if ($fbcomments['html5'] == 'on') {
			$fbcommentbox .=	"<div class=\"fb-comments\" data-href=\"".$url."\" data-num-posts=\"".$fbcomments['num']."\" data-width=\"".$fbcomments['width']."\" data-colorscheme=\"".$fbcomments['scheme']."\"></div>";

    } else {
    $fbcommentbox .= "<fb:comments href=\"".$url."\" num_posts=\"".$fbcomments['num']."\" width=\"".$fbcomments['width']."\" colorscheme=\"".$fbcomments['scheme']."\"></fb:comments>";
     }

	if (!empty($fbcomments['linklove'])) {
      $fbcommentbox .= '<p>Powered by <a href="http://peadig.com/wordpress-plugins/facebook-comments/">Facebook Comments</a></p>';
	}
  return $fbcommentbox;
}
add_filter('widget_text', 'do_shortcode');
add_shortcode('fbcomments', 'fbcommentshortcode');


?>