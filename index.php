<?php
$pageTitle = "Home";
include "view/header.php";
?>

<script>
  function displayGreeting() {
    const now = new Date();
    const hour = now.getHours();
    let greeting = "Hello!";
    if (hour < 12) {
        greeting = "Good Morning!";
    } else if (hour < 18) {
        greeting = "Good Afternoon!";
    } else {
        greeting = "Good Evening!";
    }
    document.getElementById('greeting').innerText = greeting;
}  
</script>


      
      <h1 style="color:#91B6D4;">DG Music Supply</h1>

      <p id="greeting" style="color:#e5e4e2;">Welcome!</p>
      <script>displayGreeting();</script>

      <p style="color:#e5e4e2;"><strong>At DG Music Supply, we believe music is more than just sound – it's a universal language that connects us all. Whether you're a seasoned musician, an aspiring artist, or someone simply looking to explore the magic of music, we are here to support your journey.</strong></p>

      
      <button class="btn btn-primary" onclick="generateRandomQuote()">Why choose us?</button>
      <p id="quote-display" style="color:#e5e4e2;margin-top:1%;">Why Choose DG Music Supply?</p>

      <script>
            function generateRandomQuote() {
                const quotes = [
                  "Top Brands You Trust: We partner with renowned brands to bring you the best instruments and gear.",
                  "Expert Guidance: Our knowledgeable staff is here to help you find the perfect instrument for your needs.",
                  "Affordable Prices: Great music shouldn't come with a high price tag – we offer competitive pricing and exclusive deals.",
                  "Convenient Shopping: Enjoy a seamless online shopping experience with fast shipping and excellent customer service."
                ];
                const randomIndex = Math.floor(Math.random() * quotes.length);
                document.getElementById('quote-display').innerText = quotes[randomIndex];
            }
      </script>
      
<?php
include "view/footer.php";
?>
