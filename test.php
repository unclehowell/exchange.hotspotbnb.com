<!-- Add jQuery library -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/lib/jquery-1.10.1.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
   $(document).ready(function() {
    	/*
    	 *  Simple image gallery. Uses default settings
    	 */
    
    	$('.fancybox').fancybox();
    
    	/*
    	 *  Different effects
    	 */
    
    	// Change title type, overlay closing speed
    	$(".fancybox-effects-a").fancybox({
    		helpers: {
    			title : {
    				type : 'outside'
    			},
    			overlay : {
    				speedOut : 0
    			}
    		}
    	});
    
    	// Disable opening and closing animations, change title type
    	$(".fancybox-effects-b").fancybox({
    		openEffect  : 'none',
    		closeEffect	: 'none',
    
    		helpers : {
    			title : {
    				type : 'over'
    			}
    		}
    	});
    
    	
    
    	// Remove padding, set opening and closing animations, close if clicked and disable overlay
    	$(".fancybox-effects-d").fancybox({
    		padding: 0,
    
    		openEffect : 'elastic',
    		openSpeed  : 150,
    
    		closeEffect : 'elastic',
    		closeSpeed  : 150,
    
    		closeClick : true,
    
    		helpers : {
    			overlay : null
    		}
    	});
    
    	/*
    	 *  Button helper. Disable animations, hide close button, change title type and content
    	 */
    
    	$('.fancybox-buttons').fancybox({
    		openEffect  : 'none',
    		closeEffect : 'none',
    
    		prevEffect : 'none',
    		nextEffect : 'none',
    
    		closeBtn  : false,
    
    		helpers : {
    			title : {
    				type : 'inside'
    			},
    			buttons	: {}
    		},
    
    		afterLoad : function() {
    			this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
    		}
    	});
    
    
    	/*
    	 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
    	 */
    
    	$('.fancybox-thumbs').fancybox({
    		prevEffect : 'none',
    		nextEffect : 'none',
    
    		closeBtn  : false,
    		arrows    : false,
    		nextClick : true,
    
    		helpers : {
    			thumbs : {
    				width  : 50,
    				height : 50
    			}
    		}
    	});
    
    			
    
    	$("#fancybox-manual-b").click(function() {
    		$.fancybox.open({
    			href : 'iframe.html',
    			type : 'iframe',
    			padding : 5
    		});
    	});
    
    	$("#fancybox-manual-c").click(function() {
    		$.fancybox.open([
    			 {
    				href : '2_b.jpg',
    				title : '2nd title'
    			},
    		], {
    			helpers : {
    				thumbs : {
    					width: 75,
    					height: 50
    				}
    			}
    		});
    	});
    
    
    });

</script>

<style type="text/css">
   .fancybox-custom .fancybox-skin {
   box-shadow: 0 0 50px #222;
   }
</style>
<!-- Add jQuery library -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/lib/jquery-1.10.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link href="css/mystyledesign.css" rel="stylesheet" type="text/css" />



   <style type="text/css">
               .fancybox-custom .fancybox-skin {
               box-shadow: 0 0 0 #222;
               }
               element.style {height:400px;}
               iframe  {height:400px;}
            </style>
            <script type="text/javascript">
               $(document).ready(function() {
               	/*
               	 *  Simple image gallery. Uses default settings
               	 */
               
               	$(".fancybox").fancybox({
                 openEffect  : 'none',
                 closeEffect : 'none',
                 iframe : {
                     preload: false
                 }
               });
               
            </script>


  <button class="fancybox" data-fancybox-type="iframe" href="id.php">Id</button>







