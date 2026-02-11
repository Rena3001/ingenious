@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp


<section class="callback-section">
    <div class="cws-background-image"
        style="background-image: url('{{ asset('storage/' . $settings->contact_background_image) }}')"></div>

    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">

                <!-- Section Title -->
                <div class="sec-title">
                    <h3>{{ Translation::getValue('callback_title', $locale) }}</h3>
                    <div class="text">
                        {{ Translation::getValue('callback_description', $locale) }}
                    </div>
                </div>

                <!-- Callback / Contact Form -->
                <div class="default-form callback-form">

                    <form action="{{ route('contact.submit', ['locale' => $locale]) }}" method="POST">

                        @csrf

                        <div class="form-group mb-0">
                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                        </div>

                        {{-- Full Name --}}
                        <div class="form-group">
                            <label>{{ Translation::getValue('contact_name', $locale) }}</label>
                            <input type="text" name="username" required> 
                            @error('username')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Entity Type --}}
                        <div class="form-group">
                            <label>{{ Translation::getValue('contact_entity_type', $locale) }}</label>
                            <select name="entity_type" required>
                                <option value="">{{ Translation::getValue('contact_select', $locale) }}</option>
                                <option value="company">{{ Translation::getValue('entity_company', $locale) }}</option>
                                <option value="individual">{{ Translation::getValue('entity_individual', $locale) }}</option>
                                <option value="legal_entity">{{ Translation::getValue('entity_legal_entity', $locale) }}</option>
                            </select> 
                            @error('entity_type')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label>{{ Translation::getValue('contact_email', $locale) }}</label>
                            <input type="email" name="email" required>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div class="form-group">
                            <label>{{ Translation::getValue('contact_phone', $locale) }}</label>
                            <input type="text" name="phone">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div class="form-group">
                            <label>{{ Translation::getValue('contact_message', $locale) }}</label>
                            <textarea name="message" required></textarea>
                            @error('message')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="form-group">
                            <button class="theme-btn btn-style-three" type="submit">
                                {{ Translation::getValue('contact_button_text', $locale) }}
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</section>