<?php
$showcase_albums = array(
  array(
    //no need for 0=> , 1=> etc (index is automatic)
    "Name" => "The Smiling Hippo",
    "Type" => "OFFICE SPACE REMODELLING",
    "Album" => array("images/showcase/album1/IMG_0294 1.png", "images/showcase/album1/IMG_0440 1.png"),
  ),
  array(
    "Name" => "Hippo",
    "Type" => "OFFICE SPACES",
    "Album" => array("images/showcase/album2/IMG_4821 1.png", "images/showcase/album2/photo-1560336767-7447ab89afb6.jfif", "images/showcase/album2/photo-1561296160-7ea9d1b5511d.jfif", "images/showcase/album2/photo-1561454260-8559bd155736.jfif"),
  ),
  array(
    "Name" => "Smile",
    "Type" => "OFFICE REMODELLING",
    "Album" => array("images/showcase/album3/photo-1563656410378-e5c283afafbc.jfif", "images/showcase/album3/photo-1564381976397-a27d75ae3db3.jfif"),
  ),
  array(
    "Name" => "Hippo",
    "Type" => "OFFICE SPACES",
    "Album" => array("images/showcase/album2/IMG_4821 1.png", "images/showcase/album2/photo-1560336767-7447ab89afb6.jfif", "images/showcase/album2/photo-1561296160-7ea9d1b5511d.jfif", "images/showcase/album2/photo-1561454260-8559bd155736.jfif"),
  ),
  array(
    "Name" => "Hippo",
    "Type" => "OFFICE SPACES",
    "Album" => array("images/showcase/album2/IMG_4821 1.png", "images/showcase/album2/photo-1560336767-7447ab89afb6.jfif", "images/showcase/album2/photo-1561296160-7ea9d1b5511d.jfif", "images/showcase/album2/photo-1561454260-8559bd155736.jfif"),
  ),
);
?>

<section id="projects-showcase" class="overflow-hidden ">
  <div class="container container-large way-point animate-fade">
    <div class="h6 title position-relative">PROJECTS SHOWCASE</div>
  </div>

  <div class="projects-showcase-slider way-point animate-fade container pt-5 pb-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php foreach ($showcase_albums as $key => $value) : ?>
          <div class="swiper-slide">
            <div class="swiper-zoom-container">
              <a class="album full_box_link" data-fancybox="album<?php echo $key ?>" data-src="<?php echo $showcase_albums[$key]["Album"][0] ?>"></a>

              <div class="gallery-thumbnail pe-3 ps-3  pb-3 w-100">
                <img class="img-abs" src="<?php echo $showcase_albums[$key]["Album"][0] ?>" alt="">
                <div class=" d-flex h-100 flex-column position-relative gallery-thumbnail-content-wrapper" style="z-index:1">
                  <div class="mt-auto align-items-center row justify-content-between">
                    <div class="album-title col text-start text-light pe-2 pb-3">
                      <span class=" d-block mb-0 p-0"><?php echo $showcase_albums[$key]["Name"] ?></span><span class="d-block service-type text-light"><?php echo $showcase_albums[$key]["Type"] ?>
                    </div>
                    <div class="album-stats col-auto d-flex flex-row align-items-center text-light  ">
                      <img class="rectangle" src="images/Select_Multiple.svg" alt="">
                      <span class="album-size"><?php echo sizeof($showcase_albums[$key]["Album"]); ?></span>
                    </div>

                  </div>
                </div>
              </div>



              <?php foreach (array_slice($showcase_albums[$key]["Album"], 1) as $k => $v) : ?>
                <a data-fancybox="album<?php echo $key ?>" class="d-none" href="<?php echo $v; ?>"><img src="<?php echo $v; ?>"></a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button swiper-button-prev" onclick="">
        &#8249;
      </div>
      <div class="swiper-button swiper-button-next" onclick="">
        &#8250;
      </div>
    </div>
  </div>
   <div class="container container-large way-point animate-fade">
    <div class="text-center">
      <div class="social social-showcase pt-4">
        <div class="h4 mb-3 pt-5">FIND OUT WHAT WE ARE UP TO RIGHT NOW</div>
        <div class="h1 social-showcase-tag text-center">#baseconstructions</div>
      </div>

      <div class="py-4">
        <ul class="list-inline social-showcase-icons list-unstyled text-center">
          <li class="list-inline-item first-social">
            <a class="d-table" target="_blank" href="https://www.facebook.com/baseconstructions1"><img class="social-media-img " src="images/Facebook.svg" alt=""></a>
          </li>
            <li class="list-inline-item">
              <a class="d-table " target="_blank" href="https://www.instagram.com/baseconstructions.1/"><img class="social-media-img " src="images/Instagram.svg" alt=""></a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>