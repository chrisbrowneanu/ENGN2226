<?php include ('templates/header.php'); ?>

  <!-- Initializer -->
  <script>
	Flatdoc.run({
  fetcher: Flatdoc.github('chrisbrowneanu','ENGN2226/resources.md')
	});
  </script>
  
<?php include ('templates/top.php'); ?>

  <div class='content-root'>
    <div class='menubar'>
      <div class='menu section' role='flatdoc-menu'></div>
	  <?php include ('templates/menubottom.php'); ?>
    </div>
    <div role='flatdoc-content' class='content'></div>
  </div>

</body>
</html>