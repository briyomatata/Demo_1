<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sermons & Leadership - Laiser Hill SDA</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
    <link rel="stylesheet" href="sermons.css?v=<?php echo filemtime('sermons.css'); ?>">
</head>
<body>
    <?php include('sidebar.php'); ?>

    <main class="content">
        <section class="leadership-section">
            <header class="section-header">
                <h2>Our Spiritual Leaders</h2>
                <p>Dedicated to guiding our church family in spiritual growth and service.</p>
            </header>

            <div class="pastor-card">
                <div class="pastor-img">👤</div>
                <div class="pastor-details">
                    <h3>Pastor John Doe</h3>
                    <p>Pastor John focuses on discipleship, community engagement, and biblical teaching.</p>
                    <div class="pastor-actions">
                        <button class="btn btn-sm">Email Pastor</button>
                        <button class="btn btn-outline btn-sm">Schedule Visit</button>
                    </div>
                </div>
            </div>

            <div class="elders-grid">
                <div class="elder-card">
                    <div class="elder-avatar">👤</div>
                    <div class="elder-info">
                        <h4>Elder Michael Smith</h4>
                        <p>Head Elder</p>
                    </div>
                </div>
                <div class="elder-card">
                    <div class="elder-avatar">👤</div>
                    <div class="elder-info">
                        <h4>Elder David Brown</h4>
                        <p>Assistant Head Elder</p>
                    </div>
                </div>
                <div class="elder-card">
                    <div class="elder-avatar">👤</div>
                    <div class="elder-info">
                        <h4>Elder Michael Smith</h4>
                        <p>Head Elder</p>
                    </div>
                </div>
                <div class="elder-card">
                    <div class="elder-avatar">👤</div>
                    <div class="elder-info">
                        <h4>Elder David Brown</h4>
                        <p>Assistant Head Elder</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sermon-library">
            <div class="library-header">
                <h2>Sermon Library</h2>
                <div class="search-box">
                    <input type="text" id="sermonSearch" placeholder="Search by title, speaker, or theme...">
                </div>
            </div>

            <div class="sermon-list" id="sermonList">
                <div class="sermon-row" data-title="Walking by Faith">
                    <div class="play-icon">▶</div>
                    <div class="sermon-meta">
                        <strong>Walking by Faith</strong>
                        <p>Pastor John Doe • Jan 4, 2026</p>
                    </div>
                    <div class="sermon-tags">
                        <span class="tag">Faith</span>
                    </div>
                    <div class="sermon-actions">
                        <button class="btn-icon">🎧 Listen</button>
                        <button class="btn-icon">📥 Download</button>
                    </div>
                </div>

                <div class="sermon-row" data-title="The Power of Prayer">
                    <div class="play-icon">▶</div>
                    <div class="sermon-meta">
                        <strong>The Power of Prayer</strong>
                        <p>Elder Michael Smith • Dec 28, 2025</p>
                    </div>
                    <div class="sermon-tags">
                        <span class="tag">Prayer</span>
                    </div>
                    <div class="sermon-actions">
                        <button class="btn-icon">🎧 Listen</button>
                        <button class="btn-icon">📥 Download</button>
                    </div>
                </div>

                 <div class="sermon-row" data-title="The Power of Prayer">
                    <div class="play-icon">▶</div>
                    <div class="sermon-meta">
                        <strong>The Power of Prayer</strong>
                        <p>Elder Michael Smith • Dec 28, 2025</p>
                    </div>
                    <div class="sermon-tags">
                        <span class="tag">Prayer</span>
                    </div>
                    <div class="sermon-actions">
                        <button class="btn-icon">🎧 Listen</button>
                        <button class="btn-icon">📥 Download</button>
                    </div>
                </div>

                 <div class="sermon-row" data-title="The Power of Prayer">
                    <div class="play-icon">▶</div>
                    <div class="sermon-meta">
                        <strong>The Power of Prayer</strong>
                        <p>Elder Michael Smith • Dec 28, 2025</p>
                    </div>
                    <div class="sermon-tags">
                        <span class="tag">Prayer</span>
                    </div>
                    <div class="sermon-actions">
                        <button class="btn-icon">🎧 Listen</button>
                        <button class="btn-icon">📥 Download</button>
                    </div>
                </div>

                 <div class="sermon-row" data-title="The Power of Prayer">
                    <div class="play-icon">▶</div>
                    <div class="sermon-meta">
                        <strong>The Power of Prayer</strong>
                        <p>Elder Michael Smith • Dec 28, 2025</p>
                    </div>
                    <div class="sermon-tags">
                        <span class="tag">Prayer</span>
                    </div>
                    <div class="sermon-actions">
                        <button class="btn-icon">🎧 Listen</button>
                        <button class="btn-icon">📥 Download</button>
                    </div>
                </div>
            </div>
            
            <div class="load-more-wrapper">
                <button id="loadMoreBtn" type="button" class="btn btn-primary">Load more sermons</button>
            </div>
        </section>
    </main>

    <script src="sermons.js"></script>
</body>
</html>