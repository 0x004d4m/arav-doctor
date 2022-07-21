@extends('layout.main')
@section('content')
    <div class="flexslider overflow-hidden mb-0 text-primary">
        <ul class="slides">
            <li data-zanim-timeline="{&quot;delay&quot;:0}" data-zanim-trigger="scroll">
                <section class="py-0 text-center">
                <div class="bg-holder" style="background-image:url({{url('template/assets/img/header/2.jpg')}});"></div>
                <div class="container">
                    <div class="row align-items-center min-vh-73 py-8 justify-content-center justify-content-md-end">
                    <div class="col-auto">
                        <div class="overflow-hidden">
                        <h1 class="fs-sm-4 fs-3" data-zanim-xs='{"animation":"default","delay":0,"duration":1}'>Small Injuries May <br> Lead to Big Problem</h1>
                        </div>
                        <div class="overflow-hidden">
                        <p class="fs-sm-1 fs-0" data-zanim-xs='{"animation":"default","delay":0.1,"duration":1}'>Your environment could affect your fertility</p>
                        </div>
                        <div class="overflow-hidden">
                        <div data-zanim-xs='{"animation":"default","delay":0.2,"duration":1}'><a class="btn btn-primary mt-4" href="#!">Learn More<span class="fas ml-1 fa-chevron-right" data-fa-transform="shrink-4 down-1.5"></span></a></div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </li>
            <li data-zanim-timeline="{&quot;delay&quot;:0}" data-zanim-trigger="scroll">
                <section class="py-0 text-center">
                <div class="bg-holder" style="background-image:url({{url('template/assets/img/header/1.jpg')}});"></div>
                <div class="container">
                    <div class="row align-items-center min-vh-73 py-8 justify-content-center">
                    <div class="col-auto">
                        <div class="overflow-hidden">
                        <h1 class="fs-sm-4 fs-3" data-zanim-xs='{"animation":"default","delay":0,"duration":1}'>Help is here <br> When You Need it</h1>
                        </div>
                        <div class="overflow-hidden">
                        <p class="fs-sm-1 fs-0" data-zanim-xs='{"animation":"default","delay":0.1,"duration":1}'>A&amp;E average wait time: 30mins</p>
                        </div>
                        <div class="overflow-hidden">
                        <div data-zanim-xs='{"animation":"default","delay":0.2,"duration":1}'><a class="btn btn-primary mt-4" href="#!">Learn More<span class="fas ml-1 fa-chevron-right" data-fa-transform="shrink-4 down-1.5"></span></a></div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </li>
            <li data-zanim-timeline="{&quot;delay&quot;:0}" data-zanim-trigger="scroll">
                <section class="py-0">
                <div class="bg-holder" style="background-image:url({{url('template/assets/img/header/3.jpg')}});"></div>
                <div class="container">
                    <div class="overflow-hidden">
                    <div class="row align-items-center min-vh-73 py-8 justify-content-center justify-content-md-start">
                        <div class="col-auto">
                        <div class="overflow-hidden">
                            <h1 class="fs-sm-4 fs-3" data-zanim-xs='{"animation":"slide-right","delay":0,"duration":1}'>One Stop Solution <br>Medical services</h1>
                        </div>
                        <div class="overflow-hidden">
                            <p class="fs-sm-1 fs-0" data-zanim-xs='{"animation":"slide-right","delay":0.1,"duration":1}'>Call to schedule an appointment today</p>
                        </div>
                        <div class="overflow-hidden">
                            <div data-zanim-xs='{"animation":"slide-right","delay":0.2,"duration":1}'><a class="btn btn-primary mt-4" href="#!">Learn More<span class="fas ml-1 fa-chevron-right" data-fa-transform="shrink-4 down-1.5"></span></a></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </li>
        </ul>
    </div>

    <section class="bg-200 py-3" data-zanim-timeline='{"delay":0}' data-zanim-trigger="scroll">
        <div class="container">
            <div class="row flex-center text-center">
                <div class="col-md-auto">
                <h5 class="fs-0 fs-sm-1 mb-md-0 text-uppercase">stay informed. connect with us.</h5>
                </div>
                <div class="col-md-auto mt-md-0">
                <div class="icon-group justify-content-center"><a class="icon-item bg-white transition-base text-facebook" href="#!"><span class="fab fa-facebook"></span></a><a class="icon-item bg-white transition-base text-twitter" href="#!"><span class="fab fa-twitter"></span></a><a class="icon-item bg-white transition-base text-youtube" href="#!"><span class="fab fa-youtube"></span></a><a class="icon-item bg-white transition-base text-linkedin" href="#!"><span class="fab fa-linkedin"></span></a><a class="icon-item bg-white transition-base text-danger" href="#!"><span class="fab fa-pinterest"></span></a></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
        <div class="text-center mb-5" data-zanim-timeline="{&quot;delay&quot;:0.1}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
            <h6 class="font-weight-bold" data-zanim-xs='{"delay":0}'>Brigham Health</h6>
            </div>
            <div class="overflow-hidden">
            <h3 class="text-uppercase" data-zanim-xs='{"delay":0.3}'>Helping our patients</h3>
            </div>
            <div class="overflow-hidden">
            <hr class="hr-short border-600" data-zanim-xs='{"from":{"width":0},"to":{"width":"4.2rem"},"delay":0.4,"duration":1.5}' />
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-lg-4 col-xxl-3 mb-4 mb-xxl-0">
            <div class="card">
                <div class="card-header">
                <h5 class="text-uppercase mb-0">How can we help you?</h5>
                </div>
                <div class="card-body">
                <div class="link-card bg-primary mb-3">
                    <h5 class="text-white fs-0 mb-0">Find a Doctor</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                <div class="link-card bg-primary mb-3">
                    <h5 class="text-white fs-0 mb-0">Request Appointment</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                <div class="link-card bg-primary mb-3">
                    <h5 class="text-white fs-0 mb-0">Location</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                <div class="link-card bg-primary">
                    <h5 class="text-white fs-0 mb-0">Services</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="row h-100">
                <div class="col-md-6 col-xxl-4 mb-4 mb-xxl-0">
                <div class="card h-100 hvr-shadow h-100"><img class="card-img-top" src="{{url('template/assets/img/blog/11.jpg')}}" alt="" />
                    <div class="card-body">
                    <h5><a class="stretched-link text-decoration-none" href="research-single.html">Brigham Health Physicians Named 'Top Doctors'</a></h5>
                    <p class="mb-0">More than 275 Brigham Health physicians were included on Boston magazine's 2019 list of &quot;Top Doctors.” To prepare the annual list, Boston magazine partners with Castle Connolly Medical.</p>
                    </div>
                    <div class="card-footer"><a href="research-single.html">Learn More<span class="fa-chevron-right fas ml-1" data-fa-transform="shrink-4 down-1.5"></span></a></div>
                </div>
                </div>
                <div class="col-md-6 col-xxl-4 mb-4 mb-xxl-0">
                <div class="card h-100 hvr-shadow h-100"><img class="card-img-top" src="{{url('template/assets/img/blog/8.jpg')}}" alt="" />
                    <div class="card-body">
                    <h5><a class="stretched-link text-decoration-none" href="research-single.html">BWH Named to US News &amp; World Report's Honor Roll</a></h5>
                    <p class="mb-0">Brigham and Women's Hospital has ranked among the top 20 best hospitals in the nation on #[em US News and World Report's] US News and World Report's </p>
                    </div>
                    <div class="card-footer"><a href="research-single.html">Learn More<span class="fa-chevron-right fas ml-1" data-fa-transform="shrink-4 down-1.5"></span></a></div>
                </div>
                </div>
                <div class="col-xxl-4">
                <div class="card h-100">
                    <div class="card-header">
                    <h5 class="text-uppercase mb-0">Latest news</h5>
                    </div>
                    <div class="card-body">
                    <ul class="pl-3 mb-0">
                        <li><a class="nav-link text-primary pl-0" href="#!">Scientists create molecular tool to remove toxic protein from neuronal models of dementia</a></li>
                        <li><a class="nav-link text-primary pl-0" href="#!">Older women benefit significantly when screened with 3-D mammography</a></li>
                        <li><a class="nav-link text-primary pl-0" href="#!">Older women benefit significantly when screened with 3-D mammography</a></li>
                        <li><a class="nav-link text-primary pl-0" href="#!">Public announcement concerning a proposed health care project</a></li>
                    </ul>
                    </div>
                    <div class="card-footer position-relative"><a class="stretched-link" href="#!">View more news<span class="fa-chevron-right fas ml-1" data-fa-transform="shrink-4 down-1.5"></span></a></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="bg-holder overlay overlay-primary" style="background-image:url({{url('template/assets/img/blog/34.jpg')}});"></div>
        <div class="container">
            <div class="text-center mb-5" data-zanim-timeline="{&quot;delay&quot;:0.1}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                <h6 class="font-weight-bold text-white" data-zanim-xs='{"delay":0}'>All Centers</h6>
                </div>
                <div class="overflow-hidden">
                <h3 class="text-white text-uppercase" data-zanim-xs='{"delay":0.3}'>Centers of Excellence</h3>
                </div>
                <div class="overflow-hidden">
                <hr class="hr-short border-400" data-zanim-xs='{"from":{"width":0},"to":{"width":"4.2rem"},"delay":0.4,"duration":1.5}' />
                </div>
            </div>
            <div class="row text-uppercas">
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">Cancer Center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">Orthopedic center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">Heart and vascular center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">The lung center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">Neuroscience center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">Women Health Center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">Primary Care Center</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mb-4">
                <div class="link-card border border-2x border-white-25">
                    <h5 class="text-white fs-0 mb-0">All Departments &amp; services</h5><a class="text-white stretched-link link-card-arrow" href="#!"><span class="fas fa-chevron-right"></span></a>
                </div>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-4">
                <div class="col-lg-7">
                <p class="lead text-white mb-0">Although there is no magic formula for a long, healthy life, decades of research confirm certain behaviors improve your chances. After 43 years, The Nurses’ Health Study continues to find new insights for maintaining a healthy lifestyle.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center mb-5" data-zanim-timeline="{&quot;delay&quot;:0.1}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                <h6 class="font-weight-bold" data-zanim-xs='{"delay":0}'>RECENT POSTS</h6>
                </div>
                <div class="overflow-hidden">
                <h3 class="text-uppercase" data-zanim-xs='{"delay":0.3}'>From our blog</h3>
                </div>
                <div class="overflow-hidden">
                <hr class="hr-short border-600" data-zanim-xs='{"from":{"width":0},"to":{"width":"4.2rem"},"delay":0.4,"duration":1.5}' />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                <div class="row">
                    <div class="col-sm-5 mb-3 mb-sm-0"><a href="blog-single.html"><img class="img-fluid rounded" src="{{url('template/assets/img/blog/1.jpg')}}" alt="" /></a></div>
                    <div class="col pr-4">
                    <h5 class="mb-1"><a href="blog-single.html">Should You Be Worried About Microplastics in Your Food?</a></h5>
                    <p class="font-weight-semi-bold fs--1 mb-2"><a class="text-500 text-sans-serif" href="#!">John Doe</a><span class="fas fa-circle text-500 text-sans-serif" data-fa-transform="shrink-12"></span><a class="text-500 text-sans-serif" href="#!">10 Jan, 2019</a></p>
                    <p class="mb-0">Plastic — it's in the air, sea and probably your body. Find out what are microplastics doing to your health...</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-5">
                <div class="row">
                    <div class="col-sm-5 mb-3 mb-sm-0"><a href="blog-single.html"><img class="img-fluid rounded" src="{{url('template/assets/img/blog/12.jpg')}}" alt="" /></a></div>
                    <div class="col pr-4">
                    <h5 class="mb-1"><a href="blog-single.html">What to Expect During and After a Breast Biopsy</a></h5>
                    <p class="font-weight-semi-bold fs--1 mb-2"><a class="text-500 text-sans-serif" href="#!">Wiliam Petro</a><span class="fas fa-circle text-500 text-sans-serif" data-fa-transform="shrink-12"></span><a class="text-500 text-sans-serif" href="#!">03 Feb, 2019</a></p>
                    <p class="mb-0">We interview Dr Lim Siew Kuan, a general surgeon at Mount Elizabeth Novena Hospital, to understand what to...</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-5">
                <div class="row">
                    <div class="col-sm-5 mb-3 mb-sm-0"><a href="blog-single.html"><img class="img-fluid rounded" src="{{url('template/assets/img/blog/3.jpg')}}" alt="" /></a></div>
                    <div class="col pr-4">
                    <h5 class="mb-1"><a href="blog-single.html">How Heart Attack Signs Differ in Men &amp; Women</a></h5>
                    <p class="font-weight-semi-bold fs--1 mb-2"><a class="text-500 text-sans-serif" href="#!">Sultan Sentu</a><span class="fas fa-circle text-500 text-sans-serif" data-fa-transform="shrink-12"></span><a class="text-500 text-sans-serif" href="#!">05 Mar, 2019</a></p>
                    <p class="mb-0">Is there 'gender equality' in heart attacks? The short answer is no. Here's what you need to know...</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-5">
                <div class="row">
                    <div class="col-sm-5 mb-3 mb-sm-0"><a href="blog-single.html"><img class="img-fluid rounded" src="{{url('template/assets/img/blog/4.jpg')}}" alt="" /></a></div>
                    <div class="col pr-4">
                    <h5 class="mb-1"><a href="blog-single.html">Prenatal Infections and How to Avoid Them</a></h5>
                    <p class="font-weight-semi-bold fs--1 mb-2"><a class="text-500 text-sans-serif" href="#!">Marry Com</a><span class="fas fa-circle text-500 text-sans-serif" data-fa-transform="shrink-12"></span><a class="text-500 text-sans-serif" href="#!">29 Jun, 2019</a></p>
                    <p class="mb-0">Prenatal infections can interfere with the health of both you and your baby, so it's important to take steps to prevent them....</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="row">
                    <div class="col-sm-5 mb-3 mb-sm-0"><a href="blog-single.html"><img class="img-fluid rounded" src="{{url('template/assets/img/blog/5.jpg')}}" alt="" /></a></div>
                    <div class="col pr-4">
                    <h5 class="mb-1"><a href="blog-single.html">What are the Screening Options for Heart Disease?</a></h5>
                    <p class="font-weight-semi-bold fs--1 mb-2"><a class="text-500 text-sans-serif" href="#!">Illiana Daina</a><span class="fas fa-circle text-500 text-sans-serif" data-fa-transform="shrink-12"></span><a class="text-500 text-sans-serif" href="#!">29 Jun, 2019</a></p>
                    <p class="mb-0">We interview Dr Lim Siew Kuan, a general surgeon at Mount Elizabeth Novena Hospital, to understand what to expect...</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-5 mb-3 mb-sm-0"><a href="blog-single.html"><img class="img-fluid rounded" src="{{url('template/assets/img/blog/6.jpg')}}" alt="" /></a></div>
                    <div class="col pr-4">
                    <h5 class="mb-1"><a href="blog-single.html">Should You Be Worried About Microplastics?</a></h5>
                    <p class="font-weight-semi-bold fs--1 mb-2"><a class="text-500 text-sans-serif" href="#!">Tom Andrew</a><span class="fas fa-circle text-500 text-sans-serif" data-fa-transform="shrink-12"></span><a class="text-500 text-sans-serif" href="#!">29 Jun, 2019</a></p>
                    <p class="mb-0">Plastic — it's in the air, sea and probably your body. Find out what are microplastics doing to your health....</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0" data-zanim-timeline="{&quot;delay&quot;:0}" data-zanim-trigger="scroll">
        <div class="container">
        <div class="position-relative overflow-hidden border border-200 rounded bg-light px-sm-6 px-4 py-6 py-lg-8">
            <div class="bg-holder d-none d-lg-block" style="background-image:url({{url('template/assets/img/blog/13.jpg')}});background-position:right;background-size:50%;"></div>
            <!--/.bg-holder-->
            <div class="row">
            <div class="col-lg-6 pr-lg-6">
                <div class="overflow-md-hidden">
                <h3 data-zanim-xs='{"animation":"slide-right","delay":0.5}'>Life, Giving, Breakthroughs.</h3>
                <p class="lead" data-zanim-xs='{"animation":"slide-right","delay":0.6}'>We are inspired by our patients’ courage, our caregivers’ compassion, and our scientists’ curiosity—all fueled by our donors’ generosity.</p>
                <div data-zanim-xs='{"animation":"slide-right","delay":0.7}'><a class="btn btn-success btn-lg" href="#!">Give Now</a></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-primary py-4">
        <div class="container">
        <div class="row justify-content-center text-white">
            <div class="col-lg-4">
            <div class="media"><img class="img-fluid align-self-center" src="{{url('template/assets/img/icons/customer-service.png')}}" alt="" width="40" />
                <div class="media-body ml-3"><a class="text-white fs-1 font-weight-semi-bold mb-0" href="tel:12345678910">+(123) 456 78910</a>
                <p class="fs--1 mb-0">Have a question? call us now</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 mt-3 mt-lg-0">
            <div class="media"><img class="img-fluid align-self-center" src="{{url('template/assets/img/icons/mail-5.png')}}" alt="" width="50" />
                <div class="media-body ml-3"><a class="text-white fs-1 font-weight-semi-bold mb-0" href="mailto:help@medicare.com">help@medicare.com</a>
                <p class="fs--1 mb-0">Need support? Drop us an email</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 mt-3 mt-lg-0">
            <div class="media"><img class="img-fluid align-self-center" src="{{url('template/assets/img/icons/clock-2.png')}}" alt="" width="50" />
                <div class="media-body ml-3">
                <p class="lead font-weight-semi-bold mb-0">Mon – Sat 07:00 – 21:00</p>
                <p class="fs--1 mb-0">We are open on</p>
                </div>
            </div>
            </div>
        </div>
        </div><!-- end of .container-->
    </section>

    <section>
        <div class="container">
        <div class="row">
            <div class="col"><a class="d-block" href="index.html"><img src="{{url('template/assets/img/logo.png')}}" alt="" height="40" /></a>
            <h5 class="text-uppercase border-bottom mt-4 pb-2 mb-3 d-inline-block">brigham and women's hospital</h5>
            <p class="text-uppercase mb-1">75 francis street, boston ma 02115</p>
            <p class="mb-1">General information: <a href="#!">671-732-5500</a></p>
            <p class="mb-1">New Patients: <a href="#!">800-294-9999</a></p>
            </div>
            <div class="col-xl-8 mt-4 mt-xl-0">
            <div class="row">
                <div class="col-lg-3">
                <h5 class="fs-0 text-uppercase border-bottom pb-2 mb-3">Centers</h5>
                <div class="nav flex-column"><a class="text-600 py-1" href="#!">Cancer Center</a><a class="text-600 py-1" href="#!">Heart & Vascular Center</a><a class="text-600 py-1" href="#!">The Lung Center</a><a class="text-600 py-1" href="#!">Neurosciences Center</a><a class="text-600 py-1" href="#!">Orthopaedic & Arthritis Center</a><a class="text-600 py-1" href="#!">Primary Care Center</a><a class="text-600 py-1" href="#!">Women's Health Center</a></div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                <h5 class="fs-0 text-uppercase border-bottom pb-2 mb-3">Clinical Departments </h5>
                <div class="row no-gutters">
                    <div class="col">
                    <div class="nav flex-column"><a class="text-600 py-1" href="#!">Anesthesiology</a><a class="text-600 py-1" href="#!">Dermatology</a><a class="text-600 py-1" href="#!">Emergency Medicine</a><a class="text-600 py-1" href="#!">Medicine</a><a class="text-600 py-1" href="#!">Neurology</a></div>
                    </div>
                    <div class="col">
                    <div class="nav flex-column"><a class="text-600 py-1" href="#!">Neurosurgery</a><a class="text-600 py-1" href="#!">Orthopaedic Surgery</a><a class="text-600 py-1" href="#!">Obstetrics and Gynecology</a><a class="text-600 py-1" href="#!">Obstetrics and Gynecology</a></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                <h5 class="fs-0 text-uppercase border-bottom pb-2 mb-3">Departments </h5>
                <div class="nav flex-column"><a class="text-600 py-1" href="#!">Anesthesiology</a><a class="text-600 py-1" href="#!">Dermatology</a><a class="text-600 py-1" href="#!">Emergency Medicine</a><a class="text-600 py-1" href="#!">Medicine</a><a class="text-600 py-1" href="#!">Neurology</a><a class="text-600 py-1" href="#!">Neurosurgery</a><a class="text-600 py-1" href="#!">Orthopaedic Surgery</a><a class="text-600 py-1" href="#!">Obstetrics and Gynecology</a><a class="text-600 py-1" href="#!">Obstetrics and Gynecology</a></div>
                </div>
            </div>
            </div>
        </div>
        </div><!-- end of .container-->
    </section>
@endsection
