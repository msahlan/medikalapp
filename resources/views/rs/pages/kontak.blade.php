<?php 
	$title = 'Kontak';
    $content = 'Rumah Sakit Kartika Husada';
?>
@extends('layouts.template')

@section('main')

	<style type="text/css">
		    #maps {
	        height: 400px;
	        width: 100%;
      	}
	      #map {
	        height: 400px;
	        width: 100%;
	    }
	</style>

	<section class="no-padding">
            <!-- Google map sensor -->
            <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
            <div id="map" ></div>
        </section>
        <!-- END: PAGE TITLE -->

        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>


                        <div class="row m-t-40">
                            <div class="col-md-6">
                                <address>
			  <strong>Polo, Inc.</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
                            </div>
                            <div class="col-md-6">
                                <address>
			  
								</address>
                            </div>
                        </div>




                        <div class="social-icons m-t-30 social-icons-colored">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form id="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <input type="text" class="hidden" id="widget-contact-form-antispam" name="widget-contact-form-antispam" value="" />
                            <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                        <script type="text/javascript">
                            jQuery("#widget-contact-form").validate({

                                submitHandler: function(form) {

                                    jQuery(form).ajaxSubmit({
                                        success: function(text) {
                                            if (text.response == 'success') {
                                                $.notify({
                                                    message: "We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible."
                                                }, {
                                                    type: 'success'
                                                });
                                                $(form)[0].reset();

                                            } else {
                                                $.notify({
                                                    message: text.message
                                                }, {
                                                    type: 'danger'
                                                });
                                            }
                                        }
                                    });
                                }
                            });

                        </script>
                    </div>
                </div>
            </div>
        </section>  
    <script>
       
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: -6.2445035, lng: 107.0647153}
        });

        
        var marker = new google.maps.Marker({
          position: {lat: -6.2445035, lng: 107.0647153},
          map: map,
           title: ' Gedung Wisma Semeru'
        });
      }
    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS7zVE5h4eBArW7BbZ8tXDhAzSQEpJ4xU&signed_in=true&callback=initMap">
	    </script>

@stop