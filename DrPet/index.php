<?php
$conn = mysqli_connect('localhost','root','','drpet_db') or die('connection failed');

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $type = mysqli_real_escape_string($conn, $_POST['type']);
   $age = $_POST['age'];
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `appointment_form`(name, type, age, email, number, date) 
   VALUES('$name','$type', '$age', '$email','$number','$date')") or die('query failed');  
}
?>

<?php
$conn = mysqli_connect('localhost','root','','drpet_db') or die('connection failed');

if(isset($_POST['submit'])){
   $amount = mysqli_real_escape_string($conn, $_POST['amount']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];

   $insert = mysqli_query($conn, "INSERT INTO `donation_form`(amount, name, email, number) 
   VALUES('$amount','$name','$email','$number')") or die('query failed');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Pet Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <header class="header">
        <a href="#" class="logo"> <i class="fa-solid fa-shield-dog"></i> Dr. Pet </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <a href="#review">review</a>
            <a href="#donation">donation</a>
            <a href="#blogs">blogs</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <section class="home" id="home">
        <div class="image">
            <img src="image/home.jpg" alt="">
        </div>
    
        <div class="content">
            <h3>Your Most Trusted Pet Clinic</h3>
            <p>We care about your pets.</p>
            <p>Your Pet is our family.</p>
            <a href="#click" class="btn"> Contacts <span class="fas fa-chevron-right"></span> </a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"> <span>about</span> us </h1>
        <div class="row">
    
            <div class="content">
                <h3>Welcome to Dr. Pet!</h3>
                <p>Dr. Pet is a website of clinical house for pets. It gives the best cares and nursing to the sick pets where owners can easily browse through it or any urgency like medication, doctors' consultaion and even making immediate appoinment. </p>
                <p> We also provide the street & homeless animals with special care and donation.</p>
                <a href="#click" class="btn"> Find Us <span class="fas fa-chevron-right"></span> </a> <br> <br>
                <a href="#click" class="btn"> Follow Us <span class="fas fa-chevron-right"></span> </a>
            </div>
            
            <div class="image">
                <img src="image/about.webp" alt="">
            </div>
        </div>
    </section>

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkups</h3>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>70+ expert doctors</h3>
            </div>
    
            
            <div class="box">
                <i class="fa-solid fa-dog"></i>
                <h3>1200+ pets visited</h3>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-syringe"></i>
                <h3>urgent treatments</h3>
            </div>

            <div class="box">
                <i class="fa-solid fa-paw"></i>
                <h3>Grooming</h3>
            </div>

            <div class="box">
                <i class="fa-solid fa-cat"></i>
                <h3>special care for street animals</h3>
            </div>

            <div class="box">
                <i class="fa-solid fa-house-medical-flag"></i>
                <h3>24/7 service</h3>
            </div>
    
        </div>
    
    </section>


    <section class="doctors" id="doctors">
        <h1 class="heading"> our <span>doctors</span> </h1>
        <div class="box-container">
    
            <div class="box">
                <img src="image/doc-1.jpg" alt="">
                <h3>Dr. Anika Islam</h3>
                <span>senior doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/doc-2.jpg" alt="">
                <h3>Dr. Arif Haque</h3>
                <span>senior doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/doc-3.jpg" alt="">
                <h3>Dr. Hasan Sheikh</h3>
                <span>senior doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/doc-4.jpg" alt="">
                <h3>Dr. Tamim Islam</h3>
                <span>senior doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/doc-5.jpg" alt="">
                <h3>Dr. Sheela Chowdhury</h3>
                <span>junior doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/doc-6.jpg" alt="">
                <h3>Dr. Tarek Islam</h3>
                <span>junior doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
        </div>
    
    </section>
    
    <section class="appointment" id="appointment">
        <h1 class="heading">Make <span>Appointment</span></h1>    

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
      <span>What's the name of your pet? :</span>
      <input type="text" name="name" placeholder="pet's name" class="box" required>
      <span> What's the type of your Pet? :</span>
      <input type="text" name="type" placeholder="pet's type (dog, cat, bird, etc.)" class="box" required>
      <span>How old is your pet? :</span>
      <input type="text" name="age" placeholder="pet's age (yrs/months/days)" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="owner's email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="owner's number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" placeholder="appointment date" class="box" required>

      <input type="submit" value="Click Here to Book" name="submit" class="btn">
   </form>  
</section>

    <section class="review" id="review">
    
        <h1 class="heading"> client's <span>review</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="image/pic-1.png" alt="">
                <h3>Abid Hasan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text"> Very good service. They do free checkups & give
                    urgent treatments. I've 2 dogs and they absolutely love going there!</p></div>
    
            <div class="box">
                <img src="image/pic-2.png" alt="">
                <h3>Nafisa Islam</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">I always go there to groom my pets. The doctors are very friendly.
                    Excellent vets with excellent skills!</p></div>
    
            <div class="box">
                <img src="image/pic-3.png" alt="">
                <h3>Steve Gomes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">I work in an animal shelter and And Dr. Pet always gives us 
                    free checkups and charity. Their great mindset
                    for saving the homeless-street animals is very inspiring. </p>
                </div>

            <div class="box">
                <img src="image/pic-4.jpg" alt="">
                <h3>Tonny Saha</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Went to many clinical center for my cat. But Dr. Pet is the Best one so far.
                    They never fail to give urgent medication. What an excellent service!</p></div>
        </div>
    
    </section>

    <section class="donation" id="donation">
   <h1 class="heading"><span>Donate</span> to save poor animals</h1>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      <span>donate amount :</span>
      <input type="text" name="amount" placeholder="amount (tk)" class="box" required>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <input type="submit" value="Click Here to Donate" name="submit" class="btn">
   </form>  
</section>

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 3rd November, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Dr. Pet's new Charity Event!</h3>
                    <p>Dr. Pet collected 10 lakhs taka for homeless-street pets from their
                    recent charity event...
                    </p>
                    <a href="#" class="btn"> Read Here <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 29th October, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Dr. Pet brings new diagonasis machines</h3>
                    <p>Dr. Pet has installed new machines for pets to their clinic...</p>
                    <a href="#" class="btn"> Read Here <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 7th October, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Best Vet Clinc Award to Dr. Pet</h3>
                    <p>Dr. Pet wins award for the best Veterinery or Pet Care Center of the country... </p>
                    <a href="#" class="btn"> Read Here <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer" id="click" >
        <div class="box-container">
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +88 011-222-333 </a>
                <a href="#"> <i class="fas fa-phone"></i> +88 011-222-444 </a>
                <a href="#"> <i class="fas fa-envelope"></i> drpet@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> drpet_admin@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Chittagong, Bangladesh </a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>
            <div class="box">
                <h3>Find Us</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.855700802036!2d91.81726232340766!3d22.35907678825275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89aaa8239cd%3A0x6e65fa00001dd59f!2sGEC%20More%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1669100141730!5m2!1sen!2sbd" width="600" height="250" style="border: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    
<script src="script.js"></script>
</body>
</html>