 <!-- Contact-->
 <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">تواصل معنا</h2>
                </div>
                
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="ادخل هنا الاسم كامل *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">الاسم حقل مطلوب</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="ادخل الايميل *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">الايميل حق مطلوب</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">الايميل غير صحيح</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="ادخل رقم الهاتف *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">رقم الهاتف حقل مطلوب</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="ادخل رسالتك هنا*" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">الرسالة حقل مطلوب</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">لم يتم ارسال رسالتك</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">ارسال الرسالة</button></div>
                </form>
            </div>
        </section>