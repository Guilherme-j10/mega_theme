        <?php wp_footer(); ?>
         <!-- contato -->
         <section class="contact">
            <div class="header_contact">
                <h1>CONTATO</h1>
            </div>
            <form action="">
                <div class="single_line">
                    <input type="text" name="name" required placeholder="Digite seu nome">  
                    <input type="email" name="email" requried placeholder="Digite seu email"> 
                </div>
                <textarea name="msg" required placeholder="Digite sua mensagem aqui"></textarea>
                <input type="submit" name="send_message" placeholder="ENVIAR MENSAGEM">
            </form>
        </section>

        <!-- footer -->
        <footer>
            <p>&copy <?= date('Y'); ?> <?php bloginfo('name'); ?> - Desenvolvido por Mega Conecta</p>
        </footer>
        <script>
            function menu_toggle(){

                let call = document.getElementsByClassName("call_menu");
                let menu = document.getElementById("menu");
                let close_menu = document.getElementById("close");

                for(let i = 0; i < call.length; i++){
                    call[i].addEventListener('click', (e) => {
                        e.preventDefault();
                        menu.classList.add('show_menu');
                    });
                }

                close_menu.addEventListener('click', () => {
                    menu.classList.remove('show_menu');
                });
            }
            menu_toggle();

            function show_header(){
                //99
                let header = document.getElementById("header");
                header.style.display = 'none';

                setInterval(() => {
                    if(window.pageYOffset >= 99){
                        header.style.display = 'flex';
                    }else{
                        header.style.display = 'none';
                    }
                }, 10)
            }

            show_header();
        </script>
    </body>
</html>