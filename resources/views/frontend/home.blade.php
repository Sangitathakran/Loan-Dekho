<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Platform UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://source.unsplash.com/1600x600/?car,finance') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        .features {
            background: #f8f9fa;
            padding: 60px 0;
        }
        .testimonials {
            background: #e9ecef;
            padding: 60px 0;
        }
        .contact {
            background: #343a40;
            color: white;
            padding: 60px 0;
        }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Kuwy Finance</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Loans</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="#">Apply Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Get Instant Car Loans</h1>
            <p>Quick and hassle-free loan approvals</p>
            <input type="text" class="form-control w-50 mx-auto" placeholder="Enter Vehicle Number">
            <button class="btn btn-warning mt-3">Check Loan Eligibility</button>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="container features text-center my-5">
        <h2>Why Choose Us?</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Instant Loan</h3>
                    <p>Quick approval and disbursement.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Low Interest Rates</h3>
                    <p>Affordable EMI plans.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Secure Processing</h3>
                    <p>Your data is always safe.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Testimonials Section -->
    <div class="testimonials text-center">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card p-4">
                        <p>"Excellent service! Got my car loan approved in no time."</p>
                        <h5>- John Doe</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4">
                        <p>"Hassle-free process and great customer support!"</p>
                        <h5>- Jane Smith</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Section -->
    <div class="contact text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions? Get in touch with us.</p>
            <form class="w-50 mx-auto">
                <input type="text" class="form-control my-2" placeholder="Your Name">
                <input type="email" class="form-control my-2" placeholder="Your Email">
                <textarea class="form-control my-2" rows="3" placeholder="Your Message"></textarea>
                <button class="btn btn-primary mt-3">Send Message</button>
            </form>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Kuwy Finance. All Rights Reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
