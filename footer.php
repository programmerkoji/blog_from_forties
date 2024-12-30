<!-- footer -->
<footer class="ly_foot">
<?php
$thisYear = date('Y');
if(is_page(array('portfolio', 'about', 'contact', 'contact/check', 'contact/thanks')) || is_page_template('page-worksdetail.php')): ?>
  <!-- copyright -->
  <div class="bl_foot_copyright">
    <?php echo '<small>© 2022-' . $thisYear . ' サトウコウジ ポートフォリオ</small>' ?>
  </div>
<?php else: ?>
  <!-- copyright -->
  <div class="bl_foot_copyright">
    <?php echo '<small>© 2022-' . $thisYear . ' 40代からの挑戦</small>' ?>
  </div>
<?php endif; ?>

</footer>

<?php wp_footer(); ?>
</body>
</html>
