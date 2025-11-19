     @extends('client.layout.master')
     @section('page_title', "Process")
     @section('content')

     <!--Page Title-->
     @php
     use App\Models\Translation;
     $locale = app()->getLocale();
     $process = \App\Models\Process::first();
     @endphp

     <section class="page-title">
         <div class="background-layers">
             <div class="cws-image-bg" style="background-image: url(images/background/37.jpg)">
                 <div class="cws-overlay-bg"></div>
             </div>
         </div>

         <div class="auto-container">

             <h1>{{ Translation::getValue('page_process_title', $locale) }}</h1>

             <ul class="page-breadcrumb">
                 <li>
                     <a href="{{ route('home') }}">
                         {{ Translation::getValue('breadcrumb_home', $locale) }}
                     </a>
                 </li>
                 <li>
                     {{ Translation::getValue('breadcrumb_process', $locale) }}
                 </li>
             </ul>

         </div>
     </section>

     <!--End Page Title-->

     <!-- About Process -->
    <section class="about-process">

         <div class="auto-container">

             <div class="sec-title">
                 <h2>{{ $process->getTranslation('title') }}</h2>

                 <div class="text">
                    {{ $process->getTranslation('description') }}
                </div>
             </div>

             <div class="step-btn">
                 <a class="scroll-to-target" data-target="#step-1">
                     <span class="step-text">
                         {{ Translation::getValue('process_explore', $locale) }}
                     </span>
                     <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
                 </a>
             </div>

         </div>

    </section>
     <!-- End About Process -->

     <!-- Step Section -->
     @foreach($steps as $step)

      @if($step->layout === 'left-image')
        <section class="step-section" id="step-{{ $step->step_number }}">

            <!-- BACKGROUND -->
            <div class="background-layers">
                <div class="cws-triangle-overlay top-left"></div>
                <div class="cws-image-bg" style="background-image: url(images/background/38.jpg)">
                    <div class="cws-overlay-bg"></div>
                    <div class="cws-triangle-overlay"></div>
                </div>
                <div class="cws-triangle-overlay bottom-left"></div>
                <div class="cws-triangle-overlay bottom-right"></div>
            </div>

            <div class="auto-container">
                <div class="row">

                    <!-- IMAGE LEFT -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <figure class="image">
                                <img src="{{ asset('storage/'.$step->image) }}" alt="">
                            </figure>
                        </div>
                    </div>

                    <!-- TEXT RIGHT -->
                    <div class="content-column col-lg-5 col-md-12 col-sm-12 offset-1">
                        <div class="inner-column">
                            <h2>{{ $step->getTranslation('title') }}</h2>

                            <p>{{ $step->getTranslation('description') }}</p>

                            @if($step->button_text_az)
                                <a href="{{ $step->button_link }}" class="theme-btn btn-style-one large">
                                    {{ $step->getTranslation('button_text') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            <!-- STEP BUTTON -->
            <div class="step-btn">
                <a class="scroll-to-target" data-target="#step-{{ $step->step_number + 1 }}">
                    <span class="step-background"></span>
                    <span class="step-text">STEP</span>
                    <span class="step-count">{{ $step->step_number }}</span>
                    <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
                </a>
            </div>

        </section>
        @else
        <section class="step-section-two" id="step-{{ $step->step_number }}">

            <div class="auto-container">
                <div class="row">

                    <!-- TEXT LEFT -->
                    <div class="content-column col-lg-5 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <h2>{{ $step->getTranslation('title') }}</h2>

                            <p>{{ $step->getTranslation('description') }}</p>

                            @if($step->button_text_az)
                                <a href="{{ $step->button_link }}" class="theme-btn btn-style-one large">
                                    {{ $step->getTranslation('button_text') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- IMAGE RIGHT -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12 offset-1">
                        <div class="inner-column">
                            <figure class="image">
                                <img src="{{ asset('storage/'.$step->image) }}" alt="">
                            </figure>
                        </div>
                    </div>

                </div>
            </div>

            <!-- STEP BUTTON (LIGHT VERSION) -->
            <div class="step-btn light">
                <a class="scroll-to-target" data-target="#step-{{ $step->step_number + 1 }}">
                    <span class="step-background"></span>
                    <span class="step-text">STEP</span>
                    <span class="step-count">{{ $step->step_number }}</span>
                    <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
                </a>
            </div>

        </section>
        @endif


    @endforeach

     <!-- End Step Section -->


    <!-- Reservation Section -->
    <section class="callback-section">
        <div class="cws-background-image" style="background-image: url('{{ asset('assets/images/background/5.png') }}')"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    
                    {{-- PAGE TITLE & SHORT DESCRIPTION (ADMIN PANELDƏN GƏLƏ BİLƏR) --}}
                    <div class="sec-title">
                        <h3>{{ Translation::getValue('contact_title_request', $locale) }}</h3>
                        <div class="text">
                            {{ Translation::getValue('contact_description_request', $locale) }}
                        </div>
                    </div>

                    <div class="default-form callback-form">

                        {{-- SUCCESS MESSAGE --}}
                        @if(session('success'))
                            <div class="alert alert-success mb-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" id="email-form">
                            @csrf

                            <div class="form-group">
                                <label>Your Name (required)</label>
                                <input type="text" name="username" class="username" required>
                                @error('username')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Email (required)</label>
                                <input type="email" name="email" class="email" required>
                                @error('email')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="contact_message"></textarea>
                                @error('contact_message')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-three" type="submit" id="submit" name="submit-form">
                                    {{ Translation::getValue('contact_button_text', $locale) }}
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

     <!--End Reservation Section -->

     @endsection