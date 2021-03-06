html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-weight:inherit;font-style:inherit;font-family:inherit;font-size:100%;vertical-align:baseline}
body{line-height:1;color:#000;background:#fff}
ol,ul{list-style:none}
table{border-collapse:separate;border-spacing:0;vertical-align:middle}
caption,th,td{text-align:left;font-weight:normal;vertical-align:middle}
a img{border:none}
/* custom Font*/
@font-face{font-family:"covered_by_your_graceregular";font-weight:normal;font-style:normal;src:url("http://yangjian.me/font/coveredbyyourgrace-webfont.eot");src:url("http://yangjian.me/font/coveredbyyourgrace-webfont.eot?#iefix") format('embedded-opentype'),url("http://yangjian.me/font/coveredbyyourgrace-webfont.svg#covered_by_your_graceregular") format('svg'),url("http://yangjian.me/font/coveredbyyourgrace-webfont.woff") format('woff'),url("http://yangjian.me/font/coveredbyyourgrace-webfont.ttf") format('truetype')}
/* icon Font */
@font-face{font-family:"FontAwesome";font-style:normal;font-weight:normal;src:url("http://yangjian.me/font/fontawesome-webfont.eot?v=#4.0.3");src:url("http://yangjian.me/font/fontawesome-webfont.eot?#iefix&v=#4.0.3") format("embedded-opentype"),url("http://yangjian.me/font/fontawesome-webfont.woff?v=#4.0.3") format("woff"),url("http://yangjian.me/font/fontawesome-webfont.ttf?v=#4.0.3") format("truetype"),url("http://yangjian.me/font/fontawesome-webfont.svg#fontawesomeregular?v=#4.0.3") format("svg")}
/* Public style */
*{-webkit-margin-before:0;-webkit-margin-after:0}
body{background:#ddd;font-family:"Helvetica Neue","Helvetica","Microsoft YaHei","WenQuanYi Micro Hei",Arial,sans-serif;font-size:100%;color:#817c7c;line-height:1.5}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em;padding-left:.3em}
sub{bottom:-.25em}
a{text-decoration:none;color:#817c7c;}
a:hover,a:focus{outline:0;text-decoration:none;-webkit-transition:color 0.25s, background 0.5s;-moz-transition:color 0.25s, background 0.5s;-o-transition:color 0.25s, background 0.5s;-ms-transition:color 0.25s, background 0.5s;transition:color 0.25s, background 0.5s}
a:hover:before{-webkit-transition:color 0.25s, background 0.5s;-moz-transition:color 0.25s, background 0.5s;-o-transition:color 0.25s, background 0.5s;-ms-transition:color 0.25s, background 0.5s;transition:color 0.25s, background 0.5s}
input:focus{outline:none}
input,button{margin:0;padding:0;}
input::-moz-focus-inner,button::-moz-focus-inner{border:0;padding:0}
h1{font-size:1.5em}
.active{}
.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.clearfix{zoom:1}
.clearfix:before,.clearfix:after{content:"";display:table}
.clearfix:after{clear:both}
::-webkit-input-placeholder{color:#fff;padding:2px 0 0 4px}
::-moz-placeholder{padding:2px 0 0 4px}
:-ms-input-placeholder{color:#fff;padding:2px 0 0 4px}
::-webkit-input-placeholder::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f002";padding-right:4px}
::-moz-placeholder:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f002";padding-right:4px}
:-ms-input-placeholder::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f002";padding-right:4px}
input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}
::-webkit-search-cancel-button:after{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:'\f00d';color:#fff;padding-right:4px}
/* css3 animate */
.animated{-webkit-animation-fill-mode:both;-moz-animation-fill-mode:both;-o-animation-fill-mode:both;-ms-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-duration:1s;-moz-animation-duration:1s;-o-animation-duration:1s;-ms-animation-duration:1s;animation-duration:1s}
@-webkit-keyframes fadeIn{0%{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0)}
100%{opacity:1;-ms-filter:none;filter:none}
}.fadeIn{-webkit-animation-name:fadeIn;-moz-animation-name:fadeIn;-o-animation-name:fadeIn;-ms-animation-name:fadeIn;animation-name:fadeIn}
.fadeOut{-webkit-animation-name:fadeOut;-moz-animation-name:fadeOut;-o-animation-name:fadeOut;-ms-animation-name:fadeOut;animation-name:fadeOut}
@-moz-keyframes fadeInDown{0%{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);-webkit-transform:translateY(-20px);-moz-transform:translateY(-20px);-o-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-ms-filter:none;filter:none;-webkit-transform:translateY(0);-moz-transform:translateY(0);-o-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}@-webkit-keyframes fadeInDown{0%{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);-webkit-transform:translateY(-20px);-moz-transform:translateY(-20px);-o-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-ms-filter:none;filter:none;-webkit-transform:translateY(0);-moz-transform:translateY(0);-o-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}@-o-keyframes fadeInDown{0%{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);-webkit-transform:translateY(-20px);-moz-transform:translateY(-20px);-o-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-ms-filter:none;filter:none;-webkit-transform:translateY(0);-moz-transform:translateY(0);-o-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}@-ms-keyframes fadeInDown{0%{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);-webkit-transform:translateY(-20px);-moz-transform:translateY(-20px);-o-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-ms-filter:none;filter:none;-webkit-transform:translateY(0);-moz-transform:translateY(0);-o-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}@keyframes fadeInDown{0%{opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);-webkit-transform:translateY(-20px);-moz-transform:translateY(-20px);-o-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-ms-filter:none;filter:none;-webkit-transform:translateY(0);-moz-transform:translateY(0);-o-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}body >header{width:100%;-webkit-box-shadow:2px 4px 5px rgba(3,3,3,0.2);box-shadow:2px 4px 5px rgba(3,3,3,0.2);background:#81d7d0;color:#fff;padding:1em 0 .8em;}
@media only screen and (min-width: 1024px){body >header{padding:1.8em 0 1.5em}
}body >header >div{width:95%;margin:0 auto;position:relative;overflow:hidden;}
@media only screen and (min-width: 1024px){body >header >div{width:93%}
}body >header a{display:block;color:#fff}
#imglogo{float:left;width:4em;height:4em;}
@media only screen and (min-width: 768px){#imglogo{width:5em}
}@media only screen and (min-width: 1024px){#imglogo{width:5.5em}
}#imglogo img{width:4em;}
@media only screen and (min-width: 768px){#imglogo img{width:5em}
}@media only screen and (min-width: 1024px){#imglogo img{width:5.5em}
}#textlogo{float:left;width:80%;margin-left:.5em;}
#textlogo h1.site-name{width:86%;font-family:"covered_by_your_graceregular";font-size:200%;line-height:1.5;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
@media only screen and (min-width: 768px){#textlogo h1.site-name{font-size:240%}
}@media only screen and (min-width: 1024px){#textlogo h1.site-name{font-size:280%}
}#textlogo h2.blog-motto{font-size:.7em;font-weight:normal;}
@media only screen and (min-width: 768px){#textlogo h2.blog-motto{font-size:100%}
}@media only screen and (min-width: 1024px){#textlogo h2.blog-motto{font-size:110%}
}.navbar{position:absolute;width:2em;right:0;top:1em;padding:.5em;}
@media only screen and (min-width: 1024px){.navbar{display:none}
}.navbutton::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f0c9"}
.navmobile::before{padding-left:1em}
header nav{float:left;width:100%;font-size:112.5%;padding-top:.5em;max-height:.01em;-webkit-transition:max-height 1s ease-out;-moz-transition:max-height 1s ease-out;-o-transition:max-height 1s ease-out;-ms-transition:max-height 1s ease-out;transition:max-height 1s ease-out;}
@media only screen and (min-width: 568px){header nav{width:50%}
}@media only screen and (min-width: 1024px){header nav{float:right;width:auto;margin-top:1em;max-height:none}
}@media only screen and (min-width: 1024px){header nav ul{float:right}
}@media only screen and (min-width: 1024px){header nav ul li{float:left}
}header nav ul li a{padding:.2em 0 .2em 1em;}
@media only screen and (min-width: 1024px){header nav ul li a{padding:.2em 1.5em}
}header nav ul li a:hover{background:#39c9bd;color:#FFF}
header nav .actives{background:#39c9bd;color:#FFF}
.shownav{max-height:40em}
.search{padding:.1em 0 0 1em;}
.search input{line-height:1.7;border:1px solid #fff;color:#fff;background:transparent;width:80%;padding-left:.5em;}
@media only screen and (min-width: 1024px){.search input{width:8em;-webkit-transition:0.5s width;-moz-transition:0.5s width;-o-transition:0.5s width;-ms-transition:0.5s width;transition:0.5s width}
.search input:focus{width:15em}
}.search label{display:none}
/* index layout */
#container{width:95%;margin:0 auto;overflow:hidden;}
@media only screen and (min-width: 768px){#container{width:96%}
}@media only screen and (min-width: 1024px){#container{width:94%}
}@media only screen and (min-width: 1560px){#container{width:82%}
}#main{margin:1em 0 0;line-height:1.8;}
@media only screen and (min-width: 1024px){#main{margin:2em 0 0;width:75%;float:left;-webkit-transition:margin 0.5s ease-out;-moz-transition:margin 0.5s ease-out;-o-transition:margin 0.5s ease-out;-ms-transition:margin 0.5s ease-out;transition:margin 0.5s ease-out}
}#main section.post{background:#fafafa;margin-bottom:.125em;}
#main section.post a{display:block;border-left:.5em solid #ccc;-webkit-transition:border-left 0.45s;-moz-transition:border-left 0.45s;-o-transition:border-left 0.45s;-ms-transition:border-left 0.45s;transition:border-left 0.45s;padding:.5em;}
@media only screen and (min-width: 768px){#main section.post a{padding:1em}
}#main section.post a:hover{border-left:.5em solid #81d7d0}
#main section.post a h1{color: #d4b68e;line-height:2}
#main section.post a p{color:#817c7c}
#main section.post a time{color:#817c7c;display:block;margin:.5em 0;font-size:.7em}
.moveMain{margin-left:10% !important}
#page-nav{background:#fafafa;text-align:center;overflow:hidden;}
#page-nav a,#page-nav span{display:inline-block;padding:.5em 1em}
#page-nav a{color: #d4b68e;}
#page-nav a:hover{background:#81d7d0;color:#FFF}
#page-nav .prev{float:left;-webkit-transition:border-left 0.5s;-moz-transition:border-left 0.5s;-o-transition:border-left 0.5s;-ms-transition:border-left 0.5s;transition:border-left 0.5s;}

#page-nav .next{float:right}
#page-nav .page-number{display:none;}
@media only screen and (min-width: 768px){#page-nav .page-number{display:inline-block}
}#page-nav .current{color:#b8b8b8;font-weight:bold}
#page-nav .space{color: #d4b68e}
/* page layout */
@media only screen and (min-width: 1024px){.page{margin-left:10% !important}
}/* archive layout */
.category-icon:before,.tag-icon:before,.archive-icon:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:#ccc;font-size:100%;padding-right:.3em}
.category-icon:before{content:"\f07b"}
.tag-icon:before{content:"\f02c"}
.archive-icon:before{content:"\f187"}
.archive-title{margin:1em 0;width:97%;padding:2em 0 2em 3%;background:#fafafa;border-left:.5em solid #ccc;}
@media only screen and (min-width: 1024px){.archive-title{margin:2em 0;width:18.5%;padding-left:.5%;float:left}
}.archive-title h2{width:90%;color: #d4b68e;font-size:120%}
.archive-title a{color: #d4b68e;-webkit-transition:color 0.5s;-moz-transition:color 0.5s;-o-transition:color 0.5s;-ms-transition:color 0.5s;transition:color 0.5s;}
.archive-title a:hover{color:#81d7d0;-webkit-transition:color 0.5s;-moz-transition:color 0.5s;-o-transition:color 0.5s;-ms-transition:color 0.5s;transition:color 0.5s}
.current{color:#81d7d0 !important}
@media only screen and (min-width: 768px){.archive-part{min-height:200px}
}@media only screen and (min-width: 1024px){.archive-part{width:78% !important;float:right;margin-left:2% !important}
}.archive-part section.post{width:100%;}
@media only screen and (min-width: 768px){.archive-part section.post{float:left;width:50%}
}@media only screen and (min-width: 1024px){.archive-part section.post{width:33.333%}
}@media only screen and (min-width: 768px){.archive-nav{width:100%;float:left;margin-top:1em}
}/* tags&categories layout */
.all-list-box{min-height:400px}
.post,.page{background:#fafafa;}
.page a,.btn-primary{color: #d4b68e;}
.btn-primary:hover,.page a:hover{color:#81d7d0}
@media only screen and (min-width: 768px){article header.article-info{border-bottom:1px solid #dbdbdb}
}article header.article-info >h1{padding:.2em 3%;font-size:170%;line-height:1.5;word-wrap:break-word;word-break:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;border-left:5px solid #81d7d0}
@media only screen and (min-width: 1024px){article header.article-info >h1{font-size:200%;padding-top:.3em}
}article header.article-info >p.article-author{padding:.3em 4% .3em 0;text-align:right;border-bottom:1px solid #dbdbdb;}
@media only screen and (min-width: 768px){article header.article-info >p.article-author{float:right;border-bottom:none}
}article header.article-info >p.article-time{padding-top:.5em;font-size:.8em;text-align:center;}
@media only screen and (min-width: 768px){article header.article-info >p.article-time{float:right;margin-right:1em;font-size:.9em}
}article header.article-info >p.article-time:before{font-family:"FontAwesome";font-size:130%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
article .article-content{padding:1.5em 4%;}
article .article-content .kb{padding:.1em .6em;border:1px solid #ccc;background-color:code-color;color:#8f8f8f;-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.2),0 0 0 2px #fff inset;box-shadow:0 1px 0 rgba(0,0,0,0.2),0 0 0 2px #fff inset;display:inline-block;margin:0 .1em;text-shadow:0 1px 0 #fff;line-height:1.5;white-space:nowrap}
article .article-content h1,article .article-content h2{font-size:180%;line-height:1.2em}
article .article-content h3,article .article-content h4,article .article-content h5,article .article-content h6{font-size:140%}
article .article-content h1,article .article-content h2,article .article-content h3,article .article-content h4,article .article-content h5,article .article-content h6{color:#333;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:.3em 0;margin:.5em 0;}
article .article-content h1 >code,article .article-content h2 >code,article .article-content h3 >code,article .article-content h4 >code,article .article-content h5 >code,article .article-content h6 >code{color:#a3a3a3}
article .article-content hr{border:1px solid #dbdbdb}
article .article-content strong,article .article-content em{font-weight:bold}
article .article-content acronym,article .article-content abbr{border-bottom:1px dotted}
article .article-content blockquote{border-left:.2em solid #81d7d0;margin:.65em 0 .65em 4%;padding-left:1%;line-height:1.5;font-size:110%;}
article .article-content blockquote footer{background:#fafafa;padding:0;margin:0;font-size:80%;line-height:1em}
article .article-content blockquote cite{font-style:italic;padding-left:.5em}
article .article-content ul,article .article-content ol{padding-left:2em;font-size:105%;}
@media only screen and (min-width: 768px){article .article-content ul,article .article-content ol{padding-left:3em}
}article .article-content ul li{list-style:disc;text-align:match-parent;margin:.5em 0}
article .article-content ol li{list-style-type:decimal;margin:.5em 0}
article .article-content dl dt{font-weight:blod}
article .article-content ul li>code,article .article-content ol li>code,article .article-content p code,article .article-content strong code,article .article-content em code{font-family:Monaco,Menlo,Consolas,Courier New,monospace;background:#eee;color:#747070;border:1px solid #d6d6d6;padding:0 5px;margin:0 2px;font-size:90%;white-space:nowrap;text-shadow:0 1px #fff}
article .article-content p{font-size:105%;line-height:1.7;margin:.7em 0;}
@media only screen and (min-width: 1024px){article .article-content p{margin:1.2em 0}
}article .article-content img,article .article-content video,article .article-content figure img{max-width:100%;display:block;margin:auto;height:auto;vertical-align:middle;padding-top:.5em;}
@media only screen and (min-width: 1024px){article .article-content img,article .article-content video,article .article-content figure img{padding-top:.7em}
}article .article-content figcaption,article .article-content .caption{text-align:center;display:block;font-size:.9em;font-weight:blod}
.video-container{position:relative;padding-top:56%;height:0;overflow:hidden;}
.video-container iframe,article .article-content .video-container object,article .article-content .video-container embed{position:absolute;top:0;left:0;width:100%;height:100%;margin-top:0}
table{width:100%;border-collapse:collapse;border-spacing:0;margin:10px 0 30px 0;}
table th{font-weight:bold;border-bottom:3px solid #dbdbdb;padding-bottom:.5em}
table td{border-bottom:1px solid #dbdbdb;padding:10px 0}
.pullquote{text-align:left;width:45%;margin:0;border:none}
.left{margin-left:.5em;margin-right:1em;float:left}
.right{margin-right:.5em;margin-left:1em;float:right}
footer.article-footer{background:#fafafa;padding:0 4%;margin:0;border-top:1px solid #dbdbdb}
.article-share{float:right;width:100%;}
@media only screen and (min-width: 568px){.article-share{width:60%}
}@media only screen and (min-width: 768px){.article-share{width:40%}
}.share span{float:right;height:3em;width:1em;margin-right:.5em;position:relative;color:#d6d6d6;}
.share span:before{font-family:"FontAwesome";content:"\f064";font-size:1em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;width:1.5em;height:1.5em;position:absolute;top:50%;left:50%;margin-top:-.75em;margin-left:-.75em}
.share a{float:right;width:3em;height:3em;display:block;position:relative;}
.share a:before{font-size:100%;font-family:"FontAwesome";text-align:center;color:#817c7c;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;width:1.5em;height:1.5em;position:absolute;top:50%;left:50%;margin-top:-.75em;margin-left:-.75em}
.share a:hover:before{color:#fff}
.article-share-twitter:before{content:"\f099"}
.article-share-twitter:hover{background:#00aced;text-shadow:0 1px #008abe}
.article-share-facebook:before{content:"\f09a"}
.article-share-facebook:hover{background:#3b5998;text-shadow:0 1px #2f477a}
.article-share-weibo:before{content:"\f18a"}
.article-share-weibo:hover{background:#eb182c;text-shadow:0 1px #bf1121}
.article-share-qrcode:before{content:"\f029"}
.article-share-qrcode:hover{background:#49ae0f;text-shadow:0 1px #3a8b0c}
.article-back-to-top:before{content:"\f062"}
.article-back-to-top:hover{background:#762c54;text-shadow:0 1px #5e2343}
.qrcode{width:15em;height:15em;position:absolute;top:50%;left:50%;margin-top:-7.5em;margin-left:-7.5em;background:#fff;border:2px solid #ccc;display:inline-block;opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);position:fixed;text-align:center;visibility:hidden;z-index:10;-webkit-transition:opacity 0.5s;-moz-transition:opacity 0.5s;-o-transition:opacity 0.5s;-ms-transition:opacity 0.5s;transition:opacity 0.5s;}
@media only screen and (min-width: 1024px){.qrcode{width:20em;height:20em;position:absolute;top:50%;left:50%;margin-top:-10em;margin-left:-10em;position:fixed}
}.qrcode span{display:block;width:80%;height:1.5em;font-size:80%;float:left;}
.qrcode span:before{content:none}
.qrcode a{display:block;width:16%;height:1.5em;float:left}
.qrcode img{width:90%;height:90%}
.qrclose:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f057";color:#ccc}
.qrclose:hover:before{color: #d4b68e !important}
.overlay{display:none !important}
.overlay:target+.qrcode{opacity:1;-ms-filter:none;filter:none;visibility:visible}
.article-tags,.article-categories{padding:.5em 0;float:left;width:100%;}
@media only screen and (min-width: 568px){.article-tags,.article-categories{width:50%}
}@media only screen and (min-width: 768px){.article-tags,.article-categories{width:30%}
}.article-tags{color:#d6d6d6;}
.article-tags span{position:relative;float:left;width:1em;height:2em;margin-right:.5em;}
.article-tags span:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;width:1.2em;height:1.2em;position:absolute;top:50%;left:50%;margin-top:-.6em;margin-left:-.6em;content:"\f02c"}
.article-tags a{float:left;padding:0 .3em;margin:.3em;background:#e6e6e6;}
.article-tags a:hover{color:#fff;background: #d4b68e}
.article-categories{color:#d6d6d6;margin-top:.3em;}
.article-categories span:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f07b"}
.article-category-link{padding:.5em;margin:0 .3em;}
.article-category-link:hover{color:#fff !important;background: #d4b68e}
.article-nav{padding:0 10%;}
@media only screen and (min-width: 768px){.article-nav{padding:0 4%}
}.article-nav strong{font-size:.6em}
.article-nav a{display:block;overflow:hidden}
.article-nav .prev a:hover,.article-nav .next a:hover{background: #d4b68e;color:#fff}
.article-nav .prev{width:100%;float:left;}
.article-nav .prev strong{padding-left:1.8em}
.article-nav .prev span:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f100";padding-right:.5em}
@media only screen and (min-width: 768px){.article-nav .prev{width:45%;float:left}
}.article-nav .next{width:100%;float:left;text-align:left;}
.article-nav .next strong{padding-left:1.5em}
.article-nav .next span:before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f101";padding-right:.5em}
@media only screen and (min-width: 768px){.article-nav .next{width:45%;float:right;text-align:right}
.article-nav .next strong{padding-right:1.8em}
.article-nav .next span:before{content:none}
.article-nav .next span:after{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f101";padding-left:.5em}
}section.comment{padding:0 4%;margin:1em 0}
.toc-article{background:#eee;margin:2em 0 0 .5em;padding:1em;}
.toc-article strong{padding:.3em 0}
#toc{line-height:1em;font-size:.8em;float:right;}
#toc .toc{padding:0;}
#toc .toc li{list-style-type:none}
#toc .toc-child{padding-left:1.5em}
#toc.toc-aside{display:none;width:13%;position:fixed;right:2%;top:320px;overflow:hidden;line-height:1.5em;font-size:1em;color:#333;opacity:.6;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";filter:alpha(opacity=60);-webkit-transition:opacity 1s ease-out;-moz-transition:opacity 1s ease-out;-o-transition:opacity 1s ease-out;-ms-transition:opacity 1s ease-out;transition:opacity 1s ease-out;}
#toc.toc-aside strong{padding:.3em 0;color:#817c7c}
#toc.toc-aside:hover{-webkit-transition:opacity 0.3s ease-out;-moz-transition:opacity 0.3s ease-out;-o-transition:opacity 0.3s ease-out;-ms-transition:opacity 0.3s ease-out;transition:opacity 0.3s ease-out;opacity:1;-ms-filter:none;filter:none}
#toc.toc-aside a{-webkit-transition:color 1s ease-out;-moz-transition:color 1s ease-out;-o-transition:color 1s ease-out;-ms-transition:color 1s ease-out;transition:color 1s ease-out;}
#toc.toc-aside a:hover{color:#81d7d0;-webkit-transition:color 0.3s ease-out;-moz-transition:color 0.3s ease-out;-o-transition:color 0.3s ease-out;-ms-transition:color 0.3s ease-out;transition:color 0.3s ease-out}
.active{color:#81d7d0 !important}
.openaside{display:none;position:fixed;right:7.5%;top:260px;}
.openaside a{display:block;color:#fff;border:1px solid #fff;-webkit-border-radius:5px;border-radius:5px;background:#81d7d0;padding:.2em .55em;}
.openaside a::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f0c9"}
.closeaside{display:none;}
.closeaside a{color:#81d7d0;}
.closeaside a:hover{color: #d4b68e}
.closeaside a::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f0c9"}
@media only screen and (min-width: 1024px){.closeaside{display:block;position:absolute;right:25px;top:22px}
}#asidepart{background:#fafafa;margin:1em 0 0;padding:.5em 2% 1em;}
@media only screen and (min-width: 1024px){#asidepart{position:relative;float:left;width:18%;margin:2em 0 0 3%}
}.asidetitle{font-size:1.1em;color: #d4b68e;padding:0 0 .3125em 0;border-bottom:.1875em solid #ccc;}
.asidetitle a{color: #d4b68e;}
.asidetitle a:hover{color:#81d7d0;-webkit-transition:color 0.5s;-moz-transition:color 0.5s;-o-transition:color 0.5s;-ms-transition:color 0.5s;transition:color 0.5s}
@media only screen and (min-width: 768px){.categorieslist{width:45%;float:left;margin:0 5% 0 0}
}@media only screen and (min-width: 1024px){.categorieslist{width:100%;float:none;margin:1em 0 0}
}.categorieslist li{border-bottom:1px solid #ccc;}
.categorieslist li a{display:block;padding:.5em 5%;}
.categorieslist li a:hover{color:#81d7d0}
.tagslist{margin:1em 0 0;}
@media only screen and (min-width: 768px){.tagslist{width:45%;float:left;margin:0 5% 0 0}
}@media only screen and (min-width: 1024px){.tagslist{width:100%;float:none;margin:1em 0 0}
}.tagslist ul{padding:.5em 0}
.tagslist ul li{float:left;}
.tagslist ul li a{display:block;margin:.3125em;padding:.125em .3125em;background:#dbdbdb;}
.tagslist ul li a:hover{color:#81d7d0;background:#e6e6e6}
.rsspart{background:#81d7d0;width:100%;}
@media only screen and (min-width: 768px){.rsspart{float:left;width:45%;margin:0 5% 0 0}
}@media only screen and (min-width: 1024px){.rsspart{width:100%;float:none;margin:1em 0 0}
}.rsspart a{color:#fff;display:block;padding:.625em 0;text-align:center;}
.rsspart a:hover{color:#81d7d0;background:#fafafa}
.rsspart a::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding-right:.5em;content:"\f09e"}
@media only screen and (min-width: 768px){.archiveslist{width:45%;float:left;margin:0 5% 0 0}
}@media only screen and (min-width: 1024px){.archiveslist{width:100%;float:none;margin:1em 0 0}
}.archiveslist li{font-size:.8em;line-height:2em;}
.archiveslist li a{padding:.5em;}
.archiveslist li a:hover{color:#81d7d0;-webkit-transition:color 0.25s;-moz-transition:color 0.25s;-o-transition:color 0.25s;-ms-transition:color 0.25s;transition:color 0.25s}
.archiveslist .archive-list-count:before{content:"("}
.archiveslist .archive-list-count:after{content:")"}
.archive-list{padding:.5em 0}
.archive-float ul{padding:0}
.archive-float li{float:left;margin:.3em;}
@media only screen and (min-width: 1024px){.archive-float li{float:none}
}@media only screen and (min-width: 768px){.tagcloudlist{width:45%;float:left;margin:0 5% 0 0}
}@media only screen and (min-width: 1024px){.tagcloudlist{width:100%;float:none;margin:1em 0 0}
}.tagcloudlist .tagcloudlist a{padding:.2em;display:block;float:left;}
.tagcloudlist .tagcloudlist a:hover{color:#81d7d0;-webkit-transition:color 0.25s;-moz-transition:color 0.25s;-o-transition:color 0.25s;-ms-transition:color 0.25s;transition:color 0.25s}
.linkslist{margin-top:.5em;}
@media only screen and (min-width: 768px){.linkslist{width:45%;float:left;margin:0 5% 0 0}
}@media only screen and (min-width: 1024px){.linkslist{width:100%;float:none;margin:1em 0 0}
}.linkslist ul{padding:.5em 0;}
.linkslist ul a{font-size:1em;line-height:1.5;display:block;padding:0 3%;}
.linkslist ul a:hover{color:#81d7d0;-webkit-transition:color 0.25s;-moz-transition:color 0.25s;-o-transition:color 0.25s;-ms-transition:color 0.25s;transition:color 0.25s}
footer{margin-top:1em;background:#1f1f1f;padding:0 2% .5em}
#footer{width:95%;margin:0 auto;overflow:hidden;position:relative;}
#footer .line{width:100%;height:14em;margin:0 auto;}
@media only screen and (min-width: 768px){#footer .line{width:10em;float:left;position:relative}
}#footer .line span{display:block;width:.5em;height:6.25em;border-right:.125em solid #fff;margin:0 auto;}
@media only screen and (min-width: 768px){#footer .line span{position:absolute;left:3em;margin:0 0 1.5em}
}.author{width:6.875em;height:6.875em;margin:0 auto;background:no-repeat url("data:image/jpeg;base64,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") left top;-webkit-background-size:6.875em 6.875em;-moz-background-size:6.875em 6.875em;background-size:6.875em 6.875em;-webkit-border-radius:3.4375em;border-radius:3.4375em;-webkit-transition:-webkit-transform 2s ease-out;-moz-transition:-moz-transform 2s ease-out;-o-transition:-o-transform 2s ease-out;-ms-transition:-ms-transform 2s ease-out;transition:transform 2s ease-out;}
.author:hover{-webkit-transform:rotateZ(360deg);-moz-transform:rotateZ(360deg);-o-transform:rotateZ(360deg);-ms-transform:rotateZ(360deg);transform:rotateZ(360deg)}
@media only screen and (min-width: 768px){.author{position:absolute;top:6em;margin:0 0 1.5em}
}.info{font-family:"covered_by_your_graceregular";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size:150%;line-height:1.3em;width:90%;margin:0 auto;color:#fff;}
@media only screen and (min-width: 768px){.info{margin:2.5em 0 2em 0;float:left;width:75%}
}.social-font{width:100%;margin:0 auto;float:left;padding-left:3%;}
@media only screen and (min-width: 568px){.social-font{padding-left:20%}
}@media only screen and (min-width: 768px){.social-font{width:18em;position:absolute;right:-3em;top:3em}
}.social-font a{float:left;display:block;width:14%;color:#fff;font-size:180%;padding:.5em;}
@media only screen and (min-width: 1024px){.social-font a{padding:.3em}
}.social-font a:hover:before{color: #d4b68e}
.social-font a[title="weibo"]::before,.social-font a[title="twitter"]::before,.social-font a[title="github"]::before,.social-font a[title="facebook"]::before{font-family:"FontAwesome";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.social-font a[title="weibo"]::before{content:"\f18a"}
.social-font a[title="twitter"]::before{content:"\f099"}
.social-font a[title="github"]::before{content:"\f09b"}
.social-font a[title="facebook"]::before{content:"\f09a"}
.copyright{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:"covered_by_your_graceregular";width:100%;color:#fff;text-align:center;}
@media only screen and (min-width: 768px){.copyright{float:left}
}.copyright a{color:#fff;}
.copyright a:hover{color: #d4b68e}
.article-content pre,.article-content .highlight{background:#1d1f21;margin:.5em 0;padding:1em 2%;overflow:auto;color:#c5c8c6;line-height:1.5;font-size:100%}
.article-content .highlight .gutter pre,.article-content .gist .gist-file .gist-data .line-numbers{color:#666;font-size:.85em;line-height:1.5;font-size:100%}
.article-content pre{font-family:Monaco,Menlo,Consolas,Courier New,monospace;}
.article-content pre code{background:none;text-shadow:none;padding:0}
.article-content .highlight pre{border:none;margin:0;padding:0}
.article-content .highlight table{margin:0;width:auto}
.article-content .highlight td{border:none;padding:0}
.article-content .highlight figcaption{zoom:1;font-size:.85em;text-align:left;color:#969896;line-height:1em;padding:.5em 0;margin-bottom:.5em;}
.article-content .highlight figcaption:before,.article-content .highlight figcaption:after{content:"";display:table}
.article-content .highlight figcaption:after{clear:both}
.article-content .highlight figcaption a{float:right}
.article-content .highlight .gutter pre{text-align:right;padding-right:1.5em}
.article-content .gist{margin:.5em 0;background:#1d1f21;padding:1em 2%;}
.article-content .gist .gist-file{border:none;font-family:Monaco,Menlo,Consolas,Courier New,monospace;margin:0;}
.article-content .gist .gist-file .gist-data{background:none;border:none;}
.article-content .gist .gist-file .gist-data .line-numbers{background:none;border:none;padding:0 1.5em 0 0}
.article-content .gist .gist-file .gist-data .line-data{padding:0 !important}
.article-content .gist .gist-file .highlight{margin:0;padding:0;border:none}
.article-content .gist .gist-file .gist-meta{background:#1d1f21;color:#969896;font:.85em "Georgia",serif;padding:0;margin-top:1em;text-shadow:none;}
.article-content .gist .gist-file .gist-meta a{color: #d4b68e;font-weight:normal;}
.article-content .gist .gist-file .gist-meta a:hover{color:#81d7d0}
pre .comment{color:#969896}
pre .title,pre .variable,pre .attribute,pre .tag,pre .regexp,pre .ruby .constant,pre .tag .title,pre .pi,pre .doctype,pre .id,pre .class,pre .pseudo{color:#c66}
pre .number,pre .preprocessor,pre .pragma,pre .built_in,pre .literal,pre .params,pre .constant{color:#de935f}
pre .class .title,pre .rules .attribute{color:#f0c674}
pre .string,pre .value,pre .inheritance,pre .header,pre .symbol,pre .cdata{color:#b5bd68}
pre .css .hexcolor{color:#8abeb7}
pre .function,pre .function .title,pre .decorator,pre .python .title,pre .title .keyword,pre .perl .sub,pre .javascript .title,pre .coffeescript .title{color:#81a2be}
pre .keyword,pre .javascript .function{color:#b294bb}
pre .coffeescript .javascript,pre .javascript .xml,pre .tex .formula,pre .xml .javascript,pre .xml .vbscript,pre .xml .css,pre .xml .cdata{opacity:.5;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";filter:alpha(opacity=50)}
.ds-highlight{color: #d4b68e !important;}
.ds-highlight:hover{color:#81d7d0 !important}
.ds-avatar{background:#fafafa !important;}
.ds-avatar img{width:54px !important;height:54px !important;border:2px solid #dbdbdb !important;-webkit-border-radius:27px !important;border-radius:27px !important;-webkit-transition:-webkit-transform 0.5s ease-out !important;-moz-transition:-moz-transform 0.5s ease-out !important;-o-transition:-o-transform 0.5s ease-out !important;-ms-transition:-ms-transform 0.5s ease-out !important;transition:transform 0.5s ease-out !important;}
.ds-avatar img:hover{-webkit-transform:rotateZ(360deg) !important;-moz-transform:rotateZ(360deg) !important;-o-transform:rotateZ(360deg) !important;-ms-transform:rotateZ(360deg) !important;transform:rotateZ(360deg) !important;-webkit-box-shadow:inset 0 -1px 0 rgba(51,51,51,0.2) sf !important;box-shadow:inset 0 -1px 0 rgba(51,51,51,0.2) sf !important}
.ds-children .ds-avatar img{width:30px !important;height:30px !important;-webkit-border-radius:15px !important;border-radius:15px !important;-webkit-transition:-webkit-transform 0.5s ease-out !important;-moz-transition:-moz-transform 0.5s ease-out !important;-o-transition:-o-transform 0.5s ease-out !important;-ms-transition:-ms-transform 0.5s ease-out !important;transition:transform 0.5s ease-out !important;border:1px solid #dbdbdb !important;}
.ds-children .ds-avatar img:hover{-webkit-transform:rotateZ(360deg) !important;-moz-transform:rotateZ(360deg) !important;-o-transform:rotateZ(360deg) !important;-ms-transform:rotateZ(360deg) !important;transform:rotateZ(360deg) !important;-webkit-box-shadow:inset 0 -1px 0 rgba(51,51,51,0.2) sf !important;box-shadow:inset 0 -1px 0 rgba(51,51,51,0.2) sf !important}
.ds-replybox img{width:30px !important;height:30px !important}
.ds-comment-body{padding-left:80px !important}
.ds-children .ds-comment-body{padding-left:60px !important}
.ds-post{border-top:none !important;margin-top:.5em !important}
.ds-comments{padding-bottom:1em !important}
textarea{color:#817c7c !important;background:#fff !important;}
textarea::-webkit-input-placeholder{color:#817c7c !important}
textarea::-moz-placeholder{color:#817c7c !important}
.article-gallery{background:#fafafa;position:relative}
.article-gallery-photos{position:relative;overflow:hidden}
.article-gallery-img{display:none;max-width:100%;imgdisplay:block;max-width:100%;margin:0 auto}
.article-gallery-img:first-child{display:block}
.article-gallery-img .loaded{position:absolute;display:block}
.well-lg {
    padding: 24px;
}
.well {
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) inset;
    margin-bottom: 20px;
    min-height: 20px;
    padding: 19px;
}
textarea.form-control {

    height: auto;
}
.form-control {
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    vertical-align: middle;
    width: 100%;
}
input, button, select, textarea {
    font-family: inherit;
    line-height: inherit;
}
.form-control::-moz-placeholder {
    color: #777;
    opacity: 1;
}
button, input, optgroup, select, textarea {
    color: inherit;
    margin: 0;
}
textarea {
    overflow: auto;
}
.pull-right {
    float: right !important;
}
.btn {
    -moz-user-select: none;
    background-image: none;
    border: 1px solid transparent;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857;
    margin-bottom: 0;
    padding: 6px 12px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.btn-moment {
	background:#81d7d0;
	color:#fff;
}

.btn-login{
	background:#81d7d0;
	color:#fff;
	width:100%;
}

.alert-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}
.alert {
    border: 1px solid transparent;
    border-radius: 4px;
    margin-bottom: 20px;
    padding: 15px;
}
.alert-dismissable .close, .alert-dismissible .close {
    color: inherit;
    position: relative;
}
button.close {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 0 none;
    cursor: pointer;
    padding: 0;
}
.close {
    color: #000;
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    opacity: 0.2;
    text-shadow: 0 1px 0 #fff;
}
.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
}

.typecho-login {
   	margin: 2em auto;
    position: relative;
    background: none repeat scroll 0 0 #fafafa;
    padding: 0.5em 2% 1em;
    text-align: center;
    vertical-align: middle;
    width: 280px;
}
.input{
	margin:15px auto;	
}

input.text-l, textarea.text-l {
    font-size: 1.14286em;
    padding: 10px;
}

input[type="text"], input[type="password"], input[type="email"], textarea {
    background: none repeat scroll 0 0 #fff;
    border: 1px solid #d9d9d6;
    box-sizing: border-box;
    padding: 7px;
}

.w-100 {
    width: 100%;
}
.checkbox{
	cursor: pointer;	
}

.typecho-psot{
   	margin: 2em auto;
    position: relative;
    background: none repeat scroll 0 0 #fafafa;
    padding: 0.5em 2% 1em;
    vertical-align: middle;
}
.btn-primary{
	 color: #d4b68e;
}

select[multiple], select[size] {
    height: auto;
}
select {
    background-color: #fff;
    border: 1px solid #ccc;
    width: 220px;
}

.input-append, .input-prepend {
    display: inline-block;
    font-size: 0;
    margin-bottom: 10px;
    vertical-align: middle;
    white-space: nowrap;
}
.input-prepend .add-on, .input-prepend .btn {
    margin-right: -1px;
}
.input-append .add-on, .input-prepend .add-on {
    background-color: #eee;
    border: 1px solid #ccc;
    display: inline-block;
    font-size: 14px;
    font-weight: normal;
    min-width: 16px;
    padding: 4px 5px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    width: auto;
}
.input-prepend input{
    margin-bottom: 0;
    position: relative;
    vertical-align: top;
    margin-left: 0;
    width: 156px;
    float: none;
    height: 31px;
}
.error{
	color:#bd362f;
}
a,.page a{color:#d4b68e;}
a:hover,.page a:hover{color:#81d7d0}
select option{
	font-size:14px;
	margin:1px auto;
}
@font-face {
  font-family: 'iconfont';
  src: url('http://at.alicdn.com/t/font_1406947555_112288.eot'); /* IE9*/
  src: url('http://at.alicdn.com/t/font_1406947555_112288.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
  url('http://at.alicdn.com/t/font_1406947555_112288.woff') format('woff'), /* chrome、firefox */
  url('http://at.alicdn.com/t/font_1406947555_112288.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url('http://at.alicdn.com/t/font_1406947555_112288.svg#iconfont') format('svg'); /* iOS 4.1- */
}
.iconfont{
    font-family:"iconfont" !important;
    font-size:22px;font-style:normal;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;}