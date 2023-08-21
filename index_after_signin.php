<?php

session_start();


if (!isset($_SESSION["username"])) {
    
    header("Location: signin.html"); 
    exit();
}

// Now you can use the username from the session variable
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vegetables & Fruits Vending</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRtTuRY4TCuz5U5K40zUJ+8C4S47KS3d+ECPlnX2W" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e3350104d5.js" crossorigin="anonymous"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="footer.css">
</head>
<body>
  <!-- Navbar -->
  
  <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index_after_signin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_after.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index_after_signin.php#product-categories">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="price/price.html">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback/feedback.html">FeedBack</a>
          </li>
        </ul>

        <!-- Register Now and Sign In Buttons -->
        <div class="d-flex">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <form action="signin.html" method="post">
        <button type="submit" class="btn btn-danger ml-3">Logout</button>
        </form>
        </div>
        
<span onclick="toggleCart()" ><i class="fa-solid fa-cart-shopping fa-bounce fa-3x" style="color: #008040;"><span class="cart-count">0</span></i> </span>
</div>


        <!-- Search Bar -->
        
      </div>
    </div>
  </nav>


  <!-- Header Section with Parallax -->
  <header class="parallax-bg text-center">
    <div class="overlay"></div>
    <div class="container">
      <h1 class="display-4">Welcome to Vegetable & Fruits Vending</h1>
      <p class="lead">Discover the freshest and tastiest produce in town!</p>
      <a href="#categories" class="btn btn-success btn-lg">Explore Categories</a>
    </div>
  </header>
  
<!-- Services Section with Parallax Effect -->
<div id="services">
<section class="services parallax-bg py-5 mt-5">
    <div class="overlay"></div>
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <img src="images/quality.png" alt="Service Icon">
            <h4>Quality Produce</h4>
            <p>We offer the freshest and highest quality vegetables and fruits sourced directly from local farms.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <img src="images/fast (2).png" alt="Service Icon">
            <h4>Fast Delivery</h4>
            <p>Enjoy fast and reliable delivery services right to your doorstep for your convenience.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <img src="images/guarantee.png" alt="Service Icon">
            <h4>Wide Variety</h4>
            <p>Choose from a wide variety of seasonal vegetables and fruits to suit your preferences.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> 
    <!-- Testimonials Section with Parallax Effect -->
    <section id="testimonials" class="testimonials parallax-bg py-5 mt-5">
        <div class="overlay"></div>
        <div class="container">
          <h2 class="text-center text-white mb-4">Customer Testimonials</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="testimonial-item">
                
                <blockquote>
                  "The fruits and vegetables from this store are always fresh and delicious. Highly recommended!"
                </blockquote>
                <p class="customer-name">Mary</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="testimonial-item">
                
                <blockquote>
                  "I love the convenience of getting farm-fresh produce delivered right to my doorstep. Great service!"
                </blockquote>
                <p class="customer-name">David</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="testimonial-item">
                
                <blockquote>
                  "The variety of vegetables and fruits available here is impressive. Always a pleasure to shop!"
                </blockquote>
                <p class="customer-name">Emma</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <h2 class="divider line glow" contenteditable></h2>
<!-- Featured Products Section -->
<section id="featured-products" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/avocado 1.png" class="card-img-top" alt="Featured Product 1">
          <div class="card-body">
            <h5 class="card-title">Organic Avocado</h5>
            <p class="card-text">Fresh and creamy avocados sourced from local organic farms.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/Strawberry.png" class="card-img-top" alt="Featured Product 2">
          <div class="card-body">
            <h5 class="card-title">Juicy Strawberries</h5>
            <p class="card-text">Sweet and juicy strawberries picked at the peak of ripeness.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/broccoli_0.png" class="card-img-top" alt="Featured Product 3">
          <div class="card-body">
            <h5 class="card-title">Farm-fresh Broccoli</h5>
            <p class="card-text">Nutritious and tender broccoli directly from local farms.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="container">
    <!-- Hero Section -->
    <section id="product-categories" class="parallax-bg py-5 mt-5">
      <h2 class="text-center mb-4">Product Categories</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title"><a href="#vegetables">Vegetables</a></h3>
              <!-- Add more vegetable information here -->
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title"><a href="#fruits">Fruits</a></h3>
              <!-- Add more fruit information here -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="product-listings py-5">
      <h2 class="text-center mb-4" id="vegetables">Vegetables</h2>
      <br>
      <br>
      <div class="row">
        <div class="col-md-3">
          <div class="card product-card">
            <img src="images/broccoli_0.png" class="card-img-top" alt="Vegetable 1">
            <div class="card-body">
              <h5 class="card-title">Broccoli</h5>
              <p class="card-text">Broccoli is a nutritious vegetable that is rich in vitamins, minerals, and fiber, offering various health benefits, including supporting immune function, promoting heart health, and aiding in digestion.</p>
              <span class="price">Rs.150/kg</span>
              <button class="btn btn-success btn-block mt-3" onclick="addToCart('Broccoli', 150, 'images/broccoli_0.png');">Add to Cart</button>
            </div>
          </div>
          
        </div>


        <!-- Add more vegetable listings here -->
        <div class="col-md-3">
            <div class="card product-card">
              <img src="images/brinjal_0.png" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Brinjal</h5>
                <p class="card-text">Brinjals are low in calories and a good source of dietary fiber, vitamins, and minerals, including vitamins C, K, and B6, as well as potassium and manganese.</p>
                <span class="price">Rs.39/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('Brinjal', 39, 'images/brinjal_0.png');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/kohlrabi.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Kohlrabi</h5>
                <p class="card-text">Kohlrabi is a nutritious and versatile vegetable, known for its crunchy texture and mild, slightly sweet flavor, often enjoyed raw in salads or cooked in various dishes..</p>
                <span class="price">Rs.59/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('kohlrabi', 59, 'images/kohlrabi.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/turnips.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Turnips</h5>
                <p class="card-text">Turnips are a root vegetable with a distinct earthy flavor, offering a good source of fiber, vitamins, and minerals, and they can be cooked, mashed, or added to soups for a hearty and nutritious meal.</p>
                <span class="price">Rs.79/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('turnips', 79, 'images/turnips.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/potato.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Potatoes</h5>
                <p class="card-text">Potatoes are a starchy staple, rich in carbohydrates, vitamin C, and potassium, providing energy and supporting immune function, while their versatility makes them a popular ingredient in countless dishes worldwide.</p>
                <span class="price">Rs.20/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('Potato', 20, 'images/potato.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/peas.jpg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Peas</h5>
                <p class="card-text">Peas are a small yet mighty vegetable, brimming with fiber, vitamins, and protein, enhancing digestion and contributing to overall health, often enjoyed as a side dish or incorporated into various recipes.</p>
                <span class="price">Rs.40/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('peas', 40, 'images/peas.jpg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/radish.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Radish</h5>
                <p class="card-text">Radish is a root vegetable with a sharp and peppery flavor, offering a good source of vitamins, fiber, and antioxidants, promoting digestion and adding a delightful crunch to salads and other dishes.</p>
                <span class="price">Rs.30/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('radish', 30, 'images/radish.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/spinach.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Spinach</h5>
                <p class="card-text">Spinach is a leafy green vegetable that's packed with nutrients like iron, vitamins, and antioxidants, contributing to strong bones and overall health, commonly used in salads, smoothies, and various cooked dishes.</p>
                <span class="price">Rs.50/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('spinach', 50, 'images/spinach.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/cabbage.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Cabbage</h5>
                <p class="card-text">Cabbage is a leafy vegetable, known for its versatility and high nutritional content, including vitamins, fiber, and antioxidants, making it a valuable addition to various cuisines and diets.</p>
                <span class="price">Rs.40/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('cabbage', 40, 'images/cabbage.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card product-card">
              <img src="images/jicama.jpeg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Jicama</h5>
                <p class="card-text">Jicama is a nutrient-rich root vegetable with a crisp and refreshing texture, often enjoyed raw in salads or as a crunchy snack, providing a good source of dietary fiber and essential vitamins.</p>
                <span class="price">Rs.100/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('jicama', 100, 'images/jicama.jpeg');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                  <img src="images/onion_0.png" class="card-img-top" alt="Vegetable 1">
                  <div class="card-body">
                    <h5 class="card-title">Onion</h5>
                    <p class="card-text">Onions are a versatile vegetable that adds flavor to a wide range of dishes and provides health benefits, including being rich in antioxidants, vitamin C, and fiber, which can support the immune system, heart health, and digestive function.</p>
                    <span class="price">Rs.40/kg</span>
                    <button class="btn btn-success btn-block mt-3" onclick="addToCart('Onion', 25, 'images/onion_0.png');">Add to Cart</button>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/gourd_0.png" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Pumpkin</h5>
                        <p class="card-text">Pumpkin, a nutritious and vibrant orange vegetable, is rich in vitamins, fiber, and antioxidants, supporting eye health and immune function, and commonly used in both savory and sweet recipes.</p>
                        <span class="price">Rs.60/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Pumpkin', 60, 'images/gourd_0.png');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-3">
            <div class="card product-card">
              <img src="images/mushroom.jpg" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Mushroom</h5>
                <p class="card-text">Mushrooms are a unique and versatile fungus, low in calories and fat, yet rich in vitamins, minerals, and antioxidants, contributing to immune support and overall well-being, often included in various culinary dishes.</p>
                <span class="price">Rs.200/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('Mushroom', 200, 'images/mushroom.jpg');">Add to Cart</button>
              </div>
            </div>
           
            </div>

            <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/bhindi.jpg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Ladyfinger</h5>
                        <p class="card-text"> Ladyfinger, also known as okra, is a green vegetable with a distinct texture often used in soups and stews. It's a good source of dietary fiber, vitamins, and minerals, aiding digestion and promoting a healthy gut.</p>
                        <span class="price">Rs.60/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Ladyfinger', 60, 'images/bhindi.jpg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                  
                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/asparagus.jpeg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Asparagus</h5>
                        <p class="card-text">   Asparagus, a slender and nutrient-packed vegetable, is rich in vitamins, minerals, and antioxidants, supporting healthy digestion and contributing to heart health, commonly enjoyed roasted, grilled, or as part of various dishes.</p>
                        <span class="price">Rs.80/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('asparagus', 80, 'images/asparagus.jpeg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                  
                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/celery.jpeg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">celery</h5>
                        <p class="card-text">    Celery is a crunchy and hydrating vegetable, low in calories and rich in dietary fiber, vitamins, and antioxidants, known for its potential to aid in digestion and promote overall health, often used as a snack or ingredient in recipes.</p>
                        <span class="price">Rs.70/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('celery', 70, 'images/celery.jpeg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
      </div>
      
      <h2 class="divider line glow" contenteditable></h2>
      <h2 class="text-center mt-4" id="fruits">Fruits</h2>
      <br>
      <br>
      <div class="row">
        <div class="col-md-3">
          <div class="card product-card">
            <img src="images/banana_realisti_1.png" class="card-img-top" alt="Fruit 1">
            <div class="card-body">
              <h5 class="card-title">Banana</h5>
              <p class="card-text">Bananas are a popular fruit known for their natural sweetness and numerous health benefits, such as being a good source of potassium, vitamin C, vitamin B6, and dietary fiber, which can aid in heart health, digestion, and muscle function</p>
              <span class="price">Rs.60/dozen</span>
              <button class="btn btn-success btn-block mt-3" onclick="addToCart('Banana', 60, 'images/banana_realisti_1.png');">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="card product-card">
              <img src="images/tomato_1.png" class="card-img-top" alt="Vegetable 1">
              <div class="card-body">
                <h5 class="card-title">Tomato</h5>
                <p class="card-text">Tomatoes are a nutritious fruit that is commonly used as a vegetable in cooking. They are an excellent source of vitamins C and K, as well as potassium and antioxidants like lycopene. </p>
                <span class="price">Rs.200/kg</span>
                <button class="btn btn-success btn-block mt-3" onclick="addToCart('Tomato', 200, 'images/tomato_1.png');">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                  <img src="images/mango 1.png" class="card-img-top" alt="Vegetable 1">
                  <div class="card-body">
                    <h5 class="card-title">Mango</h5>
                    <p class="card-text">Mango is rich in vitamins, minerals, and antioxidants, and it has been associated with many health benefits, including potential anticancer effects, as well as improved immunity and digestive and eye health.</p>
                    <span class="price">Rs.60/kg</span>
                    <button class="btn btn-success btn-block mt-3" onclick="addToCart('Mango', 60, 'images/mango 1.png');">Add to Cart</button>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/papaya 0.png" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Papaya</h5>
                        <p class="card-text">Papayas contain high levels of antioxidants vitamin A, vitamin C, and vitamin E. Diets high in antioxidants may reduce the risk of heart disease.</p>
                        <span class="price">Rs.80/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Papaya', 80, 'images/papaya 0.png');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/cherry.jpeg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">cherry</h5>
                        <p class="card-text">Cherries are a delicious and nutritious source of vitamins, offering a burst of antioxidants and essential nutrients in every bite.</p>
                        <span class="price">Rs.300/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('cherry', 300, 'images/cherry.jpeg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                  
                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/kiwi.jpeg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Kiwi</h5>
                        <p class="card-text">  Kiwi is a vibrant and vitamin-rich fruit, packed with a refreshing tanginess that provides a boost of immune-boosting nutrients and fiber.</p>
                        <span class="price">Rs.400/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('kiwi', 400, 'images/kiwi.jpeg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/litchi.jpeg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">litchi</h5>
                        <p class="card-text"> 
Lychee, with its sweet and fragrant flesh, is a tropical fruit that offers a juicy and vitamin C-rich treat, supporting both hydration and skin health.</p>
                        <span class="price">Rs.100/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Litchi', 100, 'images/litchi.jpeg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/grapes.jpg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Grapes</h5>
                        <p class="card-text"> 
                        Grapes, both delicious and nutritious, are a great natural source of antioxidants and vitamins, contributing to heart health and a balanced diet.</p>
                        <span class="price">Rs.160/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Grapes', 160, 'images/grapes.jpg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>
                  
                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/avocado 1.png" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Avovado</h5>
                        <p class="card-text"> 
                        Avocado is a creamy and nutritious fruit, abundant in healthy fats, vitamins, and minerals, promoting heart health and offering various benefits for skin and overall well-being, frequently enjoyed in salads, spreads, and as a topping.</p>
                        <span class="price">Rs.150/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('avocado', 150, 'images/avocado 1.png');">Add to Cart</button>
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/Strawberry.png" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Strawberreies</h5>
                        <p class="card-text"> 
                        Strawberries are vibrant and vitamin-packed berries, loaded with antioxidants and fiber, supporting immune function and skin health, commonly enjoyed as a sweet and nutritious treat or added to a variety of dishes.</p>
                        <span class="price">Rs.200/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Strawberry', 200, 'images/Strawberry.png');">Add to Cart</button>
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/pineaple.jpg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Pineapple</h5>
                        <p class="card-text"> 
                        Pineapple is a juicy and tropical fruit, brimming with vitamin C and enzymes that aid digestion, contributing to immune support and vibrant skin, often enjoyed fresh, in smoothies, or as a sweet addition to dishes.</p>
                        <span class="price">Rs.160/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Pineapple', 160, 'images/pineaple.jpg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="card product-card">
                      <img src="images/guavava.jpg" class="card-img-top" alt="Vegetable 1">
                      <div class="card-body">
                        <h5 class="card-title">Guava</h5>
                        <p class="card-text"> 
                        Guava is a tropical fruit known for its fragrant aroma and sweet taste, offering a rich source of vitamin C, dietary fiber, and antioxidants, supporting immune health and digestion, and often enjoyed fresh or used in various culinary creations.</p>
                        <span class="price">Rs.80/kg</span>
                        <button class="btn btn-success btn-block mt-3" onclick="addToCart('Guava', 80, 'images/guavava.jpg');">Add to Cart</button>
                      </div>
                    </div>
                    </div>


        <!-- Add more fruit listings here -->
      </div>
    </section>
  </div>
  
  <!-- Cart Section -->
  <div id="cart" class="container py-3">
    <h2 class="text-center mb-4">Shopping Cart</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <!-- Cart items go here -->
      </div>
    </div>
    <div class="text-center mt-3">
      <button class="btn btn-primary" onclick="redirectToCheckout()">Checkout</button>
    </div>
  </div>
  <h2 class="divider line glow" contenteditable></h2>
    <!-- Contact Us Section -->
    <section id="contact" class="contact py-5">
        <div class="container">
          <h2 class="text-center mb-4">Contact Us</h2>
          <div class="row">
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><a href="mailto:sahilsaklani74177@gmail.com" style="color: rgb(165, 42, 136);"> Message</a></button>
              </form>
            </div>
            <div class="col-md-6 contact-info">
              <h5>Contact Information</h5>
              <p>Address: Clement Town, Dehradun, Uttarakhand</p>
              <p>Email: sahilsaklani74177@gmail.com</p>
              <p>Phone: +91 6395611428</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><img src="facebook-icon.png" alt="Facebook"></a></li>
                <li class="list-inline-item"><a href="#"><img src="twitter-icon.png" alt="Twitter"></a></li>
                <li class="list-inline-item"><a href="#"><img src="instagram-icon.png" alt="Instagram"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    
    
  <!-- Footer -->
  
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Proactors<span><a class="navbar-brand" href="index.html"></a></span></h3>

        <p class="footer-links">
            <a href="#" class="link-1">Home</a>
            
            <a href="#">Blog</a>
        
            <a href="#">Pricing</a>
        
            <a href="#">About</a>
            
            <a href="#">Faq</a>
            
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Proactors © 2023</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Clement town</span> dehradun</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+91-9989988999</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
  We buy the items directly from the farmers and sell them to you.
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>
<script>
  // Function to get URL parameters
  function getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  // Get the username from the URL parameter
  const username = getUrlParameter('username');

  // Update the welcome message based on the username
  if (username) {
    const welcomeMessage = document.createElement('p');
    welcomeMessage.textContent = `Hello, ${username}! Welcome to our website.`;
    document.body.appendChild(welcomeMessage);
  } else {
    // Handle cases where the username parameter is not present
  }
</script>
  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Parallax.js -->
  <script src="parallax.js"></script>
  <!-- Custom JS -->
  <script src="custom.js"></script>
</body>
</html>