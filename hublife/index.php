<?php get_header(); ?>

<!-- Carousel -->
  <section class="silder">
       <div class="col">
      <div class="owl-carousel owl-theme">
        <div class="item"> <img  class="w-100" src="wp-content/uploads/2022/04/bgslider1.jpg"> </div>
        <div class="item"> <img  class="w-100" src="wp-content/uploads/2022/04/bgslider2.jpg"> </div>
        <div class="item"> <img  class="w-100" src="wp-content/uploads/2022/04/bgslider3.jpg"> </div>
        </div>
    </div>  
</section>
<!-- Carousel Fim -->
<!-- Serviços -->
      <section class="container mb-5">
          <div class="col text-center mt-5">
            <h2 class="title"><b>Confira nossos serviços</b></h2>
              <p class="mb-6">Garanta o melhor serviço de advocacia</p>
          </div>
        <div class="row align-items-start text-center">
          <div class="col-xs-12 col-sm-12 col-md-4 mt-5 p-4">
            <img class="img-fluid img-servicos" src="wp-content/uploads/2022/04/serv1.jpg" alt="">
            <h5 class="text-primary mt-3">Consultoria</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                <a class="btn btn-link text-secondary">Saiba mais</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-5 p-4">
              <img class="img-fluid img-servicos" src="wp-content/uploads/2022/04/serv2.jpg" alt="">
              <h5 class="text-primary mt-3">Contencioso</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <a class="btn btn-link text-secondary">Saiba mais</a>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 mt-5 p-4">
                <img class="img-fluid img-servicos" src="wp-content/uploads/2022/04/serv3.jpg" alt="" >
                <h5 class="text-primary mt-3">Assessoria completa</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    <a class="btn btn-link text-secondary">Saiba mais</a>
                </div>
          </div>        
</section>
<!-- Serviços fim -->
<!-- Diferenciais -->
     <section class="container mt-5">
        <div class="d-flex flex-column-reverse flex-md-row m-0 w-100 mt-5">
          <div class="col-12 col-md-6 p-4">
             <h3 class="text-secondary"><b>Nossos Diferenciais</b></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              <ul class="list-unstyled">
                <li> <i class="fas fa-check text-primary"></i> Rápido atendimento</li>
                <li> <i class="fas fa-check text-primary"></i> Assistência de excelência</li>
                <li> <i class="fas fa-check text-primary"></i> Respeitamos os prazos</li>
                <li> <i class="fas fa-check text-primary"></i> Conhecimento</li>
              </ul>
           </div>
             <div class="col-12 col-md-6">
                 <img class="img-diferenciais img-fluid" src="wp-content/uploads/2022/04/direito1.jpg" alt="" >
              </div>
         </div>
        </div> 
     
      <div class="container mt-5">
        <div class="row m-0 w-100">
          <div class="col-12 col-md-6">
            <img class="img-diferenciais img-fluid" src="wp-content/uploads/2022/04/direito2.jpg" alt="">
           </div>
            <div class="col-12 col-md-6 text-left p-4">
               <h3 class="text-secondary"><b>Entregando excelência em cada atendimento</b></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <a class="btn btn-primary mb-5">Saiba mais</a>
             </div>
          </div>
</section>
<!-- Diferenciais fim -->
<!-- Video Institucional -->
<section class="institucional mt-5" style="background-image: url('wp-content/uploads/2022/04/bgvideo.jpg'); background-repeat: no-repeat;
background-size: cover;">
  <div class="container text-white text-center">
      <div class="row justify-content-start pt-5">
        <div class="col-10 offset-1 col-md-6 offset-md-3 ">
          <h4 class="title"><b>Hublife</b></h4>
            <p class="mb-6">Confira o nosso vídeo institucional</p>
            <div class="col-12 ratio ratio-16x9 mb-5">
  <iframe  class="mt-3 mb-5 video-institucional" width="560" height="315" src="https://www.youtube.com/embed/--0Ii_NjQUE"  frameborder="0"></iframe>
    </div>
      </div>
      </div>
      </div> 
</section>  
<!-- Video Institucional fim -->
<!-- Blog -->
<section class="container">
  <div class="col text-center mt-5">
    <h4 class="title"><b>Blog</b></h4>
  </div>
  <div class="row align-items-start text-left gx-4">
   <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
      <?php get_template_part('content', get_post_format()); ?>

      <?php endwhile; ?>

      <?php else : ?>
  
            <p class="lead"> nenhuma publicação encontrada </p>
        
          <?php endif; ?>

  </div>        
  </section>
<!-- Blog fim -->
<!-- Maps -->
<div class="col mt-5">
<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.060006296474!2d-38.48181048588339!3d-3.79708924458731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c745841db08afd%3A0x33e9f2107dc9d448!2sAv.%20Washington%20Soares%2C%204431%20-%20Lagoa%20Sapiranga%20(Coit%C3%A9)%2C%20Fortaleza%20-%20CE%2C%2060833-005!5e0!3m2!1spt-BR!2sbr!4v1650637085324!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> 
<!-- Maps Fim -->
<?php get_footer(); ?>