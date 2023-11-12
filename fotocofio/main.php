<?php
session_start();
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fotocofio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        <?php include('style.css') ?>
    </style>

</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-con">
                <ul class="menu">
                    <a href="main.php"><img src="image/logofotocofio.png" width="60px" height="60px"></a>
                    <li><a href="About us.php">เกี่ยวกับเรา</a></li>
                    <li><a href="Menu.php">เมนู</a></li>
                    <li><a href="index.php">สมาชิก</a></li>
                </ul>



                <span class="location">

                    <span class="username">
                        <?php
                        $row = null;
                        if (isset($_SESSION['user_login'])) {
                            $user_id = $_SESSION['user_login'];
                            $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                            $stmt->execute();
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                        <?php if ($row) : ?>

                            <span> <?php echo $row['username'] ?> </span>
                            <span class="logout"> <a href="logout.php" class="btn btn-danger">Logout</a> </span>
                        <?php endif; ?>
                    </span>

                    <span><img src="image/location.png" width="20px" height="20px"></span>
                    <span>
                        <li><a href="https://maps.app.goo.gl/598dyQ1GgLqdvfK96" target="_blank">ค้นหาร้าน</a></li>
                    </span>
                </span>

            </div>
        </div>
    </nav>

    <!-- คั่นนนนน -->

    <div class="ads">

        <div class="swiper">

            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="image/1.png"></div>
                <div class="swiper-slide"><img src="image/2.png"></div>
                <div class="swiper-slide"><img src="image/3.png"></div>
                <div class="swiper-slide"><img src="image/4.png"></div>

            </div>

            <div class="swiper-pagination"></div>


            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="text">
            <h1>We&nbsp;&nbsp;care&nbsp;about&nbsp;every&nbsp;cup.</h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>

    <!-- คั่นนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนน -->

    <div class="container">
        <div class="image-grid">
            <div class="main-image">
                <img src="image/capu.png">
            </div>
            <div class="sub-images">
                <div class="sub-image">
                    <img src="image/honey.png">
                </div>
                <div class="sub-image">
                    <img src="image/som.png">
                </div>
                <div class="sub-image">
                    <img src="image/GT.png">
                </div>
                <div class="sub-image">
                    <img src="image/milk.png">
                </div>
            </div>
        </div>
    </div>

    <!-- คั่นนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนนน -->

    <footer>
        <div class="footer-left">
            <div>
                <a href="About us.html">เกี่ยวกับเรา</a>
            </div>
            <div>
                <a href="Menu.html"></a>
            </div>
            <div>
                <a href="review.html"></a>
            </div>
            <div>
                <a href="index.php">สมาชิก</a>
            </div>
        </div>
        <div class="footer-center">
            <div>
                About Me
            </div>
            <p justify-content: center; align-items: center;>
                ร้านตั้งอยู่ ณ ตลาดดวงแก้ว บริเวณหน้าเซเว่น เปิดทุกวันเวลา 05:00-11:00 น
            </p>
        </div>
        <div class="footer-right">
            <div>
                <span>
                    <img src="image/facebook logo.png" width="30px" height="30px" margin: 1rem 1rem;>
                </span>
                <span align-items: center;>
                    <a href="https://web.facebook.com/people/FOTO-Coffio/100081100353433/?locale=th_TH&_rdc=1&_rdr">facebook</a>
                </span>
            </div>
            <div>
                <span>
                    <img src="image/call logo.png" width="30px" height="30px">
                </span>
                <span align-items: center;>
                    082-212-0068
                </span>
            </div>
        </div>
    </footer>
</body>

</html>