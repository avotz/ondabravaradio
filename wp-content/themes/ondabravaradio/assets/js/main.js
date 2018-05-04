;(function($){

  var isMobile = {
          Android: function() {
              return navigator.userAgent.match(/Android/i);
          },
          BlackBerry: function() {
              return navigator.userAgent.match(/BlackBerry/i);
          },
          iOS: function() {
              return navigator.userAgent.match(/iPhone|iPad|iPod/i);
          },
          Opera: function() {
              return navigator.userAgent.match(/Opera Mini/i);
          },
          Windows: function() {
              return navigator.userAgent.match(/IEMobile/i);
          },
          any: function() {
              return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
          }
      };

    // if( isMobile.any() ) {
        
    //      // $('.player-mobile').css('display','inline-block');
    //       $('#rtmp-player ').hide();           
    //   }else{
    //       //$('.player-mobile').css('display','none');
    //       $('#rtmp-player ').show();
    //        var audio = $(".player-mobile")[0];
          
    //         audio.pause();
    //   }       

  var $btnMenu = $('#btn-menu'),
      $menu = $('.header-menu');
  
  //new WOW().init();

  $btnMenu.on('click', function (e) {
    
      $menu.toggle();

  });

 $menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });



// window.setInterval(function() {
//   var iframe = document.getElementById('iframePlaylist');
//    iframe.src = iframe.src;
// }, 30000);

 /*$.ajax({
      url: 'http://moon.wavestreamer.com:3040/currentsong',
      dataType: 'jsonp'


 }).done(function( msg ) {
    alert( "Data Saved: " + msg );
  });*/
/*$('#playlist').load( "http://moon.wavestreamer.com:3040/currentsong", function() {
  alert( "Load was performed." );
});*/
 

// $('.menu-item-4 a').magnificPopup({
//         type: 'inline',
//         midClick: true,
//         removalDelay: 500, //delay removal by X to allow out-animation
//         callbacks: {
//             beforeOpen: function() {

//                 this.st.mainClass = 'mfp-zoom-out';
//                 $('body').addClass('mfp-open');
//             },
//             beforeClose: function() {

               
//                 $('body').removeClass('mfp-open');
//             }

//         }

       
//     });

    $('.contact-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });


 $(".owl-carousel").owlCarousel({
      items : 1,
      autoplay : true,
      loop : true,
      /*nav : true,
      navText : ['','']*/
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
 });

 // SMOOTH ANCHOR SCROLLING
    var $root = jQuery('html, body');
    jQuery('a.anchor').click(function(e) {
        var href = jQuery.attr(this, 'href');

        if (typeof(jQuery(href)) != 'undefined' && jQuery(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }
           
            if (anchor.length > 0) {
                /*console.log(jQuery(anchor).offset().top);
                console.log(anchor);*/


                $root.animate({
                    scrollTop: jQuery(anchor).offset().top-80
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }else{ // si no esta la seccion se va al home
           window.location.replace('/' + href);
        }
    });

          /*soundManager.setup({
            url: '/path/to/swf-files/',
            onready: function() {
              var mySound = soundManager.createSound({
                id: 'aSound',
                type: "audio/aac",
                url: 'http://majestic.wavestreamer.com:7893/;'
              });
              mySound.play();
            },
            ontimeout: function() {
              // Hrmm, SM2 could not start. Missing SWF? Flash blocked? Show an error, etc.?
            }
          });*/

            //   window.onloadRetry = 0;
            //   window.soundManager = new SoundManager();
            //   window.volume = 100;

            //   // Setup SoundManager
              
            //   soundManager.setup({
            //     debugMode: false,       flashLoadTimeout: 1000,       flashVersion: 9,      preferFlash: false,       url: $("#sm-button-container").data("url-static") + "img/swf/",
            //     useHighPerformance: true,       useHTML5Audio: true,      waitForWindowLoad: false,       onready: function() {
            //       soundManager.createSound({
            //         id: "webradio",
            //                   url: [{
            //           type: "audio/aac",
            //           url: "http://167.114.210.232:8221/;"// http://majestic.wavestreamer.com:7893/;"
            //         }],
            //         autoLoad: true,           autoPlay: true,           multiShot: false,           volume: volume,
            //         onconnect: function( bConnect ) {
                    
            //                  setButtonStop();  
                                 
            //         },
            //         onfailure: function() {
            //           setButtonError();           },
            //         onload: function( bSuccess ) {
            //           if ( bSuccess == true ) {
                        

                         
            //                  setButtonStop();  
                         
                             

            //           } else {
            //             if ( window.onloadRetry != 2 ) {
            //               window.onloadRetry++;
            //               soundManager.reboot();              } else {
            //               setButtonError();               }
            //           }

            //         },
            //         onplay: function() {
            //           setButtonPreloader();         }
            //       });
            //     },
            //     ontimeout: function() {
            //       setButtonError();       }
            //   });

            //   // Set the audio controls
            //   $( "#sm-audio-icon" ).unbind( "click" ).on( "click", function(e) {
            //     e.preventDefault();
            //     e.stopPropagation();

            //     if ( $( this ).attr( "data-state" ) == "On" && $( "input[type=range]" ).val() > 0 ) {
            //       document.cookie = "volume_unmute=" + volume + "; path=/";         setButtonMute();        $( "input[type=range]" ).val( 0 ).change();         soundManager.mute( "webradio" );      } else if ( $( this ).attr( "data-state" ) == "Off" || $( "input[type=range]" ).val() === 0 ) {
            //       volume = getCookieValue( "volume_unmute" );         volume = ( $.isNumeric( volume ) && volume > 0 && volume <= 100 ) ? volume : 50;        setButtonUnMute();        $( "input[type='range']" ).val( volume ).change();        soundManager.unmute( "webradio" );      }
            //   });

            //   // Set the play controls
            //   $( ".sm-button" ).bind( "click", function() {
            //     if ( $( this ).attr( "alt" ) == "Flash" ) {
            //       window.open( "https://get.adobe.com/flashplayer/" );
            //     } else if ( $( this ).attr( "alt" ) == $( "#sm-button-container" ).data( "play" ) ) {
            //       setButtonStop();
            //       ( $( "#sm-button-container" ).data( "device-category" ) != "desktop" ) ? soundManager.play( "webradio" ) : soundManager.play( "webradio" );
            //     } else if ( $( this ).attr( "alt" ) == $( "#sm-button-container" ).data( "start" ) ) {
            //       setButtonPreloader();
            //       ( $( "#sm-button-container" ).data( "device-category") != "desktop" ) ? soundManager.play( "webradio" ) : "";
            //     } else if ( $( this ).attr( "alt" ) == $( "#sm-button-container" ).data( "stop" ) ) {
            //       setButtonPlay();
            //       ( $( "#sm-button-container" ).data( "device-category" ) != "desktop" ) ? soundManager.unload( "webradio" ) : soundManager.unload( "webradio" );
            //     }
            //   });

            //   // Kick-start the SoundManager init process?
            //   if ( $( "#sm-button-container" ).data( "flash-mode" ) == "1" && typeof( detectFlash ) === "function" && !detectFlash() ) {
            //     setButtonFlash();
            //   } else {
            //     $( "#sm-button-container" ).data( "device-category" ) == "desktop" ? addVolumeSider() : "";       soundManager.beginDelayedInit();    }


            //   function getCookieValue(t, i) {
            //       return i = document.cookie.match("(^|;)\\s*" + t + "\\s*=\\s*([^;]+)"), i ? i.pop() : ""
            //   }

            //   function detectFlash() {
            //       if (null !== navigator.plugins && navigator.plugins.length > 0 && navigator.plugins["Shockwave Flash"]) return navigator.plugins["Shockwave Flash"] && !0;
            //       if (~navigator.userAgent.toLowerCase().indexOf("webtv")) return !0;
            //       if (~navigator.appVersion.indexOf("MSIE") && !~navigator.userAgent.indexOf("Opera")) try {
            //           return new ActiveXObject("ShockwaveFlash.ShockwaveFlash") && !0
            //       } catch (t) {}
            //       return !1
            //   }

            //   function addVolumeSider() {
            //     volume = parseInt(getCookieValue("volume")), volume = $.isNumeric(volume) && volume >= 0 && volume <= 100 ? volume : 100, $("input[type=range]").attr("value", volume).val(volume).change(), $("input[type=range]").rangeslider({
            //         polyfill: !1,
            //         onInit: function() {
            //             (0 === volume ? setButtonMute : setButtonUnMute)()
            //         }
            //     }).on("input", function() {
            //         volume = parseInt(this.value), document.cookie = "volume=" + volume + "; path=/", (0 === volume ? setButtonMute : setButtonUnMute)(), soundManager.setVolume(volume)
            //     })
            // }

            // function setButtonMute() {
            //     $("#sm-audio-icon").attr("data-state", "Off").attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/audio-off.png")
            // }

            // function setButtonUnMute() {
            //     $("#sm-audio-icon").attr("data-state", "On").attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/audio-on.png")
            // }

            // function setButtonError() {
            //     $(".sm-button").hide().attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/audio-fail.png").attr("alt", $("#sm-button-container").data("error")).attr("id", "sm-button-fail").css({
            //         padding: "22% 24%"
            //     }).show(), ga("send", "event", {
            //         eventCategory: "Player",
            //         eventAction: "Error"
            //     })
            // }

            // function setButtonPreloader() {
            //     $(".sm-button").hide().attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/audio-loading.gif").attr("alt", $("#sm-button-container").data("loading")).attr("id", "sm-button-preloader").css({
            //         padding: "25% 26%"
            //     }).show()
            // }

            // function setButtonPlay() {
            //     $(".sm-button").hide().attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/audio-play.png").delay(200).attr("alt", $("#sm-button-container").data("play")).attr("id", "sm-button-play").css({
            //         padding: "25% 29%"
            //     }).show()
            // }

            // function setButtonStop() {
            //     $(".sm-button").hide().attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/audio-stop.png").delay(200).attr("alt", $("#sm-button-container").data("stop")).attr("id", "sm-button-stop").css({
            //         padding: "26%"
            //     }).show()
            // }

            // function setButtonFlash() {
            //     $(".sm-button").attr("src", $("#sm-button-container").data("url-static") + "img/player-icons/button-get-flash-player.png").attr("alt", "Flash").attr("id", "sm-button-flash")
            // }



  $(window).load(function() {

          

    });

    
})(jQuery);