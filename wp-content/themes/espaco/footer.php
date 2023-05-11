<section id="fomulario">
    <div class="content">
        <div class="formulario grid_6">
            <form class="form-contato">
                <fieldset>
                    <div class="clear">
                        <input type="text" id="inputNome" placeholder="Nome" />
                        <input type="text" id="inputEmail" placeholder="E-mail" />
                    </div>
                    <div class="clear">
                        <input type="text" id="inputTelefone" placeholder="Telefone" />
                        <input type="text" id="inputAssunto" placeholder="Assunto" />
                    </div>
                    <div class="clear">
                        <textarea id="inputMensagem" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="clear">
                        <input type="submit" class="inputEnviar" value="Enviar" />
                        <span class="formResposta"></span>
                    </div>
                </fieldset>
            </form>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bg-formulario.png" />
    </div>
</section>
<!-- Footer Wordpress -->
<?php wp_footer(); ?>
<!-- Fecha Footer Wordpress -->
</body>

</html>