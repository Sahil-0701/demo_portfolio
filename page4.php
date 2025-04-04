<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My House</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <a href="index.html"><img src="image/logo.png" alt="My Logo" title="My Logo"></a>
        <nav>
            <ul>
                <li><a href="page1.html">My Study Subject</a></li>
                <li><a href="page2.html">My Hobbies</a></li>
                <li><a href="page3.html">My Music</a></li>
                <li><a href="page4.php">My House</a></li>
            </ul>
        </nav>
    </header>

    <div class="sidebar">
        <h3 class="side_head">News Feed</h3>
        <ul>
            <li><a href="https://kent.edu.au" target="_blank"><h2>Institute</h2></a></li>
            <li><a href="https://myaccount.google.com" target="_blank"><h2>My Gmail</h2></a></li>
            <li><a href="https://www.youtube.com" target="_blank"><h2>Youtube</h2></a></li>
            <li><a href="https://www.youtube.com" target="_blank"><img src="image/youtube.png" alt="youtube" title="youtube link"></a></li>
            <li><a href="https://www.instagram.com/_sahil__kaushik_/" target="_blank"><h2>Instagram</h2></a></li>
            <li><a href="https://www.instagram.com/_sahil__kaushik_/" target="_blank"><img src="image/instagram.png" alt="instagram" title="instagram link"></a></li>
        </ul>
    </div>

    <main class="content">
        <div class="profile-pics">
            <img src="image/house_1.png" alt="house img" title="house img" class="profile-pic">
            <img src="image/house_2.png" alt="floorplan" title="floorplan" class="profile-pic">

        </div>

        <h2>My House</h2>
        <?php
        $houseInfo = [
            "Number of Bedrooms" => 4,
            "Number of Bathrooms" => 3,
            "Street Address" => "10 Major Street, Mosman, NSW 2088"
        ];

        echo "<table>";
        foreach ($houseInfo as $key => $value) {
            echo "<tr><th>$key</th><td>$value</td></tr>";
        }
        echo "</table>";
        ?>
    </main>

    <footer>
        <div class="foot">
            <p>Contact: sahil.k@gmail.com | Phone: +61434445406 | <a href="https://www.linkedin.com" target="_blank">LinkedIn</a></p>
            <p>&copy; 2024 S_Kaushik. Assessment website created on August 30, 2024.</p>
        </div>
    </footer>
</body>
</html>
