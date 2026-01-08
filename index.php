<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Laiser Hill SDA</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
</head>
<body>

    <?php include('sidebar.php'); ?>

    <main class="content">
        <section class="hero-banner">
            <h1>Welcome to Laiser Hill</h1>
            <p>Seventh Day Adventist Church</p>
            <div class="hero-actions">
                <button class="btn btn-primary">Watch Live Sermon</button>
                <button class="btn btn-outline">View Sabbath Program</button>
                <button class="btn btn-outline">Plan Your Visit</button>
            </div>
        </section>
        
       <section class="section">
            <h2>About Laiser Hill</h2>
            <p class="intro-text">Laiser Hill SDA Church is a vibrant church family dedicated to spiritual growth, community impact, and preparing lives for Christ.</p>
            <div class="grid-3">
                <div class="info-card">
                    <strong>📍 Location</strong>
                    <p>123 Laiser Kimani Road, Ongata Rongai, Kenya</p>
                </div>
                <div class="info-card">
                    <strong>⏰ Service Times</strong>
                    <p>Sabbath School: 9:00 AM<br>Divine Service: 11:00 AM</p>
                </div>
                <div class="info-card">
                    <strong>📞 Contact Us</strong>
                    <p>+254 123 456 789<br>info@laiserhill.org</p>
                </div>
            </div>
        </section>

        <div class="grid-4">
            <div class="action-card"><span>Latest Sermon</span></div>
            <div class="action-card"><span>This Sabbath</span></div>
            <div class="action-card"><span>Get Involved</span></div>
            <div class="action-card"><span>Give Online</span></div>
        </div>

        <section class="section">
            <h2>Upcoming Events</h2>
            <div class="event-row">
                <div class="event-info">
                    <strong>Prayer Meeting</strong>
                    <span>Wednesday, Jan 8 • 6:00 PM</span>
                </div>
                <button class="btn-sm">Details</button>
            </div>
            <div class="event-row">
                <div class="event-info">
                    <strong>Sabbath School</strong>
                    <span>Saturday, Jan 11 • 9:00 AM</span>
                </div>
                <button class="btn-sm">Details</button>
            </div>
        </section>
    </main>

</body>
</html>