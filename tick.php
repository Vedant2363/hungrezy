<HTML>
<style>
                                .checkmark__circle {
                                stroke-dasharray: 166;
                                stroke-dashoffset: 166;
                                stroke-width: 50;
                                stroke-miterlimit: 10;
                                stroke: #7ac142;
                                fill: none;
                                animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
                                }

                                .checkmark {
                                width: 200px;
                                height: 200px;
                                border-radius: 50%;
                                display: block;
                                stroke-width: 5;
                                stroke: #fff;
                                stroke-miterlimit: 10;
                                margin: 2% auto;
                                box-shadow: inset 0px 0px 0px #7ac142;
                                animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
                                }

                                .checkmark__check {
                                transform-origin: 50% 50%;
                                stroke-dasharray: 48;
                                stroke-dashoffset: 48;
                                animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
                                }

                                @keyframes stroke {
                                100% {
                                    stroke-dashoffset: 0;
                                }
                                }
                                @keyframes scale {
                                0%, 100% {
                                    transform: none;
                                }
                                50% {
                                    transform: scale3d(1.1, 1.1, 1);
                                }
                                }
                                @keyframes fill {
                                100% {
                                    box-shadow: inset 0px 0px 0px 30px #7ac142;
                                }
                                }
                                #loader {
                                border: 7px solid #D8E3E7;
                                border-radius: 50%;
                                border-top: 7px solid #3498db;
                                width: 40px;
                                height: 40px;
                                -webkit-animation: spin 600ms linear infinite; /* Safari */
                                animation: spin 600ms linear infinite;
                                }

                                /* Safari */
                                @-webkit-keyframes spin {
                                0% { -webkit-transform: rotate(0deg); }
                                100% { -webkit-transform: rotate(360deg); }
                                }

                                @keyframes spin {
                                0% { transform: rotate(0deg); }
                                100% { transform: rotate(360deg); }
                                }
                                .redirect {
                                    display: flex;
                                    flex-direction: row;
                                    width: 50%;
                                    margin: 20px auto;
                                }
                                .redirect p {
                                    width: 55%;
                                    text-align: right;
                                    padding: 10px 20px;
                                }
                                .loader-container {
                                    width: 45%;
                                }
                                .hide {
                                    display: none;
                                }
                                .myDiv{
                                    padding: 250px 0;
                                }
                            </style>


<div class="myDiv">
<svg class="checkmark" id="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                           
</div>

<script>
            myVar= setTimeout(function() {
                document.getElementById('redirect').classList.remove('hide');
            }, 1000);
            document.getElementById("orderPlaced").onload = setTimeout(function() {
                window.location.replace("video.php");
            }, 4000);
        </script>
</html>