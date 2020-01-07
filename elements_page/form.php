
            <div class="your-question-popup">
                    <div class="your-question-popup-content">
                            <P>Вход</P>
                            <div class='container-form'>
                              <form id='form' action="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/elements_page/formLogin.php" method="post" class='container-form__form'>
                              <p><input class='container-form__form__login' 
                                       id='login' 
                                       name="login"
                                       placeholder="Логин" /></p>
                                 <p><input class='container-form__form__password' 
                                       type='password' 
                                       name="password"
                                       id='password'  
                                       placeholder="Пароль"/></p>
                                    <button class="enter" type="submit">Войти</button>
                                    <button class="registration" type="submit">Зарегестрироваться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
  

            <div class="your-question-popup-reg">
                <div class="your-question-popup-content-reg">
                <div class='container-form'>
                <p>Регистрации</p>
                <form id='form' action="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/elements_page/formSave.php" method="post" class='container-form__form'>
                <p><input class='container-form__form__login' 
                id='login' 
                name="login"
                placeholder="Логин" /></p>
                <p><input class='container-form__form__password' 
                type='password' 
                name="password"
                id='password'  
                placeholder="Пароль"/></p>
                <p><input class='container-form__form__name' 
                id='name'
                name="name"  
                placeholder="Имя"/></p>
                <p><input class='container-email' 
                id='mail'
                name="mail"  
                placeholder="mail"/></p>
                <button class="buttonregistration" type="submit">Зарегестрироваться</button>
                </div>
                </form>
                </div>
            </div>
        </div>
