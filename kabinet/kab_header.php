
<header class="">

    <section class="b-logo-line b-site-row ">
        <script type="text/javascript">$(function(){ new $.areas.root.views.shared.logoLine({}); });</script>
        <div class="content">
            
            <a href="mailto:<?php echo $email2;?>" style="margin-top:26px;display:block;float:left;margin-left:15px;width:180px;">
                <span class="care-label">Написать нам письмо</span>
            </a>
            <a href="<?php echo $site_url;?>" class="logo-link" title="Вернуться на сайт">
                <img id="logo" src="./564395_files/<?php echo $img_path_2; ?>" width="120"; alt="Лого">
            </a>
            <div class="b-balance-root ">
                <script type="text/javascript">$(function(){ if( $.areas.root.root.balance.balance != null ){ new $.areas.root.root.balance.balance({}) } else { new $.areas.root.root.balance({}) } });</script>

                <div class="balance">
	<span class="balance-text">Баланс: <span class="balance-amount"><?php echo $balance;?><span class="rouble">p</span>
</span></span>
                </div>



            </div>			<div class="profile-menu">
                <a class="main-item">
                    <span><?php echo $client_name; ?></span>
                    <div class="arrow"></div>
                </a>
                <ul>
                    <li><a href="profile.php">Профиль</a></li>
                    <li><a href="sign-out.php">Выйти</a></li>
                </ul>
            </div>
        </div>
    </section>




    <section class="b-menu-line b-site-row ">
        <script type="text/javascript">$(function(){ new $.areas.root.views.shared.menuLine({}); });</script>
        <div class="content">
            <ul class="b-menu">
                <li class="create-order"><a class="button type1" href="../order.php">Заказать ещё</a></li>
                <li class="item v-orders-menu-item">
                    <a class="" href="orders.php">Заказы</a>
                    <script type="text/javascript">$(function(){ if( $.areas.root.orders.newMessagesMenuWidget.newMessagesMenuWidget != null ){ new $.areas.root.orders.newMessagesMenuWidget.newMessagesMenuWidget({}) } else { new $.areas.root.orders.newMessagesMenuWidget({}) } });</script>



                </li>
                <li class="item"><a class="" href="finance.php">Финансы</a></li>
                <li class="item"><a class="" href="profile.php">Профиль</a></li>
                <li class="item"><a class="" href="faq.php">FAQ</a></li>
                <li class="item"><a class="" href="sign-out.php">Выйти</a></li>
            </ul>
        </div>
    </section>	</header>