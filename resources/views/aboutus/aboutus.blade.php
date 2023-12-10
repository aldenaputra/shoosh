    @extends('layouts.app')

    @section('head')
    @endsection

    @section('body')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <style>
            body {
                /* background-image: url('/asset/background-AboutUs.png'); */
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('/asset/background-AboutUs.png');
                font-weight: 500;
            }
            
            .card {
            background-color: transparent; /* Adjust the alpha value as needed */
            border: none;
            color: white;
            }

            .last
            {
                margin-bottom: 70px;
            }

        

        </style>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-5">
                            </div>
                                <div class="card-body" >
                                    <h1 class="text-center" style="font-size: 48px" >About Us</h1>

                                    <p>Welcome to SHOOSH, where passion meets fashion and comfort! We are more
                                        than just a shoe store; we are a lifestyle brand dedicated to providing you with
                                        footwear that not only looks great but feels amazing too.</p>

                                    <h2 class="mt-5">Our Story</h2>
                                    <p>Founded in 2023, SHOOSH was born out of a love for shoes and a desire
                                        to create a brand that stands for quality, style, and customer satisfaction. Our journey
                                        began with a simple idea: to offer a curated collection of shoes that cater to diverse
                                        tastes and preferences.</p>

                                    <h2 class="mt-5">Our Mission</h2>
                                    <p>At SHOOSH, our mission is to elevate your everyday experiences through
                                        exceptional footwear. We strive to blend fashion and functionality, ensuring that every
                                        step you take is a step in the right direction. Whether you're strolling through the
                                        city streets, hitting the gym, or stepping into a special occasion, we have the perfect
                                        pair for you.</p>

                                    <h2 class="mt-5">Quality Craftsmanship</h2>
                                    <p>We take pride in the craftsmanship of our shoes. Each pair is meticulously designed with
                                        attention to detail, using high-quality materials to provide durability and comfort. Our
                                        commitment to quality ensures that you not only look good but also feel confident in
                                        every step.</p>

                                    <h2 class="mt-5">Customer Satisfaction</h2>
                                    <p>Your satisfaction is our priority. We believe in building lasting relationships with our
                                        customers, and that begins with a positive shopping experience. Our customer service
                                        team is here to assist you, and we stand behind the quality of our products with a
                                        hassle-free return policy.</p>

                                    <h2 class="mt-5">Connect with Us</h2>
                                    <p>Join the SHOOSH community on social media to stay updated on the latest
                                        trends, promotions, and behind-the-scenes moments. We love hearing from our customers
                                        and invite you to share your #ShoeAdventures with us!</p>

                                    <h2 class="mt-5">Thank You for Choosing SHOOSH</h2>
                                    <p class="last" >Whether you're a trendsetter, an athlete, or someone who appreciates a comfortable pair
                                        of shoes, we thank you for choosing SHOOSH. We look forward to being a
                                        part of your journey, one step at a time. <b>NEVER THINK TWICE!</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
