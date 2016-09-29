<?php
	
	/*
	 * uShare
	 *
	 * uShare, sosyal medya paylaşım kodlarını kolayca ulaşmanızı sağlar.
	 *
	 * Detaylar: {@link https://github.com/ugurkilci/uShare}
	 *
	 *******************
	 *
	 * Uğur KILCI
	 *
	 * @ugurkilci Github
	 * @ugur2nd Twitter
	 * uShare 1.3
	 */
	
	## TR:/ Sosyal Medya Paylaşım Kodları Başla
	## EN:/ Social Media Share Codes Start
	
	function ushare($usharea) {
		$usharea = trim($usharea);
		$ushb = array(/*normal share codes >>*/'fb','twt','gpls','pin','lin','vk','okru','su','rddt','tmblr','blggr','usinfo','ulnk',/*new share codes >>*/ 'f:b','t:wt','g:pls','p:in','l:in','v:k','o:kru','s:u','r:ddt','t:mblr','b:lggr');
		$ushc = array("http://www.facebook.com/share.php?u=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://twitter.com/home?status=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://plus.google.com/share?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://pinterest.com/pin/create/button/?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."&?ref=uShare","https://www.linkedin.com/shareArticle?mini=true&url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."&source=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://vk.com/share.php?url=".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://ok.ru/share.php?url=".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://www.stumbleupon.com/submit?url=".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://www.reddit.com/submit?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://www.tumblr.com/share/link?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://www.blogger.com/blog-this.g?u=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."&t=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://github.com/ushare#ref=uShare","http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'],"http://www.facebook.com/share.php?u=","https://twitter.com/home?status=","https://plus.google.com/share?url=","https://pinterest.com/pin/create/button/?url=","https://www.linkedin.com/shareArticle?mini=true&url=","http://vk.com/share.php?url=","http://ok.ru/share.php?url=","http://www.stumbleupon.com/submit?url=","http://www.reddit.com/submit?url=","http://www.tumblr.com/share/link?url=","https://www.blogger.com/blog-this.g?u=");
		$ushislem= str_replace($ushb,$ushc,$usharea);
		return $ushislem;
	}
	
	## EN:/ Social Media Share Codes Finish
	## TR:/ Sosyal Medya Paylaşım Kodları Bitiş

	/* ******************* */
	
	## TR:/ Sosyal Medya Renk Kodları Başla
	## EN:/ Social Media Color Codes Start
	
	$ushstyle = ".ushfb{color:#007FFF;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushfb:hover{color:#0066CC;text-decoration:none;}.ushfb:focus{color:#004C99;text-decoration:none;}.ushtwt{color:#00BFFF;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushtwt:hover{color:#0099CC;text-decoration:none;}.ushtwt:focus{color:#007299;text-decoration:none;}.ushgpls{color:#EA1A22;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushgpls:hover{color:#CC1821;text-decoration:none;}.ushgpls:focus{color:#991219;text-decoration:none;}.ushpin{color:#C52C26;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushpin:hover{color:#99221E;text-decoration:none;}.ushpin:focus{color:#661514;text-decoration:none;}.ushlin{color:#006EB1;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushlin:hover{color:#00507F;text-decoration:none;}.ushlin:focus{color:#002033;text-decoration:none;}.ushvk{color:#007FFF;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushvk:hover{color:#007FFF;text-decoration:none;}.ushvk:focus{color:#007FFF;text-decoration:none;}.ushokru{color:#007FFF;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushokru:hover{color:#007FFF;text-decoration:none;}.ushokru:focus{color:#007FFF;text-decoration:none;}.ushsu{color:#007FFF;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushsu:hover{color:#007FFF;text-decoration:none;}.ushsu:focus{color:#007FFF;text-decoration:none;}.ushrddt{color:#007FFF;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushrddt:hover{color:#007FFF;text-decoration:none;}.ushrddt:focus{color:#007FFF;text-decoration:none;}.ushtmblr{color:#1B3D82;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushtmblr:hover{color:#153066;text-decoration:none;}.ushtmblr:focus{color:#0A1833;text-decoration:none;}.ushblggr{color:#FF6600;display:inline-block;text-align:center;vertical-align:middle;cursor:pointer;}.ushblggr:hover{color:#CC5100;text-decoration:none;}.ushblggr:focus{color:#993A00;text-decoration:none;}";
	
	## EN:/ Social Media Color Codes Finish
	## TR:/ Sosyal Medya Renk Kodları Bitiş
?>
