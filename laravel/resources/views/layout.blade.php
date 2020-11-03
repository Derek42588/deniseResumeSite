<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Denise Fournier</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <!-- Styles -->
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark primary-bg fixed-top" id = "main-nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#top-card">&#8593; Top <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="#resume">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link"href="{{asset('/images/Denise-Fournier-Resume.pdf')}}">
                    <img src="{{asset('/images/file-pdf.svg')}}" class="img-fluid nav-icons" alt="PDF Icon">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="https://www.instagram.com/denise_morgan/">

                <img src="{{asset('/images/instagram.svg')}}" class="img-fluid nav-icons" alt="Instagram Logo">
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link"href="http://www.linkedin.com/in/dmfournier/">

                <img src="{{asset('/images/linkedin.svg')}}" class="img-fluid nav-icons"alt="LinkedIn Logo">
                </a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.js " async></script>
<script>
    $('#main-nav a').on('click', function(e) {
        //check for a hash value
        if (this.hash !== '' && this.hash !=='smm' && this.hash !=='om' && this.hash !=='ea') {
            //prevent default
            e.preventDefault()
            //store hash in var
            const hash = this.hash
            //animate smooth scroll
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function() {
                //add hash to url after scroll
                window.location.hash = hash;
            })
        }
    })

        $('#resume-nav a').on('click', function(e) {
            e.preventDefault()

            const hash=this.hash


            if (hash === '#smm') {
                $('#smm-link').addClass('my-tabs-active')
                $('#smm-link').removeClass('my-tabs-inactive')
                $('#om-link').removeClass('my-tabs-active')
                $('#om-link').addClass('my-tabs-inactive')
                $('#resume-card').html('<div class="card-stripe-one p-2">Co-manage client’s business enterprise-size social media accounts and maintain social engagement on Facebook, Instagram, and Twitter</div>\n' +
                    '                    <div class="card-stripe-two p-2">Copy editing for web pages and social content</div>\n' +
                    '                    <div class="card-stripe-one p-2">Executing client digital reputation management reports</div>\n' +
                    '                    <div class="card-stripe-two p-2">Compiling data and performance summary reports for social media campaigns</div>\n' +
                    '                    <div class="card-stripe-one p-2">Quality assurance testing of new websites and content migration</div>\n')
            } else if(hash === '#om') {
                $('#om-link').addClass('my-tabs-active')
                $('#om-link').removeClass('my-tabs-inactive')
                $('#smm-link').removeClass('my-tabs-active')
                $('#smm-link').addClass('my-tabs-inactive')
                $('#resume-card').html('<div class="card-stripe-one p-2">' +
                    'Assist company President/CEO with calendar management, travel arrangements, and general tasks</div>\n' +
                    '                    <div class="card-stripe-two p-2">Manage both accounts payable and receivable: issue client invoices, process incoming payments, resolve billing disputes, follow up on owed balances</div>\n' +
                    '                    <div class="card-stripe-one p-2">Handle administrative duties, answer and direct incoming calls, coordinate services with vendors, process HR paperwork, arrange catering for staff and client lunches, stock office supplies, ensure there is always coffee</div>\n')
            }
        })

</script>

</body>
</html>
