<footer class="footer">
  <div class="container">
    <p class="copyright">&copy; 2017 <a href="<?php esc_url( home_url() ); ?>">Coldbox Theme</a> by <a href="https://miruc.co/">Mirucon</a></p>
  </div>
</footer>

<script type="text/javascript">
var nav = document.getElementsByClassName('nav-menu'); nav = nav[0];
var toggle = document.getElementsByClassName('nav-toggle'); toggle = toggle[0];
function active() {
  nav.classList.toggle('is-active');
}
toggle.addEventListener('click', active, false);
</script>
<?php wp_footer(); ?>
</body>
</html>
