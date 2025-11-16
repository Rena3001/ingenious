      @extends('client.layout.master')
      @section('page_title', "Blog-detail")
      @section('content')
    <!--Page Title-->
    <section class="page-title">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url(images/background/37.jpg)">
                <div class="cws-overlay-bg"></div>
            </div>
        </div>

        <div class="auto-container">
            <h1>Image Post</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Image Post</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Single -->
    <section class="blog-single">
        <div class="auto-container">
            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image-column">
                        <div class="inner-column">
                            <figure class="image"><img src="images/resource/blog-single-1.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="content-column">
                        <div class="inner-column">
                            <ul class="post-info">
                                <li><span class="icon fa fa-calendar"></span> February 02, 2020</li>
                                <li><span class="icon fa fa-user"></span> by admin</li>
                                <li><span class="icon fa fa-heart"></span> 5 likes</li>
                            </ul>
                            <div class="post-tags">
                                <a href="blog-post-video.html">Alarm</a>
                                <a href="blog-post-video.html">Other</a>
                            </div>
                            <h2>Nostra id nunc. Libero platea conubia, sint non in.</h2>
                            <p>Wisi eu maecenas dapibus viverra enim, integer lobortis, vestibulum pretium, tempus dui sed commodo consectetuer justo facilisis. Nulla quam. Ut nulla, vitae nunc eu, erat quis nunc imperdiet per, nulla bibendum. Nunc quam urna sed, curabitur ut. Luctus a ultricies hendrerit magnis, nec sit egestas elit enim scelerisque, dignissim natoque sem, vivamus at id faucibus, urna fermentum tincidunt consectetuer vel nibh. Ac velit wisi scelerisque magnis lacus, amet ut aliquet, lorem laoreet diam nam ornare ligula, scelerisque luctus fringilla, nulla mi montes nec vitae ultrices sapien. Tellus vestibulum bibendum turpis nec lacus, ultrices orci cras egestas urna lorem fermentum, tellus taciti in sem duis rutrum magna.</p>
                            <div class="row two-column">
                                <div class="col-lg-6 col-md-12">
                                    <ul class="list-style-four">
                                        <li>Pellentesque lobortis auctor pellentesque</li>
                                        <li>Aliquam laoreet nunc orci, eget tempor</li>
                                        <li>Vivamus congue ligula vitae est egestas</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <ul class="list-style-four">
                                        <li>Duis nulla augue, placerat vitae quam sit amet</li>
                                        <li>Praesent purus erat mollis bibendum gravid</li>
                                        <li>Phasellus at condimentum risus quam sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Proin quis lobortis eros. Nunc pretium sagittis pretium. Sed ut eleifend ipsum. Etiam volutpat ex in neque dapibus venenatis. Aliquam dictum non lorem vel cursus. Sed tincidunt, erat eget consectetur porta, sem dolor dignissim nibh, ut consequat nibh risus sed dui. Aliquam pellentesque lorem nec placerat pellentesque. Nunc tincidunt accumsan ipsum quis pharetra. Phasellus consectetur varius ullamcorper. Proin vitae purus lorem. Cras sit amet neque lorem. Maecenas non odio tempus elit sagittis mattis sit amet sed est.</p>
                            <p><strong>Etiam aliquam mauris suspendisse at, adipiscing senectus.</strong></p>
                            <p>Ac duis purus velit ipsum, quis duis in mauris pellentesque, vehicula mi pellentesque id mauris imperdiet amet, eget eget curabitur, integer vehicula mauris eleifend et felis vel. Massa nisl libero quam amet saepe, nulla ac pharetra neque duis dolorem, pellentesque facilisis tempus amet egestas ridiculus. Ac a, ea blandit aliquam donec vestibulum, consequat vehicula ac. Dui mollitia massa molestie soluta, dictumst eget in donec nec.</p>
                            <p>Suscipit lectus pulvinar, nullam mauris nunc nec, magna amet nec urna suscipit porttitor adipiscing, sapien litora proin, libero scelerisque et nullam. Vivamus vestibulum blandit nisl fusce posuere, varius a mi praesent vel, purus ut a tortor, rutrum arcu ut mauris tincidunt fringilla luctus, duis montes. Dignissim integer sit id quam praesent orci, lectus sed suspendisse nulla lacinia arcu metus, nec nullam magna vehicula proident sociosqu. Potenti ullamcorper elit. Felis sociis aliquam, eu accumsan quisque in ante, sed blandit aute sit, nunc quis. Torquent id vestibulum montes mi felis, adipiscing ut velit, in dui maecenas nullam, magna at malesuada consequat vestibulum congue nonummy.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Comment Form-->
            <div class="comment-form">
                <h3>Leave a Reply</h3>
                <div class="default-form form-outer">
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <form method="post" action="blog-showcase.html"> 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div class="field-label">Comment</div>
                                <textarea name="message" placeholder=""></textarea>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <div class="field-label">Name *</div>
                                <input type="text" name="username" placeholder="" required="">
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <div class="field-label">Email *</div>
                                <input type="email" name="email" placeholder="" required="">
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <div class="field-label">Website</div>
                                <input type="url" name="website" placeholder="" required="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="submit" class="theme-btn btn-style-three" name="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Single -->

    @endsection