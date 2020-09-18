<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <nav class="menu menu--iris">
        <ul class="nav navbar-nav menu__list">
            <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../index.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../index.php" class="menu__link">Home</a></li>
            <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../quem-somos.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../quem-somos.php" class="menu__link">Quem Somos</a></li>

            <!-- <li class="dropdown menu__item">
                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">ERP<b class="caret"></b></a>
                <ul class="dropdown-menu agile_short_dropdown">
                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../servicos-erp.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../servicos-erp.php" class="menu__link">Serviços</a></li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../integracao.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../integracao.php" class="menu__link">Integração</a></li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../legislacao.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../legislacao.php" class="menu__link">Legislação</a></li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../consultoria.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../consultoria.php" class="menu__link">Consultoria</a></li>
                </ul>
            </li> -->
            <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../contato.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../contato.php" class="menu__link">Contato</a></li>
            <li class="<?php if(basename($_SERVER['PHP_SELF']) == '../blog.php'){echo 'menu__item--current'; } else { echo ''; } ?>"><a href="../blog.php" class="menu__link">Blog</a></li>
            
            <!-- <li class="dropdown menu__item">
                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Mais<b class="caret"></b></a>
                <ul class="dropdown-menu agile_short_dropdown">
                    <li <?php if(basename($_SERVER['PHP_SELF']) == '../blog.php'){echo 'menu__item--current'; } else { echo ''; } ?>><a href="../blog.php" class="menu__link">Blog</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == '../corona-virus.php'){echo 'menu__item--current'; } else { echo ''; } ?>><a href="../corona-virus.php" class="menu__link">COVID-19</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>
</div>
