<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes slideUpFadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-up-fade-in {
            animation: slideUpFadeIn 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[50px]">

    <div class="flex items-center px-6 py-2 h-40">
        <a href="../profile.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="mt-2 px-6 text-[#171717] slide-up-fade-in">
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">Terms and Conditions</h2>
        <p class="mb-6 text-sm">
            Welcome to Quinton! By accessing or using our App, you agree to the following Terms and Conditions. Please read them carefully 
            before placing any orders or using any features. If you do not agree to these terms, please discontinue use of the App.
        </p>
        <p class="mb-6 text-sm">
            We may update these Terms and Conditions at any time, and updates will be effective once posted. We encourage you to review 
            them regularly. By continuing to use the Quinton App after any updates, you accept and agree to the changes made.
        </p>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Changes to Terms</h3>
        <p class="mb-6 text-sm">
            We reserve the right to modify these Terms without prior notice. Updates will take effect on the date indicated. By continuing 
            to use the Quinton App, you agree to the updated Terms. Please review the Terms before making purchases or using our services.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Eligibility</h3>
        <p class="mb-6 text-sm">
            You must be at least 18 years old to use the Quinton App. If you are under 18, a parent or guardian must agree to these 
            Terms on your behalf and supervise your use of our services.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">User Comments</h3>
        <p class="mb-6 text-sm">
            We welcome your feedback. However, any feedback you provide (e.g., ideas, suggestions, or comments) will become Quinton’s 
            property. This means we can use it for any purpose without compensation to you. Avoid sharing confidential or personal 
            information in your comments.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Acceptable Use</h3>
        <p class="mb-6 text-sm">
            When using the Quinton App, you agree not to:
        </p>
        <ul class="list-disc list-inside mb-6 text-sm">
            <li>Violate laws or infringe on others’ rights.</li>
            <li>Post illegal, harmful, or offensive content.</li>
            <li>Send spam or unauthorized advertisements.</li>
            <li>Spread viruses or harmful software.</li>
            <li>Harass, stalk, or impersonate others.</li>
            <li>Attempt to hack or bypass our security systems.</li>
        </ul>
        <p class="mb-6 text-sm">We may take action if these rules are violated.</p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">User Content</h3>
        <p class="mb-6 text-sm">
            You own the rights to any content you upload or submit to the Quinton App. By sharing content with us, you give Quinton 
            permission to use it for marketing, improvements, and other purposes.
        </p>
        <p class="mb-6 text-sm">You guarantee that:</p>
        <ul class="list-disc list-inside mb-6 text-sm">
            <li>You own the content or have permission to share it.</li>
            <li>Your content does not violate others’ rights.</li>
        </ul>
        <p class="mb-6 text-sm">We reserve the right to remove any content at our discretion.</p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Use of Mobile Services</h3>
        <p class="mb-6 text-sm">
            If you use the Quinton App on a mobile device, we may collect information such as your location and device details. This 
            data helps us provide updates, promotions, and improved services. You can disable location services in your device settings 
            at any time.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Product Pricing</h3>
        <p class="mb-6 text-sm">
            Prices listed on our App include the cost of goods or services but exclude delivery fees, taxes, or other charges. These 
            additional costs will be your responsibility.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Special Offers</h3>
        <p class="mb-6 text-sm">
            We occasionally offer promotions like free shipping or gifts with purchases. These offers are time-limited and subject to 
            specific terms.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Trademarks and Copyrights</h3>
        <p class="mb-6 text-sm">
            All content on the App, including text, images, and software, belongs to Quinton and is protected by copyright laws. You may 
            not use any of this content without our permission.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Applicable Law and Jurisdiction</h3>
        <p class="mb-6 text-sm">
            These Terms and Conditions are governed by Malaysian law. Except for disputes covered under arbitration, both parties agree to resolve issues in Malaysian courts, waiving objections to the venue.
        </p>
    
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Arbitration</h3>
        <p class="mb-6 text-sm">
            Disputes related to these Terms will be resolved through confidential binding arbitration in Malaysia, conducted in English by an independent and qualified arbitrator specializing in IT law. However, Quinton may seek court remedies to protect intellectual property and confidential information if necessary.
        </p>
    
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Termination</h3>
        <p class="mb-6 text-sm">
            We may terminate these Terms or your access to the App without notice. If terminated, you must stop using the App immediately. Termination does not affect rights or obligations (e.g., payments) that arose before termination. If you’re dissatisfied with the App or its terms, your only option is to stop using it.
        </p>
    
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Terms of Use</h3>
        <h4 class="font-bold text-[#171717] text-base mb-2">Definitions</h4>
        <p class="mb-6 text-sm">
            <strong>App:</strong> Quinton's websites, apps, and social media accounts.<br>
            <strong>Quinton Baby:</strong> Operated by Quinton Baby (M) Sdn Bhd (1340638-U), based in Malaysia.<br>
            <strong>Account:</strong> Your registration details (e.g., name, address, ID).<br>
            <strong>Business Day:</strong> Any day banks in Selangor operate, excluding weekends and public holidays.<br>
            <strong>Order:</strong> Your request to purchase a product.<br>
            <strong>Order Confirmation:</strong> Email confirming your order.<br>
            <strong>Content:</strong> Text, images, logos, and other media on the App.<br>
            <strong>Customer:</strong> The person purchasing from Quinton.<br>
            <strong>Goods:</strong> Products offered on Quinton's App.
        </p>
    
        <h4 class="font-bold text-[#171717] text-base mb-2">Agreement</h4>
        <p class="mb-6 text-sm">
            These Terms govern all product sales and override other terms unless agreed upon in writing. Product information on the App is for reference only and not binding. Errors in documents (e.g., invoices) can be corrected without liability.
        </p>
    
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Product Descriptions and Availability</h3>
        <p class="mb-6 text-sm">
            Images and descriptions aim to be accurate but may slightly differ due to image quality or design updates. Products are subject to availability, and Quinton may limit purchase quantities. If a product is unavailable, Quinton may suggest alternatives. Special promotions or gifts may be offered periodically, subject to specific terms.
        </p>
    
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Payment Terms</h3>
        <h4 class="font-bold text-[#171717] text-base mb-2">Payment Methods</h4>
        <p class="mb-6 text-sm">
            <strong>Credit/Debit Cards:</strong> Accepts Visa/MasterCard with secure encryption. Additional charges may apply for foreign-issued cards.<br>
            <strong>Online Banking:</strong> Payments must be in Malaysian Ringgit and may not be available to all users. Supported banks include AmBank, CIMB, Maybank, and more.
        </p>
    
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Shipping and Delivery</h3>
        <p class="mb-6 text-sm">
            Shipping fees cover order processing, packaging, and delivery. Delivery timelines are provided during checkout. Delays will be communicated, but Quinton is not liable for losses due to delays. Some locations may not be serviceable. In such cases, Quinton will notify you and provide options. Standard packaging is used for deliveries.
        </p>
        <h4 class="font-bold text-[#171717] text-base mb-2">Key Points</h4>
        <p class="mb-6 text-sm">
            <strong>Risk Transfer:</strong> The risk of loss or damage transfers to you upon delivery. If delayed due to your actions, the risk transfers when delivery was first attempted.<br>
            <strong>Delivery Issues:</strong> If you’re unavailable, instructions for re-delivery or collection will be provided. Delayed or refused delivery may result in additional fees or order cancellation.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">6.0 Mistaken Orders</h3>
        <p class="mb-6 text-sm">
            If you realize you’ve made an error with your order after submitting it, please contact us at support@quintonbaby.com.my as soon as possible. We’ll do our best to assist you promptly.
        </p>
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">7.0 Refusal of Order</h3>
        <p class="mb-6 text-sm">
            Quinton has the right to remove products from the App and modify content. While we aim to process all orders, there may be situations where we need to cancel an order after confirming it. If this happens and you’ve already paid, we’ll provide a full refund. We are not liable if we remove a product, update App content, or refuse to process an order, regardless of whether the product has been sold.
        </p>
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">8.0 Cancellation by Customer (Non-Faulty Product)</h3>
        <p class="mb-6 text-sm">
            All products on the App are provided “as is” without any warranties. Product images may slightly differ from what you receive. If you receive a faulty item, please contact our customer service team with your order number, name, address, and details of the issue. Let us know if you want a refund or a replacement. We’ll assess the product and notify you of the outcome. We reserve the right to deny a replacement but may offer a refund instead. If the returned product is not faulty, we may not repair, replace, or refund it. You may also need to cover courier and servicing costs. We’ll charge these fees to your payment method.
        </p>
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">9.0 Inaccuracy Disclaimer</h3>
        <p class="mb-6 text-sm">
            Occasionally, there may be errors or inaccuracies in product descriptions, prices, or availability. Quinton reserves the right to correct any such mistakes without notice, even after you’ve placed an order. If the corrected pricing or information affects your decision to proceed, please contact us, and we’ll help you cancel or return your order.
        </p>
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Disclaimer of Liability</h3>
        <p class="mb-6 text-sm">
            Our website and mobile apps are provided “as is” and “as available,” with no warranties of any kind, either express or implied. By using our website or apps, you do so at your own risk and are responsible for any costs related to servicing or repairing equipment. We, and our affiliates, are not liable for:
            <ul class="list-disc ml-6 mt-2 text-sm mb-4">
                <li>Errors or inaccuracies in content.</li>
                <li>Personal injury or property damage from using the website or apps.</li>
                <li>Unauthorized access to servers or personal information.</li>
                <li>Disruptions in service.</li>
                <li>Any damage caused by bugs, viruses, or other issues.</li>
            </ul>
            <p class=" text-sm mb-4">We won’t be liable for any indirect, special, incidental, or consequential damages, even if we’ve been advised of the possibility of such damages.</p>
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Indemnity</h3>
        <p class="mb-6 text-sm">
            You agree to defend and hold Quinton and its affiliates harmless from any claims or damages caused by your use of the App or violation of these Terms and Conditions.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Personal Data Protection</h3>
        <p class="mb-6 text-sm">
            Please refer to our Privacy Policy, which is part of these Terms and Conditions. By using the App, you agree to our data practices. If you don’t want us to collect or process your information, please don’t use the App.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Force Majeure</h3>
        <p class="mb-6 text-sm">
            Quinton is not liable for delays or failure to perform any obligations due to causes beyond our reasonable control, including:
            <ul class="list-disc ml-6 mt-2 text-sm mb-4">
                <li>Strikes, civil unrest, or wars.</li>
                <li>Natural disasters like floods or earthquakes.</li>
                <li>Issues with transportation or telecommunications.</li>
                <li>Government actions or restrictions.</li>
            </ul>
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Notices</h3>
        <p class="mb-6 text-sm">
            Any communications required under these Terms should be sent to Quinton’s registered office or primary place of business. If you are a consumer, communication should be sent to the address you provided at the time of purchase.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Hyperlinks to Other Websites</h3>
        <p class="mb-6 text-sm">
            Our App may include links to third-party websites and services. Quinton is not responsible for the availability or content of these external sites. If you have concerns, please contact the third-party service directly.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Third-Party Features</h3>
        <p class="mb-6 text-sm">
            The App may include features like social media buttons (e.g., Facebook "Like" or "Share"). These features may collect your personal information and track your usage. Their use is subject to the privacy policy of the third party providing them.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Governing Law</h3>
        <p class="mb-6 text-sm">
            These Terms and Conditions are governed by Malaysian law. Both Quinton and you agree to the jurisdiction of Malaysian courts. All communications will be in English.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Variation</h3>
        <p class="mb-6 text-sm">
            Quinton may update these Terms and Conditions at any time. Any changes will be posted on the website. Continued use of the App after changes implies acceptance of the updated terms. It’s your responsibility to review the Terms before placing an order.
        </p>
    </div>
    
</body>
</html>