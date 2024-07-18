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
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
            padding: 0 120px;
        }

        .image-container img {
            width: 100%; 
            max-width: 400px; 
            height: auto; 
            max-height: 600px; 
        }

        .image-container .col-lg-4 {
            flex: 1 1 calc(33.33% - 10px);
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .image-container {
                flex-direction: column;
            }
            .image-container .col-lg-4 {
                flex: 1 1 100%;
                margin-bottom: 20px;
            }
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
            $id = !empty($_GET['id']) ? $_GET['id'] : 0;
            $query = "SELECT * FROM event_main WHERE id = ".$id." ORDER BY seq ASC";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = !empty($row['name']) ? $row['name'] : '';
                    $title = !empty($row['title']) ? $row['title'] : '';
                    $description = !empty($row['description']) ? $row['description'] : '';
                    $event_id = !empty($row['id']) ? $row['id'] : '0';
                    $base_path = !empty($row['base_path']) ? $row['base_path'] : 'assets/image/';

                    $query_handling = "SELECT * FROM event_handling WHERE event_id = ".$event_id." ORDER BY seq ASC";
                    $result_handling = $conn->query($query_handling);

                    echo '
                        <div class="container section-title" data-aos="fade-up">
                            <h2>'.$name.'</h2>
                        </div>
                        <div class="image-container">
                    ';

                    $counter = 0; // Initialize counter for images
                    if ($result_handling->num_rows > 0) {
                        while ($row_handling = $result_handling->fetch_assoc()) {
                            $image = !empty($row_handling['image_name']) ? $base_path.$row_handling['image_name'] : '';

                            if (!empty($image)) {
                                if ($counter > 0 && $counter % 3 == 0) {
                                    echo '</div><div class="image-container">'; // Close and open new row after every 3 images
                                }

                                echo '
                                    <div class="col-lg-4">  
                                        <img src="'.$image.'" alt="Image">
                                    </div>
                                ';
                                $counter++;
                            }
                        }
                    }
                    echo '</div>';
                }
            }
        ?>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>
