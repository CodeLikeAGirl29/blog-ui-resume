<?php
$count = $_POST['count'];
if($count == 1){
    echo '<div class="col-lg-6 folio_effect mix dev">
            <div class="folio_item">
                <a href="single_folio.html" class="folio_item_thumbs">
                    <div class="folio_stack">
                        <div class="folio_decoration"></div>
                       
                        <div class="folio_img_holder">
                            <img class="folio_img" src="https://res.cloudinary.com/codelikeagirl29/image/upload/v1650054974/projects/ScreenShot_Tool_-20220415163525_mjgzjg.png" alt="paws & claws" width="300">
                        </div>
                    </div>
                </a>
                <div class="folio_content">
                    <h3 class="folio_title"><a href="single_folio.html">Paws & Claws</a></h3>
                    <p class="folio_cat"><a href="portfolio.html">Nodejs | Express | JWT | EJS</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 folio_effect mix dev">
            <div class="folio_item">
                <a href="single_folio.html" class="folio_item_thumbs">
                    <div class="folio_stack">
                        <div class="folio_decoration"></div>
                       
                        <div class="folio_img_holder">
                            <img class="folio_img" src="https://res.cloudinary.com/codelikeagirl29/image/upload/v1650054974/projects/ScreenShot_Tool_-20220415163525_mjgzjg.png" alt="projects" width="300">
                        </div>
                    </div>
                </a>
                <div class="folio_content">
                    <h3 class="folio_title"><a href="single_folio.html">Node Projects</a></h3>
                    <p class="folio_cat"><a href="portfolio.html">Nodejs | PUG</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 folio_effect mix dev">
            <div class="folio_item">
                <a href="single_folio.html" class="folio_item_thumbs">
                    <div class="folio_stack">
                        <div class="folio_decoration"></div>
                       
                        <div class="folio_img_holder">
                            <img class="folio_img" src="https://res.cloudinary.com/codelikeagirl29/image/upload/v1645749312/projects/milkshakesExpress_khya9j.png" alt="milkshakes express" width="300">
                        </div>
                    </div>
                </a>
                <div class="folio_content">
                    <h3 class="folio_title"><a href="single_folio.html">milkshakesExpress</a></h3>
                    <p class="folio_cat"><a href="portfolio.html">Nodejs | JWT | Authentication</a></p>
                </div>
            </div>
        </div>';
}elseif($count == 2){
    echo '<div class="col-lg-6 folio_effect mix dev">
            <div class="folio_item">
                <a href="single_folio.html" class="folio_item_thumbs">
                    <div class="folio_stack">
                        <div class="folio_decoration"></div>
                      
                        <div class="folio_img_holder">
                            <img class="folio_img" src="https://res.cloudinary.com/codelikeagirl29/image/upload/v1645749312/projects/students-pagination_gbwcmc.png" alt="students" width="300">
                        </div>
                    </div>
                </a>
                <div class="folio_content">
                    <h3 class="folio_title"><a href="single_folio.html">Students Directory</a></h3>
                    <p class="folio_cat"><a href="portfolio.html">JavaScript | API | CSS</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 folio_effect mix design">
            <div class="folio_item">
                <a href="single_folio.html" class="folio_item_thumbs">
                    <div class="folio_stack">
                        <div class="folio_decoration"></div>
                      
                        <div class="folio_img_holder">
                            <img class="folio_img" src="https://res.cloudinary.com/codelikeagirl29/image/upload/v1663860555/projects/slider_bbx1qy.png" alt="slider" width="300">
                        </div>
                    </div>
                </a>
                <div class="folio_content">
                    <h3 class="folio_title"><a href="single_folio.html">Slider Gallery</a></h3>
                    <p class="folio_cat"><a href="portfolio.html">HTML/CSS | JavaScript</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 folio_effect mix frnt">
            <div class="folio_item">
                <a href="single_folio.html" class="folio_item_thumbs">
                    <div class="folio_stack">
                        <div class="folio_decoration"></div>
                       
                        <div class="folio_img_holder">
                            <img class="folio_img" src="https://res.cloudinary.com/codelikeagirl29/image/upload/v1662720108/projects/Jobscape_nrvzkg.png" alt="job tracker">
                        </div>
                    </div>
                </a>
                <div class="folio_content">
                    <h3 class="folio_title"><a href="single_folio.html">Jobspace</a></h3>
                    <p class="folio_cat"><a href="portfolio.html">React | JWT | HTMK/CSS</a></p>
                </div>
            </div>
        </div>';
}
exit();