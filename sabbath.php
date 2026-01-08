<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabbath Program - Laiser Hill SDA</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
    <link rel="stylesheet" href="sabbath.css?v=<?php echo filemtime('sabbath.css'); ?>">
</head>
<body>
    <?php include('sidebar.php'); ?>

    <main class="content">
        <div class="program-header-grid">
            <div class="time-card">
                <span class="icon">🕒</span>
                <strong>Sabbath School</strong>
                <p>9:00 AM</p>
            </div>
            <div class="time-card">
                <span class="icon">📖</span>
                <strong>Divine Service</strong>
                <p>11:00 AM</p>
            </div>
            <div class="time-card">
                <span class="icon">🍲</span>
                <strong>Fellowship Lunch</strong>
                <p>12:30 PM</p>
            </div>
        </div>

        <section class="schedule-section">
            <div class="section-title-bar">
                <h2>This Sabbath's Schedule</h2>
                <button class="btn-download">Download PDF</button>
            </div>

            <div class="schedule-list">
                <div class="schedule-row highlight">
                    <div class="time-meta">
                        <span class="clock">🌅 Sunset</span>
                        <span class="duration">10 min</span>
                    </div>
                    <div class="event-details">
                        <strong>Sabbath Begins</strong>
                        <p>Welcome the Sabbath with family worship</p>
                    </div>
                </div>

                <div class="schedule-row dark">
                    <div class="time-meta">
                        <span class="clock">9:00 AM</span>
                        <span class="duration">15 min</span>
                    </div>
                    <div class="event-details">
                        <strong>Song Service</strong>
                        <p>Opening hymns and praise</p>
                    </div>
                    <button class="watch-link">🎥 Watch</button>
                </div>

                <div class="schedule-row">
                    <div class="time-meta">
                        <span class="clock">9:15 AM</span>
                        <span class="duration">15 min</span>
                    </div>
                    <div class="event-details">
                        <strong>Sabbath School Opening</strong>
                        <p>Mission spotlight and announcements</p>
                    </div>
                </div>

                <div class="schedule-row">
                    <div class="time-meta">
                        <span class="clock">9:30 AM</span>
                        <span class="duration">60 min</span>
                    </div>
                    <div class="event-details">
                        <strong>Sabbath School Classes</strong>
                        <p>Age-appropriate Bible study groups</p>
                    </div>
                </div>

                <div class="schedule-row dark">
                    <div class="time-meta">
                        <span class="clock">11:00 AM</span>
                        <span class="duration">90 min</span>
                    </div>
                    <div class="event-details">
                        <strong>Divine Service</strong>
                        <p>Sermon by Pastor John Doe</p>
                    </div>
                    <button class="watch-link">🎥 Watch</button>
                </div>
            </div>
        </section>

        <section class="segments-grid">
            <div class="card">
                <h4>Children's Story</h4>
                <p>Engaging Bible stories for the little ones.</p>
                <span class="tag">10:45 AM</span>
            </div>
            <div class="card">
                <h4>Special Music</h4>
                <p>Musical praises by our church choir.</p>
                <span class="tag">Various</span>
            </div>
             <div class="card">
                <h4>Youth Involvement</h4>
                <p>Engaging Bible stories for the little ones.</p>
                <span class="tag">10:45 AM</span>
            </div>
            <div class="card">
                <h4>Mission Spotlight</h4>
                <p>Musical praises by our church choir.</p>
                <span class="tag">Various</span>
            </div>
        </section>
    </main>
</body>
</html>