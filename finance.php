<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Finances - Laiser Hill SDA</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
    <link rel="stylesheet" href="finance.css?v=<?php echo filemtime('finance.css'); ?>">
</head>
<body>

 <?php include('sidebar.php'); ?>
    <main class="content">
        <header class="section-header">
            <h2>Church Finances</h2>
            <p>Give offerings and welfare contributions securely and transparently.</p>
        </header>

        <section class="privacy-banner dark">
            <div class="banner-content">
                <strong>🛡️ Secure & Transparent Giving</strong>
                <div class="privacy-grid">
                    <span>✓ Annual giving statements</span>
                    <span>✓ Financial reports available</span>
                </div>
            </div>
        </section>

        <section class="finance-stats">
            <div class="stat-card">
                <span class="label">Total This Year</span>
                <span class="value">KSh 2,450</span>
            </div>
            <div class="stat-card">
                <span class="label">Transactions</span>
                <span class="value">24</span>
            </div>
            
        </section>

        <div class="finance-grid">
            <section class="card giving-form">
                <h3>Offertory</h3>
                <form id="givingForm">
                    <div class="form-group">
                        <label>Select or enter amount</label>
                        <div class="amount-tags">
                            <button type="button" class="tag" data-amt="10">KSh 10</button>
                            <button type="button" class="tag" data-amt="25">KSh 25</button>
                            <button type="button" class="tag" data-amt="50">KSh 50</button>
                            <button type="button" class="tag" data-amt="100">KSh 100</button>
                        </div>
                        <input type="number" placeholder="KSh 0.00" class="custom-amount">
                    </div>

                    <div class="form-group">
                        <label>Designation</label>
                        <select name="designation">
                            <option>Tithe</option>
                            <option>General Offering</option>
                            <option>Welfare Fund</option>
                            <option>Building Fund</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary full-width">Proceed to Payment</button>
                </form>
            </section>

            <section class="card giving-form">
                <h3>Welfare</h3>
                <form id="givingForm">
                    <div class="form-group">
                        <label>Select or enter amount</label>
                        <div class="amount-tags">
                            <button type="button" class="tag" data-amt="10">KSh 10</button>
                            <button type="button" class="tag" data-amt="25">KSh 25</button>
                            <button type="button" class="tag" data-amt="50">KSh 50</button>
                            <button type="button" class="tag" data-amt="100">KSh 100</button>
                        </div>
                        <input type="number" placeholder="KSh 0.00" class="custom-amount">
                    </>


                    <button type="submit" class="btn btn-primary full-width">Proceed to Payment</button>
                </form>
            </section>

            <section class="card history-list">
                <div class="flex-between">
                    <h3>Recent Transactions</h3>
                    <button class="btn-text">Download Statement</button>
                </div>
                <div class="transaction-item">
                    <div class="tx-icon">💰</div>
                    <div class="tx-info">
                        <strong>Tithe</strong>
                        <span>Jan 4, 2026</span>
                    </div>
                    <div class="tx-amount">KSh 150.00</div>
                </div>
                <div class="transaction-item">
                    <div class="tx-icon">🤝</div>
                    <div class="tx-info">
                        <strong>General Offering</strong>
                        <span>Jan 4, 2026</span>
                    </div>
                    <div class="tx-amount">KSh 50.00</div>
                </div>
                <div class="transaction-item">
                    <div class="tx-icon">🏥</div>
                    <div class="tx-info">
                        <strong>Welfare</strong>
                        <span>Dec 28, 2025</span>
                    </div>
                    <div class="tx-amount">KSh 25.00</div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>