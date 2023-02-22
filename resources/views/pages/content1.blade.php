
<div class="block1">
    <img class="banner1" src="{{ asset('images/Group 41.png') }}" alt="anh nen">
    <div>
        <ul class="header clearfix fixed-top navbar">
            <div class="column menu">
                <li class="menu1"><<button class="mybtn" onclick="topFunction()" id="myBtn" title="Go to top">><img src="{{ asset('images/logo.png') }}"></button></li>
                <script>
                    // Get the button
                    let mybutton = document.getElementById("myBtn");

                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};

                    // function scrollFunction() {
                    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    //         mybutton.style.display = "block";
                    //     } else {
                    //         mybutton.style.display = "none";
                    //     }
                    // }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
            </div>
            <div class="column content">
                <li class="menu2"><a href="#Home" style="text-decoration: none; color: white"><h3>Home</h3></a></li>
                <li class="menu3"><a href="#logo1"><img src="{{asset('images/logo1.png') }}"></a></li>
            </div>
        </ul>
        <div class="clear"></div>
        <img class="anh_to" src="{{ asset('images/Group 39.png') }}">
        <div class="them_link">
            <a href="https://google.com" class="btn"><img class="anh_nho" src="{{asset('images/Group 42.png' )}}"></a>
            <a href="https://fb.com" class="btn"><img class="anh_nho1" src="{{asset('images/Group 40.png')}}"></a>
        </div>
        <img class="text_anh" src="{{asset('images/textanh.png')}}">
    </div>
</div>



