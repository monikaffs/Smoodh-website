<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Review Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }

        footer {
background-color: #DAC0A3;
padding: 20px 0;
text-align: center;
}

.container {
max-width: 1200px;
margin: 0 auto;
}

p1 {
margin: 0;
color: #6c757d;
font-size: 14px;
}

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .average-rating {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .reviews {
            list-style: none;
            padding: 0;
        }

        .review {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }

        .review .user {
            font-weight: bold;
        }

        .review .rating {
            color: #FBA834; /* Gold color for stars */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Reviews</h1>
        <div class="average-rating">
            Average Rating: <span id="average-rating">4.5</span>
        </div>
        <ul class="reviews">
            <li class="review">
                <p class="user">Virat Kholi</p>
                <p class="rating">Rating: <span>4</span></p>
                <p class="comment">"I absolutely love Smoodh! 
                    The flavors are amazing and it's so refreshing. My favorite is the mango passionfruit blend."
                </p>
            </li>
            <li class="review">
                <p class="user">Jenna Ortega</p>
                <p class="rating">Rating: <span>3.5</span></p>
                <p class="comment">"Smoodh is my go-to drink whenever I need a quick pick-me-up. The apple kiwi 
                    flavor is so delicious and energizing!"
                </p>
            </li>
            <li class="review">
                <p class="user">TheWeeknd</p>
                <p class="rating">Rating: <span>2.5</span></p>
                <p class="comment"> Smoodh offers a pleasant and enjoyable drinking experience. While it
                     may not be revolutionary, its consistency in taste and quality makes it a reliable 
                     choice for those seeking a tasty and rejuvenating beverage option. 
                </p>
            </li>
            <li class="review">
                <p class="user">MS Dhoni</p>
                <p class="rating">Rating: <span>4.3</span></p>
                <p class="comment">"Smoodh is a lifesaver for busy moms like me! It's convenient, 
                    delicious, and my kids love it too. The mixed berry flavor is a hit in our household."
                </p>
            </li>
            <li class="review">
                <p class="user">Taylor Swift</p>
                <p class="rating">Rating: <span>4</span></p>
                <p class="comment">"Smoodh is a lifesaver for busy moms like me! It's convenient, 
                    delicious, and my kids love it too. The mixed berry flavor is a hit in our household."
                </p>
            </li>
            <li class="review">
                <p class="user">Gopi Bahu</p>
                <p class="rating">Rating: <span>5</span></p>
                <p class="comment">"Smoodh is a lifesaver for busy moms like me! It's convenient, 
                    delicious, and my kids love it too. The mixed berry flavor is a hit in our household."
                </p>
            </li>
            <li class="review">
                <p class="user">Will Smith</p>
                <p class="rating">Rating: <span>2</span></p>
                <p class="comment">"From the first sip to the last, Smoodh's 
                    refreshing taste and tantalizing aroma make every moment feel like a tropical escape."
                </p>
            </li>
            <li class="review">
                <p class="user">Lily Depp Rose</p>
                <p class="rating">Rating: <span>4</span></p>
                <p class="comment">"Smoodh: Where the juiciness of ripe fruits meets the smoothness 
                    of a perfect blend, each bottle a journey into flavor paradise."
                </p>
            </li>
        </ul>
    </div>
    <footer>
    <div class="container">
        <p1> &copy; 2024 Smoodh. All rights reserved.</p1>
    </div>
</footer>

</body>
</html>
