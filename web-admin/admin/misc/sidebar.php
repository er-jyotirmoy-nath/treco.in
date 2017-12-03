<div class="sidebar content-box" style="display: block;">
    <ul class="nav">
        <!-- Main menu -->
        <li ><a href="#/dashboard"><i
                    class="glyphicon glyphicon-home"></i> Dashboard</a></li>
    <!--<li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i>
                    Calendar</a></li>-->
    <!--<li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i>
                    Statistics (Charts)</a></li>-->
    <!--<li><a href="tables.html"><i class="glyphicon glyphicon-list"></i>
                    Tables</a></li>
    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i>
                    Buttons</a></li>-->
        <li><a href="#/news_man"><i class="glyphicon glyphicon-film"></i>
                News</a></li>

        <li class="submenu"><a href="#"> <i class="glyphicon glyphicon-volume-up"></i>
                Blogs <span class="caret pull-right"></span>
            </a> <!-- Sub menu -->
            <ul>
                <li><a href="#/blogs_man"><i class="glyphicon glyphicon-font"></i> Add Blog
                    </a> </li>

                <li><a href="#/blog_edit"><i class="glyphicon glyphicon-edit"></i> Edit Blog
                    </a></li>
            </ul></li>


        <li><a href="#/clients_man"><i class="glyphicon glyphicon-usd"></i>
                Clients</a></li>
        <li><a href="#/testimonials_man"><i class="glyphicon glyphicon-comment"></i>
                Testimonials</a></li>
        <li><a href="#/products"><i class="glyphicon glyphicon-shopping-cart"></i>
                Products</a></li>
        <li><a href="#/banners_man"><i
                    class="glyphicon glyphicon-sound-stereo"></i> Banners</a></li>
        
        <li class="submenu"><a href="#"> <i class="glyphicon glyphicon-list"></i>
                Pages <span class="caret pull-right"></span>
            </a> <!-- Sub menu -->
            <ul>
                <li><a href="#/aboutus_man"><i class="glyphicon glyphicon-pencil"></i>
                        About Us</a></li>
                <li><a href="#/entrance_man"><i class="glyphicon glyphicon-pencil"></i>
                        Entrance Mgmt.</a></li>
                <li><a href="signup.html">Signup</a></li>
            </ul></li>
    </ul>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script>
    $(document).ready(function () {
        // get current URL path and assign 'active' class
        var pathname = window.location.pathname;
        $('.nav > li > a[href="' + pathname + '"]').parent().addClass('active');
    })
</script>
