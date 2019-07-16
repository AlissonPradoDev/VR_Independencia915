<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <title>Independ&#234;ncia 915</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="mobile-web-app-capable" content="yes" />

        <!-- Metadados para OpenGraph Alisson Prado -->
        <meta property="og:title" content="Tour Virtual 360º - Independência 915"/>
        <meta property="og:url" content="http://360app.com.br/independencia915/"/>
        <meta name="description" content="No Independência 915 você tem o casamento perfeito entre elegância e a comodidade."/>
        <meta property="og:image" content="https://360app.com.br/independencia915/capa.jpg"/>

        <style type="text/css" title="Default">
            body, div, h1, h2, h3, span, p {
                font-family: Verdana,Arial,Helvetica,sans-serif;
            }
            /* fullscreen */
            html {
                height:100%;
            }
            body {
                height:100%;
                margin: 0px;
                overflow:hidden; /* disable scrollbars */
                font-size: 10pt;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0); /* remove highlight on tab for iOS/Android */
            }
            /* fix for scroll bars on webkit & >=Mac OS X Lion */ 
            ::-webkit-scrollbar {
                background-color: rgba(0,0,0,0.5);
                width: 0.75em;
            }
            ::-webkit-scrollbar-thumb {
                background-color:  rgba(255,255,255,0.5);
            }
        </style>	
    </head>
    <body>
        <!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - -->
        <script type="text/javascript" src="pano2vr_player.js">
        </script>
        <script type="text/javascript" src="skin.js">
        </script>
        <div id="container" style="width:100%;height:100%;overflow:hidden;">
            <br>Independência 915...<br><br>
        </div>
        <script type="text/javascript">

            // create the panorama player with the container
            pano = new pano2vrPlayer("container");
            // add the skin object
            skin = new pano2vrSkin(pano);
            // load the configuration

            window.addEventListener("load", function () {
                pano.readConfigUrlAsync("pano.xml");
            });
        </script>
        <noscript>
        <p><b>Please enable Javascript!</b></p>
        </noscript>
        <!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - --> 
        <!-- Hack needed to hide the url bar on iOS 9, iPhone 5s --> 
        <div style="width:1px;height:1px;"></div>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141723182-1"></script>
        <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'UA-141723182-1');
        </script>

    </body>
</html>
