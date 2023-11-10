<div id="loader" class="loader"></div>
<Style>
#loader {
                background: rgb(10, 10, 10) url("assets/img/apple-touch-icon.png") no-repeat center center;
                height: 100vh;
                width: 100%;
                position:fixed;
                text-align: center;
                Z-index: 100;
                display:flex;
                background-size: 200px;
                
            }
        
            .loader {
                position:fixed;
                top: 50%;
                left: 60%;
                transform: translate(-50%, -50%);
                height: 30px;
                width: 30px;
                display:inline;
                justify-content: center;

            }
            
            .disppear {
                animation: vanish 3.5s forwards;
                opacity:  0.5s;
            
            }
            
            @keyframes vanish {
                100% {
                    visibility: hidden;
                    opacity: 0;
            }
        }
            </style>
            <Script>
            var loader = document.querySelector(".loader")
window.addEventListener("load", vanish);

function vanish() {
    loader.classList.add("disppear");

}
</Script>