<div>
<section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0 mb-30">@lang('contact_us')</h3>

                    <!-- Contact Form -->
                    @if (Auth::check())
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>@lang('objective')<small>*</small></label>
                                    <input  wire:model.defer="objective" name="form_subject" class="form-control   @error('objective')error @enderror" type="text"
                                        placeholder="@lang('enter_objective')" aria-required="true">
                                        @error('objective') <span style="color:red">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            @else

                        <div class="row">
                          
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('name')<small>*</small></label>
                                    <input name="form_name" wire:model.defer="fullName" class="form-control   @error('fullName') error @enderror" type="text"
                                    
                                    placeholder="@lang('name')"
                                        required="" aria-required="true">
                                        @error('fullName') <span style="color:red">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('email') <small>*</small></label>
                                    <input wire:model.defer="email" name="form_email" class="form-control     @error('email')error @enderror" type="email"
                                        placeholder="@lang('enter_email')" aria-required="true">
                                        @error('email') <span style="color:red">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('objective')<small>*</small></label>
                                    <input  wire:model.defer="objective" name="form_subject" class="form-control   @error('objective')error @enderror" type="text"
                                        placeholder="@lang('enter_objective')" aria-required="true">
                                        @error('objective') <span style="color:red">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('phone_number')</label>
                                    <input wire:model.defer="phone_number" name="form_phone" class="form-control   @error('phone_number')error @enderror" type="text"
                                     placeholder="@lang('enter_phone_number')">
                                    @error('phone_number') <span style="color:red">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

 
                            @endif

                        <div class="form-group">
                            <label>@lang('comment') </label>
                            <textarea commect name="comment" wire:model.defer="comment" class="form-control @error('comment')error @enderror" rows="5" placeholder="@lang('enter_message')"
                                aria-required="true"></textarea>
                                @error('comment') <span style="color:red">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"

                               wire:click="addComment">@lang('send_comment')</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">
                               @lang('reset')</button>
                        </div>
                    

                    <!-- Contact Form Validation-->
                    <script type="text/javascript">
                        $("#contact_form").validate({
                            submitHandler: function (form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before(
                                    '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                    );
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function (data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function () {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });

                    </script>
                </div>
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0">ከእኛ ጋር ይገናኙ</h3>

                    <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                        <li><a href="#" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-bg-color="#4C75A3" style="background: rgb(76, 117, 163) !important;"><i
                                    class="fa fa-vk"></i></a></li>
                        <li><a href="#" data-bg-color="#D9CCB9" style="background: rgb(217, 204, 185) !important;"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="#" data-bg-color="#D71619" style="background: rgb(215, 22, 25) !important;"><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" data-bg-color="#A4CA39" style="background: rgb(164, 202, 57) !important;"><i
                                    class="fa fa-android"></i></a></li>
                        <li><a href="#" data-bg-color="#4C75A3" style="background: rgb(76, 117, 163) !important;"><i
                                    class="fa fa-vk"></i></a></li>
                    </ul>

                    <div class="icon-box media mb-0 pb-0"> <a class="media-left pull-left flip mr-20" href="#"> <i
                                class="pe-7s-map-2 text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">@lang('address')</h5>
                            <p>ሃያሁለት አውራሪስ አከባቢ ሰበያ ህንፃ 1 ፍሎር አዲስአባባ ኢትዮጵያ

                            </p>
                        </div>
                    </div>
                    <div class="icon-box media mb-0 pb-0 pt-0 mt-0"> <a class="media-left pull-left flip mr-15"
                            href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">@lang('phone_number')</h5>
                            <p><a href="tel:+325-12345-65478">+251910804901</a></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-0 pb-0 pt-0 mt-0"> <a class="media-left pull-left flip mr-15"
                            href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">@lang('email')</h5>
                            <p><a href="mailto:supporte@yourdomin.com">info@ibexvlog.com
                                </a></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
