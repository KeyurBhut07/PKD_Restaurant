<?php
session_start();
include 'database.php';
if($_SESSION['email']!= "")
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .grid {
        display: grid;
        grid-template-columns: 0.5fr 0.5fr 0.5fr;
        grid-gap: 20px;
        padding: 30px 75px;
    }

    .grid>article {
        border: 1px solid #ccc;
        margin-top: 0px;
        box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    }

    .grid>article img {
        max-width: 100%;

    }

    .text {
        padding: 0 10px 10px;

    }

    .btn2 {
        padding: 10px 10px;
        font-size: px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #092a49;
        background: none;
        border: 3px solid #d65106;
        border-radius: 15px;
        transition: .3s;
    }

    .btn2:hover {
        color: white;
        background: #d65106
    }
    </style>

</head>

<body>
    <main class="grid">


        <article>
            <img src="images/2.jpg" alt="Sample photo">
            <div class="text">
                <h2> Pizza </h2>
                <h4>This is special Gujarati </h4>

                <button class="btn2" type="submit" style="margin-right:17px">
                    <i class="fa fa-heart" style="font-size:30px;"></i>
                </button>

                <button class="btn2" type="submit">
                    <i class="fa fa-shopping-cart" style="font-size:30px"></i>
                </button>
                <button class="btn2" type="submit"
                    style="font-size:24px;letter-spacing: 3px; width:200px; float:right; ">ORDER</button>

            </div>
        </article>

        <article>
            <img src="images/2.jpg" alt="Sample photo">
            <div class="text">
                <h3>Best in class</h3>
                <p>Imagine jumping into that boat, and just letting it sail wherever the wind takes you...</p>


                <button class="btn2" type="submit" style="margin-right:17px">
                    <i class="fa fa-heart" style="font-size:30px;"></i>
                </button>

                <button class="btn2" type="submit">
                    <i class="fa fa-shopping-cart" style="font-size:30px"></i>
                </button>
                <button class="btn2" type="submit"
                    style="font-size:24px;letter-spacing: 3px; width:200px; float:right;">ORDER</button>

            </div>
        </article>

        <article>
            <img src="images/2.jpg" alt="Sample photo">
            <div class="text">
                <h3>Best in class</h3>
                <p>Imagine jumping into that boat, and just letting it sail wherever the wind takes you...</p>


                <button class="btn2" type="submit" style="margin-right:17px">
                    <i class="fa fa-heart" style="font-size:30px;"></i>
                </button>

                <button class="btn2" type="submit">
                    <i class="fa fa-shopping-cart" style="font-size:30px"></i>
                </button>
                <button class="btn2" type="submit"
                    style="font-size:24px;letter-spacing: 3px; width:200px; float:right;">ORDER</button>

            </div>
        </article>

        <article>
            <img src="images/2.jpg" alt="Sample photo">
            <div class="text">
                <h3>Best in class</h3>
                <p>Imagine jumping into that boat, and just letting it sail wherever the wind takes you...</p>


                <button class="btn2" type="submit" style="margin-right:17px">
                    <i class="fa fa-heart" style="font-size:30px;"></i>
                </button>

                <button class="btn2" type="submit">
                    <i class="fa fa-shopping-cart" style="font-size:30px"></i>
                </button>
                <button class="btn2" type="submit"
                    style="font-size:24px;letter-spacing: 3px; width:200px; float:right;">ORDER</button>

            </div>
        </article>

        <article>
            <img src="images/2.jpg" alt="Sample photo">
            <div class="text">
                <h3>Best in class</h3>
                <p>Imagine jumping into that boat, and just letting it sail wherever the wind takes you...</p>


                <button class="btn2" type="submit" style="margin-right:17px">
                    <i class="fa fa-heart" style="font-size:30px;"></i>
                </button>

                <button class="btn2" type="submit">
                    <i class="fa fa-shopping-cart" style="font-size:30px"></i>
                </button>
                <button class="btn2" type="submit"
                    style="font-size:24px;letter-spacing: 3px; width:200px; float:right;">ORDER</button>

            </div>
        </article>


    </main>
</body>

</html>
<?php 
	}
	else
	{
		header("Location:index.php");
	}
?>