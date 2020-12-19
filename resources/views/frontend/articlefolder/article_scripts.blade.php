
  <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.farsnews.ir/news/13990815000189/دولت-بعدی-آمریکا-برابر-مردم-ایران-تسلیم-می‌شود-می‌توانیم-دشمنان-را"
        },
        "headline": "دولت بعدی آمریکا برابر مردم ایران تسلیم می‌شود/ می‌توانیم دشمنان را وادار کنیم باز بیایند و پیمان را اجرا کنند",
        "image": ["https://media.farsnews.ir/Uploaded/Files/Images/1399/08/02/13990802000217_Test_PhotoN.jpg"],
        "datePublished": "2020-11-05T11:08:06Z",
        "dateModified": "2020-11-05T11:08:06Z",
        "author": {
        "@type": "Person",
        "name": "خبرگزاری فارس"
        },
        "publisher": {
        "@type": "Organization",
        "name": "خبرگزاری فارس | Fars News Agency",
        "logo": {
        "@type": "ImageObject",
        "url": "https://farsnews.com/images/social-logo.jpg"
        }
        },
        "description": "حسن روحانی گفت: دولت بعد آمریکا هر کسی که باشد، در برابر ملت ایران تسلیم خواهد شد و راهی جز این ندارند. آن‌ها تسلیم فشار افکار عمومی، مقاومت و صبر ملّت ایران خواهند شد."
        }
    </script>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement":
        [
        {
        "@type": "ListItem",
        "position": 1,
        "item":
        {
        "@id": "https://www.farsnews.ir/politics",
        "name": " سیاسی"
        }
        }
,{"@type": "ListItem","position": 2,"item":{"@id": "https://www.farsnews.ir/politics/government","name": "دولت"}}        ]
        }
    </script>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "https://www.farsnews.ir/",
        "potentialAction": {
        "@type": "SearchAction",
        "target": "https://search.farsnews.ir?q={search_term_string}",
        "query-input": "required name=search_term_string"
        }
        }
    </script>


     <!-- Start Alexa Certify Javascript -->
     <script type="text/javascript">
        _atrk_opts = { atrk_acct: "Hli5s1Fx9f207i", domain: "farsnews.com", dynamic: true };
        (function () { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=Hli5s1Fx9f207i" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131012460-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-131012460-1');
    </script>


<script src="{{url('farse_article/js/jquery.min.js')}}"></script>
    <script src="{{url('farse_article/js/bootstrap.min.js')}}"></script>
    <script src="https://stat.farsnews.ir/matomo/Stat.js"></script>
    

    <script src="{{url('farse_article/js/handlebars-v4.1.2.min.js')}}"></script>
    <script src="{{url('farse_article/js/newstext.min.js?15')}}"></script>




    <link rel="manifest" href="/manifest.json">


<script>
$(document).on('click', '.comment_id', function(e) {

e.preventDefault();

const id = $(this).data('id');

var comment_id = $('#hid_comment_id').attr('value', + id );

})

</script>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
    function refreshCaptcha(){
        $.ajax({
            url: "{{url('/refereshcapcha')}}",
            type: 'get',
            dataType: 'html',
            success: function(json) {
                $('.refereshrecapcha').html(json);
            },
            error: function(data) {
                alert('Try Again.');
            }
        });
    }
</script>

