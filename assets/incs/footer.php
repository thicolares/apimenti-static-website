<div id="f">
  <div class="container">
    <div class="row">
      <p>
        Apimenti,
        <?php
          $foundingDate = new DateTime('2009-08-28');
          $today        = new DateTime();
          echo $today->format('Y') - $foundingDate->format('Y');
        ?>
        anos.
      </p>
    </div>
  </div>
</div>

<script src="assets/js/bootstrap.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47321310-1', 'apimenti.com.br');
  ga('send', 'pageview');
</script>