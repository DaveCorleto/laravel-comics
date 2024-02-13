<footer>
    <div class="footer-bottom">
        <div class="sign-up">
            SIGN-UP NOW!
        </div>
        <div>
            <img src="Vite:asset(resources/imgs/footer-pinterest.png)">
        </div>
        <ul>
            <li class="blue">FOLLOW US</li>
            @foreach ($socials as $social)
            <li><img src=('')></li>
            @endforeach
        </ul>
    </div>


</footer>

<!-- Prova scss per vedere se supporta anche la modifica nel componente  -->
<style lang=scss>
    .sign-up {
        padding: 10px;
        border: 1px solid blue;
        color: white;
    }
    .blue {
        color:blue;
    }
</style>