var revapi;

				jQuery(document).ready(function() {

					   revapi = jQuery('.tp-banner').revolution(
						{
							startwidth:1170,
							startheight:500,
							hideThumbs:10,
							fullWidth:"off",
							fullScreen:"on",
                            onHoverStop:"off",
                            navigationType:"none",
         navigationArrows:"solo",
         navigationStyle:"round",
 
         navigationHAlign:"center",
         navigationVAlign:"bottom",
         navigationHOffset:30,
         navigationVOffset:30,
                            stopAfterLoops:1,
							fullScreenOffsetContainer: ""

						});

				});	//ready