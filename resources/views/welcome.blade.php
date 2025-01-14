@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Content Wrapper -->
    <div class="main-content justify-content-center px-1 mx-1 px-xl-5 mx-xl-5">

        <!-- Home Section -->
        <section id="home" class="py-5 bg-text" data-text="01" class="content-section fade-up">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-image text-center" data-aos="fade-right">
                        <img src="images/Aurel.png" alt="banner" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-content my-1 pt-1 my-lg-5 pt-lg-5" data-aos="fade-in">
                        <span class="text-muted text-uppercase">Undergraduate informatics student / Frontend</span>
                        <h1 class="banner-title display-xl lh-1 txt-fx slide-up">Aurelia D.P. Nata</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="icon-box" data-aos="fade-up">
                        <span>01</span>
                        <h3 class="sub-heading">UI/UX Design</h3>
                        <p>At in proin consequat ut cursus venenatis sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="icon-box" class="content-section fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h3 class="sub-heading">Frontend development</h3>
                        <p>At in proin consequat ut cursus venenatis sapien.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="my-5 py-5 bg-text" data-text="02" class="content-section fade-up">
            <div class="row d-flex flex-wrap" data-aos="fade-up">
                <div class="col-lg-6 pb-5">
                    <span class="text-muted text-uppercase">BIODATA</span>
                    <h2 class="display-4 txt-fx slide-up">Education</h2>
                    <div class="data-info py-3" data-aos="fade-up">
                        <span class="meta-date">2021 - 2023</span>
                        <h3 class="info-title">Majoring in Social Studies</h3>
                        <p>Alumni of Zion senior highschool in Makassar</p>
                    </div>
                    <div class="data-info" data-aos="fade-up" data-aos-delay="100">
                        <span class="meta-date">2024 - until now</span>
                        <h3 class="info-title">3rd Diploma majoring in Informatics</h3>
                        <p>Ciputra University in Makassar</p>
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h2 class="display-4 txt-fx slide-up">Experiences</h2>
                    <div class="data-info py-3" data-aos="fade-up" data-aos-delay="200">
                        <span class="meta-date">2024</span>
                        <h3 class="info-title">Belajar Application</h3>
                        <p>iacentem substantiales um se sed esse haec Possit facis qui a a a patriam.</p>
                    </div>
                    <div class="data-info" data-aos="fade-up" data-aos-delay="300">
                        <span class="meta-date">2024</span>
                        <h3 class="info-title">NPLC UC Makassar Web</h3>
                        <p>iacentem substantiales um se sed esse haec Possit facis qui a a a patriam.</p>
                    </div>
                    <div class="data-info" data-aos="fade-up" data-aos-delay="300">
                        <span class="meta-date">2025</span>
                        <h3 class="info-title">NaikPete Application</h3>
                        <p>iacentem substantiales um se sed esse haec Possit facis qui a a a patriam.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="my-5 py-5 bg-text" data-text="03" class="content-section fade-up">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <span class="text-muted text-uppercase">Introduction</span>
                    <h2 class="display-1 txt-fx slide-up">About me </h2>
                    <p>Labore accusam in modo compungi, iacentem substantiales um se sed esse haec.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-element py-4" class="content-section fade-up">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Age</th>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <th>Residence</th>
                                    <td>Indonesia</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td><a href="#">nataaureliadavineputri@gmail.com</a></td>
                                </tr>
                                <tr class="no-border-bottom">
                                    <th>Phone</th>
                                    <td>+62 813 4249 6226</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skill" class="my-5 py-5 bg-text" data-text="04" class="content-section fade-up">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <span class="text-muted text-uppercase">Introduction</span>
                    <h2 class="display-1 txt-fx slide-up">My skills</h2>
                    <p>Labore accusam in modo compungi, iacentem substantiales um se sed esse haec.</p>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <ul class="skill-chart-list list-unstyled">
                    <li class="skill-item">
                        <div class="d-flex justify-content-between">
                            <span class="skill-title">Adobe Express</span>
                            <span class="percentage">30%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress thirty-percent"></div>
                        </div>
                    </li>
                    <li class="skill-item">
                        <div class="d-flex justify-content-between">
                            <span class="skill-title">Figma</span>
                            <span class="percentage">90%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress ninety-percent"></div>
                        </div>
                    </li>
                    <li class="skill-item">
                        <div class="d-flex justify-content-between">
                            <span class="skill-title">Canva</span>
                            <span class="percentage">70%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress seventy-percent"></div>
                        </div>
                    </li>
                    <li class="skill-item">
                        <div class="d-flex justify-content-between">
                            <span class="skill-title">Html/CSS</span>
                            <span class="percentage">95%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress ninety-five-percent"></div>
                        </div>
                    </li>
                    <li class="skill-item">
                        <div class="d-flex justify-content-between">
                            <span class="skill-title">Flutter</span>
                            <span class="percentage">30%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress thirty-percent"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

        <script src="script.js"></script>
    </div> <!-- End Content Wrapper -->
@endsection
