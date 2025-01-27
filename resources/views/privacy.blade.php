@extends('layouts.app')
@section('title', 'legal')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}


<div id="pageWrapper" class="legalPage">

<div class="bg">
    <img src="{{asset('frontend/images/privacy-bg.webp')}}" alt="bg">
</div>
    <section id="Content">
        <div class="container">
            <div class="cntWrap">
                <h1>Privacy <span>Policy</span></h1>
                <div class="item">
                    <h2>Introduction</h2>
                    <p>
                        This Privacy Policy governs your access, use, and interaction with the services and websites
                        provided by Jayalakshmi Silks (referred to as "Jayalakshmi"). By creating a Jayalakshmi account,
                        accessing, visiting, or transacting through our services, you consent to the collection, use,
                        disclosure, and retention of your information as described herein. This Privacy Policy is a part
                        of
                        and governed by the Jayalakshmi Terms of Use.
                    </p>
                    <h2>Modifications to the Privacy Policy</h2>
                    <p>Jayalakshmi reserves the right to amend this Privacy Policy at any time. Notifications of changes
                        will be made by:</p>
                    <div class="contentBx">
                        <ol>
                            <li>
                                Posting the updated Privacy Policy on our website (www.jayalakshmisilks.com) at least 10
                                calendar days before the changes take effect.
                            </li>
                            <li>
                                Sending an email notification (if your email address is registered with us) at least 10
                                calendar
                                days prior to the effective date for significant changes.
                            </li>
                        </ol>
                    </div>
                    <p>
                        To ensure you receive such notifications, keep your contact details updated. If you disagree
                        with
                        any amendments, you may terminate your account within this 10-day period by contacting us.
                        Continued
                        use of our services after this period constitutes acceptance of the changes.
                    </p>
                </div>
                <div class="item">
                    <h2>
                        Information Collection Practices
                    </h2>
                    <ol>
                        <li>Information You Provide to Us
                            <p>
                                We collect information that you provide directly, including:
                            </p>
                            <ul>
                                <li>During registration (e.g., name, email, password, date of birth, address, and
                                    contact details).</li>
                                <li>When updating your user profile or preferences.</li>
                                <li>
                                    Through interactions, such as emails, forms, and customer service communications.
                                </li>
                                <li>
                                    When making transactions or engaging with our services.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Information Automatically Collected
                            <p>
                                We, along with our third-party partners, may automatically collect certain data, such
                                as:
                            </p>
                            <ul>
                                <li>Device information (e.g., type, operating system, and browser version).</li>
                                <li>Geo-location data and IP address.</li>
                                <li>Usage data, including page views, traffic sources, and web log details.</li>
                            </ul>
                        </li>
                        <li>
                            Cookies and Web Beacons
                            <p>
                                To enhance user experience, we use:
                            </p>
                            <ul>
                                <li>Cookies: Small files stored on your browser, which can be session-based (temporary)
                                    or persistent (remain after the session ends).</li>
                                <li>Flash Cookies: Data stored separately for functionality purposes.</li>
                                <li>Web Beacons: Embedded code for analytics and tracking purposes.</li>
                            </ul>
                            <p>
                                You can manage cookie preferences in your browser settings. To opt out of Google
                                Analytics, visit https://tools.google.com/dlpage/gaoptout.
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="item">
                    <h3>Use of Information</h3>
                    <p>
                        Jayalakshmi uses your information to:
                    </p>
                    <ul>
                        <li>Personalize and improve your user experience.</li>
                        <li>Facilitate transactions and manage customer relationships.</li>
                        <li>Analyze service performance and usability.</li>
                        <li>Detect and prevent fraudulent or unauthorized activities.</li>
                        <li>Communicate promotional and marketing content (where consent is provided).</li>
                        <li>Provide requested services and resolve disputes.</li>
                    </ul>
                </div>
                <div class="item">
                    <h3>Disclosure of Information</h3>
                    <ol>
                        <li>
                            Service Providers
                            <p>
                                We may share information with third-party providers who perform functions on our behalf,
                                such as payment processing, logistics, and customer support. These providers are bound
                                to protect your data.
                            </p>
                        </li>
                        <li>
                            Business Transactions
                            <p>
                                In case of mergers, acquisitions, or sales, your information may be transferred to the
                                relevant entities.
                            </p>
                        </li>
                        <li>
                            Affiliates
                            <p>
                                 Information may be shared with our affiliates and subsidiaries under similar privacy
                                terms.
                            </p>
                        </li>
                        <li>
                            Compliance and Legal Obligations
                            <p>
                                We may disclose information to comply with legal requirements, enforce terms of use, or
                                respond to lawful requests from authorities.
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="item">
                    <h3>
                        Security
                    </h3>
                    <p>
                        Jayalakshmi employs SSL encryption and other security measures to protect sensitive information
                        during data transmission and storage. While we strive to protect your information, no system is
                        entirely foolproof. We encourage users to safeguard their account details.
                    </p>
                </div>
                <div class="item">
                    <h3>
                        Accessing and Managing Your Information
                    </h3>
                    <ol>
                        <li>Updating Information
                            <p>
                                You can update your account details by logging in or contacting us at
                                online@jayalakshmi.in. To delete your account or data, send a request to the same email
                            </p>
                        </li>
                        <li>
                            Privacy Settings
                            <p>
                                For privacy-related inquiries, contact customercare@jayalakshmi.in
                            </p>
                        </li>
                        <li>
                            Email Preferences
                            <p>
                                Manage your email subscription preferences under the ‘Newsletter Subscription’ tab in
                                your account or use the unsubscribe link in emails.
                            </p>
                        </li>
                        <li>
                            Social Media Services
                            <p>
                                Interactions through third-party platforms (e.g., Google, Facebook) are subject to their
                                privacy policies. Adjust your privacy settings directly on these platforms.
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="item">
                    <h3>
                        Children Under 18
                    </h3>
                    <p>
                        Our services are not intended for minors under 18. We do not knowingly collect their
                        information. If we discover that data from a minor has been collected, it will be promptly
                        deleted. Concerns can be addressed to online@jayalakshmi.in.
                    </p>
                </div>
                <div class="item">
                    <h3>Data Retention</h3>
                    <p>
                        We retain data as long as necessary to provide services, comply with legal obligations, and
                        resolve disputes. Information from closed accounts may be retained for lawful purposes,
                        including fraud prevention.
                    </p>
                </div>
                <div class="item">
                    <h3>
                        Contact Us
                    </h3>
                    <p>
                        For any questions regarding this Privacy Policy, contact us at:
                    </p>
                    <ul>
                        <li><span>Customer Support Email:</span> customercare@jayalakshmi.in</li>
                        <li><span>Website Email: </span> online@jayalakshmi.in</li>
                    </ul>
                </div>
            </div>
    </section>


</div>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush