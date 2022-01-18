<?php
session_start();

include("env/database.php");
include("env/constants.php");
include("env/functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo FRONT_SITE_NAME." - :: Privacy Policy ::"?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&amp;display=swap">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/footer.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/navigation.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick-theme.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick.css?h=<?php random()?>">
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/styles.css?h=<?php random()?>">
</head>

<body class="bg-white">
    
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="mt-5">
                <a href="<?php echo FRONT_SITE_PATH?>"><img src="<?php echo FRONT_SITE_PATH?>assets/img/logo.png" alt="" width="300"></a>
            </div>
                <div class="">
                    <div class="py-5 text-justify">
                    <h2>Privacy Policy</h2>
                    <p class="mt-3 mb-5 fst-italic"><small>Effective as of: 10/27/2021</small></p>
                    <p>Dynamic Tech Academy Limited (<b>“Company”</b>,<b>“We”</b> or <b>“Us”</b>) respect your privacy and is committed to protecting it through this Privacy Policy.</p>
                    <p>This Privacy Policy governs your access to and use of DynamicTechDMV including any content, functionality and services offered on or through <a href="https://DynamicTechDMV.com/">https://DynamicTechDMV.com</a> (the <b>“Website”</b>), whether as a guest or a registered user.</p>
                    <p>When accessing the Website, the Company will learn certain information about you, both automatically and through voluntary actions you may take, during your visit. This policy applies to information we collect on the Website and in email, text, or other electronic messages between you and the Website.</p>
                    <p>Please read the Privacy Policy carefully before you start to use the Website. <b>By using the Website or by clicking to accept or agree to the Terms of Use when this option is made available to you, you accept and agree to be bound and abide by the Privacy Policy.</b> If you do not want to agree to the Privacy Policy, you must not access or use the Website.</p>
                    <hr class="hr-light">
                    <h5>Personal Identifiable Information</h5>
                    <p>We may collect the following personal information from you in the following situations</p>
                    <ul class="round-list">
                        <li>When you visit our website or mobile apps and voluntarily provide the following information via one of our contact forms, via a chat or phone session, or as part of a purchase of one of our courses or register on our site</li>
                        <li>Contact Information, such as name, email address, mailing address, phone number, IP</li>
                        <li>Information about your business, such as company name, company size, business type</li>
                        <li>Billing Information, such as credit card number and billing address</li>
                    </ul>
                    <p>Note : All payment transactions are processed through secure payment gateway providers. We do not store any card information (other than the last 4 digits of your card) in our servers.</p>
                    <ul class="round-list">
                        <li>When you use our Learning Management System, mobile applications, our support system or respond to our surveys</li>
                        <li>Contact Information, such as name, email address, mailing address, IP address, geographic location, or phone number</li>
                        <li>Unique Identifiers, such as username, or password</li>
                        <li>Name and e-mail address when you provide feedback from the Service(s)</li>
                        <li>When you use our community website or blogs</li>
                    </ul>
                    <p>Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>
                    <hr class="hr-light">
                    <h5>Non-Personal Identifiable Data</h5>
                    <p>We capture some non-Identifiable data in our logs. The data in the logs includes</p>
                    <ul class="round-list">
                        <li>Device type</li>
                        <li>Browser Type</li>
                        <li>Language Preference</li>
                        <li>Time Zone</li>
                        <li>Screen Size</li>
                        <li>Referring / Exit Pages</li>
                    </ul>
                    <hr class="hr-light">
                    <h5>Use</h5>
                    <p>We may use the personal information collected from within the Websites or when you use the Service(s) to:</p>
                    <ul class="round-list">
                        <li>Provide you with the Service(s)</li>
                        <li>Send you communication from the Service(s)</li>
                        <li>Assess the needs of your business to determine or suggest suitable products</li>
                        <li>Send you requested product or service information</li>
                        <li>Respond to customer service requests</li>
                        <li>Administer your account</li>
                        <li>Send you promotional and marketing communications</li>
                        <li>Personalized Advertisement</li>
                        <li>Facilitate your transactions with other users when you use our Service(s)</li>
                        <li>Perform statistical analyses of user behavior and characteristics at an aggregate level in order to measure interest in and use of the various areas of the site</li>
                    </ul>
                    <p>When you provide us with personal information about your contacts, we will only use this information for the specific reason for which it is provided.</p>
                    <hr class="hr-light">
                    <h5>Analytics & Web-beacons</h5>
                    <p>Dynamic Tech Academy Academy uses third party software for analytics. All metrics information collected from your usage of the Service(s) shall be transmitted to our analytics provider. This information is then used to evaluate how users use our platform, and to compile statistical reports on user activity for us. We further use the same statistical analytics tool to track or to collect your Personally Identifiable Information (PII). We will use this information in order to maintain, enhance, or add to the functionality of the Service(s) and to personalize the experience for you. Aggregated information and analysis may be made public where desired by Dynamic Tech Academy Academy.</p>
                    <p>We and our third-party advertising partners use technologies such as web beacons in analyzing trends, administering the website, tracking users’ movements around the site, and gathering demographic information about our user base as a whole. We may receive reports based on the use of these technologies by these companies on an individual and aggregated basis.</p>
                    <hr class="hr-light">
                    <h5>Use of Cookies and Pixels</h5>
                    <p>Similar to other commercial websites, our website utilizes a standard technology called “cookies” and server logs to collect information about how our site is used. Information gathered through cookies and server logs may include the date and time of visits, the pages viewed, time spent at our site, and the websites visited just before and just after our own, as well as your IP address.</p>
                    <p>A cookie is a very small text document, which often includes an anonymous unique identifier. When you visit a website, that site’s computer asks your computer for permission to store this file in a part of your hard drive specifically designated for cookies. Each website can send its own cookie to your browser if your browser’s preferences allow it, but (to protect your privacy) your browser only permits a website to access the cookies it has already sent to you, not the cookies sent to you by other sites.</p>
                    <p>The Company reserves the right to use technological equivalents of cookies, including social media pixels. These pixels allow social media sites to track visitors to outside websites so as to tailor advertising messages users see while visiting that social media website. The Company reserves the right to use these pixels in compliance with the policies of the various social media sites.</p>
                    <hr class="hr-light">
                    <h5>Third Party Use of Cookies</h5>
                    <p>Some content or applications, including advertisements, on the Website are served with third-parties’ tools and application providers. These third parties may use cookies alone or in conjunction with web beacons or other tracking technologies to collect information about you when you use our website. The information they collect may be associated with your personal information or they may collect information, including personal information, about your online activities over time and across different websites and other online services. They may use this information to provide you with interest-based (behavioral) advertising or other targeted content.</p>
                    <p>We do not control these third parties’ tracking technologies or how they may be used. If you have any questions about an advertisement or other targeted content, you should contact the responsible provider directly.</p>
                    <hr class="hr-light">
                    <h5>Email Information</h5>
                    <p>If you choose to correspond with us through email, we may retain the content of your email messages together with your email address and our responses. We provide the same protections for these electronic communications that we employ in the maintenance of information received online, mail, and telephone. This also applies when you register for our website, sign up through any of our forms using your email address or make a purchase on this site. For further information see the email policies below.</p>
                    <hr class="hr-light">
                    <h5>Email Policies</h5>
                    <p>We are committed to keeping your e-mail address confidential. We do not sell, rent, or lease our subscription lists to third parties, and will not disclose your email address to any third parties except as allowed in the section titled Disclosure of Your Information.</p>
                    <p>We will maintain the information you send via e-mail in accordance with applicable federal law.</p>
                    <p>In compliance with the CAN-SPAM Act, all e-mails sent from our organization will clearly state who the e-mail is from and provide clear information on how to contact the sender. In addition, all e-mail messages will also contain concise information on how to remove yourself from our mailing list so that you receive no further e-mail communication from us.</p>
                    <p>Our emails provide users the opportunity to opt-out of receiving communications from us and our partners by reading the unsubscribe instructions located at the bottom of any e-mail they receive from us at any time.</p>
                    <p>Users who no longer wish to receive our newsletter or promotional materials may opt-out of receiving these communications by clicking on the unsubscribe link in the e-mail.</p>
                    <hr class="hr-light">
                    <h5>How And Why, We Collect Information</h5>
                    <p>The Company collects your information in order to record and support your participation in the activities you select. If you register to download a book or resources, sign up for our newsletter, and/or purchase a product from us, we collect your information. We use this information to track your preferences and to keep you informed about the products and services you have selected to receive and any related products and/or services. As a visitor to this Website, you can engage in most activities without providing any personal information. It is only when you seek to download resources and/or register for services that you are required to provide information.</p>
                    <p>If you opt to receive any free resources, participate in any free training programs, register for a webinar, register for a live event, register for a seminar, or purchase any products sold by the Company on this Website, we will only enroll you to receive our free email newsletter if you affirmatively consent to it. If you do not wish to receive this newsletter, you can unsubscribe anytime. We include an “unsubscribe” link at the bottom of every email we send. If you ever have trouble unsubscribing, you can send an email to contact@Dynamic Tech Academyacademy.com requesting to unsubscribe from future emails.</p>
                    <hr class="hr-light">
                    <h5>How Do We Use the Information That You Provide to Us?</h5>
                    <p>We use personal information for purposes of presenting our website and its contents to you, providing you with information, providing you with offers for products and services, providing you with information about your subscriptions and products, carrying out any contract between you and the Company, administering our business activities, providing customer service, and making available other items and services to our customers and prospective customers.</p>
                    <p>From time-to-time, we may use the information you provide to us to make you offers to purchase products and services provided by third parties in exchange for a commission to be paid to us by such third parties. Should you opt to take part in such promotions, the third parties will receive your information.</p>
                    <p>From time-to-time, we may use the information you provide to us to display advertisements to you that are tailored to your personal characteristics, interests, and activities.</p>
                    <hr class="hr-light">
                    <h5>Disclosure Of Your Information</h5>
                    <p>As a general rule, we do not sell, rent, lease or otherwise transfer any information collected wither automatically or through your voluntary action.</p>
                    <p>We may disclose your personal information to our subsidiaries, affiliates, and service providers for the purpose of providing our services to you.</p>
                    <p>We may disclose your personal information to a third party, including a lawyer or collection agency, when necessary to enforce our terms of service or any other agreement between you and the Company.</p>
                    <p>We may provide your information to any successor in interest in the event of a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of the Company’s assets and/or business.</p>
                    <p>We may disclose information when legally compelled to do so, in other words, when we, in good faith, believe that the law requires it or for the protection of our legal rights or when compelled by a court or other governmental entity to do so.</p>
                    <hr class="hr-light">
                    <h5>How Do We Protect Your Information and Secure Information Transmissions?</h5>
                    <p>We employ commercially reasonable methods to ensure the security of the information you provide to us and the information we collect automatically. This includes using standard security protocols and working only with reputable third-party vendors.</p>
                    <p>Email is not recognized as a secure medium of communication. For this reason, we request that you do not send private information to us by email. However, doing so is allowed, but at your own risk. Some of the information you may enter on our website may be transmitted securely via a secure medium known as Secure Sockets Layer, or SSL. Credit Card information and other sensitive information is never transmitted via email.</p>
                    <p>The Company may use software programs to create summary statistics, which are used for such purposes as assessing the number of visitors to the different sections of our site, what information is of most and least interest, determining technical design specifications, and identifying system performance or problem areas.</p>
                    <p>For site security purposes and to ensure that this service remains available to all users, the Company uses software programs to monitor network traffic to identify unauthorized attempts to upload or change information, or otherwise cause damage.</p>
                    <hr class="hr-light">
                    <h5>Policy Changes</h5>
                    <p>It is our policy to post any changes we make to our privacy policy on this page. If we make material changes to how we treat our users’ personal information, we will notify you by email to the email address specified in your account and/or through a notice on the Website home page. The date the privacy policy was last revised is identified at the bottom of the page. You are responsible for ensuring we have an up-to-date active and deliverable email address for you, and for periodically visiting our website and this privacy policy to check for any changes.</p>
                    <hr class="hr-light">
                    <h5>Visitors’ GDPR Rights</h5>
                    <p>You are entitled to certain information and have certain rights under the General Data Protection Regulation. Those rights include:</p>
                    We will retain the any information you choose to provide to us until the earlier of: (a) you asking us to delete the information, (b) our decision to cease using our existing data providers, or (c) the Company decides that the value in retaining the data is outweighed by the costs of retaining it.
                    <p>You have the right to request access to your data that the Company stores and the rights to either rectify or erase your personal data.</p>
                    <p>You have the right to seek restrictions on the processing of your data.</p>
                    <p>You have the right to object to the processing of your data and the right to the portability of your data.</p>
                    <p>To the extent that you provided consent to the Company’s processing of your personal data, you have the right to withdraw that consent at any time, without affecting the lawfulness of processing based upon consent that occurred prior to your withdrawal of consent.</p>
                    <p>You have the right to lodge a complaint with a supervisory authority that has jurisdiction over issues related to the General Data Protection Regulation.</p>
                    <p>We require only the information that is reasonably required to enter into a contract with you. We will not require you to provide consent for any unnecessary processing as a condition of entering into a contract with us.</p>
                    <hr class="hr-light">
                    <h5>Feedbacks or Queries</h5>
                    <p>The Company welcomes your questions or comments regarding the Privacy Policy at <a href="mailto://info@dynamictechdmv.com">info@dynamictechdmv.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<footer class="footer-clean">
        <div class="container">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-lg-6 text-center text-md-start">
                    <p class="copyright">Dynamic tech © <?php echo date("Y")?>. All Rights Reserved. Designed with ♥ by Dynamiers Lab</p>
                </div>
                <div class="col-12 col-lg-6 text-center text-md-start">
                    <ul class="list-inline text-lg-end">
                        <li class="list-inline-item"><a href="privacy-policy">PRIVACY POLICY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://dynamierslab.in/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js?h=<?php random()?>"></script>
</body>

</html>