        <footer>
            <div class="footer-container">
                <div class="footer-text">
                    <p>&copy; PHP Motors, All rights reserved.</p>
                    <p>
                        All images used are belived to be in "Fair Use".
                        Please notify the author if any are not and they will be removed.
                    </p>
                    <p>Last updated:
                        <?php
                        $date = date_create("2021-11-24");
                        echo date_format($date, "j F, Y");
                        ?>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="/phpmotors/assets/scripts/global.js"></script>
</body>
</html>
