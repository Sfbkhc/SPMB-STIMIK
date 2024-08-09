<!DOCTYPE html>
<html lang="id">

<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content=<?= ($viewport !== false) ? 'width=680, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' : 'width=device-width, initial-scale=1.0'; ?>> -->
    <!-- <meta name="viewport" content="width=1200, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- FONT GOOGLE -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <!-- END -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>

    <?php

    if ($title != 'PMB STIMIK' &&  $title != 'Login | PMB STIMIK') {
        // include_once('tob-bar.php');
        include_once('navbar.php');
    }
    ?>

    <?= $this->renderSection('content'); ?>

    <?php
    if ($title != 'PMB STIMIK' &&  $title != 'Login | PMB STIMIK') {
        include_once('fother.php');
    }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
        document.addEventListener('DOMContentLoaded', function() {
            var box = document.getElementById('animatedBox');
            box.classList.add('animate__animated');
        });
    </script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            document.getElementById('navbarToggler').addEventListener('click', function() {
                var navLinks = document.getElementById('navLinks');
                navLinks.classList.toggle('show');
            });
        });
    </script>
    <script>
        // Get the button
        let mybutton = document.getElementById("backToTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Attach the click event to the button
        mybutton.addEventListener("click", topFunction);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('myVideo');

            function checkVideoInView() {
                const rect = video.getBoundingClientRect();
                const isInView = (rect.top <= window.innerHeight) && (rect.bottom >= 0);

                if (isInView) {
                    if (video.paused) {
                        video.play();
                    }
                } else {
                    if (!video.paused) {
                        video.pause();
                    }
                }
            }

            checkVideoInView();
            window.addEventListener('scroll', checkVideoInView);
            window.addEventListener('resize', checkVideoInView);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sembunyikan spinner dan tampilkan konten utama setelah 2 detik
            setTimeout(function() {
                document.getElementById('loading-spinner').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
            }, 3000); // 2000 ms = 2 detik
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDzwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>