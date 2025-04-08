<?php
/**
 * Template Name: Testimonials Page
 * Description: Displays testimonials from students and parents.
 * Author: Kingsley Ozioko
 * 
 * @package Starter_Theme
 */

get_header();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
  .testimonials-section {
    padding: 2rem;
    background-color: #f9f9f9;
    text-align: center;
  }
  .testimonials-section h2 {
    font-size: 2rem;
    color: #005baa;
    margin-bottom: 2rem;
  }
  .testimonial {
    max-width: 700px;
    margin: 0 auto;
    padding: 1rem;
  }
  .testimonial blockquote {
    font-style: italic;
    margin: 1rem 0;
    padding-left: 1rem;
    border-left: 4px solid #005baa;
    color: #333;
  }
  .testimonial cite {
    display: block;
    margin-top: 0.5rem;
    font-weight: bold;
    color: #555;
  }
  .swiper-pagination-bullet-active {
    background-color: #005baa;
  }
  .swiper-button-next,
  .swiper-button-prev {
    color: #005baa;
  }
</style>

<!-- to use shortcode for the testimonial here is the code [baizonn_testimonials] -->

<section class="testimonials-section">
  <h2>What Our Clients Say</h2>
  <div class="swiper testimonials-slider">
    <div class="swiper-wrapper">
      <?php
      // Hardcoded testimonials – 
      $testimonials = [
        [
          'quote' => "Baizonn’s solutions helped us break into the Australian market with confidence and clarity. Their team understood our goals from the start.",
          'author' => "– Sarah K., Export Manager",
        ],
        [
          'quote' => "The strategic marketing advice from Baizonn was a game changer. Their understanding of B2B markets is exceptional.",
          'author' => "– Peter L., Director at GlobalTech",
        ],
        [
          'quote' => "From opportunity mapping to ongoing brand strategy, Baizonn has been an invaluable extension of our team.",
          'author' => "– Anita R., Head of Growth",
        ],
        [
          'quote' => "Their deep industry expertise, especially in manufacturing and education, helped us land long-term contracts.",
          'author' => "– Michael T., Co-founder at Edgemark",
        ],
      ];

      foreach ($testimonials as $t) {
        echo '<div class="swiper-slide testimonial">';
        echo '<blockquote>“' . esc_html($t['quote']) . '”</blockquote>';
        echo '<cite>' . esc_html($t['author']) . '</cite>';
        echo '</div>';
      }
      ?>
    </div>

    <!-- Swiper Controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.testimonials-slider', {
      loop: true,
      effect: 'fade',
      fadeEffect: { crossFade: true },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
</script>

<?php get_footer(); ?>