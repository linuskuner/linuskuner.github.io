  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">
      <div class="grid-container">
        <p class="contact_details">You can see more of what  I’ve recently been working on over on <a href="#">Dribbble</a>, look at some of my photos on <a href="http://instagram.com/linuskuner">Instagram</a>, visit my <a href="linkedin">Linkedin</a>,  Follow me on <a href="http://twitter.com/linuskuner">Twitter</a> or drop me an <a href="mailto:this@linus.rocks">Email</a>.</p>
        <!-- <h1 class="footer_head">👋</h1> -->
      </div>
    </div>
    <?= js('assets/js/wow.min.js') ?>
    <script>
      new WOW().init();
    </script>
    <script type="text/javascript">

      //This is a pen based off of Codewoofy's eyes follow mouse. It is just cleaned up, face removed, and then made to be a little more cartoony. https://codepen.io/Codewoofy/pen/VeBJEP

      $("body").mousemove(function(event) {
      var eye = $(".eye");
      var x = (eye.offset().left) + (eye.width() / 2);
      var y = (eye.offset().top) + (eye.height() / 2);
      var rad = Math.atan2(event.pageX - x, event.pageY - y);
      var rot = (rad * (180 / Math.PI) * -1) + 180;
      eye.css({
        '-webkit-transform': 'rotate(' + rot + 'deg)',
        '-moz-transform': 'rotate(' + rot + 'deg)',
        '-ms-transform': 'rotate(' + rot + 'deg)',
        'transform': 'rotate(' + rot + 'deg)'
      });
      });
    </script>
  </footer>

</body>
</html>
