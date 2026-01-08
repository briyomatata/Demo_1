<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Feedback - Laiser Hill SDA</title>
    
    <link rel="stylesheet" href="feedback.css?v=<?php echo filemtime('feedback.css'); ?>">
    <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
</head>
<body>
    <?php include('sidebar.php'); ?>

    <main class="content">
        <header class="page-header-centered">
            <h2>Anonymous Feedback</h2>
            <p>Your voice matters. Share suggestions, concerns, or ideas anonymously to help us grow.</p>
        </header>

        <section class="privacy-banner">
            <div class="banner-title">
                <span class="icon">🛡️</span>
                <strong>Your Privacy is Protected</strong>
            </div>
            <div class="privacy-grid">
                <span>✓ No names or email required</span>
                <span>✓ No login or account needed</span>
                <span>✓ Messages go directly to leadership</span>
                <span>✓ Used only to improve our ministry</span>
            </div>
        </section>

        <section class="card feedback-container">
            <h3>Share Your Feedback</h3>
            <form id="anonymousFeedbackForm" action="submit_feedback.php" method="POST">
                
                <div class="form-section">
                    <label>What area does this feedback relate to?</label>
                    <div class="tag-selector" id="areaSelector">
                        <button type="button" class="tag" data-value="Worship">Worship Service</button>
                        <button type="button" class="tag" data-value="Sabbath School">Sabbath School</button>
                        <button type="button" class="tag" data-value="Youth">Youth Ministry</button>
                        <button type="button" class="tag" data-value="Facilities">Facilities</button>
                        <button type="button" class="tag" data-value="Leadership">Leadership</button>
                        <button type="button" class="tag" data-value="Other">Other</button>
                        <input type="hidden" name="feedback_area" id="selectedArea">
                    </div>
                </div>

                <div class="form-section">
                    <label>Type of feedback</label>
                    <div class="type-grid">
                        <label class="type-btn"><input type="radio" name="type" value="Suggestion"> Suggestion</label>
                        <label class="type-btn"><input type="radio" name="type" value="Concern"> Concern</label>
                        <label class="type-btn"><input type="radio" name="type" value="Praise"> Praise</label>
                    </div>
                </div>

                <div class="form-section">
                    <label>Your message</label>
                    <textarea name="message" rows="6" placeholder="Share your thoughts here. Be as detailed as you'd like..." required></textarea>
                </div>

                <div class="form-section optional-contact">
                    <label>Would you like a response? (Optional)</label>
                    <p class="sub-label">If you'd like leadership to follow up, provide contact info. This is completely optional.</p>
                    <input type="email" name="contact" placeholder="Your email (optional)">
                    <label class="checkbox-label">
                        <input type="checkbox" required> I understand providing contact info makes this feedback non-anonymous.
                    </label>
                </div>

                <button type="submit" class="btn btn-primary full-width">Submit Feedback</button>
            </form>
        </section>

        <div class="info-footer-grid">
            <div class="card">
                <h4>How We Use Your Feedback</h4>
                <ul class="check-list">
                    <li>Identify areas for improvement</li>
                    <li>Recognize ministry successes</li>
                    <li>Address community concerns</li>
                    <li>Plan future initiatives</li>
                </ul>
            </div>
            <div class="card">
                <h4>Feedback Guidelines</h4>
                <ul class="bullet-list">
                    <li><strong>Be Specific:</strong> Detailed feedback helps us address issues.</li>
                    <li><strong>Be Constructive:</strong> Focus on solutions.</li>
                    <li><strong>Be Respectful:</strong> Remember we are one church family.</li>
                </ul>
            </div>
        </div>

        <!-- <section class="direct-contact">
            <p>Prefer to Speak Directly?</p>
            <button class="btn btn-outline">Contact Church Leadership</button>
        </section> -->
    </main>

    <script src="feedback.js"></script>
</body>
</html>