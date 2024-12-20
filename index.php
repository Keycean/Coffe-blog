<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="index.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
  </head>
  <body>
    <div class="container">
      <header class="header">
        <a class="logo" href="/">Coffean.</a>
        <nav class="navbar">
          <a href="" class="active">Home</a>
          <a href="blogpost.php">Our Posts</a>
          <a href="contact.html">Contact</a>
          <a href="userlogin.php" target="_blank">Login</a>
        </nav>

        <div></div>
      </header>

      <main>
        <label>
          <input type="checkbox" id="menuToggle" />
          <div class="toggle">
            <span   class="toggle1" > Coffean</span>
            <br />
            <span class="toggle2"> Quick Links</span>
          </div>

          <div class="sidebar" id="sidebar">
            <ul>
              <a href="#" class="sidebtn">Review</a>
              <a href="product.html" class="sidebtn">Menu</a>
              <a href="aboutme.html" class="sidebtn">About me</a>
              <a href="education.html" class="sidebtn">Education</a>
            </ul>
          </div>
        </label>
        <section class="main">
          <div class="main-content">
            <h1>Coffee Experience</h1>
            <h3>Coffee Pairings: What to Eat with Your Brew</h3>
            <p>
              Suggestions for food pairings that complement various types of
              coffee.
            </p>
            <a href="product.html" class="btn">Buy our Products</a>
          </div>
        </section>
      </main>
      Blog start here 
      <div class="blog-header">
        <div class="blog-title">
          <div class="blog-title1">
            <span class="blog-span1">BLOG</span>
            <span  class="blog-span2">POST</span>
          </div>
        </div>
      </div>

      <div class="blog-container">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
          <div class="sidebar-profile-box"></div>
        </div>

        <!-- Main content -->
        <div class="blog-content">
          <!-- <div class="create-post">
            <div class="create-post-input">
              <img src="image/caramel.jpg" />
              <textarea rows="2" placeholder="Write a post"></textarea>
            </div>
            <div class="create-post-links">
              <li><img src="/image/photo.png" />Photo</li>
              <li><img src="/image/video.png" />Video</li>
              <li><img src="/image/event.png" />Event</li>
              <li>Post</li>
            </div>
          </div>
          <div class="sort-by">
            <hr />
            <p>
              Sort by: <span> top <img src="image/down-arrow.png" /></span>
            </p>
          </div> -->
          
          <!-- Related coffee? -->
          

          <div class="post">
            <div class="post-author">
              <img src="image/user1.png" />
              <div>
                <h1>Keycean Klyk Seneres</h1>
                <small>Founder of Coffean</small>
                <small>2 hours ago </small>
              </div>
            </div>
            <p>"Coffee is a beverage that brings people together."</p>
            <img src="image/croissant.jpg" width="100%" />

            <div class="post-stats">
              <div>
                <img src="image/like.png" class="like" />
                <img src="image/love.png" />
                <img src="image/wow.png" class="wow" />
                <span class="liked-users">Keycean Seneres and 2.3k others</span>
              </div>
              <div>
                <span>3 comments &middot; 41 shares </span>
              </div>
            </div>

            <div class="post-activity">
              <div>
                <img src="image/user1.png" class="post-activity-user-icon" />
                <img
                  src="image/down-arrow.png"
                  class="post-activity-arrow-icon"
                />
              </div>
              <div class="post-activity-link">
                <img src="image/like.png" />
                <span>Like</span>
              </div>
              <div class="post-activity-link">
                <img src="image/comment.png" />
                <span>Comment</span>
              </div>
              <div class="post-activity-link">
                <img src="image/share.png" />
                <span>Share</span>
              </div>
              <div class="post-activity-link">
                <img src="image/send.png" />
                <span>Send</span>
              </div>
            </div>
            <!-- Comments here -->
            <div class="post-author">
              <img src="image/user6.png" />
              <div>
                <h1>Anna</h1>
                <p>Wow!! This is great!</p>
              </div>
            </div>
            <div class="post-author">
              <img src="image/user4.jpg" />
              <div>
                <h1>Mark</h1>
                <p>Wow!! This is great!</p>
              </div>
            </div>
            <div class="post-author">
              <img src="image/user5.jpg" />
              <div>
                <h1>Demi</h1>
                <p>Wow!! This is great!</p>
              </div>
            </div>
          </div>

          <div class="post">
            <div class="post-author">
              <img src="image/george.jpg" />
              <div>
                <h1>George loves coffee</h1>
                <small>Coffee lover</small>
                <small>8 sec ago </small>
              </div>
            </div>
            <p>
              Watching the rain fall while sipping a cup of coffee can be a
              relaxing and meditative experience.
            </p>
            <img src="image/rainycoffee.jpg" width="100%" />

            <div class="post-stats">
              <div>
                <img src="image/like.png" class="like" />
                <img src="image/love.png" />
                <img src="image/wow.png" class="wow" />
                <span class="liked-users">Gojo and 1.1k others</span>
              </div>
              <div>
                <span>22 comments &middot; 40 shares </span>
              </div>
            </div>

            <div class="post-activity">
              <div>
                <img src="image/user2.jpg" class="post-activity-user-icon" />
                <img
                  src="image/down-arrow.png"
                  class="post-activity-arrow-icon"
                />
              </div>
              <div class="post-activity-link">
                <img src="image/like.png" />
                <span>Like</span>
              </div>
              <div class="post-activity-link">
                <img src="image/comment.png" />
                <span>Comment</span>
              </div>
              <div class="post-activity-link">
                <img src="image/share.png" />
                <span>Share</span>
              </div>
              <div class="post-activity-link">
                <img src="image/send.png" />
                <span>Send</span>
              </div>
            </div>
            <div class="post-author">
              <img src="image/lufy.jpg" />
              <div>
                <h1>Lopi</h1>
                <p>Wow!! This is great!</p>
              </div>
            </div>
          </div>

        
        </div>
        <!-- Rightsidebar -->

        <div class="right-sidebar">
          <div class="sidebar-news">
            <img src="" class="info-icon" />

            <h2>Latest Posts</h2>
            <img src="image/coffeerp.png" width="100%" />
            <div class="post-author">
              <img src="image/user2.jpg" />
              <div>
                <h1>Gojo</h1>
                <small>Nice!</small>
              </div>
            </div>
            <div class="post-author">
              <img src="image/user3.jpg" />
              <div>
                <h1>Jean</h1>
                <small>Awesome :></small>
              </div>
            </div>
            <h2>Advertise</h2>
            <iframe
              width="100%"
              height="315"
              src="image/coffeeclips.mp4"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>

            <h2>Related</h2>
            <div class="related-container">
              <div>
                <button class="related-main">Espresso</button>
                <button class="">Cappuccino</button>
                <button class="">Doughnuts</button>
                <button class="">Latte</button>
                <button class="">Americano</button>
                <button class="">Macchiato</button>
                <button class="">Cold Brew</button>
                <button class="">Iced Coffee</button>
                <button class="">Affogato</button>
                <button class="">Turkish Coffee</button>
                <button class="">Vietnamese Coffee</button>
                <button class="">Irish Coffee</button>
                <button class="">Mocha</button>
                <button class="">Decaf Coffee</button>
              
              </div>
            </div>
          </div>
        </div>
        
      </div>
      

      <!-- Footer -->
      <footer>
        <div class="footer-container">
          <div class="footer-section">
            <h3>Company</h3>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Mission</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h3>Resources</h3>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Tutorials</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h3>Contact Us</h3>
            <ul>
              <li>Email: Coffean@gmail.com</li>
              <li>Phone: 09294291294</li>
              <li>Address: Pavia, Iloilo</li>
            </ul>
          </div>
        </div>
        <p>&copy; 2024 Coffean All Rights Reserved.</p>
      </footer>
    </div>


    <script src="product.js"></script>
    <script>  </script>
  </body>
</html>

