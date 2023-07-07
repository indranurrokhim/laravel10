@extends('mdblayouts.app')
@section('title', 'Aplikasiku')
@section('content')
    <div class="container text-center">

        <h1 class="text-center">MD Bootstrap Components</h1>

        <p class="lead text-center pt-3">Visual guide of components in the newest Bootstrap 4 and Material Design</p>
        <hr class="my-5">

        <!--Section: Animations-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Buttons</h3>


            <h5 class="pb-4 mb-4">Basic buttons</h5>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary">Primary</button>

            <!-- Default button -->
            <button type="button" class="btn btn-default">Default</button>

            <!-- Secondary button -->
            <button type="button" class="btn btn-secondary">Secondary</button>

            <!-- Indicates a successful or positive action -->
            <button type="button" class="btn btn-success">Success</button>

            <!-- Contextual button for informational alert messages -->
            <button type="button" class="btn btn-info">Info</button>

            <!-- Indicates caution should be taken with this action -->
            <button type="button" class="btn btn-warning">Warning</button>

            <!-- Indicates a dangerous or potentially negative action -->
            <button type="button" class="btn btn-danger">Danger</button>


            <h5 class="pt-5 pb-4 mb-4">Additional buttons</h5>

            <!--Elegant-->
            <button type="button" class="btn btn-elegant">Elegant</button>

            <!--Unique-->
            <button type="button" class="btn btn-unique">Unique</button>

            <!--Pink-->
            <button type="button" class="btn btn-pink">Pink</button>

            <!--Purple-->
            <button type="button" class="btn btn-purple">Purple</button>

            <!--Deep-purple-->
            <button type="button" class="btn btn-deep-purple">Deep-purple</button>

            <!--Indigo-->
            <button type="button" class="btn btn-indigo">Indigo</button>

            <!--Light blue-->
            <button type="button" class="btn btn-light-blue">Light blue</button>

            <!--Cyan-->
            <button type="button" class="btn btn-cyan">Cyan</button>

            <!--Dark-green-->
            <button type="button" class="btn btn-dark-green">Dark-green</button>

            <!--Light-green-->
            <button type="button" class="btn btn-light-green">Light-green</button>

            <!--Yellow-->
            <button type="button" class="btn btn-yellow">Yellow</button>

            <!--Amber-->
            <button type="button" class="btn btn-amber">Amber</button>

            <!--Deep-orange-->
            <button type="button" class="btn btn-deep-orange">Deep-orange</button>

            <!--Brown-->
            <button type="button" class="btn btn-brown">Brown</button>

            <!--Blue-grey-->
            <button type="button" class="btn btn-blue-grey">Grey</button>

            <!--MDB-->
            <button type="button" class="btn btn-mdb-color">MDB</button>


            <h5 class="pt-5 pb-4 mb-4">Gradient buttons</h5>

            <button class="btn peach-gradient btn-rounded">Peach</button>
            <button class="btn purple-gradient btn-rounded">Purple</button>
            <button class="btn blue-gradient btn-rounded">Blue</button>
            <button class="btn aqua-gradient btn-rounded">Aqua</button>


            <h5 class="pt-5 pb-4 mb-4">Outline buttons</h5>

            <button type="button" class="btn btn-outline-primary waves-effect">Primary</button>
            <button type="button" class="btn btn-outline-default waves-effect">Default</button>
            <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
            <button type="button" class="btn btn-outline-success waves-effect">Success</button>
            <button type="button" class="btn btn-outline-info waves-effect">Info</button>
            <button type="button" class="btn btn-outline-warning waves-effect">Warning</button>
            <button type="button" class="btn btn-outline-danger waves-effect">Danger</button>


            <h5 class="pt-5 pb-4 mb-4">Rounded buttons</h5>

            <button type="button" class="btn btn-primary btn-rounded">Primary</button>
            <button type="button" class="btn btn-default btn-rounded">Default</button>
            <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
            <button type="button" class="btn btn-success btn-rounded">Success</button>
            <button type="button" class="btn btn-info btn-rounded">Info</button>
            <button type="button" class="btn btn-warning btn-rounded">Warning</button>
            <button type="button" class="btn btn-danger btn-rounded">Danger</button>


            <h5 class="pt-5 pb-4 mb-4">Rounded outline buttons</h5>

            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
            <button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
            <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
            <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
            <button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
            <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
            <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>

            <h5 class="pt-5 pb-4 mb-4">Floating buttons</h5>

            <a class="btn-floating btn-lg purple-gradient my-0">
                <i class="fa fa-bolt"></i>
            </a>
            <a class="btn-floating peach-gradient my-0">
                <i class="fa fa-leaf"></i>
            </a>
            <a class="btn-floating btn-sm blue-gradient my-0">
                <i class="fa fa-star"></i>
            </a>


            <h5 class="pt-5 pb-4 mb-4">Sizes</h5>

            <button type="button" class="btn peach-gradient btn-lg">Large button</button>
            <button type="button" class="btn purple-gradient btn-lg">Large button</button>
            <button type="button" class="btn peach-gradient btn-sm">Small button</button>
            <button type="button" class="btn purple-gradient btn-sm">Small button</button>


            <h5 class="pt-5 pb-4 mb-4">Checkbox and Radio buttons</h5>

            <div class="btn-group py-1" data-toggle="buttons">
                <label class="btn btn-primary active">
                    <input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
                </label>
                <label class="btn btn-primary">
                    <input type="checkbox" autocomplete="off"> Checkbox 2
                </label>
                <label class="btn btn-primary">
                    <input type="checkbox" autocomplete="off"> Checkbox 3
                </label>
            </div>

            <div class="btn-group py-1" data-toggle="buttons">
                <label class="btn btn-primary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
                </label>
            </div>
        </section>
        <!--Section: Buttons-->

        <hr class="between-sections">
        <!--Section: Social Buttons-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Social Buttons</h3>


            <h5 class="pb-4 mb-4">Full name social buttons</h5>

            <!--Facebook-->
            <button type="button" class="btn btn-fb">
                <i class="fa fa-facebook left"></i> Facebook</button>
            <!--Twitter-->
            <button type="button" class="btn btn-tw">
                <i class="fa fa-twitter left"></i> Twitter</button>
            <!--Google +-->
            <button type="button" class="btn btn-gplus">
                <i class="fa fa-google-plus left"></i> Google +</button>
            <!--Linkedin-->
            <button type="button" class="btn btn-li">
                <i class="fa fa-linkedin left"></i> Linkedin</button>
            <!--Instagram-->
            <button type="button" class="btn btn-ins">
                <i class="fa fa-instagram left"></i> Instagram</button>
            <!--Pinterest-->
            <button type="button" class="btn btn-pin">
                <i class="fa fa-pinterest left"></i> Pinterest</button>
            <!--Youtube-->
            <button type="button" class="btn btn-yt">
                <i class="fa fa-youtube left"></i> Youtube</button>
            <!--Vkontakte-->
            <button type="button" class="btn btn-vk">
                <i class="fa fa-vk left"></i> Vkontakte</button>
            <!--Stack Overflow-->
            <button type="button" class="btn btn-so">
                <i class="fa fa-stack-overflow left"></i> Stack Overflow</button>
            <!--Slack-->
            <button type="button" class="btn btn-slack">
                <i class="fa fa-slack left"></i> Slack</button>
            <!--Github-->
            <button type="button" class="btn btn-git">
                <i class="fa fa-github left"></i> Github</button>
            <!--Comments-->
            <button type="button" class="btn btn-comm">
                <i class="fa fa-comments left"></i> Comments</button>
            <!--Email-->
            <button type="button" class="btn btn-email">
                <i class="fa fa-envelope left"></i> Email</button>
            <!--Dribbble-->
            <button type="button" class="btn btn-dribbble">
                <i class="fa fa-dribbble left"></i> Dribbble</button>


            <h5 class="pt-5 pb-4 mb-4">Simple social buttons</h5>

            <!--Facebook-->
            <button type="button" class="btn btn-fb">
                <i class="fa fa-facebook"></i>
            </button>
            <!--Twitter-->
            <button type="button" class="btn btn-tw">
                <i class="fa fa-twitter"></i>
            </button>
            <!--Google +-->
            <button type="button" class="btn btn-gplus">
                <i class="fa fa-google-plus"></i>
            </button>
            <!--Linkedin-->
            <button type="button" class="btn btn-li">
                <i class="fa fa-linkedin"></i>
            </button>
            <!--Instagram-->
            <button type="button" class="btn btn-ins">
                <i class="fa fa-instagram"></i>
            </button>
            <!--Pinterest-->
            <button type="button" class="btn btn-pin">
                <i class="fa fa-pinterest"></i>
            </button>
            <!--Youtube-->
            <button type="button" class="btn btn-yt">
                <i class="fa fa-youtube"></i>
            </button>
            <!--Dribbble-->
            <button type="button" class="btn btn-dribbble">
                <i class="fa fa-dribbble left"></i>
            </button>
            <!--Vkontakte-->
            <button type="button" class="btn btn-vk">
                <i class="fa fa-vk"></i>
            </button>
            <!--Stack Overflow-->
            <button type="button" class="btn btn-so">
                <i class="fa fa-stack-overflow"></i>
            </button>
            <!--Slack-->
            <button type="button" class="btn btn-slack">
                <i class="fa fa-slack"></i>
            </button>
            <!--Github-->
            <button type="button" class="btn btn-git">
                <i class="fa fa-github"></i>
            </button>
            <!--Comments-->
            <button type="button" class="btn btn-comm">
                <i class="fa fa-comments"></i>
            </button>
            <!--Email-->
            <button type="button" class="btn btn-email">
                <i class="fa fa-envelope"></i>
            </button>


            <h5 class="pt-5 pb-4 mb-4">Floating social buttons</h5>

            <!--Facebook-->
            <a type="button" class="btn-floating my-1 btn-fb">
                <i class="fa fa-facebook"></i>
            </a>
            <!--Twitter-->
            <a type="button" class="btn-floating my-1 btn-tw">
                <i class="fa fa-twitter"></i>
            </a>
            <!--Google +-->
            <a type="button" class="btn-floating my-1 btn-gplus">
                <i class="fa fa-google-plus"></i>
            </a>
            <!--Linkedin-->
            <a type="button" class="btn-floating my-1 btn-li">
                <i class="fa fa-linkedin"></i>
            </a>
            <!--Instagram-->
            <a type="button" class="btn-floating my-1 btn-ins">
                <i class="fa fa-instagram"></i>
            </a>
            <!--Pinterest-->
            <a type="button" class="btn-floating my-1 btn-pin">
                <i class="fa fa-pinterest"></i>
            </a>
            <!--Youtube-->
            <a type="button" class="btn-floating my-1 btn-yt">
                <i class="fa fa-youtube"></i>
            </a>
            <!--Dribbble-->
            <a type="button" class="btn-floating my-1 btn-dribbble">
                <i class="fa fa-dribbble"></i>
            </a>
            <!--Vkontakte-->
            <a type="button" class="btn-floating my-1 btn-vk">
                <i class="fa fa-vk"></i>
            </a>
            <!--Stack Overflow-->
            <a type="button" class="btn-floating my-1 btn-so">
                <i class="fa fa-stack-overflow"></i>
            </a>
            <!--Slack-->
            <a type="button" class="btn-floating my-1 btn-slack">
                <i class="fa fa-slack"></i>
            </a>
            <!--Github-->
            <a type="button" class="btn-floating my-1 btn-git">
                <i class="fa fa-github"></i>
            </a>
            <!--Comments-->
            <a type="button" class="btn-floating my-1 btn-comm">
                <i class="fa fa-comments"></i>
            </a>
            <!--Email-->
            <a type="button" class="btn-floating my-1 btn-email">
                <i class="fa fa-envelope"></i>
            </a>


            <h5 class="pt-5 pb-4 mb-4">Full name social counters</h5>

            <button type="button" class="btn btn-fb">
                <i class="fa fa-facebook left"></i>
                <span>Facebook</span>
            </button>
            <span class="counter">22</span>

            <!--Twitter-->
            <button type="button" class="btn btn-tw">
                <i class="fa fa-twitter left"></i>
                <span>Twitter</span>
            </button>
            <span class="counter">22</span>

            <!--Google +-->
            <button type="button" class="btn btn-gplus">
                <i class="fa fa-google-plus left"></i>
                <span>Google+</span>
            </button>
            <span class="counter">22</span>

            <!--Linkedin-->
            <button type="button" class="btn btn-li">
                <i class="fa fa-linkedin left"></i>
                <span>Linkedin</span>
            </button>
            <span class="counter">22</span>

            <!--Instagram-->
            <button type="button" class="btn btn-ins">
                <i class="fa fa-instagram left"></i>
                <span>Instagram</span>
            </button>
            <span class="counter">22</span>

            <!--Pinterest-->
            <button type="button" class="btn btn-pin">
                <i class="fa fa-pinterest left"></i>
                <span>Pinterest</span>
            </button>
            <span class="counter">22</span>

            <!--Youtube-->
            <button type="button" class="btn btn-yt">
                <i class="fa fa-youtube left"></i>
                <span>Youtube</span>
            </button>
            <span class="counter">22</span>

            <!--Dribbble-->
            <button type="button" class="btn btn-dribbble">
                <i class="fa fa-dribbble left"></i>
                <span>Dribbble</span>
            </button>
            <span class="counter">22</span>

            <!--Vkontakte-->
            <button type="button" class="btn btn-vk">
                <i class="fa fa-vk left"></i>
                <span>Vkontakte</span>
            </button>
            <span class="counter">22</span>

            <!--Stack Overflow-->
            <button type="button" class="btn btn-so">
                <i class="fa fa-stack-overflow left"></i>
                <span>Stack Overflow</span>
            </button>
            <span class="counter">22</span>

            <!--Slack-->
            <button type="button" class="btn btn-slack">
                <i class="fa fa-slack left"></i>
                <span>Slack</span>
            </button>
            <span class="counter">22</span>

            <!--Github-->
            <button type="button" class="btn btn-git">
                <i class="fa fa-github left"></i>
                <span>Github</span>
            </button>
            <span class="counter">22</span>

            <!--Comments-->
            <button type="button" class="btn btn-comm">
                <i class="fa fa-comments left"></i>
                <span>Comments</span>
            </button>
            <span class="counter">22</span>

            <!--Emails-->
            <button type="button" class="btn btn-email">
                <i class="fa fa-envelope left"></i>
                <span>Emails</span>
            </button>
            <span class="counter">22</span>


            <h5 class="pt-5 pb-4 mb-4">Simple social counters</h5>

            <!--Facebook-->
            <button type="button" class="btn btn-fb">
                <i class="fa fa-facebook"></i>
            </button>
            <span class="counter">22</span>

            <!--Twitter-->
            <button type="button" class="btn btn-tw">
                <i class="fa fa-twitter"></i>
            </button>
            <span class="counter">22</span>

            <!--Google +-->
            <button type="button" class="btn btn-gplus">
                <i class="fa fa-google-plus"></i>
            </button>
            <span class="counter">22</span>

            <!--Linkedin-->
            <button type="button" class="btn btn-li">
                <i class="fa fa-linkedin"></i>
            </button>
            <span class="counter">22</span>

            <!--Instagram-->
            <button type="button" class="btn btn-ins">
                <i class="fa fa-instagram"></i>
            </button>
            <span class="counter">22</span>

            <!--Pinterest-->
            <button type="button" class="btn btn-pin">
                <i class="fa fa-pinterest"></i>
            </button>
            <span class="counter">22</span>

            <!--Youtube-->
            <button type="button" class="btn btn-yt">
                <i class="fa fa-youtube"></i>
            </button>
            <span class="counter">22</span>

            <!--Dribbble-->
            <button type="button" class="btn btn-dribbble">
                <i class="fa fa-dribbble left"></i>
            </button>
            <span class="counter">22</span>

            <!--Vkontakte-->
            <button type="button" class="btn btn-vk">
                <i class="fa fa-vk"></i>
            </button>
            <span class="counter">22</span>

            <!--Stack Overflow-->
            <button type="button" class="btn btn-so">
                <i class="fa fa-stack-overflow"></i>
            </button>
            <span class="counter">22</span>

            <!--Slack-->
            <button type="button" class="btn btn-slack">
                <i class="fa fa-slack"></i>
            </button>
            <span class="counter">22</span>

            <!--Github-->
            <button type="button" class="btn btn-git">
                <i class="fa fa-github"></i>
            </button>
            <span class="counter">22</span>

            <!--Comments-->
            <button type="button" class="btn btn-comm">
                <i class="fa fa-comments"></i>
            </button>
            <span class="counter">22</span>

            <!--Emails-->
            <button type="button" class="btn btn-email">
                <i class="fa fa-envelope"></i>
            </button>
            <span class="counter">22</span>


            <h5 class="pt-5 pb-4 mb-4">Social icons</h5>

            <!--Facebook-->
            <a class="fa-lg p-2 m-2 fb-ic">
                <i class="fa fa-facebook"> </i>
            </a>
            <!--Twitter-->
            <a class="fa-lg p-2 m-2 tw-ic">
                <i class="fa fa-twitter"> </i>
            </a>
            <!--Google +-->
            <a class="fa-lg p-2 m-2 gplus-ic">
                <i class="fa fa-google-plus"> </i>
            </a>
            <!--Linkedin-->
            <a class="fa-lg p-2 m-2 li-ic">
                <i class="fa fa-linkedin"> </i>
            </a>
            <!--Instagram-->
            <a class="fa-lg p-2 m-2 ins-ic">
                <i class="fa fa-instagram"> </i>
            </a>
            <!--Pinterest-->
            <a class="fa-lg p-2 m-2 pin-ic">
                <i class="fa fa-pinterest"> </i>
            </a>
            <!--Vkontakte-->
            <a class="fa-lg p-2 m-2 vk-ic">
                <i class="fa fa-vk"> </i>
            </a>
            <!--Youtube-->
            <a class="fa-lg p-2 m-2 yt-ic">
                <i class="fa fa-youtube"> </i>
            </a>
            <!--Dribbble-->
            <a class="fa-lg p-2 m-2 dribbble-ic">
                <i class="fa fa-dribbble"> </i>
            </a>
            <!--Stack Overflow-->
            <a class="fa-lg p-2 m-2 so-ic">
                <i class="fa fa-stack-overflow"> </i>
            </a>
            <!--Slack-->
            <a class="fa-lg p-2 m-2 slack-ic">
                <i class="fa fa-slack"> </i>
            </a>
            <!--Github-->
            <a class="fa-lg p-2 m-2 git-ic">
                <i class="fa fa-github"> </i>
            </a>
            <!--Comments-->
            <a class="fa-lg p-2 m-2 comm-ic">
                <i class="fa fa-comments"> </i>
            </a>
            <!--Email-->
            <a class="fa-lg p-2 m-2 email-ic">
                <i class="fa fa-envelope-o"> </i>
            </a>
        </section>
        <!--Section: Social Buttons-->

        <hr class="between-sections">
        <!--Section: Cards-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Cards</h3>

            <h5 class="pb-5">Cascading cards</h5>

            <!--Grid row-->
            <div class="row">
                <!--Subheading-->
                <div class="col-md-4">

                    <!-- Card Wider -->
                    <div class="card card-cascade wider mb-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                            <!-- Subtitle -->
                            <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
                            <!-- Text -->
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam. </p>

                            <!-- Linkedin -->
                            <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                            <!-- Twitter -->
                            <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                            <!-- Dribbble -->
                            <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

                        </div>

                    </div>
                    <!-- Card Wider -->

                </div>
                <div class="col-md-4">

                    <!-- Card Narrower -->
                    <div class="card card-cascade narrower mb-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h5 class="pink-text pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                            <!-- Title -->
                            <h4 class="card-title">Cheat day inspirations</h4>
                            <!-- Text -->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                            <!-- Button -->
                            <a class="btn btn-unique">Button</a>

                        </div>

                    </div>
                    <!-- Card Narrower -->

                </div>
                <div class="col-md-4">

                    <!-- Card Regular -->
                    <div class="card card-cascade mb-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Billy Coleman</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam.
                            </p>

                            <!-- Facebook -->
                            <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
                            <!-- Twitter -->
                            <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
                            <!-- Google + -->
                            <a type="button" class="btn-floating btn-small btn-dribbble"><i
                                    class="fa fa-dribbble"></i></a>

                        </div>

                    </div>
                    <!-- Card Regular -->

                </div>
            </div>
            <!--Grid row-->

            <h5 class="py-5">Cascading panels</h5>

            <!--Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header purple-gradient">

                            <!-- Title -->
                            <h2 class="card-header-title">Ally Cook</h2>
                            <!-- Subtitle -->
                            <h5 class="mb-0 pb-3 pt-2">Follow me</h5>

                            <!-- Facebook -->
                            <a type="button" class="btn-floating"><i class="fa fa-facebook"></i></a>
                            <!-- Twitter -->
                            <a type="button" class="btn-floating"><i class="fa fa-twitter"></i></a>
                            <!-- Google + -->
                            <a type="button" class="btn-floating"><i class="fa fa-google-plus"></i></a>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam dignissimos neque rem nihil
                                ratione est placeat vel, natus non quos laudantium veritatis sequi.Ut enim ad minima veniam,
                                quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                                commodi.</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade wider">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header peach-gradient">

                            <!-- Title -->
                            <h2 class="card-header-title mb-3">Title of the news</h2>
                            <!-- Text -->
                            <p class="mb-0"><i class="fa fa-calendar mr-2"></i>26.07.2017</p>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus, ex minis recusandae. Facere modi sunt, quod quibusdam dignissimos neque rem
                                nihil ratione est placeat vel, natus non quos laudantium veritatis sequi.Ut enim ad minima
                                veniam, quis nostrum.</p>
                            <!-- Link -->
                            <a href="#!" class="orange-text d-flex flex-row-reverse p-2">
                                <h5 class="waves-effect waves-light">Read more<i
                                        class="fa fa-angle-double-right ml-2"></i></h5>
                            </a>

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">

                            <!-- Title -->
                            <h2 class="card-header-title mb-3">Marta</h2>
                            <!-- Subtitle -->
                            <p class="card-header-subtitle mb-0">Deserve for her own card</p>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam dignissimos neque rem nihil
                                ratione est placeat vel, natus non quos laudantium veritatis sequi.Ut enim ad minima veniam,
                                quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

                            <hr>

                            <!-- Twitter -->
                            <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"> </i></a>
                            <!--Linkedin -->
                            <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"> </i></a>
                            <!-- Facebook -->
                            <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"> </i></a>
                            <!-- Email -->
                            <a class="px-2 fa-lg email-ic"><i class="fa fa-envelope"> </i></a>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!--Grid row-->

            <h5 class="py-5">Reversed cascade card</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <!-- Card -->
                    <div class="card card-cascade wider reverse my-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi
                                nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
                            </p>

                            <!-- Linkedin -->
                            <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                            <!-- Twitter -->
                            <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                            <!-- Dribbble -->
                            <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


            <h5 class="py-5">Cards with action button</h5>

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Others/food.jpg" class="card-img-top"
                                alt="sample">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Button-->
                        <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3">
                            <i class="fa fa-chevron-right pl-1"></i>
                        </a>
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="font-small grey-dark-text mb-0">Some quick example text to build on the card title
                                and make up the bulk of the card's content.</p>
                        </div>
                        <!--/.Card content-->
                        <!-- Card footer -->
                        <div class="mdb-color lighten-3 text-center">
                            <ul class="list-unstyled list-inline font-small mt-3">
                                <li class="list-inline-item pr-2 white-text">
                                    <i class="fa fa-clock-o pr-1"></i>05/10/2015
                                </li>
                                <li class="list-inline-item pr-2">
                                    <a href="#" class="white-text">
                                        <i class="fa fa-comments-o pr-1"></i>12</a>
                                </li>
                                <li class="list-inline-item pr-2">
                                    <a href="#" class="white-text">
                                        <i class="fa fa-facebook pr-1"> </i>21</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="white-text">
                                        <i class="fa fa-twitter pr-1"> </i>5</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Card footer -->
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" class="card-img-top"
                                alt="">
                            <a href="#">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card Dark-->
                    <div class="card card-dark">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/82.jpg" class="card-img-top"
                                alt="work desk">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body elegant-color white-text">
                            <!--Social shares button-->
                            <a class="activator p-3 mr-2">
                                <i class="fa fa-share-alt white-text"></i>
                            </a>
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr class="hr-light">
                            <!--Text-->
                            <p class="font-small mb-4">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#!" class="white-text d-flex justify-content-end">
                                <h5>Read more</h5>
                                <span>
                                    <i class="fa fa-chevron-right pl-2"></i>
                                </span>
                            </a>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Dark-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


            <h5 class="py-5">Testimonial cards</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card testimonial-card">

                        <!--Bacground color-->
                        <div class="card-up indigo lighten-1">
                        </div>

                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
                                class="rounded-circle">
                        </div>

                        <div class="card-body">
                            <!--Name-->
                            <h4 class="card-title">Anna Doe</h4>
                            <hr>
                            <!--Quotation-->
                            <p>
                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Eos, adipisci
                            </p>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card testimonial-card">

                        <!--Bacground color-->
                        <div class="card-up purple-gradient">
                        </div>

                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2820%29.jpg"
                                class="rounded-circle">
                        </div>

                        <div class="card-body">
                            <!--Name-->
                            <h4 class="card-title">Anna Doe</h4>
                            <hr>
                            <!--Quotation-->
                            <p>
                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Eos, adipisci
                            </p>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


            <h5 class="py-5">Image overlay cards</h5>

            <div class="row">
                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card card-image mb-3"
                        style="background-image: url('https://mdbootstrap.com/img/Photos/Categories/Components/img(10).jpg');">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                            <div>
                                <h5 class="pink-text">
                                    <i class="fa fa-pie-chart"></i> Marketing
                                </h5>
                                <h3 class="card-title pt-2">
                                    <strong>This is card title</strong>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                                    voluptatem,
                                    optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                    dignissimos.
                                    Odit sed qui, dolorum!.</p>
                                <a class="btn btn-pink">
                                    <i class="fa fa-clone left"></i> View project</a>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6">
                    <div class="card card-image mb-3"
                        style="background-image: url('https://mdbootstrap.com/img/Photos/Categories/Components/img(11).jpg');">
                        <div class="text-white text-center d-flex align-items-center rgba-indigo-strong py-5 px-4">
                            <div>
                                <h5 class="orange-text">
                                    <i class="fa fa-desktop"></i> Software
                                </h5>
                                <h3 class="card-title pt-2">
                                    <strong>This is card title</strong>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                                    voluptatem,
                                    optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                    dignissimos.
                                    Odit sed qui, dolorum!.</p>
                                <a class="btn btn-deep-orange">
                                    <i class="fa fa-clone left"></i> View project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="py-5">Rotating cards</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">


                    <!--Rotating card-->
                    <div class="card-wrapper">
                        <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                            <!--Front Side-->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg"
                                        class="img-fluid" alt="Image with a photo of clouds.">
                                </div>
                                <!--Avatar-->
                                <div class="avatar mx-auto white">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%289%29.jpg"
                                        class="rounded-circle" alt="Sample avatar image.">
                                </div>
                                <!--Content-->
                                <div class="card-body">
                                    <h4>Jonathan Doe</h4>
                                    <p>Web developer</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fa fa-repeat"></i> Click here to rotate</a>
                                </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                                <div class="card-body">

                                    <!--Content-->
                                    <h4>About me</h4>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta.
                                        Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum
                                        repellendus, voluptatum eum, officia laudantium quaerat?
                                    </p>
                                    <hr>
                                    <!--Social Icons-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 fb-ic">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 tw-ic">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 gplus-ic">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 li-ic">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--Triggering button-->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fa fa-undo"></i> Click here to rotate back</a>

                                </div>

                            </div>
                            <!--/.Back Side-->

                        </div>
                    </div>
                    <!--/.Rotating card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Rotating card-->
                    <div class="card-wrapper">
                        <div id="card-2" class="card-rotating effect__click text-center h-100 w-100">

                            <!--Front Side-->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg"
                                        class="img-fluid" alt="Image with a photo of clouds.">
                                </div>
                                <!--Avatar-->
                                <div class="avatar mx-auto white">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2819%29.jpg"
                                        class="rounded-circle" alt="Sample avatar image.">
                                </div>
                                <!--Content-->
                                <div class="card-body">
                                    <h4>Maria Portman</h4>
                                    <p>Web designer</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn" data-card="card-2">
                                        <i class="fa fa-repeat"></i> Click here to rotate</a>
                                </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                                <div class="card-body">

                                    <!--Content-->
                                    <h4>About me</h4>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta.
                                        Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum
                                        repellendus, voluptatum eum, officia laudantium quaerat?
                                    </p>
                                    <hr>
                                    <!--Social Icons-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 fb-ic">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 tw-ic">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 gplus-ic">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 li-ic">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--Triggering button-->
                                    <a class="rotate-btn" data-card="card-2">
                                        <i class="fa fa-undo"></i> Click here to rotate back</a>

                                </div>

                            </div>
                            <!--/.Back Side-->

                        </div>
                    </div>
                    <!--/.Rotating card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Rotating card-->
                    <div class="card-wrapper">
                        <div id="card-3" class="card-rotating effect__click text-center h-100 w-100">

                            <!--Front Side-->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/83.jpg"
                                        class="img-fluid" alt="Image with a photo of clouds.">
                                </div>
                                <!--Avatar-->
                                <div class="avatar mx-auto white">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2820%29.jpg"
                                        class="rounded-circle" alt="Sample avatar image.">
                                </div>
                                <!--Content-->
                                <div class="card-body">
                                    <h4>Anna Smith</h4>
                                    <p>Photographer</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn" data-card="card-3">
                                        <i class="fa fa-repeat"></i> Click here to rotate</a>
                                </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                                <div class="card-body">

                                    <!--Content-->
                                    <h4>About me</h4>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta.
                                        Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum
                                        repellendus, voluptatum eum, officia laudantium quaerat?
                                    </p>
                                    <hr>
                                    <!--Social Icons-->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 fb-ic">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 tw-ic">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 gplus-ic">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="fa-lg p-2 m-2 li-ic">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--Triggering button-->
                                    <a class="rotate-btn" data-card="card-3">
                                        <i class="fa fa-undo"></i> Click here to rotate back</a>

                                </div>

                            </div>
                            <!--/.Back Side-->

                        </div>
                    </div>
                    <!--/.Rotating card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Cards-->

        <hr class="between-sections mt-4">
        <!--Section: Ecommerce-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Ecommerce</h3>


            <h5 class="pb-5">Product cards</h5>

            <!--Grid row-->
            <div class="row mb-5">

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card align-items-center">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg"
                                class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="grey-text">
                                <h5>Shirt</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Denim shirt
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>

                            <h4 class="font-weight-bold blue-text">
                                <strong>120$</strong>
                            </h4>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card align-items-center">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg"
                                class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="grey-text">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Sweatshirt</a>
                                </strong>
                            </h5>

                            <h4 class="font-weight-bold blue-text">
                                <strong>139$</strong>
                            </h4>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card align-items-center">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg"
                                class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="grey-text">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Grey blouse
                                        <span class="badge badge-pill primary-color">bestseller</span>
                                    </a>
                                </strong>
                            </h5>

                            <h4 class="font-weight-bold blue-text">
                                <strong>99$</strong>
                            </h4>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Fourth column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card align-items-center">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg"
                                class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Category & Title-->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Black jacket</a>
                                </strong>
                            </h5>

                            <h4 class="font-weight-bold blue-text">
                                <strong>219$</strong>
                            </h4>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Fourth column-->

            </div>
            <!--Grid row-->

            <!-- Grid row -->
            <div class="row mb-5">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade wider card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (55).jpg"
                                class="card-img-top" alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="text-muted">
                                <h5>Camera</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">GoPro</a>
                                </strong>
                            </h4>
                            <!-- Description -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam
                                elit.</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                    <strong>1439$</strong>
                                </span>
                                <span class="float-right">
                                    <a class="" data-toggle="tooltip" data-placement="top"
                                        title="Quick Look">
                                        <i class="fa fa-eye grey-text ml-3"></i>
                                    </a>
                                    <a class="" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="fa fa-heart grey-text ml-3"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade wider card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(49).jpg"
                                class="card-img-top" alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="text-muted">
                                <h5>Photography</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Camera</a>
                                </strong>
                            </h4>
                            <!-- Description -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam
                                elit.</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                    <strong>1160$</strong>
                                </span>
                                <span class="float-right">
                                    <a class="" data-toggle="tooltip" data-placement="top"
                                        title="Quick Look">
                                        <i class="fa fa-eye grey-text ml-3"></i>
                                    </a>
                                    <a class="" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="fa fa-heart grey-text ml-3"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6">
                    <!-- Card -->
                    <div class="card card-cascade wider card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (56).jpg"
                                class="card-img-top" alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="text-muted">
                                <h5>Smartphone</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">iPhone 6S</a>
                                </strong>
                            </h4>
                            <!-- Description -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam
                                elit.</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                    <strong>2160$</strong>
                                </span>
                                <span class="float-right">
                                    <a class="" data-toggle="tooltip" data-placement="top"
                                        title="Quick Look">
                                        <i class="fa fa-eye grey-text ml-3"></i>
                                    </a>
                                    <a class="" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="fa fa-heart grey-text ml-3"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!--Grid row-->
            <div class="row mb-5">

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg"
                                class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a>
                                    <p>Red trousers
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg"
                                class="img-fluid" alt="">
                            <div class="stripe light">
                                <a>
                                    <p>Sweatshirt
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg"
                                class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a>
                                    <p>Accessories
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Grid column-->

                <!--Fourth column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg"
                                class="img-fluid" alt="">
                            <div class="stripe light">
                                <a>
                                    <p>Sweatshirt
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Fourth column-->

            </div>
            <!--Grid row-->

            <h5 class="pt-5 pb-5">Shopping Cart table</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 my-3 text-left">

                    <div class="card">
                        <div class="card-body">

                            <!-- Shopping Cart table -->
                            <div class="table-responsive">

                                <table class="table product-table">

                                    <!-- Table head -->
                                    <thead class="mdb-color lighten-5">
                                        <tr>
                                            <th></th>
                                            <th class="font-weight-bold">
                                                <strong>Product</strong>
                                            </th>
                                            <th class="font-weight-bold">
                                                <strong>Color</strong>
                                            </th>
                                            <th></th>
                                            <th class="font-weight-bold">
                                                <strong>Price</strong>
                                            </th>
                                            <th class="font-weight-bold">
                                                <strong>QTY</strong>
                                            </th>
                                            <th class="font-weight-bold">
                                                <strong>Amount</strong>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <!-- /.Table head -->

                                    <!-- Table body -->
                                    <tbody>

                                        <!-- First row -->
                                        <tr>
                                            <th scope="row">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg"
                                                    alt="" class="img-fluid z-depth-0">
                                            </th>
                                            <td>
                                                <h5 class="mt-3">
                                                    <strong>iPhone</strong>
                                                </h5>
                                                <p class="text-muted">Apple</p>
                                            </td>
                                            <td>White</td>
                                            <td></td>
                                            <td>$800</td>
                                            <td>
                                                <input type="number" value="2" aria-label="Search" class="form-control"
                                                    style="width: 100px">
                                            </td>
                                            <td class="font-weight-bold">
                                                <strong>$800</strong>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Remove item">X
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- /.First row -->

                                        <!-- Second row -->
                                        <tr>
                                            <th scope="row">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg"
                                                    alt="" class="img-fluid z-depth-0">
                                            </th>
                                            <td>
                                                <h5 class="mt-3">
                                                    <strong>Headphones</strong>
                                                </h5>
                                                <p class="text-muted">Sony</p>
                                            </td>
                                            <td>Red</td>
                                            <td></td>
                                            <td>$200</td>
                                            <td>
                                                <input type="number" value="2" aria-label="Search" class="form-control"
                                                    style="width: 100px">
                                            </td>
                                            <td class="font-weight-bold">
                                                <strong>$600</strong>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Remove item">X
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- /.Second row -->

                                        <!-- Third row -->
                                        <tr>
                                            <th scope="row">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                                    alt="" class="img-fluid z-depth-0">
                                            </th>
                                            <td>
                                                <h5 class="mt-3">
                                                    <strong>iPad Pro</strong>
                                                </h5>
                                                <p class="text-muted">Apple</p>
                                            </td>
                                            <td>Gold</td>
                                            <td></td>
                                            <td>$600</td>
                                            <td>
                                                <input type="number" value="2" aria-label="Search" class="form-control"
                                                    style="width: 100px">
                                            </td>
                                            <td class="font-weight-bold">
                                                <strong>$1200</strong>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Remove item">X
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- /.Third row -->

                                        <!-- Fourth row -->
                                        <tr>
                                            <td colspan="3"></td>
                                            <td>
                                                <h4 class="mt-2">
                                                    <strong>Total</strong>
                                                </h4>
                                            </td>
                                            <td class="text-right">
                                                <h4 class="mt-2">
                                                    <strong>$2600</strong>
                                                </h4>
                                            </td>
                                            <td colspan="3" class="text-right">
                                                <button type="button" class="btn btn-primary btn-rounded">Complete purchase
                                                    <i class="fa fa-angle-right right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Fourth row -->

                                    </tbody>
                                    <!-- /.Table body -->

                                </table>

                            </div>
                            <!-- /.Shopping Cart table -->

                        </div>

                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Ecommerce-->

        <hr class="between-sections">
        <!--Section: Inputs-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Inputs</h3>

            <h5 class="pb-5">Input fields</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="md-form">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1" class="">Basic example</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="md-form form-sm">
                        <input type="text" id="form2" class="form-control form-control-sm">
                        <label for="form2" class="">Small input</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <div class="md-form">
                        <input placeholder="Placeholder" type="text" id="form5" class="form-control">
                        <label for="form5">Example label</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <div class="md-form">
                        <input value="John Doe" type="text" id="form6" class="form-control">
                        <label class="active" for="form6">Prefilling text inputs</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <div class="md-form">
                        <input type="text" id="form13" class="form-control" disabled>
                        <label for="form13" class="disabled">Disabled input</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Email validation-->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" id="form99" class="form-control validate">
                        <label for="form99" data-error="wrong" data-success="right">Type your email</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Password validation-->
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form10" class="form-control validate">
                        <label for="form10" data-error="wrong" data-success="right">Type your password</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5 pt-4">Error or Success Messages</h5>

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Email validation-->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" id="form9" class="form-control validate">
                        <label for="form9" data-error="wrong" data-success="right">Type your email</label>
                    </div>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Password validation-->
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form10" class="form-control validate">
                        <label for="form10" data-error="wrong" data-success="right">Type your password</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5">Textarea</h5>

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Basic textarea-->
                    <div class="md-form">
                        <textarea type="text" id="form7" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form7">Basic textarea</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Textarea with icon prefix-->
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea type="text" id="form8" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form8">Icon Prefix</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5 pt-4">Checkboxes and Radio</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <fieldset class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1" checked="checked">
                        <label class="form-check-label" for="checkbox1">Classic checkbox</label>
                    </fieldset>

                    <fieldset class="form-check">
                        <input class="form-check-input filled-in" type="checkbox" id="checkbox2" checked="checked">
                        <label class="form-check-label" for="checkbox2">Filled-in checkbox</label>
                    </fieldset>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <fieldset class="form-check">
                        <input class="form-check-input" name="group1" type="radio" id="radio1" checked="checked">
                        <label class="form-check-label" for="radio1">Option 1</label>
                    </fieldset>

                    <fieldset class="form-check">
                        <input class="form-check-input" name="group1" type="radio" id="radio2">
                        <label class="form-check-label" for="radio2">Option 2</label>
                    </fieldset>

                    <fieldset class="form-check">
                        <input class="form-check-input" name="group1" type="radio" id="radio3">
                        <label class="form-check-label" for="radio3">Option 3</label>
                    </fieldset>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!-- Switch -->
                    <div class="switch">
                        <label>
                            Off
                            <input type="checkbox" checked="checked">
                            <span class="lever"></span> On
                        </label>
                    </div>
                    <!-- Disabled Switch -->
                    <div class="switch">
                        <label>
                            Off
                            <input disabled type="checkbox">
                            <span class="lever"></span> On
                        </label>
                    </div>


                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5 pt-4">File input</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <form>
                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose file</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload your file">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <form action="#">
                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose files</span>
                                    <input type="file" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5 pt-4">Range</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <form class="range-field">
                        <input type="range" min="0" max="100" />
                    </form>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5 pt-4">Character counters</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">

                    <div class="md-form">
                        <input class="form-control" id="input-char-counter" type="text" length="10">
                        <label for="input-char-counter">Input text</label>
                    </div>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <div class="md-form">
                        <textarea id="textarea-char-counter" class="form-control md-textarea" rows="3" length="120"></textarea>
                        <label for="textarea-char-counter">Type your text</label>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Inputs-->

        <hr class="between-sections my-5">
        <!--Section: Blog-->
        <section class="section text-center">

            <!--Section heading-->
            <h3 class="section-heading mb-5 h1">Blog components</h3>

            <h5 class="">Author Box</h5>

            <!--Section: Author Box-->
            <section class="my-5">

                <!-- Card header -->
                <div class="card-header border-0 font-weight-bold d-flex justify-content-between">
                    <p class="mr-4 mb-0">About author</p>
                    <ul class="list-unstyled list-inline mb-0">
                        <li class="list-inline-item"><a href="" class="mr-3"><i
                                    class="fa fa-envelope mr-1"></i>Send message</a></li>
                        <li class="list-inline-item"><a href="" class="mr-3"><i class="fa fa-user mr-1"></i>See
                                profile</a></li>
                        <li class="list-inline-item"><a href="" class="mr-3"><i
                                    class="fa fa-feed mr-1"></i>Follow</a></li>
                    </ul>
                </div>

                <div class="media mt-4 px-1">
                    <img class="card-img-100 d-flex z-depth-1 mr-3"
                        src="http://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="font-weight-bold mt-0">
                            <a href="">Danny Newman</a>
                        </h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consectetur accusamus velit nostrum
                        et magnam.
                    </div>
                </div>

            </section>
            <!--Section: Author Box-->
        </section>

        <h5 class="my-5">Comments List</h5>
        <!--Section: Comments-->
        <section class="my-5">

            <!-- Card header -->
            <div class="card-header border-0 font-weight-bold">4 comments</div>

            <div class="media d-block d-md-flex mt-4">
                <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg"
                    alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="font-weight-bold mt-0">
                        <a href="">Miley Steward</a>
                        <a href="" class="pull-right">
                            <i class="fa fa-reply"></i>
                        </a>
                    </h5>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <div class="media d-block d-md-flex mt-4">
                        <img class="card-img-64 d-flex mx-auto mb-3"
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="font-weight-bold mt-0">
                                <a href="">Tommy Smith</a>
                                <a href="" class="pull-right">
                                    <i class="fa fa-reply"></i>
                                </a>
                            </h5>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>
                    </div>

                    <!-- Quick Reply -->
                    <div class="form-group mt-4">
                        <label for="quickReplyFormComment">Your comment</label>
                        <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                        <div class="text-center my-4">
                            <button class="btn btn-primary btn-sm" type="submit">Post</button>
                        </div>
                    </div>

                    <div class="media d-block d-md-flex mt-3">
                        <img class="card-img-64 d-flex mx-auto mb-3"
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="font-weight-bold mt-0">
                                <a href="">Sylvester the Cat</a>
                                <a href="" class="pull-right">
                                    <i class="fa fa-reply"></i>
                                </a>
                            </h5>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                            sed quia non numquam eius modi
                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                </div>
            </div>
            <div class="media d-block d-md-flex mt-3">
                <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg"
                    alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="font-weight-bold mt-0">
                        <a href="">Caroline Horwitz</a>
                        <a href="" class="pull-right">
                            <i class="fa fa-reply"></i>
                        </a>
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                    culpa officia deserunt mollitia animi, id est laborum et dolorum fuga.
                </div>
            </div>

            <!--Pagination -->
            <nav class="d-flex justify-content-center mt-5">
                <ul class="pagination pg-blue mb-0">

                    <!--First-->
                    <li class="page-item disabled">
                        <a class="page-link">First</a>
                    </li>

                    <!--Arrow left-->
                    <li class="page-item disabled">
                        <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <!--Numbers-->
                    <li class="page-item active">
                        <a class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">5</a>
                    </li>

                    <!--Arrow right-->
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>

                    <!--Last-->
                    <li class="page-item">
                        <a class="page-link">Last</a>
                    </li>

                </ul>
            </nav>
            <!--Pagination -->
        </section>
        <!--Section: Comments-->


        <h5 class="my-5">Reply Form (logged in user)</h5>
        <!-- Reply section (logged in user) -->
        <section class="my-5">

            <div class="card-header border-0 font-weight-bold">Leave a reply (logged in user)</div>

            <div class="d-md-flex flex-md-fill px-1">
                <div class="d-flex justify-content-center mr-md-5 mt-md-5 mt-4">
                    <img class="card-img-100 z-depth-1 rounded-circle"
                        src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="avatar">
                </div>
                <div class="md-form w-100">
                    <textarea class="form-control md-textarea pt-0" id="exampleFormControlTextarea1" rows="5"
                        placeholder="Write something here..."></textarea>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-default btn-rounded btn-md">Submit</button>
            </div>
        </section>
        <!-- Reply section (logged in user) -->


        <h5 class="my-5">Reply Form (Not logged in user)</h5>
        <!-- Reply section -->
        <section class="my-5">

            <!-- Leave a reply -->
            <div class="card-header border-0 font-weight-bold">Leave a reply</div>

            <!-- Reply form -->
            <form>

                <div class="d-md-flex flex-md-fill">

                    <div class="md-form input-group input-group-md px-2 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon pr-4" id="basic-addon9"><i
                                    class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control mt-0 pl-0" placeholder="Username"
                            aria-describedby="basic-addon9">
                    </div>
                    <div class="md-form input-group input-group-md px-2 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon pr-4" id="basic-addon10"><i
                                    class="fa fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control mt-0 pl-0" placeholder="Email"
                            aria-describedby="basic-addon10">
                    </div>
                    <div class="md-form input-group input-group-md px-2 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon pr-4" id="basic-addon101"><i
                                    class="fa fa-code"></i></span>
                        </div>
                        <input type="text" class="form-control mt-0 pl-0" placeholder="Website" aria-describedby="basic-1">
                    </div>

                </div>

                <div class="md-form input-group mt-0 px-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text align-items-start md-addon pr-4"><i
                                class="fas fa-pencil-alt"></i></span>
                    </div>
                    <textarea class="form-control md-textarea pl-0" rows="5" placeholder="Write something here"
                        aria-describedby="with-textarea"></textarea>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-default btn-rounded btn-md">Submit</button>
                </div>

            </form>
            <!-- Reply form -->
        </section>
        <!-- Reply section -->

        <hr class="between-sections my-5">
        <!--Section: Navbars-->
        <section class="section text-center">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Navbars</h3>

            <!--Section: Live preview-->
            <section>

                <!--Navbar-->
                <nav class="navbar navbar-expand-lg navbar-dark primary-color">

                    <!-- Navbar brand -->
                    <a class="navbar-brand" href="#">Navbar</a>

                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="basicExampleNav">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>

                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>

                        </ul>
                        <!-- Links -->

                        <form class="form-inline">
                            <div class="md-form my-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </form>
                    </div>
                    <!-- Collapsible content -->

                </nav>
                <!--/.Navbar-->

                <div style="height: 40px"></div>

                <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark unique-color">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-danger"
                                    aria-labelledby="navbarDropdownMenuLink-3">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-danger"
                                    aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--/.Navbar -->

                <div style="height: 40px"></div>

                <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark cyan">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-envelope"></i> Contact
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-gear"></i> Settings</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> Profile </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-info"
                                    aria-labelledby="navbarDropdownMenuLink-4">
                                    <a class="dropdown-item" href="#">My account</a>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--/.Navbar -->

                <div style="height: 40px"></div>

                <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark purple lighten-1">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light">1
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                            <li class="nav-item avatar dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="https://mdbootstrap.com/img/Photos/Categories/Components/img(31).jpg"
                                        class="img-fluid rounded-circle z-depth-0"
                                        alt="Material Design for Bootstrap - example photo">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-secondary"
                                    aria-labelledby="navbarDropdownMenuLink-5">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--/.Navbar -->

            </section>
            <!--Section: Live preview-->

            <h5 class="py-5">Breadcrumbs</h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">Library</li>
            </ol>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Library</a>
                </li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </section>
        <!--Section: Navbars-->

        <hr class="between-sections">
        <!--Section: Forms-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Forms</h3>

            <h5 class="pb-5 mb-5">Forms with header </h5>

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-md-6 mb-4 pb-5">

                    <div class="card">
                        <div class="card-body">

                            <!--Header-->
                            <div class="form-header default-color">
                                <h3>
                                    <i class="fa fa-lock"></i> Login:
                                </h3>
                            </div>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" class="form-control">
                                <label for="defaultForm-email">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control">
                                <label for="defaultForm-pass">Your password</label>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-default">Login</button>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options">
                                <p>Not a member?
                                    <a href="#">Sign Up</a>
                                </p>
                                <p>Forgot
                                    <a href="#">Password?</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Form with header-->
                    <div class="card">
                        <div class="card-body">

                            <!--Header-->
                            <div class="form-header peach-gradient">
                                <h3>
                                    <i class="fa fa-user"></i> Register:
                                </h3>
                            </div>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control">
                                <label for="orangeForm-name">Your name</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="orangeForm-email" class="form-control">
                                <label for="orangeForm-email">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass" class="form-control">
                                <label for="orangeForm-pass">Your password</label>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-deep-orange">Sign up</button>
                            </div>

                        </div>
                    </div>
                    <!--/Form with header-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="pb-5 pt-3">Forms without header </h5>

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Form without header-->
                    <div class="card">
                        <div class="card-body">

                            <!--Header-->
                            <div class="text-center cyan-text">
                                <h3>
                                    <i class="fa fa-lock cyan-text"></i> Login:
                                </h3>
                                <hr class="my-4">
                            </div>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="cyanForm-email" class="form-control">
                                <label for="cyanForm-email">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="cyanForm-pass" class="form-control">
                                <label for="cyanForm-pass">Your password</label>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-info">Login</button>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options">
                                <p>Not a member?
                                    <a href="#">Sign Up</a>
                                </p>
                                <p>Forgot
                                    <a href="#">Password?</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!--/Form without header-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Form without header-->
                    <div class="card">
                        <div class="card-body">

                            <!--Header-->
                            <div class="text-center pink-text">
                                <h3>
                                    <i class="fas fa-pencil-alt pink-text"></i> Subscribe:
                                </h3>
                                <hr class="mt-2 mb-2">
                            </div>

                            <!--Body-->
                            <p>We'll write rarely, but only the best content.</p>
                            <br>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="pinkForm-name" class="form-control">
                                <label for="pinkForm-name">Your name</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="pinkForm-email" class="form-control">
                                <label for="pinkForm-email">Your email</label>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-pink">Send</button>
                            </div>

                        </div>
                    </div>
                    <!--/Form without header-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="my-4">Naked forms </h5>

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Naked Form-->
                    <div class="card-body">

                        <!--Header-->
                        <div class="text-center deep-purple-text">
                            <h3>
                                <i class="fa fa-lock deep-purple-text"></i> Login:
                            </h3>
                            <hr class="mt-2 mb-2">
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="dpurpleForm-email" class="form-control">
                            <label for="dpurpleForm-email">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="dpurpleForm-pass" class="form-control">
                            <label for="dpurpleForm-pass">Your password</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-deep-purple">Login</button>
                        </div>

                    </div>

                    <!--Footer-->
                    <div class="modal-footer">
                        <div class="options">
                            <p>Not a member?
                                <a href="#">Sign Up</a>
                            </p>
                            <p>Forgot
                                <a href="#">Password?</a>
                            </p>
                        </div>
                    </div>
                    <!--Naked Form-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Naked Form-->
                    <div class="card-body">

                        <!--Header-->
                        <div class="text-center">
                            <h3>
                                <i class="fa fa-envelope"></i> Write to us:
                            </h3>
                            <hr class="mt-2 mb-2">
                        </div>

                        <!--Body-->
                        <p>We'll write rarely, but only the best content.</p>
                        <br>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="contactForm-name" class="form-control">
                            <label for="contactForm-name">Your name</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="contactForm-email" class="form-control">
                            <label for="contactForm-email">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-tag prefix grey-text"></i>
                            <input type="text" id="contactForm-subj" class="form-control">
                            <label for="contactForm-subj">Subject</label>
                        </div>

                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea type="text" id="contactForm-mess" class="md-textarea"></textarea>
                            <label for="contactForm-mess">Icon Prefix</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-default">Submit</button>

                            <div class="call">
                                <br>
                                <p>Or would you prefer to call?
                                    <br>
                                    <span>
                                        <i class="fa fa-phone"> </i>
                                    </span> + 01 234 565 280
                                </p>
                            </div>
                        </div>

                    </div>
                    <!--Naked Form-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="my-4">Elegant forms </h5>

            <!--Grid row-->
            <div class="row mt-5 text-left">

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 ml-auto mb-4">

                    <section class="form-elegant">

                        <!--Form without header-->
                        <div class="card">

                            <div class="card-body mx-4">

                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="dark-grey-text mb-5">
                                        <strong>Sign in</strong>
                                    </h3>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="Form-email1" class="form-control">
                                    <label for="Form-email1">Your email</label>
                                </div>

                                <div class="md-form pb-3">
                                    <input type="password" id="Form-pass1" class="form-control">
                                    <label for="Form-pass1">Your password</label>
                                    <p class="font-small blue-text d-flex justify-content-end">Forgot
                                        <a href="#" class="blue-text ml-1"> Password?</a>
                                    </p>
                                </div>

                                <div class="text-center mb-3">
                                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign
                                        in</button>
                                </div>
                                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2">
                                    or Sign in with:</p>

                                <div class="row my-3 d-flex justify-content-center">
                                    <!--Facebook-->
                                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a">
                                        <i class="fa fa-facebook blue-text text-center"></i>
                                    </button>
                                    <!--Twitter-->
                                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a">
                                        <i class="fa fa-twitter blue-text"></i>
                                    </button>
                                    <!--Google +-->
                                    <button type="button" class="btn btn-white btn-rounded z-depth-1a">
                                        <i class="fa fa-google-plus blue-text"></i>
                                    </button>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer mx-5 pt-3 mb-1">
                                <p class="font-small grey-text d-flex justify-content-end">Not a member?
                                    <a href="#" class="blue-text ml-1"> Sign Up</a>
                                </p>
                            </div>

                        </div>
                        <!--/Form without header-->

                    </section>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mr-auto mb-4">

                    <!--Section: Live preview-->
                    <section class="form-dark">

                        <!--Form without header-->
                        <div class="card card-image"
                            style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg')">
                            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="white-text mb-5 mt-4 font-weight-bold">
                                        <strong>SIGN</strong>
                                        <a class="green-text font-weight-bold">
                                            <strong> UP</strong>
                                        </a>
                                    </h3>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="Form-email5" class="form-control white-text">
                                    <label for="Form-email5">Your email</label>
                                </div>

                                <div class="md-form pb-3">
                                    <input type="password" id="Form-pass5" class="form-control white-text">
                                    <label for="Form-pass5">Your password</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck17">
                                        <label class="form-check-label white-text" for="defaultCheck17">Accept the
                                            <a href="#" class="green-text font-weight-bold"> Terms and Conditions</a>
                                        </label>
                                    </div>
                                </div>

                                <!--Grid row-->
                                <div class="row d-flex align-items-center mb-4">

                                    <!--Grid column-->
                                    <div class="text-center mb-3 col-md-12">
                                        <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Sign
                                            in</button>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <p class="font-small white-text d-flex justify-content-end">Have an account?
                                        <a href="#" class="green-text ml-1 font-weight-bold"> Log in</a>
                                    </p>
                                </div>
                                <!--Grid column-->

                            </div>
                        </div>
                        <!--/Form without header-->

                    </section>
                    <!--Section: Live preview-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mt-5 text-left">

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 ml-auto mb-4">

                    <section class="form-elegant">

                        <!--Section: Live preview-->
                        <section class="form-light">

                            <!--Form without header-->
                            <div class="card">

                                <div class="card-body mx-4">

                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="pink-text mb-5">
                                            <strong>Sign up</strong>
                                        </h3>
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <input type="text" id="Form-email2" class="form-control">
                                        <label for="Form-email2">Your email</label>
                                    </div>

                                    <div class="md-form pb-3">
                                        <input type="password" id="Form-pass2" class="form-control">
                                        <label for="Form-pass2">Your password</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="defaultCheck12">
                                            <label for="defaultCheck12" class="grey-text">Accept the
                                                <a href="#" class="blue-text"> Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>

                                    <!--Grid row-->
                                    <div class="row d-flex align-items-center mb-4">

                                        <!--Grid column-->
                                        <div class="col-md-3 col-md-6 text-center">
                                            <button type="button"
                                                class="btn btn-pink btn-block btn-rounded z-depth-1">Sign up</button>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <p class="font-small grey-text d-flex justify-content-end">Have an account?
                                                <a href="#" class="blue-text ml-1"> Log in</a>
                                            </p>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->
                                </div>

                                <!--Footer-->
                                <div class="footer pt-3 mdb-color lighten-3">

                                    <div class="row d-flex justify-content-center">
                                        <p class="font-small white-text mb-2 pt-3">or Sign up with:</p>
                                    </div>

                                    <div class="row mt-2 mb-3 d-flex justify-content-center">
                                        <!--Facebook-->
                                        <a class="fa-lg p-2 m-2 fb-ic">
                                            <i class="fa fa-facebook white-text fa-lg"> </i>
                                        </a>
                                        <!--Twitter-->
                                        <a class="fa-lg p-2 m-2 tw-ic">
                                            <i class="fa fa-twitter white-text fa-lg"> </i>
                                        </a>
                                        <!--Google +-->
                                        <a class="fa-lg p-2 m-2 gplus-ic">
                                            <i class="fa fa-google-plus white-text fa-lg"> </i>
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <!--/Form without header-->

                        </section>
                        <!--Section: Live preview-->
                    </section>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mr-auto mb-4">

                    <section class="form-simple">

                        <!--Form with header-->
                        <div class="card">

                            <!--Header-->
                            <div class="header pt-3 grey lighten-2">

                                <div class="row d-flex justify-content-start">
                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Log in</h3>
                                </div>

                            </div>
                            <!--Header-->

                            <div class="card-body mx-4 mt-4">

                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="Form-email4" class="form-control">
                                    <label for="Form-email4">Your email</label>
                                </div>

                                <div class="md-form pb-3">
                                    <input type="password" id="Form-pass4" class="form-control">
                                    <label for="Form-pass4">Your password</label>
                                    <p class="font-small grey-text d-flex justify-content-end">Forgot
                                        <a href="#" class="dark-grey-text font-weight-bold ml-1"> Password?</a>
                                    </p>
                                </div>

                                <div class="text-center mb-4">
                                    <button type="button" class="btn btn-danger btn-block z-depth-2">Log in</button>
                                </div>
                                <p class="font-small grey-text d-flex justify-content-center">Don't have an account?
                                    <a href="#" class="dark-grey-text font-weight-bold ml-1"> Sign up</a>
                                </p>

                            </div>

                        </div>
                        <!--/Form with header-->

                    </section>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Forms-->

        <hr class="between-sections mt-0">
        <!--Section: Progress-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Progress bars</h3>

            <h5 class="my-5">Basic example </h5>

            <div class="row">
                <div class="my-2 progress">
                    <div class="progress-bar" role="progressbar" style="width: 0;" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <h5 class="my-5">Contextual alternatives </h5>

            <div class="row">
                <div class="my-2 progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="my-2 progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <h5 class="my-5">Infinite loading </h5>

            <div class="row">
                <div class="progress primary-color-dark">
                    <div class="indeterminate"></div>
                </div>
            </div>

            <h5 class="my-5">Circles </h5>

            <div class="row mb-5">

                <div class="col-md-4">

                    <!-- Big blue -->
                    <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-blue-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <!--Medium red-->
                    <div class="preloader-wrapper active">
                        <div class="spinner-layer spinner-red-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <!--Small yellow-->
                    <div class="preloader-wrapper small active">
                        <div class="spinner-layer spinner-yellow-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mb-5">

                <div class="col-md-4">

                    <div class="preloader-wrapper big active">
                        <div class="preloader-wrapper big active">
                            <div class="preloader-wrapper big active">
                                <div class="preloader-wrapper big active">
                                    <div class="spinner-layer spinner-blue-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="preloader-wrappe active">
                        <div class="preloader-wrapper active">
                            <div class="preloader-wrapper active">
                                <div class="preloader-wrapper active">
                                    <div class="spinner-layer spinner-red-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="preloader-wrapper small active">
                        <div class="preloader-wrapper small active">
                            <div class="preloader-wrapper small active">
                                <div class="preloader-wrapper small active">
                                    <div class="spinner-layer spinner-green-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-blue">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-red">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-yellow">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-green">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Section: Progress-->

        <hr class="between-sections">
        <!--Section: Tabs and Pills-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Tabs & Pills</h3>

            <h5 class="pb-5 mb-3">Basic example</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Follow</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Contact</a>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel2" role="tabpanel">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel3" role="tabpanel">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 3-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified indigo" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">
                                <i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel6" role="tab">
                                <i class="fa fa-heart"></i> Follow</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">
                                <i class="fa fa-envelope"></i> Mail</a>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel6" role="tabpanel">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel7" role="tabpanel">
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 3-->
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">

                    <ul class="nav md-pills nav-justified pills-secondary">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel4" role="tab">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel11" role="tab">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">Help</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                            <br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>

                        </div>
                        <!--/.Panel 1-->

                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel12" role="tabpanel">
                            <br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>

                        </div>
                        <!--/.Panel 2-->

                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel13" role="tabpanel">
                            <br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>

                        </div>
                        <!--/.Panel 3-->

                        <!--Panel 4-->
                        <div class="tab-pane fade" id="panel14" role="tabpanel">
                            <br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                placeat
                                ratione porro voluptate odit minima.</p>

                        </div>
                        <!--/.Panel 4-->

                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">



                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <h5 class="py-5">Classic tabs</h5>

            <div class="row">
                <div class="col-12 my-3">

                    <!-- Classic tabs -->
                    <div class="classic-tabs">

                        <!-- Nav tabs -->
                        <div class="tabs-wrapper">
                            <ul class="nav tabs-cyan" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel36"
                                        role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel37"
                                        role="tab">Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel38"
                                        role="tab">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel39" role="tab">Be
                                        awesome</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel36" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel37" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel38" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel39" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 4-->
                        </div>

                    </div>
                    <!-- Classic tabs -->

                </div>
                <div class="col-12 my-3">

                    <!-- Classic tabs -->
                    <div class="classic-tabs">

                        <!-- Nav tabs -->
                        <div class="tabs-wrapper">
                            <ul class="nav tabs-amber" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel40" role="tab">
                                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                        <br> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel41" role="tab">
                                        <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                                        <br> Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel42" role="tab">
                                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        <br> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel43" role="tab">
                                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                                        <br> Be awesome</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel40" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel41" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel42" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel43" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 4-->
                        </div>

                    </div>
                    <!-- Classic tabs -->

                </div>
                <div class="col-12 my-3">

                    <!-- Classic tabs -->
                    <div class="classic-tabs">

                        <!-- Nav tabs -->
                        <div class="tabs-wrapper">
                            <ul class="nav tabs-grey" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel71" role="tab">
                                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                        <br> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel72" role="tab">
                                        <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                                        <br> Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel73" role="tab">
                                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        <br> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel74" role="tab">
                                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                                        <br> Be awesome</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel71" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel72" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel73" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel74" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 4-->
                        </div>

                    </div>
                    <!-- Classic tabs -->

                </div>
                <div class="col-12 my-3">

                    <!-- Classic tabs -->
                    <div class="classic-tabs">

                        <!-- Nav tabs -->
                        <div class="tabs-wrapper">
                            <ul class="nav tabs-pink" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel75" role="tab">
                                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                        <br> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel76" role="tab">
                                        <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                                        <br> Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel77" role="tab">
                                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        <br> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel78" role="tab">
                                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                                        <br> Be awesome</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel75" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel76" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel77" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel78" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 4-->
                        </div>

                    </div>
                    <!-- Classic tabs -->

                </div>
                <div class="col-12 my-3">

                    <!-- Classic tabs -->
                    <div class="classic-tabs">

                        <!-- Nav tabs -->
                        <div class="tabs-wrapper">
                            <ul class="nav tabs-success" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel79" role="tab">
                                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                        <br> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel80" role="tab">
                                        <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                                        <br> Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel81" role="tab">
                                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        <br> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel82" role="tab">
                                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                                        <br> Be awesome</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel79" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel80" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel81" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel82" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 4-->
                        </div>

                    </div>
                    <!-- Classic tabs -->

                </div>
                <div class="col-12 my-3">

                    <!-- Classic tabs -->
                    <div class="classic-tabs">

                        <!-- Nav tabs -->
                        <div class="tabs-wrapper">
                            <ul class="nav tabs-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">
                                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                        <br> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel84" role="tab">
                                        <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                                        <br> Follow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel85" role="tab">
                                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        <br> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel86" role="tab">
                                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                                        <br> Be awesome</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel83" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel84" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel85" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel86" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                    soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                                    placeat
                                    ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 4-->
                        </div>

                    </div>
                    <!-- Classic tabs -->

                </div>
        </section>
        <!--Section: Tabs and Pills-->

        <hr class="between-sections mt-5">
        <!--Section: Miscellaneous-->
        <section class="section">

            <!--Section heading-->
            <h3 class="section-heading mb-5  h1 mt-0">Miscellaneous</h3>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-3">

                    <nav aria-label="...">
                        <ul class="pagination pg-purple">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-blue">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-red">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-dark">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-bluegrey">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-amber">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-teal">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                    <nav aria-label="...">
                        <ul class="pagination pg-darkgrey">
                            <li class="page-item">
                                <a class="page-link">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <!--Grid column-->

                <div class="col-md-4">
                    <div class="chip">
                        <img src="https://mdbootstrap.com/img/Photos/Categories/Components/img(31).jpg"
                            alt="Contact Person"> Jane Doe
                    </div>
                    <div class="chip">
                        <img src="https://mdbootstrap.com/img/Photos/Categories/Components/img(32).jpg"
                            alt="Contact Person"> Jerry Black
                    </div>

                    <hr>

                    <div class="chip">
                        Tag 1
                        <i class="close fa fa-times"></i>
                    </div>
                    <div class="chip">
                        Tag 2
                        <i class="close fa fa-times"></i>
                    </div>
                    <div class="chip">
                        Tag 3
                        <i class="close fa fa-times"></i>
                    </div>
                </div>

                <div class="col-md-5 text-left">
                    <h3>Example heading
                        <span class="badge badge-default">New</span>
                    </h3>
                    <h2>Example heading
                        <span class="badge badge-primary">New</span>
                    </h2>
                    <h3>Example heading
                        <span class="badge badge-success">New</span>
                    </h3>
                    <h4>Example heading
                        <span class="badge badge-info">New</span>
                    </h4>
                    <h5>Example heading
                        <span class="badge badge-warning">New</span>
                    </h5>
                    <h6>Example heading
                        <span class="badge badge-danger">New</span>
                    </h6>
                </div>

            </div>
            <!--Grid row-->

            <h5 class="my-3">Steppers</h5>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <!-- Stepers Wrapper -->
                    <ul class="stepper stepper-horizontal">

                        <!-- First Step -->
                        <li class="completed">
                            <a href="#!">
                                <span class="circle">1</span>
                                <span class="label">First step</span>
                            </a>

                        </li>

                        <!-- Second Step -->
                        <li class="active">
                            <a href="#!">
                                <span class="circle">2</span>
                                <span class="label">Second step</span>
                            </a>

                        </li>

                        <!-- Third Step -->
                        <li class="warning">
                            <a href="#!">
                                <span class="circle">
                                    <i class="fa fa-warning"></i>
                                </span>
                                <span class="label">Third step</span>
                            </a>
                        </li>

                    </ul>
                    <!-- /.Stepers Wrapper -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <!-- Stepers Wrapper -->
                    <ul class="stepper stepper-vertical">

                        <!-- First Step -->
                        <li class="completed">
                            <a href="#!">
                                <span class="circle">1</span>
                                <span class="label">First step</span>
                            </a>
                        </li>

                        <!-- Second Step -->
                        <li class="active">

                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle">2</span>
                                <span class="label">Second step</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content grey lighten-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse cupiditate voluptate
                                    facere
                                    iusto quaerat vitae excepturi, accusantium ut aliquam repellat atque nesciunt nostrum
                                    similique. Inventore nostrum ut, nobis porro sapiente.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore error excepturi veniam
                                    nemo
                                    repellendus, distinctio soluta vitae at sit saepe. Optio eaque quia excepturi adipisci
                                    pariatur totam, atque odit fugiat.</p>
                                <p>Deserunt voluptatem illum quae nisi soluta eum perferendis nesciunt asperiores tempore
                                    saepe
                                    reiciendis, vero quod a dolor corporis natus qui magni quas fuga rem excepturi
                                    laboriosam.
                                    Quisquam expedita ab fugiat.</p>
                            </div>
                        </li>

                        <!-- Third Step -->
                        <li class="warning">
                            <a href="#!">
                                <span class="circle">
                                    <i class="fa fa-warning"></i>
                                </span>
                                <span class="label">Third step</span>
                            </a>
                        </li>

                        <!-- Fourth Step -->
                        <li>
                            <a href="#!">
                                <span class="circle">4</span>
                                <span class="label">Fourth step</span>
                            </a>
                        </li>

                    </ul>
                    <!-- /.Stepers Wrapper -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mb-4">
                    <div class="purple-gradient color-block mb-3 mx-auto rounded-circle z-depth-1"></div>
                    <h5 class="mb-0">purple-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-4">
                    <div class="blue-gradient color-block mb-3 mx-auto rounded-circle z-depth-1"></div>
                    <h5 class="mb-0">blue-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-4">
                    <div class="aqua-gradient color-block mb-3 mx-auto rounded-circle z-depth-1"></div>
                    <h5 class="mb-0">aqua-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-4">
                    <div class="peach-gradient color-block mb-3 mx-auto rounded-circle z-depth-1"></div>
                    <h5 class="mb-0">peach-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="warm-flame-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>warm-flame-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="night-fade-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>night-fade-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="spring-warmth-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>spring-warmth-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="juicy-peach-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>juicy-peach-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="young-passion-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>young-passion-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <div class="rainy-ashville-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>rainy-ashville-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="sunny-morning-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>sunny-morning-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="lady-lips-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>lady-lips-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="winter-neva-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>winter-neva-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="frozen-dreams-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>frozen-dreams-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="dusty-grass-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>dusty-grass-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="tempting-azure-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>tempting-azure-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="heavy-rain-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>heavy-rain-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="amy-crisp-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>amy-crisp-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="mean-fruit-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>mean-fruit-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="deep-blue-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>deep-blue-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="ripe-malinka-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>ripe-malinka-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <div class="cloudy-knoxville-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>cloudy-knoxville-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="morpheus-den-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>morpheus-den-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="rare-wind-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>rare-wind-gradient</h5>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="near-moon-gradient color-block mb-3 mx-auto rounded-circle z-depth-1-half"></div>
                    <h5>near-moon-gradient</h5>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Miscellaneous-->


    </div>


@endsection

@section('plugins_script')



@endsection
