<?php
include "header.php";
include "css_links.php";
?>
</head>

<body class="services-page">
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative" style="display:unset;">
                <h1>Events</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Events</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        
        <div class="container section-title" data-aos="fade-up">
            <h2>Events</h2>
        </div>

        <div class="container">
            <?php
            $images = glob('event-images/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            usort($images, function($a, $b) {
                return filemtime($b) - filemtime($a);
            });
            $images = array_slice($images, 0, 3);
            foreach ($images as $image) {
                echo '<div class="image-box"><img src="' . $image . '" alt="Event Image"></div>';
            }
            ?>
        </div>
        <div class="more-button">
            <a href="more-events.php" class="btn">More</a>
        </div>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>
