<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Departments - Laiser Hill SDA</title>
    <link rel="stylesheet" href="departments.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('sidebar.php'); ?>

    <main class="content">
        <header class="section-header">
            <h2>Church Departments</h2>
            <p>Our ministries work together to serve the church family and reach the community.</p>
        </header>

        <div class="dept-card">
            <div class="dept-info">
                <div class="dept-title-area">
                    <span class="dept-icon">🏢</span>
                    <h3>Deaconry</h3>
                </div>
                <p>Focused on service, order, and care within the church. Supporting worship services and member welfare.</p>
                <button class="btn-email">deaconry@laiserhill.org</button>
            </div>
            
            <div class="dept-responsibilities">
                <h4>Key Responsibilities:</h4>
                <div class="responsibilities-grid">
                    <label><input type="checkbox" checked disabled> Prepare communion services</label>
                    <label><input type="checkbox" checked disabled> Maintain church facilities</label>
                    <label><input type="checkbox" checked disabled> Support pastoral care</label>
                    <label><input type="checkbox" checked disabled> Coordinate ushering</label>
                </div>
                <button class="btn btn-outline btn-sm">Join This Department</button>
            </div>
        </div>

        <div class="dept-card">
            <div class="dept-info">
                <div class="dept-title-area">
                    <span class="dept-icon">🧭</span>
                    <h3>Pathfinders</h3>
                </div>
                <p>Building strong, disciplined, and faith-grounded young people through leadership training and mentorship.</p>
                <button class="btn-email">pathfinders@laiserhill.org</button>
            </div>
            
            <div class="dept-responsibilities">
                <h4>Key Responsibilities:</h4>
                <div class="responsibilities-grid">
                    <label><input type="checkbox" checked disabled> Weekly club meetings</label>
                    <label><input type="checkbox" checked disabled> Outdoor camping & skills</label>
                    <label><input type="checkbox" checked disabled> Community service</label>
                    <label><input type="checkbox" checked disabled> Leadership development</label>
                </div>
                <button class="btn btn-outline btn-sm">Join This Department</button>
            </div>
        </div>

         <div class="dept-card">
            <div class="dept-info">
                <div class="dept-title-area">
                    <span class="dept-icon">🧭</span>
                    <h3>Young Adults</h3>
                </div>
                <p>Building strong, disciplined, and faith-grounded young people through leadership training and mentorship.</p>
                <button class="btn-email">youngadults@laiserhill.org</button>
            </div>
            
            <div class="dept-responsibilities">
                <h4>Key Responsibilities:</h4>
                <div class="responsibilities-grid">
                    <label><input type="checkbox" checked disabled> Weekly club meetings</label>
                    <label><input type="checkbox" checked disabled> Outdoor camping & skills</label>
                    <label><input type="checkbox" checked disabled> Community service</label>
                    <label><input type="checkbox" checked disabled> Leadership development</label>
                </div>
                <button class="btn btn-outline btn-sm">Join This Department</button>
            </div>
        </div>

        <section class="serve-footer">
            <h3>Find Your Place to Serve</h3>
            <p>Every member has gifts and talents. Discover where God is calling you to serve.</p>
            <button class="btn btn-accent">Contact Department Leaders</button>
        </section>
    </main>
</body>
</html>