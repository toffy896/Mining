
   <!-- jQuery JS -->
   <script src="{!! asset('js/jquery-1.12.0.min.js') !!}"></script>
   <!-- Bootstrap JS -->
   <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
   <!-- Animate JS -->
   <script src="{!! asset('vendor/animate/wow.min.js') !!}"></script>
   <!-- Camera Slider -->
   <script src="{!! asset('vendor/camera-slider/jquery.easing.1.3.js') !!}"></script>
   <script src="{!! asset('vendor/camera-slider/camera.min.js') !!}"></script>
   <!-- Isotope JS -->
   <script src="{!! asset('vendor/isotope/imagesloaded.pkgd.min.js') !!}"></script>
   <script src="{!! asset('vendor/isotope/isotope.pkgd.min.js') !!}"></script>
   <!-- Progress JS -->
   <script src="{!! asset('vendor/Counter-Up/jquery.counterup.min.js') !!}"></script>
   <script src="{!! asset('vendor/Counter-Up/waypoints.min.js') !!}"></script>
   <!-- Owlcarousel JS -->
   <script src="{!! asset('vendor/owl_carousel/owl.carousel.min.js') !!}"></script>
   <!-- Stellar JS -->
   <script src="{!! asset('vendor/stellar/jquery.stellar.js') !!}"></script>
   <!-- Theme JS -->
   <script src="{!! asset('js/theme.js') !!}"></script>
<!-- jQuery -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   <!-- Animate JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
   <!-- Camera Slider -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Camera/1.3.4/scripts/camera.js"></script>
   <!-- Isotope JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
   <!-- Progress JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
   <!-- Owlcarousel JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
   <!-- Stellar JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
   <!-- Theme JS --> --}}
   {{-- <script src="{{ asset('js/theme.js') }}"></script> --}}

   {{-- <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
  
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  
        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('player', {
            height: '390',
            width: '640',
            videoId: 'Ibi6sI9UHb8',
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }
  
        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
          event.target.playVideo();
        }
  
        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function onPlayerStateChange(event) {
          if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
          }
        }
        function stopVideo() {
          player.stopVideo();
        }
      </script> --}}