@extends('home.base')
@section('content')
@push('css')
    <link rel='stylesheet' id='cs/css-css' href='{{ asset('home/wp-content/themes/public/dist/styles/about-us_4145c2c7.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='cs/cssa-defer-css' defer href='{{ asset('home/wp-content/themes/public/dist/styles/about-us-async_4145c2c7.css')}}' type='text/css' media='print' />
    <noscript><link rel='stylesheet' id='cs/cssa-defer-css' href='{{ asset('home/wp-content/themes/public/dist/styles/about-us-async_4145c2c7.css')}}' type='text/css' media='all' />
@endpush
    <main class="main main-about-us">

        <section
            class="about_masthead"
        >
            <div class="container">
                <div class="span-title">
                    <h5 class="pill">About us </h5>
                    <h1 class="h3">We’re creating technology that makes building a multi-asset portfolio fast, secure, and frictionless.</h1>
                </div>

                <div class="span-media">
                    <span class="video-wrap lazy" data-src="{{ asset('home/wp-content/uploads/2023/10/about-hero-poster-1024x238.png')}}" > <video loop lazy muted poster="{{ asset('home/wp-content/uploads/2023/10/about-hero-poster-1024x238.png')}}" autoplay playsinline width="844" height="240" data-vidsm-src="https://public.com/wp-content/uploads/2023/10/about-hero.mp4" data-vidsm-mime="video/mp4" data-vidmd-src="https://public.com/wp-content/uploads/2023/10/about-hero.mp4" data-vidmd-mime="video/mp4" class="autoplay lazy" > </video></span>        </div>
            </div>
        </section><section class="about_highlights about_highlights--rev">
            <div class="container">
                <div class="about_highlights__grid">
                    <div class="span-title">
                        <h2 class="h3">All of your investing. <br />
                            All in one place.</h2>
                        <div>In 2019, we launched Public, an investing platform with a mission to make the Payfieldd markets work for all people. We started by introducing the world to fractional investing. Then, we set our sights on creating a new kind of multi-asset investing experience.<br />
                            <br />
                            Today, you can build and diversify your Payfieldd portfolio with stocks, Treasuries, ETFs, crypto, and alternative assets—with even more investment opportunities coming soon. At every step, you get the tools, data, and AI-powered insights you need to make informed investment decisions. </div>
                    </div>
                    <div></div>
                    <div class="span-media">
                        <span class="video-wrap lazy" data-src="{{ asset('home/wp-content/uploads/2023/10/about-app-poster-1024x1024.jpg')}}" > <video loop lazy muted poster="{{ asset('home/wp-content/uploads/2023/10/about-app-poster-1024x1024.jpg')}}" autoplay playsinline width="1080" height="1080" data-vidsm-src="https://public.com/wp-content/uploads/2023/10/about-app.mp4" data-vidsm-mime="video/mp4" data-vidmd-src="https://public.com/wp-content/uploads/2023/10/about-app.mp4" data-vidmd-mime="video/mp4" class="autoplay lazy" > </video></span>            </div>
                </div>
            </div>
        </section><section class="about_timeline">
            <div class="container">
                <h2 class="about_timeline__title">Payfieldd over the years</h2>

                <div class="about_timeline_items swiper">
                    <div class="about_timeline_items_wrapper swiper-wrapper">
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Sept</em> 2019                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Fractional Investing</h4>
                                    <div>In 2019, we launched Payfieldd and became the first broker-dealer to introduce commission-free, real-time fractional investing. Our mission is to make the payfieldd markets work for all people.<br />
                                    </div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-01-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 01" decoding="async" fetchpriority="high" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-01-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-01-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-01-1024x704.png')}} 1024w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-01.png')}} 1230w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Oct</em> 2019                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Community</h4>
                                    <div>In 2019, we were the first investing platform to introduce and nurture a community of investors, creators, and analysts. Today, our vibrant community comprises millions of Payfieldd members sharing ideas, insights, and investment opportunities.<br />
                                    </div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-02-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 02" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-02-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-02-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-02-1024x704.png')}} 1024w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-02.png')}} 1230w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Mar</em> 2020                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Safety Labels</h4>
                                    <div>In 2020, we introduced safety labels to individual securities with varying degrees of risk. This decision marked a clear commitment to helping our members invest with context—a principle that continues to underpin the work we do today.<br />
                                    </div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-03-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 03" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-03-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-03-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-03.png')}} 820w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Feb</em> 2021                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Exit PFOF</h4>
                                    <div>In 2021, we took a stand and stopped accepting payment for order flow (PFOF) on equities trades as a revenue source. This decision not only aligned our interests with our customers, it enabled us to seek to execute orders at the best possible price.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-04-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 04" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-04-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-04-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-04.png')}} 820w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Mar</em> 2021                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Crypto</h4>
                                    <div>In 2021, we were one of the first brokerages to expand our investment offerings with crypto. This allowed Public members to trade in a broad range of crypto assets, including Bitcoin and Ether, alongside thousands of stocks and ETFs.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-05-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 05" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-05-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-05-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-05-1024x704.png')}} 1024w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-05.png')}} 1230w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>June</em> 2022                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Payfieldd Premium</h4>
                                    <div>In 2022, we further enhanced our suite of investing tools by incorporating deeper fundamental data and analyst insights. With Public Premium membership, members can access detailed performance metrics, institutional grade research, and more.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-07-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 07" decoding="async" srcset="/{{ asset('home/wp-content/uploads/2023/10/about-portfolio-07-768x528.png')}} 768w, /{{ asset('home/wp-content/uploads/2023/10/about-portfolio-07-300x206.png')}} 300w, /{{ asset('home/wp-content/uploads/2023/10/about-portfolio-07.png')}} 820w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Sept</em> 2022                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Alts</h4>
                                    <div>In 2022, we acquired investing platform Otis and expanded our offering to include alternative assets. Today, Public members can build and diversify their portfolios with fractional shares of fine art and collectibles, with even more investment opportunities coming soon.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-08-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 08" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-08-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-08-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-08.png')}} 820w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Mar</em> 2023                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Treasuries</h4>
                                    <div>In 2023, we introduced a new way for investors to access the secure yield of US Treasury bills. Today, Payfieldd automatically reinvests Treasury bills at maturity and members can access their funds at any time.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-09-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 09" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-09-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-09-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-09-1024x704.png')}} 1024w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-09.png')}} 1230w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>May</em> 2023                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Alpha</h4>
                                    <div>In 2023, we brought artificial intelligence into our investing experience with the launch of Alpha: a research assistant powered by OpenAI’s GPT-4. Now, Public members can ask Alpha any question about any asset to access real-time and historical market data.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-10-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 10" decoding="async" srcset="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-10-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-10-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2023/10/about-portfolio-10.png')}} 820w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    <em>Sept</em> 2023                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Music Royalties</h4>
                                    <div>In 2023, we introduced yet another new asset class to Public: music royalties. Public members can now generate passive income with fractional shares of hit songs—an asset class typically uncorrelated with traditional markets.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2023/10/about-portfolio-12-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="About Portfolio 12" decoding="async" srcset="/{{ asset('home/wp-content/uploads/2023/10/about-portfolio-12-768x528.png')}} 768w, /{{ asset('home/wp-content/uploads/2023/10/about-portfolio-12-300x206.png')}} 300w, /{{ asset('home/wp-content/uploads/2023/10/about-portfolio-12.png')}} 820w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    2023                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Bonds</h4>
                                    <div>In 2023, we took everything you think you know about fixed income and fixed it. Now, you can find, evaluate, and buy thousands of corporate, Treasury, and municipal bonds with an investing experience designed this century.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2024/01/timeline-bonds-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="Timeline Bonds" decoding="async" srcset="/{{ asset('home/wp-content/uploads/2024/01/timeline-bonds-768x528.png')}} 768w, /{{ asset('home/wp-content/uploads/2024/01/timeline-bonds-300x206.png')}} 300w, /{{ asset('home/wp-content/uploads/2024/01/timeline-bonds.png')}} 856w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    2023                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">High-yield cash account</h4>
                                    <div>In 2023, we introduced a new way to grow your savings with an industry-leading 5.1% APY high-yield cash account. There are no fees, subscriptions, or balance requirements. Plus, you get 20 times the standard FDIC insurance coverage.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2024/01/timeline-hyca-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="Timeline Hyca" decoding="async" srcset="{{ asset('home/wp-content/uploads/2024/01/timeline-hyca-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2024/01/timeline-hyca-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2024/01/timeline-hyca.png')}} 856w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                        <div class="about_timeline_item swiper-slide">
                            <div class="about_timeline_item_label">
                                                                <span>
                                    2024                                </span>
                            </div>
                            <div class="about_timeline_item_text">
                                <h3 class="h4">Options trading</h4>
                                    <div>In 2024, we launched options trading, and with it, we announced that we would share 50% of our options revenue directly with customers. This industry-first means that Public members can earn $0.18 on every single options contract they trade.</div>
                            </div>
                            <div class="about_timeline_item_media">
                                <img width="768" height="528" src="{{ asset('home/wp-content/uploads/2024/02/timeline-options-768x528.png')}}" class="attachment-medium_large size-medium_large" alt="Timeline Options" decoding="async" srcset="{{ asset('home/wp-content/uploads/2024/02/timeline-options-768x528.png')}} 768w, {{ asset('home/wp-content/uploads/2024/02/timeline-options-300x206.png')}} 300w, {{ asset('home/wp-content/uploads/2024/02/timeline-options.png')}} 856w" sizes="(max-width: 768px) 100vw, 768px" />                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about_timeline__chrono">
                <div class="about_timeline__chrono_wrapper">
                    <a href="#" class="active">
                        <span class="label">Fractional Investing</span>
                        <span>
                            <span class="year">Sept 2019</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Community</span>
                        <span>
                            <span class="year">Oct 2019</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Safety Labels</span>
                        <span>
                            <span class="year">Mar 2020</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Exit PFOF</span>
                        <span>
                            <span class="year">Feb 2021</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Crypto</span>
                        <span>
                            <span class="year">Mar 2021</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Public Premium</span>
                        <span>
                            <span class="year">June 2022</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Alts</span>
                        <span>
                            <span class="year">Sept 2022</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Treasuries</span>
                        <span>
                            <span class="year">Mar 2023</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Alpha</span>
                        <span>
                            <span class="year">May 2023</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Music Royalties</span>
                        <span>
                            <span class="year">Sept 2023</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Bonds</span>
                        <span>
                            <span class="year">2023</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">HYCA</span>
                        <span>
                            <span class="year">2023</span>
                        </span>
                    </a>
                    <a href="#" class="">
                        <span class="label">Options</span>
                        <span>
                            <span class="year">2024</span>
                        </span>
                    </a>
                    <span class="about_timeline__chrono_line"></span>
                </div>
            </div>

            <div class="container container_nav">
                <nav class="about_timeline_nav">
                    <button class="about_timeline_prev">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.91627 8.76132L15.2167 8.76132L15.2167 7.2377L2.91756 7.23771L7.54267 2.61259L6.46531 1.53524L0.00116219 7.99939L0.00193419 8.00016L0.00116219 8.00093L6.46531 14.4651L7.54267 13.3877L2.91627 8.76132Z" fill="currentColor"/>
                        </svg>
                    </button>
                    <button class="about_timeline_next">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0622 7.23819L0.761807 7.23819L0.761807 8.76181L13.061 8.76181L8.43584 13.3869L9.5132 14.4643L15.9774 8.00013L15.9766 7.99936L15.9774 7.99858L9.5132 1.53443L8.43584 2.61179L13.0622 7.23819Z" fill="currentColor"/>
                        </svg>
                    </button>
                </nav>
            </div>
        </section>
        <section id="section-transparency" class="section-transparency">
            <div class="container">
                <div class="span-title">
                    <h2>Transparency is incredibly important to us</h2>
                    <p>Beyond ensuring you understand our incentives and what things cost, we believe in fostering greater transparency across the entire financial market.</p>
                </div>

                <div class="span-cards">

                    <div class="card">
                        <div class="inner">
                            <img src="{{ asset('home/wp-content/uploads/2024/01/icon-shield-3d.svg')}}" class="attachment-full size-full" alt="Icon Shield 3d" decoding="async" />		<h5 class="pill">Standard Equity Trades</h5>
                            <p>Unlike most brokerages, we don’t participate in payment for order flow on standard equities trades, enabling us to get you the best possible price.</p>
                            <a href="about-us.html" class="btn-plain">Learn more</a>	</div>
                    </div>
                    <div class="card">
                        <div class="inner">
                            <img src="{{ asset('home/wp-content/uploads/2024/01/icon-zoom.svg')}}" class="attachment-full size-full" alt="Icon Zoom" decoding="async" />		<h5 class="pill">Options Trading</h5>
                            <p>We share 50% of our options revenue with you. That means you know exactly how much we make from your trades—because we literally give you half of it.</p>
                            <a href="about-us.html" class="btn-plain">Learn more</a>	</div>
                    </div>		</div>
            </div>
        </section>
        <section class="about_investors">
            <div class="container">
                <div class="span-title">
                    <h5 class="pill">Our investors </h5>
                    <h2 class="h3">To date, we’ve raised <br />
                        over $300 million.</h2>
                </div>
                <div class="span-data">
                    <ul>
                        <li>
                            <a href="#" class="active" data-image="{{ asset('home/wp-content/uploads/2023/05/accel.svg')}}">
                                <span>Accel</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/05/lakestar.svg')}}">
                                <span>Lakestar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/Tiger_Global-300x43.png')}}">
                                <span>Tiger Global</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/sophia-amoruso-300x300.png')}}">
                                <span>Sophia Amoruso</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/scott-belsky-300x300.png')}}">
                                <span>Scott Belsky</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/chainsmokers-300x300.png')}}">
                                <span>The Chainsmokers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/scott-galloway-300x300.png')}}">
                                <span>Scott Galloway</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/tony-hawk-300x300.png')}}">
                                <span>Tony Hawk</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/caleb-mclaughli.png')}}">
                                <span>Caleb McLaughlin</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/casey-neistat-300x300.png')}}">
                                <span>Casey Neistat</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/dick-parsons-300x300.png')}}">
                                <span>Dick Parsons</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/shari-redstone-300x300.png')}}">
                                <span>Shari Redstone</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/zoe-saldanha.png')}}">
                                <span>Zoe Saldana</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/Rectangle-763-300x300.png')}}">
                                <span>Maria Sharapova</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/will-smith-300x300.png')}}">
                                <span>Will Smith</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-image="{{ asset('home/wp-content/uploads/2023/10/jj-watt-300x300.png')}}">
                                <span>J.J. Watt</span>
                            </a>
                        </li>
                    </ul>
                    <img src="{{ asset('home/wp-content/uploads/2023/05/accel.svg')}}" alt="Accel" class="preview" width="100%" height="100%" />
                </div>
            </div>
        </section><section class="about_features">
            <div class="container">
                <div class="span-title">
                    <h2 class="h3">Security comes first</h2>


                </div>
                <div class="span-data">
                    <div class="about_features__item">


                        <div class="about_features__item_content">
                            <h3>Invest on a secured platform</h3>
                            <div><p>We employ security with AES 256-bit encryption and TLS 1.2 (or newer). Two-Factor Authentication via SMS ensures you can only log in with a registered device.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about_features__item">


                        <div class="about_features__item_content">
                            <h3>Your securities and cash are protected</h3>
                            <div><p>Brokerage services for US-listed, registered securities are offered through Public Investing, Inc., a registered broker-dealer and member of FINRA &amp; SIPC. Securities in your account are protected up to $500,000.</p>
                                <h6>For details, please see <a href="http://www.sipc.org/" target="_blank" rel="noopener">www.sipc.org</a>.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="about_features__item">


                        <div class="about_features__item_content">
                            <h3>We are based in New York</h3>
                            <div><p>If you have questions about investing with Public, our US-based customer experience team has FINRA-licensed specialists standing by to help.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><section class="about_join_team">
            <div class="span-media">
                <span class="video-wrap lazy" data-src="{{ asset('home/wp-content/uploads/2023/10/about-careers-poster-1024x370.jpg')}}" > <video loop lazy muted poster="{{ asset('home/wp-content/uploads/2023/10/about-careers-poster-1024x370.jpg')}}" autoplay playsinline width="860" height="520" data-vidsm-src="https://public.com/wp-content/uploads/2023/10/about-careers.mp4" data-vidsm-mime="video/mp4" data-vidmd-src="https://public.com/wp-content/uploads/2023/10/about-careers.mp4" data-vidmd-mime="video/mp4" class="autoplay lazy" > </video></span>    </div>
            <div class="container">
                <div class="span-text">
                    <h2 class="h3">Want to help us make the payfieldd markets work for all people?</h2>
                    <a class="about_join_team__link" href="{{ route('register') }}" target="">
                        Join our team                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.08522 8.78648L2.56192 2.26318L1.75391 3.0712L8.27652 9.59381H3.37084L3.37084 10.7365L10.2271 10.7365L10.2271 10.7357H10.2279L10.2279 3.87944H9.08522L9.08522 8.78648Z" fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>

        </section>            </main>

        @push('js')
            <script data-categories="essential"type="text/javascript" src="{{asset('home/wp-content/themes/public/dist/scripts/about-us_4145c2c7.js')}}" id="cs/js-js"></script>
        @endpush

@endsection
