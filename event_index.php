<?php include_once('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact - लोक उत्थान पहल फाउंडेशन</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include "css_links.php"; ?>
    <style>
        .image-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 0 120px;
            box-sizing: border-box;
        }
        .image-container img {
            width: 100%;
            max-width: 400px;
            height: auto;
            max-height: 600px;
        }
        @media (max-width: 768px) {
            .image-container {
                flex-direction: column;
                padding: 0;
            }
            .col-lg-4 {
                margin-bottom: 20px;
                width: unset !important;
            }
        }
        @media (min-width: 992px) {
            .col-lg-4 {
                width: unset !important;
            }
        }
        .more-button {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: var(--accent-color);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            width: 100px;
        }
    </style>
</head>
<body class="contact-page">
    <?php include "header.php"; ?>
    <main class="main">
        <div class="page-title" data-aos="fade" style="background-image: url(assets/img/contact-us.png);">
            <div class="container position-relative">
                <h1>Event</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Event</li>
                    </ol>
                </nav>
            </div>
        </div>
        <?php
        $query = "SELECT * FROM event_main ORDER BY seq ASC";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name = !empty($row['name']) ? $row['name'] : '';
                $title = !empty($row['title']) ? $row['title'] : '';
                $description = !empty($row['description']) ? $row['description'] : '';
                $event_id = !empty($row['id']) ? $row['id'] : '0';
                $base_path = !empty($row['base_path']) ? $row['base_path'] : 'assets/image/';

                // Count total images for the event
                $query_total_images = "SELECT COUNT(*) as total_images FROM event_handling WHERE event_id = " . $event_id;
                $result_total_images = $conn->query($query_total_images);
                $total_images = 0;
                if ($result_total_images->num_rows > 0) {
                    $total_images = $result_total_images->fetch_assoc()['total_images'];
                }

                $query_handling = "SELECT * FROM event_handling WHERE event_id = " . $event_id . " ORDER BY seq ASC LIMIT 3";
                $result_handling = $conn->query($query_handling);
                $image1 = '';
                $image2 = '';
                $image3 = '';
                $image_arr = [];
                if ($result_handling->num_rows > 0) {
                    while ($row_handling = $result_handling->fetch_assoc()) {
                        $image_arr[] = $row_handling['image_name'];
                    }
                    $image1 = !empty($image_arr[0]) ? $base_path . $image_arr[0] : '';
                    $image2 = !empty($image_arr[1]) ? $base_path . $image_arr[1] : '';
                    $image3 = !empty($image_arr[2]) ? $base_path . $image_arr[2] : '';
                }

                if (!empty($image1) || !empty($image2) || !empty($image3)) {
                    echo '
                    <div class="container section-title" data-aos="fade-up">
                        <h2>' . $name . '</h2>
                    </div>
                    <div class="image-container">';
                    
                    if (!empty($image1)) {
                        echo '<div class="col-lg-4">
                                <img src="' . $image1 . '" alt="Image 1">
                            </div>';
                    }
                    if (!empty($image2)) {
                        echo '<div class="col-lg-4">
                                <img src="' . $image2 . '" alt="Image 2">
                            </div>';
                    }
                    if (!empty($image3)) {
                        echo '<div class="col-lg-4">
                                <img src="' . $image3 . '" alt="Image 3">
                            </div>';
                    }
                    
                    echo '</div>';

                    if ($total_images > 3) {
                        echo '<a href="event.php?id=' . $event_id . '" class="more-button">More</a>';
                    }
                }
            }
        }
        ?>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>
