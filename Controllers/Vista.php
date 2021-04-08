<?php
    class Vista extends Controllers{
        function principal(){
            require VW . DF . "head.html";
            require VW . VS . "principal.html";
            require VW . DF . "footer.html";
        }
    }