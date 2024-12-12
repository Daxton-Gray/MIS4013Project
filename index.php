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


      
      <h1>DG Music Supply</h1>

      <p id="greeting">Welcome!</p>
      <script style="color:#e5e4e2;">displayGreeting();</script>

      <p style="color:#e5e4e2;"><strong>At DG Music Supply, we believe music is more than just sound – it's a universal language that connects us all. Whether you're a seasoned musician, an aspiring artist, or someone simply looking to explore the magic of music, we are here to support your journey.</strong></p>
      
<?php
include "view/footer.php";
?>
