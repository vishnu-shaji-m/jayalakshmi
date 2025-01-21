<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="{{ Nav::isRoute('dashboard.index', 'mm-active') }}">
                    <a href="{{ route('dashboard.index') }}" class="{{ Nav::isRoute('dashboard.index') }}">
                        <i data-feather="grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li
                    class="{{ Nav::isResource('career-enquiries', null, 'mm-active') }}{{ Nav::isResource('contact-enquiries', null, 'mm-active') }}">
                    <a href="javascript: void(0);"
                        class="has-arrow {{ Nav::isResource('career-enquiries', null, 'mm-active') }}{{ Nav::isResource('contact-enquiries', null, 'mm-active') }}">
                        <i data-feather='help-circle'></i>
                        <span>Enquiries</span>
                    </a>
                    <ul class="sub-menu {{ Nav::isResource('career-enquiries', null, 'mm-show') }}{{ Nav::isResource('contact-enquiries', null, 'mm-show') }}"
                        aria-expanded="false">
                        <li class="{{ Nav::isResource('career-enquiries', null, 'mm-active') }}">
                            <a href="{{ route('career-enquiries.index') }}"
                                class="{{ Nav::isResource('career-enquiries') }}">
                                <span>Career</span>
                            </a>
                        </li>
                        <li class="{{ Nav::isResource('contact-enquiries', null, 'mm-active') }}">
                            <a href="{{ route('contact-enquiries.index') }}"
                                class="{{ Nav::isResource('contact-enquiries') }}">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="{{ Nav::isResource('sliders', null, 'mm-active') }}{{ Nav::isRoute('home-about.edit', 'mm-active') }}{{ Nav::isResource('home-features', null, 'mm-active') }}">
                    <a href="javascript: void(0);"
                        class="has-arrow {{ Nav::isResource('sliders', null, 'mm-active') }}{{ Nav::isRoute('home-about.edit', 'mm-active') }}{{ Nav::isResource('home-features', null, 'mm-active') }}">
                        <i data-feather="home"></i>
                        <span>Home</span>
                    </a>
                    <ul class="sub-menu {{ Nav::isResource('sliders', null, 'mm-show') }}{{ Nav::isRoute('home-about.edit', 'mm-show') }}{{ Nav::isResource('home-features', null, 'mm-show') }}"
                        aria-expanded="false">
                        <li class="{{ Nav::isResource('sliders', null, 'mm-active') }}">
                            <a href="{{ route('sliders.index') }}" class="{{ Nav::isResource('sliders') }}">
                                Sliders
                            </a>
                        </li>
                        <li class="{{ Nav::isRoute('home-about.edit', 'mm-active') }}">
                            <a href="{{ route('home-about.edit') }}" class="{{ Nav::isRoute('home-about.edit') }}">
                                About
                            </a>
                        </li>
                        <li class="{{ Nav::isResource('home-features', null, 'mm-active') }}">
                            <a href="{{ route('home-features.index') }}"
                                class="{{ Nav::isResource('home-features') }}">
                                Features
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{ Nav::isResource('faq', null, 'mm-active') }}">
                    <a href="{{ route('faq.index') }}" class="{{ Nav::isResource('faq') }}">
                        <i data-feather="message-circle"></i>
                        <span>Faq</span>
                    </a>
                </li>

                {{-- <li
                    class="{{ Nav::isResource('careers', null, 'mm-active') }}{{ Nav::isResource('job-types', null, 'mm-active') }}">
                    <a href="javascript: void(0);"
                        class="has-arrow {{ Nav::isResource('careers', null, 'mm-active') }}{{ Nav::isResource('job-types', null, 'mm-active') }}">
                        <i data-feather='briefcase'></i>
                        <span>Careers</span>
                    </a>
                    <ul class="sub-menu {{ Nav::isResource('careers', null, 'mm-show') }}{{ Nav::isResource('job-types', null, 'mm-show') }}"
                        aria-expanded="false">
                        <li class="{{ Nav::isResource('job-types', null, 'mm-active') }}">
                            <a href="javascript: void(0);"
                                class="has-arrow {{ Nav::isResource('job-types', null, 'mm-active') }}">
                                Masters
                            </a>
                            <ul class="sub-menu {{ Nav::isResource('job-types', null, 'mm-show') }}"
                                aria-expanded="true">
                                <li class="{{ Nav::isResource('job-types', null, 'mm-active') }}">
                                    <a href="{{ route('job-types.index') }}"
                                        class="{{ Nav::isResource('job-types') }}">
                                        <span>Job Types</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Nav::isResource('careers', null, 'mm-active') }}">
                            <a href="{{ route('careers.index') }}" class="{{ Nav::isResource('careers') }}">
                                <span>Careers</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <li class="{{ Nav::isResource('careers', null, 'mm-active') }}">
                    <a href="{{ route('careers.index') }}" class="{{ Nav::isResource('careers') }}">
                        <i data-feather="briefcase"></i>
                        <span>Careers</span>
                    </a>
                </li>

                <li class="{{ Nav::isResource('blogs', null, 'mm-active') }}">
                    <a href="{{ route('blogs.index') }}" class="{{ Nav::isResource('blogs') }}">
                        <i data-feather="edit-3"></i>
                        <span>Blogs</span>
                    </a>
                </li>

                <li class="{{ Nav::isResource('banner-and-meta-tags', null, 'mm-active') }}">
                    <a href="{{ route('banner-and-meta-tags.index') }}"
                        class="{{ Nav::isResource('banner-and-meta-tags') }}">
                        <i data-feather="code"></i>
                        <span>Banner And Meta Tags</span>
                    </a>
                </li>

                <li class="{{ Nav::isRoute('site-settings.edit', 'mm-active') }}">
                    <a href="{{ route('site-settings.edit') }}" class="{{ Nav::isRoute('site-settings.edit') }}">
                        <i data-feather="layout"></i>
                        <span>Site Settings</span>
                    </a>
                </li>

                <li class="{{ Nav::isResource('policies', null, 'mm-active') }}">
                    <a href="{{ route('policies.index') }}" class="{{ Nav::isResource('policies') }}">
                        <i data-feather="file-text"></i>
                        <span>Policies</span>
                    </a>
                </li>

                <li
                    class="{{ Nav::isResource('countries', null, 'mm-active') }}{{ Nav::isResource('states', null, 'mm-active') }}{{ Nav::isResource('cities', null, 'mm-active') }}">
                    <a href="javascript: void(0);"
                        class="has-arrow {{ Nav::isResource('countries', null, 'mm-active') }}{{ Nav::isResource('states', null, 'mm-active') }}{{ Nav::isResource('cities', null, 'mm-active') }}">
                        <i data-feather="map"></i>
                        <span>Locations</span>
                    </a>
                    <ul class="sub-menu {{ Nav::isResource('countries', null, 'mm-show') }}{{ Nav::isResource('states', null, 'mm-show') }}{{ Nav::isResource('cities', null, 'mm-show') }}"
                        aria-expanded="false">
                        <li class="{{ Nav::isResource('countries', null, 'mm-active') }}">
                            <a href="{{ route('countries.index') }}" class="{{ Nav::isResource('countries') }}">
                                Countries
                            </a>
                        </li>
                        <li class="{{ Nav::isResource('states', null, 'mm-active') }}">
                            <a href="{{ route('states.index') }}" class="{{ Nav::isResource('states') }}">
                                States
                            </a>
                        </li>
                        <li class="{{ Nav::isResource('cities', null, 'mm-active') }}">
                            <a href="{{ route('cities.index') }}" class="{{ Nav::isResource('cities') }}">
                                Cities
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
