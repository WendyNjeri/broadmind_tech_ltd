<?php
include 'topbar.php';
include 'head.php';
include 'header.php';

?>


<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Electrical Services</h2>
            <p>
                We provide electrical services at affordable prices for all your business needs.
            </p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
            <!--
            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Residential Services</li>
                    <li data-filter=".filter-product">Commercial services</li>
                    <li data-filter=".filter-branding">Industrial services</li>
                    <li data-filter=".filter-books">Other services</li>
                </ul><--!-- End Portfolio Filters --
            </div>
            -->
            <div class="row gy-4 portfolio-container">

                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <a href="assets/img/services/home_1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/services/home_1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4>Residential services</h4>
                            <p>
                                Our electricians are all extensively trained
                                with years of experience in residential electrical needs. Servicing Kenya as a whole, we
                                are a
                                full-service company and can handle any home electrical project you have
                            </p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap">
                        <a href="assets/img/services/electrician_4.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/services/electrician_4.jpeg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4>Commercial services</h4>
                            <p>
                                Our company and team bring extensive experience and a range of
                                certifications and accreditations to every project guaranteeing client’s
                                quality, safe and professional services. For us one of the most important
                                aspects is customer service; interpreting your requirements, delivering cost
                                effective results and exceeding your expectations to establish long-term working
                                relationships and an intimate understanding of your electrical systems.
                            </p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <a href="assets/img/services/electrician_3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/services/electrician_3.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">

                        <a href="#" id="openExcelLink" target="_blank" class="readmore stretched-link">More Electrical Services 
                        
                        
                        <i class="bi bi-arrow-right"></i></a>
                        
                        <p>
                           <!--    
                            <ol type="i" >
                                <li type="circle" >

                                    Domestic Installations

                                </li>
                                <li type="circle">
                                    Industrial Installations

                                </li>
                                <li type="circle">
                                    Power factor correction equipment

                                </li>
                                <li type="circle">
                                    Electrical Repair Works

                                </li>
                                <li type="circle">
                                    Low & High Voltage Installations

                                </li>
                                <li type="circle">
                                    Security and surveillance systems

                                </li>
                                <li type="circle">
                                    Structures Cabling and Networking

                                </li>
                                <li type="circle">
                                    Generator Installation Works

                                </li>

                            </ol>
-->

                            </p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->


        </div>
        <br>
        <hr>
        <div class="section-header">
            <h2>REQUEST QUOTE.</h2>
            <a href="contact.php">Need a quote? Reach out to us today.</a>
        </div>

    </div>
</section><!-- End Portfolio Section -->

<script>
    document.getElementById('openExcelLink').addEventListener('click', function (e) {
        e.preventDefault();
        var popup = window.open('electricals_list.php', 'Excel Pop-up', 'width=800,height=600');
        popup.focus();
    });
</script>

<?php include 'footer.php'; ?>