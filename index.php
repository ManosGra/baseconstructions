<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="initial-scale = 1.0, user-scalable = no">
    <meta name="pinterest"                  content="nohover" />
    <meta http-equiv="imagetoolbar"         content="no">
    <meta http-equiv="pragma"               content="no-cache" />
    <meta name="MSSmartTagsPreventParsing"  content="true"/>
    <meta property="og:type"        content="website" />

    <meta property="og:title"       content="Base Constructions"/>
    <meta property="og:image"       content="https://www.in-the-loop.gr/share.jpg"/>
    <meta property="og:description" content="Base Constructions"/>
    <meta property="og:url"         content="https://www.in-the-loop.gr"/>
    <meta name="description"        content="Base Constructions | WHATEVER GOOD THINGS WE BUILD, END UP BUILDING US " />
    <meta name="author"             content="The Smiling Hippo | https://www.thesmilinghippo.com" />
    <meta name="copyright"          content="Base Constructions @ www.in-the-loop.gr" />
    <meta name="owner"              content="Base Constructions @ www.in-the-loop.gr" />
    <meta name="robots"             content="all" >

    
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f97316">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#35ad35">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.cdnfonts.com/css/asty-cf-std" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="typography.scss">
    <link rel="stylesheet" href="main.scss">
    <link rel="stylesheet" href="buttons.scss">
    <link rel="stylesheet" href="header/header.scss">
    <link rel="stylesheet" href="hero/hero.scss">
    <link rel="stylesheet" href="realestate/realestate.scss">
    <link rel="stylesheet" href="showcase/showcase.scss">
    <link rel="stylesheet" href="investement/investement.scss">
    <link rel="stylesheet" href="footer/footer.scss">
    <link rel="stylesheet" href="contact/contact.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<script type="text/javascript" async=true>
(function() {
  var host = window.location.hostname;
  var element = document.createElement('script');
  var firstScript = document.getElementsByTagName('script')[0];
  var url = 'https://cmp.quantcast.com'
    .concat('/choice/', 'TgCAh7ZHRacJx', '/', host, '/choice.js?tag_version=V2');
  var uspTries = 0;
  var uspTriesLimit = 3;
  element.async = true;
  element.type = 'text/javascript';
  element.src = url;

  firstScript.parentNode.insertBefore(element, firstScript);

  function makeStub() {
    var TCF_LOCATOR_NAME = '__tcfapiLocator';
    var queue = [];
    var win = window;
    var cmpFrame;

    function addFrame() {
      var doc = win.document;
      var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);

      if (!otherCMP) {
        if (doc.body) {
          var iframe = doc.createElement('iframe');

          iframe.style.cssText = 'display:none';
          iframe.name = TCF_LOCATOR_NAME;
          doc.body.appendChild(iframe);
        } else {
          setTimeout(addFrame, 5);
        }
      }
      return !otherCMP;
    }

    function tcfAPIHandler() {
      var gdprApplies;
      var args = arguments;

      if (!args.length) {
        return queue;
      } else if (args[0] === 'setGdprApplies') {
        if (
          args.length > 3 &&
          args[2] === 2 &&
          typeof args[3] === 'boolean'
        ) {
          gdprApplies = args[3];
          if (typeof args[2] === 'function') {
            args[2]('set', true);
          }
        }
      } else if (args[0] === 'ping') {
        var retr = {
          gdprApplies: gdprApplies,
          cmpLoaded: false,
          cmpStatus: 'stub'
        };

        if (typeof args[2] === 'function') {
          args[2](retr);
        }
      } else {
        if(args[0] === 'init' && typeof args[3] === 'object') {
          args[3] = Object.assign(args[3], { tag_version: 'V2' });
        }
        queue.push(args);
      }
    }

    function postMessageEventHandler(event) {
      var msgIsString = typeof event.data === 'string';
      var json = {};

      try {
        if (msgIsString) {
          json = JSON.parse(event.data);
        } else {
          json = event.data;
        }
      } catch (ignore) {}

      var payload = json.__tcfapiCall;

      if (payload) {
        window.__tcfapi(
          payload.command,
          payload.version,
          function(retValue, success) {
            var returnMsg = {
              __tcfapiReturn: {
                returnValue: retValue,
                success: success,
                callId: payload.callId
              }
            };
            if (msgIsString) {
              returnMsg = JSON.stringify(returnMsg);
            }
            if (event && event.source && event.source.postMessage) {
              event.source.postMessage(returnMsg, '*');
            }
          },
          payload.parameter
        );
      }
    }

    while (win) {
      try {
        if (win.frames[TCF_LOCATOR_NAME]) {
          cmpFrame = win;
          break;
        }
      } catch (ignore) {}

      if (win === window.top) {
        break;
      }
      win = win.parent;
    }
    if (!cmpFrame) {
      addFrame();
      win.__tcfapi = tcfAPIHandler;
      win.addEventListener('message', postMessageEventHandler, false);
    }
  };

  makeStub();

  var uspStubFunction = function() {
    var arg = arguments;
    if (typeof window.__uspapi !== uspStubFunction) {
      setTimeout(function() {
        if (typeof window.__uspapi !== 'undefined') {
          window.__uspapi.apply(window.__uspapi, arg);
        }
      }, 500);
    }
  };

  var checkIfUspIsReady = function() {
    uspTries++;
    if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
      console.warn('USP is not accessible');
    } else {
      clearInterval(uspInterval);
    }
  };

  if (typeof window.__uspapi === 'undefined') {
    window.__uspapi = uspStubFunction;
    var uspInterval = setInterval(checkIfUspIsReady, 6000);
  }
})();
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-DP95JL98WG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DP95JL98WG');
</script>

</head>

<body>

    <header class="">
        <?php include 'header/header.php' ?>
    </header>

    <div class="hero">
        <?php include 'hero/hero.php' ?>
    </div>

    <section class="realestate position-relative" id="realestate">
        <?php include 'realestate/realestate.php' ?>
    </section>

    <section class="showcase position-relative bg-black">
        <?php include 'showcase/showcase.php' ?>
    </section>

    <section class="investement position-relative" id="investment">
        <?php include 'investement/investement.php' ?>
    </section>

    <section class="ourmission position-relative">
        <?php include 'ourmission/ourmission.php' ?>
    </section>

    <footer class="footer">
        <?php include 'footer/footer.php' ?>
    </footer>

    <div class="contact">
        <?php include 'contact/contactform.php' ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="main.js/main.js"></script>
    <script src="js/libraries/waypoints/lib/jquery.waypoints.min.js"></script>

</body>

</html>