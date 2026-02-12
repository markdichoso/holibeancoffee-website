<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holibean Coffee - Elevate Your Coffee Experience</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D4A574',
                        secondary: '#1A1A1A'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        html {
            scroll-behavior: smooth;
        }

        .hero-bg {
            background-image: url('https://readdy.ai/api/search-image?query=modern%20coffee%20shop%20interior%20with%20warm%20lighting%2C%20professional%20baristas%20preparing%20specialty%20coffee%20drinks%2C%20elegant%20coffee%20beans%20scattered%20on%20wooden%20counter%2C%20sophisticated%20atmosphere%20with%20golden%20hour%20lighting%2C%20premium%20coffee%20experience%2C%20cinematic%20quality&width=1920&height=1080&seq=hero001&orientation=landscape');
            background-size: cover;
            background-position: center;
        }

        .carousel-container {
            position: relative;
        }

        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .carousel-slide.active {
            opacity: 1;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animate-fade-in {
            animation: fade-in 2s ease-in-out;
        }

        .coffee-pattern {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><circle cx="30" cy="30" r="2" fill="%23D4A574" opacity="0.1"/></svg>');
        }
    </style>
</head>

<body class="bg-white">
    <nav class="w-full bg-white shadow-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="https://static.readdy.ai/image/48cec4035905921264bd34e44aa3b8ff/dfe1a406e9e1fa813fd56f712ab7b057.png" alt="Holibean Coffee Logo" class="h-8 w-auto">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Home</a>
                        <a href="#products" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Products</a>
                        <a href="#subscription" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Subscription</a>
                        <a href="#about" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">About</a>
                        <a href="#contact" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Contact</a>
                    </div>
                </div>
                <button class="md:hidden w-6 h-6 flex items-center justify-center">
                    <i class="ri-menu-line text-xl"></i>
                </button>
            </div>
        </div>
    </nav>
    <section id="home" class="h-[560px] flex items-center relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="carousel-container w-full h-full relative">
                <div class="carousel-slide active" style="background-image: url('https://readdy.ai/api/search-image?query=modern%20coffee%20shop%20interior%20with%20warm%20lighting%2C%20professional%20baristas%20preparing%20specialty%20coffee%20drinks%2C%20elegant%20coffee%20beans%20scattered%20on%20wooden%20counter%2C%20sophisticated%20atmosphere%20with%20golden%20hour%20lighting%2C%20premium%20coffee%20experience%2C%20cinematic%20quality&width=1920&height=1080&seq=hero001&orientation=landscape');"></div>
                <div class="carousel-slide" style="background-image: url('https://readdy.ai/api/search-image?query=professional%20coffee%20roasting%20facility%20with%20premium%20coffee%20beans%20being%20roasted%2C%20aromatic%20steam%20rising%2C%20industrial%20coffee%20equipment%2C%20warm%20ambient%20lighting%2C%20artisanal%20coffee%20production%20process&width=1920&height=1080&seq=hero002&orientation=landscape');"></div>
                <div class="carousel-slide" style="background-image: url('https://readdy.ai/api/search-image?query=elegant%20coffee%20vending%20machines%20in%20modern%20office%20environment%2C%20employees%20enjoying%20fresh%20coffee%2C%20contemporary%20workplace%20setting%20with%20premium%20coffee%20dispensing%20technology&width=1920&height=1080&seq=hero003&orientation=landscape');"></div>
                <div class="carousel-slide" style="background-image: url('https://readdy.ai/api/search-image?query=variety%20of%20premium%20coffee%20cups%20with%20latte%20art%2C%20cappuccinos%20and%20specialty%20drinks%20arranged%20beautifully%2C%20coffee%20beans%20scattered%20around%2C%20professional%20presentation%20with%20warm%20lighting&width=1920&height=1080&seq=hero004&orientation=landscape');"></div>
            </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/70"></div>
        <div class="relative z-10 w-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center text-white">
                    <div class="mb-8 flex justify-center">
                        <img src="https://static.readdy.ai/image/48cec4035905921264bd34e44aa3b8ff/dfe1a406e9e1fa813fd56f712ab7b057.png" alt="Holibean Coffee Logo" class="h-20 w-auto">
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        ELEVATE
                        <span class="block text-primary font-['Pacifico'] text-3xl md:text-5xl">your coffee</span>
                        <span class="block text-2xl md:text-4xl italic">experience</span>
                    </h1>
                    <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
                        At Holibean, our inspiration springs from working together, staying true to our values, and providing exceptional service
                    </p>
                    <button class="bg-primary hover:bg-secondary text-white px-8 py-4 !rounded-button text-lg font-semibold transition-all duration-300 transform hover:scale-105 whitespace-nowrap">
                        Explore Our Blends
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Premium Products</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover our carefully curated selection of coffee machines, specialty blends, and refreshing beverages</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-105 transform transition-all duration-500 ease-out cursor-pointer group">
                    <div class="h-64 bg-cover bg-center group-hover:scale-110 transition-transform duration-700 ease-out" style="background-image: url('https://readdy.ai/api/search-image?query=professional%20coffee%20vending%20machine%20with%20modern%20design%2C%20sleek%20metallic%20finish%2C%20digital%20display%20showing%20coffee%20options%2C%20premium%20commercial%20coffee%20equipment%20in%20clean%20environment&width=400&height=300&seq=machine001&orientation=landscape');"></div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Coffee Machines</h3>
                        <p class="text-gray-600 mb-4">Professional vending machines featuring:</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Free-Flowing Operation</li>
                            <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Coin-Operated System</li>
                            <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Bean-to-Cup Technology</li>
                            <li class="flex items-center"><i class="ri-check-line text-primary mr-2"></i>Cold Drink Dispensing</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-105 transform transition-all duration-500 ease-out cursor-pointer group">
                    <div class="h-64 bg-cover bg-center group-hover:scale-110 transition-transform duration-700 ease-out" style="background-image: url('https://readdy.ai/api/search-image?query=variety%20of%20premium%20coffee%20blends%20and%20specialty%20drinks%2C%20cappuccino%20latte%20espresso%20in%20elegant%20cups%2C%20coffee%20beans%20scattered%20around%2C%20warm%20lighting%20showcasing%20different%20coffee%20types%20and%20flavors&width=400&height=300&seq=coffee001&orientation=landscape');"></div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Coffee Mixes</h3>
                        <div class="mb-4">
                            <h4 class="font-semibold text-primary mb-2">Premium Blends:</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>• Cappuccino & Café Latte</li>
                                <li>• White Coffee & Caramel</li>
                                <li>• Premium 3-in-1 Coffee</li>
                                <li>• Black Coffee (Instant)</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Classic Options:</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>• Morath Choco & Choco Jr</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-105 transform transition-all duration-500 ease-out cursor-pointer group">
                    <div class="h-64 bg-cover bg-center group-hover:scale-110 transition-transform duration-700 ease-out" style="background-image: url('https://readdy.ai/api/search-image?query=refreshing%20fruit%20juices%20and%20milkteas%20in%20clear%20glasses%2C%20colorful%20beverages%20with%20fresh%20fruits%2C%20bubble%20tea%20with%20tapioca%20pearls%2C%20vibrant%20drink%20presentation%20with%20natural%20ingredients&width=400&height=300&seq=drinks001&orientation=landscape');"></div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Quenchers</h3>
                        <div class="mb-4">
                            <h4 class="font-semibold text-primary mb-2">Fruit Juices:</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>• Cherry Red & Lychee Tea</li>
                                <li>• Cucumber Lemonade</li>
                                <li>• Real Mango</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Milkteas:</h4>
                            <ul class="space-y-1 text-sm text-gray-600">
                                <li>• Winter Melon</li>
                                <li>• Salted Caramel</li>
                                <li>• Okinawa Chocolate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="subscription" class="py-20 bg-secondary coffee-pattern relative">
        <div class="absolute inset-0 bg-secondary/90"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <h2 class="text-4xl font-bold mb-6">Subscribe to Premium Coffee</h2>
                <p class="text-xl mb-12 max-w-3xl mx-auto">Get your favorite Holibean coffee blends delivered monthly. Enjoy fresh, premium quality coffee at your convenience.</p>
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <h3 class="text-2xl font-bold mb-4">Starter Plan</h3>
                        <div class="text-3xl font-bold mb-4">$29<span class="text-lg font-normal">/month</span></div>
                        <ul class="space-y-3 text-left">
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>2 Premium Blends</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Monthly Delivery</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Free Shipping</li>
                        </ul>
                    </div>
                    <div class="bg-primary rounded-2xl p-6 transform scale-105 shadow-2xl">
                        <div class="bg-secondary text-primary text-sm font-bold px-3 py-1 rounded-full inline-block mb-4">Most Popular</div>
                        <h3 class="text-2xl font-bold mb-4">Premium Plan</h3>
                        <div class="text-3xl font-bold mb-4">$49<span class="text-lg font-normal">/month</span></div>
                        <ul class="space-y-3 text-left">
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>4 Premium Blends</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Bi-weekly Delivery</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Free Shipping</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Exclusive Blends</li>
                        </ul>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <h3 class="text-2xl font-bold mb-4">Enterprise</h3>
                        <div class="text-3xl font-bold mb-4">$89<span class="text-lg font-normal">/month</span></div>
                        <ul class="space-y-3 text-left">
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>6 Premium Blends</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Weekly Delivery</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Priority Support</li>
                            <li class="flex items-center"><i class="ri-check-line mr-2"></i>Custom Blends</li>
                        </ul>
                    </div>
                </div>
                <button class="bg-primary text-secondary hover:bg-yellow-500 px-8 py-4 !rounded-button text-lg font-semibold transition-all duration-300 transform hover:scale-105 whitespace-nowrap">
                    Subscribe Now
                </button>
            </div>
        </div>
    </section>
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Mission & Values</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At Holibean, our inspiration springs from working together, staying true to our values, and providing exceptional service. We're dedicated to not only helping you succeed but also fostering a culture where everyone thrives.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                <i class="ri-heart-line text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Quality First</h3>
                                <p class="text-gray-600">We source only the finest coffee beans and maintain the highest standards in every cup.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                <i class="ri-team-line text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Community Focus</h3>
                                <p class="text-gray-600">Building lasting relationships with our clients and creating positive impact in communities.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                <i class="ri-innovation-line text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Innovation</h3>
                                <p class="text-gray-600">Continuously improving our products and services with cutting-edge technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-96 bg-cover bg-center rounded-2xl shadow-lg" style="background-image: url('https://readdy.ai/api/search-image?query=professional%20coffee%20team%20working%20together%20in%20modern%20coffee%20roastery%2C%20diverse%20group%20of%20baristas%20and%20coffee%20experts%20collaborating%2C%20warm%20lighting%20showcasing%20teamwork%20and%20dedication%20to%20coffee%20craft&width=600&height=400&seq=team001&orientation=landscape');"></div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Trusted by Leading Companies</h2>
                <p class="text-lg text-gray-600">Join hundreds of satisfied clients who trust Holibean for their coffee needs</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-center">
                        <div class="w-8 h-8 flex items-center justify-center mx-auto mb-2">
                            <i class="ri-building-line text-2xl text-gray-600"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">ICT Solutions</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-center">
                        <div class="w-8 h-8 flex items-center justify-center mx-auto mb-2">
                            <i class="ri-focus-3-line text-2xl text-gray-600"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Concentrix</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-center">
                        <div class="w-8 h-8 flex items-center justify-center mx-auto mb-2">
                            <i class="ri-car-line text-2xl text-gray-600"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Grab</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-center">
                        <div class="w-8 h-8 flex items-center justify-center mx-auto mb-2">
                            <i class="ri-flashlight-line text-2xl text-gray-600"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Hitachi Energy</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-center">
                        <div class="w-8 h-8 flex items-center justify-center mx-auto mb-2">
                            <i class="ri-global-line text-2xl text-gray-600"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Mondelez</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-center">
                        <div class="w-8 h-8 flex items-center justify-center mx-auto mb-2">
                            <i class="ri-car-fill text-2xl text-gray-600"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Toyota</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Support Services</h2>
                <p class="text-lg text-gray-600">Comprehensive maintenance and support for all your coffee equipment</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="h-80 bg-cover bg-center rounded-2xl shadow-lg" style="background-image: url('https://readdy.ai/api/search-image?query=professional%20technician%20maintaining%20coffee%20vending%20machine%2C%20cleaning%20and%20servicing%20commercial%20coffee%20equipment%2C%20technical%20support%20and%20maintenance%20work%20in%20progress&width=600&height=400&seq=support001&orientation=landscape');"></div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Machine Maintenance</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        We offer weekly cleaning and maintenance services for your coffee vending and bean dispensing machines, ensuring they stay in peak condition and consistently provide top-quality beverages.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-4">
                                <i class="ri-time-line text-primary text-xl"></i>
                            </div>
                            <span class="text-gray-700">Weekly scheduled maintenance</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-4">
                                <i class="ri-tools-line text-primary text-xl"></i>
                            </div>
                            <span class="text-gray-700">Professional cleaning services</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-4">
                                <i class="ri-customer-service-line text-primary text-xl"></i>
                            </div>
                            <span class="text-gray-700">24/7 technical support</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-4">
                                <i class="ri-shield-check-line text-primary text-xl"></i>
                            </div>
                            <span class="text-gray-700">Quality assurance guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600">Ready to elevate your coffee experience? Contact us today</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h3>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-sm" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-sm" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-sm" placeholder="john.doe@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-sm" placeholder="+63 917 152 7405">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-sm resize-none" placeholder="Tell us about your coffee needs..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-secondary hover:bg-primary text-white py-3 !rounded-button font-semibold transition-all duration-300 whitespace-nowrap">
                            Send Message
                        </button>
                    </form>
                </div>
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                    <i class="ri-map-pin-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Address</h4>
                                    <p class="text-gray-600">Block 50 Lot 13 Golden City Subdivision<br>Sta. Rosa City, Laguna Philippines 4026</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                    <i class="ri-phone-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Phone</h4>
                                    <p class="text-gray-600">+63 917 152 7405</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                    <i class="ri-mail-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600">info@holibeancoffee.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 flex items-center justify-center mr-4 mt-1">
                                    <i class="ri-global-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Website</h4>
                                    <p class="text-gray-600">www.holibeancoffee.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Business Hours</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Monday - Friday</span>
                                <span class="font-semibold text-gray-900">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Saturday</span>
                                <span class="font-semibold text-gray-900">9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Sunday</span>
                                <span class="font-semibold text-gray-900">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-secondary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <img src="https://static.readdy.ai/image/48cec4035905921264bd34e44aa3b8ff/dfe1a406e9e1fa813fd56f712ab7b057.png" alt="Holibean Coffee Logo" class="h-8 w-auto">
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Elevating your coffee experience with premium blends, professional equipment, and exceptional service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="ri-facebook-fill text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="ri-instagram-fill text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="ri-twitter-fill text-lg"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Products</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Coffee Machines</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Premium Blends</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Quenchers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Accessories</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Machine Maintenance</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Subscription Plans</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Technical Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Custom Solutions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to get updates on new blends and special offers</p>
                    <div class="flex">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-l-lg focus:outline-none focus:border-primary text-sm">
                        <button class="bg-primary hover:bg-yellow-500 text-secondary px-4 py-2 rounded-r-lg transition-colors whitespace-nowrap">
                            <i class="ri-send-plane-line"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        © 2026 Holibean Coffee. All rights reserved.
                    </p>
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script id="smooth-scroll">
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const offsetTop = targetElement.offsetTop - 16;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    <script id="form-handling">
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.querySelector('form');
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                const formObject = {};
                formData.forEach((value, key) => {
                    formObject[key] = value;
                });
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            });
        });
    </script>
    <script id="mobile-menu">
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.md\\:hidden button');
            const navigation = document.querySelector('nav .hidden.md\\:block');
            if (mobileMenuButton && navigation) {
                mobileMenuButton.addEventListener('click', function() {
                    navigation.classList.toggle('hidden');
                    navigation.classList.toggle('block');
                });
            }
        });
    </script>
    <script id="hero-carousel">
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            let currentSlide = 0;

            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }
            setInterval(nextSlide, 4000);
        });
    </script>
    <script id="subscription-modal">
        document.addEventListener('DOMContentLoaded', function() {
            const allButtons = document.querySelectorAll('button');
            const subscribeButtons = Array.from(allButtons).filter(button => {
                const text = button.textContent.trim();
                return text === 'Subscribe Now' || text === 'Explore Our Blends';
            });
            subscribeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetSection = document.querySelector('#subscription');
                    if (targetSection) {
                        const offsetTop = targetSection.offsetTop - 16;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    <script id="navbar-scroll">
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('nav');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    navbar.classList.add('fixed', 'top-0', 'z-50', 'bg-white');
                    navbar.classList.remove('relative');
                } else {
                    navbar.classList.add('relative');
                    navbar.classList.remove('fixed', 'top-0', 'z-50');
                }
            });
        });
    </script>
</body>

</html>