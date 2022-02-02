@extends('layouts.homeLayout')
@section('content')


<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="front/home/images/danabout.jpg" style="background-position: 50% 62px;">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white text-center">@lang('contact_us')</h2>
                        <ol class="breadcrumb text-left text-black mt-10">

                            <li class="active text-gray-silver">IBEX Vlog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
 @livewire('contact-us')

    <!-- Divider: Google Map -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.610683662543!2d38.74445625026807!3d9.007923591767458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85d0181f146d%3A0xbe3dcdd55e6fe2c6!2sKKare%20Building!5e0!3m2!1sen!2set!4v1602516551244!5m2!1sen!2set"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>

    <!-- end main-content -->


    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 12225951;;
        (function (n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function () {
                    i(["on", c.call(arguments)])
                },
                once: function () {
                    i(["once", c.call(arguments)])
                },
                off: function () {
                    i(["off", c.call(arguments)])
                },
                get: function () {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function () {
                    i(["call", c.call(arguments)])
                },
                init: function () {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src =
                        "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))

    </script>
    <noscript><a href="https://www.livechatinc.com/chat-with/12225951/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->





 

</div>

@endsection
