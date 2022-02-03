@extends('layouts.app')
@section('content')



<style>


/* Hero Section */
#hero {
	
	background-size: cover;
	background-position: top center;
	position: relative;
	z-index: 1;
}



.mid {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -340%);
	text-align: center;
}



	.mid p {
		color: white;
		font-size: 1.9rem;
        
		
	}

	

	.mid .btn {
		margin-top: 1rem;
	}

		.mid .btn a {
			text-decoration: none;
			text-transform: uppercase;
		}

			.mid .btn a.simple {
				color: white;
				font-weight: 500;
				padding: 0.1rem 1.1rem;
			}

				.mid .btn a.simple:hover {
					color: #ff5733;
				}


			.mid .btn a.border {
				color: #ff5733;
				border: 1px solid #ff5733;
				font-weight: 500;
				padding: 0.9rem 1.6rem;
				border-radius: 9px;
			}

				.mid .btn a.border:hover {
					background: #fff;
					border: 1px solid #fff;
					color: #ff5733;
				}






/* End Hero Section */


</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <title>Website </title>
</head>

<body>
    <img src={{url('/images/viewhome.jpg')}} width="100%" height="100%" alt="IMAGE"/>
<!-- Hero Section  -->
<section id="hero">
    



        <div class="mid">
            <p> WELCOME TO OUR WEBSITE </p>
            

            <div class="btn">


                <a class="simple" href="#"> Get Started</a>
                <a class="border" href="#"> Support Us</a>

            </div>
        </div>
    </div>
</section>

</body>
</html>
<!-- End Hero Section  -->







@endsection
