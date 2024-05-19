<?php include "includes/header.php"; ?>
    <!--<header>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-3 bg-danger py-5">LOGO</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</header>-->




    <!--Slider start-->
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <?php foreach ($sliders as $key => $slider) { ?>
                <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
                    <img src="<?php echo $slider['image'] ?>" alt="" class="w-100" height="550">
                    <div class="carousel-caption">
                        <h1><?php echo $slider['title'] ?></h1>
                        <p><?php echo $slider['short_description'] ?></p>
                        <a href="action.php?page=detail&&id=<?php echo $slider['id'] ?>" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            <?php } ?>

        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!--Card body only start-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body rounded-0">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                            aliquam, amet aut deserunt eligendi est hic ipsam libero nisi, nobis pariatur possimus
                            recusandae, sequi vel voluptate. Accusamus accusantium expedita laudantium.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body rounded-0">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                            aliquam, amet aut deserunt eligendi est hic ipsam libero nisi, nobis pariatur possimus
                            recusandae, sequi vel voluptate. Accusamus accusantium expedita laudantium.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body rounded-0">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                            aliquam, amet aut deserunt eligendi est hic ipsam libero nisi, nobis pariatur possimus
                            recusandae, sequi vel voluptate. Accusamus accusantium expedita laudantium.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/2.jpg">
                        <div class="card-body">
                            <h3>This is heading content</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, recusandae!</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/2.jpg">
                        <div class="card-body">
                            <h3>This is heading content</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, recusandae!</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/2.jpg">
                        <div class="card-body">
                            <h3>This is heading content</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, recusandae!</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="assets/img/3.jpg" alt="">
                        <div class="card-img-overlay px-0 pb-0">
                            <h3 class="bg-dark text-white position-absolute bottom-0 w-100 mb-0 bg-opacity-75 text-center py-3">
                                This is heading content</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="assets/img/3.jpg" alt="">
                        <div class="card-img-overlay px-0 pb-0">
                            <h3 class="bg-dark text-white position-absolute bottom-0 w-100 mb-0 bg-opacity-75 text-center py-3">
                                This is heading content</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/2.jpg" alt="" class="w-100 h-100">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, in,
                                        repudiandae. Alias eum, hic id laboriosam necessitatibus quaerat sed veritatis
                                        vitae. Nam, quasi, vel. A deserunt id molestias provident quos.</p>
                                    <hr/>
                                    <a href="" class="btn btn-success float-end mb-3">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/2.jpg" alt="" class="w-100 h-100">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, in,
                                        repudiandae. Alias eum, hic id laboriosam necessitatibus quaerat sed veritatis
                                        vitae. Nam, quasi, vel. A deserunt id molestias provident quos.</p>
                                    <hr/>
                                    <a href="" class="btn btn-success float-end mb-3">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>This is title content</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, hic, quasi? Explicabo
                                neque nisi optio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, hic, quasi? Explicabo
                                neque nisi optio.</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>This is title content</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, hic, quasi? Explicabo
                                neque nisi optio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, hic, quasi? Explicabo
                                neque nisi optio.</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>This is title content</h3>
                        </div>
                        <div class="card-body">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, hic, quasi? Explicabo
                                neque nisi optio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, hic, quasi? Explicabo
                                neque nisi optio.</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "includes/footer.php"; ?>