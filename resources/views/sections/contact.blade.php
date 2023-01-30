<div class="contact-form-section">
    <div class="contact-form-section-wrapper">
        <div class="container">
            <div class="row gx-5 contact-form-section-row">
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <!--
                    contact form - start
                    -->
                    <div class="contact-form drop-shadow-2">
                        <div class="contact-form-wrapper">
                            <div class="section-heading section-heading-2 center">
                                <div class="sub-heading c-green upper ls-1">
                                    <i class="las la-envelope"></i>
                                    <h5> ALOQA</h5>

                                </div>
                                <div class="main-heading c-dark">
                                    <h1>  Xabar yozish</h1>
                                </div>
                            </div>
                            <form action="{{route('attends')}}" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <input name="name" class="input form-control" id="name-field" type="text" placeholder="Full name">
                                    <label for="name-field"> To'liq isim sharif</label>
                                </div>
                                <div class="form-floating">
                                    <input name="phone" class="input form-control" id="email-field" type="text" placeholder="Email address">
                                    <label for="email-field"> Telefon raqam</label>
                                </div>
                                <div class="form-floating">
                                    <input name="message" class="input form-control" id="message-field" type="text" placeholder="Message">
                                    <label for="message-field">Xabar</label>
                                </div>
                                <button type="submit" class="button button-2">
                                    <span class="button-inner">
                                        <span class="button-content">
                                            <span class="text"> Yuborish</span>
                                        </span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--
                    contact form - end
                    -->
                </div>
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <!--
                    newsletter form - start
                    -->
                    <div class="contact-form contact-form-1 drop-shadow-2">
                        <div class="contact-form-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.2646153627106!2d71.59075941537394!3d40.99758107930178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb4b3a019f953d%3A0x568f5e30e2375ea!2sNamMTI%20BINOSI!5e0!3m2!1sru!2s!4v1660984413633!5m2!1sru!2s" width="450" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                    <!--
                    newsletter form - end
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
