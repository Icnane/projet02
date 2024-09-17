<!doctype html>
<html class="no-js" lang="en">

<!-- <head> -->
@include('partials.head')
<!-- </head> -->

<!-- <body> -->
	<!--header-top start -->
	@include('partials.sidbar')
    <!-- </header> -->
	<!-- <body> -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1 style="text-align: center;padding: 30px;">Les domaine de formations</h1>
        <section class="top-area" style="padding-top: 150px;">
            <div class="clearfix"></div>
            <section id="list-topics" class="list-topics">
                <div class="container">
                    <div class="list-topics-content">
                        <ul>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/vector-computer-icon-symbol-sign.jpg" alt=""
                                            style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Informatique et developpement Web</a></h2>
                                    <i><a href="informatique.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/9796843-icone-caducee-sante-sur-fond-blanc-symbole-medical-style-plat-serpent-medical-logo-caducee-signe-medecine-vectoriel.jpg"
                                            alt="" style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Santé et services sociaux</a></h2>
                                    <i><a href="santé.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/energy-icon-png-1.jpg" alt=""
                                            style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Energie et environnement</a></h2>
                                    <i><a href="energie.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/basic-rgb-173563607.webp" alt=""
                                            style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Administration des affaires</a></h2>
                                    <i><a href="admistration.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/7171933.png" alt=""
                                            style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Formation artistique</a></h2>
                                    <i><a href="artistique.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/why-us-icon-04.png" alt=""
                                            style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Formation logistique</a></h2>
                                    <i><a href="logistique.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/3434597.png" alt=""
                                            style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Langue etrangère</a></h2>
                                    <i><a href="langue.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/Digital-marketing-icon-1-Graphics-11832670-1-580x386.jpg"
                                            alt="" style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Marketiong digital</a></h2>
                                    <i><a href="marketing.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                            <li>
                                <div class="single-list-topics-content">
                                    <div class="single-list-topics-icon">
                                        <img src="assets/images/532-5325826_micks-excavations-free-hand-holding-gear-icon-clipart.png"
                                            alt="" style="height: 50px; margin-right: 10px;">
                                    </div>
                                    <h2><a href="#">Autes...</a></h2>
                                    <i><a href="voirplus.html"><input type="button" value="Voir plus..."></a></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--/.container-->
            </section>   
    <!-- </body> -->

    @include('partials.footer')
 <!-- </body> -->
	</html>