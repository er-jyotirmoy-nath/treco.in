<?php



/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

require_once 'web-admin/admin/connections/smotik_con.php';

class main  {



    public function imageSlideCounter() {

        $bdd = smotik_db::getInstance();

        $indicators = '';

        $counter = 0;

        $sql = "SELECT * FROM `banner_table` WHERE id is not null and visible != 0";

        $query = $bdd->prepare($sql);

        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            if ($counter == 0) {

                $indicators .= '<li data-target="#myCarousel"  data-slide-to="' . $counter . '" class="active"></li>';

            } else {

                $indicators .= '<li data-target="#myCarousel" data-slide-to="' . $counter . '"></li>';

            }

            $counter++;

        }

        echo $indicators;

    }



    public function imageSlider() {

        $bdd = smotik_db::getInstance();

        $sliders = '';

        $counter = 0;

        $sql = "SELECT * FROM `banner_table` WHERE id is not null and visible != 0";

        $query = $bdd->prepare($sql);

        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            if ($counter == 0) {

                $sliders .= '<div class="item active">

				<div class="fill" style="background-image: url(\'web-admin/admin/' . $row["image_url"] . '\');"></div>

				<div class="carousel-caption">

					<h2>' . $row["title"] . '</h2>

				</div>

			</div>';

            } else {

                $sliders .= '<div class="item">

				<div class="fill" style="background-image: url(\'web-admin/admin/' . $row["image_url"] . '\');"></div>

				<div class="carousel-caption">

					<h2>' . $row["title"] . '</h2>

				</div>

			</div>';

            }

            $counter++;

        }

        echo $sliders;

    }



    public function getAboutUs() {

        $bdd = smotik_db::getInstance();

        $content = '';

        $sql = "SELECT * FROM `home_content_table` WHERE section = 'about_us'";

        $query = $bdd->prepare($sql);

        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $content .= $row["content"];

        }

        echo $content;

    }



    public function testimonialSliderCounter() {

        $bdd = smotik_db::getInstance();

        $indicator = '';

        $counter = 0;

        $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials` WHERE visible = '1'";

        $query = $bdd->prepare($sql);

        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            if ($counter == 0) {

                $indicator .= '<li data-target="#myCarousel1" data-slide-to="' . $counter . '" class="active"></li>';

            } else {

                $indicator .= '<li data-target="#myCarousel1" data-slide-to="' . $counter . '"></li>';

            }

            $counter++;

        }

        

        echo $indicator;

    }



    public function testimonialSliders() {

        $bdd = smotik_db::getInstance();

        $content = '';

        $counter = 0;

        $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials` WHERE visible = '1'";

        $query = $bdd->prepare($sql);

        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            if ($counter == 0) {

                $content .= '<div class="item active">

							<div class="text-center">

								<img src="img/img1.jpg" class="img-thumbnail" alt="" />

							</div>

							<h4>"' . $row["testimonial"] . '"<br>

								<br>

								<span>' . $row["person"] . '<br>' . $row["designation"] . '</span>

							</h4>

						</div>';

            } else {

                $content .= '<div class="item">

							<div class="text-center">

								<img src="img/img1.jpg" class="img-thumbnail" alt="" />

							</div>

							<h4>"' . $row["testimonial"] . '"<br>

								<br>

								<span>' . $row["person"] . '<br>' . $row["designation"] . '</span>

							</h4>

						</div>';

            }

            $counter++;

        }

        

        echo $content;

    }

    

    public function getclientdetails() {

        $bdd = smotik_db::getInstance();

        $content = '';

        $sql = "SELECT `id`, `name`, `image_url`, `visible` FROM `clients` WHERE visible = 1";

        $query = $bdd->prepare($sql);

        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $content.=' <div class="col-sm-2 col-xs-6">

                    <img src="web-admin/admin/'.$row["image_url"].'" class="img-thumbnail" alt="'.$row["name"].'" />

                </div>';

        }

        echo $content;

    }

    

    public function getBlogs() {

        $bdd = smotik_db::getInstance();

        $content = '';

        $sql = "SELECT `id`, `title`, `image_url`, `content_blog`, `visible`, `date_blog` FROM `blogs_table` WHERE visible = '1' order by date_blog desc limit 0,2";

        $query = $bdd->prepare($sql);

        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $blog_para = substr($row["content_blog"], 0, 100);

            $content.= '



<div class="single_blog">

<div class="img_holder float_left">

<img src="web-admin/admin/'.$row["image_url"].'" class="img-responsive" alt="" width="167" height="152">

</div>



<div class="post float_left">

<div class="date">

<span>'.date('d', strtotime($row["date_blog"])).' <br> '.date('M', strtotime($row["date_blog"])).'</span>

</div>

<div class="post_title">

<a href="#"><h5>'.strtoupper($row["title"]).'</h5></a>



<ul>

<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>

<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Likes</a></li>

</ul>

</div>



<p>'.substr(strip_tags($row["content_blog"]), 0,100).'...</p>

<div class="btn-pd"><a href="blog-details.php?blog_id='.$row["id"].'">Read more...</a></div>

</div>

<div class="clear_fix"></div>

</div>

                

';

        }

        echo $content;

    }

    

    public function getNews(){

        $bdd = smotik_db::getInstance();

        $str = '';

        $sql = "SELECT `id`, `title`, `content`, `image_url`, `visible`, `date_news` FROM `news_table`"

                . " WHERE visible = '1' order by `id` desc limit 0,2";

        $query = $bdd->prepare($sql);

        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $str .= '      <div class="single_news">

                                <div class="img_holder float_left">

                                    <img src="web-admin/admin/'.$row["image_url"].'" class="img-responsive" alt=""

                                         width="167" height="152">

                                </div>



                                <div class="post float_left">

                                    <div class="post_title">

                                        <a href="#"><h5>'.$row["title"].'</h5></a>



                                        <ul>

                                           <li><a href="#"><i class="fa fa-comments"

                                                               aria-hidden="true"></i> 0 comment</a></li>

                                            <li><a href="#"><i class="fa fa-heart"

                                                               aria-hidden="true"></i> 48 Likes</a></li>

                                        </ul>

                                    </div>



                                    <p>'.substr(strip_tags($row["content"]), 0,100).'</p>

                                    <div class="btn-pd">

                                        <a href="blog-details.php?news_id='.$row["id"].'">Read more...</a>

                                    </div>

                                </div>

                                <div class="clear_fix"></div>

                            </div>

                            ';

        }

        echo $str;

    }

    

    

}



$new_web_load = new main();

