<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Searched Item</title>
  <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
  * {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    list-style: none;
    text-decoration: none;
  }
  *::selection {
    background: var(--main-color);
    color: #fff;
  }
  :root {
    --main-color: #ffb411;
    --text-color: #1e1c2a;
    --bg-color: #fff;

    --big-font: 4rem;
    --h2-font: 2.24rem;
    --p-font: 0.9rem;
  }
  section {
    padding: 50px 10px;
  }
  body.active {
    --bg-color: #1e1c2a;
    --text-color: #fff;
  }
  body {
    color: var(--text-color);
    background: var(--bg-color);
  }
  header {
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--bg-color);
    padding: 18px 100px;
    box-shadow: 0 0.5rem 50rem rgba(0, 0, 0, 0.1);
  }
  .logo {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--main-color);
  }
  .navbar {
    display: flex;
  }
  .navbar a {
    font-size: 1rem;
    padding: 10px 20px;
    color: var(--text-color);
    font-weight: 500;
  }
  .navbar a:hover {
    color: var(--main-color);
  }
  #menu-icon {
    font-size: 2rem;
    cursor: pointer;
    display: none;
  }
  .home {
    width: 100%;
    min-height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 1.5rem;
  }
  .home-img img {
    width: 100%;
  }
  .home-text h1 {
    font-size: var(--big-font);
    color: var(--main-color);
  }
  .home-text h2 {
    font-size: var(--h2-font);
    margin: 1rem 0 1rem;
  }
  .btn {
    display: inline-block;
    background: var(--main-color);
    padding: 10px 20px;
    border-radius: 0.5rem;
    color: #fff;
  }
  .btn:hover {
    background: #ffa400;
  }
  .about {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    align-items: center;
  }
  .about-img img {
    max-width: 80%;
    border-radius: 0.5rem;
  }
  .about-text span {
    color: var(--main-color);
    font-weight: 500;
  }
  .about-text h2 {
    font-size: var(--h2-font);
  }
  .about-text p {
    margin: 0.8rem 0 1.8rem;
  }
  .heading {
    text-align: center;
  }
  .heading span {
    color: var(--main-color);
    font-weight: 500;
  }
  .heading h2 {
    font-size: var(--h2-font);
  }

  .menu-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, auto));
    gap: 1.5rem;

  }
  .box {
    position: relative;
    margin-top: 2rem;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgb(4 64 54 / 10%);
    padding: 10px;
  }
  .box-img {
    width: 200px;
    height: 200px;
  }
  .box-img img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
  }
  .box h2 {
    font-size: 1.2rem;
  }
  .box h3 {
    font-size: 1rem;
    font-weight: 400;
    margin: 4px 0 10px;
  }
  .box span {
    font-size: var(--p-font);
    font-weight: 500;
  }
  .box .bx {
    position: absolute;
    right: 0;
    top: 0;
    font-size: 20px;
    background: var(--main-color);
    border-radius: 0 0.5rem 0 0.5rem;
    padding: 5px 8px;
  }
  .box .bx:hover {
    background: #ffa400;
  }
  .servives-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, auto));
    gap: 1.5rem;
    margin-top: 2rem;
  }
  .s-box {
    text-align: center;
  }
  .s-box img {
    width: 60px;
  }
  .s-box h3 {
    margin: 4px 0 10px;
  }
  .connect {
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  .connect-text span {
    color: var(--main-color);
    font-weight: 500;
  }
  .connect-text h2 {
    font-size: var(--h2-font);
  }
  .contact {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    gap: 1.5rem;
  }
  .contact-box h3 {
    margin-bottom: 1rem;
  }
  .contact-box li a {
    color: var(--text-color);
  }
  .contact-box li a:hover {
    color: var(--main-color);
  }
  .address {
    display: flex;
    flex-direction: column;
  }
  .address i {
    margin-bottom: 0.5rem;
    font-size: 1rem;
  }
  .address span {
    margin-left: 1rem;
  }
  .copyright {
    padding: 20px;
    text-align: center;
  }
  @media (max-width: 921px) {
    header {
      padding: 14px 41px;
    }
    :root {
      --big-font: 3rem;
      --h2-font: 1.7rem;
    }
  }
  @media (max-width: 768px) {
    section {
      padding: 50px 9px;
    }
    #menu-icon {
      display: initial;
      color: var(--text-color);
    }
    header .navbar {
      position: absolute;
      top: -400px;
      left: 0;
      right: 0;
      display: flex;
      flex-direction: column;
      text-align: center;
      background: var(--bg-color);
      box-shadow: 0 4px 4px rgb(0 0 0 / 10%);
      transition: 0.2s ease;
    }
    .navbar.active {
      top: 100%;
    }
    .navbar a {
      padding: 1.5rem;
      display: block;
      background: var(--bg-color);
    }
  }
  @media (max-width: 715px) {
    header {
      padding: 10px 16px;
    }
    .home {
      grid-template-columns: 1fr;
    }
    .about {
      grid-template-columns: 1fr;
      text-align: center;
    }
    .about-img {
      order: 2;
    }
  }
  @media (max-width: 515px) {
    .connect {
      flex-direction: column;
    }
    .connect .btn {
      margin-top: 1rem;
    }
  }
  @media (max-width: 450px) {
    :root {
      --big-font: 2rem;
      --h2-font: 1.4rem;
    }
    .home-text {
      padding-top: 4rem;
    }
}

footer {
  background-color: #333;
  color: #fff ;
  text-align: center;
  padding: 20px 0;
}

/* Style your search bar elements here */

form {
    display: flex; /* Arrange elements horizontally */
    margin-bottom: 20px;
    justify-content: center; /* Center the form horizontally */
}

/* Other styles remain the same */

label {
    margin-right: 10px;
}

input[type="text"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    flex-grow: 3; /* Allow input field to expand */
}

button {
    padding: 5px 10px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    margin-top: 20px; /* Add margin top to create space */
}

.search-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  /* Additional styles as needed */
}

    </style>
</head>
<body>
  
</body>
</html>

<?php
$conn = mysqli_connect('localhost','root');
$db_select = mysqli_select_db($conn, "user_db");

// Get the search term from the form
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM product WHERE P_name LIKE '%$search' OR P_name LIKE '$search%' OR P_name LIKE '%$search%'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
    $count = mysqli_num_rows($res); //agar search item exsit karrta hai toh wo kitne rows mai aata hai 
    //wo count karta hai ye wala function

  // Checking for results
    if ($count>0) {
      // Process and display search results here
      echo "<h2>Search Results for '$search'</h2>";

      while($row = mysqli_fetch_assoc($res)) {
        
        // Display each search result (e.g., name, price)
        ?>
         <div class="box">
                <div class="box-img">
                    <img src="smoodh13.png" >
                </div> <br>
                <h2><?php echo $row['P_name']; ?></h2>
                <p >₹<?php echo $row['Price']; ?></p>
                <i class='bx bx-cart-alt'></i>

                <form action="orders.php"> 
                    <input type="hidden" name="Pname" value="Smoodh Chocolate Milk">
                    <input type="hidden" name="price" value="10">
                    <input type="submit" value="Order" name="submit">
                </form>
        <?php 
        
      }
    } else {
      echo "<h2>No results found for '$search'</h2>";
    }

  } else {
    // Handle empty search case (optional)
    echo "Please enter a search term.";
  }

}else{
  echo "error occured";
}

?>