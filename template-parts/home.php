<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="start-containers">
    <a href="<?php echo get_page_link( get_page_by_title( Management )->ID ); ?>">
      <div class="clickable-container">
        <div id="test1" class="startpage-img top-row">
          <div class="start-text-wrapper">
            <h1 class="start-title">BIM-Management</h1>
            <p class="start-text">Vi hjälper er att upprätta BIM-content, BIM-manual, mängdning, planering av
              BIM-projektering samt förvaltning av BIM-modeller.</p>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="row mr-0 ml-0 start-containers">
    <div class="col-lg-10 pl-0 pr-0" style="width:100%;">
      <a href="<?php echo get_page_link( get_page_by_title( City )->ID ); ?>">
        <div class="clickable-container">
          <div id="test1" class="startpage-img tex middle-row">
            <div class="start-text-wrapper">
              <h1 class="start-title">BIM-City</h1>
              <p class="start-text">Ett forum där vi tillsammans hittar en väg framåt i BIM-världen. </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-2 pl-0 pr-0">
      <div class="contact-container py-0 text-center">
          <h3 class="text-center pt-5">Kontakt</h3>
          <p>info@jacobim.com</p>
          <p>0708782688</p>
          <p>Göteborg</p>
      </div>
    </div>
  </div>
  <div class="start-containers">
    <a href="<?php echo get_page_link( get_page_by_title( Education )->ID ); ?>">
      <div class="clickable-container">
        <div id="test1" class="startpage-img tex bottom-row">
          <div class="start-text-wrapper">
            <h1 class="start-title">BIM-Education</h1>
            <p class="start-text">Mentorskap och utbildningsprogram</p>
          </div>
        </div>
      </div>
    </a>
  </div>
</div><!-- #primary -->

<?php get_footer();