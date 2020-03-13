<?php /* Template Name: FAQ */ ?>
<?php get_header(); the_post(); the_content(); ?>

<!-- Hightlight js -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/agate.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((code) => {
    hljs.highlightBlock(code);
  });
});
</script>

<?php get_footer(); ?>