<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{% if post.title %}{{ post.title }}{% elsif page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>
    <meta name="description" content="{{ site.description }}">
    {% if page.url == "/404.html" %}
    <meta http-equiv="refresh" content="5; url=/">
    {% endif %}

    <link rel="canonical" href="{{ page.url | replace:'index.html','' | prepend: site.baseurl | prepend: site.url }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ site.baseurl }}/css/foundation.css" />
    <link rel="stylesheet" href="{{ site.baseurl }}/css/dol-style.css" />
    <link rel="stylesheet" href="{{ site.baseurl }}/css/content.css" />
    <link rel="stylesheet" href="{{ site.baseurl }}/css/post.css" />
    <link rel="stylesheet" href="{{ site.baseurl }}/css/syntax.css" />
    <link rel="stylesheet" href="{{ site.baseurl }}/css/mobile.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
    <script id="_fed_an_ua_tag" src="{{ site.baseurl }}/js/federated-analytics-developer.js?agency=DOL&amp;subagency=DEVELOPER"></script>
    <script src="{{ site.baseurl }}/js/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
    <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
	<style>
	h2 {
		font-weight: bold;
		font-size: 1.333em;
		padding: .5em;
	}		
	img-icon{
		margin: .75em 0;
	}
	
</style>
</head>

  <body>

<header class="site-header">
    <div class="row wrapper">
        <!--Start Banner -->
        <a id="top"></a>

        <div class="large-12 columns top-header" role="banner" style="position:relative;">
		            			
  			<a href="http://usdepartmentoflabor.github.io/Quarry/"> <span class="brand-white hide-for-small left"></span>

				<h1 class="header-logo-type">
			   <span class="header-title">QUARRY</span> <br>UNITED STATES DEPARTMENT OF LABOR
			   </h1>
			</a>
			</div>
            <div>
			<a href="https://github.com/USDepartmentofLabor/Quarry"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png" class = "hide-for-small"></a>
		</div>
		</div>
    </div>
</header>	
	<div class="row">
	        <h1 class="post_title_dataset">Get Started</h1>

        <div class="large-4 columns text-center">
       	  <img alt="Requirements for Quarry" class="img-icon" src="{{ site.baseurl }}/img/Computer.png" />
          <h2><strong>Make sure you have what you need to run Quarry</strong></h2>
          <a href="https://github.com/USDepartmentofLabor/Quarry/blob/master/README.md" class="button "><strong>Requirements</strong></a>
        </div>
        
        <div class="large-4 columns text-center">
          <img alt="Download Quarry" class="img-icon" src="{{ site.baseurl }}/img/Download.png"  />
          <h2><strong>Everything check out? <br>Great.</strong></h2>
          <a href="https://github.com/USDepartmentofLabor/Quarry" class="button "><strong>Download</strong></a>
        </div>
        
        <div class="large-4 columns text-center">
			<img alt="Run Quarry" class="img-icon" src="{{ site.baseurl }}/img/Install.png"  />
          <h2><strong>Finally, you can now <br> begin</strong></h2>
          <a href="https://github.com/USDepartmentofLabor/Quarry/blob/master/README.md" class="button "><strong>Install</strong></a>
      
        </div>

    </div>

   <footer class=" site-footer">

    <!-- Start Footer One -->
    <div role="contentinfo">
        <div class="row footer-one">
            <div class="large-5 columns hide-for-small"> <a href="http://dol.gov"> <img src="{{ site.baseurl }}/img/dol-logo-white.png" alt="U.S.Department of Labor"/> <span class="header-logo-type-white">UNITED STATES <br>DEPARTMENT OF LABOR </span> </a> 
			</div>
            <div class="large-3 columns">
                <p class="footer-info1 a-bottom"><a href="http://www.dol.gov/dol/contact/">Contact Us </a></p>
            </div>
            <div class="large-4 columns">
                <div class="social-block-btm mt">
                    <a href="http://www.facebook.com/departmentoflabor"  class="sm-facebook">Facebook</a>
                    <a href="http://twitter.com/usdol" class="sm-twitter">Twitter</a>
                    <a href="http://www.instagram.com/USDOL" class="sm-instagram">DOL Instagram</a>
                    <a href="https://plus.google.com/+USDOL/posts" class="sm-gplus">Google Plus</a>
                    <a href="http://www.linkedin.com/company/u.s.-department-of-labor" class="sm-in">LinkedIn</a>
                    <a href="http://www.dol.gov/rss/" class="sm-rss-btm">RSS</a>
                    <a href="javascript:window.open('https://public.govdelivery.com/accounts/USDOL/subscriber/new','Popup','width=800,height=500,toolbar=no,scrollbars=yes,resizable=yes'); void('');"
                       ONCLICK="window.status='Subscribe'; return true"
                       ONMOUSEOVER="window.status='Subscribe'; return true"
                       ONMOUSEOUT="window.status=''; return true" class="sm-email-btm">Email</a>
                </div>
            </div>
        </div>
        <!-- End Footer One -->

        <!-- Start Footer Two -->
        <div class="row footer-two">
            <div class="large-3 columns line-b-peach">
                <p>200 Constitution Ave. NW<br>
                    Washington DC 20210<br>
                    <a href="tel:1-866-487-2365">1-866-4-USA-DOL</a><br>
                    <a href="tel:1-866-487-2365">1-866-487-2365</a><br>
                    <a href="http://www.dol.gov/dol/contact/contact-phonecallcenter.htm">TTY</a><br>
                    <a href="http://www.dol.gov/">www.dol.gov </a> </p>
            </div>
            <div class="large-3 columns  line-b-peach">
                <p><strong>ABOUT THE SITE</strong></p>
                <ul role="navigation">
                    <li><a href="http://www.dol.gov/dol/foia/">Freedom of Information Act</a></li>
                    <li><a href="http://www.dol.gov/dol/privacynotice.htm">Privacy &amp; Security Statement</a></li>
                    <li><a href="http://www.dol.gov/dol/disclaim.htm">Disclaimers</a></li>
                    <li><a href="http://www.dol.gov/dol/aboutdol/website-policies.htm">Important Web Site Notices</a></li>
                    <li><a href="http://www.dol.gov/dol/aboutdol/plug-ins.htm">Plug-ins Used by DOL</a></li>
                    <li><a href="http://www.dol.gov/rss/">RSS Feeds from DOL</a></li>
                    <li><a href="http://www.dol.gov/dol/aboutdol/accessibility.htm">Accessibility Statement</a></li>
                </ul>
            </div>
            <div class="large-3 columns end line-b-peach">
                <p><strong>QUARRY</strong></p>
                <ul role="navigation">
                    <li><a href="https://opendata.stackexchange.com/questions/ask?tags=labor">Ask Questions</a></li>
                    <li><a href="https://github.com/USDepartmentofLabor/Quarry/issues/new">Report Bugs</a></li>
                    <li><a href="https://github.com/USDepartmentofLabor/Quarry/tree/gh-pages">Fork this site on Github</a></li>
                </ul>
            </div>

        </div>
        <!-- End Footer Two -->
    </div>

</footer>
<script src="{{ site.baseurl }}/js/vendor/jquery.js"></script>
<script src="{{ site.baseurl }}/js/vendor/fastclick.js"></script>
<script src="{{ site.baseurl }}/js/foundation.min.js"></script>

<script>
    $(document).foundation();
</script>
<!-- Never remove this: Resolved IE 8 issue on grids of the CSS Frameworks-->
<script src="{{ site.baseurl }}/js/rem.min.js" type="text/javascript"></script>
<!-- Never remove above line -->
  </body>

</html>
